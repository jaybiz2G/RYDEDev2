<?php



/**



 * The template for displaying the header



 *



 * Displays all of the head element and everything up until the "site-content" div.



 *



 * @package WordPress



 * @subpackage Twenty_Fifteen



 * @since Twenty Fifteen 1.0



 */



?><!DOCTYPE html>



<html <?php language_attributes(); ?> class="no-js">



<head>



	<meta charset="<?php bloginfo( 'charset' ); ?>">



	<meta name="viewport" content="width=device-width">



	<link rel="profile" href="http://gmpg.org/xfn/11">



	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">



	<!--[if lt IE 9]>



	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>



	<![endif]-->



	<script>(function(){document.documentElement.className='js'})();</script>



    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.css" rel="stylesheet">



	<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap-theme.css" rel="stylesheet">



	<?php wp_head(); ?>



    



    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/main.css" rel="stylesheet" type="text/css">



   <link href='http://fonts.googleapis.com/css?family=Roboto:400,900italic,900,700italic,700,500italic,500,400italic,300italic,300,100italic,100' rel='stylesheet' type='text/css'>

   <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/backtotop.css" type="text/css" /><!--back to top css-->

   

   	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery-1.10.0.js"></script>

	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/smoothscroll.js"></script>

	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/backtotop.js"></script><!--back to top js-->



<!--[if gte IE 9]



<style type="text/css">



.gradient {



filter: none;



}



</style>



<![endif]-->



</head>







<body <?php body_class(); ?>>



<div id="back-top"><a href="#top"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/backtotop-arrow.png" alt="" /></a></div>   



<!--HEADER SECTION -->



	<div class="header-section">



    	<div class="container">



        	<div class="row">



            	<div class="col-sm-8">



                	<nav>

			<?php if(is_front_page()) : ?>

                    	<ul class="clearfix">

                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="selected">Home</a></li>

                            <li><a class="smoothScroll" href="#About">About</a></li>

                            <li><a class="smoothScroll" href="#Clients">Clients</a></li>

                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>?page_id=39">Music Samples</a></li>

                            <li><a class="smoothScroll" href="#Refine">Refine Your Demo</a></li>

                            <li><a class="smoothScroll" href="#contact">Contact</a></li>

                        </ul>

			<?php else : ?>

			<ul class="clearfix">

                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="selected">Home</a></li>

                            <li><a class="smoothScroll" href="<?php echo esc_url( home_url( '/' ) ); ?>#About">About</a></li>

                            <li><a class="smoothScroll" href="<?php echo esc_url( home_url( '/' ) ); ?>#Clients">Clients</a></li>

                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>?page_id=39">Music Samples</a></li>

                            <li><a class="smoothScroll" href="<?php echo esc_url( home_url( '/' ) ); ?>#Refine">Refine Your Demo</a></li>

                            <li><a class="smoothScroll" href="<?php echo esc_url( home_url( '/' ) ); ?>#contact">Contact</a></li>

                        </ul>

			<?php endif; ?>

                    </nav>



                </div>



                <div class="col-sm-4">



                	<div class="social-media pull-right">



                    	<ul>



                        	<li><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/facebook-icon.png" alt="facebook"></a></li>



                            <li class="esp"><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/twitter-icon.png" alt="twitter"></a></li>



                            <li class="ssp"><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/instragram-icon.png" alt="instragram"></a></li>



                            <li><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/google-plus-icon.png" alt="google plus"></a></li>



                        </ul>



                    </div>



                </div>



            </div>



        </div>



    </div>



<!--/HEADER SECTION -->



<!--SECTION01 -->



    	


