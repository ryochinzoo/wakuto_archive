<?php get_header(); ?>
<script>
jQuery(function($) {
	var flg = "close"
	jQuery(".read_more").on("click", function(){
		
		jQuery(".hide_for_read_more").slideToggle();//.css({"display": "block"});
		if (flg == "close") {
			jQuery(this).text('最新のみ表示');
			flg = "open";
		} else {
			jQuery(this).text('もっと見る');
			flg = "close";
			jQuery('html,body').animate({scrollTop: jQuery("#with_photos").offset().top});
		}
	});
	jQuery(".gallery-list").modaal({
		fullscreen: 'true',
		before_open: function() {
			$('html').css('overflow-y', 'hidden');
		},
		after_close: function() {
			$('html').css('overflow-y', 'scroll');
		}
	});
})
</script>
<div class="page_head">
	<img src="https://moe-design.com/client/wakuto-recruit-test/wp-content/uploads/2022/10/04pageheader-1.png" />
	<div class="page_headline">
		ワクトをもっと知る
	</div>
</div>
<div class="pageWrapper">
	<div class="breadcrumb">
		<a href="<?php echo home_url('/') ?>">トップページ</a><span style="padding: 0 12px;">/</span>ワクトをもっと知る
	</div>
	<?php
		$qa_title_image = SCF::get('qa_title_image');
		$qas = SCF::get('qa_group');
	?>
	<div class="get_to_know_wrapper">
		<a id="with_numbers" class="anchor"></a>
		<div class="know_with_number">
			<div class="know_with_head">
				<div class="title">
					<?php echo wp_get_attachment_image($qa_title_image, 'full'); ?>	
				</div>
				<div class="book sp_erace_non_tablet">
					<img src="https://moe-design.com/client/wakuto-recruit-test/wp-content/uploads/2022/10/04illust-no-wakuto.png" />
				</div>
			</div>
			<div class="contents">
				<?php
				foreach ($qas as $qa) {
					$i++;
					if($qa['question'] !== "" && $qa['answer'] !== "" ){
				?>
				<div class="qa_wrapper">
					<div class="question">
						<div class="head">Q</div>
						
						<div style="margin-top: 7px;">
							<?php echo $qa['question']; ?>
						</div>
					</div>
					<div class="answer">
						<div class="head">A</div>
						<div style="margin-top: 7px;">
							<?php echo $qa['answer']; ?>
						</div>
					</div>
				</div>
				<?php
					}
				}
				?>
			</div>
		</div>
		<?php
			$photo_title_image = SCF::get('photo_title_image');
		?>
		<a id="with_photos" class="anchor"></a>
		<div class="know_with_photo">
			<div class="know_width_head">
				<div class="title">
					<?php echo wp_get_attachment_image($photo_title_image, 'full'); ?>	
				</div>
				<div class="contents">
					<div class="gallery_wrapper">
						<?php
						$interviews = new WP_Query(
							array(
								'post_type' => 'gallery',
								'orderby' => 'date',
								'order' => 'DESC',
								/*'tax_query' => array(
							array (
								'taxonomy' => 'recruit_cat',
								'field' => 'slug',
								'terms' => array(
									'new-graduate',
								),
							)
						),*/
								'posts_per_page' => -1,
							)
						);
						
						$i = 0;
						if ( $interviews->have_posts() ) :
						while ( $interviews->have_posts() ) :
						$interviews->the_post();
						$video_or_img = SCF::get('contents_type');
						$image_group = SCF::get('image_group');
						$video = SCF::get('gallery_video');
						$video_thumb = SCF::get('video_thumbnail');
						$i++;
						?>
						<div class="gallery_contents <?php if($i > 12) { echo 'hide_for_read_more'; } ?>">
							
							<?php 
							if($video_or_img === "img"){
							?>
							<a href="#gallery-<?php echo $i; ?>" class="gallery-list" data-gallery="gallery-<?php echo $i; ?>">
								<div class="gallery_thumb">
									<?php echo wp_get_attachment_image($image_group[0]['gallery_images'], 'full'); ?>	
								</div>
								<div class="gallery_title">
									<?php echo get_the_date('Y年m月'); ?>
									<?php the_title_attribute(); ?>
								</div>
							</a>
							<section id="gallery-<?php echo $i; ?>" class="hide_area">
								<?php foreach($image_group as $image){
								?>
								<p class="modal_image">
									<?php echo wp_get_attachment_image($image['gallery_images'], 'full'); ?>
								</p>
								<?php 
							} 
								?>
							</section>

							<?php	
							} else {
								$video_url = esc_url(wp_get_attachment_url($video));

							?>
							<div class="gallery_thumb thumb_video">
								<?php if(!empty($video_thumb)): ?>
									<video controls="controls" preload="none" poster="<?php echo wp_get_attachment_url($video_thumb); ?>" muted onclick="this.play()">
										<source src="<?php echo $video_url; ?>" type="video/mp4">
									</video>
								<?php else: ?>
									<video controls="controls" preload="none" poster="https://moe-design.com/client/wakuto-recruit-test/wp-content/uploads/2022/10/video_thumbnail.png" muted onclick="this.play()">
										<source src="<?php echo $video_url; ?>" type="video/mp4">
									</video>
								<?php endif; ?>
							</div>
							<div class="gallery_title">
								<?php echo get_the_date('Y年m月'); ?>
								<?php the_title_attribute(); ?>
							</div>
							<?php
							}
							?>
							
						</div>
						<?php
						endwhile;
						wp_reset_postdata();
						endif;
						?>
					</div>
					<?php if($i > 12): ?>
						<div class="read_more">
							もっと見る
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>