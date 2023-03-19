<!doctype html>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=yes">
		<link rel="stylesheet" href="<?php bloginfo("stylesheet_url") ?>" media="all" />
		<?php if(is_front_page()): ?>
			<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/frontpage.css" type="text/css" />
		<?php elseif(is_page('entry')): ?>
			<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/entry.css" type="text/css" />
		<?php elseif(is_page('wakuto')): ?>
			<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/wakuto.css" type="text/css" />
		<?php elseif(is_page('service')): ?>
			<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/service.css" type="text/css" />
		<?php elseif(is_page('fukuri')): ?>
			<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fukuri.css" type="text/css" />
		<?php elseif(is_page('future')||is_page('career_path')): ?>
			<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/future.css" type="text/css" />
		<?php elseif(is_post_type_archive('recruit') || is_parent_slug() === 'recruit' || is_page('fukuri')): ?>
			<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/recruit.css" type="text/css" />
		<?php elseif(is_post_type_archive('news') || is_parent_slug() === 'news'): ?>
			<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/news.css" type="text/css" />
		<?php elseif(is_post_type_archive('interview') || is_parent_slug() === 'interview' || is_page('get_to_know')): ?>
			<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/hito.css" type="text/css" />
		<?php elseif(is_page('talk_session')): ?>
			<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/talk_session.css" type="text/css" />
		<?php elseif(is_page('office_tour')): ?>
			<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/office_tour.css" type="text/css" />
		<?php endif; ?>
		<?php wp_head(); ?>
	</head>
