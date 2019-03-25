<?php get_header(); ?>
		<!-- Banner -->
    <section id="banner">
				<i class="icon fa-diamond"></i>
				<h2>Etiam adipiscing</h2>
				<p>Magna feugiat lorem dolor egestas</p>
				<ul class="actions">
					<li><a href="#" class="button big special">Learn More</a></li>
				</ul>
			</section>
		<section class="wrapper style1">
			<div class="inner">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<article class="feature left">
					<span class="image"><img src="<?php get_the_post_thumbnail_url(); ?>" alt="" /></span>
					<div class="content">
						<h2><?php the_title(); ?></h2>
						Rédigé par <?php the_author(); ?>
						<p><?php the_content(); ?></p>
						<ul class="actions">
							<li>
								<a href="#" class="button alt">Lire la suite</a>
							</li>
						</ul>
					</div>
				</article>
				<?php endwhile; else : ?>
				<article>
					<p>Sorry, no post was found!</p>
				</article>
				<?php endif; ?>
			</div>
		</section>
 		<!-- Two -->
     <section id="two" class="wrapper special">
				<div class="inner">
					<header class="major narrow">
						<h2>Aliquam Blandit Mauris</h2>
						<p>Ipsum dolor tempus commodo turpis adipiscing Tempor placerat sed amet accumsan</p>
					</header>
					<div class="image-grid">
						<a href="#" class="image"><img src="<?php bloginfo('template_url'); ?>/images/pic03.jpg" alt="" /></a>
						<a href="#" class="image"><img src="<?php bloginfo('template_url'); ?>/images/pic04.jpg" alt="" /></a>
						<a href="#" class="image"><img src="<?php bloginfo('template_url'); ?>/images/pic05.jpg" alt="" /></a>
						<a href="#" class="image"><img src="<?php bloginfo('template_url'); ?>/images/pic06.jpg" alt="" /></a>
						<a href="#" class="image"><img src="<?php bloginfo('template_url'); ?>/images/pic07.jpg" alt="" /></a>
						<a href="#" class="image"><img src="<?php bloginfo('template_url'); ?>/images/pic08.jpg" alt="" /></a>
						<a href="#" class="image"><img src="<?php bloginfo('template_url'); ?>/images/pic09.jpg" alt="" /></a>
						<a href="#" class="image"><img src="<?php bloginfo('template_url'); ?>/images/pic10.jpg" alt="" /></a>
					</div>
					<ul class="actions">
						<li><a href="#" class="button big alt">Tempus Aliquam</a></li>
					</ul>
				</div>
			</section>

		<!-- Three -->
			<section id="three" class="wrapper style3 special">
				<div class="inner">
					<header class="major narrow	">
						<h2>Magna sed consequat tempus</h2>
						<p>Ipsum dolor tempus commodo turpis adipiscing Tempor placerat sed amet accumsan</p>
					</header>
					<ul class="actions">
						<li><a href="#" class="button big alt">Magna feugiat</a></li>
					</ul>
				</div>
			</section>

		<!-- Four -->
			<section id="four" class="wrapper style2 special">
				<div class="inner">
					<header class="major narrow">
						<h2>Get in touch</h2>
						<p>Ipsum dolor tempus commodo adipiscing</p>
					</header>
					<form action="#" method="POST">
						<div class="container 75%">
							<div class="row uniform 50%">
								<div class="6u 12u$(xsmall)">
									<input name="name" placeholder="Name" type="text" />
								</div>
								<div class="6u$ 12u$(xsmall)">
									<input name="email" placeholder="Email" type="email" />
								</div>
								<div class="12u$">
									<textarea name="message" placeholder="Message" rows="4"></textarea>
								</div>
							</div>
						</div>
						<ul class="actions">
							<li><input type="submit" class="special" value="Submit" /></li>
							<li><input type="reset" class="alt" value="Reset" /></li>
						</ul>
					</form>
				</div>
		</section>
  <?php //get_sidebar(); ?>
<?php get_footer(); ?>