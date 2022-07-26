<?php
$designexo_main_slider_options = get_theme_mod('designexo_main_slider_content');
$designexo_main_slider_disabled = get_theme_mod('designexo_main_slider_disabled', true);
$designexo_main_slider_overlay_disable = get_theme_mod('designexo_main_slider_overlay_disable', true);
if( $designexo_main_slider_disabled == true ): ?>
<section class="theme-main-slider" id="theme-slider">
    <div id="theme-main-slider" class="owl-carousel owl-theme">
		<?php 
			$designexo_main_slider_options = json_decode($designexo_main_slider_options);
			if( $designexo_main_slider_options!='' )
				{
					foreach($designexo_main_slider_options as $slide_iteam){	
						$title = ! empty( $slide_iteam->title ) ? $slide_iteam->title : '';
						$subtitle = ! empty( $slide_iteam->subtitle ) ? $slide_iteam->subtitle : '';
						$img_description = ! empty( $slide_iteam->text ) ? $slide_iteam->text : '';
						$readmorelink = ! empty( $slide_iteam->link ) ? $slide_iteam->link : '';	
						$readmore_button = ! empty( $slide_iteam->button_text ) ? $slide_iteam->button_text : '';
						$open_new_tab = $slide_iteam->open_new_tab;
						
			if($slide_iteam->image_url!=''){ ?>			
			<div class="item" style="background-image:url(<?php echo $slide_iteam->image_url; ?>);">
			<?php } ?>
			<?php if($title != '' || $img_description!= '' || $readmore_button!=''){ ?>
				<div class="container theme-slider-content">
					<div class="theme-text-left theme-caption-bg ">
					<?php if($subtitle != ''){ ?>
						<h5 class="sub-title"><?php echo $subtitle; ?></h5>
				    <?php } ?>
					<?php if($title != ''){ ?>
						<h1 class="title-large"><?php echo wp_kses_post( html_entity_decode( $title ) ); ?></h1>
				    <?php } ?>
					<?php if($img_description!= ''){ ?>
						<p class="description"><?php echo wp_kses_post( html_entity_decode( $img_description ) ); ?></p>
					<?php } ?>
					<?php if($readmore_button!='' ) { ?>
						<div class="mt-4 pt-2">
							<a href="<?php echo $readmorelink ;?>" <?php if($open_new_tab== 'yes' || $open_new_tab== '1') { echo "target='_blank'"; } ?> class="btn-small btn-slider"><?php echo esc_html($readmore_button) ?></a>
						</div>
                    <?php } ?>						
					</div>
				</div>
			<?php } ?>
			<?php if($designexo_main_slider_overlay_disable == true) { ?>
			<div class="overlay"></div>
			<?php } ?>
			<?php if($slide_iteam->image_url!=''){ ?>			
			</div>
			<?php } ?>			
			<?php							
				}	
		    }
	        else { 
			
			?>
			<div class="item" style="background-image:url(<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-slide1.jpg);">
				<div class="container theme-slider-content">
					<div class="theme-text-left theme-caption-bg">
					    <h5 class="sub-title"><?php esc_html_e('Interior Design','arile-extra'); ?></h5>
						<h1 class="title-large"><?php esc_html_e('Great Creative Designs','arile-extra'); ?></h1>
						<p class="description"><?php esc_html_e('We provide all types of interior and architecture design services such as exterior design, kitchen design, room design, furniture design, light design, etc. With the help of which you can build your dream home.','arile-extra'); ?></p>
						<div class="mt-4 pt-2">
							<a href="#" class="btn-small btn-slider"><?php esc_html_e('Check it out','arile-extra'); ?></a>
						</div>							
					</div>
				</div>
				<?php if($designexo_main_slider_overlay_disable == true) { ?>
				<div class="overlay"></div>
				<?php } ?>
			</div>
			
			<div class="item" style="background-image:url(<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-slide2.jpg);">
				<div class="container theme-slider-content">
					<div class="theme-text-left theme-caption-bg">
					    <h5 class="sub-title"><?php esc_html_e('Classy Renovation','arile-extra'); ?></h5>
						<h1 class="title-large"><?php esc_html_e('Style & Confort','arile-extra'); ?></h1>
						<p class="description"><?php esc_html_e('We provide all types of interior and architecture design services such as exterior design, kitchen design, room design, furniture design, light design, etc. With the help of which you can build your dream home.','arile-extra'); ?></p>
						<div class="mt-4 pt-2">
							<a href="#" class="btn-small btn-slider"><?php esc_html_e('Check it out','arile-extra'); ?></a>
						</div>							
					</div>
				</div>
				<?php if($designexo_main_slider_overlay_disable == true) { ?>
				<div class="overlay"></div>
				<?php } ?>
			</div>
	        <?php } ?>	
		</div>		
</section>
<?php endif; ?>