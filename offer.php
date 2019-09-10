<?php 

require_once "config.php";

session_start();


$data = $_GET['data']; 

if(isset($_SESSION['loggedin']) == false) {
  header("location: login.php");
}
?>







<!DOCTYPE html>
<html>
<head>
  <title>Free Shopping-Official Site for freebies, Offers, Coupons, Online Shopping India, Best Deals,Bollywood promotion, and Free Stuff in India,Coupons,Discount Coupon Codes &amp; Offers India,Promo Code, Cashback Offers, Coupon Code, Best Deals Online India</title>
  <style type="text/css">
img.wp-smiley,
img.emoji {
  display: inline !important;
  border: none !important;
  box-shadow: none !important;
  height: 1em !important;
  width: 1em !important;
  margin: 0 .07em !important;
  vertical-align: -0.1em !important;
  background: none !important;
  padding: 0 !important;
}
</style>
<link rel='stylesheet' id='ccf-form-css'  href='http://freeshopping.co/wp-content/plugins/custom-contact-forms/assets/build/css/form.min.css?ver=7.8.5' type='text/css' media='all' />
<link rel='stylesheet' id='easy-facebook-likebox-plugin-styles-css'  href='http://freeshopping.co/wp-content/plugins/easy-facebook-likebox/public/assets/css/public.css?ver=4.3.3' type='text/css' media='all' />
<link rel='stylesheet' id='easy-facebook-likebox-font-awesome-css'  href='http://freeshopping.co/wp-content/plugins/easy-facebook-likebox/public/assets/css/font-awesome.css?ver=4.3.3' type='text/css' media='all' />
<link rel='stylesheet' id='easy-facebook-likebox-animate-css'  href='http://freeshopping.co/wp-content/plugins/easy-facebook-likebox/public/assets/css/animate.css?ver=4.3.3' type='text/css' media='all' />
<link rel='stylesheet' id='easy-facebook-likebox-popup-styles-css'  href='http://freeshopping.co/wp-content/plugins/easy-facebook-likebox/public/assets/popup/magnific-popup.css?ver=4.3.3' type='text/css' media='all' />
<link rel='stylesheet' id='rs-plugin-settings-css'  href='http://freeshopping.co/wp-content/plugins/revslider/public/assets/css/settings.css?ver=5.1' type='text/css' media='all' />
<style id='rs-plugin-settings-inline-css' type='text/css'>
#rs-demo-id {}
</style>
<link rel='stylesheet' id='Montserrat-css'  href='http://fonts.googleapis.com/css?family=Montserrat%3A400%2C700&#038;ver=4.6.14' type='text/css' media='all' />
<link rel='stylesheet' id='Lato-css'  href='http://fonts.googleapis.com/css?family=Lato%3A100%2C300%2C400%2C700%2C900&#038;ver=4.6.14' type='text/css' media='all' />
<link rel='stylesheet' id='comre-bootstrap-css'  href='http://freeshopping.co/wp-content/themes/freeshopping/css/bootstrap.css?ver=2.0.2' type='text/css' media='all' />
<link rel='stylesheet' id='comre-animate-css'  href='http://freeshopping.co/wp-content/themes/freeshopping/css/animate.css?ver=2.0.2' type='text/css' media='all' />
<link rel='stylesheet' id='comre-main-css'  href='http://freeshopping.co/wp-content/themes/freeshopping/css/main.css?ver=2.0.2' type='text/css' media='all' />
<link rel='stylesheet' id='main_style-css'  href='http://freeshopping.co/wp-content/themes/freeshopping/style.css?ver=2.0.2' type='text/css' media='all' />
<link rel='stylesheet' id='woocommerce-css'  href='http://freeshopping.co/wp-content/themes/freeshopping/css/woocommerce.css?ver=2.0.2' type='text/css' media='all' />
<link rel='stylesheet' id='comre-responsive-css'  href='http://freeshopping.co/wp-content/themes/freeshopping/css/responsive.css?ver=2.0.2' type='text/css' media='all' />
<link rel='stylesheet' id='main-color-css'  href='http://freeshopping.co/wp-content/themes/freeshopping/css/color.php?ver=2.0.2' type='text/css' media='all' />
<link rel='stylesheet' id='mc4wp-form-themes-css'  href='http://freeshopping.co/wp-content/plugins/mailchimp-for-wp/assets/css/form-themes.min.css?ver=4.1.11' type='text/css' media='all' />
<link rel='stylesheet' id='js_composer_front-css'  href='http://freeshopping.co/wp-content/plugins/js_composer/assets/css/js_composer.min.css?ver=4.8.1' type='text/css' media='all' />
<script type='text/javascript' src='http://freeshopping.co/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
<script type='text/javascript' src='http://freeshopping.co/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
<script type='text/javascript' src='http://freeshopping.co/wp-includes/js/jquery/ui/core.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='http://freeshopping.co/wp-includes/js/jquery/ui/datepicker.min.js?ver=1.11.4'></script>
<script type='text/javascript'>
jQuery(document).ready(function(jQuery){jQuery.datepicker.setDefaults({"closeText":"Close","currentText":"Today","monthNames":["January","February","March","April","May","June","July","August","September","October","November","December"],"monthNamesShort":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"nextText":"Next","prevText":"Previous","dayNames":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"dayNamesShort":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],"dayNamesMin":["S","M","T","W","T","F","S"],"dateFormat":"MM d, yy","firstDay":1,"isRTL":false});});
</script>
<script type='text/javascript' src='http://freeshopping.co/wp-includes/js/underscore.min.js?ver=1.8.3'></script>

