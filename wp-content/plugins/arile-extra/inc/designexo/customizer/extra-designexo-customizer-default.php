<?php
/**
 *
 * @package arile-extra
 */	

if ( ! function_exists( 'arileextra_designexo_main_slider_default_content' ) ) :
		/* Main slider content  */
		function arileextra_designexo_main_slider_default_content( $wp_customize ){
			
					$designexo_main_slider_data = $wp_customize->get_setting( 'designexo_main_slider_content' );
						if ( ! empty( $designexo_main_slider_data ) ) {
						$designexo_main_slider_data->default = json_encode( array(
						array(
						'title'      => esc_html__( 'Great Creative Designs', 'arile-extra' ),
						'subtitle'       => esc_html__( 'Interior Design', 'arile-extra' ),
						'text'       => esc_html__( 'We provide all types of interior and architecture design services such as exterior design, kitchen design, room design, furniture design, light design, etc. With the help of which you can build your dream home.', 'arile-extra' ),
						'button_text'      => __('Check it out','arile-extra'),
						'link'       => '#',
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-slide1.jpg',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b10',				
						),
						array(
						'title'      => esc_html__( 'Living Area Redesign', 'arile-extra' ),
						'subtitle'       => esc_html__( 'Enjoy Your Space', 'arile-extra' ),
						'text'       => esc_html__( 'We provide all types of interior and architecture design services such as exterior design, kitchen design, room design, furniture design, light design, etc. With the help of which you can build your dream home.', 'arile-extra' ),
						'button_text'      => __('Check it out','arile-extra'),
						'link'       => '#',
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-slide2.jpg',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b14',
						),
						
					) );
				}
		}
add_action( 'customize_register', 'arileextra_designexo_main_slider_default_content' );
endif;

/* Theme Info content  */
if ( ! function_exists( 'arileextra_designexo_theme_info_default_content' ) ) :		
    function arileextra_designexo_theme_info_default_content( $wp_customize ){
			$designexo_theme_info_content_control = $wp_customize->get_setting( 'designexo_theme_info_content' );
				if ( ! empty( $designexo_theme_info_content_control ) ) {
					$designexo_theme_info_content_control->default = json_encode( array(
						array(
						'icon_value' => 'fa fa-star-o',
						'title'      => esc_html__( 'Award Winning Solutions', 'arile-extra' ),
						'text'       => esc_html__( 'Our unique offer', 'arile-extra' ),
						'id'         => 'customizer_repeater_56d7ea7f40b21',
						),
						array(
						'icon_value' => 'fa fa-calendar',
						'title'      => esc_html__( 'Exclusive 10 Years Warranty', 'arile-extra' ),
						'text'       => esc_html__( 'Whats included', 'arile-extra' ),
						'id'         => 'customizer_repeater_56d7ea7f40b22',
						),
						array(
						'icon_value' => 'fa fa-home',
						'title'      => esc_html__( 'Modern Interior Projects', 'arile-extra' ),
						'text'       => esc_html__( 'See our works', 'arile-extra' ),
						'id'         => 'customizer_repeater_56d7ea7f40b23',
						),
						array(
						'icon_value' => 'fa fa-pencil',
						'title'      => esc_html__( 'Get a personal estimate', 'designexo' ),
						'text'       => esc_html__( 'Contact us', 'designexo' ),
						'id'         => 'customizer_repeater_56d7ea7f40b26',
						),
						
					) );

				}
	    }
add_action( 'customize_register', 'arileextra_designexo_theme_info_default_content' );
endif;


