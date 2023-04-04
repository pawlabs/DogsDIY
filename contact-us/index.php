<?php 
    
        if(isset($_POST['submit'])){
            
            
            $subject = $_POST['subject'];
            $message = $_POST['meassage'];
            $headers = 'From:'.$_POST['name'].' '. $_POST['email'] ; // Sender's Email
            $message = $_POST['meassage'];
                    
                $result = mail("dogsdiyahd@gmail.com", $subject, $message, $headers);   
        
            ?>
            
            <style> .success { display:block !important; } </style>
            <script>  var elmnt = document.getElementById("content");
                elmnt.scrollIntoView(); </script>
            <?php
        }
    
    
    
    ?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
        <meta charset="utf-8">
        <link rel='shortcut icon' type='image/x-icon' href='../images/Favicon.png' />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="../css/style.css">

    <title>DogsDIY</title>
    <meta property="og:title" content="DogsDIY" />
    <meta property="og:description" content="See Our Official Guide to This Year’s Top Dog Joint Health Supplements. Learn More!" />
    <meta property="og:image" content="https://dogsdiy.com/images/DIY meta image.png" />
    
    <style>
    body{
        position:relative;
    }
        section.home-footer {
        margin-top: 60px;
    }
    section#contactus h2 {
    font-size: 23px;
    font-weight: bold;
    color: #2e2e2e;
}
section#contactus h3 {
    font-size: 20px;
    color: #2e2e2e;
    margin: 15px 0;
}
section#contactus label {
    font-size: 15px;
    color: #2e2e2e;
}
section#contactus input {
    width: 277px;
    height: 30px;
    border: 1px solid #dedede;
    margin-bottom: 13px;
}

section#contactus  textarea#meassage {
    width: 366px;
    height: 168px;
    border: 1px solid #dedede;
}
section#contactus input[type="submit"] {
    background: #fa6233;
    width: 90px;
    height: 30px;
    color: #fff;
    font-size: 15px;
    border: unset;
    cursor:pointer;
}     
label span, p.req span {
    color: #b71414;
}
section#contactus p.req {
    font-size: 13px;
    margin-top: 5px;
}
.success{
    display:none;
    color: green !important;
    font-size: 18px !important;
}
section.home-banner {
    padding: 78px 0 5px;
}


.thank-popup {
   display: none;
   position: fixed;
    top: 50%;
    width: 30%;
    left: 50%;
    margin: 0 auto;
    text-align: center;
    background: #fff;
    border: 1px solid #000;
    /* padding: 30px; */
    padding: 30px 27px;
    margin-left: -202px;
    z-index: 999;
}
.popup-inner button {
    font-size: 16px;
    padding: 4px 27px;
    background: #ccc;
    color: #000;
    border: 1px solid #000;
}
.thank-popup p {
    font-size: 16px;
    margin-bottom: 20px;
}
.overlay {
    display: none;
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    background: rgba(255,255,255, 0.5);
    z-index: 99;
}



section#references .main-wrap {
    margin-top: 0;
}  
section#rising-bar {
    background: #cfe5ed;
    padding: 25px 0 35px;
    clear: both;
    overflow: hidden;
    padding-left: 35px;
    padding-right: 35px;
}

.rising-bar-left {
    width: 80%;
    float: unset;
    padding-top: 0;
    position: relative;
    top: 0;
    margin: 0 auto;
}
.rising-bar-right {
    width: 100%;
    float: right;
    margin-top: 20px;
}
.rising-bar-left.img {
   width: 8%;
    position: relative;
    top: 15px;
    float: left;
    left: 105px;
}

.rising-bar-left.content {
    width: 55%;
    padding-top: 10px;
    padding-left: 0;
    text-align: center;
    margin: 0 auto;
}
.bar-list.plus {
    padding-bottom: 0;
    float: right;
}
.rising-bar-left.content h2 {
    font-size: 23.5px;
    font-weight: 500;     
    color: #444444;
}
.rising-bar-right.content {
    width: 98%;
    padding-left: 0;
    margin-top: 8px;
    float: unset;
    margin-left: auto;
    margin-right: auto; 
}
.bar-list {
    clear: both;
    overflow: hidden;
    padding-bottom: 0;
    width: 43%;
    display: inline-block;
    margin-left: 25px;
}

.rising-bar-left.content p {
    color: #595959;
    font-size: 14px !important;
    line-height: 19px !important;
    font-family: 'Century Gothic' !important;
    margin-top: 3px;
}
.bar-list img {
    width: max-content;  
    float: left;
    padding-top: 5px;
}
.bar-list p {
    width: 97%;
    float: right;
    padding-left: 12px;
    font-size: 13.5px;
    line-height: 19px;
    color: #595959;
    font-family: 'Century Gothic' !important;
}



