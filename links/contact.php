<?php
require '../files/connection.php';
require '../files/config.inc.php'
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact Us</title>
<link rel="stylesheet" href="../css/style_contact.css"/>
</head>

<body>
<div class="head_wrapper">
    <div class="head_content">
    	<div class="logo"> <img width="130px" height="100px" src="../images/logo_about.png"></div>
        <div class="heading">CONTACT&nbsp;TASCEAS</div>
        
    
    </div>
    
</div>

<div class="body_content_wrapper">
        <div class="main_menu2"> 
        	<ul>

                 <li class="main_menu_lists"><a href="#">Home</a></li>
                  <li class="main_menu_lists"><a href="#">About Us</a></li>
                  <li class="main_menu_lists"><a href="#">Activities</a></li>
                  <li class="main_menu_lists"><a href="#">Partnership</a></li>
                  <li class="main_menu_lists"><a href="#">Photo folio</a></li>
                  <li class="main_menu_lists"><a href="#">Contact Us</a></li></ul>
        </div>

        	<div class="body_content_details">
        	<div id="contact_title"> Contact Form</div>
			
			<?php 
	
	insertcontact()
	?>
            
            <form class="contact_form" method="post">
               <lebel for ="contact_name"> Name <span class="required">* </span></lebel>
		      <input name="contactName" type="text" id="contactName" size="35" value=""  />
               <lebel for ="contact_email">Email <span class="required">*</span></lebel>
               <input name="contact_email" type="text" id="contactEmail" size="35" value="" /><br /> <br />
               <lebel for ="subject"> Subject <span class="required"> *</span></lebel>
               <input name="contast_subject" type="text" id="Subject" value="" size="35" />
               <br /> 
               <br />
               <lebel for ="message"> Message <span class="required">*</span></lebel>
               <textarea name="contact_mesage" id="message" cols="80" rows="7" ></textarea>
               <input type="submit" lebel="send email" id ="button"/>
            </form>
        
        </div>
            <div class="map">
            <div class="list_content" style="text-align:center; font-size:16px; border-bottom:2px #999 groove">
            	Location</div>
                
            	<!--ul>

                 <li class="main_menu_lists"><a href="#">Home</a></li>
                  <li class="main_menu_lists"><a href="#">About Us</a></li>
                  <li class="main_menu_lists"><a href="#">Activities</a></li>
                  <li class="main_menu_lists"><a href="#">Partnership</a></li>
                  <li class="main_menu_lists"><a href="#">Photo folio</a></li>
                  <li class="main_menu_lists"><a href="#">Contact Us</a></li></ul-->
            	

          </div>
          
        <div class="mapping">
          	
          </div>
</div>
</body>
</html>
