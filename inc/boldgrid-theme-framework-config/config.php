<?php
/**
 * Prime Configuration File.
 *
 * This file contains the configuration options used in the Prime theme.
 *
 * @package Prime
 */

if ( ! function_exists( 'boldgrid_prime_framework_config' ) ) {
	/**
	 * Boldgrid Theme Framework Configs
	 *
	 * Filters the theme framework configurations.
	 *
	 * @since 1.0.0
	 */
	function boldgrid_prime_framework_config( $config ) {

		// Disable old typography controls in favor of new ones.
		$config['customizer-options']['typography']['controls']['main_text'] = false;
		$config['customizer-options']['typography']['controls']['subheadings'] = false;
		$config['customizer-options']['site-title']['site-title'] = false;

		// Waiting for all themes to opt in before removing switch.
		// Enable typography controls in the customizer.
		$config['customizer-options']['typography']['enabled'] = true;

		// Enable Sticky Footer.
		$config['scripts']['boldgrid-sticky-footer'] = true;

		// Waiting for all themes to opt in before removing switch.
		// Remove the wrong attribution links from the footer.
		$config['temp']['attribution_links'] = true;

		// Waiting for all themes to opt in before removing switch.
		// Turn on the parent theme template engine.
		$config['boldgrid-parent-theme'] = true;

		// Set Theme Name.
		$config['theme_name'] = 'prime';

		// This theme doesn't support a background image.
		$config['customizer-options']['background']['defaults']['background_image'] = false;

		// Disable Call to Action Widget.
		$config['template']['call-to-action'] = 'disabled';

		// Default Colors.
		$config['customizer-options']['colors']['defaults'] = array(
			array(
				'default' => true,
				'format' => 'palette-primary',
				'neutral-color' => '#ffffff',
				'colors' => array(
					'#f95b26',
					'#1a1a1a',
					'#efefef',
					'#fff7bd',
					'#1a1a1a',
				),
			),
			array(
				'format' => 'palette-primary',
				'neutral-color' => '#ffffff',
				'colors' => array(
					'#4392f1',
					'#1a1a1a',
					'#e8e9eb',
					'#ff5e5b',
					'#1a1a1a',
				),
			),
			array(
				'format' => 'palette-primary',
				'neutral-color' => '#6b6570',
				'colors' => array(
					'#b7f0ad',
					'#ffffff',
					'#4a314d',
					'#f0add9',
					'#8c8c8c',
				),
			),
			array(
				'format' => 'palette-primary',
				'neutral-color' => '#333333',
				'colors' => array(
					'#e1d89f',
					'#ffffff',
					'#494949',
					'#f07e13',
					'#5e605d',
				),
			),
			array(
				'format' => 'palette-primary',
				'neutral-color' => '#f1faee',
				'colors' => array(
					'#e3170a',
					'#1a1a1a',
					'#e3e4db',
					'#01baef',
					'#1a1a1a',
				),
			),
		);

		// Create the custom image attachments used as post thumbnails for pages.
		$config['starter-content']['attachments'] = array(
			'image-blogging-101' => array(
				'post_title' => _x( 'Blogging 101', 'Theme starter content', 'boldgrid-prime' ),
				'file' => 'images/blogging-101.png',
			),
			'image-basic-taxonomies' => array(
				'post_title' => _x( 'Basic Taxonomies', 'Theme starter content', 'boldgrid-prime' ),
				'file' => 'images/basic-taxonomies.png',
			),
			'image-tips-better-writing' => array(
				'post_title' => _x( 'Tips Better Writing', 'Theme starter content', 'boldgrid-prime' ),
				'file' => 'images/tips-better-writing.png',
			),
			'image-wordcamp-101' => array(
				'post_title' => _x( 'WordCamp 101', 'Theme starter content', 'boldgrid-prime' ),
				'file' => 'images/wordcamp-101.png',
			),
		);

		// Specify the core-defined pages to create and add custom thumbnails to some of them.
		$config['starter-content']['posts'] = array(
			'homepage' => array(
				'post_type' => 'page',
				'post_title' => 'Home',
				'post_content' => '<div class="boldgrid-section background-fixed" style="background-image: url(' . get_parent_theme_file_uri('images/bold-fresh-cta.png') . '); background-size: cover; background-position: 50% 100%;" data-image-url="<' . get_parent_theme_file_uri('images/bold-fresh-cta.png') . ')"><div class="container"><div class="row" style="padding-top: 60px; padding-bottom: 40px;"><div class="col-md-6 col-xs-12 col-sm-8 text-center wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0s"><p class="color1-color" style="font-family: Great\ Vibes; font-size: 66px; margin-bottom: 0px;" data-font-family="Great Vibes">Welcome to</p><h1 class="" style="color: #ffffff; font-size: 66px; margin-top: 0px;">BOLD FRESH</h1><div class="row bg-editor-hr-wrap"><div class="col-md-12 col-xs-12 col-sm-12"><div><hr class="bg-hr bg-hr-3 color4-color" style="width: 70%; margin-bottom: -8px;"></div></div></div><p class="" style="margin-bottom: 0px;"><i class="fa fa-cutlery" style="color: #ffffff; font-size: 36px; margin-top: -100px; z-index: 10; position: relative;" aria-hidden="true"><span style="display: none;">&nbsp;</span></i></p><h3 class="color4-color" style="font-size: 34px;">DINING HOURS</h3><p class="" style="color: #ffffff;"><strong>MON-FRI: 8:00 AM - 11:00 PM</strong></p><p class="" style="color: #ffffff;"><strong>SAT-SUN: 8:00 AM - 2:00 AM</strong></p><p class="" style="margin-top: 30px;"><a class="button-primary" href="#about">Learn More</a></p></div><div class="col-md-6 col-sm-4 col-xs-12"></div></div></div></div><div class="boldgrid-section"><a name="about"></a><div class="container"><div class="row" style="padding-top: 50px; padding-bottom: 75px;"><div class="col-md-3 col-sm-6 col-xs-12"><p class="" style="margin-top: 22px;"><img class="aligncenter" src="' . get_parent_theme_file_uri('images/bold-fresh-home1.png') . '"></p><p class="" style="margin-top: 22px;"><img class="aligncenter" src="' . get_parent_theme_file_uri('images/bold-fresh-home2.png') . '"></p></div><div class="col-md-3 col-sm-6 col-xs-12"><p class="" style="margin-top: 22px;"><img class="aligncenter" src="' . get_parent_theme_file_uri('images/bold-fresh-home3.png') . '"></p></div><div class="col-md-6 col-xs-12 col-sm-12"><p class="color1-color" style="margin-top: 22px; font-family: Great\ Vibes; font-size: 40px; margin-bottom: 0px;" data-font-family="Great Vibes">Learn more</p><h2 class="" style="margin-top: 0px;">ABOUT US</h2><p class="">A diner-style bar and restaurant focused on using only the freshest ingredients, Bold Fresh delivers on a traditional restaurant experience with a modern menu. Whether you are planning an intimate dinner for friends, a corporate luncheon, or an extravagant soirée, you you’ll find the perfect setting at Bold Fresh.</p><p class="">Keep it simple! Our staff is dedicated to making your dining experience memorable! Guests can indulge in dishes crafted with local-sourced natural foods – in addition to being healthier, they taste better!</p><p class="" style="margin-top: 30px;"><a class="button-primary" href="about">Learn More</a></p></div></div></div></div><div class="boldgrid-section color3-background-color color-3-text-contrast bg-background-color"><div class="container"><div class="row" style="padding-top: 50px; padding-bottom: 50px;"><div class="col-md-12 col-xs-12 col-sm-12 text-center"><p class="color1-color" style="margin-top: 22px; font-family: Great\ Vibes; font-size: 40px; margin-bottom: 0px;" data-font-family="Great Vibes">See our</p><h2 class="" style="margin-top: 0px;">FAVORITE DISHES</h2></div></div><div class="row wow fadeInUp" style="padding-bottom: 20px;" data-wow-duration="1.5s" data-wow-delay="0.5s"><div class="col-md-4 col-sm-4 col-xs-12"><p class=""><img class="aligncenter" src="' . get_parent_theme_file_uri('images/bold-fresh-gallery1.png') . '"></p></div><div class="col-md-4 col-sm-4 col-xs-12"><p class=""><img class="aligncenter" src="' . get_parent_theme_file_uri('images/bold-fresh-gallery2.png') . '"></p></div><div class="col-md-4 col-sm-4 col-xs-12"><p class=""><img class="aligncenter" src="' . get_parent_theme_file_uri('images/bold-fresh-gallery3.png') . '"></p></div></div><div class="row wow fadeInUp" style="padding-bottom: 75px;" data-wow-duration="1.5s" data-wow-delay="0.5s"><div class="col-md-4 col-sm-4 col-xs-12"><p class=""><img class="aligncenter" src="' . get_parent_theme_file_uri('images/bold-fresh-gallery4.png') . '"></p></div><div class="col-md-4 col-sm-4 col-xs-12"><p class=""><img class="aligncenter" src="' . get_parent_theme_file_uri('images/bold-fresh-gallery5.png') . '"></p></div><div class="col-md-4 col-sm-4 col-xs-12"><p class=""><img class="aligncenter" src="' . get_parent_theme_file_uri('images/bold-fresh-gallery6.png') . '"></p></div></div></div></div><div class="boldgrid-section background-fixed" style="background-image: linear-gradient(to left, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url(' . get_parent_theme_file_uri('images/bold-fresh-background.png') . '); background-size: cover; background-position: 50% 50%;" data-image-url="' . get_parent_theme_file_uri('images/bold-fresh-background.png') . '" data-bg-overlaycolor="rgba(0,0,0,0.8)"><div class="container"><div class="row" style="padding-top: 50px;"><div class="col-md-12 col-xs-12 col-sm-12 text-center"><p class="color1-color" style="margin-top: 22px; font-family: Great\ Vibes; font-size: 40px; margin-bottom: 0px;" data-font-family="Great Vibes">View our</p><h2 class="" style="margin-top: 0px; color: #ffffff;">CURRENT SPECIALS</h2></div></div><div class="row" style="padding-top: 15px;"><div class="col-md-6 col-xs-12 col-sm-12"><div class="bg-box" style="padding: 2em 0em;"><h3 class="" style="text-align: center; color: #ffffff;">LUNCH</h3><div class="row bg-editor-hr-wrap" style="padding-top: 25px;"><div class="col-md-12 col-xs-12 col-sm-12"><div><hr class="bg-hr bg-hr-4" style="margin-top: 10px; margin-bottom: 10px; color: #dad2d2;"></div></div></div><div class="row"><div class="col-md-9 col-xs-12 col-sm-8"><div><h4 class="" style="margin-bottom: 5px; color: #ffffff;">Turkey Panini</h4><p class="" style="margin-top: 0px; color: #ffffff;">with house-made potato chips</p></div></div><div class="col-md-3 col-xs-12 col-sm-4 text-right align-column-center"><div><p class="color4-color">$11.00</p></div></div></div><div class="row bg-editor-hr-wrap"><div class="col-md-12 col-xs-12 col-sm-12"><div><hr class="bg-hr bg-hr-4" style="margin-top: 10px; margin-bottom: 10px; color: #dad2d2;"></div></div></div><div class="row"><div class="col-md-9 col-xs-12 col-sm-8"><div><h4 class="" style="margin-bottom: 5px; color: #ffffff;">Spinach &amp; Artichoke Chicken</h4><p class="" style="margin-top: 0px; color: #ffffff;">with house-made potato chips</p></div></div><div class="col-md-3 col-xs-12 col-sm-4 text-right align-column-center"><div><p class="color4-color">$12.00</p></div></div></div><div class="row bg-editor-hr-wrap"><div class="col-md-12 col-xs-12 col-sm-12"><div><hr class="bg-hr bg-hr-4" style="margin-top: 10px; margin-bottom: 10px; color: #dad2d2;"></div></div></div><div class="row"><div class="col-md-6 col-xs-12 col-sm-8"><div><h4 class="" style="margin-bottom: 5px; color: #ffffff;">Spicy Thai Shrimp</h4><p class="" style="margin-top: 0px; color: #ffffff;">with veggie rice</p></div></div><div class="col-md-6 col-xs-12 col-sm-4 text-right align-column-center"><div><p class="color4-color">$15.00</p></div></div></div><div class="row bg-editor-hr-wrap"><div class="col-md-12 col-xs-12 col-sm-12"><div><hr class="bg-hr bg-hr-4" style="margin-top: 10px; margin-bottom: 10px; color: #dad2d2;"></div></div></div></div></div><div class="col-md-6 col-xs-12 col-sm-12"><div class="bg-box" style="padding: 2em 0em;"><h3 class="" style="text-align: center; color: #ffffff;">DINNER</h3><div class="row bg-editor-hr-wrap" style="padding-top: 25px;"><div class="col-md-12 col-xs-12 col-sm-12"><div><hr class="bg-hr bg-hr-4" style="margin-top: 10px; margin-bottom: 10px; color: #dad2d2;"></div></div></div><div class="row"><div class="col-md-9 col-xs-12 col-sm-8"><div><h4 class="" style="margin-bottom: 5px; color: #ffffff;">Salmon</h4><p class="" style="margin-top: 0px; color: #ffffff;">with 2 sides</p></div></div><div class="col-md-3 col-xs-12 col-sm-4 text-right align-column-center"><div><p class="color4-color">$25.00</p></div></div></div><div class="row bg-editor-hr-wrap"><div class="col-md-12 col-xs-12 col-sm-12"><div><hr class="bg-hr bg-hr-4" style="margin-top: 10px; margin-bottom: 10px; color: #dad2d2;"></div></div></div><div class="row"><div class="col-md-9 col-xs-12 col-sm-8"><div><h4 class="" style="margin-bottom: 5px; color: #ffffff;">Prime Rib</h4><p class="" style="margin-top: 0px; color: #ffffff;">with 2 sides</p></div></div><div class="col-md-3 col-xs-12 col-sm-4 text-right align-column-center"><div><p class="color4-color">$30.00</p></div></div></div><div class="row bg-editor-hr-wrap"><div class="col-md-12 col-xs-12 col-sm-12"><div><hr class="bg-hr bg-hr-4" style="margin-top: 10px; margin-bottom: 10px; color: #dad2d2;"></div></div></div><div class="row"><div class="col-md-6 col-xs-12 col-sm-8"><div><h4 class="" style="margin-bottom: 5px; color: #ffffff;">Roasted Chicken</h4><p class="" style="margin-top: 0px; color: #ffffff;">with 2 sides</p></div></div><div class="col-md-6 col-xs-12 col-sm-4 text-right align-column-center"><div><p class="color4-color">$22.00</p></div></div></div><div class="row bg-editor-hr-wrap"><div class="col-md-12 col-xs-12 col-sm-12"><div><hr class="bg-hr bg-hr-4" style="margin-top: 10px; margin-bottom: 10px; color: #dad2d2;"></div></div></div></div></div></div><div class="row" style="padding-bottom: 75px; padding-top: 20px;"><div class="col-md-12 col-xs-12 col-sm-12" style="text-align: center;"><p class=""><a class="btn btn-pill btn-color-4" href="menu">View Full Menu</a></p></div></div></div></div><div class="boldgrid-section"><div class="container"><div class="row" style="padding-top: 50px;"><div class="col-md-12 col-xs-12 col-sm-12 text-center"><p class="color1-color" style="margin-top: 22px; font-family: Great\ Vibes; font-size: 40px; margin-bottom: 0px;" data-font-family="Great Vibes">Join us!</p><h2 class="" style="margin-top: 0px;">NEXT EVENT</h2></div></div><div class="row" style="padding-bottom: 75px; padding-top: 50px;"><div class="col-md-12 col-xs-12 col-sm-12 wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.5s"><div class="bg-box color-3-text-contrast color3-background-color" style="padding: 2em;"><div class="row"><div class="col-md-6 col-xs-12 col-sm-6"><div><p class=""><img class="aligncenter" src="' . get_parent_theme_file_uri('images/bold-fresh-home-event.png') . '"></p></div></div><div class="col-md-6 col-xs-12 col-sm-6"><div><h3 class="" style="margin-top: 0px;">OPEN MIC NIGHT</h3><h4 class="" style="margin-top: 20px; margin-bottom: 20px;">This Saturday, 8pm</h4><p class="">Rock &amp; Roll Night provides an energized dining experience, family-friendly entertainment you won’t soon forget! Whether with family and friends, or business colleagues, come enjoy a night out with us this Saturday and experience our freshest menu while rocking out to the best local bands this side of the water.</p><p class="" style="margin-top: 30px;"><a class="button-primary" href="events">All Events</a></p></div></div></div></div></div></div></div></div>',
				'meta_input' => array(
					'boldgrid_hide_page_title' => 0,
				),
			),
			'about' => array(
				'post_type' => 'page',
				'post_title' => 'About',
				'post_content' => '<div class="boldgrid-section background-fixed" style="background-image: url(' . get_parent_theme_file_uri('images/bold-fresh-cta.png') . '); background-size: cover; background-position: 50% 100%;" data-image-url="<' . get_parent_theme_file_uri('images/bold-fresh-cta.png') . ')"><div class="container"><div class="row" style="padding-top: 50px; padding-bottom: 50px;"><div class="col-md-12 col-xs-12 col-sm-12 text-center"><p class="color1-color" style="margin-top: 22px; font-family: Great\ Vibes; font-size: 44px; margin-bottom: 0px;" data-font-family="Great Vibes">Learn more</p><h1 class="" style="margin-top: 0px; color: #ffffff;">ABOUT US</h1></div></div></div></div><div class="boldgrid-section"><div class="container"><div class="row" style="padding-top: 75px; padding-bottom: 75px;"><div class="col-md-4 col-sm-5 col-xs-12"><p class="wow rotateInDownLeft" data-wow-duration="1.5s" data-wow-delay="1s"><img class="aligncenter" src="' . get_parent_theme_file_uri('images/bold-fresh-about1.png') . '"></p></div><div class="col-md-8 col-xs-12 col-sm-7"><p class="">We opened our doors in 1938, and have passed the restaurant down through generations. Still family owned and operated, we’re deeply committed to giving our customers the best experience possible when they come to eat with us.</p><p class="">The staff here at our restaurant is highly trained and deeply dedicated to making sure you have a great dining experience. We all want to see you happy and smiling, and we want you to enjoy coming to eat with us. That’s why we focus on hiring the best, and making sure their training goes above and beyond what you would get at other restaurants. If there’s ever a problem with any of our staff members we want to know about it right away, so we can make adjustments and help that staff member keep customers happy.</p><p class="">Some of our staff members have been with us for many years, and we’re proud of their many accomplishments and the way they treat customers as valued members of our family. Come see us for lunch or dinner, and experience the level of care and compassion a good restaurant staff can provide.</p></div></div></div></div><div class="boldgrid-section color3-background-color color-3-text-contrast bg-background-color"><div class="container"><div class="row" style="padding-top: 50px; padding-bottom: 75px;"><div class="col-md-6 col-xs-12 col-sm-12"><p class="color1-color" style="margin-top: 22px; font-family: Great\ Vibes; font-size: 40px; margin-bottom: 0px;" data-font-family="Great Vibes">View our</p><h2 class="" style="margin-top: 0px;">FEATURED VIDEO</h2><p class="">We are committed to providing the absolute best quality to each and every one of our customers. Over the last 20 years, since our start, we have continued to grow while staying true to our original mission — to give you, the customer, a winning service that you can rely on.</p><p class="" style="margin-bottom: 25px;">Come in for lunch or dinner and enjoy casual dining or a more elegant option. Having choices is a great thing, and we’re happy to give you the opportunity to have the kind of dining experience you’re looking for.</p></div><div class="col-md-6 col-xs-12 col-sm-12 text-center wow rotateInDownRight" data-wow-duration="1.5s" data-wow-delay="1s"> [embed height="439" width="780"]https://www.youtube.com/watch?v=uK3SVn2CT1I[/embed]</div></div></div></div><div class="boldgrid-section background-fixed" style="background-image: linear-gradient(to left, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url(' . get_parent_theme_file_uri('images/bold-fresh-background.png') . '); background-size: cover; background-position: 50% 50%;" data-image-url="' . get_parent_theme_file_uri('images/bold-fresh-background.png') . '" data-bg-overlaycolor="rgba(0,0,0,0.8)"><div class="container"><div class="row" style="padding-top: 50px;"><div class="col-md-12 col-xs-12 col-sm-12 text-center"><p class="color1-color" style="margin-top: 22px; font-family: Great\ Vibes; font-size: 40px; margin-bottom: 0px;" data-font-family="Great Vibes">Press</p><h2 class="" style="margin-top: 0px; color: #ffffff;">REVIEWS</h2></div></div><div class="row" style="padding-bottom: 50px; padding-top: 10px;"><div class="col-md-3 col-sm-6 col-xs-12 text-center"><div class="bg-box bg-box-square" style="padding: 2em;"><p class="" style="color: #ffffff;"><em>The food is absolutely amazing! Be sure to ask about the freshest ingredients on the menu as they have specials for locally sourced ingredients.</em></p><h4 class="color4-color" style="margin-top: 20px;">LJ Regency</h4></div></div><div class="col-md-3 col-sm-6 col-xs-12 text-center"><div class="bg-box bg-box-square" style="padding: 2em;"><p class="" style="color: #ffffff;"><em>The staff and management were amazing! Bold Fresh is our go to choice for any event we want to celebrate and have a memorable meal. </em></p><h4 class="color4-color" style="margin-top: 20px;">AllFirst Capital</h4></div></div><div class="col-md-3 col-sm-6 col-xs-12 text-center"><div class="bg-box bg-box-square" style="padding: 2em;"><p class="" style="color: #ffffff;"><em>We held our annual company event at Bold Fresh, and we were blown away by the excellent staff and great menu. Thank you Bold Fresh! </em></p><h4 class="color4-color" style="margin-top: 20px;">Daily Local</h4></div></div><div class="col-md-3 col-sm-6 col-xs-12 text-center"><div class="bg-box bg-box-square" style="padding: 2em;"><p class="" style="color: #ffffff;"><em>Bold Fresh puts the emphasis on fresh. Talk to the staff about the daily specials made with local ingredients, they’re sure to impress you! </em></p><h4 class="color4-color" style="margin-top: 20px;">Source Pros</h4></div></div></div></div></div><div class="boldgrid-section"><div class="container"><div class="row" style="padding-top: 50px;"><div class="col-md-12 col-xs-12 col-sm-12 text-center"><p class="color1-color" style="margin-top: 22px; font-family: Great\ Vibes; font-size: 40px; margin-bottom: 0px;" data-font-family="Great Vibes">Meet us</p><h2 class="" style="margin-top: 0px;">STAFF</h2></div></div><div class="row" style="padding-bottom: 75px;"><div class="col-md-4 col-sm-4 col-xs-12" style="padding-top: 2em;"><p class="" style="margin-bottom: 0px;"><img class="aligncenter" src="' . get_parent_theme_file_uri('images/bold-fresh-about2.png') . '"></p><div class="row"><div class="col-md-12 col-sm-12 col-xs-12"><div style="padding: 35px;" class="bg-background-color bg-box color-3-text-contrast color3-background-color"><p class="" style="margin: 0;"><strong>Carl Casper</strong></p><p class="">Chef</p><p class="wow zoomIn" style="margin-top: 30px;" data-wow-duration="1.5s" data-wow-delay="0.5s">A James Beard Foundation Award winner, Casper is recognized for popularizing sourdough and artisan breads in the US.</p></div></div></div></div><div class="col-md-4 col-sm-4 col-xs-12" style="padding-top: 2em;"><p class="" style="margin-bottom: 0px;"><img class="aligncenter" src="' . get_parent_theme_file_uri('images/bold-fresh-about3.png') . '"></p><div class="row"><div class="col-md-12 col-sm-12 col-xs-12"><div style="padding: 35px;" class="bg-background-color bg-box color-3-text-contrast color3-background-color"><p class="" style="margin: 0;"><strong>Cleon Salmon</strong></p><p class="">Owner</p><p class="wow zoomIn" style="margin-top: 30px;" data-wow-duration="1.5s" data-wow-delay="0.5s">Salmon is a renowned restaurateur and television personality, with multiple Michelin Starred restaurants and award-winning TV shows.</p></div></div></div></div><div class="col-md-4 col-sm-4 col-xs-12" style="padding-top: 2em;"><p class="" style="margin-bottom: 0px;"><img class="aligncenter" src="' . get_parent_theme_file_uri('images/bold-fresh-about4.png') . '"></p><div class="row"><div class="col-md-12 col-sm-12 col-xs-12"><div style="padding: 2em;" class="bg-box color-3-text-contrast color3-background-color"><p class="" style="margin: 0;"><strong>Carol Raddimus</strong></p><p class="">Chef</p><p class="wow zoomIn" style="margin-top: 30px;" data-wow-duration="1.5s" data-wow-delay="0.5s">A Brooklyn native, Raddimus moved to Tokyo to open a Ramen shop and was officially recognized as the Ramen King of Japan in 2015.</p></div></div></div></div></div></div></div>',
			),
			'menu' => array(
				'post_type' => 'page',
				'post_title' => 'Menu',
				'post_content' => '<div class="boldgrid-section background-fixed" style="background-image: url(' . get_parent_theme_file_uri('images/bold-fresh-cta.png') . '); background-size: cover; background-position: 50% 100%;" data-image-url="<' . get_parent_theme_file_uri('images/bold-fresh-cta.png') . ')"><div class="container"><div class="row" style="padding-top: 50px; padding-bottom: 50px;"><div class="col-md-12 col-xs-12 col-sm-12 text-center"><p class="color1-color" style="margin-top: 22px; font-family: Great\ Vibes; font-size: 44px; margin-bottom: 0px;" data-font-family="Great Vibes">View our</p><h1 class="" style="margin-top: 0px; color: #ffffff;">CURRENT MENU</h1></div></div></div></div><div class="boldgrid-section">
					<div class="container"><div class="row" style="padding-bottom: 75px; padding-top: 75px;"><div class="col-md-6 col-sm-12 col-xs-12"><p class=""><img class="aligncenter" src="' . get_parent_theme_file_uri('images/bold-fresh-menu1.png') . '"></p></div><div class="col-md-6 col-xs-12 col-sm-12 wow flipInX" data-wow-duration="1.5s" data-wow-delay="0.5s"><div class="bg-box color-3-text-contrast color3-background-color" style="padding: 2em;"><div class="row bg-editor-hr-wrap"><div class="col-md-12 col-xs-12 col-sm-12"><div><hr class="bg-hr bg-hr-4" style="margin-top: 10px; margin-bottom: 10px; color: #dad2d2;"></div></div></div><div class="row"><div class="col-md-9 col-xs-12 col-sm-8"><div><h4 class="" style="margin-bottom: 5px;">Rainbow Salad</h4><p class="" style="margin-top: 0px; margin-bottom: 0px;">with specialty house dressing</p><p class="color1-color" style="margin-top: 0px;">A local favorite!</p></div></div><div class="col-md-3 col-xs-12 col-sm-4 text-right align-column-center"><div><p class="color1-color">$8.00</p></div></div></div><div class="row bg-editor-hr-wrap"><div class="col-md-12 col-xs-12 col-sm-12"><div><hr class="bg-hr bg-hr-4" style="margin-top: 10px; margin-bottom: 10px; color: #dad2d2;"></div></div></div><div class="row"><div class="col-md-9 col-xs-12 col-sm-8"><div><h4 class="" style="margin-bottom: 5px;">Black Bean Burger</h4><p class="" style="margin-top: 0px;">with lettuce, tomato, avocado</p></div></div><div class="col-md-3 col-xs-12 col-sm-4 text-right align-column-center"><div><p class="color1-color">$10.00</p></div></div></div><div class="row bg-editor-hr-wrap"><div class="col-md-12 col-xs-12 col-sm-12"><div><hr class="bg-hr bg-hr-4" style="margin-top: 10px; margin-bottom: 10px; color: #dad2d2;"></div></div></div><div class="row"><div class="col-md-6 col-xs-12 col-sm-8"><div><h4 class="" style="margin-bottom: 5px;">Roasted Chicken</h4><p class="" style="margin-top: 0px;">with 2 sides</p></div></div><div class="col-md-6 col-xs-12 col-sm-4 text-right align-column-center"><div><p class="color1-color">$24.00</p></div></div></div><div class="row bg-editor-hr-wrap"><div class="col-md-12 col-xs-12 col-sm-12"><div><hr class="bg-hr bg-hr-4" style="margin-top: 10px; margin-bottom: 10px; color: #dad2d2;"></div></div></div></div></div></div></div></div><div class="boldgrid-section color3-background-color color-3-text-contrast bg-background-color"><div class="container"><div class="row" style="padding-top: 50px;"><div class="col-md-12 col-xs-12 col-sm-12 text-center"><p class="color1-color" style="margin-top: 22px; font-family: Great\ Vibes; font-size: 40px; margin-bottom: 0px;" data-font-family="Great Vibes">Stop by</p><h2 class="" style="margin-top: 0px;">FOR BREAKFAST</h2></div></div><div class="row bg-editor-hr-wrap" style="padding-bottom: 75px; padding-top: 20px;"><div class="col-md-6 col-xs-12 col-sm-12"><div><div class="row bg-editor-hr-wrap"><div class="col-md-12 col-xs-12 col-sm-12"><hr class="bg-hr bg-hr-4" style="margin-top: 10px; margin-bottom: 10px; color: #dad2d2;"></div></div><div class="row"><div class="col-md-9 col-xs-12 col-sm-8"><div><h4 class="" style="margin-bottom: 5px;">Breakfast Burrito</h4><p class="" style="margin-top: 0px;">with veggies, cheese, meat</p></div></div><div class="col-md-3 col-xs-12 col-sm-4 text-right align-column-center"><div><p class="color1-color">$12.00</p></div></div></div><div class="row bg-editor-hr-wrap"><div class="col-md-12 col-xs-12 col-sm-12"><hr class="bg-hr bg-hr-4" style="margin-top: 10px; margin-bottom: 10px; color: #dad2d2;"></div></div><div class="row"><div class="col-md-9 col-xs-12 col-sm-8"><div><h4 class="" style="margin-bottom: 5px;">Stack of Pancakes</h4><p class="" style="margin-top: 0px;">with turkey bacon and eggs</p></div></div><div class="col-md-3 col-xs-12 col-sm-4 text-right align-column-center"><div><p class="color1-color">$8.00</p></div></div></div><div class="row bg-editor-hr-wrap"><div class="col-md-12 col-xs-12 col-sm-12"><hr class="bg-hr bg-hr-4" style="margin-top: 10px; margin-bottom: 10px; color: #dad2d2;"></div></div><div class="row"><div class="col-md-9 col-xs-12 col-sm-8"><div><h4 class="" style="margin-bottom: 5px;">French Toast</h4><p class="" style="margin-top: 0px;">with ham and eggs</p></div></div><div class="col-md-3 col-xs-12 col-sm-4 text-right align-column-center"><div><p class="color1-color">$9.00</p></div></div></div><div class="row bg-editor-hr-wrap"><div class="col-md-12 col-xs-12 col-sm-12"><hr class="bg-hr bg-hr-4" style="margin-top: 10px; margin-bottom: 10px; color: #dad2d2;"></div></div></div></div><div class="col-md-6 col-xs-12 col-sm-12"><div><div class="row bg-editor-hr-wrap hidden-xs hidden-sm"><div class="col-md-12 col-xs-12 col-sm-12"><div class="row bg-editor-hr-wrap"><div class="col-md-12 col-xs-12 col-sm-12"><hr class="bg-hr bg-hr-4" style="margin-top: 10px; margin-bottom: 10px; color: #dad2d2;"></div></div></div></div><div class="row"><div class="col-md-9 col-xs-12 col-sm-8"><div><h4 class="" style="margin-bottom: 5px;">Spinach Quiche</h4><p class="" style="margin-top: 0px;">with onions and cheese</p></div></div><div class="col-md-3 col-xs-12 col-sm-4 text-right align-column-center"><div><p class="color1-color">$13.00</p></div></div></div><div class="row bg-editor-hr-wrap"><div class="col-md-12 col-xs-12 col-sm-12"><div><hr class="bg-hr bg-hr-4" style="margin-top: 10px; margin-bottom: 10px; color: #dad2d2;"></div></div></div><div class="row"><div class="col-md-9 col-xs-12 col-sm-8"><div><h4 class="" style="margin-bottom: 5px;">Hippie Hash</h4><p class="" style="margin-top: 0px;">with our special seasoning</p></div></div><div class="col-md-3 col-xs-12 col-sm-4 text-right align-column-center"><div><p class="color1-color">$12.00</p></div></div></div><div class="row bg-editor-hr-wrap"><div class="col-md-12 col-xs-12 col-sm-12"><div><hr class="bg-hr bg-hr-4" style="margin-top: 10px; margin-bottom: 10px; color: #dad2d2;"></div></div></div><div class="row"><div class="col-md-9 col-xs-12 col-sm-8"><div><h4 class="" style="margin-bottom: 5px;">California Omelette</h4><p class="" style="margin-top: 0px;">with avocado and bacon</p></div></div><div class="col-md-3 col-xs-12 col-sm-4 text-right align-column-center"><div><p class="color1-color">$11.00</p></div></div></div><div class="row bg-editor-hr-wrap"><div class="col-md-12 col-xs-12 col-sm-12"><hr class="bg-hr bg-hr-4" style="margin-top: 10px; margin-bottom: 10px; color: #dad2d2;"></div></div></div></div></div></div></div><div class="boldgrid-section background-fixed" style="background-image: linear-gradient(to left, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url(' . get_parent_theme_file_uri('images/bold-fresh-background.png') . '); background-size: cover; background-position: 50% 50%;" data-image-url="' . get_parent_theme_file_uri('images/bold-fresh-background.png') . '" data-bg-overlaycolor="rgba(0,0,0,0.8)"><div class="container"><div class="row" style="padding-top: 50px; padding-bottom: 0px;"><div class="col-md-12 col-xs-12 col-sm-12 text-center"><p class="color1-color" style="margin-top: 22px; font-family: Great\ Vibes; font-size: 40px; margin-bottom: 0px;" data-font-family="Great Vibes">Delicious</p><h2 class="" style="margin-top: 0px; color: #ffffff;">MAIN DISHES</h2></div></div><div class="row bg-editor-hr-wrap wow flipInX" style="padding-bottom: 50px; padding-top: 25px;" data-wow-duration="1.5s" data-wow-delay="0.5s"><div class="col-md-6 col-xs-12 col-sm-12"><div class="row bg-editor-hr-wrap"><div class="col-md-12 col-xs-12 col-sm-12"><hr class="bg-hr bg-hr-4" style="margin-top: 10px; margin-bottom: 10px; color: #dad2d2;"></div></div><div class="row"><div class="col-md-9 col-xs-12 col-sm-8"><div><h4 class="" style="margin-bottom: 5px; color: #ffffff;">Classic Double Cheeseburger</h4><p class="" style="margin-top: 0px; color: #ffffff;">with Kobe beef</p></div></div><div class="col-md-3 col-xs-12 col-sm-4 text-right align-column-center"><div><p class="color4-color">$12.00</p></div></div></div><div class="row bg-editor-hr-wrap"><div class="col-md-12 col-xs-12 col-sm-12"><hr class="bg-hr bg-hr-4" style="margin-top: 10px; margin-bottom: 10px; color: #dad2d2;"></div></div><div class="row"><div class="col-md-9 col-xs-12 col-sm-8"><div><h4 class="" style="margin-bottom: 5px; color: #ffffff;">Garden Herb Burger</h4><p class="color4-color" style="margin-top: 0px;">Our famous vegan burger!</p></div></div><div class="col-md-3 col-xs-12 col-sm-4 text-right align-column-center"><div><p class="color4-color">$13.00</p></div></div></div><div class="row bg-editor-hr-wrap"><div class="col-md-12 col-xs-12 col-sm-12"><hr class="bg-hr bg-hr-4" style="margin-top: 10px; margin-bottom: 10px; color: #dad2d2;"></div></div><div class="row"><div class="col-md-9 col-xs-12 col-sm-8"><div><h4 class="" style="margin-bottom: 5px; color: #ffffff;">Chicken Tenders</h4><p class="" style="margin-top: 0px; color: #ffffff;">with fries</p></div></div><div class="col-md-3 col-xs-12 col-sm-4 text-right align-column-center"><div><p class="color4-color">$10.00</p></div></div></div><div class="row bg-editor-hr-wrap"><div class="col-md-12 col-xs-12 col-sm-12"><hr class="bg-hr bg-hr-4" style="margin-top: 10px; margin-bottom: 10px; color: #dad2d2;"></div></div><div class="row"><div class="col-md-9 col-xs-12 col-sm-8"><div><h4 class="" style="margin-bottom: 5px; color: #ffffff;">Chef Salad</h4><p class="" style="margin-top: 0px; color: #ffffff;">with ham and bacon</p></div></div><div class="col-md-3 col-xs-12 col-sm-4 text-right align-column-center"><div><p class="color4-color">$9.00</p></div></div></div><div class="row bg-editor-hr-wrap hidden-xs hidden-sm"><div class="col-md-12 col-xs-12 col-sm-12"><div class="row bg-editor-hr-wrap"><div class="col-md-12 col-xs-12 col-sm-12"><hr class="bg-hr bg-hr-4" style="margin-top: 10px; margin-bottom: 10px; color: #dad2d2;"></div></div></div></div></div><div class="col-md-6 col-xs-12 col-sm-12"><div class="row bg-editor-hr-wrap"><div class="col-md-12 col-xs-12 col-sm-12"><div><hr class="bg-hr bg-hr-4" style="margin-top: 10px; margin-bottom: 10px; color: #dad2d2;"></div></div></div><div class="row"><div class="col-md-9 col-xs-12 col-sm-8"><div><h4 class="" style="margin-bottom: 5px; color: #ffffff;">Cheesesteak</h4><p class="" style="margin-top: 0px; color: #ffffff;">with extra pickles</p></div></div><div class="col-md-3 col-xs-12 col-sm-4 text-right align-column-center"><div><p class="color4-color">$12.00</p></div></div></div><div class="row bg-editor-hr-wrap"><div class="col-md-12 col-xs-12 col-sm-12"><hr class="bg-hr bg-hr-4" style="margin-top: 10px; margin-bottom: 10px; color: #dad2d2;"></div></div><div class="row"><div class="col-md-9 col-xs-12 col-sm-8"><div><h4 class="" style="margin-bottom: 5px; color: #ffffff;">Chicken &amp; Rice Bowl</h4><p class="" style="margin-top: 0px; color: #ffffff;">choose your flavor</p></div></div><div class="col-md-3 col-xs-12 col-sm-4 text-right align-column-center"><div><p class="color4-color">$19.00</p></div></div></div><div class="row bg-editor-hr-wrap"><div class="col-md-12 col-xs-12 col-sm-12"><hr class="bg-hr bg-hr-4" style="margin-top: 10px; margin-bottom: 10px; color: #dad2d2;"></div></div><div class="row"><div class="col-md-9 col-xs-12 col-sm-8"><div><h4 class="" style="margin-bottom: 5px; color: #ffffff;">10oz Steak</h4><p class="" style="margin-top: 0px; color: #ffffff;">with 2 sides</p></div></div><div class="col-md-3 col-xs-12 col-sm-4 text-right align-column-center"><div><p class="color4-color">$32.00</p></div></div></div><div class="row bg-editor-hr-wrap"><div class="col-md-12 col-xs-12 col-sm-12"><hr class="bg-hr bg-hr-4" style="margin-top: 10px; margin-bottom: 10px; color: #dad2d2;"></div></div><div class="row"><div class="col-md-9 col-xs-12 col-sm-8"><div><h4 class="" style="margin-bottom: 5px; color: #ffffff;">Surf &amp; Turf</h4><p class="" style="margin-top: 0px; color: #ffffff;">with 2 sides</p></div></div><div class="col-md-3 col-xs-12 col-sm-4 text-right align-column-center"><div><p class="color4-color">$42.00</p></div></div></div><div class="row bg-editor-hr-wrap"><div class="col-md-12 col-xs-12 col-sm-12"><hr class="bg-hr bg-hr-4" style="margin-top: 10px; margin-bottom: 10px; color: #dad2d2;"></div></div></div></div></div></div><div class="boldgrid-section"><div class="container"><div class="row" style="padding-top: 50px;"><div class="col-md-12 col-xs-12 col-sm-12 text-center"><p class="color1-color" style="margin-top: 22px; font-family: Great\ Vibes; font-size: 40px; margin-bottom: 0px;" data-font-family="Great Vibes">Decadent</p><h2 class="" style="margin-top: 0px;">DESSERTS</h2></div></div><div class="row bg-editor-hr-wrap" style="padding-bottom: 50px; padding-top: 20px;"><div class="col-md-6 col-xs-12 col-sm-12"><div><div class="row bg-editor-hr-wrap"><div class="col-md-12 col-xs-12 col-sm-12"><hr class="bg-hr bg-hr-4" style="margin-top: 10px; margin-bottom: 10px; color: #dad2d2;"></div></div><div class="row"><div class="col-md-9 col-xs-12 col-sm-8"><div><h4 class="" style="margin-bottom: 5px;">Carrot Cake</h4><p class="color1-color" style="margin-top: 0px;">Our premiere dessert!</p></div></div><div class="col-md-3 col-xs-12 col-sm-4 text-right align-column-center"><div><p class="color1-color">$4.00</p></div></div></div><div class="row bg-editor-hr-wrap"><div class="col-md-12 col-xs-12 col-sm-12"><hr class="bg-hr bg-hr-4" style="margin-top: 10px; margin-bottom: 10px; color: #dad2d2;"></div></div><div class="row"><div class="col-md-9 col-xs-12 col-sm-8"><div><h4 class="" style="margin-bottom: 5px;">Chocolate Cheesecake</h4><p class="" style="margin-top: 0px;">made with organic chocolate</p></div></div><div class="col-md-3 col-xs-12 col-sm-4 text-right align-column-center"><div><p class="color1-color">$5.00</p></div></div></div><div class="row bg-editor-hr-wrap"><div class="col-md-12 col-xs-12 col-sm-12"><hr class="bg-hr bg-hr-4" style="margin-top: 10px; margin-bottom: 10px; color: #dad2d2;"></div></div><div class="row"><div class="col-md-9 col-xs-12 col-sm-8"><div><h4 class="" style="margin-bottom: 5px;">Fresh Pies</h4><p class="" style="margin-top: 0px;">cherry, apple, or pumpkin</p></div></div><div class="col-md-3 col-xs-12 col-sm-4 text-right align-column-center"><div><p class="color1-color">$4.00</p></div></div></div><div class="row bg-editor-hr-wrap"><div class="col-md-12 col-xs-12 col-sm-12"><hr class="bg-hr bg-hr-4" style="margin-top: 10px; margin-bottom: 10px; color: #dad2d2;"></div></div></div></div><div class="col-md-6 col-xs-12 col-sm-12"><div><div class="row bg-editor-hr-wrap hidden-xs hidden-sm"><div class="col-md-12 col-xs-12 col-sm-12"><hr class="bg-hr bg-hr-4" style="margin-top: 10px; margin-bottom: 10px; color: #dad2d2;"></div></div><div class="row"><div class="col-md-9 col-xs-12 col-sm-8"><div><h4 class="" style="margin-bottom: 5px;">Snickerdoodle Cookies</h4><p class="" style="margin-top: 0px;">served warm</p></div></div><div class="col-md-3 col-xs-12 col-sm-4 text-right align-column-center"><div><p class="color1-color">$3.00</p></div></div></div><div class="row bg-editor-hr-wrap"><div class="col-md-12 col-xs-12 col-sm-12"><hr class="bg-hr bg-hr-4" style="margin-top: 10px; margin-bottom: 10px; color: #dad2d2;"></div></div><div class="row"><div class="col-md-9 col-xs-12 col-sm-8"><div><h4 class="" style="margin-bottom: 5px;">Cheesecake of the Day</h4><p class="" style="margin-top: 0px;">please ask for today\'s selection</p></div></div><div class="col-md-3 col-xs-12 col-sm-4 text-right align-column-center"><div><p class="color1-color">$4.00</p></div></div></div><div class="row bg-editor-hr-wrap"><div class="col-md-12 col-xs-12 col-sm-12"><div><hr class="bg-hr bg-hr-4" style="margin-top: 10px; margin-bottom: 10px; color: #dad2d2;"></div></div></div><div class="row"><div class="col-md-9 col-xs-12 col-sm-8"><div><h4 class="" style="margin-bottom: 5px;">Chocolate Lava Cake</h4><p class="" style="margin-top: 0px;">served with vanilla ice cream</p></div></div><div class="col-md-3 col-xs-12 col-sm-4 text-right align-column-center"><div><p class="color1-color">$7.00</p></div></div></div><div class="row bg-editor-hr-wrap"><div class="col-md-12 col-xs-12 col-sm-12"><hr class="bg-hr bg-hr-4" style="margin-top: 10px; margin-bottom: 10px; color: #dad2d2;"></div></div></div></div></div></div>
					</div>',
			),
			'events' => array(
				'post_type' => 'page',
				'post_title' => 'Events',
				'post_content' => '<div class="boldgrid-section background-fixed" style="background-image: url(' . get_parent_theme_file_uri('images/bold-fresh-cta.png') . '); background-size: cover; background-position: 50% 100%;" data-image-url="<' . get_parent_theme_file_uri('images/bold-fresh-cta.png') . ')"><div class="container"><div class="row" style="padding-top: 50px; padding-bottom: 50px;"><div class="col-md-12 col-xs-12 col-sm-12 text-center"><p class="color1-color" style="margin-top: 22px; font-family: Great\ Vibes; font-size: 44px; margin-bottom: 0px;" data-font-family="Great Vibes">View our</p><h1 class="" style="margin-top: 0px; color: #ffffff;">UPCOMING EVENTS</h1></div></div></div></div><div class="boldgrid-section"><div class="container"><div class="row" style="padding-bottom: 25px; padding-top: 75px;"><div class="col-md-12 col-xs-12 col-sm-12"><div class="bg-box color-3-text-contrast color3-background-color" style="padding: 2em;"><div class="row"><div class="col-md-6 col-xs-12 col-sm-6"><div><p class=""><img class="aligncenter" src="' . get_parent_theme_file_uri('images/bold-fresh-event1.png') . '"></p></div></div><div class="col-md-6 col-xs-12 col-sm-6"><div><p class="color1-color" style="margin-top: 0px; font-family: Great\ Vibes; font-size: 40px; margin-bottom: 0px;" data-font-family="Great Vibes">Join us!</p><h3 class="" style="margin-top: 0px;">COMEDY NIGHT</h3><h4 class="" style="margin-top: 20px; margin-bottom: 20px;">Wednesday, 9pm</h4><p class="">Share a meal and lots of laughs with us this Wednesday night. Melvin "Big Smoke" Harris will be making a special guest appearance that is guaranteed to entertain and have you rolling on the floor. Experience our new Late Night menu and enjoy specials deals during this once in a lifetime event!</p><p class="wow pulse" style="margin-top: 20px;" data-wow-duration="1.5s" data-wow-delay="0.5s"><a class="button-primary" href="contact/">Reservations</a></p></div></div></div></div></div></div><div class="row" style="padding-bottom: 25px; padding-top: 25px;"><div class="col-md-12 col-xs-12 col-sm-12"><div class="bg-box color-3-text-contrast color3-background-color" style="padding: 2em;"><div class="row"><div class="col-md-6 col-xs-12 col-sm-6"><div><p class=""><img class="aligncenter" src="' . get_parent_theme_file_uri('images/bold-fresh-event2.png') . '"></p></div></div><div class="col-md-6 col-xs-12 col-sm-6"><div><p class="color1-color" style="margin-top: 0px; font-family: Great\ Vibes; font-size: 40px; margin-bottom: 0px;" data-font-family="Great Vibes">Join us!</p><h3 class="" style="margin-top: 0px;">MOM\'S DAY BRUNCH</h3><h4 class="" style="margin-top: 20px; margin-bottom: 20px;">Sunday, 10am</h4><p class="">Treat your Mom to something special this Mother\'s Day at Bold Fresh. Come dressed to impress with the family and every mother will receive a complimentary framed photo of her loved ones to commemorate this precious moment. Reservations are required and seating is limited. Private dining is available for larger groups.</p><p class="wow pulse" style="margin-top: 20px;" data-wow-duration="1.5s" data-wow-delay="0.5s"><a class="button-primary" href="contact/">Reservations</a></p></div></div></div></div></div></div><div class="row" style="padding-bottom: 75px; padding-top: 25px;"><div class="col-md-12 col-xs-12 col-sm-12"><div class="bg-box color-3-text-contrast color3-background-color" style="padding: 2em;"><div class="row"><div class="col-md-6 col-xs-12 col-sm-6"><div><p class=""><img class="aligncenter" src="' . get_parent_theme_file_uri('images/bold-fresh-event3.png') . '"></p></div></div><div class="col-md-6 col-xs-12 col-sm-6"><div><p class="color1-color" style="margin-top: 0px; font-family: Great\ Vibes; font-size: 40px; margin-bottom: 0px;" data-font-family="Great Vibes">Join us!</p><h3 class="" style="margin-top: 0px;">80\'s NIGHT</h3><h4 class="" style="margin-top: 20px; margin-bottom: 20px;">Friday, 8pm</h4><p class="">It’s 80’s Night at BoldFresh! Come enjoy snacks and cocktails inspired by your favorite 80\'s pop culture icons. Classic 80’s movies will be playing all day and 80’s hit New Wave &amp; Pop tracks will fill the airwaves courtesy of DJ Jazzy Fresh.</p><p class="wow pulse" style="margin-top: 20px;" data-wow-duration="1.5s" data-wow-delay="0.5s"><a class="button-primary" href="contact/">Reservations</a></p></div></div></div></div></div></div></div></div><div class="boldgrid-section background-fixed" style="background-image: linear-gradient(to left, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url(' . get_parent_theme_file_uri('images/bold-fresh-background.png') . '); background-size: cover; background-position: 50% 50%;" data-image-url="' . get_parent_theme_file_uri('images/bold-fresh-background.png') . '" data-bg-overlaycolor="rgba(0,0,0,0.8)"><div class="container-fluid"><div class="row" style="padding-top: 25px; padding-bottom: 75px;"><div class="col-md-3 col-sm-3 col-xs-12"><div class="row" style="padding-top: 50px;"><div class="col-md-6 col-xs-6 col-sm-6 align-column-center text-right"><div><i class="fa fa-calendar" style="font-size: 30px; color: #ffffff;" aria-hidden="true"><span style="display: none;">&nbsp;</span></i></div></div><div class="col-md-6 col-xs-6 col-sm-6 align-column-center"><div><p class="" style="margin: 0px; font-size: 35px; color: #ffffff;">11</p></div></div></div><p class="color4-color" style="text-align: center; font-style: italic; font-size: 22px;">Years Open</p></div><div class="col-md-3 col-sm-3 col-xs-12"><div class="row" style="padding-top: 50px;"><div class="col-md-6 col-xs-6 col-sm-6 align-column-center text-right"><div><i class="fa fa-birthday-cake" style="font-size: 30px; color: #ffffff;" aria-hidden="true"><span style="display: none;">&nbsp;</span></i></div></div><div class="col-md-6 col-xs-6 col-sm-6 align-column-center"><div><p class="" style="margin: 0; font-size: 35px; color: #ffffff;">537</p></div></div></div><p class="color4-color" style="text-align: center; font-style: italic; font-size: 22px;">Birthdays Celebrated</p></div><div class="col-md-3 col-sm-3 col-xs-12"><div class="row" style="padding-top: 50px;"><div class="col-md-6 col-xs-6 col-sm-6 align-column-center text-right"><div><i class="fa fa-diamond" style="font-size: 30px; color: #ffffff;" aria-hidden="true"><span style="display: none;">&nbsp;</span></i></div></div><div class="col-md-6 col-xs-6 col-sm-6 align-column-center"><div><p class="" style="margin: 0; font-size: 35px; color: #ffffff;">8</p></div></div></div><p class="color4-color" style="text-align: center; font-style: italic; font-size: 22px;">Awards Won</p></div><div class="col-md-3 col-sm-3 col-xs-12"><div class="row" style="padding-top: 50px;"><div class="col-md-6 col-xs-6 col-sm-6 align-column-center text-right"><div><i class="fa fa-cutlery" style="font-size: 30px; color: #ffffff;" aria-hidden="true"><span style="display: none;">&nbsp;</span></i></div></div><div class="col-md-6 col-xs-6 col-sm-6 align-column-center"><div><p class="" style="margin: 0; font-size: 35px; color: #ffffff;">242</p></div></div></div><p class="color4-color" style="text-align: center; font-style: italic; font-size: 22px;">Unique Dishes Served</p></div></div></div></div>',
			),
			'contact' => array(
				'post_type' => 'page',
				'post_title' => 'Contact',
				'post_content' => '<div class="boldgrid-section background-fixed" style="background-image: url(' . get_parent_theme_file_uri('images/bold-fresh-cta.png') . '); background-size: cover; background-position: 50% 100%;" data-image-url="<' . get_parent_theme_file_uri('images/bold-fresh-cta.png') . ')"><div class="container"><div class="row" style="padding-top: 50px; padding-bottom: 50px;"><div class="col-md-12 col-xs-12 col-sm-12 text-center"><p class="color1-color" style="margin-top: 22px; font-family: Great\ Vibes; font-size: 44px; margin-bottom: 0px;" data-font-family="Great Vibes">Stop by</p><h1 class="" style="margin-top: 0px; color: #ffffff;">CONTACT US</h1></div></div></div></div><div class="boldgrid-section"><div class="container"><div class="row" style="padding-bottom: 75px; padding-top: 50px;"><div class="col-md-6 col-sm-12 col-xs-12"><p class="boldgrid-google-maps"><iframe style="max-width: 100%;" src="https://maps.google.com/maps?q=98024&amp;t=m&amp;z=16&amp;output=embed" width="555" height="365" frameborder="0"></iframe></p></div><div class="col-md-6 col-xs-12 col-sm-12 wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.5s"><div class="bg-box color-3-text-contrast color3-background-color" style="padding: 2em;"><div class="row bg-editor-hr-wrap"><div class="col-md-12 col-xs-12 col-sm-12"><div><hr class="bg-hr bg-hr-4" style="margin-top: 10px; margin-bottom: 10px; color: #dad2d2;"></div></div></div><h4 class="" style="margin-bottom: 5px; font-size: 21px;">Monday - Thursday</h4><p class="" style="margin-top: 0px;">8am - 11pm</p><div class="row bg-editor-hr-wrap"><div class="col-md-12 col-xs-12 col-sm-12"><div><hr class="bg-hr bg-hr-4" style="margin-top: 10px; margin-bottom: 10px; color: #dad2d2;"></div></div></div><h4 class="" style="margin-bottom: 5px; font-size: 21px;">Friday - Sunday</h4><p class="" style="margin-top: 0px;">8am - 2am</p><div class="row bg-editor-hr-wrap"><div class="col-md-12 col-xs-12 col-sm-12"><div><hr class="bg-hr bg-hr-4" style="margin-top: 10px; margin-bottom: 10px; color: #dad2d2;"></div></div></div><h4 class="" style="margin-bottom: 5px; font-size: 21px;">Select Special Events</h4><p class="" style="margin-top: 0px;">Restaurant open as needed.</p><div class="row bg-editor-hr-wrap"><div class="col-md-12 col-xs-12 col-sm-12"><div><hr class="bg-hr bg-hr-4" style="margin-top: 10px; margin-bottom: 10px; color: #dad2d2;"></div></div></div></div></div></div></div></div><div class="boldgrid-section color3-background-color color-3-text-contrast bg-background-color"><div class="container-fluid" style="transition: width 0.5s ease 0s;"><div class="row" style="padding-top: 50px;"><div class="col-md-12 col-xs-12 col-sm-12 text-center"><p class="color1-color" style="margin-top: 22px; font-family: Great\ Vibes; font-size: 40px; margin-bottom: 0px;" data-font-family="Great Vibes">Have questions?</p><h2 class="" style="margin-top: 0px;">SELECT SERVICE</h2></div></div><div class="row" style="padding-bottom: 50px; padding-top: 25px;"><div class="col-md-4 col-sm-12 col-xs-12 text-center"><div class="" style="padding: 1em;"><p class=""><img class="aligncenter" src="' . get_parent_theme_file_uri('images/bold-fresh-contact1.png') . '"></p><h3 style="text-align: center; margin-top: 35px;">Reserve a Table</h3><p class="">Whether you are planning an intimate dinner for friends, a corporate luncheon, or an extravagant soirée, you’ll find the perfect setting at BoldFresh. We’re sure we can accommodate your needs!</p><p class="wow pulse" style="margin: 25px 0;" data-wow-duration="1.5s" data-wow-delay="0.5s"><a class="button-primary" href="#">Reservations</a></p></div></div><div class="col-md-4 col-sm-6 col-xs-12 text-center"><div class="" style="padding: 1em;"><p class=""><img class="aligncenter" src="' . get_parent_theme_file_uri('images/bold-fresh-contact2.png') . '"></p><h3 class="" style="text-align: center; margin-top: 35px;">Celebrations</h3><p class="">Whether you’re celebrating a birthday, an engagement, or a company event, we’re happy to accommodate you. Special seating and private rooms make it possible to have any experience unique!</p><p class="wow pulse" style="margin: 25px 0;" data-wow-duration="1.5s" data-wow-delay="0.5s"><a class="button-primary" href="#">New Inquiry</a></p></div></div><div class="col-md-4 col-sm-6 col-xs-12 text-center"><div class="" style="padding: 1em;"><p class=""><img class="aligncenter" src="' . get_parent_theme_file_uri('images/bold-fresh-contact3.png') . '"></p><h3 class="" style="text-align: center; margin-top: 35px;">Catering</h3><p class="">We cater to groups of 10 up to 400, our restaurant features award-winning off-site catering and a full service event production team that will make sure every detail is in place, so you don’t have to.</p><p class="wow pulse" style="margin: 25px 0;" data-wow-duration="1.5s" data-wow-delay="0.5s"><a class="button-primary" href="#">Contact Us</a></p></div></div></div></div></div><div class="boldgrid-section background-fixed" style="background-image: linear-gradient(to left, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url(' . get_parent_theme_file_uri('images/bold-fresh-background.png') . '); background-size: cover; background-position: 50% 50%;" data-image-url="' . get_parent_theme_file_uri('images/bold-fresh-background.png') . '" data-bg-overlaycolor="rgba(0,0,0,0.8)"><div class="container"><div class="row" style="padding-top: 50px; padding-bottom: 50px;"><div class="col-md-12 col-xs-12 col-sm-12 text-center"><p class="color1-color" style="margin-top: 22px; font-family: Great\ Vibes; font-size: 40px; margin-bottom: 0px;" data-font-family="Great Vibes">Most recently</p><h2 class="" style="margin-top: 0px; color: #ffffff;">SAID ABOUT US</h2></div></div><div class="row" style="padding-bottom: 75px;"><div class="col-md-2 col-sm-1 col-xs-12"></div><div class="col-md-8 col-sm-10 col-xs-12 text-center"><p class=""><i class="fa fa-tripadvisor" style="font-size: 32px; border-radius: 50px; padding: 0.4em; margin-bottom: 15px; background-color: #ffffff; color: #000000;" aria-hidden="true"><span style="display: none;">&nbsp;</span></i></p><p class="" style="color: #ffffff;"><em>My birthday party was such an amazing experience! I can\'t thank you enough for paying attention to all the little things that really made it special for me. I’m looking forward to celebrating many more birthdays and other celebrations with you!</em></p><p class="" style="margin-top: 20px;"><i class="fa fa-star color4-color" style="margin-right: 3px;" aria-hidden="true"><span style="display: none;">&nbsp;</span></i><i class="fa fa-star color4-color" style="margin-right: 3px;" aria-hidden="true"><span style="display: none;">&nbsp;</span></i><i class="fa fa-star color4-color" style="margin-right: 3px;" aria-hidden="true"><span style="display: none;">&nbsp;</span></i><i class="fa fa-star color4-color" style="margin-right: 3px;" aria-hidden="true"><span style="display: none;">&nbsp;</span></i><i class="fa fa-star color4-color" style="margin-right: 3px;" aria-hidden="true"><span style="display: none;">&nbsp;</span></i></p><p class="color4-color" style="font-size: 19px; margin-top: 20px;">ADAM BARNES</p></div><div class="col-md-2 col-sm-1 col-xs-12"></div></div></div></div>',
			),
			'bloging-101' => array(
				'post_type' => 'post',
				'post_title' => 'Blogging 101',
				'thumbnail' => '{{image-blogging-101}}',
				'post_content' => '<div class="boldgrid-section"><div class="container"><div class="row">
					<div class="col-md-12 col-xs-12 col-sm-12"><h3>Pages vs. Posts</h3><p class="">If you\'re new to WordPress you may be wondering what\'s the big deal behind <em><strong>Pages</strong></em> and <em><strong>Posts</strong></em>. At first glance they appear to be one and the same: if you were to create either a new page or a new post you\'d be presented with nearly identical interfaces and in many cases the public appearance of pages and posts will look the same.</p><p class="">Don\'t let this fool you. There\'s a very fundamental difference between the two and that difference is what makes CMSs, like WordPress, great platforms for integrating blogs with traditional websites.</p><h4>Pages</h4><p class="">Think about the kind of pages that make up a typical website. Most often you\'ll see pages like "Home", "About Us", "Services", "Contact Us", etc. Within WordPress these are often treated as <em><strong>Pages</strong></em>; documents that have no particular regard for the time they were posted.</p><p class="">For example, when you visit the "About Us" page of your favorite company\'s website you don\'t expect the content to be very different from what was available there a week ago.</p><p class=""><!--more Read more &gt; --></p><h4>Posts</h4><p class="">Now take a moment to think of your favorite news website. A news site is an ideal example of when you\'d expect content to be different from the last time you visited — after all, news just wouldn\'t be news if it weren\'t current. In the case of news sites, <em><strong>Posts</strong></em> are most often used to write articles.</p><p class="">When you publish a post within WordPress it knows to treat the post differently than the way it treats a page. For example, when you enable a blog within BoldGrid Forge, it will list all of your published posts in reverse chronological order on your <em><strong>Blog</strong></em> page.</p><p class="">Your BoldGrid site can contain both pages and posts, i.e. you may have an "About Author" page to compliment your weekly blog. When done well, utilizing pages and posts in this way can help you build a more engaging experience for your visitors.</p></div></div></div></div>',

			),
			'basic-taxonomies' => array(
				'post_type' => 'post',
				'post_title' => 'Basic Taxonomies',
				'thumbnail' => '{{image-basic-taxonomies}}',
				'post_content' => '<div class="boldgrid-section"><div class="container"><div class="row">
					<div class="col-md-12 col-xs-12 col-sm-12"><h3>Categories and Tags</h3><p class="">If you write about a variety of subjects, categories can help your readers find the posts that are most relevant to them. For instance, if you run a consulting business, you may want some of your posts to reflect work you\'ve done with previous clients, while having other posts act as informational resources. In this particular case, you can set up 2 categories: one labeled <em><strong>Projects</strong></em> and another labeled <em><strong>Resources</strong></em>. You\'d then place your posts in their respective categories.</p><!--more Read more &gt; --><p class="">Categories are accessible from the post editor. There you can create new categories and assign them to your posts.</p><p class="">Tags, on the other hand, allow you to label your posts with relevant topics. For instance, within one of your resource posts you may choose to write about a set of project management tools. While you can certainly create a new category called "Project Management Tools," you may not plan to write about the topic often enough to justify giving it a dedicated category. Instead, you may want to tag your post with several topics that exists within the post; e.g. <em><strong>project management tools, communication, time tracking</strong></em>, etc.</p><p class="">What\'s great about tags is that they are searchable and provide your users another way to find content on your site. Anyone searching for "project management tools" will be able to locate any posts you\'ve tagged with those words!</p></div></div></div></div>',
			),
			'tips-for-writing' => array(
				'post_type' => 'post',
				'post_title' => 'Tips For Better Writing',
				'thumbnail' => '{{image-tips-better-writing}}',
				'post_content' => '<div class="boldgrid-section"><div class="container"><div class="row">
					<div class="col-md-12 col-xs-12 col-sm-12"><h3>Plan Your Content</h3><p class="">If you\'re considering adding a blog to your site, you\'ll want to have a plan beforehand. Planning your blog will help your subject matter remain consistent over time. It\'ll also help you determine whether or not there\'s enough material to maintain a steady stream of posts.</p><p class="">One pitfall many new bloggers run into is starting a blog that isn\'t posted to frequently enough. A shortage of recent posts can give your visitors a bad impression of your business. One may think "I wonder if they’re still in business" or "they may want to hire a writer."</p><p class="">A blog, like any other customer facing aspect of your business, communicates your brand. If it isn\'t maintained and given proper attention, people will notice. Post regularly and keep your content fresh. Give your audience a reason to visit often.</p><p class=""><!--more Read more &gt; --></p><h3>Find Your Audience</h3><p class="">While on the topic of audiences, you\'ll likely want to identify yours early on. If your blog is going to be set up to compliment a business, your target audience will likely be the same as your consumer base; you\'re then writing for the same people that buy your product. You\'ll want to allow any marketing material you\'ve used inform the style and tone of your writing. Think of your blog as an extension of your company\'s brand. If, on the other hand, your business is completely new or you don\'t happen to be selling anything in particular, this is the time to start thinking about your brand.</p></div></div></div></div>',
			),
			'wordcamp-101' => array(
				'post_type' => 'post',
				'post_title' => 'WordCamp 101',
				'thumbnail' => '{{image-wordcamp-101}}',
				'post_content' => '<div class="boldgrid-section"><div class="container"><div class="row">
					<div class="col-md-12 col-xs-12 col-sm-12"><p class="">What is WordCamp? It’s a place for WordPress enthusiasts to meet, greet, and speak about everything WordPress. Many in attendance play a much more active role in the WordPress community, guiding and assisting WordPress users all around the world through community-based Support Forums, and documentation from contributors on everything from installing WordPress to creating plugins.</p><h3>The WordPress Community</h3><p class="">At any given time, an announcement seeking speaker applications as well as organizing teams to attend WordCamp goes out to WordPress enthusiasts in North America, similar announcements can be seen in Africa, and Europe. As community members from around the world prepare for attendance, it’s at this time you may be wondering “What can you expect from attending a WordCamp?”.</p><p class="">It’s about everything WordPress. From developers and designers to first-time bloggers, WordCamp is a place to meet, collaborate, and discuss everything WordPress. The focus of the event is on using and developing for WordPress and all are welcome. First organized by Matt Mullenweg in 2006, and held in San Francisco, events continue to grow in attendance with local WordPress communities organizing over 796 WordCamp events in 65 countries spread across 6 continents. What stands out as astonishing is how the event organizers, speakers, and attendees are all volunteers from local WordPress communities. It is these local communities that together make the WordPress community as a whole, and that is the highlight of this post.</p><p class="">Visit the WordPress Support Forums and join in the community discussion here <a href="https://wordpress.org/support/" target="_blank" rel="noopener">https://wordpress.org/support/</a></p></div></div></div></div>',
			),
			'blog' => array(
				'post_type' => 'page',
				'post_title' => 'Blog',
			),
		);

		// Default to a static front page and assign the front and posts pages.
		$config['starter-content']['options'] = array(
			'show_on_front' => 'page',
			'page_on_front' => '{{homepage}}',
			'page_for_posts' => '{{blog}}',
		);

		// Primary background color.
		$config['customizer']['controls']['boldgrid_background_color']['default'] = 'color-neutral';

		// Primary headings color.
		$config['customizer']['controls']['bgtfw_headings_color']['default'] = 'color-2';

		// Primary color for site's title.
		$config['customizer']['controls']['bgtfw_site_title_color']['default'] = 'color-neutral';

		// Primary color for site's tagline.
		$config['customizer']['controls']['bgtfw_tagline_color']['default'] = 'color-4';

		// Header specific colors for background, headings, and links.
		$config['customizer']['controls']['bgtfw_header_color']['default'] = 'color-5';

		// Footer specific colors for background, headings, and links.
		$config['customizer']['controls']['bgtfw_footer_color']['default'] = 'color-5';
		$config['customizer']['controls']['bgtfw_footer_links']['default'] = 'color-1';

		// Hide titles on all pages, but show titles on posts.
		$config['customizer']['controls']['bgtfw_pages_display_title']['default'] = false;
		$config['customizer']['controls']['bgtfw_posts_display_title']['default'] = true;

		// Default header position is on top.
		$config['customizer']['controls']['bgtfw_header_layout_position']['default'] = 'header-top';

		// Default header is a fixed header.
		$config['customizer']['controls']['bgtfw_fixed_header']['default'] = true;

		// Default header layout will be layout-3.
		$config['customizer']['controls']['bgtfw_header_top_layouts']['default'] = 'layout-3';

		// Default header will be in container.
		$config['customizer']['controls']['header_container']['default'] = 'container';

		// Default footer will be in container.
		$config['customizer']['controls']['footer_container']['default'] = 'container';

		// Default footer layout will be layout-7.
		$config['customizer']['controls']['bgtfw_footer_layouts']['default'] = 'layout-7';

		// Show blog and archives in a 1 column layout.
		$config['customizer']['controls']['bgtfw_pages_blog_blog_page_layout_columns']['default'] = '1';

		// Show excerpts instead of full blog post on blog and archives.
		$config['customizer']['controls']['bgtfw_pages_blog_blog_page_layout_content']['default'] = 'excerpt';

		// The blog page will use design-3 as the default.
		$config['customizer']['controls']['bgtfw_blog_layout']['default'] = 'design-1';

		// Pages will not show a sidebar by default.
		$config['customizer']['controls']['bgtfw_layout_page']['default'] = 'no-sidebar';

		// Site's title typography defaults.
		$config['customizer']['controls']['bgtfw_site_title_typography']['default'] = array(
			'font-family' => 'Roboto',
			'font-size' => '42px',
			'text-transform' => 'uppercase',
			'line-height' => '1.1',
			'text-align' => 'left',
			'variant' => 'regular'
		);

		// Site's tagline typography defaults.
		$config['customizer']['controls']['bgtfw_tagline_typography']['default'] = array(
			'font-family' => 'Roboto',
			'font-size' => '30px',
			'text-transform' => 'uppercase',
			'line-height' => '1.1',
			'text-align' => 'left',
			'variant' => '100'
		);

		// Site's body typography defaults.
		$config['customizer']['controls']['bgtfw_body_typography']['default'] = array(
			'font-family' => 'Roboto',
			'font-size' => '17px',
			'line-height' => '1.4',
			'text-transform' => 'none',
			'variant' => '300'
		);

		// Site's headings typography defaults.
		$config['customizer']['controls']['bgtfw_headings_typography']['default'] = array(
			'font-family' => 'Roboto',
			'font-size' => '14px',
			'line-height' => '1.5',
			'text-transform' => 'none',
			'variant' => 'regular'
		);

		if ( ! class_exists( 'Boldgrid_Editor' ) ) {
			$config['scripts']['animate-css'] = true;
			$config['scripts']['wow-js'] = true;
		}

		// Main Menu configuration.
		$config['starter-content']['nav_menus']['main'] = array(
			'name' => __( 'Main Menu', 'bgtfw' ),
			'items' => array(
				'link_home', // Note that the core "home" page is actually a link in case a static front page is not used.
				'page_about' => array(
					'type' => 'post_type',
					'object' => 'page',
					'object_id' => '{{about}}',
				),
				'page_menu' => array(
					'type' => 'post_type',
					'object' => 'page',
					'object_id' => '{{menu}}',
				),
				'page_events' => array(
					'type' => 'post_type',
					'object' => 'page',
					'object_id' => '{{events}}',
				),
				'page_blog',
				'page_contact'=> array(
					'type' => 'post_type',
					'object' => 'page',
					'object_id' => '{{contact}}',
				),
			),
		);

		// Social Menu configuration.
		$config['starter-content']['nav_menus']['social'] = array(
			'name' => __( 'Social Media Links', 'bgtfw' ),
			'items' => array(
				'link_yelp',
				'link_facebook',
				'link_twitter',
				'link_instagram',
				'link_email',
			),
		);

		// Text Contrast Colors.
		$config['customizer-options']['colors']['light_text'] = '#ffffff';
		$config['customizer-options']['colors']['dark_text'] = '#333333';

		// Button Classes
		$config['components']['buttons']['variables']['button-primary-classes'] = '.btn, .btn-color-1, .btn-pill';
		$config['components']['buttons']['variables']['button-secondary-classes'] = '.btn, .btn-color-2, .btn-pill';

		// Social Icons.
		$config['social-icons']['size'] = 'large';

		// Remove footer menus when footer is disabled.
		$config['menu']['footer_menus'][] = 'social';

		// Configs above will override framework defaults.
		return $config;
	}
}

add_filter( 'boldgrid_theme_framework_config', 'boldgrid_prime_framework_config' );

// Load the BoldGrid Library
if ( ! class_exists( 'Boldgrid_Premium_Loader' ) ) {
	require_once get_template_directory() . '/inc/class-boldgrid-premium-loader.php';
}

$loader = new Boldgrid_Premium_Loader();

// Enable the ClaimPremiumKey notice.
add_filter( 'Boldgrid\Library\Library\Notice\ClaimPremiumKey_enable', '__return_true' );
