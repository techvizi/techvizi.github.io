<?php 
	$interior_designs_custom_css ='';

	/*---------------------------Width Layout -------------------*/
	$interior_designs_theme_lay = get_theme_mod( 'interior_designs_width_options','Full Layout');
    if($interior_designs_theme_lay == 'Full Layout'){
		$interior_designs_custom_css .='body{';
			$interior_designs_custom_css .='max-width: 100%;';
		$interior_designs_custom_css .='}';
	}else if($interior_designs_theme_lay == 'Contained Layout'){
		$interior_designs_custom_css .='body{';
			$interior_designs_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$interior_designs_custom_css .='}';
	}else if($interior_designs_theme_lay == 'Boxed Layout'){
		$interior_designs_custom_css .='body{';
			$interior_designs_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$interior_designs_custom_css .='}';
	}

	/*------ Button Style -------*/
	$interior_designs_top_buttom_padding = get_theme_mod('interior_designs_top_button_padding');
	$interior_designs_left_right_padding = get_theme_mod('interior_designs_left_button_padding');
	if($interior_designs_top_buttom_padding != false || $interior_designs_left_right_padding != false ){
		$interior_designs_custom_css .='.service-btn a, #comments input[type="submit"].submit{';
			$interior_designs_custom_css .='padding-top: '.esc_attr($interior_designs_top_buttom_padding).'px; padding-bottom: '.esc_attr($interior_designs_top_buttom_padding).'px; padding-left: '.esc_attr($interior_designs_left_right_padding).'px; padding-right: '.esc_attr($interior_designs_left_right_padding).'px;';
		$interior_designs_custom_css .='}';
	}

	$interior_designs_button_border_radius = get_theme_mod('interior_designs_button_border_radius');
	$interior_designs_custom_css .='.service-btn a, #comments input[type="submit"].submit{';
		$interior_designs_custom_css .='border-radius: '.esc_attr($interior_designs_button_border_radius).'px;';
	$interior_designs_custom_css .='}';

	/*-------------- Woocommerce Button  -------------------*/

	$interior_designs_woocommerce_button_padding_top = get_theme_mod('interior_designs_woocommerce_button_padding_top');
	if($interior_designs_woocommerce_button_padding_top != false){
		$interior_designs_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button.alt, a.button.wc-forward, .woocommerce .cart .button, .woocommerce .cart input.button{';
			$interior_designs_custom_css .='padding-top: '.esc_attr($interior_designs_woocommerce_button_padding_top).'px; padding-bottom: '.esc_attr($interior_designs_woocommerce_button_padding_top).'px;';
		$interior_designs_custom_css .='}';
	}

	$interior_designs_woocommerce_button_padding_right = get_theme_mod('interior_designs_woocommerce_button_padding_right');
	if($interior_designs_woocommerce_button_padding_right != false){
		$interior_designs_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button.alt, a.button.wc-forward, .woocommerce .cart .button, .woocommerce .cart input.button{';
			$interior_designs_custom_css .='padding-left: '.esc_attr($interior_designs_woocommerce_button_padding_right).'px; padding-right: '.esc_attr($interior_designs_woocommerce_button_padding_right).'px;';
		$interior_designs_custom_css .='}';
	}

	$interior_designs_woocommerce_button_border_radius = get_theme_mod('interior_designs_woocommerce_button_border_radius');
	if($interior_designs_woocommerce_button_border_radius != false){
		$interior_designs_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button.alt, a.button.wc-forward, .woocommerce .cart .button, .woocommerce .cart input.button{';
			$interior_designs_custom_css .='border-radius: '.esc_attr($interior_designs_woocommerce_button_border_radius).'px;';
		$interior_designs_custom_css .='}';
	}

	$interior_designs_related_product = get_theme_mod('interior_designs_related_product',true);

	if($interior_designs_related_product == false){
		$interior_designs_custom_css .='.related.products{';
			$interior_designs_custom_css .='display: none;';
		$interior_designs_custom_css .='}';
	}

	$interior_designs_woocommerce_product_border = get_theme_mod('interior_designs_woocommerce_product_border',true);

	if($interior_designs_woocommerce_product_border == false){
		$interior_designs_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$interior_designs_custom_css .='border: none;';
		$interior_designs_custom_css .='}';
	}

	$interior_designs_woocommerce_product_padding_top = get_theme_mod('interior_designs_woocommerce_product_padding_top',10);
	if($interior_designs_woocommerce_product_padding_top != false){
		$interior_designs_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$interior_designs_custom_css .='padding-top: '.esc_attr($interior_designs_woocommerce_product_padding_top).'px; padding-bottom: '.esc_attr($interior_designs_woocommerce_product_padding_top).'px;';
		$interior_designs_custom_css .='}';
	}

	$interior_designs_woocommerce_product_padding_right = get_theme_mod('interior_designs_woocommerce_product_padding_right',10);
	if($interior_designs_woocommerce_product_padding_right != false){
		$interior_designs_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$interior_designs_custom_css .='padding-left: '.esc_attr($interior_designs_woocommerce_product_padding_right).'px; padding-right: '.esc_attr($interior_designs_woocommerce_product_padding_right).'px;';
		$interior_designs_custom_css .='}';
	}

	$interior_designs_woocommerce_product_border_radius = get_theme_mod('interior_designs_woocommerce_product_border_radius');
	if($interior_designs_woocommerce_product_border_radius != false){
		$interior_designs_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$interior_designs_custom_css .='border-radius: '.esc_attr($interior_designs_woocommerce_product_border_radius).'px;';
		$interior_designs_custom_css .='}';
	}

	$interior_designs_woocommerce_product_box_shadow = get_theme_mod('interior_designs_woocommerce_product_box_shadow');
	if($interior_designs_woocommerce_product_box_shadow != false){
		$interior_designs_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$interior_designs_custom_css .='box-shadow: '.esc_attr($interior_designs_woocommerce_product_box_shadow).'px '.esc_attr($interior_designs_woocommerce_product_box_shadow).'px '.esc_attr($interior_designs_woocommerce_product_box_shadow).'px #aaa;';
		$interior_designs_custom_css .='}';
	}

	/*------ Slider show/hide -------*/
	if(get_theme_mod('interior_designs_slider_arrows') == false){
		$interior_designs_custom_css .=' .page-template-custom-frontpage #header{';
			$interior_designs_custom_css .='position: static; margin: 0;';
		$interior_designs_custom_css .='}';
		$interior_designs_custom_css .=' .page-template-custom-frontpage header{';
			$interior_designs_custom_css .='border-bottom: 5px solid '.esc_attr($interior_designs_theme_color_first).';';
		$interior_designs_custom_css .='}';
	}

	/*---- Preloader Color ----*/
	$interior_designs_preloader_color = get_theme_mod('interior_designs_preloader_color');
	$interior_designs_preloader_bg_color = get_theme_mod('interior_designs_preloader_bg_color');

	if($interior_designs_preloader_color != false){
		$interior_designs_custom_css .='.preloader-squares .square, .preloader-chasing-squares .square{';
			$interior_designs_custom_css .='background-color: '.esc_attr($interior_designs_preloader_color).';';
		$interior_designs_custom_css .='}';
	}
	if($interior_designs_preloader_bg_color != false){
		$interior_designs_custom_css .='.preloader{';
			$interior_designs_custom_css .='background-color: '.esc_attr($interior_designs_preloader_bg_color).';';
		$interior_designs_custom_css .='}';
	}

	/*---- Copyright css ----*/
	$interior_designs_copyright_fontsize = get_theme_mod('interior_designs_copyright_fontsize',16);
	if($interior_designs_copyright_fontsize != false){
		$interior_designs_custom_css .='#footer p{';
			$interior_designs_custom_css .='font-size: '.esc_attr($interior_designs_copyright_fontsize).'px; ';
		$interior_designs_custom_css .='}';
	}

	$interior_designs_copyright_top_bottom_padding = get_theme_mod('interior_designs_copyright_top_bottom_padding',15);
	if($interior_designs_copyright_top_bottom_padding != false){
		$interior_designs_custom_css .='#footer {';
			$interior_designs_custom_css .='padding-top:'.esc_attr($interior_designs_copyright_top_bottom_padding).'px; padding-bottom: '.esc_attr($interior_designs_copyright_top_bottom_padding).'px; ';
		$interior_designs_custom_css .='}';
	}

	$interior_designs_copyright_alignment = get_theme_mod( 'interior_designs_copyright_alignment','Center');
    if($interior_designs_copyright_alignment == 'Left'){
		$interior_designs_custom_css .='#footer p{';
			$interior_designs_custom_css .='text-align:left;';
		$interior_designs_custom_css .='}';
	}else if($interior_designs_copyright_alignment == 'Center'){
		$interior_designs_custom_css .='#footer p{';
			$interior_designs_custom_css .='text-align:center;';
		$interior_designs_custom_css .='}';
	}else if($interior_designs_copyright_alignment == 'Right'){
		$interior_designs_custom_css .='#footer p{';
			$interior_designs_custom_css .='text-align:right;';
		$interior_designs_custom_css .='}';
	}

	/*------- Wocommerce sale css -----*/
	$interior_designs_woocommerce_sale_top_padding = get_theme_mod('interior_designs_woocommerce_sale_top_padding');
	$interior_designs_woocommerce_sale_left_padding = get_theme_mod('interior_designs_woocommerce_sale_left_padding');
	$interior_designs_custom_css .=' .woocommerce span.onsale{';
		$interior_designs_custom_css .='padding-top: '.esc_attr($interior_designs_woocommerce_sale_top_padding).'px; padding-bottom: '.esc_attr($interior_designs_woocommerce_sale_top_padding).'px; padding-left: '.esc_attr($interior_designs_woocommerce_sale_left_padding).'px; padding-right: '.esc_attr($interior_designs_woocommerce_sale_left_padding).'px;';
	$interior_designs_custom_css .='}';

	$interior_designs_woocommerce_sale_border_radius = get_theme_mod('interior_designs_woocommerce_sale_border_radius', 50);
	$interior_designs_custom_css .='.woocommerce span.onsale{';
		$interior_designs_custom_css .='border-radius: '.esc_attr($interior_designs_woocommerce_sale_border_radius).'px;';
	$interior_designs_custom_css .='}';

	$interior_designs_sale_position = get_theme_mod( 'interior_designs_sale_position','right');
    if($interior_designs_sale_position == 'left'){
		$interior_designs_custom_css .='.woocommerce ul.products li.product .onsale{';
			$interior_designs_custom_css .='left: -10px; right: auto;';
		$interior_designs_custom_css .='}';
	}else if($interior_designs_sale_position == 'right'){
		$interior_designs_custom_css .='.woocommerce ul.products li.product .onsale{';
			$interior_designs_custom_css .='left: auto; right: 0;';
		$interior_designs_custom_css .='}';
	}

	// footer background css
	$interior_designs_footer_background_color = get_theme_mod('interior_designs_footer_background_color');
	$interior_designs_custom_css .='.footertown{';
		$interior_designs_custom_css .='background-color: '.esc_attr($interior_designs_footer_background_color).';';
	$interior_designs_custom_css .='}';

	$interior_designs_footer_background_img = get_theme_mod('interior_designs_footer_background_img');
	if($interior_designs_footer_background_img != false){
		$interior_designs_custom_css .='.footertown{';
			$interior_designs_custom_css .='background: url('.esc_attr($interior_designs_footer_background_img).') no-repeat; background-size: cover; background-attachment: fixed;';
		$interior_designs_custom_css .='}';
	}

	/*---- Comment form ----*/
	$interior_designs_comment_width = get_theme_mod('interior_designs_comment_width', '100');
	$interior_designs_custom_css .='#comments textarea{';
		$interior_designs_custom_css .=' width:'.esc_attr($interior_designs_comment_width).'%;';
	$interior_designs_custom_css .='}';

	$interior_designs_comment_submit_text = get_theme_mod('interior_designs_comment_submit_text', 'Post Comment');
	if($interior_designs_comment_submit_text == ''){
		$interior_designs_custom_css .='#comments p.form-submit {';
			$interior_designs_custom_css .='display: none;';
		$interior_designs_custom_css .='}';
	}

	$interior_designs_comment_title = get_theme_mod('interior_designs_comment_title', 'Leave a Reply');
	if($interior_designs_comment_title == ''){
		$interior_designs_custom_css .='#comments h2#reply-title {';
			$interior_designs_custom_css .='display: none;';
		$interior_designs_custom_css .='}';
	}

	// Topbar padding
	$interior_designs_topbar_top_bottom = get_theme_mod('interior_designs_topbar_top_bottom', 5);
	$interior_designs_custom_css .='.top-header{';
		$interior_designs_custom_css .=' padding-top:'.esc_attr($interior_designs_topbar_top_bottom).'px; padding-bottom:'.esc_attr($interior_designs_topbar_top_bottom).'px;';
	$interior_designs_custom_css .='}';

	// Sticky Header padding
	$interior_designs_sticky_header_padding = get_theme_mod('interior_designs_sticky_header_padding');
	$interior_designs_custom_css .='.fixed-header{';
		$interior_designs_custom_css .=' padding-top:'.esc_attr($interior_designs_sticky_header_padding).'px; padding-bottom:'.esc_attr($interior_designs_sticky_header_padding).'px;';
	$interior_designs_custom_css .='}';

	// Navigation Font Size 
	$interior_designs_nav_font_size = get_theme_mod('interior_designs_nav_font_size');
	if($interior_designs_nav_font_size != false){
		$interior_designs_custom_css .='.primary-navigation ul li a{';
			$interior_designs_custom_css .='font-size: '.esc_attr($interior_designs_nav_font_size).'px;';
		$interior_designs_custom_css .='}';
	}

	$interior_designs_navigation_case = get_theme_mod('interior_designs_navigation_case', 'capitalize');
	if($interior_designs_navigation_case == 'uppercase' ){
		$interior_designs_custom_css .='.primary-navigation ul li a{';
			$interior_designs_custom_css .=' text-transform: uppercase;';
		$interior_designs_custom_css .='}';
	}elseif($interior_designs_navigation_case == 'capitalize' ){
		$interior_designs_custom_css .='.primary-navigation ul li a{';
			$interior_designs_custom_css .=' text-transform: capitalize;';
		$interior_designs_custom_css .='}';
	}

	//Site title Font size
	$interior_designs_site_title_fontsize = get_theme_mod('interior_designs_site_title_fontsize');
	$interior_designs_custom_css .='.logo h1, .logo p.site-title{';
		$interior_designs_custom_css .='font-size: '.esc_attr($interior_designs_site_title_fontsize).'px;';
	$interior_designs_custom_css .='}';

	$interior_designs_site_description_fontsize = get_theme_mod('interior_designs_site_description_fontsize');
	$interior_designs_custom_css .='.logo p.site-description{';
		$interior_designs_custom_css .='font-size: '.esc_attr($interior_designs_site_description_fontsize).'px;';
	$interior_designs_custom_css .='}';