<script type='text/javascript' src='http://freeshopping.co/wp-content/plugins/custom-contact-forms/assets/build/js/form.min.js?ver=7.8.5'></script>
<script type='text/javascript' src='http://freeshopping.co/wp-content/plugins/easy-facebook-likebox/public/assets/popup/jquery.magnific-popup.min.js?ver=4.3.3'></script>
<script type='text/javascript' src='http://freeshopping.co/wp-content/plugins/easy-facebook-likebox/public/assets/js/jquery.cookie.js?ver=4.3.3'></script>
<script type='text/javascript' src='http://freeshopping.co/wp-content/plugins/easy-facebook-likebox/public/assets/js/public.js?ver=4.3.3'></script>
<script type='text/javascript' src='http://freeshopping.co/wp-content/plugins/revslider/public/assets/js/jquery.themepunch.tools.min.js?ver=5.1'></script>
<script type='text/javascript' src='http://freeshopping.co/wp-content/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min.js?ver=5.1'></script>
<script type='text/javascript'>
<script type='text/javascript' src='http://freeshopping.co/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=3.2.4'></script>
<script type='text/javascript' src='http://freeshopping.co/wp-content/plugins/js_composer/assets/js/vendors/woocommerce-add-to-cart.js?ver=4.8.1'></script>
<link rel='https://api.w.org/' href='http://freeshopping.co/wp-json/' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://freeshopping.co/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://freeshopping.co/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 4.6.14" />
<meta name="generator" content="WooCommerce 3.2.4" />
<link rel='shortlink' href='http://freeshopping.co/' />
<link rel="alternate" type="application/json+oembed" href="http://freeshopping.co/wp-json/oembed/1.0/embed?url=http%3A%2F%2Ffreeshopping.co%2F" />
<link rel="alternate" type="text/xml+oembed" href="http://freeshopping.co/wp-json/oembed/1.0/embed?url=http%3A%2F%2Ffreeshopping.co%2F&#038;format=xml" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>