section#above-footer {
    background: #cfe5ed;
    padding:25px 25px 16px;
    margin-top: 20px;
}
.above-top h1 {
    font-size: 19px;
    font-weight: bold;
    color: #444444;
    display: inline-block;
}
.above-top {
    text-align: center;
}
.above-top img {
    display: inline-block;
}
.above-top p {
    color: #595959;
    font-size: 11px !important;
    padding: 5px 22px;
    line-height: 15px !important;
    font-weight: normal; 
    font-family: 'Century Gothic' !important;    
}
.above-bottom ul li {
    font-size: 11px !important;
    color: #595959;
    line-height: 13px !important;
    margin-bottom: 10px;
    position: relative;
    left: 10px;
}
.above-top img {
    position: relative;
    top: -4px;
}
img.paw-right {
    position: relative;
    right: -4px;
}
img.paw-left {
    position: relative;
    left: -4px;
}
.above-bottom {
    margin-top: 12px;
}        
 
 
 section.home-footer {
    margin-top: 0 !important;
}
section#relatedtopic {
    margin-bottom: 40px;
}
section#rising-bar {
    margin-top: 30px;
}
    </style>
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WFWCPWJ');</script>
<!-- End Google Tag Manager -->

<!-- SegMetrics -->
<script type="text/javascript">
var _segq = _segq || [];
var _segs = _segs || {};
(function () {var dc = document.createElement('script');dc.type = 'text/javascript';dc.async = true;dc.src = '//tag.segmetrics.io/aMYgg6.js';var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(dc,s);})();
</script>
<!-- SegMetrics END -->


  </head>
 

    

 <body class="new-template">
     
        <!--  Clickcease.com tracking-->
      <script type='text/javascript'>var script = document.createElement('script');
      script.async = true; script.type = 'text/javascript';
      var target = 'https://www.clickcease.com/monitor/stat.js';
      script.src = target;var elem = document.head;elem.appendChild(script);
      </script>
      <noscript>
      <a href='https://www.clickcease.com' rel='nofollow'><img src='https://monitor.clickcease.com/stats/stats.aspx' alt='ClickCease'/></a>
      </noscript>
      <!--  Clickcease.com tracking-->
      
 <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WFWCPWJ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <div class="overlay"> </div>
          <section class="header">
  <div class="container">
  <div class="header-flex flex-box">
  <div class="header-left">
      <a class="logo" href="/">
      
    <img src="../images/Logo3.png">
      
      </a> 
  </div>
   <div class="header-left header-right">
   



