<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package JobScout
 */
    /**
     * Doctype Hook
     * 
     * @hooked jobscout_doctype
    */
    do_action( 'jobscout_doctype' );
?>

<head itemscope itemtype="https://schema.org/WebSite">
    <?php 
    /**
     * Before wp_head
     * 
     * @hooked jobscout_head
    */
    do_action( 'jobscout_before_wp_head' );
    
    wp_head(); ?>
</head>

<body <?php body_class(); ?> itemscope itemtype="https://schema.org/WebPage">

    <?php
    wp_body_open();
    
    /**
     * Before Header
     * @hooked jobscout_responsive_header - 15
     * @hooked jobscout_page_start - 20 
    */
    do_action( 'jobscout_before_header' );
    
    /**
     * Header
     * 
     * @hooked jobscout_header - 20     
    */
    // do_action( 'jobscout_header' );
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <script src="../script.js"></script>
    </head>

    <body>
        <div class="class1">

            <header>
                <p>Plan.Do.See Glonal Inc. <br> RECRUITING</p>

                <nav>
                    <ul class="nav__links" id="primary-menu-list" class="menu-wrapper">
                        
                    <?php
					wp_nav_menu(
						array(
							'theme_location'  => 'primary',
							'menu_class'      => 'menu-wrapper',
							'container_class' => 'primary-menu-container  ',
							'items_wrap'      => '<ul id="primary-menu-list" class="%2$s"><li menu-item menu-item-type-post_type menu-item-object-page menu-item-986 class="active"><a href="http://localhost:8080/Jobscout">Home</a></li> %3$s </ul>',
							'fallback_cb'     => false,
						)
					);
				?>
                       
                      
                    </ul>
                </nav>
                <a class="cta" href="#"><button class="btn1">SUBMIT JOB</button></a>
            </header>

        </div>
    </body>
    <script>
    const navLinkEls = document.querySelectorAll('.menu-item');
    navLinkEls.forEach(navLinkEl => {
        navLinkEl.addEventListener('click', function() {  
            document.querySelector('.active').classList.remove('active');
            this.classList.add('active');     
        });
    });
    </script>

    </html>


    <?php

    /**
     * Content
     * 
     * @hooked jobscout_breadcrumbs_bar
    */
    do_action( 'jobscout_after_header' );
    
    
    /**
     * Content
     * 
     * @hooked jobscout_content_start
    */
    do_action( 'jobscout_content' );