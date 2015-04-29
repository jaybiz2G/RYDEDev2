<?php
/**
 * Template Name: Rydemusic Page Template
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
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
                        	<h2>RYDE Music</h2>
                            <p class="whitetext">
                            	<?php if ( is_active_sidebar( 'sidebar-5' ) ) : ?>
                                    <?php dynamic_sidebar( 'sidebar-5' ); ?>
                            	<?php endif; ?>
                            </p>
                        </div>
                        <?php  if (have_posts()) :  ?>
						<?php $pageda = (get_query_var('paged')) ? get_query_var('paged') : 1; query_posts("post_type=rydemusic&paged=$pageda&orderby=ID&order=DESC");?>
                        <?php while (have_posts()) : the_post(); ?> 
                    	<div class="portfolio-inner details-space">
                        	<div class="container-fluid">
                            	<div class="row">
                                	
                                    <div class="col-sm-12">
                                    	<div class="details-portfolio">
                                        	<h2><?php the_title();?></h2>
                                            <p><?php the_content();?></p>
											
                                        </div>
                                    </div>
                                   
                                    
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
    				<?php endif; ?>    
     				</div>
                </div>
            </div>
        </div>
    </div>                   
                        

<?php get_footer(); ?>
