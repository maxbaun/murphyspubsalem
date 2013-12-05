<?php
$title = "Salem Night Life, Sports Bar, and Restaurant | Murphy's Salem";
$keywords = "salem, trivia, sports, nightlife, karaoke, restaurant, bar, irish pub, sports bar, djs, music";
$metadescription = "Salem, MA nightlife, pub, sports bar, and restaurant. Murphy's Salem features the best in live music and DJs on the North Shore.";
$version = 1.71;
$dev = false;
?>

<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
	
	<!-- Basic Page Needs
  ================================================== -->

  	<!-- Charset -->
  	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  	
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<title>Salem Night Life, Sports Bar, and Restaurant | Murphy's Salem</title>
	
	<meta name="title" content="<?php echo $title; ?>">
	<meta name="description" content="<?php echo $metadescription; ?>">
	<meta name="keywords" content="<?php echo $keywords; ?>">
	<!-- Google will often use this as its description of your page/site. Make it good. -->
	
	<meta name="google-site-verification" content="">

	<!-- Dublin Core Metadata : http://dublincore.org/ -->
	<meta name="DC.title" content="<?php echo $title; ?>">
	<meta name="DC.subject" content="<?php echo $metadescription; ?>">
	
	<!--  Mobile Viewport Fix -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

	<!-- CSS
    ================================================== -->
    
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic|PT+Serif:400,400italic,700,700italic' rel='stylesheet' type='text/css'>

    <?php
    if( $dev )
    {
    ?>   	
		<!-- Core CSS File. The CSS code needed to make eventCalendar works -->
		<link rel="stylesheet" href="css/eventCalendar.css?v=<?php echo $version; ?>">

		<!-- Theme CSS file: it makes eventCalendar nicer -->
		<link rel="stylesheet" href="css/eventCalendar_theme_responsive.css?v=<?php echo $version; ?>">
		
		<link rel="stylesheet" href="css/bootstrap.css?v=<?php echo $version; ?>">
		<link rel="stylesheet" href="css/colorbox.css?v=<?php echo $version; ?>">
		<link rel="stylesheet" href="css/flexslider.css?v=<?php echo $version; ?>">
		<link rel="stylesheet" href="css/styles.css?v=<?php echo $version; ?>">
	
		<!-- Custom Theme -->
		<link rel="stylesheet" href="css/red.css?v=<?php echo $version; ?>" id="color">
    <?php } 
    else {
	?>
		<link rel="stylesheet" href="css/murphys.min.css?v=<?php echo $version; ?>">
	<?php } ?>

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

	<!--[if IE]>
	<script src="assets/javascripts/placeholders.min.js"></script>
	<![endif]-->
	
	<!--[if IE lte 8]>
	<script src="assets/javascripts/respond.min.js"></script>
	<![endif]-->
	
	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
</head>
<body>	

	<!-- Top -->
	<div id="top">
		<div class="container">
			<div class="row-fluid">
				
				<!-- Left Nav -->
				<ul class="span5" id="nav-left">
					<li data-slide="2"><a href="#about">About Us</a></li>
					<li data-slide="3"><a href="#events">Events</a></li>
					<li data-slide="4"><a href="#functions">Functions</a></li>
					<li data-slide="5"><a href="#menu">Menu</a></li>
				</ul>
				
				<!-- Logo -->
				<div class="span2" id="logo">
					<div data-slide="1">
						<a href="#front"><img src="img/logo-small.png"><!-- <em>&rsquo;</em> --></span></a>
					</div>
				</div>
				
				<!-- Right Nav -->
				<ul class="span5 right" id="nav-right">
					<li data-slide="6"><a href="#sports">Sports</a></li>
					<li data-slide="7"><a href="#nightlife">Nightlife</a></li>
					<li data-slide="8"><a href="#gallery">Gallery</a></li>
					<li data-slide="9"><a href="#contact">Contact</a></li>
				</ul>


			</div>
			
		</div>	
	</div>

