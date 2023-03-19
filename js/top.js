jQuery (function($) {
	var switchWidth = 640;
	if (window.innerWidth > 768 ) {}
		jQuery("#kv_top").slick({
		autoplay: true,
		autoplaySpeed: 4000,
		pauseOnFocus: false,
		pauseOnHover: false,
		arrows : false,
		prevArrow : null,
		nextArrow : null,
	 });
	
		jQuery("#kv_top_sp").slick({
		autoplay: true,
		autoplaySpeed: 4000,
		pauseOnFocus: false,
		pauseOnHover: false,
		arrows : false,
		prevArrow : null,
		nextArrow : null,
	 });
	
	
	const template_url = object_name.templateUrl;
	jQuery(".key_visual").addClass("is-fadein");
	const options = {
		threshold: 0,
		rootMargin: "0px 0px -100%"
	}
	const topLogoWhite="00header-logo-wht.png"
	const topLogoBlack="00header-logo-blk.png"
	const topHeaderLogoObserver = new IntersectionObserver((entries, observer) => {

		entries.forEach(entry => {
			if(entry.isIntersecting) {
				jQuery("#top_logo_image").attr('src', template_url + '/image/' + topLogoWhite)
				jQuery(".navigation_top ul li a").css('color', '#fff')
				jQuery(".navigation_top ul li span").css('color', '#fff')
				jQuery(".logo_sub").css('color', '#fff')
				jQuery(".logo_link_top").css('color', '#fff')
			} else {
				jQuery("#top_logo_image").attr('src', template_url + '/image/' + topLogoBlack)
				jQuery(".navigation_top ul li a").css('color', '#000')
				jQuery(".navigation_top ul li span").css('color', '#000')
				jQuery(".navigation_top ul li ul li a").css('color', '#fff')
				jQuery(".logo_sub").css('color', '#000')
				jQuery(".logo_link_top").css('color', '#000')
			}
		})
	}, options)
	topHeaderLogoObserver.observe(jQuery('#top_wrapper_observed')[0])

});