/* Service content  */
if ( ! function_exists( 'arileextra_designexo_service_default_content' ) ) :		
    function arileextra_designexo_service_default_content( $wp_customize ){
		
			$designexo_service_data = $wp_customize->get_setting( 'designexo_service_content' );
				if ( ! empty( $designexo_service_data ) ) {
					$designexo_service_data->default = json_encode( array(
						array(
						'icon_value' => 'fa-laptop',
						'title'      => esc_html__( 'Interior Design', 'arile-extra' ),
						'text'       => 'Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.',
						'choice'    => 'customizer_repeater_image',
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-service1.jpg',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b15',
						),
						array(
						'icon_value' => 'fa fa-opencart',
						'title'      => esc_html__( 'Architectural Design', 'arile-extra' ),
						'text'       => 'Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.',
						'choice'    => 'customizer_repeater_image',
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-service2.jpg',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b16',
						),
						array(
						'icon_value' => 'fa fa-users',
						'title'      => esc_html__( 'Exterior Design', 'arile-extra' ),
						'text'       => 'Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.',
						'choice'    => 'customizer_repeater_image',
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-service3.jpg',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b17',
						),
						
					) );

				}
	    }
add_action( 'customize_register', 'arileextra_designexo_service_default_content' );
endif;

/* Project content  */
if ( ! function_exists( 'arileextra_designexo_project_default_content' ) ) :		
	function arileextra_designexo_project_default_content( $wp_customize ){

					$designexo_project_data = $wp_customize->get_setting( 'designexo_project_content' );
					if ( ! empty( $designexo_project_data ) ) 
					{ $designexo_project_data->default = json_encode( array(
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-project1.jpg',
						'title'      => __('BEDROOM LIGHTING DÉCOR','arile-extra'),
						'text'       => __('','arile-extra'),	
						'id'         => 'customizer_repeater_56d7ea7f40b30',
						),
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-project2.jpg',
						'title'      => __('EXTERIOR RENOVATION','arile-extra'),
						'text'       => __('','arile-extra'),
						'id'         => 'customizer_repeater_56d7ea7f40b31',
						),
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-project3.jpg',
						'title'      => __('ARCHITECTURE DESIGN','arile-extra'),
						'text'       => __('','arile-extra'),
						'id'         => 'customizer_repeater_56d7ea7f40b71',
						),						
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-project4.jpg',
						'title'      => __('MODULAR KITCHEN DESIGN','arile-extra'),
						'text'       => __('','arile-extra'),
						'id'         => 'customizer_repeater_56d7ea7f40b32',
						),
						
					) );
				}
        }
add_action( 'customize_register', 'arileextra_designexo_project_default_content' );
endif;

/* Testimonial content  */
if ( ! function_exists( 'arileextra_designexo_testimonial_default_content' ) ) :		
	function arileextra_designexo_testimonial_default_content( $wp_customize ){
				$designexo_testimonial_data = $wp_customize->get_setting( 'designexo_testimonial_content' );
				if ( ! empty( $designexo_testimonial_data ) ) 
				{			
					$designexo_testimonial_data->default = json_encode( array(
						array(
						'title'      => 'Olivia Kevinson',
						'text'       => '"You guys are legendary! You guys are great and having amazing support & service. I couldn’t ask for any better. Thank you!"',
						'designation' => __('Founder','arile-extra'),
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-user1.jpg',
						'id'         => 'customizer_repeater_56d7ea7f40b30',
						),
						array(
						'title'      => 'Mitchell Harris',
						'text'       => '"You guys are legendary! You guys are great and having amazing support & service. I couldn’t ask for any better. Thank you!"',
						'designation' => __('Financer','arile-extra'),
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-user2.jpg',
						'id'         => 'customizer_repeater_56d7ea7f40b31',
						),
						array(
						'title'      => 'Julia Cloe',
						'text'       => '"You guys are legendary! You guys are great and having amazing support & service. I couldn’t ask for any better. Thank you!"',
						'designation' => __('Sales Manager','arile-extra'),
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-user3.jpg',
						'id'         => 'customizer_repeater_56d7ea7f40b33',
						),
					) );
				}
        }
add_action( 'customize_register', 'arileextra_designexo_testimonial_default_content' );
endif;