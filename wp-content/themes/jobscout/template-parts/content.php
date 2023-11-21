<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package JobScout
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope itemtype="https://schema.org/Blog">
	<?php 
        /**
         * @hooked jobscout_post_thumbnail - 10
        */
        //do_action( 'jobscout_before_post_entry_content' );

        echo '<div class="content-wrap">';
        /**
         * @hooked jobscout_entry_header  - 10 
         * @hooked jobscout_entry_content - 15
         * @hooked jobscout_entry_footer  - 20
        */
        //do_action( 'jobscout_post_entry_content' );
        ?>
        <div class="article-wrap" >
            <?php 
                ?>
                <figure style="display: flex;">
                <?php 
                                if( has_post_thumbnail() ){
                                    
                                    the_post_thumbnail( array( 'itemprop' => 'image' ) );
                                }else{ 
                                    jobscout_fallback_svg_image( 'jobscout-blog' ); 
                                }                            
                            ?>
                        <div style="margin:10px;">
                        <a style="font-weight:bold" href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br>
                        <?php echo wp_trim_words(get_the_content(), 10,'');?><br>
                        <a href="<?php the_permalink(); ?>" class="read-more" style="color: orange; font-weight:bold;">Read more</a>
                        </div>           
                
                </figure>           
            <?php 
                
                wp_reset_postdata();
                ?>
        </div><!-- .article-wrap -->
        <?php
        echo '</div>';
    ?>
</article><!-- #post-<?php the_ID(); ?> -->