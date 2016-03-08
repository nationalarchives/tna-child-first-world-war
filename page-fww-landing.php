<?php
/*
Template Name: FWW landing
*/
get_header(); ?>
<?php get_template_part( 'breadcrumb' ); ?>

	<main id="main" class="content-area" role="main">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php
					while ( have_posts() ) : the_post();
						get_template_part( 'content' );
					endwhile;
					?>
				</div>
			</div>
		</div>
	</main>

<?php get_footer(); ?>