<?php get_header(); ?>
<div class="page_head">
	<img src="https://moe-design.com/client/wakuto-recruit-test/wp-content/uploads/2022/10/04pageheader-1.png" />
	<div class="page_headline">
		座談会
	</div>
</div>
<div class="pageWrapper">
	<div class="breadcrumb">
		<a href="<?php echo home_url('/') ?>">トップページ</a><span style="padding: 0 12px;">/</span>座談会
	</div>
	<div class="talk_session_wrapper">
		<div class="talk_session_contents">
			<?php the_content(); ?>
		</div>
		<div class="interview_backto_list">
			<a href="<?php echo home_url('/interview/') ?>"><img src="https://moe-design.com/client/wakuto-recruit-test/wp-content/uploads/2022/11/05interview-back-btn.png" /></a>
		</div>
	</div>
</div>
<?php get_footer(); ?>