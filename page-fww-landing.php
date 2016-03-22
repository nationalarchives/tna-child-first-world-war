<?php
/*
Template Name: FWW landing
*/
get_header(); ?>
<div class="fww">
	<div class="banner" role="banner">
		<?php get_template_part( 'breadcrumb' ); ?>
		<div class="heading-banner text-center">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/img/fww-logo.png">
						<h1>First World War</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="fww-menu" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					Menu bar
				</div>
			</div>
		</div>
	</div>
	<main id="main" class="content-area" role="main">
			<div class="container">
				<section class="social">
					<div class="row">
						<div class="col-md-6">
							<h2>Stay up-to-date with all our centenary activity</h2>
						</div>
						<div class="col-md-4">
							<form name="signup" id="banner-form" class="pad-medium" action="http://dmtrk.co.uk/signup.ashx"
							      method="post">
								<input type="hidden" name="addressbookid" value="281378"><input type="hidden" name="userid"
								                                                                value="28895">
								<input type="hidden" name="ReturnURL"
								       value="http://nationalarchives.gov.uk/news/subscribe-confirmation.htm">
								<input type="email" id="Email" name="Email" required=""
								       placeholder="Enter your email address">
								<input id="newsletterSignUp" type="submit" value="Subscribe" class="button">
							</form>
						</div>
						<div class="col-md-2">
							<span class="sprite icon-facebook pull-right"></span>
							<span class="sprite icon-twitter pull-right"></span>
						</div>
					</div>
				</section>
				<section class="featured">
					<div class="row">
						<div class="col-md-4">
							<div class="fww-box clearfix">
								<img src="http://placehold.it/360x160" class="img-responsive">
								<div class="entry-fww">
									<p>Event</p>
									<h2>Title</h2>
									<p>Eu congue salutatus philosophia per. Nec ex admodum gubergren.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="fww-box clearfix">
								<img src="http://placehold.it/360x160" class="img-responsive">
								<div class="entry-fww">
									<p>Feature</p>
									<h2>Title</h2>
									<p>Eu congue salutatus philosophia per. Nec ex admodum gubergren.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="fww-box clearfix">
								<img src="http://placehold.it/360x160" class="img-responsive">
								<div class="entry-fww">
									<p>Blog</p>
									<h2>Title</h2>
									<p>Eu congue salutatus philosophia per. Nec ex admodum gubergren.</p>
								</div>
							</div>
						</div>
					</div>
				</section>
			<div class="row">
				<div class="col-md-12">
					<?php while ( have_posts() ) : the_post(); ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<div class="entry-header">
								<h2><?php the_title(); ?></h2>
							</div>
							<div class="entry-content">
								<?php the_content(); ?>
							</div>
						</article>
					<?php endwhile; ?>
				</div>
			</div>
		</div>
	</main>
</div>
<?php get_footer(); ?>