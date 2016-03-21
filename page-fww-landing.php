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
	<div role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					Menu bar
				</div>
			</div>
		</div>
	</div>
	<main id="main" class="content-area" role="main">
		<div class="container">
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