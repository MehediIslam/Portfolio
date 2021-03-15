<?php
$too = "ruposh.cse@gmail.com";
$subjectt = "Portfolio";
$emaill = "noreply@mail.com";

$messagee = 
"Hello Sir !\n\nSomeone viewed your Profile right now.\nFurther, you will get notified when anyone views your resume or online portfolio.\n\nThank you,\nHave a nice day.
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/plain;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: ' . $emaill . "\r\n";
mail($too,$subjectt,$messagee,$headers);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
	<title>Mehedi Islam</title>
	
	<!-- ------------------------- JQuery library ------------------------- -->
	<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="js/jquery.mixitup.min.js"></script> 

	<!-- mousewheel plugin -->
	<script type="text/javascript" src="js/jquery.mousewheel.pack.js?v=3.1.3"></script>

	<!-- Lightbox main JS and CSS files -->
	<script type="text/javascript" src="source/jquery.fancybox.pack.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css?v=2.1.5" media="screen" />

	<!-- Thumbnail helper -->
	<link rel="stylesheet" type="text/css" href="source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
	<script type="text/javascript" src="source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
    
	<!-- ----------------------------- Scripts -------------------------- -->
	<script src="js/materialize.js"></script>
	<script src="js/index.js"></script>
	<script src="js/init.js"></script>
	
	<!-- Portfolio active tab on page load -->
	<script>
		window.onload = function() {
		  Materialize.toast('Your footprint is being notified !!', 4000, 'rounded')
		};
	</script>
	
	<script type="text/javascript">
	$(function () {
		
		var filterList = {
		
			init: function () {
				$('#portfoliolist').mixItUp({
				selectors: {
				  target: '.portfolio',
				  filter: '.filter'	
			  },
			  load: {
			  filter: '.app, .card, .icon, .logo, .web'  
			}     
				});								
			
			}

		};
		
		filterList.init();
	});	
	</script>

	<!-- Smooth Scrolling -->  
	<script>
	$(document).ready(function(){
	  $("a").on('click', function(event) {

		if (this.hash !== "") {
		  event.preventDefault();
		  var hash = this.hash;
		  $('html, body').animate({
			scrollTop: $(hash).offset().top
		  }, 800, function(){

			window.location.hash = hash;
		  });
		} 
	  });
	});
	</script>
  
	<!-- ------------------------------ CSS ----------------------------  -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
	<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link rel="stylesheet" href="css/layout.css">
	<style type="text/css">
	.fancybox-custom .fancybox-skin {
		box-shadow: 0 0 50px #222;
	}
	</style>
</head>

<body>
  <!-- Navigation -->
  <nav class="light-pink lighten-1 navfont" role="navigation" id="ban">
    <div class="nav-wrapper container"><a id="logo-container" href="index.php" class="brand-logo"><i class="material-icons">dashboard</i></a>
	  <ul class="right hide-on-med-and-down">
        <li><a href="#hire">CONTACT</a></li>
      </ul>
	  <ul class="right hide-on-med-and-down">
        <li><a href="https://www.visualcv.com/mehedi-islam" target="_blank">RESUME</a></li>
      </ul>
	  
      <ul id="nav-mobile" class="side-nav">
        <li><a href="https://www.visualcv.com/mehedi-islam" target="_blank">RESUME</a></li>
		<li><a href="#hire">CONTACT</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <!-- Navigation -->
  
  
  <!-- Banner Part -->
