<?php get_header(); ?>
<div class="page_head">
	<img src="https://moe-design.com/client/wakuto-recruit-test/wp-content/uploads/2022/10/04pageheader.png" />
	<div class="page_headline">
		ワクトで描ける未来の姿
	</div>
</div>
<div class="pageWrapper">
	<div class="breadcrumb">
		<a href="<?php echo home_url('/') ?>">トップページ</a><span style="padding: 0 12px;">/</span>ワクトで描ける未来の姿
	</div>
	<?php
		$assessment_title_image = get_post_meta($post->ID, 'assessment_program_title_image', true);
		$assessment_program_group = SCF::get('assessment_program_group');
		$other_programs = SCF::get('other_programs');
		$i= 0;
	?>
	<div class="future_page_wrapper">
		<div class="assessment_program">
			<a id="assessment" class="anchor"></a>
			<div class="assessment_program_title_img_wrapper">
				<img src="<?php echo wp_get_attachment_url($assessment_title_image); ?>" />
			</div>
			<div class="assessment_program_contents_wrapper">
				<ul>
					<?php
					foreach ($assessment_program_group as $assessment) {
						if($assessment['assessment_program_title'] !== "" && $assessment['assessment_program_detail'] !== ""){
					?>
					<li class="assessment_headline"><?php echo $assessment['assessment_program_title']; ?></li>
					<li class="assessment_detail"><?php echo nl2br($assessment['assessment_program_detail']); ?></li>
					<?php
						}
					}
					?>
				</ul>
			</div>
		</div>
		<div class="other_programs">
			<?php
				foreach ($other_programs as $other_program) {
					if($other_program['title_image'] !== "" && $other_program['program_detail'] !== "" && $other_program['program_image_big'] !== "" && $other_program['program_image_small_left'] !== "" && $other_program['program_image_small_right'] !== ""){
						$i++;
			?>
			<a id="<?php echo $i==1 ? "followup" : "learning" ?>" class="anchor"></a>
			<div class="other_program_wrapper  <?php echo $i % 2 ? "odd_contents" : "even_contents" ?>">
				<div class="program_relative_wrapper">
					<div class="other_program_contents_wrapper">
						<div class="other_program_title">
							<img src="<?php echo wp_get_attachment_url($other_program['title_image']); ?>" />
						</div>
						<div class="other_program_detail">
							<?php echo nl2br($other_program['program_detail']); ?>
						</div>
					</div>
				</div>
				<div class="program_relative_image_wrapper">
					<div class="other_program_images  <?php echo $i % 2 ? "odd_image" : "even_image" ?>">
						<div class="program_image_big">
							<img src="<?php echo wp_get_attachment_url($other_program['program_image_big']); ?>" />
						</div>
						<div class="program_images_small">
							<div>
								<img src="<?php echo wp_get_attachment_url($other_program['program_image_small_left']); ?>" />
							</div>
							<div>
								<img src="<?php echo wp_get_attachment_url($other_program['program_image_small_right']); ?>" />
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<?php
					}
				}
			?>
		</div>
	</div>
	<a class="normal_button_style" href="<?php echo home_url('/career_path/') ?>">
		<div class="normal_button">
			キャリアパス
		</div>
	</a>
</div>
<?php get_footer(); ?>