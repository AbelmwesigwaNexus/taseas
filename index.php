<?php
require"files/connection.php";
require"files/config.inc.php";
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/styles.css" type="text/css" />
<link rel="stylesheet" href="css/main_bar.css" type="text/css" />
<link rel="shortcut icon" href="images/icon.ico"/>
<!--slider-->
<!-- Featured Slider Elements -->
<script type="text/javascript" src="js/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="js/jquery-s3slider.js"></script>
<script type="text/javascript" src="js/jquery-s3slider.setup.js"></script>
<!-- End Featured Slider Elements -->
<!-- scrolling slider Elements-->
	<script type="text/javascript" src="js/jssor.core.js"></script>
    <script type="text/javascript" src="js/jssor.utils.js"></script>
    <script type="text/javascript" src="js/jssor.slider.js"></script>
    
    <!--ticker javascript files-->
	<script type="text/javascript" src="js/jquery.ticker.js"></script>
	<script type="text/javascript" src="js/site.js"></script>

    		
             <script>
        jssor_slider1_starter = function (containerId) {
            var options = {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
                $AutoPlayInterval: 3000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: false,                               //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideEasing: $JssorEasing$.$EaseLinear,          //[Optional] Specifies easing for right to left animation, default value is $JssorEasing$.$EaseOutQuad
                $SlideDuration: 4000,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide:20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                $SlideWidth: 200,                                   //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 100,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 1, 					                //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 5,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                              //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                //$PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                //$DragOrientation: 1                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
            };

            var jssor_slider1 = new $JssorSlider$(containerId, options);

            function ScaleSlider() {
                var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                if (parentWidth)
                    jssor_slider1.$SetScaleWidth(Math.min(parentWidth, 1000));
                else
                    $JssorUtils$.$Delay(ScaleSlider, 30);
            }

            ScaleSlider();
            $JssorUtils$.$AddEvent(window, "load", ScaleSlider);


            if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
                $JssorUtils$.$OnWindowResize(window, ScaleSlider);
            }
        };
    </script>
            
            
<!-- End scrolling slider Elements-->
<!--closing slider-->

<script>
$(window).on('resize',function () {
    if ($(window).width() < 800){
        size = true;
        mob();
    }
});

$(window).trigger('resize').off('resize');
</script>

