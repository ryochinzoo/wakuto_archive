<?php get_header(); ?>
<div class="pageWrapperOfficeTour">
	<div class="tour_contents">
		<div class="tour_top">
			<?php 
				$tour_top_image = SCF::get('tour_top_image');
				$tour_top_description = SCF::get('tour_top_description');
				$building = SCF::get('building');
				$top_image_left_bottom = SCF::get('top_image_left_bottom');
				$top_image_right_bottom = SCF::get('top_image_right_bottom');
				$tour_details = SCF::get('tour_group');
				$points = SCF::get('point_group');
			?>
			<div class="tour_top_wrapper">
				<div class="tour_headline_wrapper">
					<div class="tour_top_illustration-1">
						<img src="https://moe-design.com/client/wakuto-recruit-test/wp-content/uploads/2022/10/04of-illust01.png" />
					</div>
					<div class="tour_top_headline">
						<?php echo wp_get_attachment_image($tour_top_image, 'full'); ?>
					</div>
					<div class="tour_top_description">
						<?php echo $tour_top_description; ?>
					</div>
					<div class="tour_top_illustration-2">
						<img src="https://moe-design.com/client/wakuto-recruit-test/wp-content/uploads/2022/10/04of-illust02.png" />
					</div>
				</div>
				<div class="building">
					<?php echo wp_get_attachment_image($building, 'full'); ?>
				</div>
			</div>
			<div class="tour_image_wrapper">
				<div class="tour_image">
					<?php echo wp_get_attachment_image($top_image_left_bottom, 'full'); ?>
				</div>
				<div class="tour_image">
					<?php echo wp_get_attachment_image($top_image_right_bottom, 'full'); ?>
				</div>
			</div>
		</div>
		<?php
			$i = 0;
			foreach ($tour_details as $tour_detail) {
				$i++;
		?>
		<div class="tour_area">
			<div class="tour_main_wrapper">
				<div class="detail_area">
					<div class="illustration-<?php echo $i ?>">
						<?php echo wp_get_attachment_image($tour_detail['illustration'], 'full'); ?>
					</div>
					<div class="detail_wrapper">
						<div class="detail_title">
							<?php echo wp_get_attachment_image($tour_detail['tour_title_image'], 'full'); ?>
						</div>
						<div class="detail_description">
							<?php echo $tour_detail['tour_description']; ?>
						</div>
					</div>
					<div class="ground_figure">
						<?php echo wp_get_attachment_image($tour_detail['ground_figure'], 'full'); ?>
					</div>
				</div>
				<div class="image_area">
					<?php echo wp_get_attachment_image($tour_detail['image_right'], 'full'); ?>
				</div>
			</div>
			<div class="tour_image_wrapper">
				<div class="tour_image">
					<?php echo wp_get_attachment_image($tour_detail['image_left_bottom'], 'full'); ?>
				</div>
				<div class="tour_image">
					<?php echo wp_get_attachment_image($tour_detail['image_center_bottom'], 'full'); ?>
				</div>
				<div class="tour_image">
					<?php echo wp_get_attachment_image($tour_detail['image_right_bottom'], 'full'); ?>
				</div>
			</div>
		</div>
		<?php
			}
		?>
		<?php
			$i = 0;
			foreach ($points as $point) {
				$i++;
		?>
		<div class="point_area">
			<div class="point_wrapper">
				<div class="point_head_image">
					<?php echo wp_get_attachment_image($point['point_head_image'], 'full'); ?>
				</div>
				<div class="point_title">
					<span><?php echo $point['point_title']; ?></span>
				</div>
				<div class="point_description">
					<?php echo nl2br($point['point_description']); ?>
				</div>
			</div>
		</div>
		<?php
			}
		?>
	</div>
</div>
<?php get_footer(); ?>