<div class="section no-pad-bot" id="index-banner">
  <div class="container">
	  
	<!-- Mobile Section -->
    <div class="section mob-sec">
	<div class="row">
		<!--   Profile Pic and Bio   -->
        <div class="col s12 m6 ">
          <div class="card  hoverable left col">
			<div class="card-image waves-effect waves-block waves-light">
			  <img class="activator" src="images/passport.png">
			</div>
			<div class="card-content">
			  <span class="card-title activator grey-text text-darken-3 morev">Mehedi Islam<i class="material-icons right">more_vert</i></span>
			</div>
			<div class="card-reveal cardfont">
			  <span class="card-title grey-text text-darken-4 morev">Mehedi Islam<i class="material-icons right">close</i></span>
			  <p>
				Gender: Male<br>
				Age: 23<br>
				Status: Single<br>
				Religion: Muslim<br>
				Location: Dhaka, Bangladesh<br><br><br>
				<b>Contact</b><br>
				Cell: +88 01615 108437<br>
				Email: mehedi_islam@ymail.com
			  </p>
			</div>
		  </div>
        </div>
		
		<div class="col s12 m6 objective ">
          <h3 class="left col"><i>Hi, thanks for visiting!</i></h3>
        <h6 class="left col  light customa">
			I am a passionate developer and interaction designer from Bangladesh, 
			Specializing in user interface (UI), web design and developing
			windows application in Java.<br>You can <a href="#hire" id="download-button">Hire Me !</a>
		</h6> 
		
		<!--   Icon Section   -->
		<div class="iconcontainer left col">
			<a href="https://www.upwork.com/o/profiles/users/_~013a7868e528d97ead/" target="_blank"><img src="images/social_icon/upwork.png"></a>
			<a href="https://github.com/MehediIslam" target="_blank"><img src="images/social_icon/git.png"></a>
			<a href="https://github.com/MehediIslam" target="_blank"><img src="images/social_icon/uva.png"></a>
			<a href="https://web.facebook.com/rup.returnz" target="_blank"><img src="images/social_icon/facebook.png"></a>
			<a href="https://plus.google.com/u/0/115504816911651507523" target="_blank"><img src="images/social_icon/google-plus.png"></a>
		</div>
		
		<!--   Skills Section   -->
		<div class="containSkill left col">
			 <section id="skills">
				<progress value="90" max="100"></progress><span>HTML5 | CSS3 | JavaScript</span>
				<progress value="85" max="100"></progress><span>PHP | ASP.Net | WordPress</span>
				<progress value="80" max="100"></progress><span>Java SE | JavaFx | Java Swing</span>
			</section>
		</div>
        </div>
      </div>
	  </div>
	    
	<!-- Desktop Section -->  
	  <div class="section web-sec">
      <div class="row">
        <div class="col s12 m6 objective ">
          <h3 class="left col"><i>Hi, thanks for visiting!</i></h3>
        <h6 class="left col  light customa">
			I am a passionate developer and interaction designer from Bangladesh, 
			Specializing in user interface (UI), web design and developing
			windows application in Java.<br>You can <a href="#hire" id="download-button">Hire Me !</a>
		</h6>  
		
		<!--   Icon Section   -->
		<div class="iconcontainer left col">
			<a href="https://www.upwork.com/o/profiles/users/_~013a7868e528d97ead/" target="_blank" class="tooltipped" data-position="top" data-delay="50" data-tooltip="UpWork"><img src="images/social_icon/upwork.png"></a>
			<a href="https://github.com/MehediIslam" target="_blank" class="tooltipped" data-position="top" data-delay="50" data-tooltip="Git Hub"><img src="images/social_icon/git.png"></a>
			<a href="https://github.com/MehediIslam" target="_blank" class="tooltipped" data-position="top" data-delay="50" data-tooltip="UVa Online Jugde"><img src="images/social_icon/uva.png"></a>
			<a href="https://web.facebook.com/rup.returnz" target="_blank" class="tooltipped" data-position="top" data-delay="50" data-tooltip="Facebook"><img src="images/social_icon/facebook.png"></a>
			<a href="https://plus.google.com/u/0/115504816911651507523" target="_blank" class="tooltipped" data-position="top" data-delay="50" data-tooltip="Google Pluse"><img src="images/social_icon/google-plus.png"></a>
		</div>
		
		<!--   Skills Section   -->
		<div class="containSkill left col">
			 <section id="skills">
				<progress value="90" max="100"></progress><span>HTML5 | CSS3 | JavaScript</span>
				<progress value="85" max="100"></progress><span>PHP | ASP.Net | WordPress</span>
				<progress value="80" max="100"></progress><span>Java SE | JavaFx | Java Swing</span>
			</section>
		</div>
        </div>

		<!--   Profile Pic and Bio   -->
        <div class="col s12 m6 ">
          <div class="card  hoverable right col">
			<div class="card-image waves-effect waves-block waves-light">
			  <img class="activator" src="images/passport.png">
			</div>
			<div class="card-content">
			  <span class="card-title activator grey-text text-darken-3 morev">Mehedi Islam<i class="material-icons right">more_vert</i></span>
			</div>
			<div class="card-reveal cardfont">
			  <span class="card-title grey-text text-darken-4 morev">Mehedi Islam<i class="material-icons right">close</i></span>
			  <p>
				Gender: Male<br>
				Age: 23<br>
				Status: Single<br>
				Religion: Muslim<br>
				Location: Dhaka, Bangladesh<br><br>
				<b>Contact</b><br>
				Cell: +88 01615 108437<br>
				Email: mehedi_islam@ymail.com
			  </p>
			</div>
		</div>
        </div>
      </div>
    </div>
    
	
	<!-- Portfolio -->
   <br><div class="section" >
		<div class="container">
		<div class="row">
		<ul id="filters" class="clearfix">
			<li><span class="filter active" data-filter=".app, .card, .icon, .logo, .web">All</span></li>
			<li><span class="filter" data-filter=".web">Web</span></li>
			<li><span class="filter" data-filter=".app">App</span></li>
			<li><span class="filter" data-filter=".logo">Graphics</span></li>
		</ul>

		<div id="portfoliolist">
			
			<div class="portfolio web" data-cat="web">
				<div class="portfolio-wrapper">						
					<a href="http://mehedi.3rwebtech.com/AHLTD/"  target="_blank"><img src="images/portfolios/web/carousel/asiaholding.jpg" alt=""/></a>
					<div class="label">
						<div class="label-text">
							<a class="text-title">Asia Holding LTD</a>
							<span class="text-category">Web design | Professional</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>																																																																																																											
			
			<div class="portfolio web" data-cat="web">
				<div class="portfolio-wrapper">						
				 <a href="http://www.elementaryflow.com/" target="_blank"><img src="images/portfolios/web/carousel/elementaryflow.jpg" alt="" /></a>
					<div class="label">
						<div class="label-text">
							<a class="text-title">Elementary Flow</a>
							<span class="text-category">Web design | Professional</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>
			
			<div class="portfolio app" data-cat="App">
				<div class="portfolio-wrapper">						
				 <a id="school" href="javascript:;"><img src="images/portfolios/app/schoolmanagment/carousel.jpg" alt="" /></a>
					<div class="label">
						<div class="label-text">
							<a class="text-title">School Management</a>
							<span class="text-category">App | Academic Project</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>
			
			<div class="portfolio logo" data-cat="logo">
				<div class="portfolio-wrapper">				
				<a id="asiaholding" href="javascript:;"><img src="images/portfolios/graphics/carousel/asiaholding.png" alt="" /></a>
					<div class="label">
						<div class="label-text">
							<a class="text-title">Asia Holding LTD</a>
							<span class="text-category">Logo</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>		

			<div class="portfolio web" data-cat="web">
				<div class="portfolio-wrapper">						
				<a id="ecom" href="javascript:;"><img src="images/portfolios/web/carousel/ecom.png" alt="" /></a>
					<div class="label">
						<div class="label-text">
							<a class="text-title">eCommerce</a>
							<span class="text-category">Web App | Academic Project</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>		

			<div class="portfolio app" data-cat="app">
				<div class="portfolio-wrapper">			
					<a id="intelligenceshop" href="javascript:;"><img src="images/portfolios/app/intelligenceshop/carousel.jpg" alt="" /></a>
					<div class="label">
						<div class="label-text">
							<a class="text-title">Intelligence Shop</a>
							<span class="text-category">App | Academic Project</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>		
			
			<div class="portfolio web" data-cat="web">
				<div class="portfolio-wrapper">						
				 <a id="ecommerce" href="javascript:;"><img src="images/portfolios/web/carousel/ecomerce.png" alt="" /></a>
					<div class="label">
						<div class="label-text">
							<a class="text-title">Integrated eCommerce</a>
							<span class="text-category">Web App | Thesis Project</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>																		
						
			<div class="portfolio logo" data-cat="logo">
				<div class="portfolio-wrapper">						
				<a id="comptech" href="javascript:;"><img src="images/portfolios/graphics/carousel/comptech.png" alt="" /></a>
					<div class="label">
						<div class="label-text">
							<a class="text-title">Comp Tech</a>
							<span class="text-category">Logo</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>																																							
			
			<div class="portfolio app" data-cat="app">
				<div class="portfolio-wrapper">			
					<img src="images/portfolios/app/2.jpg" alt="" />
					<div class="label">
						<div class="label-text">
							<a class="text-title">Graph Plotting</a>
							<span class="text-category">APP</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>														
			
			<div class="portfolio logo" data-cat="logo">
				<div class="portfolio-wrapper">			
					<a id="powerzone" href="javascript:;"><img src="images/portfolios/graphics/carousel/powerzone.png" alt="" /></a>
					<div class="label">
						<div class="label-text">
							<a class="text-title">Power Zone</a>
							<span class="text-category">Logo</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>																		

			<div class="portfolio web" data-cat="web">
				<div class="portfolio-wrapper">						
				<a id="team" href="javascript:;"><img src="images/portfolios/web/carousel/team.png" alt="" /></a>
					<div class="label">
						<div class="label-text">
							<a class="text-title">Team Arrangment</a>
							<span class="text-category">Web App | Academic Project</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>
			
			<div class="portfolio logo" data-cat="logo">
				<div class="portfolio-wrapper">			
					<a id="silversand" href="javascript:;"><img src="images/portfolios/graphics/carousel/silversand.png" alt="" /></a>
					<div class="label">
						<div class="label-text">
							<a class="text-title">Silver Sand</a>
							<span class="text-category">Bill Board</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>	
																						
		</div>
	 </div>
    </div>
