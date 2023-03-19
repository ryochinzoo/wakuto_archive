<?php get_header(); ?>
<div class="page_head">
	<img src="https://moe-design.com/client/wakuto-recruit-test/wp-content/uploads/2022/10/07pageheader.png" />
	<div class="page_headline">
		お知らせ
	</div>
</div>
<div class="pageWrapper">
	<div class="breadcrumb">
		<a href="<?php echo home_url('/') ?>">トップページ</a><span style="padding: 0 12px;">/</span><a href="<?php echo home_url('/news/') ?>">お知らせ一覧</a><span style="padding: 0 12px;">/</span><?php the_title(); ?>
	</div>
	<div class="news_single_wrapper">
		<div class="single_date_category">
			<div class="single_date">
				<?php echo get_the_date('Y/m/d')?>
			</div>
			<div class="single_cat">
				<?php
				$category = get_the_terms($post->ID, 'news_cat');
				$cat = $category[0];

				//カテゴリー名
				$cat_name = $cat->name;
				?>
				<span class="news_category">
					<?php
						echo $cat_name;
					?>
				</span>
			</div>
		</div>
		<div class="news_single_title">
			<?php the_title(); ?>
		</div>
		<div class="news_single_content">
			<?php the_content(); ?>
		</div>
	</div>
	<div class="news_backto_list">
		<a href="<?php echo home_url('/news/') ?>"><img src="https://moe-design.com/client/wakuto-recruit-test/wp-content/uploads/2022/10/05back-btn.png" /></a>
	</div>
</div>
<?php get_footer(); ?>