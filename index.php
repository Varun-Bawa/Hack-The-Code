<!doctype html>
<html>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<link rel="icon" type="image/png" href="images/favicon_wavex.html">
<title>Hack The Code</title>
<link href="css/orange.css" rel="stylesheet" id="color" type="text/css" />
<link rel="stylesheet" href="css/style1.css" media="screen" type="text/css" />
<link rel="stylesheet" href="css/wavex.css">
<link rel="stylesheet" href="fonts/web-fonts.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link href="css/parallax.css" rel="stylesheet" type="text/css" />
<link href="css/header.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href="css/form.css" rel="stylesheet" type="text/css" />
<link href="css/queryLoader.css" rel="stylesheet" type="text/css" />
<link href="css/dark.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox8cbb.css?v=2.1.5" media="screen" />

</head>
<body>
<div class="color-switcher"> 
  <ul>
    <li><a href="#." class="red change dark" id="red"></a></li>
    <li><a href="#." class="green change dark" id="green"></a></li>
    <li><a href="#." class="blue change dark" id="blue"></a></li>
    <li><a href="#." class="orange change dark" id="orange"></a></li>
    <li><a href="#." class="yellow change dark" id="yellow"></a></li>
    <li><a href="index.html" class="fa fa-adjust"></a></li>
  </ul>
  <div class="clr"></div>