<body class="home page page-id-471 page-template page-template-tpl-visual_composer page-template-tpl-visual_composer-php customize-support wpb-js-composer js-comp-ver-4.8.1 vc_responsive">




    <!-- Page Wrap ===========================================-->

    <div id="wrap">

 <!--======= TOP BAR =========-->
      
               <div class="top-bar">

            <div class="container">
          
                <ul class="left-bar-side">

                <?php  

                  if (isset($_SESSION['loggedin']))
                  {
                    echo "<li><strong>Welcome, </strong>";
                    echo $_SESSION["username"] . '</li>';
                  }

                  else
                  {
                    echo '<li> <a href="login.php"><i class="fa fa-lock"></i> Login</a> </li>';
                    echo '<li> <a href="register.php"><i class="fa fa-lock"></i> Register</a> </li>';
                  }


                  ?>

                                                 
                                          <li> <a href="http://freeshopping.co/career"><strong>Career with us</strong></a> </li>

                                          <?php 


                                           if($_SESSION['loggedin'] == true){

                                            echo "<li><a href=\"logout.php\">Log Out</a></li>";
                                           }
                                            

                                          ?>
                                          
                                         </ul>
                        
                <ul class="right-bar-side social_icons">
                  
      <li data-color="#3b5a9b">
        <a title="Facebook" href="https://www.facebook.com/freeshoppingpage"><i class="fa fa-facebook"></i></a>
      </li>

      <li data-color="#2baae1" style="background-color: rgb(255, 255, 255);">
        <a title="twitter" href="https://twitter.com/freeshoppingco"><i class="fa fa-twitter"></i></a>
      </li>

      <li data-color="#0072b2">
        <a title="Linkedin" href="https://in.linkedin.com/in/freeshopping"><i class="fa fa-linkedin"></i></a>
      </li>

      <li data-color="#fb1243">
        <a title="Google+" href=""><i class="fa fa-google-plus"></i></a>
      </li>

      <li data-color="#fb0f79">
        <a title="Pinterest" href="https://in.pinterest.com/freekashopping/"><i class="fa fa-pinterest"></i></a>
      </li>

      <li data-color="#3c71e7">
        <a title="Instagram" href="https://www.instagram.com/freeshopping.co/"><i class="fa fa-instagram"></i></a>
      </li>

      <li data-color="#ff1700">
        <a title="Slideshare" href="http://www.slideshare.net/freeshoppingonline1"><i class="fa fa-foursquare"></i></a>
      </li>

      <li data-color="#f11132">
        <a title="Youtube" href="https://www.youtube.com/channel/UCaAkF7F98rJ2rXdTf66v5hg"><i class="fa fa-youtube"></i></a>
      </li>
        </ul>


                                

            </div>

        </div>

  <!--======= HEADER =========-->
 <header>
  <div class="container"> 
 <!--======= LOGO =========-->
      <div class="logo"> 
        <a href="http://freeshopping.co/" title="logo"><img src="img\logo.png" alt="logo"></a>
      </div>
 </div>

<nav>

            <div class="container"> 



                <!--======= MENU START =========-->

                <ul class="ownmenu"><li class="showhide" style="display: none;"><span class="title"></span><span class="icon fa fa-bars"></span></li>
                <li id="menu-item-565" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-565" style=""><a title="Home" href="#">Home</a></li>
                <li id="menu-item-563" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-563" style=""><a title="Freebies" href="#">Freebies</a></li>
                <li id="menu-item-566" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-566" style=""><a title="Mobile Recharge Offer" href="#">Mobile Recharge Offer</a></li>
                <li id="menu-item-562" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-562" style=""><a title="Electronics Offer" href="#">Electronics Offer</a></li>
                <li id="menu-item-567" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-567" style=""><a title="Restaurant Offer" href="#">Restaurant Offer</a></li>
                <li id="menu-item-569" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-569" style=""><a title="Travels Offer" href="#">Travels Offer</a></li>
                <li id="menu-item-564" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-564" style=""><a title="Groceries Offer" href="#">Groceries Offer</a></li>
                        </ul>



                                <!--======= SUBMIT COUPON =========-->
                                          <div class="sub-nav-co"> <a href="#">Student Discount</a> </div>
                                    </div>

</nav>

</header>

<!--======= BANNER =========--><section class="sub-banner">
  <div class="overlay">
    <div class="container">
      <h2> 
        <?php echo $data[1]; ?>    </h2>
      <ul class="sub-nav"><li><a href="index.php"><i class="fa fa-home"></i></a>  /  </li><li><a href="#">Deals of the Week</a> / </li><li><?php echo $data[1]; ?></li></ul>    </div>
  </div>
</section>



