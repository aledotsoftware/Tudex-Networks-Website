<!DOCTYPE HTML>
<?php 
	require('languages/languages.php'); 

	$lang = null;
	if ( isset($_GET['lang']) ){
		$lang = $_GET['lang'];
	}
?>
<?php echo __('1', $lang) ?>
<html>
	<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110063718-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-110063718-1');
</script>



		<title><?php echo __('2', $lang) ?></title>
<link href="images/logo.png" rel="shortcut icon">
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/main-part2.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="landing">
		<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-53HPW7P"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

		<div id="page-wrapper">
			<!-- Header -->
				<header id="header">
					<h1 id="logo" style="margin-top: 8px;">
						<a href="index.php"><img src="images/TudexNetworks.png"></a></h1>
					<nav id="nav">
						<ul>
							<li>
								<a href="https://www.tudexnetworks.com/blog/"><?php echo __('3', $lang) ?></a>
							</li>
							<li>
								<a href="#"><?php echo __('4', $lang) ?></a>
								<ul>
									<li><a href="https://WWW.tudexgames.com/"><?php echo __('5', $lang) ?></a></li>
									<li><a href="https://github.com/Aleavellaneda1/TudexGames/"><?php echo __('6', $lang) ?></a></li>
									<li><a href="https://www.facebook.com/TudexGames/"><?php echo __('7', $lang) ?></a></li>
									<li><a href="https://twitter.com/TudexGames"><?php echo __('8', $lang) ?></a></li>
								</ul>
							</li>
							<li>
								<a href="#"><?php echo __('9', $lang) ?></a>
								<ul>
									<li><a href="https://www.Revistaterere.com"><?php echo __('9', $lang) ?></a></li>
									<li><a href="https://www.facebook.com/TudexGames/"><?php echo __('7', $lang) ?></a></li>
									<li><a href="https://twitter.com/TudexGames"><?php echo __('8', $lang) ?></a></li>
									<li><a href="https://www.microsoft.com/es-es/store/p/revistatererecom/9nt0tnzl1b8k"><?php echo __('10', $lang) ?></a></li>
								</ul>
							</li>	
						</ul>
					</nav>
				</header>
			<!-- Banner -->
				<section id="banner">
					<div class="content">
						<header>
							<h2><?php echo __('2', $lang) ?></h2>
						</header>
						<span class="image"><img src="images/pic02.png" alt="" /></span>
					</div>
					<a href="#one" class="goto-next scrolly"></a>
				</section>
			<!-- One -->
				<section id="one" class="spotlight style1 bottom">
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Organization",
  "name": "Tudex Games",
  "url": "https://www.tudexgames.com",
  "logo": "https://tudexnetworks.com/static/tg/mipmap-xxxhdpi/ic_launcher.png",
  "sameAs": [
    "https://www.facebook.com/tudexgames",
    "https://www.twitter.com/tudexgames",
    "https://www.github.com/aleavellaneda1/tudexgames",
    "https://www.linkedin.com/company/tudexnetworks/"
  ]
}
</script>
					<span class="image fit main"><img src="images/pic02.jpg" alt="" /></span>
					<div class="content">
						<div class="container">
							<div class="row">
								<div class="4u 12u$(medium)">
									<header>
										<img src="images/tudexgames.png">
										<h2><?php echo __('4', $lang) ?></h2>
										<p><?php echo __('11', $lang) ?></p>
									</header>
								</div>
								<div class="4u 12u$(medium)">
									<p><?php echo __('12', $lang) ?></p>
								</div>
								<div class="4u$ 12u$(medium)">
									<p><?php echo __('13', $lang) ?> <a href="https://github.com//TudexNetworks"><?php echo __('14', $lang) ?></a></p>						
								</div>
								<ul class="actions">
							<li><a href="https://www.tudexgames.com/" class="button"><?php echo __('15', $lang) ?></a></li>
						</ul>
							</div>
						</div>
					</div>
					<a href="#two" class="goto-next scrolly">Next</a>
				</section>



<section id="two" class="spotlight style2 right">
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Organization",
  "name": "revistaterere.com",
  "url": "https://www.revistaterere.com",
  "logo": "https://tudexnetworks.com/static/rt/mipmap-xxxhdpi/ic_launcher.png",
  "sameAs": [
    "https://www.facebook.com/revistaterere",
    "https://www.twitter.com/revistaterere",
    "https://plus.google.com/+Revistaterere",
    "https://www.linkedin.com/company/tudexnetworks/"
  ]
}
</script>
					<span class="image fit main"><img src="images/pic03.png" alt="" /></span>
					<div class="content">
						<header>
							<img src="images/revistatererelogo.png">
							<h2><?php echo __('9', $lang) ?></h2>
							<p><?php echo __('16', $lang) ?></p>
						</header>
						<p><?php echo __('17', $lang) ?></p>
						<ul class="actions">
							<li><a href="https://www.revistaterere.com" class="button"><?php echo __('18', $lang) ?></a></li>
						</ul>
					</div>
					<a href="#five" class="goto-next scrolly">Next</a>
				</section>
		

			<!-- Five -->
				<section id="five" class="wrapper style2 special fade">
					<div class="container">
						<header>
							<h2><?php echo __('19', $lang) ?></h2>
							<p><?php echo __('20', $lang) ?></p>
						</header>
						<form method="post" action="send.php" class="container 50%">
							<div class="row uniform 50%">
								<div class="8u 12u$(xsmall)"><input type="email" name="email" id="email" placeholder="Ingresa tu e-mail" /></div>
								<div class="4u$ 12u$(xsmall)"><input type="submit" value="Enviar" class="fit special" /></div>
							</div>
						</form>
					</div>
				</section>

			<!-- Footer -->
				<footer id="footer">
					
					<ul class="copyright">
						<li>&copy; <?php echo __('21', $lang) ?></li><li> Design: <a href="http://html5up.net">HTML5 UP</a></li>
						
							
						</li>
					</ul>
					<ul class="copyright">
						<li><?php echo __('22', $lang) ?>

					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>