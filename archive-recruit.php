<?php get_header(); ?>
<script>
jQuery(function($) {
	jQuery("#new-graduate-button").on("click", function(){
		jQuery("#list-mid-career").css({"display": "none"});
		jQuery("#list-new-graduate").css({"display": "block"});
	});
	jQuery("#mid-career-button").on("click", function(){
		jQuery("#list-mid-career").css({"display": "block"});
		jQuery("#list-new-graduate").css({"display": "none"});
	});
})
</script>
<div class="page_head">
	<img src="https://moe-design.com/client/wakuto-recruit-test/wp-content/uploads/2022/10/06pageheader.png" />
	<div class="page_headline">
		募集情報
	</div>
</div>
<div class="pageWrapper">
	<div class="breadcrumb">
		<a href="<?php echo home_url('/') ?>">トップページ</a><span style="padding: 0 12px;">/</span>募集情報
	</div>
	<div class="control_buttons_recruit">
		<div class="page_buttons_wrapper">
			<div class="buttons_recruit">
				<a href="#list-new-graduate-anchor">
					<div id="new-graduate-button" class="page_button">
						<img src="https://moe-design.com/client/wakuto-recruit-test/wp-content/uploads/2022/09/06New-graduate-btn.png" />
					</div>
				</a>
				<a href="#list-mid-career-anchor">
					<div id="mid-career-button" class="page_button">
						<img src="https://moe-design.com/client/wakuto-recruit-test/wp-content/uploads/2022/09/06Mid-career-btn.png" />
					</div>
				</a>
				<div class="page_button">
					<a href="<?php echo home_url('/fukuri/') ?>"><img src="https://moe-design.com/client/wakuto-recruit-test/wp-content/uploads/2022/09/06Welfare-btn.png" /></a>
				</div>
			</div>
		</div>
	</div>
	<a id="list-new-graduate-anchor" class="anchor"></a>
	<div class="pageContentsWrapper">
		<div id="list-new-graduate" class="recruit_job">
			<div class="job_headline">
				<img class="sp_erace" src="https://moe-design.com/client/wakuto-recruit-test/wp-content/uploads/2022/09/06archive-title_new-graduate.png" />
				<img class="sp_insert" src="https://moe-design.com/client/wakuto-recruit-test/wp-content/uploads/2022/10/06archive-title_new-graduate_sp.png" />
			</div>
			<?php
				$newGrad = new WP_Query(
					array(
						'post_type' => 'recruit',
						'orderby' => 'date',
						'order' => 'DESC',
						'tax_query' => array(
							array (
								'taxonomy' => 'recruit_cat',
								'field' => 'slug',
								'terms' => array(
									'new-graduate',
								),
							)
						),
						'posts_per_page' => -1,
					)
				);
				if ( $newGrad->have_posts() ) :
					while ( $newGrad->have_posts() ) :
						$newGrad->the_post();
						?>
					
						<a class="job_link_wrapper" href="<?php the_permalink(); ?>">
							<div class="job_link_text">
								<?php the_title_attribute(); ?>
							</div>
							<div class="job_link_arrow">
								<img src="https://moe-design.com/client/wakuto-recruit-test/wp-content/uploads/2022/09/06arrow.png" />
							</div>
						</a>
					
			<?php
					endwhile;
					wp_reset_postdata();
				endif;
			?>
		</div>
		<a id="list-mid-career-anchor" class="anchor"></a>
		<div id="list-mid-career" class="recruit_job">
			<div class="job_headline">
				<img class="sp_erace" src="https://moe-design.com/client/wakuto-recruit-test/wp-content/uploads/2022/09/06archive-title_Mid-career.png" />
				<img class="sp_insert" src="https://moe-design.com/client/wakuto-recruit-test/wp-content/uploads/2022/10/06archive-title_Mid-career_sp.png" />
			</div>
			<?php
				$midCarrier = new WP_Query(
					array(
						'post_type' => 'recruit',
						'orderby' => 'date',
						'order' => 'DESC',
						'tax_query' => array(
							array(
								'taxonomy' => 'recruit_cat',
								'field' => 'slug',
								'terms' => array(
									'mid-carrier',
								),
							),
						),
						'posts_per_page' => -1,
					)
				);
				if ( $midCarrier->have_posts() ) :
					while ( $midCarrier->have_posts() ) :
						$midCarrier->the_post();
						?>
						<a class="job_link_wrapper" href="<?php the_permalink(); ?>">
							<div class="job_link_text">
								<?php the_title_attribute(); ?>
							</div>
							<div class="job_link_arrow">
								<img src="https://moe-design.com/client/wakuto-recruit-test/wp-content/uploads/2022/09/06arrow.png" />
							</div>
						</a>
						<?php
					endwhile;
					wp_reset_postdata();
				endif;
			?>
		</div>
		</div>
</div>
<?php get_footer(); ?>