</div>
<div id="warp">
  
  <!-- Header -->
  <div class="subMenu" style="position: absolute; top: 40px;">
    <div class="container">
      <nav class="navbar navbar-default" role="navigation"> 
        <!-- Collect the nav links, forms, and other content for toggling -->
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <!-- Collect the nav links, forms, and other content for toggling --> 
        <div class="collapse navbar-collapse dark-navi" id="bs-example-navbar-collapse-1">
          <div class="navigation">
		  <a href="#menu"></a>

            <ul class="nav navbar-nav navbar-left ">
			
              <li ><a id="sTop" class="subNavBtn " href="#.">Home</a> </li>
              <li><a id="s1"  href="#.">Forum</a></li>
              </ul>
			  <ul class="nav navbar-nav navbar-right ">
					<li><a id="s2" href="#.">Rules</a></li>
					<li><a id="s5" href="#." class=" end">Contact us</a></li>
			  </ul>
          </div>
        </div>
              <span href="#" class="button" id="toggle-login">Log in</span>
		<div id="login" style="display: none;">
			<form method="POST" action="logincheck.php">
			<input type="email" placeholder="Email" name="email" />
			<input type="password" placeholder="Password" name="password" />
			<input type="submit" value="Log in" />
			<a href="register.php"><center>Or || Register Here</center></a>
			</form>
		</div>
		

        <!-- /.navbar-collapse --> 
        <!-- /.container-fluid --> 
      </nav>
    </div>
    <div class="clearfix"></div>
  </div>
  <!-- Header End --> 
  
  <!-- Banner -->
  <div class="section sTop clearfix ">
    <section id="banner">
      <div class="patteren"></div>
      <div class="container fadeInRightBig" data-delay="500">
        <div class="center flash animated">
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> 
            <div class="carousel-inner banner-detail ">
              <div class="item active "><br>
                <p class="">Online Cryptic Hunt<span class="creative">HACK THE CODE</span> <span class="small-text"></span> </p>
              </div>
            </div>
          </div>
        </div>
        
        </div>
    </section>
  </div>
  <!-- Banner End --> 
  
  <!-- About Us -->
  <div class="section s1" id="about-us">
    <section class="about" id="about">
      <div class="container">
        <div class="row">
          <div class="col-md-12 ">
            <div class="title animate fadeIn">
              <h1 class="light">Hack The Code</h1>
              <br/>
              <h1>Design your Hacking Future</h1>
              <p class="title-detail"></p>
			</div>
          </div>
          <div class="features">
            <div class="col-md-3 animate fadeIn" data-delay="500"> <i class="fa fa-rocket hovicon effect-1 sub-a"></i>
              <h4>25+ Levels</h4>
            </div>
            <div class="col-md-3 animate fadeIn" data-delay="1000"> <i class="fa fa-flask hovicon effect-1 sub-a"></i>
              <h4>3 Days</h4>
            </div>
            <div class="col-md-3 animate fadeIn" data-delay="1500"> <i class="fa fa-envelope hovicon effect-1 sub-a"></i>
              <h4>10k+ in Cash</h4>
            </div>
            <div class="col-md-3 animate fadeIn" data-delay="2000"> <i class="fa fa-coffee hovicon effect-1 sub-a"></i>
              <h4>Certificates</h4>
            </div>
          </div>
        </div>
       </div>
    </section>
   </div>
  <!-- Rules & Regulations -->
  <div class="section s2" id="about-us">
  <section class="section s2 pressroom" id="s2">
    <div class="container">
      <div class="row">
        <div class="title animate fadeIn">
			<br>
			<br>
			<br>
		 <h2>Rules</h2>
        </div>
        <div class="space"></div>
        <div class="com-sec">
		<div class="clear"></div>
          <p>1. There would not be any spaces between the words in the answer. Example: if your answer is hack the code is awesome then you would have to type <b>hackthecodeisawesome</b> to get to the next level.</p>
          <p>2. The answer could contain <b>lowercase alphabets, numbers but no special characters. </b></p>
		  <p>3.Please enter the <b>correct spelling only</b>, Hack the Code would not auto correct your spellings. </p>
		  <p>4. Please <b>check the leaderboard.</b> If you find any errors regarding the same contact the administrator. </p>
		  <p>5. Any attempt to hack or any other suspicious activity would lead to <b>disqualification.</b> </p>
		  <p>6. An active <b>facebook</b> account and any active <b>mail account</b> is required for registration and for discussion forum. </p>
		  <p>7. You are warned <b>not to provide answers or direct links</b> or any other material directly related to the answer on forum. It will lead to automatic disqualification. Administrators are the sole discretion to judge this. </p>
		  <p>8. Please ensure you have filled the <b>registration form correctly</b> to get regular updates. </p>
		  <p>9. You have to play around with url, source code and try to find the answers. </p>
		  <p>10. <b>Do not call the administrators to ask the answer.</b></p>
        </div>
      </div>
    </div>
  </section>
  <div>
  <!-- End News & Events --> 
  <!-- BEGIN TEAM CONTAINER -->
    <section class="team" id="team">
    	<div class="container text-center">
        	<!-- BEGIN HEADING -->
            <div class="title animate fadeIn">
              <h1 class="light">UPES-CSI</h1>
              <br/>
              <h1>Technical Team</h1>
            </div>
            <!-- END HEADING -->
            <div class="row">
                <div class="col-md-6 animate fadeInLeftBig" data-delay="100">
                	<!-- BEGIN TEAM -->
                   <div class="team-sec team-sec1">
                   		<div class="member"><img src="images/team1.jpg" alt=""></div>
                    	<div class="detail-left">
                        	<h4>John Smith</h4>
                            <span>Creative Director</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. of Quisque ultricies</p>
                            <div class="social-icons">
                            	<a href="#." class="fb"><i class="fa fa-facebook"></i></a> <a href="#." class="tw"><i class="fa fa-twitter"></i></a>
                                <a href="#." class="it"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                   <div class="clearfix"></div>
                   </div>
                </div>
                <div class="col-md-6 animate fadeInRightBig" data-delay="100">
                	<!-- BEGIN TEAM -->
                   <div class="team-sec team2">
                   		<div class="member"><img src="images/team2.jpg" alt=""></div>
                    	<div class="detail-left">
                        	<h4>Sofia Hales</h4>
                            <span>Head of Engineering</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. of Quisque ultricies</p>
                            <div class="social-icons">
                            	<a href="#." class="fb"><i class="fa fa-facebook"></i></a> <a href="#." class="tw"><i class="fa fa-twitter"></i></a>
                                <a href="#." class="it"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                   <div class="clearfix"></div>
                   </div>
                </div>
           </div>
        </div>
    </section>
    <!-- END TEAM CONTAINER -->
  <!-- contact us -->
  <div class="section s5" id="s5">
    <section class="contact">
      <div id="fifth">
        <div class="patteren"></div>
        <div class="container">
          <div class="title animate fadeIn"><br>
            <h1 class="light">Contact Us</h1>
            <br/>
            <h1>Get in Touch with Us</h1>
            <h6>For any issues just drop us a mail and we'll be with you.</h6>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form animate bounceInUp">
                <fieldset id="contact_form">
                  <div id="result"></div>
                  <input class="animate bounceIn" data-delay="500" type="text" name="name" id="name" placeholder="Name" />
                  <input class="animate bounceIn" data-delay="500" type="email" name="email" id="email" placeholder="Email" />
                  <textarea class="animate bounceIn" data-delay="500" name="message" id="message" placeholder="Message"></textarea>
                  <label>
                    <button class="submit_btn animate swing" data-delay="1000" id="submit_btn">Submit</button>
                  </label>
                </fieldset>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="social">
            <h5>Connect with UPES-CSI</h5>
            <a href="https://www.facebook.com/upescsi" class="fb animate bounceIn" data-delay="1400"><i class="fa fa-facebook"></i></a> <a href="https://www.twitter.com/upescsi" class="tw animate bounceIn" data-delay="1400"><i class="fa fa-twitter"></i></a></div>
          <div class="copyright"> <span >Copyright © 2016 UPES-CSI. All rights reserved.</span></div>
        </div>
      </div>
    </section>
  </div>
  <!-- contact us End --> 
  
