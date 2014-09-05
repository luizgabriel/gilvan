<?php $_view->extend('layouts.base') ?>

<?php $_view->regionStart('content') ?>

	<!-- Intro -->
	<section id="top" class="one dark cover">
		<div class="container">

			<header>
				<h2 class="alt">Olá! Eu sou <strong>Luiz Gabriel</strong>, Desenvolver de Aplicações Web, Designer Gráfico, Desenvolvedor de Jogos<br />
				e amante da Tecnologia</h2>
				<p>Esta página foi completamente desenvolvida pelo <a href="http://github.com/luizgabriel/gilvan" target="_blank">Framework Gilvan</a>.</p>
			</header>
			
			<footer>
				<a href="#portfolio" class="button scrolly">Mais Sobre</a>
			</footer>

		</div>
	</section>
	
<!-- Portfolio -->
	<section id="portfolio" class="two">
		<div class="container">
	
			<header>
				<h2>Portfolio</h2>
			</header>
			
			<p>Vitae natoque dictum etiam semper magnis enim feugiat convallis convallis
			egestas rhoncus ridiculus in quis risus amet curabitur tempor orci penatibus.
			Tellus erat mauris ipsum fermentum etiam vivamus eget. Nunc nibh morbi quis 
			fusce hendrerit lacus ridiculus.</p>
		
			<div class="row">
				<div class="4u">
					<article class="item">
						<a href="#" class="image fit"><img src="<?php echo asset('images/pic02.jpg') ?>" alt="" /></a>
						<header>
							<h3>Ipsum Feugiat</h3>
						</header>
					</article>
					<article class="item">
						<a href="#" class="image fit"><img src="<?php echo asset('images/pic03.jpg') ?>" alt="" /></a>
						<header>
							<h3>Rhoncus Semper</h3>
						</header>
					</article>
				</div>
				<div class="4u">
					<article class="item">
						<a href="#" class="image fit"><img src="<?php echo asset('images/pic04.jpg') ?>" alt="" /></a>
						<header>
							<h3>Magna Nullam</h3>
						</header>
					</article>
					<article class="item">
						<a href="#" class="image fit"><img src="<?php echo asset('images/pic05.jpg') ?>" alt="" /></a>
						<header>
							<h3>Natoque Vitae</h3>
						</header>
					</article>
				</div>
				<div class="4u">
					<article class="item">
						<a href="#" class="image fit"><img src="<?php echo asset('images/pic06.jpg') ?>" alt="" /></a>
						<header>
							<h3>Dolor Penatibus</h3>
						</header>
					</article>
					<article class="item">
						<a href="#" class="image fit"><img src="<?php echo asset('images/pic07.jpg') ?>" alt="" /></a>
						<header>
							<h3>Orci Convallis</h3>
						</header>
					</article>
				</div>
			</div>

		</div>
	</section>

<!-- About Me -->
	<section id="about" class="three">
		<div class="container">

			<header>
				<h2>About Me</h2>
			</header>

			<a href="#" class="image featured"><img src="<?php echo asset('images/pic08.jpg') ?>" alt="" /></a>
			
			<p>Tincidunt eu elit diam magnis pretium accumsan etiam id urna. Ridiculus 
			ultricies curae quis et rhoncus velit. Lobortis elementum aliquet nec vitae 
			laoreet eget cubilia quam non etiam odio tincidunt montes. Elementum sem 
			parturient nulla quam placerat viverra mauris non cum elit tempus ullamcorper 
			dolor. Libero rutrum ut lacinia donec curae mus vel quisque sociis nec 
			ornare iaculis.</p>

		</div>
	</section>

<!-- Contact -->
	<section id="contact" class="four">
		<div class="container">

			<header>
				<h2>Contact</h2>
			</header>

			<p>Elementum sem parturient nulla quam placerat viverra 
			mauris non cum elit tempus ullamcorper dolor. Libero rutrum ut lacinia 
			donec curae mus. Eleifend id porttitor ac ultricies lobortis sem nunc 
			orci ridiculus faucibus a consectetur. Porttitor curae mauris urna mi dolor.</p>
			
			<form method="post" action="#">
				<div class="row half">
					<div class="6u"><input type="text" name="name" placeholder="Name" /></div>
					<div class="6u"><input type="text" name="email" placeholder="Email" /></div>
				</div>
				<div class="row half">
					<div class="12u">
						<textarea name="message" placeholder="Message"></textarea>
					</div>
				</div>
				<div class="row">
					<div class="12u">
						<input type="submit" value="Send Message" />
					</div>
				</div>
			</form>

		</div>
	</section>

<?php $_view->regionEnd() ?>