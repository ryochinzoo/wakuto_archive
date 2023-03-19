<?php get_header(); ?>

<div class="page_head">
	<img src="https://moe-design.com/client/wakuto-recruit-test/wp-content/uploads/2022/10/04pageheader-1.png" />
	<div class="page_headline">
		インタビュー
	</div>
</div>
<div class="pageWrapper">
	<div class="breadcrumb">
		<a href="<?php echo home_url('/') ?>">トップページ</a><span style="padding: 0 12px;">/</span>インタビュー
	</div>
	<a id="interviews_reload"></a>
	<div class="control_buttons_interview">
		<div class="page_buttons_wrapper">
			<div class="buttons_interview">
				<div id="all-button" data-cat="all" class="page_button">
					<img class="sp_erace_non_tablet" src="https://moe-design.com/client/wakuto-recruit-test/wp-content/uploads/2022/10/05all-btn.png" />
					<img class="sp_insert_non_tablet" src="https://moe-design.com/client/wakuto-recruit-test/wp-content/uploads/2022/10/05all-btn-1.png" />
				</div>
				<div id="engineer-button" data-cat="engineer" class="page_button">
					<img src="https://moe-design.com/client/wakuto-recruit-test/wp-content/uploads/2022/10/05engineer-btn.png" />
				</div>
				<div id="sales-button" data-cat="sales" class="page_button">
					<img src="https://moe-design.com/client/wakuto-recruit-test/wp-content/uploads/2022/10/05sales-btn.png" />
				</div>
				<div class="page_button">
					<a href="<?php echo home_url('/talk_session/') ?>"><img src="https://moe-design.com/client/wakuto-recruit-test/wp-content/uploads/2022/10/05discussion-btn1.png" /></a>
				</div>
			</div>
		</div>
	</div>
	<div class="pageContentsWrapper">
		<div id="overlay">
			<div class="cv-spinner">
				<span class="spinner"></span>
			</div>
		</div>
		<div class="interviews">
			
			
			
			<?php wp_reset_postdata(); //クエリのリセット ?>
		</div>
	</div>
</div>
<script>

jQuery(function($) {
	jQuery(document).ajaxSend(function() {
		jQuery("#overlay").fadeIn(300);　
	});
	jQuery("#all-button").addClass('active');
	jQuery("#engineer-button").removeClass('active');
	jQuery("#sales-button").removeClass('active');
	$.ajax({
		type: 'post',
		url: ajaxUrl,//ajaxpagination.ajaxurl // functions.phpで指定した admin-ajax.php のURLが格納された変数
		cache: false,
		dataType: 'html',
		data: {
			'action': 'select_category_ajax_php', // 登録したアクション名
			'cat': 'all',
			'paged': 1,
		},
		success: function(data) {
			$('.interviews').html(data);
		}
	}).done(function() {
      setTimeout(function(){
        $("#overlay").fadeOut(300);
      },500);
    });
	jQuery("#engineer-button").on("click", function(){
		jQuery("#sales-button").removeClass('active');
		jQuery("#all-button").removeClass('active');
		$(this).addClass('active');
		let cat = $(this).data('cat');
		$.ajax({
			type: 'post',
			url: ajaxUrl, // functions.phpで指定した admin-ajax.php のURLが格納された変数
			cache: false,
			dataType: 'html',
			data: {
				'action': 'select_category_ajax_php', // 登録したアクション名
				'cat': cat, // functions.phpでPOST値として渡す
				'page': 1,
			},
			success: function(data) {
				$('.interviews').html(data);
			}
		}).done(function() {
			setTimeout(function(){
				$("#overlay").fadeOut(300);
      },500);
    });
	});
	jQuery("#sales-button").on("click", function(){
		jQuery("#engineer-button").removeClass('active');
		jQuery("#all-button").removeClass('active');
		$(this).addClass('active');
		let cat = $(this).data('cat');
		$.ajax({
			type: 'post',
			url: ajaxUrl, // functions.phpで指定した admin-ajax.php のURLが格納された変数
			cache: false,
			dataType: 'html',
			data: {
				'action': 'select_category_ajax_php', // 登録したアクション名
				'cat': cat, // functions.phpでPOST値として渡す
				'page': 1,
			},
			success: function(data) {
				$('.interviews').html(data);
			}
		}).done(function() {
			setTimeout(function(){
				$("#overlay").fadeOut(300);
			},500);
		});
	});
	jQuery("#all-button").on("click", function(){
		jQuery("#engineer-button").removeClass('active');
		jQuery("#sales-button").removeClass('active');
		$(this).addClass('active');
		let cat = $(this).data('cat');
		$.ajax({
			type: 'post',
			url: ajaxUrl, // functions.phpで指定した admin-ajax.php のURLが格納された変数
			cache: false,
			dataType: 'html',
			data: {
				'action': 'select_category_ajax_php', // 登録したアクション名
				'cat': cat, // functions.phpでPOST値として渡す
				'page': 1,
			},
			success: function(data) {
				$('.interviews').html(data);
			}
		}).done(function() {
			setTimeout(function(){
        $("#overlay").fadeOut(300);
      },500);
    });
	});
	function find_page_number( element, current ) {
		if (element.find('span').data('is-number')) {
			element.find('span').remove();
			return parseInt( element.html() );
		} else {
			if (element.find('span').data('direction') === 'first') {
				return 1;
			} else if (element.find('span').data('direction') === 'next') {
				return current + 1;
			} else if (element.find('span').data('direction') === 'prev') {
				return current - 1;
			} else if (element.find('span').data('direction') === 'last') {
				return parseInt(element.find('span').data('max-num'));
			}
		}
	}
	function find_current_number( element ) {
		element.find('span').remove();
		return parseInt( element.html() );
	}
	jQuery(document).on('click', '.page-numbers', function(event) {
		event.preventDefault();
		$('html,body').animate({
			scrollTop: jQuery('#interviews_reload').offset().top
		});
		let cat = $(this).children(".page_value").data('cat');
		let current = find_current_number( $(this).parent().find(".current").clone() );
		let page = find_page_number( $(this).clone(), current );
		$.ajax({
			type: 'post',
			url: ajaxUrl, // functions.phpで指定した admin-ajax.php のURLが格納された変数
			cache: false,
			dataType: 'html',
			data: {
				'action': 'select_category_ajax_php', // 登録したアクション名
				'cat': cat, // functions.phpでPOST値として渡す
				'page': page,
			},
			success: function(data) {
				$('.interviews').html(data);
			}
		}).done(function() {
			setTimeout(function(){
				$("#overlay").fadeOut(300);
			},500);
    });
	});
})
</script>
<?php get_footer(); ?>