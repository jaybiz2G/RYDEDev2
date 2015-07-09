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



<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">



	<meta name="viewport" content="width=device-width">
    
    
<meta name="apple-mobile-web-app-capable" content="yes" />







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

<script>



/*$(".comment").click(function(e){

    e.preventDefault();

    $(this).toggleClass("clicked");

});*/



/*jQuery(document).ready(function () {  
     width = jQuery(window).width();
	 //alert(width);
		if(width >= 480 && width <= 568){
			// alert('here'); 
				 $('.header-section').css('display', 'none');	
		}

   // fire(e);



});
*/


/*function fire(e) {



      $(".sectionbox team-member").find("overlay").each(function() {                                        

                      var $thiss = jQuery(this);



                });

        $(this).find('.sectionbox team-member').css('opacity','1');

        $(this).find('.overlay h2').css('opacity','1');

        $(this).find('.overlay p').css('opacity','1',);

 //alert('hi'); 

}
*/




</script>



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







                        	<li><a target="_blank" href="https://www.facebook.com/comerydewithme"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/facebook-icon.png" alt="facebook"></a></li>







                            <li class="esp"><a target="_blank" href="https://twitter.com/comerydewithme"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/twitter-icon.png" alt="twitter"></a></li>







 <li><a target="_blank" href="https://www.youtube.com/channel/UCTS4TGtb8Uv7nX5w4gutS9g"><img src="http://comerydewithme.com/wp-content/uploads/2015/05/youtube2.png" alt="Youtube"></a></li>





<li class="esp"><a target="_blank" href="https://www.reverbnation.com/comerydewithme"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icon1.png" alt="twitter"></a></li>



 <li><a target="_blank" href="https://soundcloud.com/comerydewithme"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icon2.png" alt="Youtube"></a></li>







                        </ul>







                    </div>







                </div>







            </div>







        </div>







    </div>







<!--/HEADER SECTION -->







<!--SECTION01 -->







    	





