<?php

/**

 * Template Name: Home Page Template

 *

 * @package WordPress

 * @subpackage Twenty_Fourteen

 * @since Twenty Fourteen 1.0

 */



get_header(); ?>

<div class="section01">

	<div class="logo">

        <a><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/ryde-logo.png" alt="ryde"></a>

    </div>

	<div class="threebox">

        	<div class="container">

            <?php  if (have_posts()) :  ?>

			<?php $pageda = (get_query_var('paged')) ? get_query_var('paged') : 1; query_posts("post_type=featurebox&paged=$pageda&orderby=ID&order=DESC&posts_per_page=3");?>

            <?php while (have_posts()) : the_post(); ?> 

            <?php

			if (get_post_meta($post->ID, 'link', true)) 

			$link = get_post_meta($post->ID, 'link', true);

			?>

            	<div class="col-sm-4">

                	<div class="sectionbox team-member">

                    	<?php the_post_thumbnail( 'full', array( 'class' => 'fullimg' ) ); ?>

                        <div class="boxheading"><a href="<?php echo ($link);?>"><?php the_title();?></a>

                        </div>

                        <div class="overlay">

											<h4><?php the_title();?></h4>

											<p><?php echo (substr(get_the_content(),0,150));?></p>

											<p><a href="<?php echo ($link);?>">Readmore</a></p>

										</div>

                    </div>

                </div>

            <?php endwhile; ?>

    		<?php endif; ?>     

            </div>

        </div>

        

        <div class="about-section text-center">
		<a name="About"></a>
            	<div class="web-heading">

                	<h2>About  us</h2>

                </div>

                <div class="container">

                	<div class="row">

                    	<div class="col-sm-12">

                			<?php 



							$id=5; 

							

							$post = get_page($id); 

							

							$content = apply_filters('the_content', $post->post_content); 

							

							echo $content;  

							

							?>

                	<div class="showabout">

                    	<ul>

                        <?php  if (have_posts()) :  ?>

						<?php $pagedaa = (get_query_var('paged')) ? get_query_var('paged') : 1; query_posts("post_type=aboutfeature&paged=$pagedaa&orderby=ID&order=DESC&posts_per_page=2");?>

            			<?php while (have_posts()) : the_post(); ?> 

                        	<li class="team-member abh">

                            	<a href="#"><?php the_post_thumbnail( 'full');?></a>

                                <p class="text"><?php the_title();?></p>

                                <div class="overlay">

											<p><?php echo (substr(get_the_content(),0,100));?></p>									

										</div>

                            </li>

                        <?php endwhile; ?>

    					<?php endif; ?>

                            

                        </ul>

                    </div>

                	</div>

                </div>

                </div>

            </div>

</div>

<!--/SECTION01 -->

<!--PORTFOLIO SECTION -->

	<div class="portfolio-section text-center">
		<a name="Clients"></a>
<div class="pagebottom">
    	<div class="web-heading">

                	<h2>Clients</h2>

                </div>

             	<div class="container">

                	<div class="row">

                    	<div class="col-sm-12">

                        	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>

                                    <?php dynamic_sidebar( 'sidebar-1' ); ?>

                            <?php endif; ?>

                        </div>

                    </div>

                </div>

                <div class="portbox">

                	<div class="container">

                    	<div class="row">

                        <?php  if (have_posts()) :  ?>

						<?php $pagedap = (get_query_var('paged')) ? get_query_var('paged') : 1; query_posts("post_type=portfolio&paged=$pagedap&orderby=ID&order=DESC&posts_per_page=3");?>

            			<?php while (have_posts()) : the_post(); ?>

                        	<div class="col-sm-4">

                            	<div class="box">
                            	<?php $value = get_field( "outer_links" ); ?>

                                    <a href="<?php echo $value; ?>" target="_blank"><?php the_post_thumbnail( 'thumbnail', array( 'class' => 'fullimg' ) ); ?></a>

                                    <div class="boxheading">

                                    	<a href="<?php echo $value; ?>" target="_blank"><?php the_title();?></a>

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

<!--/PORTFOLIO SECTION -->

<!--REFINE SECTION -->

	<div class="refine-section text-center">
		<a name="Refine"></a>
    	<div class="web-heading">

                	<h2>Refine</h2>

                </div>

                <div class="container">

                	<div class="row">

                    	<div class="col-sm-12">

                        	<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>

                                    <?php dynamic_sidebar( 'sidebar-2' ); ?>

                            <?php endif; ?>

                        </div>

                    </div>

                </div>

                

                

                

                

                

    </div>

<!--/REFINE SECTION -->

<div class="divider">

	<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/divider.jpg" alt="divider">

</div>

<!--CONTACT SECTION -->

	<div class="contact-section text-center">
		<a name="contact"></a>
    	<div class="web-heading">

                	<h2>Contact</h2>

                </div>

                <div class="container">

                	<div class="row">

                    	<div class="col-sm-12">

							<?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>

                                    <?php dynamic_sidebar( 'sidebar-3' ); ?>

                            <?php endif; ?>

						<div class="contactbox">

                        	<?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>

                                    <?php dynamic_sidebar( 'sidebar-4' ); ?>

                            <?php endif; ?>

                        </div>

                        </div>

                    </div>

                </div>

    </div>

<!--/CONTACT SECTION -->

<?php get_footer(); ?>