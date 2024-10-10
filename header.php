<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "main" div.
 *
 * @package GWT
 * @since Government Website Template 2.0
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php endif; ?>
    <link rel="icon" href="<?php echo get_template_directory_uri() ?>/favicon.ico">
    <?php wp_head(); ?>

    <style <?php the_tags(); ?>>
    .container-main a,
    .container-main a:active,
    .container-main a:visited,
    .anchor a,
    .anchor a:active,
    .anchor a:visited {
        <?php govph_displayoptions('govph_anchorcolor');
        ?>
    }

    .container-main a:focus,
    .container-main a:hover,
    .anchor a:focus,
    .anchor a:hover {
        <?php govph_displayoptions('govph_anchorcolor_hover');
        ?>
    }

    div .container-masthead {
        <?php govph_displayoptions('govph_header_setting');
        ?><?php govph_displayoptions('govph_background_header_size_setting');
        ?>
    }

    h1.logo a {
        <?php govph_displayoptions('govph_logo_setting');
        ?>
    }

    /* For Enable and Disable image logo to be center or left position */
    h1.logo {
        <?php govph_displayoptions('govph_logo_setting');
        ?>
    }

    /* End for Enable and Disable image logo to be center or left position */
    div.container-banner {
        <?php govph_displayoptions('govph_slider_setting');
        ?>
    }

    .banner-content,
    .orbit .orbit-bullets {
        <?php govph_displayoptions('govph_slider_fullwidth');
        ?>
    }

    #pst-container {
        <?php govph_displayoptions('govph_custom_pst');
        ?>
    }


    /* Start For Subject of Approval
    Start for custom menu color

    This is start for custom menu, font, hover colors

    Start for border menu color that shows dropdown menu you can add also for auxiliary  #aux-main .has-dropdown>a::after
    This should have no background color
    #main-nav .has-dropdown>a::after {
        <?php govph_displayoptions('govph_menu_font_setting');
        ?>
    }

    This is for menu nav colors
    #main-nav {
        This is for auxialliary and topbar to have custom colors
        <?php govph_displayoptions('govph_menu_color_setting');
        ?>
    }

    End for menu nav colors

    This is for menu font colors in steady 
    and add this code if want to reflect in auxiliary
   
    
    #aux-main li:not(.has-form) a:not(.button),
    #aux-main li.active:not(.has-form) a:not(.button)  
   

    #main-nav li:not(.has-form) a:not(.button),
    #main-nav li.active:not(.has-form) a:not(.button) {
        <?php govph_displayoptions('govph_menu_font_setting');
        ?>
    }

    This is for color of submenus in main nav
    #main-nav li:not(.has-form) a:not(.button) {
        <?php govph_displayoptions('govph_menu_color_setting');
        ?>
    }

    End for menu font colors in steady

    #main-nav li.current-menu-item:not(.has-form),
    #aux-main li.current-menu-item:not(.has-form) {
        <?php govph_displayoptions('govph_menu_color_setting');
        ?>
    }

    Button menu color on steady
    #magnifier-button,
    #accessibility-button {
        <?php govph_displayoptions('govph_menu_font_accessibility_setting');
        ?>
    }

    Button menu color on hover
    #magnifier-button:hover,
    #accessibility-button:hover {
        <?php govph_displayoptions('govph_menu_font_hover_setting');
        ?>
    }

    This is menu color for hover
    #main-nav ul li:hover:not(.has-form)>a,
    #main-nav .dropdown li:not(.has-form) a:not(.button):hover,
    #main-nav .dropdown li:not(.has-form):hover>a:not(.button),
    #aux-main ul li:hover:not(.has-form)>a,
    #aux-main .dropdown li:not(.has-form) a:not(.button):hover,
    #aux-main .dropdown li:not(.has-form):hover>a:not(.button) {
        <?php govph_displayoptions('govph_menu_color_setting');
        ?><?php govph_displayoptions('govph_menu_font_hover_setting');
        ?>
    }

    End for menu color for hover

    #main-nav li.current-menu-item:not(.has-form) a:not(.button),
    #aux-main li.current-menu-item:not(.has-form) a:not(.button),
    #offCanvasRight li.current-menu-item:not(.has-form)>a:not(.button) {
        <?php govph_displayoptions('govph_menu_color_setting');
        ?><?php govph_displayoptions('govph_menu_font_hover_setting');
        ?>
    }

    End for Custom menu color
    End for Subject of Approval Approval */

    #panel-top {
        <?php govph_displayoptions('govph_custom_panel_top');
        ?>
    }

    #panel-bottom {
        <?php govph_displayoptions('govph_custom_panel_bottom');
        ?>
    }

    #sidebar-left .widget,
    #sidebar-right .widget,
    .callout.secondary {
        <?php govph_displayoptions('govph_widget_setting');
        ?>
    }

    .container-main .entry-title a {
        <?php govph_displayoptions('govph_headings_setting');
        ?>
    }

    .container-banner .entry-title {
        <?php govph_displayoptions('govph_inner_headings_setting');
        ?>
    }

    #footer {
        <?php govph_displayoptions('govph_custom_footer_background_color');
        ?>
    }
    </style>
    <script type="text/javascript" language="javascript">
    var template_directory = '<?php echo get_template_directory_uri() ?>';
    </script>