<!-- 
	Front page	<div id="front" class="panel flexslider" data-slide="1" data-stellar-background-ratio="0.5">
		<ul class="slides">
			<li>
				<img src="img/slides/Murphy's-salem-outdoor-patio.jpg" alt="Murphy's Salem Outdoor Patio Restaurant" />
				
				<div class="slide-content center">
					<div class="container">
						<div class="span12">
							<div class="title"><span>PLACE HOLDER TEXT</span></div>
							<div class="subtitle"><span>PLACE HOLDER TEXT</span></div>
						
						</div>
					</div>
				</div>
			</li>
			<li>
				<img src="img/slides/Murphy's-salem-irish-pub-restaurant.jpg" alt="Salem Nightlife And Restaurant" />
				<div class="slide-content center">
					<div class="container">
						<div class="span12">
							<div class="title"><span>PLACE HOLDER TEXT</span></div>
							<div class="subtitle"><span>PLACE HOLDER TEXT</span></div>
						</div>
					</div>
				</div>
			</li>
		</ul>
	</div>
 -->
	
	<!-- Front page -->
	<div id="front" class="panel flexslider" data-slide="1" data-stellar-background-ratio="0.5">
		<ul class="slides">
			<li>
				<img src="img/slide-inside.jpg" alt="Salem Bars and Irish Pub" />
			</li>
			<li>
				<img src="img/slide-patio.jpg" alt="Murphy's Salem Outdoor Patio Restaurant" />
			</li>
			<li>
				<img src="img/slide-band.jpg" alt="Salem Live Music, Bands, and Nightlife" />
			</li>
			<li>
				<img src="img/slide-food.jpg" alt="Salem Restaurant and Pub" />
			</li>
			<li>
				<img src="img/slide-nightlife.jpg" alt="Salem Nightlife, Music, and DJs" />
			</li>									
		</ul>
	</div>	
	
	
	<!-- About -->
	<div id="about" class="panel paper" data-slide="2" data-stellar-background-ratio="1">
		<div class="container">
			<div class="row-fluid hidden-phone" id="about-pictures">
				<div class="span6">
					<img src="img/about-1.jpg" alt="About Us" />
				</div>
				<div class="span6">
					<img src="img/about-2.jpg" alt="Our Location" />
				</div>
			</div>
			<div class="row-fluid" id="about-text">
				<div class="span4" id="about-caption">
					<h2>About us</h2>
					<div class="caption">
						<?php include("inc/address.inc"); ?>
					</div>
					<div class="caption-border"></div>
				</div>
				<div class="span4">
					<h3>Food & Drinks</h3>
					<p>Open Monday through Friday at 3pm and 11:30am on the weekends, our kitchen serves high quality American fare complimented by twenty-five beers plus a full bar to quench your cocktail desires. Nightly dinner specials including:</p>
					<ul>
						<li>25 cent chicken finger and wing night on Mondays</li>
						<li>$2 eight ounce Burgers on Tuesdays</li>
						<br/>
					</ul>

					<h3>Nightlife</h3>
					<p>Any conversation about the Best Northshore Nightlife will certainly lead to Murphy’s. Every Thursday, Friday, and Saturday we bring in two of the area’s hottest DJ’s for multiple floors of music and fun. The fun isn't just on the weekend- Sunday nights DJs are on the first floor, come down Mondays for Karaoke, and Tuesday evening join us for Trivia night followed by a live DJ.</p>
				</div>
				<div class="span4">
					<h3>Events and Functions</h3>
					<p>Whether you’re planning a birthday, graduation, bachelorette party, reunion, rehearsal dinner, anniversary, homecoming, benefit, or just a night out with friends  WE’VE COT YOU COVERED.</p>
					<p>Available options include but are not limited to: Full facility rental; Bottle Service; 3rd floor Private VIP balcony lounge with leather couches, 2nd floor end stage couches, 2nd floor state room, and more.</p>

					<h3>Sports</h3>
					<p>Combine our recent addition of THREE HUGE PROJECTION SCREENS to our existing collection of flat panel TVs and there’s no bad seat in the house to catch your favorite Boston sports team.</p>	
				</div>
			</div>
		</div>
	</div>
	
	<!-- Directions -->
	<div id="events" class="panel section-type light" data-slide="3" data-stellar-background-ratio="0" >
		<h2 class="page-title">Events</h2>
		
		<div class="container">
			<div class="row-fluid">
				<div class="span12">
					<div id="eventCalendar" style="opacity:0;"></div>					
				</div>

			</div>
		</div>
	</div>
	<!-- Menu -->
	<div id="functions" class="panel dark-leather section-type menu-type light" data-slide="4" data-stellar-background-ratio="0.5">
		<div class="container">

				<div class="span8 right">
					<div id="privteFunctionsImage" class="hidden-phone center">
						<img src="img/salem-private-functions-events.jpg"/>
					</div>	
				</div>	

			<div class="row-fluid" id="functions-text">
				<div class="span4" id="functions-caption">
					<h2>Functions</h2>
					<div class="caption">
						<span>Murphy's SALEM</span> YOUR EVENT THE WAY YOU WANT IT
					</div>
					<div class="caption-border"></div>
				</div>
						
				<div class="span12">
					<p>Whether you’re planning a birthday, graduation, bachelorette party, reunion, rehearsal dinner, anniversary, homecoming, benefit, or just a night out with friends  WE’VE COT YOU COVERED.</p>

					<p>Available options include but are not limited to: Full facility rental; Bottle Service; 3rd floor Private VIP balcony lounge with leather couches, 2nd floor end stage couches, 2nd floor state room, and more</p>

					<p>We at Murphy’s realize that no two events are the same and will consult with you to provide different options based off your individual needs</p>
					<div style="text-align:center;">
						<button id="btnShowFunctionsContact" class="btn btn-primary">Contact</button>
					</div>				
				</div>

			
				<div class="span12">
				
					<div id="privteFunctionsFormWraper" style="display:none;">
						<form id="functions-contact-form" action="libs/mail-functions.php" method="post" class="form-horizontal">
							<div class="control-group">
								<label class="control-label" for="functionsInputName">Full Name (*):</label>
								<div class="controls">
								  <input type="text" class="span12" id="functionsInputName" placeholder="John Doe">
								</div>
							</div>
							
							<div class="control-group">
								<label class="control-label" for="functionsInputPhone">Phone (*):</label>
								<div class="controls">
								  <input type="text" class="span12" id="functionsInputPhone" placeholder="123456789">
								</div>
							</div>							
						
							<div class="control-group">
								<label class="control-label" for="functionsInputEmail">Your E-Mail (*):</label>
								<div class="controls">
								  <input type="text" class="span12" name="functionsInputEmail" id="functionsInputEmail" placeholder="john@doe.cc">
								</div>
							</div>
							
							<div class="control-group">
								<label class="control-label" for="functionsGuestCount">Estimated Guest Count (*):</label>
								<div class="controls">
								   <input type="text" class="span12" name="functionsGuestCount" id="functionsGuestCount" placeholder="Estimated Guest Count">
								</div>
							</div>	
							
							
							
							<div class="control-group">
								<label class="control-label" for="functionsEventDate">Event Date (*):</label>
								<div class="controls">
								   <input type="date" class="span12" name="functionsEventDate" id="functionsEventDate" placeholder="">
								</div>
							</div>	
							
							<div class="control-group">
								<label class="control-label" for="functionsEventTime">Start Time (*):</label>
								<div class="controls">
									<select name="eventTimeHour" id="eventTimeHour">
										<?php include("inc/hours.inc"); ?>
									</select>
									<select name="eventTimeMinute"  id="eventTimeMinute">
										<?php include("inc/minutes.inc"); ?>
									</select>	
									<label class="option" for="eventTimeAm"><input type="radio" id="eventTimeAm" name="eventTimeAmPm" value="am" checked="checked"> am</label>
									<label class="option" for="eventTimePm"><input type="radio" id="eventTimePm" name="eventTimeAmPm" value="pm"> pm</label>						
								</div>
							</div>	
							
							<div class="control-group">
								<label class="control-label" for="functionsEventType">Event Type (*):</label>
								<div class="controls">
								   <input type="text" class="span12" name="functionsEventType" id="functionsEventType" placeholder="Event Type">
								</div>
							</div>	
							
							<div class="control-group">
								<label class="control-label" for="functionsEventType">Type of Menu (*):</label>
								<div class="controls">
									<label style="color:#fff;" for="eventMenuFull"><input type="radio" id="eventMenuFull" name="eventMenu" value="full menu" checked="checked" > full menu</label>
									<label style="color:#fff;" for="eventMenuApps"><input type="radio" id="eventMenuApps" name="eventMenu" value="appetizers & bar" > appetizers & bar</label>	
									<label style="color:#fff;" for="eventMenuOther"><input type="radio" id="eventMenuOther" name="eventMenu" value="other" > other</label>														   
								</div>
							</div>																																	
						
							<div class="control-group">
								<label class="control-label" for="functionsTextMessage">Message:</label>
								<div class="controls">
								   <textarea rows="8" class="span12" id="functionsTextMessage" placeholder="Tell us a little more about your event..."></textarea>
								</div>
							</div>
						
							<div class="control-group">
								<div class="controls">
								  <div id="functionsResponse" style="display: none;"></div>
								  <button type="submit" class="btn btn-primary right">Submit</button>
								</div>
							</div>
							

							<div class="loading"></div>
						</form>
					</div>			
				</div>
			</div>			
		</div>
		
	</div>

	
	<!-- Wine list -->
	<div id="menu" class="panel paper section-type menu-type dark" data-slide="5" data-stellar-background-ratio="0">
		
		<!-- Paralax elements (you can remove if you want, they only show up on 1200px+ screens) -->
