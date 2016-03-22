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
			<div class="row">
				<div class="col-md-12">
					<section>
						<h2 class="">Stay up-to-date with all our centenary activity</h2>
						<form name="signup" id="banner-form" class="pad-medium" action="http://dmtrk.co.uk/signup.ashx" method="post">
							<input type="hidden" name="addressbookid" value="281378"><input type="hidden" name="userid" value="28895">
							<input type="hidden" name="ReturnURL" value="http://nationalarchives.gov.uk/news/subscribe-confirmation.htm">
							<input type="email" id="Email" name="Email" required="" placeholder="Enter your email address">
							<input id="newsletterSignUp" type="submit" value="Subscribe" class="button">
						</form>
                        <span class="float-right">
	                        <div class="sprite icon-facebook"></div><div class="sprite icon-twitter"></div>
                        </span>
					</section>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<?php while ( have_posts() ) : the_post(); ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<div class="entry-header">
								<h1><?php the_title(); ?></h1>
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