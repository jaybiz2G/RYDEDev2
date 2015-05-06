<?php



/**



 * The template for displaying the footer



 *



 * Contains the closing of the "site-content" div and all content after.



 *



 * @package WordPress



 * @subpackage Twenty_Fifteen



 * @since Twenty Fifteen 1.0



 */



?>







	<!--FOOTER SECTION -->



	<div class="footer-section">



    	<div class="container">



        	<div class="row">



            	<div class="col-sm-2">



                	<div class="flogo">



                	<a href="<?php echo (home_url('/'))?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/ryde-logo-footer.png" alt="ryde"></a>



                    </div>



                </div>



                <div class="col-sm-7">



                	<nav>



                    	<ul class="clearfix">

                        	<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="selected">Home</a></li>

                            <li><a class="smoothScroll" href="#About">About</a></li>

                            <li><a class="smoothScroll" href="#Portfolio">Portfolio</a></li>

                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>?page_id=39">Music Samples</a></li>

                            <li><a class="smoothScroll" href="#Refine">Refine</a></li>

                            <li><a class="smoothScroll" href="#contact">Contact</a></li>

                        </ul>



                    </nav>



                </div>



                <div class="col-sm-3">



                	<div class="social-media pull-right">



                    	<ul>



                        	<li><a href="https://www.facebook.com/comerydewithme"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/facebook-icon.png" alt="facebook"></a></li>



                            <li class="esp"><a href="https://twitter.com/comerydewithme"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/twitter-icon.png" alt="twitter"></a></li>



                            <li><a href="https://www.youtube.com/channel/UCTS4TGtb8Uv7nX5w4gutS9g"><img src="http://comerydewithme.com/wp-content/uploads/2015/05/youtube2.png" alt="Youtube"></a></li>



                        </ul>



                    </div>



                </div>



            </div>



        </div>



    </div>



<!--/FOOTER SECTION -->



<!--COPYRIGHT SECTION -->



	<div class="copyright-section text-center">



    	Copyright &copy; 2015 <a href="#">WiselyThemes</a>. All rights reserved.<br>

Developed By <a target="_blank" href="http://timefortheweb.com/">TIMEFORTHEWEB</a>



    </div>



<!--/COPYRIGHT SECTION -->







<?php wp_footer(); ?>







</body>



</html>



