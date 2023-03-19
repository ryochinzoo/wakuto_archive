<?php get_header(); ?>
<div class="page_head">
	<img src="https://moe-design.com/client/wakuto-recruit-test/wp-content/uploads/2022/10/04pageheader.png" />
	<div class="page_headline">
		キャリアパス
	</div>
</div>
<div class="pageWrapper">
	<div class="breadcrumb">
		<a href="<?php echo home_url('/') ?>">トップページ</a><span style="padding: 0 12px;">/</span>キャリアパス
	</div>
	
	<?php
		$engineer_1_button_image = get_post_meta($post->ID, 'engineer_1_button_image', true);
		$engineer_2_button_image = get_post_meta($post->ID, 'engineer_2_button_image', true);
		$sales_button_image = get_post_meta($post->ID, 'sales_button_image', true);
	?>
	<div class="control_buttons_careers">
		<div class="page_buttons_wrapper">
			<div class="buttons_careers">
				<div id="engineer_manage" class="page_button">
					<a href="#pm"><img src="<?php echo wp_get_attachment_url($engineer_1_button_image) ?>" /></a>
				</div>
				<div id="engineer_architecture" class="page_button">
					<a href="#engineer"><img src="<?php echo wp_get_attachment_url($engineer_2_button_image) ?>" /></a>
				</div>
				<div class="page_button">
					<a href="#sales"><img src="<?php echo wp_get_attachment_url($sales_button_image) ?>" /></a>
				</div>
			</div>
		</div>
	</div>
	<?php  
		$engineer_1_title_image = get_post_meta($post->ID, 'engineer_1_title_image', true);
		$engineer_2_title_image = get_post_meta($post->ID, 'engineer_2_title_image', true);
		$sales_title_image = get_post_meta($post->ID, 'sales_title_image', true);
		
		$career_path_image_1 = get_post_meta($post->ID, 'career_image_1', true);
		$career_path_image_2 = get_post_meta($post->ID, 'career_image_2', true);
		$career_path_image_3 = get_post_meta($post->ID, 'career_image_3', true);
		   
		$engineer_1_title_1 = SCF::get('engineer_1_title_1');
		$engineer_1_detail_1 = SCF::get('engineer_1_detail_group_1');
		$engineer_1_title_2 = SCF::get('engineer_1_title_2');
		$engineer_1_detail_2 = SCF::get('engineer_1_detail_group_2');
		$engineer_1_title_3 = SCF::get('engineer_1_title_3');
		$engineer_1_detail_3 = SCF::get('engineer_1_detail_group_3');
		$engineer_1_title_4 = SCF::get('engineer_1_title_4');
		$engineer_1_detail_4 = SCF::get('engineer_1_detail_group_4');
		   
		$engineer_2_title_1 = SCF::get('engineer_2_title_1');
		$engineer_2_detail_1 = SCF::get('engineer_2_detail_group_1');
		$engineer_2_title_2 = SCF::get('engineer_2_title_2');
		$engineer_2_detail_2 = SCF::get('engineer_2_detail_group_2');
		$engineer_2_title_3 = SCF::get('engineer_2_title_3');
		$engineer_2_detail_3 = SCF::get('engineer_2_detail_group_3');
		$engineer_2_title_4 = SCF::get('engineer_2_title_4');
		$engineer_2_detail_4 = SCF::get('engineer_2_detail_group_4');
		   
		$sales_title_1 = SCF::get('sales_title_1');
		$sales_detail_1 = SCF::get('sales_detail_group_1');
		$sales_title_2 = SCF::get('sales_title_2');
		$sales_detail_2 = SCF::get('sales_detail_group_2');
		$sales_title_3 = SCF::get('sales_title_3');
		$sales_detail_3 = SCF::get('sales_detail_group_3');
		$sales_title_4 = SCF::get('sales_title_4');
		$sales_detail_4 = SCF::get('sales_detail_group_4');
		$sales_title_5 = SCF::get('sales_title_5');
		$sales_detail_5 = SCF::get('sales_detail_group_5');
		$sales_title_6 = SCF::get('sales_title_6');
		$sales_detail_6 = SCF::get('sales_detail_group_6');
	?>
	<div class="pageContentsWrapper">
		<a id="pm" class="anchor"></a>
		<div class="career_wrapper">
			<div class="career_title">		
				<img src="<?php echo wp_get_attachment_url($engineer_1_title_image) ?>" alt="">
			</div>
			<div class="career_image">		
				<img src="<?php echo wp_get_attachment_url($career_path_image_1) ?>" alt="">
			</div>
			<div class="career_timeline">
				<ul class="timeline-list">
					<li class="timeline-list-item">
						<div class="headline"><?php echo $engineer_1_title_1; ?></div>
						<div class="detail">
							<ul>
								<?php
									foreach ($engineer_1_detail_1 as $detail) {
										if($detail['engineer_1_detail_1'] !== ""){
								?>
								<li><?php echo $detail['engineer_1_detail_1']; ?></li>
								<?php
										}
									}
								?>
							</ul>
						</div>
					</li>
					<li class="timeline-list-item">
						<div class="headline"><?php echo $engineer_1_title_2; ?></div>
						<div class="detail">
							<ul>
								<?php
									foreach ($engineer_1_detail_2 as $detail) {
										if($detail['engineer_1_detail_2'] !== ""){
								?>
								<li><?php echo $detail['engineer_1_detail_2']; ?></li>
								<?php
										}
									}
								?>
							</ul>
						</div>
					</li>
					<li class="timeline-list-item">
						<div class="headline"><?php echo $engineer_1_title_3; ?></div>
						<div class="detail">
							<ul>
								<?php
									foreach ($engineer_1_detail_3 as $detail) {
										if($detail['engineer_1_detail_3'] !== ""){
								?>
								<li><?php echo $detail['engineer_1_detail_3']; ?></li>
								<?php
										}
									}
								?>
							</ul>
						</div>
					</li>
					<li class="timeline-list-item">
						<div class="headline"><?php echo $engineer_1_title_4; ?></div>
						<div class="detail">
							<ul>
								<?php
									foreach ($engineer_1_detail_4 as $detail) {
										if($detail['engineer_1_detail_4'] !== ""){
								?>
								<li><?php echo $detail['engineer_1_detail_4']; ?></li>
								<?php
										}
									}
								?>
							</ul>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<a id="engineer" class="anchor"></a>
		<div class="career_wrapper">
			<div class="career_title">		
				<img src="<?php echo wp_get_attachment_url($engineer_2_title_image) ?>" alt="">
			</div>
			<div class="career_image">		
				<img src="<?php echo wp_get_attachment_url($career_path_image_2) ?>" alt="">
			</div>
			<div class="career_timeline">
				<ul class="timeline-list">
					<li class="timeline-list-item">
						<div class="headline"><?php echo $engineer_2_title_1; ?></div>
						<div class="detail">
							<ul>
								<?php
									foreach ($engineer_2_detail_1 as $detail) {
										if($detail['engineer_2_detail_1'] !== ""){
								?>
								<li><?php echo $detail['engineer_2_detail_1']; ?></li>
								<?php
										}
									}
								?>
							</ul>
						</div>
					</li>
					<li class="timeline-list-item">
						<div class="headline"><?php echo $engineer_2_title_2; ?></div>
						<div class="detail">
							<ul>
								<?php
									foreach ($engineer_2_detail_2 as $detail) {
										if($detail['engineer_2_detail_2'] !== ""){
								?>
								<li><?php echo $detail['engineer_2_detail_2']; ?></li>
								<?php
										}
									}
								?>
							</ul>
						</div>
					</li>
					<li class="timeline-list-item">
						<div class="headline"><?php echo $engineer_2_title_3; ?></div>
						<div class="detail">
							<ul>
								<?php
									foreach ($engineer_2_detail_3 as $detail) {
										if($detail['engineer_2_detail_3'] !== ""){
								?>
								<li><?php echo $detail['engineer_2_detail_3']; ?></li>
								<?php
										}
									}
								?>
							</ul>
						</div>
					</li>
					<li class="timeline-list-item">
						<div class="headline"><?php echo $engineer_2_title_4; ?></div>
						<div class="detail">
							<ul>
								<?php
									foreach ($engineer_2_detail_4 as $detail) {
										if($detail['engineer_2_detail_4'] !== ""){
								?>
								<li><?php echo $detail['engineer_2_detail_4']; ?></li>
								<?php
										}
									}
								?>
							</ul>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<a id="sales" class="anchor"></a>
		<div class="career_wrapper">
			<div class="career_title">		
				<img src="<?php echo wp_get_attachment_url($sales_title_image) ?>" alt="">
			</div>
			<div class="career_image_sales">		
				<img src="<?php echo wp_get_attachment_url($career_path_image_3) ?>" alt="">
			</div>
			<div class="career_non_timeline">
				<ul class="non_timeline-list">
					<li class="non_timeline-list-item">
						<div class="headline"><?php echo $sales_title_1; ?></div>
						<div class="detail">
							<ul>
								<?php
									foreach ($sales_detail_1 as $detail) {
										if($detail['sales_detail_1'] !== ""){
								?>
								<li><?php echo $detail['sales_detail_1']; ?></li>
								<?php
										}
									}
								?>
							</ul>
						</div>
					</li>
					<li class="non_timeline-list-item">
						<div class="headline"><?php echo $sales_title_2; ?></div>
						<div class="detail">
							<ul>
								<?php
									foreach ($sales_detail_2 as $detail) {
										if($detail['sales_detail_2'] !== ""){
								?>
								<li><?php echo $detail['sales_detail_2']; ?></li>
								<?php
										}
									}
								?>
							</ul>
						</div>
					</li>
					<li class="non_timeline-list-item">
						<div class="headline"><?php echo $sales_title_3; ?></div>
						<div class="detail">
							<ul>
								<?php
									foreach ($sales_detail_3 as $detail) {
										if($detail['sales_detail_3'] !== ""){
								?>
								<li><?php echo $detail['sales_detail_3']; ?></li>
								<?php
										}
									}
								?>
							</ul>
						</div>
					</li>
					<li class="non_timeline-list-item">
						<div class="headline"><?php echo $sales_title_4; ?></div>
						<div class="detail">
							<ul>
								<?php
									foreach ($sales_detail_4 as $detail) {
										if($detail['sales_detail_4'] !== ""){
								?>
								<li><?php echo $detail['sales_detail_4']; ?></li>
								<?php
										}
									}
								?>
							</ul>
						</div>
					</li>
					<li class="non_timeline-list-item">
						<div class="headline"><?php echo $sales_title_5; ?></div>
						<div class="detail">
							<ul>
								<?php
									foreach ($sales_detail_5 as $detail) {
										if($detail['sales_detail_5'] !== ""){
								?>
								<li><?php echo $detail['sales_detail_5']; ?></li>
								<?php
										}
									}
								?>
							</ul>
						</div>
					</li>
					<li class="non_timeline-list-item">
						<div class="headline"><?php echo $sales_title_6; ?></div>
						<div class="detail">
							<ul>
								<?php
									foreach ($sales_detail_6 as $detail) {
										if($detail['sales_detail_6'] !== ""){
								?>
								<li><?php echo $detail['sales_detail_6']; ?></li>
								<?php
										}
									}
								?>
							</ul>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>