<?php get_header(); ?>
<div class="page-banner" role="banner">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<img src="<?php echo make_path_relative( get_stylesheet_directory_uri() ) ?>/img/logo-page.png" alt="First World War" class="img-responsive">
			</div>
		</div>
	</div>
</div>
<?php get_template_part( 'breadcrumb' ); ?>

	<div id="primary" class="content-area">
		<div class="container">
			<div class="row">
				<main id="main" class="col-xs-12 col-md-8" role="main">
					<?php
					while ( have_posts() ) : the_post();
						get_template_part( 'content' );
					endwhile;
					?>
				</main>
				<?php
				$sidebar = get_post_meta( $post->ID, 'sidebar', true );
				if ( $sidebar == 'false' ) {
					// do nothing
				} else {
					get_sidebar( $sidebar );
				}
				?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>