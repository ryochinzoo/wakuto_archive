<div id="footer_wrapper_observed" class="<?php if(is_front_page() || is_page('entry')){ echo 'footer_wrapper_top';} else{echo 'footer_wrapper_page';} ?>">
	<?php if(is_front_page()): ?>
	<div class="footer_field sponly_block_non_tablet sp_styling_top_footer">
		
		<div class="footer_field_contents">
			<div class="footer_top_logo fade_in_element">
				<img src="https://moe-design.com/client/wakuto-recruit-test/wp-content/uploads/2022/09/00footer-logo.png" />
			</div>
			<div class="sns_feed fade_in_element">
				<div id="feed_facebook">
					<div class="fb-page" data-href="https://www.facebook.com/Wakuto.co" data-tabs="timeline" data-width="500" data-height="400" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/Wakuto.co" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Wakuto.co">株式会社Wakuto</a></blockquote></div>
				</div>
				<div id="feed_twitter">
					<a class="twitter-timeline" 
					   data-width="500" 
					   data-height="400" 
					   data-theme="light" 
					   href="https://twitter.com/wakuwaku_toyou?ref_src=twsrc%5Etfw">
						Tweets by wakuwaku_toyou</a> 
					<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
				</div>
				<div id="feed_wantedly">
					<a class="wantedly-company-feeds" data-company-id="wakuto0910" data-height="400" data-width="500" href="https://www.wantedly.com/companies/wakuto0910"></a> <script> (function(d, s, id) { var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "https://platform.wantedly.com/company_feeds/widget.js"; fjs.parentNode.insertBefore(js, fjs); }(document, "script", "wantedly-comp-feeds-wjs")); </script>
				</div>
			</div>
		</div>
	</div>
		<div class="footer_field sp_erace_non_tablet">
			<div class="middle_field">
				<img class="middle_field_img" src="<?php bloginfo('template_directory'); ?>/image/01Square.webp" />
			</div>
			<div class="footer_field_contents">
				<div class="footer_top_people">
					<img src="https://moe-design.com/client/wakuto-recruit-test/wp-content/uploads/2022/09/00footer-illust.png" />
				</div>
				<div class="footer_top_logo fade_in_element">
					<img src="https://moe-design.com/client/wakuto-recruit-test/wp-content/uploads/2022/09/01top-sns-logo.png" />
				</div>
				<div class="sns_feed fade_in_element">
					<div id="feed_facebook" onmouseover="mouseStalkerDisplayNone()" onmouseout="mouseStalkerGetBack()">
						<div class="fb-page" data-href="https://www.facebook.com/Wakuto.co" data-tabs="timeline" data-width="500" data-height="400" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/Wakuto.co" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Wakuto.co">株式会社Wakuto</a></blockquote></div>
					</div>
					<div id="feed_twitter" onmouseover="mouseStalkerDisplayNone()" onmouseout="mouseStalkerGetBack()">
						<a class="twitter-timeline" 
						   data-width="500" 
						   data-height="400" 
						   data-theme="light" 
						   href="https://twitter.com/wakuwaku_toyou?ref_src=twsrc%5Etfw">
							Tweets by wakuwaku_toyou</a> 
						<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
					</div>
					<div id="feed_wantedly" onmouseover="mouseStalkerDisplayNone()" onmouseout="mouseStalkerGetBack()">
						<a class="wantedly-company-feeds" data-company-id="wakuto0910" data-height="400" data-width="500" href="https://www.wantedly.com/companies/wakuto0910"></a> <script> (function(d, s, id) { var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "https://platform.wantedly.com/company_feeds/widget.js"; fjs.parentNode.insertBefore(js, fjs); }(document, "script", "wantedly-comp-feeds-wjs")); </script>
					</div>
				</div>
			</div>
		</div>
	<?php elseif(is_page('entry')): ?>
	<?php else: ?>
		<div class="footer_field sp_erace">
			<div class="white_field_footer">
				<!--<img src="https://moe-design.com/client/wakuto-recruit-test/wp-content/uploads/2022/10/00footer-bk-wht1.png" />-->
			
				<div class="footer_field_contents">
					<div class="footer_page_people">
						<img src="https://moe-design.com/client/wakuto-recruit-test/wp-content/uploads/2022/09/00CVarea-illust.png" />
					</div>
					<div class="footer_top_joinus fade_in_element">
						<img src="https://moe-design.com/client/wakuto-recruit-test/wp-content/uploads/2022/09/00CVarea_title.png" />
					</div>
					<div class="footer_buttons fade_in_element">
						<a style="text-decoration:none;" href="<?php echo home_url('/recruit/') ?>">
							<div class="footer_button_white">
								<span class="whiteSpaceNoWrap">募集情報</span>
							</div>
						</a>
						<a style="text-decoration:none;" href="<?php echo home_url('/entry/') ?>">
							<div class="footer_button_gradient">
								ENTRY
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="footer_field sponly_block sp_styling_page_footer">
			<div class="white_field_footer">
				<div class="footer_field_contents">
					<div class="footer_top_joinus fade_in_element">
						<img src="https://moe-design.com/client/wakuto-recruit-test/wp-content/uploads/2022/09/00CVarea_title.png" />
					</div>
					<div class="footer_buttons fade_in_element">
						<a style="text-decoration:none;" href="<?php echo home_url('/recruit/') ?>">
							<div class="footer_button_white">
								募集情報
							</div>
						</a>
						<a style="text-decoration:none;" href="<?php echo home_url('/entry/') ?>">
							<div class="footer_button_gradient">
								ENTRY
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>
	
	<div class="<?php echo is_front_page()? 'footer_contents_top' : 'footer_contents' ?> sp_erace">
		<div class="footer_contents_wrapper">
			<div class="corporate_info">
				<a class="logo_link_top" href="<?php echo home_url('/') ?>"><img src="https://moe-design.com/client/wakuto-recruit-test/wp-content/uploads/2022/09/00footer-logo.png" /></a>
				株式会社ワクト<br />
				<div class="corporate_address">
					〒107-0051　東京都港区元赤坂1丁目3-13<br />
					赤坂センタービルディング 14階
				</div>
				<div class="corporate_site_link">
					<a href="https://wakuto.net/" target="_blank"><span>コーポレートサイト</span><img src="https://moe-design.com/client/wakuto-recruit-test/wp-content/uploads/2022/09/Icon-open-external-link.png" /></a>
				</div>
			</div>
			<div class="footer_sitemap">
				<div class="footer_sitemap_wrapper">
					<div class="footer_sitemap_column">
						<ul class="footer_list">
							<li class="footer_list_item"><a href="<?php echo home_url('/') ?>">TOP</a></li>
						</ul>
						<ul class="footer_list">
							<li class="footer_list_item"><a href="<?php echo home_url('/wakuto/') ?>">ワクトとは</a></li>
							<li class="footer_list_item">
								<ul class="footer_list_sub">
									<li class="footer_list_sub_item"><a href="<?php echo home_url('/wakuto/') ?>#wakuto_company_message">会社メッセージ</a></li>
									<li class="footer_list_sub_item"><a href="<?php echo home_url('/wakuto/') ?>#wakuto_ceo_message">社長メッセージ</a></li>
									<li class="footer_list_sub_item"><a href="<?php echo home_url('/wakuto/') ?>#wakuto_about_lts">LTSについて</a></li>
									<li class="footer_list_sub_item"><a href="<?php echo home_url('/wakuto/') ?>#wakuto_org">組織と役職</a></li>
								</ul>
							</li>
						</ul>
						<ul class="footer_list">
							<li class="footer_list_item"><a href="<?php echo home_url('/service/') ?>">事業紹介</a></li>
						</ul>
					</div>
					
					<div class="footer_sitemap_column">
						<ul class="footer_list">
							<li class="footer_list_item">描ける未来</li>
							<li class="footer_list_item">
								<ul class="footer_list_sub">
									<li class="footer_list_sub_item"><a href="<?php echo home_url('/career_path/') ?>">キャリアパス</a></li>
									<li class="footer_list_sub_item"><a href="<?php echo home_url('/future/') ?>#assessment">評価・人事制度</a></li>
									<li class="footer_list_sub_item"><a href="<?php echo home_url('/future/') ?>#followup">フォロー体制</a></li>
									<li class="footer_list_sub_item"><a href="<?php echo home_url('/future/') ?>#learning">グループワーク・勉強会</a></li>
								</ul>
							</li>
						</ul>
					
						<ul class="footer_list">
							<li class="footer_list_item">「人」</li>
							<li class="footer_list_item">
								<ul class="footer_list_sub">
									<li class="footer_list_sub_item"><a href="<?php echo home_url('/interview/') ?>">インタビュー</a></li>
									<li class="footer_list_sub_item"><a href="<?php echo home_url('/talk_session/') ?>">座談会</a></li>
									<li class="footer_list_sub_item"><a href="<?php echo home_url('/get_to_know/') ?>#with_numbers">数字で知るワクト</a></li>
									<li class="footer_list_sub_item"><a href="<?php echo home_url('/get_to_know/') ?>#with_photos">写真で知るワクト</a></li>
								</ul>
							</li>
						</ul>
					</div>
					<div class="footer_sitemap_column">
						<ul class="footer_list">
							<li class="footer_list_item">募集情報</li>
							<li class="footer_list_item">
								<ul class="footer_list_sub">
									<li class="footer_list_sub_item"><a href="<?php echo home_url('/recruit/') ?>">募集職種</a></li>
									<li class="footer_list_sub_item"><a href="<?php echo home_url('/fukuri/') ?>">福利厚生</a></li>
									<li class="footer_list_sub_item"><a href="<?php echo home_url('/office_tour/') ?>">オフィスツアー</a></li>
								</ul>
							</li>
						</ul>
						<ul class="footer_list">
							<li class="footer_list_item"><a href="<?php echo home_url('/entry/') ?>">エントリー</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="copyright_top">
			© WAKUTO inc.
		</div>
	</div>
	<div class="<?php echo is_front_page()? 'footer_contents_top' : 'footer_contents' ?> sponly_block footer_contents_top_tablet_margin">

		<div class="footer_contents_wrapper">
			<div class="corporate_info">
				<a class="logo_link_top" href="<?php echo home_url('/') ?>"><img src="https://moe-design.com/client/wakuto-recruit-test/wp-content/uploads/2022/09/00footer-logo.png" /></a>
				株式会社ワクト<br />
				<div class="corporate_address">
					〒107-0051　東京都港区元赤坂1丁目3-13<br />
					赤坂センタービルディング 14階
				</div>
				<div class="corporate_site_link">
					<a href="https://wakuto.net/" target="_blank"><span>コーポレートサイト</span><img src="https://moe-design.com/client/wakuto-recruit-test/wp-content/uploads/2022/09/Icon-open-external-link.png" /></a>
				</div>
			</div>
			<div class="footer_sitemap">
				<div class="footer_sitemap_wrapper">
					<ul class="footer_list">
						<li class="footer_list_item"><span class="item_indent"><a href="<?php echo home_url('/') ?>">TOP</a></span></li>

						<li class="footer_list_item"><span class="item_indent"><a href="<?php echo home_url('/wakuto/') ?>">ワクトとは</a></span></li>
						<li class="footer_list_sub_item"><span class="item_sub_indent"><a href="<?php echo home_url('/wakuto/') ?>#wakuto_company_message">会社メッセージ</a></span></li>
						<li class="footer_list_sub_item"><span class="item_sub_indent"><a href="<?php echo home_url('/wakuto/') ?>#wakuto_ceo_message">社長メッセージ</a></span></li>
						<li class="footer_list_sub_item"><span class="item_sub_indent"><a href="<?php echo home_url('/wakuto/') ?>#wakuto_about_lts">LTSについて</a></span></li>
						<li class="footer_list_sub_item last_item"><span class="item_sub_indent"><a href="<?php echo home_url('/wakuto/') ?>#wakuto_org">組織と役職</a></span></li>
						

						<li class="footer_list_item"><span class="item_indent"><a href="<?php echo home_url('/service/') ?>">事業紹介</a></span></li>


						
						<li class="footer_list_item"><span class="item_indent">描ける未来</span></li>
						<li class="footer_list_sub_item"><span class="item_sub_indent"><a href="<?php echo home_url('/career_path/') ?>">キャリアパス</a></span></li>
						<li class="footer_list_sub_item"><span class="item_sub_indent"><a href="<?php echo home_url('/future/') ?>#assessment">評価・人事制度</a></span></li>
						<li class="footer_list_sub_item"><span class="item_sub_indent"><a href="<?php echo home_url('/future/') ?>#followup">フォロー体制</a></span></li>
						<li class="footer_list_sub_item last_item"><span class="item_sub_indent"><a href="<?php echo home_url('/future/') ?>#learning">グループワーク・勉強会</a></span></li>
						
						
						<li class="footer_list_item"><span class="item_indent">「人」</span></li>
						<li class="footer_list_sub_item"><span class="item_sub_indent"><a href="<?php echo home_url('/interview/') ?>">インタビュー</a></span></li>
						<li class="footer_list_sub_item"><span class="item_sub_indent"><a href="<?php echo home_url('/talk_session/') ?>">座談会</a></span></li>
						<li class="footer_list_sub_item"><span class="item_sub_indent"><a href="<?php echo home_url('/get_to_know/') ?>#with_numbers">数字で知るワクト</a></span></li>
						<li class="footer_list_sub_item last_item"><span class="item_sub_indent"><a href="<?php echo home_url('/get_to_know/') ?>#with_photos">写真で知るワクト</a></span></li>
						
						<li class="footer_list_item"><span class="item_indent">募集情報</span></li>
						<li class="footer_list_sub_item"><span class="item_sub_indent"><a href="<?php echo home_url('/recruit/') ?>">募集職種</a></span></li>
						<li class="footer_list_sub_item"><span class="item_sub_indent"><a href="<?php echo home_url('/fukuri/') ?>">福利厚生</a></span></li>
						<li class="footer_list_sub_item last_item"><span class="item_sub_indent"><a href="<?php echo home_url('/office_tour/') ?>">オフィスツアー</a></span></li>
						<li class="footer_list_item"><span class="item_indent"><a href="<?php echo home_url('/entry/') ?>">エントリー</a></span></li>
					</ul>
			</div>
		</div>
		<div class="copyright_top">
			© WAKUTO inc.
		</div>
	</div>
