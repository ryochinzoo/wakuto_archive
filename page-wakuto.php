<?php get_header(); ?>
<div class="page_head">
	<img src="https://moe-design.com/client/wakuto-recruit-test/wp-content/uploads/2022/10/02pageheader.png" />
	<div class="page_headline">
		ワクトとは
	</div>
</div>
<div class="pageWrapperWakuto">
	<div class="breadcrumb">
		<a href="<?php echo home_url('/') ?>">トップページ</a><span style="padding: 0 12px;">/</span>ワクトとは
	</div>
	<div class="wakuto_intro_wrapper">
		<a id="wakuto_company_message" class="anchor"></a>
		<div class="wakuto_intro_visual">
			<img src="https://moe-design.com/client/wakuto-recruit-test/wp-content/uploads/2022/10/02image1.jpg" />
		</div>
		<div class="wakuto_intro_text">
			<?php the_field('introduction'); ?>
		</div>
	</div>
	<a id="wakuto_ceo_message" class="anchor"></a>
	<div class="wakuto_ceo_wrapper">
		<div class="wakuto_ceo_contents_wrapper">
			<div class="wakuto_ceo_contents">
				<div class="wakuto_ceo_image">
					<img src="<?php the_field('ceo_img'); ?>" />
				</div>
			</div>
			<div class="ceo_text_wrapper">
				<div class="wakuto_ceo_text">
					<div class="wakuto_ceo_headline">
						<img src="<?php the_field('ceo_title'); ?>" />
					</div>
				</div>
				<div class="wakuto_ceo_body">
					<?php the_field('ceo_body'); ?>
				</div>
				<div class="ceo_signature">
					<img src="https://moe-design.com/client/wakuto-recruit-test/wp-content/uploads/2022/09/千葉幹夫.png" />
				</div>
			</div>
		</div>
	</div>
		<a id="wakuto_about_lts" class="anchor"></a>
	<div class="space_100 sp_erace"></div>
	<div class="space_100 sponly_block"></div>
	<div class="wakuto_lts">
		<div class="wakuto_lts_wrapper">
			<div class="wakuto_lts_image">
				<img src="<?php the_field('lts_img'); ?>" />
			</div>
			<div class="wakuto_lts_text">
				<div class="wakuto_lts_headline">
					<img src="<?php the_field('lts_title_img'); ?>" />
				</div>
				<div class="wakuto_lts_body">
					<?php the_field('lts_body'); ?>
				</div>
			</div>
		</div>
	</div>
		<a id="wakuto_org" class="anchor"></a>
	<div class="space_100"></div>
	<div class="wakuto_org">
		<div class="wakuto_org_headline">
			<img src="<?php the_field('org_title_img'); ?>" />
		</div>
		<div class="wakuto_org_image">
			<img src="<?php the_field('org_img'); ?>" />
		</div>
		<div class="wakuto_org_body">
			<?php the_field('org_body'); ?>
		</div>
	</div>
	<div class="space_100"></div>
</div>
<?php get_footer(); ?>