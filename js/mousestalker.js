jQuery (function($) {
	var cursor = jQuery("#cursor");
	var follower = jQuery("#follower");
	var delay = 10;
	var cWidth = 8;
	var fWidth = 40;
	var mouseX = 0;
	var mouseY = 0;
	var posX = 0;
	var posY = 0;

	TweenMax.to({}, .001, {
		repeat: -1,
		onRepeat: function() {
			posX += (mouseX - posX) / delay;
			posY += (mouseY - posY) / delay;

			TweenMax.set(follower, {
				css: {
					left: posX - (fWidth / 2),
					top: posY - (fWidth / 2)
				}
			});

			TweenMax.set(cursor, {
				css: {    
					left: mouseX - (cWidth / 2),
					top: mouseY - (cWidth / 2)
				}
			});
		}
	});

	//マウス座標を取得
	jQuery(document).on("mousemove", function(e) {
		mouseX = e.pageX;
		mouseY = e.pageY;
	});
	jQuery(document).on("mouseenter", "a:not(.anchor), .read_more, .page_button, input[type='submit'], input[type='checkbox'], .wpcf7-list-item-label", function() {
		cursor.addClass("is-active");
		follower.addClass("is-active");
	});
	jQuery(document).on("mouseleave", "a:not(.anchor), .read_more, .page_button, input[type='submit'], input[type='checkbox'], .wpcf7-list-item-label", function() {
		cursor.not(".anchor").removeClass("is-active");
		follower.not(".anchor").removeClass("is-active");
	});
});
