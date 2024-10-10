<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package GWT
 * @since Government Website Template 2.0
 */

get_header();
include_once('inc/banner.php');
?>

<?php govph_displayoptions( 'govph_panel_top' ); ?>

<div id="main-content" class="container-main" role="document">
    <div class="row">

        <div id="content" class="text-justify <?php govph_displayoptions( 'govph_content_position' ); ?>columns"
            role="main">
            <!-- For Version 1 -->
            <!-- <div class="large-12 container-main">
                <header>
                    <?php while ( have_posts() ) : the_post(); ?>
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                    <?php endwhile; // end of the loop. ?>
                </header>
            </div> -->
            <!-- End for Version 1 -->
            <?php 
			
				while( have_posts() ) : the_post(); 
				
				get_template_part('template-parts/content', 'page'); 
				
				endwhile; //end of the loop 
			?>
<?php if ( comments_open() || get_comments_number() ) :
    comments_template();
endif; ?>
        </div><!-- end content -->

        <?php 
		if(is_active_sidebar('left-sidebar')):
			govph_displayoptions( 'govph_sidebar_left' );
		endif;
		?>
        <?php 
		if(is_active_sidebar('right-sidebar')):
			govph_displayoptions( 'govph_sidebar_right' );
		endif;
		?>

    </div><!-- end row -->
</div><!-- end main -->

<?php govph_displayoptions( 'govph_panel_bottom' ); ?>

<?php get_footer(); ?>