<ul class="nav-link flex-box">
  <li> <a class="" href="/">Home</a> </li>
   <li> <a class="" href="javascript:;">Food Recipes </a> </li>
        <div class="submenu" style="display:none;" >
                            <img src="../images/downarrow.png"/>
            <div class="submenu-wrap">
                
                <div class="list-item-wrap">
                <div class="list-item">
                    <div class=" recep-left">
                        <a href="/how-to-make-homemade-dog-food/">
                            <h3>How To Make homemade dog food</h3> 
                            <img src="../images/foodrecipe1.png"/>
                        </a>
                    </div> 
                        
               </div>  
                <div class="list-item">
                    <div class=" recep-left">
                        <a href="/homemade-meatballs-for-your-dog/">
                            <h3>homemade meatballs for your dog</h3>   
                            <img src="../images/foodrecipe2.png"/>
                        </a>
                    </div>
                    
                </div>  
                <div class="list-item ">
                    <div class=" recep-left">
                        <a href="/easy-crock-pot-beef-stew-for-dogs/">
                            <h3>easy Crock-Pot beef stew for dogs</h3>  
                            <img src="../images/foodrecipe3.png"/>                          
                        </a>
                    </div>
                    
               </div>  
               <div class="list-item last">
                    <div class=" recep-left">
                        <a href="/the-standard-turkey-grain-vegetable/">
                            <h3>the standard turkey grain vegetable</h3>  
                            <img src="../images/foodrecipe4.png"/>
                        </a>
                    </div> 
                        
               </div>  
               </div>
            </div>     
        </div>
        
   <li> <a class="" href="javascript:;">At Home DIY </a> </li>
   
        <div class="submenu homediy" style="display:none;" >
                            <img src="../images/downarrow.png"/>
            <div class="submenu-wrap">
                
                <div class="list-item-wrap">
                    <div class="list-item">
                        <div class=" recep-left">
                            <a href="/diy-dog-lift-harness-from-shopping-bags/">
                                <h3>DIY Dog Lift Harness From Shopping Bags</h3> 
                                <img src="../images/diy1.png"/>
                            </a>
                        </div> 
                            
                   </div>  
                    <div class="list-item ">
                        <div class=" recep-left">
                            <a href="/stylish-easy-diy-mitts-for-dogs/">
                                <h3>Stylish Easy DIY Mitts For Dogs</h3>   
                                <img src="../images/diy2.png"/>
                            </a>
                        </div>
                        
                    </div>  
                    <div class="list-item last">
                        <div class=" recep-left">
                            <a href="/easy-to-make-braided-t-shirt-toy-for-your-dog/">
                                            <h3>Easy to Make Braided <br> T-shirt Toy for Your Dog </h3>   
                                <img src="../images/diy3.png"/>
                            </a>
                        </div>
                        
                    </div>  
                      
               </div>
            </div>     
        </div>
    

   <li> <a class="" href="javascript:;">Product Reviews</a> </li>
    <div class="submenu reviews" style="display:none;" >
                            <img src="../images/downarrow.png"/>
            <div class="submenu-wrap">
                
                <div class="list-item-wrap">
                    <div class="list-item">
                        <div class=" recep-left">
                            <a href="/2022-best-dog-joint-supplements-review/">
                                <h3>2022 Best Dog Joint Supplements Review</h3> 
                                <img src="../images/product1.png"/>
                            </a>
                        </div> 
                            
                   </div>  
                    <div class="list-item last">
                        <div class=" recep-left">
                            <a href="/2022-best-salmon-oil-for-dogs-on-the-market/">
                                <h3>2022 Best Salmon Oil For Dogs On The Market</h3>   
                                <img src="../images/product2.png"/>
                            </a>
                        </div>
                        
                    </div>  
                
               </div>
            </div>     
        </div>
    
  </ul>
  
    </div>
   <div class="menu-btn toggactive">
   <img src="../images/Hamburger.png"  />
   </div>
  </div>
  
   <div class="mob-navigation ">
                
                <div class="mob-topnav">
                    
                      

                    <div class="mob-subbar">
                    
                        <ul >
                            <li><a href="/">Home</a></li>
                            <li class="drop-nav"><a href="javascript:;">Food Recipes 
                            <img src="../images/Down Nav.png"></a>
                            <div class="submob-wrap">
                                    <div class="list-item-wrap">
                                    <div class="list-item">
                                        <a href="/how-to-make-homemade-dog-food/">
                                            <h3>How To Make homemade dog food</h3>  
                                        </a>
                                   </div>  
                                    <div class="list-item">
                                        <a href="/homemade-meatballs-for-your-dog/">
                                            <h3>homemade meatballs for your dog</h3>   
                                        </a>
                                    </div>  
                                    <div class="list-item ">
                                        <a href="/easy-crock-pot-beef-stew-for-dogs/">
                                            <h3>easy Crock-Pot beef stew for dogs</h3>  
                                        </a>
                                   </div> 
                                    <div class="list-item ">
                                        <a href="/the-standard-turkey-grain-vegetable/">
                                            <h3>the standard turkey grain vegetable</h3> 
                                        </a>
                                   </div> 
                                   </div>
                                </div>   
                            
                            
                            </li>
                                  
                              
                            
                            <li class="drop-nav"><a href="javascript:;">At Home DIY 
                                <img src="../images/Down Nav.png"></a>
                            
                                <div class="submob-wrap">
                                    
                                    <div class="list-item-wrap">
                                    <div class="list-item">
                                        <a href="/diy-dog-lift-harness-from-shopping-bags/">
                                            <h3>DIY Dog Lift Harness From Shopping Bags</h3> 
                                        </a>    
                                   </div>  
                                    
                                     <div class="list-item">
                                        <a href="/stylish-easy-diy-mitts-for-dogs/">
                                            <h3>Stylish Easy DIY Mitts For Dogs</h3>   
                                        </a>    
                                   </div>  
                                    <div class="list-item">
                                        <a href="/easy-to-make-braided-t-shirt-toy-for-your-dog/">
                                            <h3>Easy to Make Braided T-shirt Toy for Your Dog </h3>   
                                        </a>    
                                   </div>  
                                   
                                   </div>
                                </div>     
                            
                            </li>
                            
                            <li class="drop-nav last"><a href="javascript:;">Product Reviews 
                                <img src="../images/Down Nav.png"></a>
                            
                                <div class="submob-wrap">
                                    
                                    <div class="list-item-wrap">
                                    <div class="list-item">
                                        <a href="/2022-best-dog-joint-supplements-review/">
                                            <h3>2022 Best Dog Joint Supplements Review</h3> 
                                        </a>    
                                   </div>  
                                    
                                     <div class="list-item last">
                                        <a href="/2022-best-salmon-oil-for-dogs-on-the-market/">
                                            <h3>2022 Best Salmon Oil For Dogs On The Market</h3>    
                                        </a>    
                                   </div>  
                                   
                                   </div>
                                </div>     
                            
                            </li>
                        </ul>   
                    
                    </div>
                </div>
            </div>
  </div>
  </section>
  <div class="shadow-effect">
  
   
  
   <div class="overlay"></div>
  
  


   
    
    <section class="home-banner" id= "contactus">
        <div class="container">
            <h2> Contact Us</h2>
            <h3> DogsDIY </h3>
            
            <form method="POST" action="">
                <label for="name">Name<span>*</span></label><br>
                <input type="text" id="name" name="name" value="" required><br>
                <label for="email">Email<span>*</span></label><br>
                <input type="email" id="email" name="email" value="" required><br>
                <label for="subject">Subject</label><br>
                <input type="text" id="subject" name="subject" value=""><br>
                <label for="meassage">Message</label><br>
                <textarea id="meassage" name="meassage" rows="4" cols="50"></textarea><br>
                <p class="req"><span>*</span>Required fields</p><br>
                 <input type="submit" name="submit" value="Submit" />
                <p id="content" class="success">Thank you for contacting us!</p>
            </form>   
        </div>
    </section>
    
    
    
    <section id="rising-bar" class="deskonly">
        <div class="container"> 
        
            <div class="deskonly footer-topsec">
                <div class="rising-bar-left">
                    <div class="rising-bar-left img">
                        <img class=" lazyloaded" data-src="../images/Paw Desktop.png" src="../images/Paw Desktop 2.png">
                    </div>
                    <div class="rising-bar-left content">
                        <h2> DogsDIY Is Your Craft Partner </h2>
                        <p>We offer you practical tips and crafts to help you make the best out of the stuff in your home.</p> 
                    </div>
                </div>
                <div class="rising-bar-right">
                    <div class="rising-bar-right content">
                        <div class="bar-list">
                            <img class=" lazyloaded" data-src="../images/Bullet Desktop.png" src="../images/Bullet Desktop.png"><p>We are here to provide you inspiration with our growing collection of reviews, food recipes, and DIYs.  </p>
                        </div>  
                        <div class="bar-list plus">
                            <img class=" lazyloaded" data-src="../images/Bullet Desktop.png" src="../images/Bullet Desktop.png"><p>All write-ups are created by expert authors to deliver you easy-to-follow articles with your dog's welfare in mind.</p>
                        </div>
                    </div>
                
                </div>      
            </div>
        
          
        </div>
    </section>
    
        <section id="above-footer" class="mobonly">
        <div class="container"> 
            <div class="above-top">
                <img src="../images/footer left.png" class="paw-left"/> <h1> DogsDIY Is Your Craft Partner</h1> <img src="../images/footer right.png" class="paw-right"/>   
                <p> We offer you practical tips and crafts to help you make the best out of the stuff in your home.</p>
            </div>
            <div class="above-bottom">
                <ul>
                    <li>We are here to provide you inspiration with our growing collection of reviews, food recipes, and DIYs. </li>
                    <li>All write-ups are created by expert authors to deliver you easy-to-follow articles with your dog's welfare in mind. </li>
                </ul>
            </div>
    
        </div>
    </section>
    
   <!----footer section--->
  
  
 <section class="home-footer">
  <div class="container"> 
  <div class="footer-flex flex-box">
  <div class="footer-left">
  <a class="footer-logo" href="/">
      
    <img src="../images/Logo3.png">
      
      </a>
