<?php 
if (is_home()){
	$banner_class = 'large-12';
	$banner_2_class = '';
	$banner_3_class = '';
	if(is_active_sidebar('banner-section-1') && is_active_sidebar('banner-section-2')){
		$banner_class = 'large-6 columns';
		$banner_2_class = 'large-3 columns';
		$banner_3_class = 'large-3 columns';
	}
	elseif(is_active_sidebar('banner-section-1') && !is_active_sidebar('banner-section-2')){
		$banner_class = 'large-8 columns';
		$banner_2_class = 'large-4 columns';
	}
	elseif(!is_active_sidebar('banner-section-1') && is_active_sidebar('banner-section-2')){
		$banner_class = 'large-8 columns';
		$banner_3_class = 'large-4 columns';
	}
    // Temporary commented as it need to show on mobile devices
// $banner_class .= ' hide-for-small-only';
}

$container_class = '';
$line_class = '';
if(!is_home()){
  $container_class = 'banner-pads';
}else{
	$line_class="line";
}
?>
<div id="auxiliary" class="show-for-large">
    <div class="row">
        <div class="small-12 large-12 columns toplayer">
            <nav id="aux-main" class="nomargin show-for-medium-up" data-dropdown-content>
                <ul class="dropdown menu" data-dropdown-menu>
                    <?php 
                        wp_nav_menu( 
                            array(
                                'theme_location'  => 'aux_nav', 
                                'items_wrap' => '%3$s', 
                                'container' => false, 
                                'fallback_cb' => false, 
                                'walker' => new Topbar_Nav_Menu() 
                            )
                        ); 
                    ?>
                </ul>
            </nav>
        </div>
    </div>
</div>
<!-- banner -->
<div class="container-banner <?php echo $container_class; ?>">
    <?php govph_displayoptions( 'govph_slider_start' ); ?>
    <?php if (is_home()): ?>
    <?php if($banner_slider = efs_get_slider()): ?>
    <?php if(govph_displayoptions( 'govph_slider_full' ) == 'active'): ?>
    <!-- For GWT 26.0.0 remove class hide-for-small-only after large-12 on id="banner-slider" to show slider image on mobile devices -->
    <div id="banner-slider" class="large-12 ">
        <?php else: ?>
        <div id="banner-slider" class="<?php echo $banner_class ?>">
            <?php endif; ?>
            <?php echo $banner_slider ?>
        </div>
        <?php endif; ?>

        <?php if(is_active_sidebar('banner-section-1')): ?>
        <div id="banner-section-1" class="<?php echo $banner_2_class ?>">
            <?php do_action( 'before_sidebar' ); ?>
            <?php dynamic_sidebar( 'banner-section-1' ) ?>
        </div>
        <?php endif; ?>

        <?php if(is_active_sidebar('banner-section-2')): ?>
        <div id="banner-section-2" class="<?php echo $banner_3_class ?>">
            <?php do_action( 'before_sidebar' ); ?>
            <?php dynamic_sidebar( 'banner-section-2' ) ?>
        </div>
        <?php endif; ?>

        <?php else: ?>
        <?php if (is_404()): ?>
        <?php govph_displayoptions( 'govph_banner_title_start' ); ?>
        <div class="large-9 columns container-main">
            <header>
                <h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'gwt_wp' ); ?></h1>
            </header>
        </div>
        <?php govph_displayoptions( 'govph_banner_title_end' ); ?>
        <?php elseif (is_search()): ?>
        <?php govph_displayoptions( 'govph_banner_title_start' ); ?>
        <div class="large-9 columns container-main">
            <header>
                <h1 class="page-title">
                    <?php printf( __( 'Search Results for: %s', 'gwt_wp' ), '<span>' . get_search_query() . '</span>' ); ?>
                </h1>
            </header>
        </div>
        <?php govph_displayoptions( 'govph_banner_title_end' ); ?>
        <?php elseif (is_archive()): ?>
        <?php govph_displayoptions( 'govph_banner_title_start' ); ?>
        <div class="large-9 columns container-main">

        </div>
        <?php govph_displayoptions( 'govph_banner_title_end' ); ?>
        <?php else: ?>
        <?php govph_displayoptions( 'govph_banner_title_start' ); ?>
        <!-- For Version 2 -->
        <div class="large-9 columns container-main">
            <header>
                <?php while ( have_posts() ) : the_post(); ?>
                <h1 class="entry-title"><?php the_title(); ?></h1>
                <?php endwhile; // end of the loop. ?>
            </header>
        </div>
        <!-- End For Version 2-->
        <?php govph_displayoptions( 'govph_banner_title_end' ); ?>
        <?php endif ?>
        <?php endif ?>

        <?php govph_displayoptions( 'govph_slider_end' ); ?>

    </div>
    <!-- This is for line as a separator after slider image -->
    <span class="<?php echo $line_class; ?>"> </span>
    <!-- end of line class as a separator -->

    <?php include_once('breadcrumbs.php'); ?>