<!-- 
		<div id="grapes" data-stellar-background-ratio="2" data-stellar-vertical-offset="-1310"></div>
		<div id="grape" data-stellar-background-ratio="2.5" data-stellar-vertical-offset="-1350"></div>
		<div id="wine-glass" data-stellar-background-ratio="1.5" data-stellar-vertical-offset="-2000"></div>
 -->
		
		
		<h2 class="page-title">Menu</h2>
		
		<div class="container">
			<div class="row-fluid">
				<?php include("inc/menu.inc"); ?>				
			</div>
		</div>
		
	</div>
	
	<div id="sports" class="panel section-type light" data-slide="6" data-stellar-background-ratio="0">
		<h2 class="page-title">Sports</h2>
			<div class="container">
				
				<div class="row-fluid">
					<div class="span4">
						<div class="center">
							<img src="img/374-basketball@2x.png"/>
							<p>Celebrate Irish pride with the Celtics at the best Irish Pub North of Boston!</p>
						</div>
					</div>
					<div class="span4">
						<div class="center">
							<img src="img/371-baseball-diamond@2x.png"/>
							<p>No better place to watch the Red Sox fight their way to the World Series then at Murphy's Salem.</p>
						</div>
					</div>		
					<div class="span4">
						<div class="center">
							<img src="img/373-football@2x.png"/>
							<p>One of the best North Shore sports bars to watch the Patriots dominate the NFL.</p>
						</div>
					</div>						
				</div>
				<div class="row-fluid">
					<div class="span4">
						<div class="center">
							<img src="img/hockeyIcon.png"/>
							<p>Another Bruin's Stanley Cup is right around the corner and we are broadcasting every minute of their season!</p>
						</div>
					</div>
					<div class="span4">
						<div class="center">
							<img src="img/70-tv@2x.png"/>
							<p>All of our games are broadcasted on 3 huge projectors and 9 LCD screens!</p>
						</div>
					</div>		
					<div class="span4">
						<div class="center">
							<!-- new sports image//text -->
						</div>
					</div>						
				</div>				
					
			</div>		
	</div>
	
	<div id="nightlife" class="panel dark-leather section-type light" data-slide="7" data-stellar-background-ratio="1.5">
		<div class="container">
			<div class="row-fluid hidden-phone" id="nightlife-pictures">
				<div class="span6">
					<img src="img/nightlife-1.jpg" alt="Nightlife 1" />
				</div>
				<div class="span6">
					<img src="img/nightlife-2.jpg" alt="Nightlife 2" />
				</div>
			</div>		
			<div class="row-fluid" id="nightlife-text">
				<div class="span4" id="nightlife-caption">
					<h2>Nightlife</h2>
					<div class="caption">
						<span>Murphy's SALEM</span> THE NORTH SHORE'S NIGHTLIFE CENTRAL
					</div>
					<div class="caption-border"></div>
				</div>
				<div class="span4">
					<h3>DJs</h3>
					<p>Two floors of the hottest local DJs Thursday, Friday, and Saturday nights along with downstairs entertainment throughout the week.</p>
					<h3>Live Music</h3>
					<p>Saturday afternoons are filled with some of the areas best bands weekly from 4 to 7</p>
				</div>
				<div class="span4">
					<h3>Karaoke</h3>
					<p>Come down and sing your heart out Monday night every week.</p>
					<h3>Trivia</h3>
					<p>Tuesdays nights at 7:30 join Geeks Who Drink Trivia and test your knowledge. This is no ordinary trivia game!</p>	
				</div>
			</div>
			
		</div>
	</div>	
	
	<!-- Gallery -->
	<div id="gallery" class="panel concrete section-type light" data-slide="8" data-stellar-background-ratio="1.5">
		<h2 class="page-title">Gallery</h2>
		<div class="container" id="facebookAlbums">
			<ul class="thumbnails">
				<li class="span4 template" style="display:none;">
					<figure>
						<div class="thumb-bg" style="height:227px;width:350px;overflow:hidden;">
						<a href="" class="thumbnail" target="_blank"> 
