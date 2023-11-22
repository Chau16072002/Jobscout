<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package JobScout
 */
    
    /**
     * After Content
     * 
     * @hooked jobscout_content_end - 20
    */
    do_action( 'jobscout_before_footer' );
    
    /**
     * Footer
     * 
     * @hooked jobscout_footer_start  - 20
     * @hooked jobscout_footer_top    - 30
     * @hooked jobscout_footer_bottom - 40
     * @hooked jobscout_footer_end    - 50
    */
    ?>
<div class="class2"  style=" ">
    <footer style="
  justify-content: space-between;
  padding: 0 5%;">
        <div class="container">
            <div class="row" style="position: relative;" >  
                    <h3  style="display : inline-block;color:white ">Subcribe to <br> our 
                        Newsletter</h3>
                        <input type="" name="" value="" placeholder="Enter your email" class="aaa">
                    <a class="cta" href="#"><button class="btn2">SUBSCRIBE</button></a>
                </div>
            </div>
        </div>

    </footer>
</div>
<?php
    //do_action( 'jobscout_footer' );
 ?>
 <footer>
    <div class="footer" style="background-color: #f2f2f2; height: 400px">
        <h2 style="text-align: center; padding-top: 100px; margin-top:0;">Plan Do: See Global Inc.</h2>
        <div class="page-list" style=" 
            text-align: center;
            background-color: #f2f2f2;
            ">
           <nav>
                    <ul class="nav__links" id="primary-menu-list" class="menu-wrapper">
                        
                    <?php
					wp_nav_menu(
						array(
							'theme_location'  => 'primary',
							'menu_class'      => 'menu-wrapper',
							'container_class' => 'primary-menu-container  ',
							'items_wrap'      => '<ul  id="primary-menu-list" style="text-align:center;margin:0 !important;" class="%2$s"><li menu-item menu-item-type-post_type menu-item-object-page menu-item-986><a href="http://localhost:8080/Jobscout">Home</a></li> %3$s </ul>',
							'fallback_cb'     => false,
						)
					);
				?>
                       
                      
                    </ul>
                </nav>

            <div class="icons" style="margin-top:20px">
            <i class="fa-brands fa-facebook fa-2xl" style="color: blue; padding: 25px;"></i>
            <i class="fa-brands fa-google fa-2xl" style="padding: 25px;"></i>
            <i class="fa-brands fa-line fa-2xl" style="color: #2ff207; padding: 25px;"></i>
            <i class="fa-brands fa-twitter fa-2xl" style="color: #4c85e6; padding: 25px;"></i>
    </div>
        </div>
    </div>
    <div class="copy-right" style="text-align: center; background-color: black; color: #fff">© 2023 PLAN DO SEE INC.</div>
</footer>
 <?php   
    /**
     * After Footer
     * 
     * @hooked jobscout_page_end    - 20
    */
    do_action( 'jobscout_after_footer' );

    wp_footer(); ?>

</body>

</html>