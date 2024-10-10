<?php
/**
 * @package GWT
 * @since Government Website Template 2.0
 */
?>

<div class="post-box">
    <article id="post-<?php the_ID(); ?>" <?php post_class('callout secondary'); ?>>
        <!-- Original Code -->
        <!-- <?php 
			$content_class = 'large-12';
			if(has_post_thumbnail()) : 
				$content_class = 'large-9';
				// This is original code
				the_post_thumbnail( 'full', array( 'class' => 'thumbnail') );
				
				// Additional for approval
				// the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive', 'title' => 'Feature image']);
			endif;
			if (has_post_thumbnail() && is_active_sidebar('left-sidebar') && is_active_sidebar('right-sidebar')) :
				$content_class = 'large-12';
			endif;
		?> -->
        <!-- End of Original Code -->

        <!-- This is the second option approved for images in blogs | 
        To replace image into full width when small screens |
        Original Code is in the top for reference -->
        <div class="flex-container ">
            <div>
                <?php 
			$content_class = 'large-12';
			if (has_post_thumbnail() && is_active_sidebar('left-sidebar') && is_active_sidebar('right-sidebar')){
				the_post_thumbnail( 'large'  , array( 'class' => 'thumbnail') );
			}elseif(has_post_thumbnail() && !is_active_sidebar('left-sidebar') && is_active_sidebar('right-sidebar')){
				the_post_thumbnail( 'full'  , array( 'class' => 'thumbnail') );
			}elseif(has_post_thumbnail() && is_active_sidebar('left-sidebar') && !is_active_sidebar('right-sidebar')){
				the_post_thumbnail( 'full'  , array( 'class' => 'thumbnail') );
			}else{
				the_post_thumbnail( 'full'  , array( 'class' => 'thumbnail') );
			}
		?>
            </div>
            <!-- end for images set to full width when small screens -->

            <div class="entry-wrapper <?php echo $content_class; ?> text-justify medium-12 small-12 ">
                <!-- entry-header -->
                <header class="entry-header ">
                    <h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
                    </h2>

                    <?php if ( 'post' == get_post_type() ) : ?>
                    <div class="entry-meta">
                        <?php gwt_wp_posted_on(); ?>
                    </div>
                    <?php endif; ?>
                </header>


                <!-- entry-summary entry-content -->
                <?php if ( is_search() ) : // Only display Excerpts for Search ?>
                <div class="entry-summary">
                    <?php the_excerpt(); ?>
                </div>
                <?php else : ?>
                <div class="entry-content">
                    <?php the_excerpt(); ?>
                    <?php
						wp_link_pages( array(
							'before' => '<div class="page-links">' . __( 'Pages:', 'gwt_wp' ),
							'after'  => '</div>',
						) );
					?>
                </div>
                <?php endif; ?>

                <!-- footer entry-meta -->
                <footer class="entry-meta">
                    <?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
                    <?php endif; ?>
                </footer>
            </div>
        </div>
    </article>
</div>