<!-- 							<img src="" /> -->
							<figcaption><div>You can put a little description in here</div></figcaption>
						</a>
						</div>
					</figure>
				</li>
			</ul>
		</div>	
	</div>
	
	<!-- Contact -->
	<div id="contact" class="panel paper section-type dark" data-slide="9" data-stellar-background-ratio="1.5">
		
		<div id="contact-map"></div>
		
		<div class="container">
			<div class="row-fluid">
				<div class="span8">
					<h3>Send us a message</h3>

					<form id="contact-form" action="libs/mail.php" method="post" class="form-horizontal">
					
						<div class="control-group">
							<label class="control-label" for="inputName">Full Name (*):</label>
							<div class="controls">
							  <input type="text" class="span12" id="inputName" placeholder="John Doe">
							</div>
						</div>
						
						<div class="control-group">
							<label class="control-label" for="inputEmail">Your E-Mail (*):</label>
							<div class="controls">
							  <input type="text" class="span12" name="email" id="inputEmail" placeholder="john@doe.cc">
							</div>
						</div>
						
						<div class="control-group">
							<label class="control-label" for="textMessage">Message (*):</label>
							<div class="controls">
							   <textarea rows="8" class="span12" id="textMessage" placeholder="I would like to know if..."></textarea>
							</div>
						</div>
						
						<div class="control-group">
							<div class="controls">
							  <div id="response" style="display: none;"></div>
							  <button type="submit" class="btn btn-primary right">Submit</button>
							</div>
						</div>

					</form>
					
					
				</div>
				<div class="span4">
					<h3>Contact info</h3>
					<?php include("inc/address.inc"); ?>					
					<ul class="social">
						<li><a href="https://www.facebook.com/pages/Murphy's-Restaurant-Pub/637938886216768">Join us on Facebook!</a></li>
						<li><a href="https://twitter.com/MurphysSalem">Follow us on Twitter!</a></li>
					</ul>
					
				</div>
			</div>
			
		</div>
	</div>
	
	<!-- Closing -->
