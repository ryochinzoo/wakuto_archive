<?php get_header(); ?>
<div class="page_head_entry">
	<img src="https://moe-design.com/client/wakuto-recruit-test/wp-content/uploads/2022/10/08pageheader.png" />
	<div class="page_headline">
		応募フォーム
	</div>
</div>
<div class="pageWrapper">
	<div class="breadcrumb">
		<a href="<?php echo home_url('/') ?>">トップページ</a><span style="padding: 0 12px;">/</span>応募フォーム
	</div>
	<div class="contactform_wrapper">
		<div class="form_head_wrapper">
			<div class="form_head_info">
				制作実績のある方は、制作サイトのURLもしくはポートフォリオをアップロードしたURLをご記入ください。
			</div>
			<div class="form_head_notice">
				＊必須項目
			</div>
		</div>
		<?php echo do_shortcode('[contact-form-7 id="115" title="コンタクトフォーム 1"]'); ?>
	</div>
</div>
<?php get_footer(); ?>