<section class="blog coupon-detail-page woocommerce">
  <div class="container">

    
    <ul class="row">
      
      <!-- end sidebar -->
      <li class="col-sm-9">
                  <div class="row">
            <div class="col-md-4">
              
              <img width="358" height="256" src="http://freeshopping.co/wp-content/uploads/2017/08/w3.jpg" class="img-responsive wp-post-image" alt="w3" srcset="http://freeshopping.co/wp-content/uploads/2017/08/w3.jpg 358w, http://freeshopping.co/wp-content/uploads/2017/08/w3-300x215.jpg 300w" sizes="(max-width: 358px) 100vw, 358px">             
              <h4 class="text-center cash-back">No Cashback</h4>
              
                              
                                        
                                    <div class="text-center"> <a href="" class="btn get_coupon_code" data-text="" id="get_coupon_code1324" target="blank">get coupon code</a> </div>
                                
                                <!-- Modal -->
                <div class="modal fade" id="myModal1324" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <h4 class="modal-title" id="myModalLabel"><?php echo $data[1]; ?></h4>
                      </div>
                      <div class="modal-body">
                                              </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>

              
              <div class="share-post text-center">
                <h5 class="text-uppercase">share this post</h5>
                <ul class="social_icons">
                  <li class="facebook"><a href="javascript:void(0);" title="Facebook"><i class="fa fa-facebook st_facebook_large" st_processed="yes"><span style="text-decoration:none;color:#000000;display:inline-block;cursor:pointer;" class="stButton"><span class="stLarge" style="background-image: url(&quot;https://ws.sharethis.com/images/2017/facebook_32.png&quot;);"></span></span></i></a></li>
                  <li class="twitter"><a href="javascript:void(0);" title="Twitter"><i class="fa fa-twitter st_twitter_large" st_processed="yes"><span style="text-decoration:none;color:#000000;display:inline-block;cursor:pointer;" class="stButton"><span class="stLarge" style="background-image: url(&quot;https://ws.sharethis.com/images/2017/twitter_32.png&quot;);"></span></span></i></a></li>
                  <li class="linkedin"><a href="javascript:void(0);" title="Linkedin"><i class="fa fa-linkedin st_linkedin_large" st_processed="yes"><span style="text-decoration:none;color:#000000;display:inline-block;cursor:pointer;" class="stButton"><span class="stLarge" style="background-image: url(&quot;https://ws.sharethis.com/images/2017/linkedin_32.png&quot;);"></span></span></i></a></li>
                  <li class="tumblr"><a href="javascript:void(0);" title="Tumblr"><i class="fa fa-tumblr st_tumblr_large" st_processed="yes"><span style="text-decoration:none;color:#000000;display:inline-block;cursor:pointer;" class="stButton"><span class="stLarge" style="background-image: url(&quot;https://ws.sharethis.com/images/2017/tumblr_32.png&quot;);"></span></span></i></a></li>
                </ul>
                <script type="text/javascript">var switchTo5x=true;</script> 
                <script type="text/javascript" src="https://ws.sharethis.com/button/buttons.js"></script> 
                <script type="text/javascript">stLight.options({publisher: "e5f231e9-4404-49b7-bc55-0e8351a047cc", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script> 
              </div>
<div class="text-center">
<h5 class="text-uppercase">like this post</h5>
<ul class="small-tag text-center">
                                <li><span class="error"></span><span class="save-success"></span></li>
                                <li> 
                                    <span>
                                        <a onclick="ComrecouponVote(1324, 1, this);" title="Thumbs up"><span class="voting-thumb-up">58</span> <i class="fa fa-thumbs-up"></i></a>
                                        <a onclick="ComrecouponVote(1324, -1, this);" title="Thumbs Down"><span class="voting-thumb-down">34</span> <i class="fa fa-thumbs-down"></i></a>
                                    </span> 
                                                                            <!--<a class="btn btn-small btn-border" data-target="#myModal" data-toggle="modal" href="javascipt:void(0)"><i class="fa fa-heart"></i> SAVE</a>
                                    

                                    <span class="greenTxt "><i class="fa fa-user"></i> 4 People Used </span>  -->
                            </li></ul></div>
            </div>
            
            <!--======= BLOG POST=========-->
            <div class="col-md-8">
              
              <div class="blog-post">
                <a href="http://freeshopping.co/sh_coupons/steal-offer-min-40-off-on-beauty-products-from-just-rs-64-free-shipping/" title="Steal Offer : Min. 40% OFF On Beauty Products From just Rs.64 + FREE Shipping" class="title-hed">
                <?php echo $data[1]; ?>
                </a> 
                              
                <p>Offer Description</p>

                <?php echo $data[2]; ?>


<div id="wpdevar_comment_3" style="width:100%;text-align:left;">
    <span style="padding: 10px;font-size:23px;font-family:Times New Roman,Times,Georgia,serif;color:#000000;">Comments</span>
    <div class="fb-comments fb_iframe_widget fb_iframe_widget_fluid_desktop" data-href="http://freeshopping.co/sh_coupons/steal-offer-min-40-off-on-beauty-products-from-just-rs-64-free-shipping/" data-order-by="social" data-numposts="100" data-width="100%" style="display: block; width: 100%;" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=1740357446214413&amp;container_width=555&amp;height=100&amp;href=http%3A%2F%2Ffreeshopping.co%2Fsh_coupons%2Fsteal-offer-min-40-off-on-beauty-products-from-just-rs-64-free-shipping%2F&amp;locale=en_US&amp;numposts=100&amp;order_by=social&amp;sdk=joey"><span style="vertical-align: bottom; width: 100%; height: 332px;"><iframe name="f8be80e30c000c" width="1000px" height="100px" title="fb:comments Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/plugins/comments.php?app_id=1740357446214413&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D44%23cb%3Dfd4c5805401d0c%26domain%3Dfreeshopping.co%26origin%3Dhttp%253A%252F%252Ffreeshopping.co%252Ff1460697747fc04%26relation%3Dparent.parent&amp;container_width=555&amp;height=100&amp;href=http%3A%2F%2Ffreeshopping.co%2Fsh_coupons%2Fsteal-offer-min-40-off-on-beauty-products-from-just-rs-64-free-shipping%2F&amp;locale=en_US&amp;numposts=100&amp;order_by=social&amp;sdk=joey" style="border: none; visibility: visible; width: 100%; height: 332px;" class=""></iframe></span></div></div>               
                                
                
              
              </div>
            </div>
          </div>




<!--======= SHARE POST =========-->
        
          <!-- end button -->
          <div class="clearfix"></div>
<!--=======  COMMENTS =========-->
                    <div id="disqus_thread"></div>
            <script type="text/javascript">
              /* * * CONFIGURATION 

VARIABLES: THIS CODE IS ONLY AN EXAMPLE * * */
              var disqus_shortname = 'freeshopping'; // Required - Replace 

example with your forum shortname
              var disqus_identifier = 

'disqus_thread1324';
              var disqus_title = 'Steal Offer : Min. 40% OFF On Beauty Products From just Rs.64 + FREE Shipping';
              var disqus_url = 'http://freeshopping.co/sh_coupons/steal-offer-min-40-off-on-beauty-products-from-just-rs-64-free-shipping/';

              /* * * DON'T EDIT BELOW THIS 

LINE * * */
              (function() {
                  var dsq = 

document.createElement('script'); dsq.type = 'text/javascript'; dsq.async 

= true;
                  dsq.src = '//' + 

disqus_shortname + '.disqus.com/embed.js';
                  

(document.getElementsByTagName('head')[0] || 

document.getElementsByTagName('body')[0]).appendChild(dsq);
              })();
          </script>
      
              </li>

            <li class="col-sm-3">
        <div class="blog-side-bar">
          <div id="facebooklikebox-2" class="blog-side-bar widget widget_FacebookLikeBox"><h5>Like Us On Facebook</h5><script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script><fb:like-box href="https://www.facebook.com/freeshoppingpage" width="350" show_faces="true" border_color="AAAAAA" stream="true" header="true" class=" fb_iframe_widget" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=1740357446214413&amp;container_width=0&amp;header=true&amp;href=https%3A%2F%2Fwww.facebook.com%2Ffreeshoppingpage&amp;locale=en_US&amp;sdk=joey&amp;show_faces=true&amp;stream=true&amp;width=350"><span style="vertical-align: bottom; width: 350px; height: 540px;"><iframe name="f23e587bc932f8" width="350px" height="1000px" title="fb:like_box Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/plugins/like_box.php?app_id=1740357446214413&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D44%23cb%3Df12b178e54862ec%26domain%3Dfreeshopping.co%26origin%3Dhttp%253A%252F%252Ffreeshopping.co%252Ff1460697747fc04%26relation%3Dparent.parent&amp;container_width=0&amp;header=true&amp;href=https%3A%2F%2Fwww.facebook.com%2Ffreeshoppingpage&amp;locale=en_US&amp;sdk=joey&amp;show_faces=true&amp;stream=true&amp;width=350" style="border: none; visibility: visible; width: 350px; height: 540px;" class=""></iframe></span></fb:like-box>
<script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script><fb:like layout="standard" show_faces="yes" width="292" action="like" font="arial" colorscheme="dark" class=" fb_iframe_widget" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=1740357446214413&amp;color_scheme=dark&amp;container_width=0&amp;font=arial&amp;href=http%3A%2F%2Ffreeshopping.co%2Fsh_coupons%2Fsteal-offer-min-40-off-on-beauty-products-from-just-rs-64-free-shipping%2F&amp;layout=standard&amp;locale=en_US&amp;sdk=joey&amp;show_faces=true&amp;width=292"></fb:like></div><div id="text-8" class="blog-side-bar widget widget_text"><h5>Google Search Bar</h5>      <div class="textwidget"><form action="http://www.google.co.in" id="cse-search-box">
  <div>
    <input type="hidden" name="cx" value="partner-pub-6969097615174142:2355412633">
    <input type="hidden" name="ie" value="UTF-8">
    <input type="text" name="q" size="55" placeholder="Custom Search" style="border: 1px solid rgb(126, 157, 185); padding: 2px; background: url(&quot;https://www.google.com/cse/static/images/1x/googlelogo_lightgrey_46x16dp.png&quot;) left center no-repeat rgb(255, 255, 255); text-indent: 48px;">
    <input type="submit" name="sa" value="Search">
  </div>
<input name="siteurl" type="hidden" value="freeshopping.co/sh_coupons/steal-offer-min-40-off-on-beauty-products-from-just-rs-64-free-shipping/"><input name="ref" type="hidden" value="localhost/freeshop/index.php"><input name="ss" type="hidden" value=""></form>
   
          
</section>




<footer>
  
  <div class="container">
    
            <ul class="row">
              <li id="nav_menu-3" class="col-sm-4 widget_nav_menu"><h6>GET TO KNOW US</h6><div class="menu-footera-container"><ul id="menu-footera" class="menu"><li id="menu-item-610" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-610"><a href="#">About Us</a></li>
<li id="menu-item-625" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-625"><a href="#">Our Team</a></li>
<li id="menu-item-613" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-613"><a href="#">FAQ’S</a></li>
<li id="menu-item-616" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-616"><a href="#">Testimonials</a></li>
<li id="menu-item-611" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-611"><a href="#">Career With Us</a></li>
<li id="menu-item-615" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-615"><a href="#">Media Contact</a></li>
<li id="menu-item-614" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-614"><a href="#">Investors</a></li>
<li id="menu-item-612" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-612"><a href="contact.php">Contact Us</a></li>
</ul></div></li><li id="nav_menu-4" class="col-sm-4 widget_nav_menu"><h6>SUPPORT</h6><div class="menu-footerb-container"><ul id="menu-footerb" class="menu"><li id="menu-item-619" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-619"><a href="#">Advertise With Us</a></li>
<li id="menu-item-622" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-622"><a href="#">Campus Ambassador</a></li>
<li id="menu-item-621" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-621"><a href="#">Feedback</a></li>
<li id="menu-item-1396" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1396"><a href="#">Digital marketing Course in Thane</a></li>
<li id="menu-item-620" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-620"><a href="#">Win A Gift Cards</a></li>
<li id="menu-item-618" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-618"><a href="#">Terms &amp; Conditions</a></li>
<li id="menu-item-617" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-617"><a href="#">Privacy Policy</a></li>
</ul></div></li><li id="text-2" class="col-sm-4 widget_text"><h6>Never Miss Out Exclusive Deals !</h6>      <div class="textwidget">
  <p>
  <label>Email address: </label><br>
  <input type="email" name="EMAIL" placeholder="Your email address" required="">
</p>
<p>
  <input type="submit" value="Sign up"></p>
</div>
    </li>            </ul>
    
          </div>
          <div class="rights">
                        <p>Made with love from INDIA.<br>
                                    <ul class="social_icons">
              
      <li data-color="#3b5a9b">
        <a title="Facebook" href="https://www.facebook.com/freeshoppingpage"><i class="fa fa-facebook"></i></a>
      </li>

      <li data-color="#2baae1">
        <a title="twitter" href="https://twitter.com/freeshoppingco"><i class="fa fa-twitter"></i></a>
      </li>

      <li data-color="#0072b2">
        <a title="Linkedin" href="https://in.linkedin.com/in/freeshopping"><i class="fa fa-linkedin"></i></a>
      </li>

      <li data-color="#fb1243">
        <a title="Google+" href=""><i class="fa fa-google-plus"></i></a>
      </li>

      <li data-color="#fb0f79">
        <a title="Pinterest" href="https://in.pinterest.com/freekashopping/"><i class="fa fa-pinterest"></i></a>
      </li>

      <li data-color="#3c71e7">
        <a title="Instagram" href="https://www.instagram.com/freeshopping.co/"><i class="fa fa-instagram"></i></a>
      </li>

      <li data-color="#ff1700">
        <a title="Slideshare" href="http://www.slideshare.net/freeshoppingonline1"><i class="fa fa-foursquare"></i></a>
      </li>

      <li data-color="#f11132">
        <a title="Youtube" href="https://www.youtube.com/channel/UCaAkF7F98rJ2rXdTf66v5hg"><i class="fa fa-youtube"></i></a>
      </li>
            </ul>
                      </div>


</footer>
</body>
</html>