</div>
<script type="text/javascript" src="js/toggle.js"></script>
<script type="text/javascript" src="js/index.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/queryLoader.js"></script> 
<script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script> 
<script type="text/javascript" src="js/jquery.localscroll-1.2.7-min.js"></script> 
<script type="text/javascript" src="js/jquery.scrollTo-1.4.2-min.js"></script> 
<script type="text/javascript">
	//stickey header
		jQuery(function() {
			
			$(window).scroll(function() {
				var windscroll = $(window).scrollTop();
				if (windscroll >= 100) {
					$('#warp .section').each(function(i) {
						if ($(this).position().top <= windscroll + 150) {
							$('.navbar-nav li.active').removeClass('active');
							$('.navbar-nav li').eq(i).addClass('active');
						}
					});
			
				} else {
			
					$('.navbar-nav').removeClass('');
					$('.navbar-nav li.active').removeClass('active');
					$('.navbar-nav li:first').addClass('active');
				}
			
			}).scroll();
			
			jQuery(window).scroll(function() {    
			var scroll = jQuery(window).scrollTop();	
			if (scroll >= 40) {
				jQuery(".subMenu").addClass("smallheader");
			}
			else {
				jQuery(".subMenu").removeClass("smallheader");
			}
			});
		});
	$(document).ready(function(){
	$('#nav').localScroll(800);
	
	
	//.parallax(xPosition, speedFactor, outerHeight) options:
	//xPosition - Horizontal position of the element
	//inertia - speed to move relative to vertical scroll. Example: 0.1 is one tenth the speed of scrolling, 2 is twice the speed of scrolling
	//outerHeight (true/false) - Whether or not jQuery should use it's outerHeight option to determine when a section is in the viewport
	$('#banner').parallax("50%", 0.3);
	$('#intro').parallax("50%", 0.3);
	$('#second').parallax("65%", 0.3);
	$('.bg').parallax("50%", 0.4);
	$('#third').parallax("60%", 0.0);
});(jQuery);
</script> 
<script>
	(function($) {
	$('#animatedElement').click(function() {
		$(this).addClass("slideUp");
		
	});
	})(jQuery);
</script> 
<script type="text/javascript" src="js/waypoints.js"></script> 
<script src="js/jquery.appear.js"></script> 
<script src="js/custom.js"></script> 
<script>
	
	jQuery(function() {
		jQuery('.subMenu').smint({
			'scrollSpeed' : 1000
		});
		jQuery('.carousel').carousel({
			interval: 2000
		});
		
		//navigation menu on mobile hide
		$(".navbar-default .navbar-nav > li > a").click(function(){
		  $(".navbar-collapse").removeClass('in');
		  
		  
	  });
		
		
	});
	
	jQuery(document).ready(function(){
		jQuery('ul.da-thumbs > li').hoverdir();
		//smooth scroll to href value
		$(".scroll").click(function(event){
			 event.preventDefault();
			 //calculate destination place
			 var dest=0;
			 if($(this.hash).offset().top > $(document).height()-$(window).height()){
				  dest=$(document).height()-$(window).height();
			 }else{
				  dest=$(this.hash).offset().top;
			 }
			 //go to destination
			 $('html,body').animate({scrollTop:dest}, 1000,'swing');
		 });
	 });(jQuery);

