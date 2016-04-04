<?php
$title = "Salem Night Life, Sports Bar, and Restaurant | Murphy's Salem";
$keywords = "salem, trivia, sports, nightlife, karaoke, restaurant, bar, irish pub, sports bar, djs, music";
$metadescription = "Salem, MA nightlife, pub, sports bar, and restaurant. Murphy's Salem features the best in live music and DJs on the North Shore.";
$version = 1.81;
$dev = true;
$pref = "";
$pref = isset($_SERVER["HTTPS"] ) ? "https://" : "http://";
$host = $pref . $_SERVER["HTTP_HOST"];
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

	<!-- META INFO FOR SEO -->
	<title>Salem Night Life, Sports Bar, and Restaurant | Murphy's Salem</title>
	<meta name="title" content="<?php echo $title; ?>">
	<meta name="description" content="<?php echo $metadescription; ?>">
	<meta name="keywords" content="<?php echo $keywords; ?>">

	<!-- Dublin Core Metadata : http://dublincore.org/ -->
	<meta name="DC.title" content="<?php echo $title; ?>">
	<meta name="DC.subject" content="<?php echo $metadescription; ?>">

	<!--  Mobile Viewport Fix -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta name="host" content="<?php echo $host; ?>" id="metahost">

	<!-- CSS
    ================================================== -->

    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic|PT+Serif:400,400italic,700,700italic' rel='stylesheet' type='text/css'>

    <?php
    if( $dev )
    {
    ?>
    	<!-- DEV STYLES -->
		<!-- Core CSS File. The CSS code needed to make eventCalendar works -->
		<link rel="stylesheet" href="css/eventCalendar.css?v=<?php echo $version; ?>">

		<!-- Theme CSS file: it makes eventCalendar nicer -->
		<link rel="stylesheet" href="css/eventCalendar_theme_responsive.css?v=<?php echo $version; ?>">

		<link rel="stylesheet" href="css/bootstrap.css?v=<?php echo $version; ?>">
		<link rel="stylesheet" href="css/colorbox.css?v=<?php echo $version; ?>">
		<link rel="stylesheet" href="css/flexslider.css?v=<?php echo $version; ?>">
		<link rel="stylesheet" href="css/styles.css?v=<?php echo $version; ?>">
    <link rel="stylesheet" href="css/landing.css?v=<?php echo $version; ?>">

		<!-- Custom Theme -->
		<link rel="stylesheet" href="css/red.css?v=<?php echo $version; ?>" id="color">
    <?php }
    else {
	?>
		<!-- PRODUCTION STYLES -->
		<link rel="stylesheet" href="css/styles.min.css?v=<?php echo $version; ?>">
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
	<!-- HERO -->
	<div class="hero">
    <div class="vertical-center-wrapper">
      <div class="vertical-center">
        <div id="logo">
          <img src="/img/logo-large.png" alt="Murphys Pub Salem - Salem, MA Restaurant & Bar"/>
        </div>
        <div class="content">
          <?php include("inc/address.inc"); ?>
          <ul class="social">
            <li><a href="https://www.facebook.com/pages/Murphy's-Restaurant-Pub/637938886216768">Join us on Facebook!</a></li>
            <li><a href="https://twitter.com/MurphysSalem">Follow us on Twitter!</a></li>
          </ul>
        </div>
      </div>
    </div>
	</div>

	<!-- Javascript
	================================================== -->

	<!-- jQuery via CDN with local Fallback- remove 'http:' if you're using ssl somewhere on your site
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script>window.jQuery || document.write("<script src='assets/javascripts/jquery-1.9.1.min.js'>\x3C/script>")</script>
	-->

	<!-- jQuery -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<!-- Google Maps API -->
	<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
    <?php
    if( $dev )
    {
    ?>
    	<!-- DEV SCRIPTS -->
    	<script src="js/all.js?v=<?php echo $version; ?>"></script>
    	<script src="js/global.js"></script>
    	<script src="js/jquery.eventCalendar.js" type="text/javascript"></script>

    <?php }

    else {
	?>
		<!-- PRODUCTION SCRIPTS -->
		<script src="js/scripts.min.js?v=<?php echo $version; ?>"></script>
	<?php } ?>

	<script>
		$(document).ready(function() {
			$("#eventCalendar").eventCalendar({
				eventsjson: '<?php echo $host; ?>/libs/facebook-events.php',
				jsonDateFormat: 'human'  // 'YYYY-MM-DD HH:MM:SS'
			});
		});
	</script>

	<!-- Google Analytics -->
	<?php include_once("inc/analyticstracking.php"); ?>
</body>
</html>