</div>
	
  </div>
</div>
<br><br>

<!-- Contact From -->
<div class="container" id="hire">
	<div class="row">
	  <div class="col l4 s12">
		<h5 class="darkgrey-text">Greetings</h5>
		<p class="darkgrey-text text-lighten-4">
			Thank you for getting in touch!<br>
			I appreciate you contacting me for your need
			& will try to respond you as soon as possible.
			<br><br>
			Have a great day ahead! 
		</p>
	  </div>
	
	<form action="email.php" method="post" target = "#contacts" name="myForm" id="myForm" onsubmit="return validate(this);">
	  <div class="col l6 offset-l2 s12">
		<h5 class="darkgrey-text">Contact</h5>
		<div class="input-field col s6">
		  <input id="first_name" name="first_name" type="text" class="validate" required="" aria-required="true">
		  <label for="first_name">Your Name</label>
		</div>
		<div class="input-field col s6">
		  <input id="email" name="email" type="email" class="validate" required="" aria-required="true">
		  <label for="email">Your Email</label>
		</div>
		<div class="input-field col s12">
		  <textarea id="textarea1" name="textarea1" class="materialize-textarea"></textarea>
		  <label for="textarea1">Message</label>
		</div>
		<div class="input-field col s6">
		  <button class="btn waves-effect waves-light red" type="submit" name="submit">Submit
		  <i class="material-icons right">send</i> </button>
		</div>
	  </div>
	</form>
	<IFRAME style="display:none" name="#contacts" id="#contacts" ></IFRAME>
	</div>
