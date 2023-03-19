<?php get_header(); ?>
<?php
	$main_field = get_fields();
	$slider_pc_group = SCF::get('slider_pc_group');
	$slider_sp_group = SCF::get('slider_sp_group');
?>
<div class="contentsWrapper">
	<div id="top_wrapper_observed" class="topWrapper">
		<div class="key_visual fade_in_element">
			<div class="sp_erace_non_tablet" id="kv_top">
				<?php
				foreach ($slider_pc_group as $slider_pc) {
					echo wp_get_attachment_image($slider_pc['slider_pc'], 'full');
				}
				?>
				<!--
				<img src="<?php bloginfo('template_directory'); ?>/image/KV1.webp" />
				<img src="<?php bloginfo('template_directory'); ?>/image/KV2.webp" />
				-->
			</div>
			<div class="sponly_block_non_tablet" id="kv_top_sp">
				<?php
				foreach ($slider_sp_group as $slider_sp) {
					echo wp_get_attachment_image($slider_sp['slider_sp'], 'full');
				}
				?>
				<!--
				<img src="<?php bloginfo('template_directory'); ?>/image/KV-sp1.webp" />
				<img src="<?php bloginfo('template_directory'); ?>/image/KV-sp2.webp" />
				-->
			</div>
			<div id="catch_copy" class="catch_copy fade_in_element">
				<img src="<?php bloginfo('template_directory'); ?>/image/fukidashi-06.webp" />
			</div>
		</div>
		
	</div>
	<div class="mainWrapper">
		<div class="roadWrapper sp_erace">
			<div class="top_road">
				<img src="<?php bloginfo('template_directory'); ?>/image/01road1.webp" />
			</div>
		</div>
		<div id="main_wrapper_observed" class="mainContents">
			<div>
				<div class="message_bk sp_erace_non_tablet">
					<img class="fade_in_element" src="https://moe-design.com/client/wakuto-recruit-test/wp-content/uploads/2022/09/01top_bk_message.png" />
				</div>
				<div class="sponly_style">
					<div class="newsList">
						<div class="news_info">
							お知らせ
						</div>
						<div>
							<div class="list-with-bracket">
								<ul>
									<?php $args = array(
									'numberposts' => 3, //表示する記事の数
									'post_type' => 'news' //投稿タイプ名
									// 条件を追加する場合はここに追記
								  );
								  $customPosts = get_posts($args);
								  if($customPosts) : foreach($customPosts as $post) : setup_postdata( $post );
								  ?>
									<li>
										<a style="text-decoration: none; color: #000;" href="<?php the_permalink(); ?>">
											<?php echo get_the_date('Y/m/d')?>
											<span class="news_category"><?php
												if ($terms = get_the_terms($post->ID, 'news_cat')) {
													foreach ( $terms as $term ) {
														echo esc_html($term->name);
													}
												}
												?></span><span class="sp_insert_non_tablet"><br /></span>
											<?php if(mb_strlen($post->post_title) > 32) {
												$title = mb_substr($post->post_title,0,32);
												echo $title . '...';
											} else {
												echo $post->post_title;
											} ?>
										</a>
								  </li>
								  <?php endforeach; ?>
								  <?php else : //記事が無い場合 ?>
								  <p>Not Found</p>
								  <?php endif;
								  wp_reset_postdata(); //クエリのリセット ?>
								</ul>
							</div>
							<div style="text-align: right;">
								<a style="text-decoration:none;color:#000;z-index: 5;" href="<?php echo home_url('/news/') ?>">more</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="applicantA person sp_erace">
				<img src="<?php echo $main_field['applicant_1']; ?>"
					 data-hover="<?php echo $main_field['applicant_1_hover']; ?>"
					 data-src="<?php echo $main_field['applicant_1']; ?>" />
			</div>
			<div class="section_intro">
				<div class="wakuwaku_box_pc fade_in_element">
					<img class="sp_erace" src="https://moe-design.com/client/wakuto-recruit-test/wp-content/uploads/2022/10/01message-copy2.png" />
					<img class="sp_insert" src="https://moe-design.com/client/wakuto-recruit-test/wp-content/uploads/2022/10/01message-copy_sp.png" />
				</div>
				<div class="intro_text fade_in_element">
					<?php echo $main_field['wkwk_koto']; ?>
				</div>
				<a class="normal_button_style fade_in_element" href="<?php echo home_url('/wakuto/') ?>">
					<div class="normal_button">
						ワクトについて
					</div>
				</a>
				<div class="space_200 sp_erace_non_tablet"></div>
				<div class="sp_insert rounded_image_wrapper">
					<div class="round_trimmed rounded_img_middle fade_in_element">
						<img src="<?php echo $main_field['maru_image_1']; ?>" />
					</div>
					<div class="round_trimmed rounded_img_large fade_in_element">
						<img src="<?php echo $main_field['maru_image_2']; ?>" />
					</div>
				</div>
				<div class="sp_erace_non_tablet">
					<div class="round_trimmed rounded_img_middle fade_in_element">
						<img src="<?php echo $main_field['maru_image_1']; ?>" />
					</div>
					<div class="round_trimmed rounded_img_large fade_in_element">
						<img src="<?php echo $main_field['maru_image_2']; ?>" />
					</div>
					<div class="round_trimmed rounded_img_small fade_in_element sp_erace_non_tablet">
						<img src="<?php echo $main_field['maru_image_3']; ?>" />
					</div>
				</div>
				
			</div>
			
			<div class="section_ceo">
				<a href="<?php echo home_url('/wakuto/') ?>#wakuto_ceo_message" style="color: #000;text-decoration: none;">
				<div class="ceo_message_card fade_in_element">
					<div class="ceo_image">
						<img class="sp_erace_non_tablet" src="<?php echo $main_field['CEO_image']; ?>" />
						<img class="sp_insert_non_tablet" src="<?php echo $main_field['CEO_image_sp']; ?>" />
					</div>
					<div class="message_gradient_wrapper">
						<div class="message_box">		
							<div class="message_title">
								<?php echo $main_field['CEO_title']; ?>
							</div>
							<div class="message_body">
								<?php echo $main_field['CEO_message']; ?>
							</div>
						</div>
					</div>
				</div>
				</a>
			</div>
			<div><!--class="space_100" 削除-->
				<div class="applicant_area">
					<div class="applicantB person sp_erace">
						<img src="<?php echo $main_field['applicant_2']; ?>"
							 data-hover="<?php echo $main_field['applicant_2_hover']; ?>"
							 data-src="<?php echo $main_field['applicant_2']; ?>" />
					</div>
				</div>
			</div>
			<div class="section_interview">
				<div class="interview_head_wrapper">
					<div class="interview_head fade_in_element">
						<img src="https://moe-design.com/client/wakuto-recruit-test/wp-content/uploads/2022/09/01hito-title.png" />
					</div>
					<div class="interview_head_text fade_in_element">
						<?php  echo $main_field['wakuto_x_hito']; ?>
					</div>
				</div>
				<?php
				$taxqueryArr[] = array(
					'taxonomy' => 'interview_cat',
					'field' => 'slug',
					'terms' => 'engineer',
					'include_children' => true,
					'operator' => 'AND'
				);
				$engineer = new WP_Query( array(
					'post_type' => 'interview',
					'tax_query' => $taxqueryArr,
					'orderby' => 'date',
					'order' => 'DESC',
					'posts_per_page' => 2,
				));
				$taxquerySalesArr[] = array(
					'taxonomy' => 'interview_cat',
					'field' => 'slug',
					'terms' => 'sales',
					'include_children' => true,
					'operator' => 'AND'
				);
				$sales = new WP_Query( array(
					'post_type' => 'interview',
					'tax_query' => $taxquerySalesArr,
					'orderby' => 'date',
					'order' => 'DESC',
					'posts_per_page' => 1,
				));
				?>
				<div class="interview_wrapper fade_in_element">
					<?php
					if ( $engineer->have_posts() ) :
					while ( $engineer->have_posts() ) :
					$engineer->the_post();
					$profile_photo_url = get_field('profile_photo');
					$interview_name = get_field('interview_name');
					$interview_employed_since = get_field('interview_employed_since');
					$interview_position = get_field('interview_position');
					?>
					<div class="interview_card">
						<a class="person_link" href="<?php the_permalink(); ?>">
							
							<div class="person_card">
								<div class="interview_title">
									<img src="https://moe-design.com/client/wakuto-recruit-test/wp-content/uploads/2022/10/01hito-tagtitle_engineer.png" />
								</div>
								<div class="person_photo">
									<img src="<?php echo $profile_photo_url; ?>" />							
								</div>
								<!-- comment out-->
								<div class="person_headline_wrapper">
									<div class="person_role">
										<?php 
										echo $interview_employed_since."入社 " ?> <br /> <?php echo $interview_position;
										?>
									</div>
									<div class="person_name">
										<?php 
										echo $interview_name;
										?>
									</div>
								</div>
							</div>
						</a>
					</div>
					<?php
					endwhile;
					wp_reset_postdata();
					endif;
					?>
					<?php
					if ( $sales->have_posts() ) :
					while ( $sales->have_posts() ) :
					$sales->the_post();
					$profile_photo_url = get_field('profile_photo');
					$interview_name = get_field('interview_name');
					$interview_employed_since = get_field('interview_employed_since');
					$interview_position = get_field('interview_position');
					?>
					<div class="interview_card">
						<a class="person_link" href="<?php the_permalink(); ?>">
							<div class="person_card">
								<div class="interview_title">
									<img src="https://moe-design.com/client/wakuto-recruit-test/wp-content/uploads/2022/09/01hito-tagtitle_Sales.png" />
								</div>
								<div class="person_photo">
									<img src="<?php echo $profile_photo_url; ?>" />							
								</div>
								<!-- comment out-->
								<div class="person_headline_wrapper">
									<div class="person_role">
										<?php 
										echo $interview_employed_since."入社 " ?> <br /> <?php echo $interview_position;
										?>
									</div>
									<div class="person_name">
										<?php 
										echo $interview_name;
										?>
									</div>
								</div>
							</div>
						</a>
					</div>
					<?php
					endwhile;
					wp_reset_postdata();
					endif;
					?>
				</div>
			</div>
			<div class="space_150 sp_erace"></div>
			<div class="section_career">
				
				<div class="career_wrapper">
					<div class="wakuto_andyou fade_in_element">
						<img src="https://moe-design.com/client/wakuto-recruit-test/wp-content/uploads/2022/09/01anata-titile-1.png" />
					</div>
					<div class="career_path fade_in_element">
						<a href="<?php echo home_url('/career_path/') ?>">
							<div class="career_img">
								<img src="<?php bloginfo('template_directory'); ?>/image/01career-pass.png"
									 data-hover="<?php bloginfo('template_directory'); ?>/image/01career-pass_hover.png"
									 data-src="<?php bloginfo('template_directory'); ?>/image/01career-pass.png"
									 /><!-- -->
							</div>
							<div class="career_text fade_in_element">
								<div class="career_text_img">
									<img src="https://moe-design.com/client/wakuto-recruit-test/wp-content/uploads/2022/09/01anata-career-pass_title.png" />
								</div>
								<div>
									<?php  echo $main_field['career_path']; ?>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="bk_1 sp_erace">
					<img src="https://moe-design.com/client/wakuto-recruit-test/wp-content/uploads/2022/09/01bk-illust_pc1.png" />
				</div>
			</div>
			<div class="applicant_area_B sp_erace">
				<div class="applicantC person">
					<img src="<?php echo $main_field['applicant_3']; ?>"
						 data-hover="<?php echo $main_field['applicant_3_hover']; ?>"
						 data-src="<?php echo $main_field['applicant_3']; ?>" />
				</div>
			</div>
			<div class="space_100"></div>
			<div class="section_programs">
				<div class="middle_field">
					<img class="middle_field_img sp_erace" src="<?php bloginfo('template_directory'); ?>/image/01Square.webp" />
					<div class="programs_wrapper fade_in_element">
						<div class="program_box">
							<a href="<?php echo home_url('/future/') ?>#assessment">
								<div class="program_img">
									<img src="<?php echo $main_field['assessment_image']; ?>" />
								</div>
								<div class="program_white_card">
									<div class="program_title">
										<img src="<?php echo $main_field['assessment_title_image']; ?>" />
									</div>
									<div class="program_text">
										<?php  echo $main_field['assessment_text']; ?>
									</div>
								</div>
							</a>
						</div>
						<div class="program_box">
							<a href="<?php echo home_url('/future/') ?>#followup">
								<div class="program_img">
									<img src="<?php echo $main_field['follow_up_image']; ?>" />
								</div>
								<div class="program_white_card">
									<div class="program_title">
										<img src="<?php echo $main_field['follow_up_title_image']; ?>" />
									</div>
									<div class="program_text">
										<?php echo $main_field['follow_up_text']; ?>
									</div>
								</div>
							</a>
						</div>
						<div class="program_box">
							<a href="<?php echo home_url('/future/') ?>#learning">
								<div class="program_img">
									<img src="<?php echo $main_field['learning_image']; ?>" />
								</div>
								<div class="program_white_card">
									<div class="program_title">
										<img src="<?php echo $main_field['learning_title_image']; ?>" />
									</div>
									<div class="program_text">
										<?php echo $main_field['learning_text']; ?>
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div style="position: relative;">
				<div class="bottom_road sp_erace">
					<img src="<?php bloginfo('template_directory'); ?>/image/01road2.webp" />
				</div>
			</div>
			<div class="section_other_contents">
				<div class="persons_top sp_erace_non_tablet">
					<!--<img src="https://moe-design.com/client/wakuto-recruit-test/wp-content/uploads/2022/10/01bk-illust_pc_max2.png" />-->
				</div>
				<!--<div class="space_100 sp_erace erace_from_1024_1317"></div>-->
				<div class="top_other_contents">
					<div class="applicantD person sp_erace">
						<img src="<?php echo $main_field['applicant_4']; ?>"
							 data-hover="<?php echo $main_field['applicant_4_hover']; ?>"
							 data-src="<?php echo $main_field['applicant_4']; ?>" />
					</div>
					<div class="other_contents_wrapper">
						<div class="flex_wrapper_one">
							<div class="other_content_box fade_in_element">
								<div class="other_content_img">
									<a href="<?php echo home_url('/talk_session/') ?>">
										<img src="<?php bloginfo('template_directory'); ?>/image/01discussion-illust.png"
											 data-hover="<?php bloginfo('template_directory'); ?>/image/01discussion-illust_hover.png"
											 data-src="<?php bloginfo('template_directory'); ?>/image/01discussion-illust.png" />
									</a>
								</div>
								<div class="other_content_title">
									<a href="<?php echo home_url('/talk_session/') ?>">
										<img src="<?php bloginfo('template_directory'); ?>/image/01discussion-title.png" />
									</a>
								</div>
							</div>
							<div class="other_content_box fade_in_element">
								<div class="other_content_img">
									<a href="<?php echo home_url('/office_tour/') ?>">
										<img src="<?php bloginfo('template_directory'); ?>/image/01Office-illust.png"
											 data-hover="<?php bloginfo('template_directory'); ?>/image/01Office-illust_hover.png"
											 data-src="<?php bloginfo('template_directory'); ?>/image/01Office-illust.png" />
									</a>
								</div>
								<div class="other_content_title">
									<a href="<?php echo home_url('/office_tour/') ?>">
										<img src="<?php bloginfo('template_directory'); ?>/image/01Office-title.png" />
									</a>
								</div>
							</div>
							<div class="other_content_box fade_in_element">
								<div class="other_content_img">
									<a href="<?php echo home_url('/fukuri/') ?>">
										<img src="<?php bloginfo('template_directory'); ?>/image/01fukuri-illust.png"
											 data-hover="<?php bloginfo('template_directory'); ?>/image/01fukuri-illust_hover.png"
											 data-src="<?php bloginfo('template_directory'); ?>/image/01fukuri-illust.png" />
									</a>
								</div>
								<div class="other_content_title">
									<a href="<?php echo home_url('/fukuri/') ?>">
										<img src="<?php bloginfo('template_directory'); ?>/image/01fukuri-title.png" />
									</a>
								</div>
							</div>
							<div class="other_content_box fade_in_element">
								<div class="other_content_img">
									<a href="<?php echo home_url('/get_to_know/') ?>#with_photos">
										<img src="<?php bloginfo('template_directory'); ?>/image/01photo-illust.png"
											 data-hover="<?php bloginfo('template_directory'); ?>/image/01photo-illust_hover.png"
											 data-src="<?php bloginfo('template_directory'); ?>/image/01photo-illust.png" />
									</a>
								</div>
								<div class="other_content_title">
									<a href="<?php echo home_url('/get_to_know/') ?>#with_photos">
										<img src="<?php bloginfo('template_directory'); ?>/image/01photo-title.png" />
									</a>
								</div>
							</div>
						</div>
						<div class="space_200 sponly_block_non_tablet"></div>
						<div style="position: relative;">
							<div class="top_entry"  class="fade_in_element">
								<a href="<?php echo home_url('/entry/') ?>">
									<img class="door" src="<?php bloginfo('template_directory'); ?>/image/01entry-illust_pc.png"
											 data-hover="<?php bloginfo('template_directory'); ?>/image/01entry-illust_pc_hover.png"
											 data-src="<?php bloginfo('template_directory'); ?>/image/01entry-illust_pc.png" />
								</a>
							</div>
							<img class="fukidasi" src="<?php bloginfo('template_directory'); ?>/image/01fukidasi.png" />
						</div>
					</div>
					<div class="sponly_block gray_bottom_cover">
						
					</div>
				</div>
				<div class="applicantE person sp_erace">
					<img src="<?php echo $main_field['applicant_5']; ?>"
						 data-hover="<?php echo $main_field['applicant_5_hover']; ?>"
						 data-src="<?php echo $main_field['applicant_5']; ?>" />
				</div>
				<div class="employeeA person">
					<img src="<?php echo $main_field['staff_1']; ?>"
						 data-hover="<?php echo $main_field['staff_1_hover']; ?>"
						 data-src="<?php echo $main_field['staff_1']; ?>" />
				</div>
				<div class="employeeB person">
					<img src="<?php echo $main_field['staff_2']; ?>"
						 data-hover="<?php echo $main_field['staff_2_hover']; ?>"
						 data-src="<?php echo $main_field['staff_2']; ?>" />
				</div>
				<div class="employeeC person">
					<img src="<?php echo $main_field['staff_3']; ?>"
					 data-hover="<?php echo $main_field['staff_3_hover']; ?>"
					 data-src="<?php echo $main_field['staff_3']; ?>" />
				</div>
			</div>
		</div>
	</div>