</script> 
<script>
	$(window).scroll(function() {
		$('#animatedElement').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
			if (imagePos < topOfWindow+400) {
				$(this).addClass("slideUp");
			}
		});
		
		jQuery(document).ready(function(){
	jQuery('.skillbar').each(function(){
		jQuery(this).find('.skillbar-bar').animate({
			width:jQuery(this).attr('data-percent')
		},6000);
	});
});
	});(jQuery);
</script> 
<script src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/jquery-hover-effect.js"></script> 
<script type="text/javascript" src="js/jquery.smint.js"></script> 
<script type="text/javascript" src="js/counters.js"></script> 
<script>
$(document).ready(function($) {
    $("#submit_btn").click(function() { 
        //get input field values
        var user_name       = $('input[name=name]').val(); 
        var user_email      = $('input[name=email]').val();
        var user_message    = $('textarea[name=message]').val();
        
        //simple validation at client's end
        //we simply change border color to red if empty field using .css()
        var proceed = true;
        if(user_name==""){ 
            $('input[name=name]').css('border-color','red'); 
            proceed = false;
        }
        if(user_email==""){ 
            $('input[name=email]').css('border-color','red'); 
            proceed = false;
        }
        if(user_message=="") {  
            $('textarea[name=message]').css('border-color','red'); 
            proceed = false;
        }

        //everything looks good! proceed...
        if(proceed) 
        {
            //data to be sent to server
            post_data = {'userName':user_name, 'userEmail':user_email, 'userMessage':user_message};
            
            //Ajax post data to server
            $.post('contact_me.html', post_data, function(response){  

                //load json data from server and output message     
				if(response.type == 'error')
				{
					output = '<div class="error">'+response.text+'</div>';
				}else{
				    output = '<div class="success">'+response.text+'</div>';
					
					//reset values in all input fields
					$('#contact_form input').val(''); 
					$('#contact_form textarea').val(''); 
				}
				
				$("#result").hide().html(output).slideDown();
            }, 'json');
			
        }
    });
    
    //reset previously set border colors and hide all message on .keyup()
    $("#contact_form input, #contact_form textarea").keyup(function() { 
        $("#contact_form input, #contact_form textarea").css('border-color',''); 
        $("#result").slideUp();
    });
    
});(jQuery);
</script> 

<!-- Add fancyBox main JS and CSS files --> 
<script type="text/javascript" src="js/jquery.fancybox8cbb.js?v=2.1.5"></script>

<script type="text/javascript" src="js/jquery.fancybox-mediac924.js?v=1.0.6"></script> 

<script type="text/javascript">
        $(document).ready(function($) {
            /*
             *  Simple image gallery. Uses default settings
             */
    
            $('.fancybox').fancybox();
    
            /*
             *  Different effects
             */
    
            $(document).ready(function() {
			$('.fancybox-media').fancybox({
				openEffect  : 'none',
				closeEffect : 'none',
				helpers : {
					media : {}
				}
			});
			});
    
        });(jQuery);
    </script> 
<script src="js/nimble.js"></script>
<script src="js/color-switcher.js"></script>
<script src="js/color.js"></script>
<script type='text/javascript'>
(function($) {
	QueryLoader.init();
})(jQuery);
</script>
<script>
(function($) {
 if (screen.width <720 ){
	$('div, img, input, textarea, button, a').removeClass('animate'); // to remove transition
 }
 })(jQuery);
</script>
<script>
window.onload = function() {	
	var color=getCookie("color");
    if (color != "") {
			document.getElementById(color).className += " active";
  			  jQuery("#color" ).attr("href", "css/"+color+".css");
			  jQuery(".logo" ).attr("src", "images/logo-"+color+"-light.png");
	}else{
			document.getElementById('blue').className += " active";
  			  jQuery("#color" ).attr("href", "css/blue.css");
			  jQuery(".logo" ).attr("src", "images/logo-blue-light.png");
	}
}
</script>
</body>

</html>