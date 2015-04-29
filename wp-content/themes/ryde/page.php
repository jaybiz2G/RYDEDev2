<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<div class="portfolio-bg">
    	<div class="logo">
        	<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/ryde-logo.png" alt="ryde"></a>
        </div>
        <div class="portfolio-details">
        	<div class="container">
            	<div class="row">
                	<div class="col-sm-12">
                    	<div class="web-heading">
                        	<h2><?php the_title();?></h2>
                        </div>
                    	<div class="portfolio-inner details-space">
                        	<div class="container-fluid">
                            	<div class="row">
                                	
                                    <div class="col-sm-12">
                                    	<div class="details-portfolio">

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		// End the loop.
		endwhile;
		?>

		</div>
                                    </div>
                                   
                                    
                                </div>
                            </div>
                        </div>
                        
                        </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>