</div>
<a class="page_top fade_in_element" href="#wakuwaku">
	<div class="">
		<img src="https://moe-design.com/client/wakuto-recruit-test/wp-content/uploads/2022/09/00to-top.png" />
	</div>
</a>
<script type="text/javascript">
	
	jQuery(function($) {
		jQuery('.navigation_sp ul .main_with_sub').on('click', function(){
			jQuery(this).siblings('ul').stop().slideToggle();
			jQuery(this).toggleClass("toggle_active");
		});
		jQuery(".burger_wrapper").on("click", function(){
			jQuery(".burger_menu span, .burger_menu, .navigation_sp").toggleClass("open");
		})
		jQuery('.navigation_sp ul li').not(".main_with_sub").on('click', function() {  
			jQuery(".burger_menu span, .burger_menu, .navigation_sp").removeClass("open");
			
		});
		jQuery("header").addClass("is-fadein");
		const pagetop = jQuery(".page_top");
		jQuery(window).on('load', function(){
			jQuery(".page_top").addClass("is-fadein");
		});
		/*
		jQuery(".page_top").on('touchstart click',function () {
			jQuery('#wakuwaku').animate({
				scrollTop: 0
			});
		});
		*/
		 jQuery(".page_top").on('click', function(event) {

			if (this.hash !== "") {
			  event.preventDefault();

			  var hash = this.hash;

			  jQuery('html, body').animate({
				scrollTop: jQuery(hash).offset().top
			  }, 800, function(){

				window.location.hash = hash;
			  });
			} 
		  });
		window.setTimeout(function(){jQuery("#catch_copy").addClass("is-fadein");}, 1000);
		
		 jQuery(window).scroll(function () {
			const windowHeight = jQuery(window).height();
			const scroll = jQuery(window).scrollTop();
			jQuery('.fade_in_element').each(function () {
			  const targetPosition = jQuery(this).offset().top;
			  if (scroll > targetPosition - windowHeight + 100) {
				jQuery(this).addClass("is-fadein");
			  }
			});
		});
		
	});
	function mouseStalkerDisplayNone() {
		var cursor = document.getElementById("cursor");
		var follower = document.getElementById("follower");
		cursor.style.display = "none";
		follower.style.display = "none";
		console.log("onmouse");
	}
	function mouseStalkerGetBack() {
		var cursor = document.getElementById("cursor");
		var follower = document.getElementById("follower");
		cursor.style.display = "block";
		follower.style.display = "flex";
	}
</script>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v15.0" nonce="Emk7H63W"></script>
<?php wp_footer(); ?>