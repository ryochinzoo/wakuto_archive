<?php get_header(); ?>
<div class="page_head">
	<img src="https://moe-design.com/client/wakuto-recruit-test/wp-content/uploads/2022/10/03pageheader.png" />
	<div class="page_headline">
		事業紹介
	</div>
</div>
<div class="pageWrapper">
	<div class="breadcrumb">
		<a href="<?php echo home_url('/') ?>">トップページ</a><span style="padding: 0 12px;">/</span>事業紹介
	</div>
	<div class="serviceWrapper">
		<?php
			$services = SCF::get('services');
		   	$overview = SCF::get('services_overview');
			$i= 0;
		 ?>
		<div class="service_overview">
			<?php echo $overview; ?>
		</div>
		<?php
			foreach ($services as $service) {
				$i++;
				if($service['service_name'] !== "" && $service['service_description'] !== "" && $service['service_image'] !== ""){
		?>
		<div class="service_contents">
			<div class="service_contents_wrapper <?php echo $i % 2 ? "odd_contents" : "even_contents" ?>">
				<div class="service_title">
					<?php echo wp_get_attachment_image($service['service_name'], 'full'); ?>
				</div>
				<div class="service_description">
					<?php echo nl2br($service['service_description']) ?>
				</div>
			</div>
			<div class="service_image <?php echo $i % 2 ? "odd_image" : "even_image" ?>">
				<?php echo wp_get_attachment_image($service['service_image'], 'large'); ?>
			</div>
		</div>
		<div class="space_200 service_space"></div>
		<?php
			   }
		   }
		?>
	</div>
</div>
<?php get_footer(); ?>