</head>

<body <?php body_class(); ?>>

    <div id="accessibility-shortcuts">
        <ul>
            <li><a href="#" class="skips toggle-statement" title="Toggle Accessibility Statement" accesskey="0"
                    data-toggle="a11y-modal">Toggle Accessibility Statement</a></li>
            <?php if($govph_acc_link_home = govph_displayoptions('govph_acc_link_home')): ?>
            <li><a href="<?php echo $govph_acc_link_home; ?>" accesskey="h">Home</a></li>
            <?php endif; ?>
            <?php if($govph_acc_link_contact = govph_displayoptions('govph_acc_link_contact')): ?>
            <li><a href="<?php echo $govph_acc_link_contact; ?>" accesskey="c">Contacts</a></li>
            <?php endif; ?>
            <?php if($govph_acc_link_feedback = govph_displayoptions('govph_acc_link_feedback')): ?>
            <li><a href="<?php echo $govph_acc_link_feedback; ?>" accesskey="k">Feedback</a></li>
            <?php endif; ?>
            <?php if($govph_acc_link_faq = govph_displayoptions('govph_acc_link_faq')): ?>
            <li><a href="<?php echo $govph_acc_link_faq; ?>" accesskey="q">FAQ</a></li>
            <?php endif; ?>
            <?php if($govph_acc_link_search = govph_displayoptions('govph_acc_link_search')): ?>
            <li><a href="<?php echo $govph_acc_link_search; ?>" accesskey="s">Search</a></li>
            <?php endif; ?>
            <?php if($govph_acc_link_main_content = govph_displayoptions('govph_acc_link_main_content')): ?>
            <li><a href="<?php echo $govph_acc_link_main_content; ?>" accesskey="R">Skip to Main Content</a></li>
            <?php endif; ?>
            <?php if($govph_acc_link_sitemap = govph_displayoptions('govph_acc_link_sitemap')): ?>
            <li><a href="<?php echo $govph_acc_link_sitemap; ?>" accesskey="M">Sitemap</a></li>
            <?php endif; ?>
        </ul>
    </div>

    <div id="a11y-modal" class="reveal large" title="Accessibility Statement" data-reveal>
        <textarea rows="21" class="statement-textarea" readonly>
This website adopts the Web Content Accessibility Guidelines (WCAG 2.0) as the accessibility standard for all its related web development and services. WCAG 2.0 is also an international standard, ISO 40500. This certifies it as a stable and referenceable technical standard. 

WCAG 2.0 contains 12 guidelines organized under 4 principles: Perceivable, Operable, Understandable, and Robust (POUR for short). There are testable success criteria for each guideline. Compliance to these criteria is measured in three levels: A, AA, or AAA. A guide to understanding and implementing Web Content Accessibility Guidelines 2.0 is available at: https://www.w3.org/TR/UNDERSTANDING-WCAG20/

Accessibility Features

