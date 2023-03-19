<?php

function remove_menus() {
		remove_menu_page( 'edit.php' ); // 投稿.
		remove_menu_page( 'edit-comments.php' ); // コメント.
}
add_action( 'admin_menu', 'remove_menus', 999 );

global $wp_query;

// ajaxを使用する際に取得するURLをグローバル変数に渡す
function my_ajax_url() {
	
?>
  <script>var ajaxUrl = '<?php echo admin_url('admin-ajax.php'); ?>';</script>
<?php
}
add_action('wp_head', 'my_ajax_url', 1);
function select_category_ajax_php(){

	$paged = $_POST['page'] ? $_POST['page'] : 1;
	if ($_POST['cat'] == 'all') { // 全件表示
		$taxqueryArr[] = array(
			'taxonomy' => 'interview_cat',
			'field' => 'slug',
			'terms' => array( 'sales', 'engineer' ),
			'include_children' => true,
			'operator' => 'AND'
		);
		$interviews = new WP_Query( array(
			'post_type' => 'interview',
			'orderby' => 'date',
			'order' => 'DESC',
			'posts_per_page' => 15,
			'paged' => $paged,
		));
	} elseif ($_POST['cat'] == 'sales')  { // sales カテゴリー表示
		$taxqueryArr[] = array(
			'taxonomy' => 'interview_cat',
			'field' => 'slug',
			'terms' => $_POST['cat'],
			'include_children' => true,
			'operator' => 'AND'
		);
		$interviews = new WP_Query( array(
			'post_type' => 'interview',
			'tax_query' => $taxqueryArr,
			'orderby' => 'date',
			'order' => 'DESC',
			'posts_per_page' => 15,
			'paged' => $paged,
		));
	} else { // engineer カテゴリー表示
		$taxqueryArr[] = array(
			'taxonomy' => 'interview_cat',
			'field' => 'slug',
			'terms' => $_POST['cat'],
			'include_children' => true,
			'operator' => 'AND'
		);
		$interviews = new WP_Query( array(
			'post_type' => 'interview',
			'tax_query' => $taxqueryArr,
			'orderby' => 'date',
			'order' => 'DESC',
			'posts_per_page' => 15,
			'paged' => $paged,
		));
	}
	$GLOBALS['wp_query'] = $interviews;
	$max_num_pages = $interviews->max_num_pages;
	if ( $interviews->have_posts() ) :
	while ( $interviews->have_posts() ) :
	$interviews->the_post();
	$profile_photo_url = get_field('profile_photo');
	$interview_name = get_field('interview_name');
	$interview_employed_since = get_field('interview_employed_since');
	$interview_position = get_field('interview_position');
?>
<?php
	$term = "";
	if ($terms = get_the_terms($interviews->ID, 'interview_cat')) {
		$term =  esc_html($terms[0]->slug);
	}
?>
<a class="interviewee" href="<?php the_permalink(); ?>">
	<div class="interviewee_wrapper">
		<div class="interviewee_photo">
			<img src="<?php echo $profile_photo_url; ?>" />
		</div>
		<div class="interviewee_title">
			<?php 
	echo $interview_employed_since."入社 ".$interview_position;
			?>
			<?php //the_title_attribute(); ?>
		</div>
		<div class="interviewee_name">
			<?php 
	echo $interview_name;
			?>
			<?php //the_title_attribute(); ?>
		</div>
	</div>
</a>

<?php
	endwhile;
	wp_reset_postdata();
	endif;
?>
<div class="pagination_wrapper">
	<div class="pagination">
		<?php
	$blog_directory_uri = get_bloginfo('template_directory');
	$nav_next = '<span class="page_value" data-is-number="0" data-direction="next" data-cat="'. $_POST['cat'] .'"></span><img src="'. $blog_directory_uri .'/image/nav-next.png">';
	$nav_prev = '<span class="page_value" data-is-number="0" data-direction="prev" data-cat="'. $_POST['cat'] .'"></span><img src="'. $blog_directory_uri .'/image/nav-back.png">';
	if ($interviews->max_num_pages > 1) {
		if(get_query_var('paged') != 1) {
		?>
		<a class="page-numbers first">
			<span class="page_value" data-is-number="0" data-direction="first" data-cat="<?php echo $_POST['cat']; ?>"></span>
			<img src="<?php bloginfo('template_directory'); ?>/image/nav-backlast.png">
		</a>
		<?php
		}
		echo paginate_links(array(
			'type' => 'plain',
			'base' => get_pagenum_link(1) . '%_%',
			'format' => '?paged=%#%',
			'current' => max(1, $paged),
			'total' => $interviews->max_num_pages,  //max_num_pagesの設定
			'prev_text' => $nav_prev,
			'next_text' => $nav_next,
			'show_all' => false,
			'before_page_number' => '<span class="page_value" data-is-number="1" data-cat="'. $_POST['cat'] .'"></span>',
		));
		if(get_query_var('paged') != $interviews->max_num_pages) {
		?>
		<a class="page-numbers last">
			<span class="page_value" data-is-number="0" data-direction="last" data-max-num="<?php echo $interviews->max_num_pages ?>" data-cat="<?php echo $_POST['cat']; ?>"></span>
			<img src="<?php bloginfo('template_directory'); ?>/image/nav-nextlast.png">
		</a>
		<?php
		}
	} elseif ($interviews->max_num_pages == 1) {
		?>
		<span aria-current="page" class="page-numbers current">1</span>
		<?php
	}
		?>
	</div>
</div>
<?php
	die();
}
add_action('wp_ajax_select_category_ajax_php', 'select_category_ajax_php');
add_action('wp_ajax_nopriv_select_category_ajax_php', 'select_category_ajax_php');
function my_redirect($redirect_url){
	if(is_single()){$redirect_url = false;}
	else{return $redirect_url;}
}
add_filter('redirect_canonical','my_redirect');
function new_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');
function new_excerpt_mblength($length) {
     return 110; //抜粋する文字数
}
add_action('template_redirect', 'my404_to_homepage', 9999);
function my404_to_homepage(){
    if(!is_404())
        return;
    wp_redirect(home_url(), 301);
    exit;
}
add_filter('excerpt_mblength', 'new_excerpt_mblength');
function add_upload_mines($mines) {
  $mines['webp'] = 'image/webp';
  return $mines;
}
add_filter('mime_types', 'add_upload_mines');
ini_set('max_execution_time', 300);
function is_parent_slug() {
	$post_type = get_post_type();
	if ( $post_type )
	{
		$post_type_data = get_post_type_object( $post_type );
		$post_type_slug = $post_type_data->rewrite['slug'];
		return $post_type_slug;
	}
}
add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'interview', /* カスタム投稿タイプスラッグ */
    array(
      'labels' => array( /* 表示させる文字 */
		'name' => 'インタビュー',
        'singular_name' => 'インタビュー投稿',
        'all_items' => 'インタビュー投稿一覧',
        'add_new' => 'インタビュー投稿追加',
        'add_new_item' => 'インタビュー投稿の追加',
        'edit_item' => 'インタビュー投稿の編集',
        'new_item' => 'インタビュー投稿追加',
        'view_item' => 'インタビュー投稿を表示',
        'search_items' => 'インタビュー投稿を検索',
        'not_found' =>  'インタビュー投稿が見つかりません',
        'not_found_in_trash' => 'ゴミ箱内にインタビュー投稿が見つかりませんでした。',
        'parent_item_colon' => ''
      ),
      'public' => true, /* 管理画面にメニューを作る */
      'show_ui' => true, /* 管理画面にメニューを作る */
      'query_var' => true,
      'hierarchical' => true, /* 固定ページみたいに記事間の親子関係をつくる */
      'supports' => array('title','editor','thumbnail'), /* 管理画面で登録できる項目 */
	  'menu_position' => 5, /* 管理画面のメニューの位置（5,10,15・・・） */
      'has_archive' => true, /* アーカイブページを持つ */
      'rewrite' => array( /* slug:スラッグ名　with_front:アーカイブページURLに/archive/をつける */
        'slug' => 'interview','with_front' => false)
    )
  );
	
  register_taxonomy('interview_cat','interview', array(
      'hierarchical' => true,
      'labels' => array( /* 表示させる文字 */
		  'name' => 'インタビューカテゴリ',
          'singular_name' => 'インタビューカテゴリ',
          'search_items' =>  'インタビューカテゴリを検索',
          'all_items' => 'すべてのインタビューカテゴリ',
          'parent_item' => '親分類',
          'parent_item_colon' => '親分類：',
          'edit_item' => '編集',
          'update_item' => '更新',
          'add_new_item' => 'インタビューカテゴリを追加',
		  'new_item_name' => 'カテゴリ名',
      ),
      'show_ui' => true, /* 管理画面にメニューを作る */
      'rewrite' => array(
          'slug' => 'interview','with_front' => true,'hierarchical' => true)
  ));
	register_post_type( 'gallery', /* カスタム投稿タイプスラッグ */
					   array(
						   'labels' => array( /* 表示させる文字 */
							   'name' => '写真館',
							   'singular_name' => '写真館の投稿',
							   'all_items' => '写真館の投稿一覧',
							   'add_new' => '写真館の投稿追加',
							   'add_new_item' => '写真館の投稿の追加',
							   'edit_item' => '写真館の投稿の編集',
							   'new_item' => '写真館の投稿追加',
							   'view_item' => '写真館の投稿を表示',
							   'search_items' => '写真館の投稿を検索',
							   'not_found' =>  '写真館の投稿が見つかりません',
							   'not_found_in_trash' => 'ゴミ箱内に写真館の投稿が見つかりませんでした。',
							   'parent_item_colon' => ''
						   ),
						   'public' => true, /* 管理画面にメニューを作る */
						   'show_ui' => true, /* 管理画面にメニューを作る */
						   'query_var' => true,
						   'hierarchical' => true, /* 固定ページみたいに記事間の親子関係をつくる */
						   'supports' => array('title','editor','thumbnail'), /* 管理画面で登録できる項目 */
						   'menu_position' => 5, /* 管理画面のメニューの位置（5,10,15・・・） */
						   'has_archive' => true, /* アーカイブページを持つ */
						   'rewrite' => array( /* slug:スラッグ名　with_front:アーカイブページURLに/archive/をつける */
							   'slug' => 'gallery','with_front' => false)
					   )
					  );
	register_post_type( 'news', /* カスタム投稿タイプスラッグ */
    array(
      'labels' => array( /* 表示させる文字 */
		'name' => 'お知らせ',
		'singular_name' => 'お知らせ投稿',
        'all_items' => 'お知らせ投稿一覧',
        'add_new' => 'お知らせ投稿追加',
        'add_new_item' => 'お知らせ投稿の追加',
        'edit_item' => 'お知らせ投稿の編集',
        'new_item' => 'お知らせ投稿追加',
        'view_item' => 'お知らせ投稿を表示',
        'search_items' => 'お知らせ投稿を検索',
        'not_found' =>  'お知らせ投稿が見つかりません',
        'not_found_in_trash' => 'ゴミ箱内にお知らせ投稿が見つかりませんでした。',
        'parent_item_colon' => ''
      ),
      'public' => true, /* 管理画面にメニューを作る */
      'show_ui' => true, /* 管理画面にメニューを作る */
      'query_var' => true,
      'hierarchical' => true, /* 固定ページみたいに記事間の親子関係をつくる */
      'supports' => array('title','editor','thumbnail'), /* 管理画面で登録できる項目 */
      'menu_position' =>6, /* 管理画面のメニューの位置（5,10,15・・・） */
      'has_archive' => true, /* アーカイブページを持つ */
      'rewrite' => array( /* slug:スラッグ名　with_front:アーカイブページURLに/archive/をつける */
        'slug' => 'news','with_front' => false)
    )
  );
	register_taxonomy('news_cat','news', array(
      'hierarchical' => true,
      'labels' => array( /* 表示させる文字 */
          'name' => 'お知らせカテゴリ',
          'singular_name' => 'お知らせカテゴリ',
          'search_items' =>  'お知らせカテゴリを検索',
          'all_items' => 'すべてのお知らせカテゴリ',
          'parent_item' => '親分類',
          'parent_item_colon' => '親分類：',
          'edit_item' => '編集',
          'update_item' => '更新',
          'add_new_item' => 'お知らせカテゴリを追加',
          'new_item_name' => '名前',
      ),
      'show_ui' => true, /* 管理画面にメニューを作る */
      'rewrite' => array(
          'slug' => 'news','with_front' => true,'hierarchical' => true)
  ));
	
 register_post_type( 'recruit', /* カスタム投稿タイプスラッグ */
    array(
      'labels' => array( /* 表示させる文字 */
		'name' => 'リクルート',
        'singular_name' => 'リクルート投稿',
        'all_items' => 'リクルート投稿一覧',
        'add_new' => 'リクルート投稿追加',
        'add_new_item' => 'リクルート投稿の追加',
        'edit_item' => 'リクルート投稿の編集',
        'new_item' => 'リクルート投稿追加',
        'view_item' => 'リクルート投稿を表示',
        'search_items' => 'リクルート投稿を検索',
        'not_found' =>  'リクルート投稿が見つかりません',
        'not_found_in_trash' => 'ゴミ箱内にリクルート投稿が見つかりませんでした。',
        'parent_item_colon' => ''
      ),
      'public' => true, /* 管理画面にメニューを作る */
      'show_ui' => true, /* 管理画面にメニューを作る */
      'query_var' => true,
      'hierarchical' => true, /* 固定ページみたいに記事間の親子関係をつくる */
      'supports' => array('title','editor','thumbnail'), /* 管理画面で登録できる項目 */
      'menu_position' =>7, /* 管理画面のメニューの位置（5,10,15・・・） */
      'has_archive' => true, /* アーカイブページを持つ */
      'rewrite' => array( /* slug:スラッグ名　with_front:アーカイブページURLに/archive/をつける */
        'slug' => 'recruit','with_front' => false)
    )
  );
	register_taxonomy('recruit_cat','recruit', array(
      'hierarchical' => true,
      'labels' => array( /* 表示させる文字 */
          'name' => 'リクルートカテゴリ',
          'singular_name' => 'リクルートカテゴリ',
          'search_items' =>  'リクルートカテゴリを検索',
          'all_items' => 'すべてのリクルートカテゴリ',
          'parent_item' => '親分類',
          'parent_item_colon' => '親分類：',
          'edit_item' => '編集',
          'update_item' => '更新',
          'add_new_item' => 'リクルートカテゴリを追加',
          'new_item_name' => '名前',
      ),
      'show_ui' => true, /* 管理画面にメニューを作る */
      'rewrite' => array(
          'slug' => 'recruit','with_front' => true,'hierarchical' => true)
  ));
}
	function register_wakuto_scripts () {
	  	wp_register_script( 'top_js', get_template_directory_uri(). "/js/top.js", array('jquery'), false, true );
	}
	add_action('wp_loaded', 'register_wakuto_scripts');
	

	function init_scripts()
	{
	 	wp_enqueue_script("jquery");
		wp_register_style('slick-css', get_template_directory_uri() .'/css/slick.css');
		wp_register_style('slick-theme-css', get_template_directory_uri() .'/css/slick-theme.css');
		wp_register_style('modaal-min-css', get_template_directory_uri() .'/css/modaal.min.css');
		wp_enqueue_script('slick-min-js', get_template_directory_uri().'/js/slick.min.js');	
		wp_enqueue_script('gsap-min-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.1/TweenMax.min.js', array(), false, true );	
		wp_enqueue_script('modaal-min-js', get_template_directory_uri().'/js/modaal.min.js');		
		wp_enqueue_script('mousestalker-js', get_template_directory_uri().'/js/mousestalker.js');	
		// Enqueue all CSS & JS files
		wp_enqueue_style('slick-css');
		wp_enqueue_style('slick-theme-css');
		wp_enqueue_style('modaal-min-css');
		wp_enqueue_script('slick-min-js');
		wp_enqueue_script('gsap-min-js');
		wp_enqueue_script('modaal-min-js');
		wp_enqueue_script('mousestalker-js');
		
		if( is_front_page()) {
			wp_enqueue_script( 'top_js' );
			$translation_array = array( 'templateUrl' => get_template_directory_uri());
			//after wp_enqueue_script
			wp_localize_script( 'top_js', 'object_name', $translation_array );
		}
	}
	add_action('wp_enqueue_scripts', 'init_scripts');
	
?>