<body class="<?php echo is_front_page()? 'top_body' : 'page_body' ?>">
	<div id="cursor"></div>
	<div id="follower"></div>
	<a id="wakuwaku"></a>
	<header class="fade_in_element">
		<div id="header_sp" class="header_wrapper">
			<div class="header_logo">
				<div class="header_logo_img">
					<a class="logo_link_top" href="<?php echo home_url('/') ?>">
						<img id="sp_logo_image" src="<?php bloginfo('template_directory'); ?>/image/00header-logo-blk.png" />
					</a>
				</div>
				<div class="logo_sub_sp"><a class="logo_link_sp" href="<?php echo home_url('/') ?>">採用サイト</a></div>
				<div class="burger_wrapper">
					<div class="burger_menu">
						 <span></span>
					</div>
				</div>
			</div>
			
			<div class="navigation_sp">
				<ul>
					<li class="main_menu" ><b><a class="main_menu_text" href="<?php echo home_url('/') ?>">TOP</a></b></li>
					<li class="main_menu"><b><a class="main_menu_text" href="<?php echo home_url('/wakuto/') ?>">ワクトとは</a></b></li>
					<!--
					<li><a href="<?php echo home_url('/wakuto/') ?>#wakuto_company_message">会社メッセージ</a></li>
					<li><a href="<?php echo home_url('/wakuto/') ?>#wakuto_ceo_message">社長メッセージ</a></li>
					<li><a href="<?php echo home_url('/wakuto/') ?>#wakuto_about_lts">Ltsについて</a></li>
					<li><a href="<?php echo home_url('/wakuto/') ?>#wakuto_org">組織図</a></li>
					-->
					
					<li class="main_menu"><b><a class="main_menu_text" href="<?php echo home_url('/service/') ?>">事業紹介</a></b></li>
					<div class="with_sub">
						<li class="main_menu main_with_sub"><b>描ける未来</b></li>
						<ul>
							<li><a href="<?php echo home_url('/career_path/') ?>">キャリアパス</a></li>
							<li><a href="<?php echo home_url('/future/') ?>#assessment">評価・人事制度</a></li>
							<li><a href="<?php echo home_url('/future/') ?>#followup">フォロー体制</a></li>
							<li><a href="<?php echo home_url('/future/') ?>#learning">グループワーク・勉強会</a></li>
						</ul>	
					</div>
					<div class="with_sub">
						<li class="main_menu main_with_sub"><b>「人」</b></li>
						<ul>
							<li><a href="<?php echo home_url('/interview/') ?>">インタビュー</a></li>
							<li><a href="<?php echo home_url('/talk_session/') ?>">座談会</a></li>
							<li><a href="<?php echo home_url('/get_to_know/') ?>#with_numbers">数字で知るワクト</a></li>
							<li><a href="<?php echo home_url('/get_to_know/') ?>#with_photos">写真で知るワクト</a></li>
						</ul>
					</div>
					<div class="with_sub">
						<li class="main_menu main_with_sub"><b>募集情報</b></li>
						<ul>
							<li><a href="<?php echo home_url('/recruit/') ?>">募集職種</a></li>
							<li><a href="<?php echo home_url('/fukuri/') ?>">福利厚生</a></li>
							<li><a href="<?php echo home_url('/office_tour/') ?>">オフィスツアー</a></li>
						</ul>
					</div>
					

					<li class="main_menu"><b><a href="<?php echo home_url('/entry/') ?>">エントリー</a></b></li>
				</ul>
			</div>
		</div>
	<?php if(is_front_page()): ?>
			<div id="header_top" class="header_wrapper">
				<div class="header_logo">
					<div class="header_logo_img">
						<a class="logo_link_top" href="<?php echo home_url('/') ?>">
							<img id="top_logo_image" src="<?php bloginfo('template_directory'); ?>/image/00header-logo-wht.png" />
						</a>
					</div>
					<div class="logo_sub"><a class="logo_link_top" href="<?php echo home_url('/') ?>">採用サイト</a></div>
				</div>
				<div class="navigation_top">
					<ul>
						<li class="main_menu current_page" ><a class="main_menu_text" href="<?php echo home_url('/') ?>">TOP</a></li>
						<li class="main_menu"><a class="main_menu_text" href="<?php echo home_url('/wakuto/') ?>">ワクトとは</a>
							<ul>
								<li><a href="<?php echo home_url('/wakuto/') ?>#wakuto_company_message">会社メッセージ</a></li>
								<li><a href="<?php echo home_url('/wakuto/') ?>#wakuto_ceo_message">社長メッセージ</a></li>
								<li><a href="<?php echo home_url('/wakuto/') ?>#wakuto_about_lts">LTSについて</a></li>
								<li><a href="<?php echo home_url('/wakuto/') ?>#wakuto_org">組織と役職</a></li>
							</ul>
						</li>
						<li class="main_menu"><a class="main_menu_text" href="<?php echo home_url('/service/') ?>">事業紹介</a></li>
						<li class="main_menu"><span class="main_menu_text">描ける未来</span>
							<ul>
								<li><a href="<?php echo home_url('/career_path/') ?>">キャリアパス</a></li>
								<li><a href="<?php echo home_url('/future/') ?>#assessment">評価・人事制度</a></li>
								<li><a href="<?php echo home_url('/future/') ?>#followup">フォロー体制</a></li>
								<li><a href="<?php echo home_url('/future/') ?>#learning">グループワーク・勉強会</a></li>
							</ul>
						</li>
						
						<li class="main_menu"><span class="main_menu_text">「人」</span>
							<ul>
								<li><a href="<?php echo home_url('/interview/') ?>">インタビュー</a></li>
								<li><a href="<?php echo home_url('/talk_session/') ?>">座談会</a></li>
								<li><a href="<?php echo home_url('/get_to_know/') ?>#with_numbers">数字で知るワクト</a></li>
								<li><a href="<?php echo home_url('/get_to_know/') ?>#with_photos">写真で知るワクト</a></li>
							</ul>
						</li>
						<li class="main_menu"><span class="main_menu_text">募集情報</span>
							<ul>
								<li><a href="<?php echo home_url('/recruit/') ?>">募集職種</a></li>
								<li><a href="<?php echo home_url('/fukuri/') ?>">福利厚生</a></li>
								<li><a href="<?php echo home_url('/office_tour/') ?>">オフィスツアー</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<a href="<?php echo home_url('/entry/') ?>">
					<div class="entry_button_top">
						<div class="entry_button_top_text">
							ENTRY
						</div>
					</div>
				</a>
			</div>
		
	<?php else: ?>
			<div id="header_page" class="header_wrapper">
				<div class="header_logo">
					<div class="header_logo_img">
						<a class="logo_link_page" href="<?php echo home_url('/') ?>">
							<img id="top_logo_image" src="<?php bloginfo('template_directory'); ?>/image/00header-logo-blk.png" />
						</a>
					</div>
					<div class="logo_sub">
						<a class="logo_link_page" href="<?php echo home_url('/') ?>">採用サイト</a>
					</div>
				</div>
				<div class="navigation_page">
					<ul>
						<li class="main_menu" ><a class="main_menu_text" href="<?php echo home_url('/') ?>">TOP</a></li>
						<li class="main_menu <?php if(is_page('wakuto')) echo 'current_page'; ?>"><a class="main_menu_text" href="<?php echo home_url('/wakuto/') ?>">ワクトとは</a>
							<ul>
								<li><a href="<?php echo home_url('/wakuto/') ?>#wakuto_company_message">会社メッセージ</a></li>
								<li><a href="<?php echo home_url('/wakuto/') ?>#wakuto_ceo_message">社長メッセージ</a></li>
								<li><a href="<?php echo home_url('/wakuto/') ?>#wakuto_about_lts">Ltsについて</a></li>
								<li><a href="<?php echo home_url('/wakuto/') ?>#wakuto_org">組織と役職</a></li>
							</ul>
						</li>
						<li class="main_menu <?php if(is_page('service')) echo 'current_page'; ?>"><a class="main_menu_text" href="<?php echo home_url('/service/') ?>">事業紹介</a></li>
						<li class="main_menu <?php if(is_page('career_path') || is_page('future') ) echo 'current_page'; ?>"><span class="main_menu_text">描ける未来</span>
							<ul>
								<li><a href="<?php echo home_url('/career_path/') ?>">キャリアパス</a></li>
								<li><a href="<?php echo home_url('/future/') ?>#assessment">評価・人事制度</a></li>
								<li><a href="<?php echo home_url('/future/') ?>#followup">フォロー体制</a></li>
								<li><a href="<?php echo home_url('/future/') ?>#learning">グループワーク・勉強会</a></li>
							</ul>
						</li>
						<li class="main_menu <?php if(is_post_type_archive('interview') || is_parent_slug() === 'interview'  || is_page('talk_session') || is_page('get_to_know') ) echo 'current_page'; ?>"><span class="main_menu_text">「人」</span>
							<ul>
								<li><a href="<?php echo home_url('/interview/') ?>">インタビュー</a></li>
								<li><a href="<?php echo home_url('/talk_session/') ?>">座談会</a></li>
								<li><a href="<?php echo home_url('/get_to_know/') ?>#with_numbers">数字で知るワクト</a></li>
								<li><a href="<?php echo home_url('/get_to_know/') ?>#with_photos">写真で知るワクト</a></li>
							</ul>
						</li>
						<li class="main_menu <?php if(is_post_type_archive('recruit') || is_parent_slug() === 'recruit' || is_page('fukuri')) echo 'current_page'; ?>"><span class="main_menu_text">募集情報</span>
							<ul>
								<li><a href="<?php echo home_url('/recruit/') ?>">募集職種</a></li>
								<li><a href="<?php echo home_url('/fukuri/') ?>">福利厚生</a></li>
								<li><a href="<?php echo home_url('/office_tour/') ?>">オフィスツアー</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<a href="<?php echo home_url('/entry/') ?>">
					<div class="entry_button_top">
						<div class="entry_button_top_text">
							ENTRY
						</div>
					</div>
				</a>
			</div>
	<?php endif; ?>
	</header>