Shortcut Keys Combination Activation Combination keys used for each browser.

	Chrome for Linux press (Alt+Shift+shortcut_key) 
	Chrome for Windows press (Alt+shortcut_key) 
	For Firefox press (Alt+Shift+shortcut_key) 
	For Internet Explorer press (Alt+Shift+shortcut_key) then press (enter)
	On Mac OS press (Ctrl+Opt+shortcut_key)

	Accessibility Statement (Combination + 0): Statement page that will show the available accessibility keys. 
	Home Page (Combination + H): Accessibility key for redirecting to homepage. 
	Main Content (Combination + R): Shortcut for viewing the content section of the current page. 
	FAQ (Combination + Q): Shortcut for FAQ page. 
	Contact (Combination + C): Shortcut for contact page or form inquiries. 
	Feedback (Combination + K): Shortcut for feedback page. 
	Site Map (Combination + M): Shortcut for site map (footer agency) section of the page. 
	Search (Combination + S): Shortcut for search page. 

Press esc, or click the close the button to close this dialog box.
	</textarea>
        <button class="close-button" data-close aria-label="Close modal" type="button">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>


    <div class="off-canvas-wrapper">
        <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>

            <!-- off-canvas right menu -->
            <nav id="mySidenav" class="sidenav hide-for-large">
                <a href="javascript:void(0)" class="closebtn" id="closeNav">&times;</a>
                <div style="padding:10px;" class="list-item"><?php get_search_form(); ?></div>
                <ul style="list-style: none;">
                    <?php wp_nav_menu( array(
                      'theme_location' => 'topbar_left',
                      'items_wrap'     => '%3$s',
                      'container'      => false,
                      'walker'         => new Off_Canvass_Menu()
                    )); ?>

                    <?php wp_nav_menu( array(
                      'theme_location' => 'topbar_right',
                      'items_wrap'     => '%3$s',
                      'container'      => false,
                      'fallback_cb'    => false,
                      'walker'         => new Off_Canvass_Menu()
                    )); ?>

                    <?php if(has_nav_menu('aux_nav')): ?>
                      <li id="aux-offmenu" class="list-item">AUXILIARY MENU</li>
                      <?php wp_nav_menu( array(
                        'theme_location' => 'aux_nav',
                        'items_wrap' => '%3$s',
                        'container' => false,
                        'fallback_cb' => false,
                        'walker' => new Off_Canvass_Menu()
                      )); ?>
                    <?php endif; ?>
                </ul>
            </nav>

            <!-- off-canvas title bar for 'small' screen -->
            <div id="off-canvas-container" class="title-bar columns hide-for-large" data-responsive-toggle="main-nav"
                data-hide-for="large">
                <div class="title-bar-right">
                    <span class="title-bar-title">Menu</span>
                    <button style="font-size:30px;cursor:pointer" id="openNav" class="menu-icon" type="button">&#9776;
                    </button>
                </div>
                <div class="title-bar-left">
                    <span class="title-bar-title name"><a href="http://www.gov.ph">GOVPH</a></span>
                </div>

            </div>

            <!-- "main-nav" top-bar menu for 'medium' and up -->
            <div id="main-nav">
                <div class="row">
                    <div class="large-12 columns">
                        <nav class="top-bar-left">
                            <ul class="dropdown menu" data-dropdown-menu>
                                <li class=" nav-item"><a style="font-size: 1.2rem;" href="https://www.gov.ph">GOVPH
                                    </a>
                                </li>
                                <?php 
                                    wp_nav_menu( 
                                        array(
                                            'theme_location'  => 'topbar_left', 
                                            'items_wrap' => '%3$s', 
                                            'container' => false, 
                                            'fallback_cb' => false, 
                                            'walker' => new Topbar_Nav_Menu() 
                                        )
                                    ); 
                                ?>
                            </ul>
                        </nav>
                        <nav class="top-bar-right">

                            <ul class="dropdown menu" data-dropdown-menu>
                                <?php wp_nav_menu( array('theme_location'  => 'topbar_right', 'items_wrap' => '%3$s', 'container' => false, 'fallback_cb' => false, 'walker' => new Topbar_Nav_Menu() )); ?>
                                <?php if(govph_displayoptions( 'govph_disable_search' )): ?>
                                <li class="search right"><?php get_search_form(); ?></li>
                                <?php endif ?>
                                <li>

                                    <button id="accessibility-button" class="button" type="button">
                                        <span class="show-for-sr">Accessibility Button</span>
                                        <i class="fa fa-universal-access fa-2x" aria-hidden="true"></i>
                                    </button>

                                    <ul class="menu" style="min-width:inherit;">
                                        <li>
                                            <a href="#" id="accessibility-statement" title="Accessibility Statement"
                                                class="toggle-statement" data-toggle="a11y-modal">
                                                <span class="show-for-sr">Accessibility Statement</span>
                                                <i class="fa fa-file-text-o fa-2x"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" id="accessibility-contrast" title="Toggle High Contrast"
                                                class="toggle-contrast">
                                                <span class="show-for-sr">High Contrast</span>
                                                <i class="fa fa-low-vision fa-2x"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" id="accessibility-skip-content" title="Skip to Content">
                                                <span class="show-for-sr">Skip to Content</span>
                                                <i class="fa fa-arrow-circle-o-down fa-2x"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" id="accessibility-skip-footer" title="Skip to Footer">
                                                <span class="show-for-sr">Skip to Footer</span>
                                                <i class="fa fa-chevron-down fa-2x"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- This is an additional on the right side menu for text-magnifier -->
                                <li>
                                    <button id="magnifier-button" class="button" type="button">
                                        <span class="show-for-sr">Accessibility Button</span>
                                        <i class="fa fa-font fa-2x" aria-hidden="true"></i>
                                    </button>
                                    <ul class="menu" style="min-width:inherit;">
                                        <li>
                                            <a href="#" id="text-default" title="Toggle Default Text"
                                                class="toggle-text-default">
                                                <span class="show-for-sr">Default Text Size</span>
                                                <i class="fa fa-font "></i><i class="fa fa-undo "></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" id="text-reduce" title="Toggle Reduce Text"
                                                class="toggle-text-reduce">
                                                <span class="show-for-sr">Reduce Text Size</span>
                                                <i class="fa fa-font ">- -</i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" id="text-enlarge" title="Toggle Enlarge Text"
                                                class="toggle-text-enlarge">
                                                <span class="show-for-sr">Enlarge Text Size</span>
                                                <i class="fa fa-font ">+ +</i>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- end for text magnifier -->
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

            <!-- original content goes in this container -->
            <div class="off-canvas-content" data-off-canvas-content>
                <?php
			$name_slogan_class = 'large-12 ';
			$ear_content_class = '';
			$ear_content_2_class = '';
			if(is_active_sidebar('ear-content-1') && is_active_sidebar('ear-content-2')){
				$name_slogan_class = 'large-6 ';
				$ear_content_class = 'large-3 ';
				$ear_content_2_class = 'large-3 ';
			}
			elseif(is_active_sidebar('ear-content-1') && !is_active_sidebar('ear-content-2')){
				$name_slogan_class = 'large-9 ';
				$ear_content_class = 'large-3 ';
			}
			elseif(!is_active_sidebar('ear-content-1') && is_active_sidebar('ear-content-2')){
				$name_slogan_class = 'large-9 ';
				$ear_content_2_class = 'large-3 ';
			}
			?>

                <!-- masthead -->
                <header class="container-masthead">
                    <div class="row">
                        <div class="<?php echo $name_slogan_class ?> columns">
                            <h1 class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"
                                    title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"
                                    rel="home"><?php govph_displayoptions( 'govph_logo' ); ?></a></h1>
                        </div>

                        <?php if(is_active_sidebar('ear-content-1')): ?>
                        <div class="<?php echo $ear_content_class ?> columns">
                            <?php do_action( 'before_sidebar' ); ?> <?php dynamic_sidebar( 'ear-content-1' ) ?>
                        </div>
                        <?php endif; ?>

                        <?php if(is_active_sidebar('ear-content-2')): ?>
                        <div class="<?php echo $ear_content_2_class ?> columns">
                            <?php do_action( 'before_sidebar' ); ?>
                            <?php dynamic_sidebar( 'ear-content-2' ) ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </header>
                <!-- masthead -->
