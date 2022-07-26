<?php
/**
 * The template part for displaying single-post
 *
 * @package Interior Designs
 * @subpackage interior_designs
 * @since Interior Designs 1.0
 */
?>
<?php 
  $archive_year  = get_the_time('Y'); 
  $archive_month = get_the_time('m'); 
  $archive_day   = get_the_time('d'); 
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
  <div class="services-box">
    <div class="upper-box mb-4">
      <h2 class="pt-0"><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
      <?php if( get_theme_mod( 'interior_designs_date_hide',true) != '') { ?>
        <span class="entry-date"><i class="far fa-calendar-alt mr-1"></i><a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span>
      <?php } ?>
    </div>      
    <div class="service-image m-2">
      <?php
        if ( ! is_single() ) {
          // If not a single post, highlight the gallery.
          if ( get_post_gallery() ) {
            echo '<div class="entry-gallery">';
              echo ( get_post_gallery() );
            echo '</div>';
          }
        };
      ?>
      <div class="middle">
        <div class="text"><i class="fas fa-th-large"></i></div>
      </div>
    </div>
    <div class="lower-box px-2 pt-0 pb-2">
      <?php if(get_theme_mod( 'interior_designs_comment_hide',true) != '' || get_theme_mod( 'interior_designs_author_hide',true) != '') { ?>
        <div class="metabox py-1 px-2 mb-2">
          <?php if( get_theme_mod( 'interior_designs_author_hide',true) != '') { ?>
            <span class="entry-author mr-2"><i class="fas fa-user mr-1"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span>
          <?php } ?>

          <?php if( get_theme_mod( 'interior_designs_comment_hide',true) != '') { ?>
            <span class="entry-comments"><i class="fa fa-comments mr-1" aria-hidden="true"></i><?php comments_number( __('0 Comment', 'interior-designs'), __('0 Comments', 'interior-designs'), __('% Comments', 'interior-designs') ); ?> </span>
          <?php } ?>
        </div>
      <?php } ?>
      <?php if(get_theme_mod('interior_designs_post_content') == 'Full Content'){ ?>
        <?php the_content(); ?>
      <?php }
      if(get_theme_mod('interior_designs_post_content', 'Excerpt Content') == 'Excerpt Content'){ ?>
        <?php if(get_the_excerpt()) { ?>
          <div class="entry-content"><p><?php $excerpt = get_the_excerpt(); echo esc_html( interior_designs_string_limit_words( $excerpt, esc_attr(get_theme_mod('interior_designs_post_excerpt_length','20')))); ?><?php echo esc_html( get_theme_mod('interior_designs_button_excerpt_suffix','[...]') ); ?></p></div>
        <?php }?>
      <?php }?>
      <?php if ( get_theme_mod('interior_designs_post_button_text','Read More') != '' ) {?>
        <div class="service-btn">
          <a href="<?php the_permalink(); ?>"><?php echo esc_html( get_theme_mod('interior_designs_post_button_text',__( 'Read More','interior-designs' )) ); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('interior_designs_post_button_text',__( 'Read More','interior-designs' )) ); ?></span></a>
        </div>
      <?php }?>
    </div>
  </div>
</article>