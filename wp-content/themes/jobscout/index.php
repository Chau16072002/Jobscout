<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package JobScout
 */

get_header(); ?>

<section id="cta-section" class="bg-cta-section">
	   <?php// dynamic_sidebar( 'cta' ); ?> 
	   <section id="cta-section" class="bg-cta-section">
	   <section id="raratheme_companion_cta_widget-1" class="widget widget_raratheme_companion_cta_widget">        
        <div class="centered bttk-cta-bg" style="background:url(http://localhost:8080/Jobscout/wp-content/uploads/2019/01/StockSnap_E5GUBD8MWN-1.jpg) no-repeat; background-size: cover; background-position: center">
            <div class="raratheme-cta-container">
                <h2 class="widget-title" itemprop="name">PDS NEWS</h2>
            </div> 
        </div>        
        </section> 
	</section>
	</section> <!-- .bg-cta-section -->
    <div class="container">
	<div id="primary" class="content-area article-section-custom">
		
	<?php
/**
 * Blog Section
 * 
 * @package JobScout
 */

$blog_heading = get_theme_mod( 'blog_section_title', __( 'NEWEST BLOG ENTRIES', 'jobscout' ) );
$sub_title    = get_theme_mod( 'blog_section_subtitle', __( 'We will help you find it. We are your first step to becoming everything you want to be.', 'jobscout' ) );
$blog         = get_option( 'page_for_posts' );
$label        = get_theme_mod( 'blog_view_all', __( 'See More Posts', 'jobscout' ) );
$hide_author  = get_theme_mod( 'ed_post_author', false );
$hide_date    = get_theme_mod( 'ed_post_date', false );
$ed_blog      = get_theme_mod( 'ed_blog', true );

$args = array(
    'post_type'           => 'post',
    'post_status'         => 'publish',
    'posts_per_page'      => 8,
    'ignore_sticky_posts' => true
);

$qry = new WP_Query( $args );?>
<?php if( $ed_blog && ( $blog_heading || $sub_title || $qry->have_posts() ) ){ ?>
<section id="blog-section" class="article-section">
        <?php 
            if( $blog_heading ) echo '<h2 class="section-title">' . esc_html( $blog_heading ) . '</h2>';
        ?>
        <?php if( $qry->have_posts() ){ ?>
        <div class="article-wrap" >
            <?php 
                while( $qry->have_posts() ){
                    $qry->the_post(); ?>
            <article class="post">
                <figure class="post-thumbnail" style="display: flex; padding:20px">
                <?php 
                                if( has_post_thumbnail() ){
                                    
                                    the_post_thumbnail( array( 'itemprop' => 'image' ) );
                                }else{ 
                                    jobscout_fallback_svg_image( 'jobscout-blog' ); 
                                }                            
                            ?>
                        <div style="margin:10px">
                        <a style="font-weight:bold" href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br>
                        <?php echo wp_trim_words(get_the_content(), 10,'');?><br>
                        <a href="<?php the_permalink(); ?>" class="read-more" style="color: orange; font-weight:bold;">Read more</a>
                        </div>           
                
                </figure>           
            </article>
            <?php 
                }
                wp_reset_postdata();
                ?>
        </div><!-- .article-wrap -->



        <?php } ?>

</section>
<?php 
} ?>
 </div>
 </div>
 <?php
get_sidebar();
get_footer();