<?php 
if ( ! function_exists( 'interior_designs_related_posts_function' ) ) {
	function interior_designs_related_posts_function() {
		wp_reset_postdata();
		global $post;

		// Define shared post arguments
		$args = array(
			'no_found_rows'          => true,
			'update_post_meta_cache' => false,
			'update_post_term_cache' => false,
			'ignore_sticky_posts'    => 1,
			'orderby'                => 'rand',
			'post__not_in'           => array( $post->ID ),
			'posts_per_page'    => absint( get_theme_mod( 'interior_designs_related_post_count', '3' ) ),
		);
		// Related by categories
		if ( get_theme_mod( 'interior_designs_post_order', 'categories' ) == 'categories' ) {

			$cats = get_post_meta( $post->ID, 'related-posts', true );

			if ( ! $cats ) {
				$cats                 = wp_get_post_categories( $post->ID, array( 'fields' => 'ids' ) );
				$args['category__in'] = $cats;
			} else {
				$args['cat'] = $cats;
			}
		}
		// Related by tags
		if ( get_theme_mod( 'interior_designs_post_order', 'categories' ) == 'tags' ) {

			$tags = get_post_meta( $post->ID, 'related-posts', true );

			if ( ! $tags ) {
				$tags            = wp_get_post_tags( $post->ID, array( 'fields' => 'ids' ) );
				$args['tag__in'] = $tags;
			} else {
				$args['tag_slug__in'] = explode( ',', $tags );
			}
			if ( ! $tags ) {
				$break = true;
			}
		}

		$query = ! isset( $break ) ? new WP_Query( $args ) : new WP_Query();

		return $query;
	}
}

$related_posts = interior_designs_related_posts_function(); ?>

<?php if ( $related_posts->have_posts() ): ?>

	<div class="related-posts clearfix">
		<?php if ( get_theme_mod('interior_designs_related_posts_title','Related Posts') != '' ) {?>
			<h2 class="related-posts-main-title"><?php echo esc_html( get_theme_mod('interior_designs_related_posts_title',__('Related Posts','interior-designs')) ); ?></h2>
		<?php }?>
		<div class="row">
			<?php while ( $related_posts->have_posts() ) : $related_posts->the_post(); ?>
				<div class="col-lg-4 col-md-4">
					<article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
					    <div class="services-box mb-4">
					      <div class="upper-box px-2 pt-2 pb-0">
					        <h3 class="pt-0"><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></h3>
					      </div>      
					      <div class="service-image m-2">
					        <a href="<?php echo esc_url( get_permalink() ); ?>"><?php 
					          if(has_post_thumbnail()) { 
					            the_post_thumbnail(); 
					          }
					        ?></a>
					        <div class="middle">
					          <div class="text"><i class="fas fa-th-large"></i></div>
					        </div>
					      </div>
					      <div class="lower-box px-2 pt-0 pb-2">
					        <?php if(get_the_excerpt()) { ?>
					            <div class="entry-content"><p><?php $excerpt = get_the_excerpt(); echo esc_html( interior_designs_string_limit_words( $excerpt, esc_attr(get_theme_mod('interior_designs_post_excerpt_length','20')))); ?><?php echo esc_html( get_theme_mod('interior_designs_button_excerpt_suffix','[...]') ); ?></p></div>
					        <?php }?>
					        <?php if ( get_theme_mod('interior_designs_post_button_text','Read More') != '' ) {?>
					          <div class="service-btn">
					            <a href="<?php the_permalink(); ?>"><?php echo esc_html( get_theme_mod('interior_designs_post_button_text',__( 'Read More','interior-designs' )) ); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('interior_designs_post_button_text',__( 'Read More','interior-designs' )) ); ?></span></a>
					          </div>
					        <?php }?>
					      </div>
					    </div>
					</article>
				</div>
			<?php endwhile; ?>
		</div>

	</div><!--/.post-related-->
<?php endif; ?>

<?php wp_reset_postdata(); ?>