<title>TASEAS</title>
<style type="text/css">
<!--
.style1 {color: #333333}
-->
</style>
</head>


<body>
<div class="head_container">
	<div class="headtitle">
    	<div class="logo"><img width="100" height="80" src="images/logo_men.png" class="logo_style" /></div>
<!--div class="bulletin">
        
         <!-- Login Starts Here -->
          <!--div class="login">
            <div id="loginContainer"> <a href="#" id="loginButton"><span>Login</span><em></em></a>
                <div style="clear:both"></div>
              <div id="loginBox">
                  <form id="loginForm">
                    <fieldset id="body">
                    <fieldset>
                    <label for="email">Email Address</label>
                    <input type="text" name="email" id="email" />
                    </fieldset>
                      <fieldset>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" />
                    </fieldset>
                      <input type="submit" id="login" value="Sign in" />
                    <label for="checkbox">
                      <input type="checkbox" id="checkbox" />
                      Remember me</label>
                    </fieldset>
                    <span><a href="#">Forgot your password?</a></span>
                  </form>
              </div>
            </div>
          </div-->
    <!-- Login Ends Here -->
       <!--ticker-->
        <!--div class="news_heading_bullet " >latest news</div> 
        <div class="news_heading_ticter">
        <div class="ticker_content">
        	<iframe name="I2" src="ticker1.htm" height="33" width="100%" scrolling="no" border="1" frameborder="0"  marginwidth="1" style="border: none"></iframe>
        </div>   </div-->
         
        	
      </div-->
      <div class="web_title"><h1>TRANS AFRICAN CLEAN ENERGY & AGRICULTURE SOLUTIONS</h1>
      </div>
    </div>
</div>
<!--closing wrappe1r-->
<!-------------------------------------------------------------------------------------------------------------------------------->
<!-------------------------------------------------------------------------------------------------------------------------------->
<!-------------------body--------------------------body--------------------------------body---------------------------------------->
<!-------------------------------------------------------------------------------------------------------------------------------->
<!-------------------------------------------------------------------------------------------------------------------------------->
<!-------------------------------------------------------------------------------------------------------------------------------->
<div class="adds">
<div class="ticker_style">
<div id="ticker_content">
<ul id="js-news" class="js-hidden">
		<li class="news-item">jQuery News Ticker now has support for multiple tickers per page!</li>
		<li class="news-item">jQuery News Ticker now has support for right-to-left languages!</li>
		<li class="news-item">jQuery News Ticker now has support for loading content via an RSS feed!</li>
		<li class="news-item">jQuery News Ticker now has an optional fade effect between items!</li>
		<li class="news-item">New updates have been made to jQuery News Ticker! Check below for more details!</li>
		<li class="news-item">jQuery News Ticker is now compatible with jQuery 1.3.2! See below for further details and for latest download.</li>
		<li class="news-item">Further updates to jQuery News Ticker are coming soon!</li>
	</ul>

	<noscript>
		<h2 class="js-hidden">Latest News</h2>
		<ul id="no-js-news" class="js-hidden">
			<li class="news-item">jQuery News Ticker now has support for multiple tickers per page!</li>
			<li class="news-item">jQuery News Ticker now has support right-to-left languages!</li>
			<li class="news-item">jQuery News Ticker now has support for loading content via an RSS feed!</li>
			<li class="news-item">jQuery News Ticker now has an optional fade effect between items!</li>
			<li class="news-item">New updates have been made to jQuery News Ticker! Check below for more details!</li>
			<li class="news-item">jQuery News Ticker is now compatible with jQuery 1.3.2! See below for further details and for latest download.</li>
			<li class="news-item">Further updates to jQuery News Ticker are coming soon, come back soon for more details.</li>
		</ul>
	</noscript>
    </div>
	<div id="search_content">
	  <form id="searchbox" action="">
        <input id="search" type="text" placeholder="Type here">
        <input id="submit" type="submit" value="Search">
      </form>
	</div>
</div><!----------------------ticker stlye---------------->
<div><!----------------------search stlye---------------->

</div><!----------------------search stlye---------------->
</div>
<div class="wrapper_body">
<div class=" main_menu">

    <div class="menu">
    	 <ul id="nav">
            <li><a href="#">Home</a>
               
            <li><a href="links/about_us.php">About us</a>
          <ul>
                    <li><a href="#">Introduction</a></li>
                    <li><a href="#">Mission / Vision</a></li>
                    <li><a href="#">Other details</a></li>
                    <li><a href="#">Submenu 2-4</a></li>
                    <li><a href="#">Submenu 2-5</a></li>
                    <li><a href="#">Submenu 2-6</a></li>
                    <li><a href="#">Submenu 2-7</a></li>
                    <li><a href="#">Submenu 2-8</a></li>
                </ul>
            </li>
        <li><a href="#">Activities</a>
                <ul>
                    <li><a href="#">Submenu 3-1</a></li>
                    <li><a href="#">Submenu 3-2</a></li>
                    <li><a href="#">Submenu 3-3</a></li>
                    <li><a href="#">Submenu 3-4</a></li>
                    <li><a href="#">Submenu 3-5</a></li>
                </ul>
            </li>
            <li><a href="links/partnership.php">Partnership</a></li>
           <li><a href="links/photo_folio.php">Photo folio</a></li>
           <li><a href="links/contact.php">Contact us</a>
           <ul>
           <li><a href="links/login.php">Log in</a></li>
           </ul></li>
      </ul>
    
    </div>
    <div class="slider">
    	<div id="featured_slide_">
    <ul id="featured_slide_Content">
      <li class="featured_slide_Image"><a href="#"><img src="images/front_slider/1.jpg" alt="" /></a>
        <div class="introtext">
          <h2>Taceas 2015</h2>
          <p>This is a W3C compliant free website template from . This template is distributed using  You can use and modify the template for both personal and commercial use. You must keep all copyright information and credit links in the template and associated files.</p>
        </div>
      </li>
      <li class="featured_slide_Image"><a href="#"><img src="images/front_slider/2.jpg" alt="" /></a>
        <div class="introtext">
          <h2>TRANSFORMING AGRICULTURE</h2>
          <p>For more CSS templates visitFree Website Templates</a>. Convallisvivamus nam loborta tellus vitae pendrerit justo donec justo pellenterdum nam.
		  Convallisquismod orci quis ipsum alique orci sed morbi diculis et dapien. Semperultrices vitae pede enim pulvinare gravida est justo hendimente pellentum lacing.</p>
        </div>
      </li>
      <li class="featured_slide_Image"><a href="#"><img src="images/front_slider/3.jpg" alt="" /></a>
        <div class="introtext">
          <h2>ALTERNATIVE MARKETS</h2>
          <p>Curabiturpiscingillaenim justo augue gravida senean nec sed id suscinia dui estie. Parturnibh nec donec praesenean tellentesque quis 
		  arcu phasellus nec laoreet cumsan. Quissce hend tincidunt sem nunc dui aucibulum ris sceleifendrerisque tor orci.</p>
        </div>
      </li>
      <li class="clear featured_slide_Image">
        <!-- Important - Leave This Empty -->
      </li>
    </ul>
  </div>
    	</div>
    <div class="history">
    <div class="his_header">
    <div id="photo">
    <img width="90" height="90" src="images/profile.jpg"></div>
    <div id="his_title">
    Introduction</div>
    <div id="his_title2">Brief history of TACEAS</div>
    
    </div><!-----------closing history header----------------------->
    <div id="his_content">
      <p>Trans African Clean Energy and Agriculture Services (TACEAS) is a company limited by shares incorporated under Ugandan laws with the registrar of companies. It is mandated to carry out services in Agriculture, Renewable Energy, Development of Agriculture ICT solutions for Marketing through their mobile Sales pipeline structure for various companies’ offering services to rural farmers and renewable energy technologies..........<a href="#">&gt;&gt;&gt;read more</a></p>
    </div>
    
  
 
      </div>
      
      <div class="comment_box"></div>
      
</div>
<!-----------------------------scrolling slider--------------------------->
    <div class="scrolling_slider">
    	<div id="slider_container">
    	  <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 1000px; height: 200px; overflow: hidden;">
            <!-- Loading Screen -->
            <div u="loading" style="position: absolute; top: 0px; left: 0px;">
              <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;"> </div>
              <div style="position: absolute; display: block; background: url(images/slider/loading.gif) no-repeat center center;
                top: 0px; left: 0px;width: 100%;height:100%;"> </div>
            </div>
    	    <Slides Container >
            <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1000px; height: 200px; overflow: hidden;">
              
              <div><img u="image" alt="" src="images/slider/1.png" /></div>
              <div><img u="image" alt="" src="images/slider/2.png" /></div>
              <div><img u="image" alt="" src="images/slider/3.png" /></div>
              <div><img u="image" alt="" src="images/slider/4.png" /></div>
              <div><img u="image" alt="" src="images/slider/5.png" /></div>
              <div><img u="image" alt="" src="images/slider/6.png" /></div>
              <div><img u="image" alt="" src="images/slider/7.png" /></div>
              <div><img u="image" alt="" src="images/slider/8.png" /></div>
              <div><img u="image" alt="" src="images/slider/9.png" /></div>
              <div><img u="image" alt="" src="images/slider/10.png" /></div>
              <div><img u="image" alt="" src="images/slider/11.png" /></div>
              <div><img u="image" alt="" src="images/slider/12.png" /></div>
              <div><img u="image" alt="" src="images/slider/13.png" /></div>
              <div><img u="image" alt="" src="images/slider/14.png" /></div>
              <div><img u="image" alt="" src="images/slider/15.png" /></div>
              <div><img u="image" alt="" src="images/slider/16.png" /></div>
              <div><img u="image" alt="" src="images/slider/17.png" /></div>
              <div><img u="image" alt="" src="images/slider/18.png" /></div>
              <div><img u="image" alt="" src="images/slider/19.png" /></div>
              <div><img u="image" alt="" src="images/slider/20.png" /></div>
              
              <!--div><img u="image" alt="amazon" src="images/slider/1.jpg" /></div>
              
              <div><img u="image" alt="android" src="images/slider/2.jpg" /></div>
              <div><img u="image" alt="bitly" src="images/slider/3.jpg" /></div>
              <div><img u="image" alt="blogger" src="images/slider/4.jpg" /></div>
              <div><img u="image" alt="dnn" src="images/slider/5.jpg" /></div>
              <div><img u="image" alt="drupal" src="images/slider/6.jpg" /></div>
              <div><img u="image" alt="ebay" src="images/slider/7.jpg" /></div>
              <div><img u="image" alt="facebook" src="images/slider/8.jpg" /></div>
              <div><img u="image" alt="google" src="images/slider/9.jpg" /></div>
              <div><img u="image" alt="ibm" src="images/slider/10.jpg" /></div>
              <div><img u="image" alt="ios" src="images/slider/11.jpg" /></div>
              <!--div><img u="image" alt="joomla" src="images/slider/12.jpg" /></div>
              <div><img u="image" alt="linkedin" src="images/slider/13.jpg" /></div>
              <div><img u="image" alt="mac" src="images/slider/14.jpg" /></div>
              <div><img u="image" alt="magento" src="images/slider/15.jpg" /></div>
              <div><img u="image" alt="pinterest" src="images/slider/16.jpg" /></div>
              <div><img u="image" alt="samsung" src="images/slider/17.jpg" /></div>
              <div><img u="image" alt="twitter" src="images/slider/18.jpg" /></div>
              <div><img u="image" alt="windows" src="images/slider/19.jpg" /></div>
              <div><img u="image" alt="wordpress" src="images/slider/20.jpg" /></div-->
            </div>
    	    <a style="display: none" href="#">slideshow</a>
            <!-- Trigger -->
            <script>
            jssor_slider1_starter('slider1_container');
          </script>
          </div>
    	</div>
</div>
<!-----------------------------scrolling slider--------------------------->
<!-----------------------------Extra content and details--------------------------->
<div class="add_ons">
  <div class="add_on_container">
  <!--fieldset 1-->
        <fieldset id="addon_1">
        <legend style="font-size:18px ">Up coming Activities</legend>
        
      	</fieldset>
  <!--closing fieldset 1-->
  
  <!--fieldset 2-->
        <fieldset id="addon_1">
        <legend style="font-size:18px ">Recent Fcaebook Comments</legend>
        
      	</fieldset>
  <!--closing fieldset 2-->
  
    <!--fieldset 3-->
        <fieldset id="addon_1">
        <legend style="font-size:18px ">Announcements</legend>
        
        
      	</fieldset>
  <!--closing fieldset 3-->
  </div> 
</div>


<!-----------------------------Extra content and details--------------------------->
<!-----------------------------footer--------------------------->
<div class="footer">
	<div class="follow_us">
    	 <div class="location">
         TACEAS<br>
         P.O.Box # Kampala<br>
         email:taceas@taceas.org<br>
         Tel:+256 777 889 998<br>
         +256 700 908 212<br>
         <P></P>
  
         
         </div>
      <div id="list">
        <ul>
          <li class="follow_us_icons"> <a href="#">FACEBOOK</a></li>
                <li class="follow_us_icons"> <a href="#">GMAIL</a></li>
                <li class="follow_us_icons"> <a href="#">YOUTUBE</a></li>
                <li class="follow_us_icons"> <a href="#">TWEETER</a></li>
                <li class="follow_us_icons"> <a href="#">YAHOO MAIL</a></li>
            </ul>
         </div>
         <div id="list2">
           Copyright © 2015 Trans African Clean Energy and agrculture services . All rights reserved.        </div>
           
          
    </div>
	
</div>


<!-----------------------------end footer--------------------------->



</body>
</html>
