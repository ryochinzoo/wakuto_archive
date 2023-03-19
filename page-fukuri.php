<?php get_header(); ?>
<div class="page_head">
	<img src="https://moe-design.com/client/wakuto-recruit-test/wp-content/uploads/2022/10/06pageheader.png" />
	<div class="page_headline">
		福利厚生
	</div>
</div>
<div class="pageWrapper">
	<div class="breadcrumb">
		<a href="<?php echo home_url('/') ?>">トップページ</a><span style="padding: 0 12px;">/</span>福利厚生
	</div>
	<?php
		$fukuri_contents = SCF::get('fukuri');
		$i= 0;
	?>
	<div class="fukuri_wrapper">
		<?php
			foreach ($fukuri_contents as $fukuri) {
				$i++;
				if($fukuri['fukuri_title_image'] !== "" && $fukuri['fukuri_description'] !== "" && $fukuri['comment'] !== "" && $fukuri['comment_image'] !== ""){
		?>
		<div class="fukuri_contents">
			<div class="fukuri_title">
				<?php echo wp_get_attachment_image($fukuri['fukuri_title_image'], 'full'); ?>
			</div>
			<div class="fukuri_description">
				<?php echo nl2br($fukuri['fukuri_description']) ?>
			</div>
			
			<div class="fukuri_comment_wrapper <?php echo $i % 2 ? "odd_contents" : "even_contents" ?>">
				<div class="comment_image">
					<?php echo wp_get_attachment_image($fukuri['comment_image'], 'large'); ?>
				</div>
				<div class="comment <?php echo $i % 2 ? "odd_comment" : "even_comment" ?>">
					<?php echo ($fukuri['comment']) ?>
				</div>
			</div>
		</div>
		<div class="space_150"></div>
		<?php
			   }
		   }
		?>
	</div>
</div>
<?php get_footer(); ?>