<div class="share-img flex-box">

            <!-- AddToAny BEGIN -->
            <div class="a2a_kit a2a_kit_size_32 a2a_default_style">

                <a class="a2a_button_facebook"></a>
                <a class="a2a_button_twitter"></a>
                <a class="a2a_button_pinterest"></a>
                <a class="a2a_button_email"></a>
            </div>
            <script async src="https://static.addtoany.com/menu/page.js"></script>
            <!-- AddToAny END -->
        </div>  
  
  </div>
  
  <div class="footer-left footer-right">
  <ul class="nav-link  footer-links flex-box">
  <li> <a class="" href="/">Home</a> </li>
   <li> <a class="" href="/how-to-make-homemade-dog-food/">Food Recipes </a> </li>
   <li> <a class="" href="/diy-dog-lift-harness-from-shopping-bags/">At Home DIY </a> </li>
   <li> <a class="" href="/2022-best-dog-joint-supplements-review/">Product Reviews</a> </li>
    
  </ul>
        
  </div>
   <div class="footer-left footer-rightmost">
      <ul class="nav-link  footer-links flex-box">
            <li> <a class="" href="/contact-us/">Contact Us</a> </li>
      </ul>
  
  </div>
  </div>
  
  <div class="hr-line">
  <hr>
  </div>  
  
  <div class="copy-right-footer">
  <p><b>DISCLAIMER:</b> This website and its contents are owned, operated, and sponsored by PawLabs, LLC, the manufacturer and distributor of G-Max Joint Support. PawLabs, LLC has no affiliation with and is not sponsored by, owned by or in any way endorsed by any of the other brands, companies, or trademark owners featured on this site. The content on this site, including comparisons, charts, tables, articles, and other content are made for illustration and entertainment purposes only, and shall not be relied upon for accuracy or for any other purpose. While we take measures to ensure the accuracy of the information provided herein, such measures may not be sufficient so we encourage our site's visitors to conduct their own research and to not exclusively rely on the information contained herein.</p>
            
