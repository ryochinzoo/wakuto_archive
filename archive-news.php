<?php get_header(); ?>
<div class="page_head">
	<img src="https://moe-design.com/client/wakuto-recruit-test/wp-content/uploads/2022/10/07pageheader.png" />
	<div class="page_headline">
		お知らせ一覧
	</div>
</div>
<div class="pageWrapper">
	<div class="breadcrumb">
		<a href="<?php echo home_url('/') ?>">トップページ</a><span style="padding: 0 12px;">/</span>お知らせ一覧
	</div>
	<div class="news_wrapper">
		<ul>
			<?php 
			$paged = get_query_var('paged') ? get_query_var('paged') : 1;
			$args = array(
				//'numberposts' => 10, 表示する記事の数
				'post_type' => 'news', //投稿タイプ名
				'posts_per_page' => 15,
				'paged' => $paged,
				// 条件を追加する場合はここに追記
			);
		   //$customPosts = get_posts($args);
		   $my_query = new WP_Query($args);
		   $max_num_pages = $my_query->max_num_pages;
		   
		   if ($my_query->have_posts()) :
		   		while ($my_query->have_posts()) :
		   			$my_query->the_post();
			?>
			<li>
				<div class="news_headline_wrapper">
					<span><?php the_time('Y/m/d'); ?></span>
					<div class="news_category_wrapper">
						<span class="news_category"><?php
							if ($terms = get_the_terms($my_query->ID, 'news_cat')) {
								foreach ( $terms as $term ) {
									echo esc_html($term->name);
								}
							}
							?></span><span class="sp_insert_non_tablet"><br /></span>
					</div>
				</div>
				<div class="news_detail_wrapper">
					<div class="news_title">
						<?php the_title(); ?>
					</div>
					<div class="news_detail">
						<?php the_excerpt();
						?>
						<?php 
							if(!empty( get_the_content() )) {
						?>
						<div class="see_more">
							<a href="<?php echo the_permalink(); ?>">続きを読む</a>
						</div>
						<?php
							}
						?>
					</div>
				</div>
				
			</li>
			<?php endwhile; ?>
			<?php else : //記事が無い場合 ?>
			<p>Not Found</p>
			<?php endif; ?>
		</ul>
	</div>
	<div class="pagination_wrapper">
		<div class="pagination">
			<?php
			$blog_directory_uri = get_bloginfo('template_directory');
			$nav_next = '<img src="'. $blog_directory_uri .'/image/nav-next.png">';
			$nav_prev = '<img src="'. $blog_directory_uri .'/image/nav-back.png">';
			if ($my_query->max_num_pages > 1) {
				if(get_query_var('paged') != 0) {
			?>
			<a class="page-numbers first" href="https://moe-design.com/client/wakuto-recruit-test/news/">
				<img src="<?php bloginfo('template_directory'); ?>/image/nav-backlast.png">
			</a>
			<?php
				}
				echo paginate_links(array(
					'type' => 'plain',
					'base' => get_pagenum_link(1) . '%_%',
					'format' => '?paged=%#%',
					'current' => max(1, $paged),
					'total' => $my_query->max_num_pages,  //max_num_pagesの設定
					'prev_text' => $nav_prev,
					'next_text' => $nav_next,
					'show_all' => false,
				));
				if(get_query_var('paged') != $my_query->max_num_pages) {
			?>
			<a class="page-numbers last" href="https://moe-design.com/client/wakuto-recruit-test/news/?paged=<?php echo $my_query->max_num_pages ?>">
				<img src="<?php bloginfo('template_directory'); ?>/image/nav-nextlast.png">
			</a>
			<?php
				}
			} elseif ($my_query->max_num_pages == 1) {
			?>
			<span aria-current="page" class="page-numbers current">1</span>
			<?php
			}
			?>
		</div>
	</div>
	<?php wp_reset_postdata(); //クエリのリセット ?>
</div>
<?php get_footer(); ?>