</div>


<!--  Footer  -->
<footer class="page-footer">
  <div class="footer-copyright">
	<div class="container">
	© 2016 Copyright
	<a class="grey-text text-lighten-4 right" href="#ban">POWERED BY <span style="color:#fff">MEHEDI ISLAM</span></a>
	</div>
  </div>
</footer>
            

<!-- Scripts -->
<script type="text/javascript">
	$(document).ready(function() {
		

		$("#intelligenceshop").click(function() {
			$.fancybox.open([
				{
					href : 'images/portfolios/app/intelligenceshop/pos1.png',
					title : 'Product Sell UI'
				}, {
					href : 'images/portfolios/app/intelligenceshop/pos2.png',
					title : 'Product Discount UI'
				}, {
					href : 'images/portfolios/app/intelligenceshop/pos3.png',
					title : 'Product Purchase UI'
				}, {
					href : 'images/portfolios/app/intelligenceshop/pos4.png',
					title : 'Product Purchase List UI'
				}, {
					href : 'images/portfolios/app/intelligenceshop/pos5.png',
					title : 'Product Service UI'
				}
			], {
				helpers : {
					thumbs : {
						width: 75,
						height: 50
					}
				}
			});
		});
		
		$("#ecommerce").click(function() {
			$.fancybox.open([
				{
					href : 'images/portfolios/web/ecomerce/1.png',
					title : 'Unsigned-in Index Page'
				}, {
					href : 'images/portfolios/web/ecomerce/2.1.png',
					title : 'Registration Page'
				}, {
					href : 'images/portfolios/web/ecomerce/2.2.png',
					title : 'Login Page'
				}, {
					href : 'images/portfolios/web/ecomerce/3.png',
					title : 'Index: Logged as admin'
				}, {
					href : 'images/portfolios/web/ecomerce/4.png',
					title : 'Product List'
				}, {
					href : 'images/portfolios/web/ecomerce/5.png',
					title : 'Order List'
				}, {
					href : 'images/portfolios/web/ecomerce/6.png',
					title : 'Reports'
				}, {
					href : 'images/portfolios/web/ecomerce/7.png',
					title : 'Add Product'
				}
			], {
				helpers : {
					thumbs : {
						width: 75,
						height: 50
					}
				}
			});
		});
		
		$("#school").click(function() {
			$.fancybox.open([
				{
					href : 'images/portfolios/app/schoolmanagment/1.jpg',
					title : 'User Login'
				}, {
					href : 'images/portfolios/app/schoolmanagment/2.jpg',
					title : 'Head Master Dashboard'
				}, {
					href : 'images/portfolios/app/schoolmanagment/3.jpg',
					title : 'Teacher Dashboard'
				}, {
					href : 'images/portfolios/app/schoolmanagment/4.jpg',
					title : 'Accountant Dashboard'
				}, {
					href : 'images/portfolios/app/schoolmanagment/5.jpg',
					title : 'Student Fees'
				}, {
					href : 'images/portfolios/app/schoolmanagment/6.jpg',
					title : 'View all Student List'
				}, {
					href : 'images/portfolios/app/schoolmanagment/7.jpg',
					title : 'Category wise View all Student List'
				}, {
					href : 'images/portfolios/app/schoolmanagment/8.jpg',
					title : 'Student Profile'
				}, {
					href : 'images/portfolios/app/schoolmanagment/9.jpg',
					title : 'View Teacher List'
				}, {
					href : 'images/portfolios/app/schoolmanagment/10.jpg',
					title : 'Add Employee Salary'
				}, {
					href : 'images/portfolios/app/schoolmanagment/11.jpg',
					title : 'View all Accountant'
				}
			], {
				helpers : {
					thumbs : {
						width: 75,
						height: 50
					}
				}
			});
		});
		
		$("#ecom").click(function() {
			$.fancybox.open([
				{
					href : 'images/portfolios/web/ecom/1.png',
					title : 'Unsigned-in Index Page'
				}, {
					href : 'images/portfolios/web/ecom/2.png',
					title : 'Index Page at Bottom Site'
				}, {
					href : 'images/portfolios/web/ecom/3.png',
					title : 'Registration Page'
				}, {
					href : 'images/portfolios/web/ecom/4.png',
					title : 'Login page'
				}, {
					href : 'images/portfolios/web/ecom/5.png',
					title : 'Product List'
				}, {
					href : 'images/portfolios/web/ecom/6.png',
					title : 'Order List'
				}, {
					href : 'images/portfolios/web/ecom/7.png',
					title : 'View all Product for Sell'
				}, {
					href : 'images/portfolios/web/ecom/8.png',
					title : 'View Product in Details'
				}
			], {
				helpers : {
					thumbs : {
						width: 75,
						height: 50
					}
				}
			});
		});
		
		$("#comptech").click(function() {
			$.fancybox.open([
				{
					href : 'images/portfolios/graphics/ct3.png',
					title : 'Logo 1'
				}, {
					href : 'images/portfolios/graphics/ct2.png',
					title : 'Logo 2'
				}, {
					href : 'images/portfolios/graphics/ct1.png',
					title : 'Logo 3'
				}
			], {
				helpers : {
					thumbs : {
						width: 75,
						height: 50
					}
				}
			});
		});
		
		$("#team").click(function() {
			$.fancybox.open([
				{
					href : 'images/portfolios/web/team_arrangment/1.png',
					title : 'Login Page'
				}, {
					href : 'images/portfolios/web/team_arrangment/2.png',
					title : 'Admin Panel'
				}, {
					href : 'images/portfolios/web/team_arrangment/3.png',
					title : 'Add Member / Client'
				}, {
					href : 'images/portfolios/web/team_arrangment/4.png',
					title : 'Profile Update'
				}, {
					href : 'images/portfolios/web/team_arrangment/5.png',
					title : 'Member Profile'
				}
			], {
				helpers : {
					thumbs : {
						width: 75,
						height: 50
					}
				}
			});
		});
		
		$("#asiaholding").click(function() {
			$.fancybox.open([
				{
					href : 'images/portfolios/graphics/asia.png',
					title : 'Logo 1'
				}
			], {
				helpers : {
					thumbs : {
						width: 75,
						height: 50
					}
				}
			});
		});
		
		$("#silversand").click(function() {
			$.fancybox.open([
				{
					href : 'images/portfolios/graphics/silversand.jpg',
					title : 'Bill Board 1'
				}
			], {
				helpers : {
					thumbs : {
						width: 75,
						height: 50
					}
				}
			});
		});
		
		$("#powerzone").click(function() {
			$.fancybox.open([
				{
					href : 'images/portfolios/graphics/pz1.jpg',
					title : 'Logo 1'
				}, {
					href : 'images/portfolios/graphics/pz2.jpg',
					title : 'Logo 2'
				}, {
					href : 'images/portfolios/graphics/pz3.jpg',
					title : 'Logo 3'
				}, {
					href : 'images/portfolios/graphics/pz4.jpg',
					title : 'Logo 4'
				}
			], {
				helpers : {
					thumbs : {
						width: 75,
						height: 50
					}
				}
			});
		});


	});
</script>

<script>
	function validate(form) {
				
	  var x = document.forms["myForm"]["first_name"].value;
	  var y = document.forms["myForm"]["email"].value;
				  
		if (x == "") {
			alert("Name must be filled out");
			return false;
		}
		
		else if (y == "") {
			alert("Email must be filled out");
			return false;
		}
		
		else if(y != "") {
			var atpos = y.indexOf("@");
			var dotpos = y.lastIndexOf(".");
			if (atpos<1 || dotpos<atpos+2 || dotpos+2>=y.length)
			{
				alert("Invalid email address");
				return false;
			}
			
			else {
				return confirm('Email has been sent !!');
			}		
		}		
	}
</script>

</body>
</html>
