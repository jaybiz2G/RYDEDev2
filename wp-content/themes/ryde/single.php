<?php
/**
 * The template for displaying all single posts and attachments
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
                    	<div class="portfolio-inner">
                        	<div class="container-fluid">
                            	<div class="row">
                                	<div class="col-sm-6">
                                    	<div class="portfolio-image">
                                    	<?php the_post_thumbnail('full');?>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                    	<div class="details-portfolio">
                                        	<h2><?php the_title();?></h2>
                                            <?php
											// Start the loop.
											while ( have_posts() ) : the_post();
									
												/*
												 * Include the post format-specific template for the content. If you want to
												 * use this in a child theme, then include a file called called content-___.php
												 * (where ___ is the post format) and that will be used instead.
												 */
												//get_template_part( 'content', get_post_format() );
												the_content();
												
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
	</div><!-- .content-area -->

<?php get_footer(); ?>