</div>
<script>

jQuery(function($) {
	function preloadImages () {
		for(var i = 0; i< arguments.length; i++){
            $("<img>").attr("src", arguments[i]);
        }
	}
	preloadImages("<?php bloginfo('template_directory'); ?>/image/01discussion-illust_hover.png",
				  "<?php bloginfo('template_directory'); ?>/image/01Office-illust_hover.png",
				  "<?php bloginfo('template_directory'); ?>/image/01fukuri-illust_hover.png",
				  "<?php bloginfo('template_directory'); ?>/image/01photo-illust_hover.png",
				  "<?php bloginfo('template_directory'); ?>/image/01career-pass_hover.png",
				  "<?php bloginfo('template_directory'); ?>/image/01entry-illust_pc_hover.png",
				  "<?php echo $main_field['applicant_1_hover']; ?>",
				  "<?php echo $main_field['applicant_2_hover']; ?>",
				  "<?php echo $main_field['applicant_3_hover']; ?>",
				  "<?php echo $main_field['applicant_4_hover']; ?>",
				  "<?php echo $main_field['applicant_5_hover']; ?>",
				  "<?php echo $main_field['staff_1_hover']; ?>",
				  "<?php echo $main_field['staff_2_hover']; ?>",
				  "<?php echo $main_field['staff_3_hover']; ?>"
				 );
	
	jQuery(".other_content_box img").mouseover(function(){
		jQuery(this).parent().parent().parent().find(".other_content_img a img").eq(0).attr('src', jQuery(this).parent().parent().parent().find(".other_content_img a img").eq(0).data('hover'));
	}).mouseout(function(){
		jQuery(this).parent().parent().parent().find(".other_content_img a img").eq(0).attr('src', jQuery(this).parent().parent().parent().find(".other_content_img a img").eq(0).data('src'));
	});
	jQuery(".career_path").mouseover(function(){
		jQuery(this).find("img").eq(0).attr('src', jQuery(this).find("img").eq(0).data('hover'));
	}).mouseout(function(){
		jQuery(this).find("img").eq(0).attr('src', jQuery(this).find("img").eq(0).data('src'));
	});
	jQuery(".person").mouseover(function(){
		jQuery(this).find("img").eq(0).attr('src', jQuery(this).find("img").eq(0).data('hover'));
	}).mouseout(function(){
		jQuery(this).find("img").eq(0).attr('src', jQuery(this).find("img").eq(0).data('src'));
	});
	jQuery(".top_entry").mouseover(function(){
		jQuery(this).find("img").attr('src', jQuery(this).find("img").eq(0).data('hover'));
	}).mouseout(function(){
		jQuery(this).find("img").attr('src', jQuery(this).find("img").eq(0).data('src'));
	});
})
</script>
<?php get_footer(); ?>