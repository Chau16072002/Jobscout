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
                        <input type="" name="" value="" placeholder="<i></i>Enter your email" class="aaa">
                    <a class="cta" href="#"><button class="btn2">SUBSCRIBE</button></a>
                </div>
            </div>
        </div>

    </footer>
</div>
<?php
    do_action( 'jobscout_footer' );
    
    /**
     * After Footer
     * 
     * @hooked jobscout_page_end    - 20
    */
    do_action( 'jobscout_after_footer' );

    wp_footer(); ?>
?>
</body>

</html>