<p class="disc-bottom"> The products and claims made about specific products on or through this Site have not been evaluated by the United States Food and Drug Administration and are not approved to diagnose, treat, cure or prevent disease. Always consult your veterinarian regarding any change in treatment or supplementation.</p>

<p class="disc-bottom"> * Some authors that contribute to this site use pen names and stock images as profile pictures in order to protect their privacy. Authors are compensated for their time and content and the opinions expressed by these authors do not necessarily reflect the opinions of this site or its owners.</p>
  <ul class="new-footrs">
<li><a class="last fists" href="/privacy">Privacy Policy</a> </li>
<li><a class="last" href="/terms">Terms &amp; Conditions</a> </li>
</ul>
<p class="disccopy">© 2023 DogsDIY. All rights reserved.</p>

  </div>
  </div>
  </section>
  <style>
   /****  newwww ****/
ul.new-footrs {
    text-align: center;
    list-style: none;
    padding-left: 0;
    padding-top: 10px;
}

.new-footrs li {
    display: inline-block;
}

a.last.fists {
    padding-right: 20px;
}

.new-footrs a.last {
    color: #d2d3d4;
    font-size: 10px;
    font-family: arial;
}
.copy-right-footer a {
    text-decoration: underline;
}


p.disccopy {
    text-align: center;
}
@media(min-width:768px){
p.disccopy {
    font-size: 11px !important;
    padding-top: 8px;
}
}
   
 @media (max-width: 768px){
ul.new-footrs {
    padding-top: 0px !important;
}

}    

  </style>
   
   
   
   
  </div>
<div class="thank-popup">
        <div class="popup-inner">
            <p> Thank you for contacting us!</p>
            <button onclick="jQuery('.thank-popup').hide();jQuery('.overlay').hide();"> Ok </button>
        </div>

    </div>  
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script>

jQuery(".header-right ul li").hover(function(){
 jQuery(this).next(".submenu").show();
  }, function(){
  jQuery(this).next(".submenu").hide();
});




jQuery('.toggactive').click(function(e){
    e.preventDefault();
    jQuery('.mob-navigation').toggleClass('active'); 
    jQuery('body').toggleClass('fifed'); 
    jQuery(this).toggleClass('open'); 
    jQuery('.overlay').toggle(); 
});

jQuery('.drop-nav').click(function(){

        jQuery(this).children('.submob-wrap').slideToggle();
        jQuery(this).children('a').toggleClass('under');

});
jQuery('#infoToggler').click(function(){

        jQuery(this).parent('.search-mob').toggleClass('searchon');
         jQuery(this).find('img').toggle(); 

});

jQuery(document).mouseup(function(e) 
{
    var container = jQuery(".header");
    
    if (!container.is(e.target) && container.has(e.target).length === 0 ) 
    {
       jQuery('.mob-navigation').removeClass("active");
       jQuery('.toggactive ').removeClass("open");
       jQuery('body').removeClass('fifed'); 
       jQuery('.overlay').css('display', 'none'); 
    }
    
    
});

/***************** close popup on click anywhere ************************/  
    
    jQuery(document).mouseup(function(e) 
    {
        var container = jQuery(".thank-popup");
        if (!container.is(e.target) && container.has(e.target).length === 0) 
        {
            jQuery('.overlay').hide();
            jQuery('.thank-popup').hide();
        }
    });
    


</script>

  </body>
</html>