<?php if ( ! is_single() ) {
	$thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'default-page-header' );
	?>
	<!-- page.php -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="entry-header" <?php
		if ( has_post_thumbnail() ) { ?>
			style="background: url(<?php echo make_path_relative( $thumbnail_src[0] ); ?>) center center;background-size: cover;height: 240px;"
		<?php } ?>>
			<h1><?php the_title(); ?></h1>
		</div>
		<div class="entry-content">
			<?php the_content(); ?>
		</div>
	</article>
<?php } else { ?>
	<!-- singe.php -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="entry-header">
			<h1><?php the_title(); ?></h1>
		</div>
		<div class="entry-content">
			<?php the_content(); ?>
		</div>
	</article>
<?php } ?>