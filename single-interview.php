<?php get_header(); ?>
<script>
jQuery(function($) {
	jQuery("em").parent().css( "margin-block-end", "-0.8em" );
})
</script>
<div class="page_head">
	<img src="https://moe-design.com/client/wakuto-recruit-test/wp-content/uploads/2022/10/04pageheader-1.png" />
	<div class="page_headline">
		インタビュー
	</div>
</div>
<div class="pageWrapper">
	<div class="breadcrumb">
		<a href="<?php echo home_url('/') ?>">トップページ</a><span style="padding: 0 12px;">/</span><a href="<?php echo home_url('/interview/') ?>">インタビュー</a><span style="padding: 0 12px;">/</span><?php the_title(); ?>
	</div>
	<div class="interview_wrapper">
		<div class="interview_profile">
			<div class="interview_profile_photo">
				<img src="<?php the_field("profile_photo"); ?>" />
			</div>
			<div class="interview_profile_contents">
				<div class="profile_headline">
					Profile
				</div>
				<table>
					<tr>
						<th>名前</th>
						<td><?php the_field("interview_name"); ?></td>
					</tr>
					<tr>
						<th>入社年</th>
						<td><?php the_field("interview_employed_since"); ?></td>
					</tr>
					<tr>
						<th>職種</th>
						<td><?php the_field("interview_position"); ?></td>
					</tr>
					<tr>
						<th>担当業務</th>
						<td><?php the_field("interview_role"); ?></td>
					</tr>
					<tr>
						<th>前職</th>
						<td><?php the_field("interview_former_job"); ?></td>
					</tr>
				</table>
			</div>
		</div>
		<div class="interview_contents">
			<?php the_content(); ?>
		</div>
		<div class="interview_backto_list">
			<a href="<?php echo home_url('/interview/') ?>"><img src="https://moe-design.com/client/wakuto-recruit-test/wp-content/uploads/2022/10/05back-btn.png" /></a>
			<a href="<?php echo home_url('/talk_session/') ?>"><img src="https://moe-design.com/client/wakuto-recruit-test/wp-content/uploads/2022/10/05discussion-btn2.png" /></a>
		</div>
	</div>
</div>
<?php get_footer(); ?>