<!-- 
	<div id="closing" class="panel concrete section-type">
		<div class="container">
			
			<div id="circles">
				&bull; &bull; &bull;
			</div>
			
			<blockquote class="span6">
				<p>&#8220; Lorem ipsum dolor sit amet, consectetur adipiscing eliters. Aenean auctor aliquam libero. Fusce nec risus in massa blandit sagittis. Quisque in nisl in nulla eleifend porttitor. &#8221;
				</p>
			</blockquote>
			
			<div class="quote-border"></div>
			
			<div id="mailing-list">
				<h3>Text Message List Sign-Up</h3>
				<p>
					Stay up-to-date with our upcoming events and promotions
				</p>
				
				<!~~ text message form goes here ~~>
				<form method="post" action="http://simplicix.us2.list-manage.com/subscribe/post?u=a8ece0e328d32451b73b8fec7&amp;id=a1fecce11b" class="form-inline" target="_blank">
				  <input class="text" id="email" type="text" name="EMAIL" placeholder="Phone Number" />
				  <button class="btn btn-primary" type="submit">Subscribe!</button>
				</form>

				<div id="response-newsletter" style="display: none;"></div>
			</div>
			
			
			
		</div>
	
	</div>
 -->
	
	<div id="footer">
		<div class="container">
			<a href="#front" class="to-top">Back to Top</a>
			<div class="copy">Copyright &copy; 2013 <a href="http://murphyspubsalem.com/">Murphy's Salem</a>. All Rights Reserved.</div>
			<!-- <div class="powered">Website Powered by <a href="http://www.d3applications.com/" rel="external">D3 Applications</a></div> -->
		</div>
	</div>

	
	<!-- Javascript
	================================================== -->
	
	<!-- jQuery via CDN with local Fallback- remove 'http:' if you're using ssl somewhere on your site 
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script>window.jQuery || document.write("<script src='assets/javascripts/jquery-1.9.1.min.js'>\x3C/script>")</script>
	-->

	<!-- jQuery -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

	<!-- Google Maps API -->
	<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
	
	<!-- ALl the scripts -->
	
	
    
    <?php
    if( $dev )
    {
    ?>  
    	<script src="js/all.js?v=<?php echo $version; ?>"></script>	
    	<script src="js/global.js"></script>
    	<script src="js/jquery.eventCalendar.js" type="text/javascript"></script>

    <?php } 
    else {
	?>
		<script src="js/murphys.min.js?v=<?php echo $version; ?>"></script>
	<?php } ?>
	
	<script>
		$(document).ready(function() {
			$("#eventCalendar").eventCalendar({
				eventsjson: 'libs/facebook-events.php',
				jsonDateFormat: 'human'  // 'YYYY-MM-DD HH:MM:SS'
			});
		});
	</script>	
	
	<?php include_once("inc/analyticstracking.php"); ?>	
</body>
</html>