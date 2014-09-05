<!DOCTYPE HTML>
<html lang="pt">
	<head>
		<title>Luiz Gabriel | Portfólio</title>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		
		<?php $_view->incl('includes.styles') ?>

	</head>
	<body>

		<!-- Header -->
			<div id="header" class="skel-layers-fixed">

				<div class="top">

					<!-- Logo -->
					<div id="logo">
						<span class="image avatar48"><img src="<?php echo asset('images/profile_pic.jpg') ?>" alt="" /></span>
						<h1 id="title">Luiz Gabriel</h1>
						<p>Técnico em Informática</p>
					</div>

					<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="#top" id="top-link" class="skel-layers-ignoreHref"><span class="icon fa-home">Intro</span></a></li>
							<li><a href="#portfolio" id="portfolio-link" class="skel-layers-ignoreHref"><span class="icon fa-th">Portfolio</span></a></li>
							<li><a href="#about" id="about-link" class="skel-layers-ignoreHref"><span class="icon fa-user">About Me</span></a></li>
							<li><a href="#contact" id="contact-link" class="skel-layers-ignoreHref"><span class="icon fa-envelope">Contact</span></a></li>
						</ul>
					</nav>
						
				</div>
				
				<div class="bottom">

					<!-- Social Icons -->
					<ul class="icons">
						<li><a href="http://facebook.com/luiz.gabriel.cristo" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="http://facebook.com/luizgabriel" class="icon fa-github"><span class="label">Github</span></a></li>
						<li><a href="mailto:luiz.gabriel.cristo@hotmail.com" class="icon fa-envelope"><span class="label">Email</span></a></li>
					</ul>
				
				</div>
			
			</div>

		<!-- Main -->
		<div id="main">

			<?php $_view->region('content') ?>
		
		</div>

		<!-- Footer -->
		<div id="footer">
			
			<!-- Copyright -->
			<ul class="copyright">
				<li>&copy; Luiz Gabriel - Portfólio. Todos os Direitos Reservados.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
			</ul>
			
		</div>

		<?php $_view->incl('includes.scripts') ?>
	</body>
</html>