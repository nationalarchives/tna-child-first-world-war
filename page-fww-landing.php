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
						<ul>
							<li><a href="#explore-our-records">Explore our records</a></li>
							<li><a href="#discover-personal-stories">Discover personal stories</a></li>
							<li><a href="#about-our-programme">About our programme</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<main id="main" class="content-area" role="main">
			<div class="container">
				<section class="register">
					<div class="row">
						<div class="col-sm-6">
							<h2>Stay up-to-date with all our centenary activity</h2>
						</div>
						<div class="col-sm-4">
							<form name="signup" id="banner-form" class="pad-medium"
							      action="http://dmtrk.co.uk/signup.ashx"
							      method="post">
								<input type="hidden" name="addressbookid" value="281378"><input type="hidden"
								                                                                name="userid"
								                                                                value="28895">
								<input type="hidden" name="ReturnURL"
								       value="http://nationalarchives.gov.uk/news/subscribe-confirmation.htm">
								<input type="email" id="Email" name="Email" required=""
								       placeholder="Enter your email address">
								<input id="newsletterSignUp" type="submit" value="Subscribe" class="button">
							</form>
						</div>
						<div class="col-sm-2">
							<span class="sprite icon-facebook pull-right"></span>
							<span class="sprite icon-twitter pull-right"></span>
						</div>
					</div>
				</section>
				<section class="featured">
					<div class="row equal-heights" id="equal-heights">
						<div class="col-sm-4">
							<div class="fww-box clearfix">
								<?php
								$url = 'https://www.eventbriteapi.com/v3/events/search/?q=first+world+war&sort_by=date&organizer.id=2226699547&token=5VVFLKAPZUXJSKQ3QTBG';
								$json = file_get_contents($url);
								$data = json_decode($json);
								date_default_timezone_set('Europe/London');
								for ($i = 0; $i < 1; ++$i) {
									$atomDate = $data->events[$i]->start->local;
									$newDate = date('l j M Y, H:i', strtotime($atomDate));
									echo '<a href="#"><img src="' . $data->events[$i]->logo->url . '" class="img-responsive"></a>';
									echo '<div class="entry-fww"><small>Event highlight</small>';
									echo '<h2><a href="' . $data->events[$i]->url . '" target="_blank">' . $data->events[$i]->name->text . '</a></h2>';
									echo '<p>' . $newDate . '<p>';
									// echo '<p>' . $data->events[$i]->description->text . '<p>';
								}
								?>
								<p><a href="#">More events</a></p>
								</div>
							</div>
						</div>
						<?php
						$args = array( 'posts_per_page' => 2, 'post_type' => 'page', 'category_name' => 'feature' );
						$fwwposts = get_posts( $args );
						foreach ( $fwwposts as $post ) : setup_postdata( $post ); ?>
							<div class="col-sm-4">
								<div class="fww-box clearfix">
									<div class="thumb-img">
										<a href="<?php the_permalink(); ?>">
											<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
										</a>
									</div>
									<div class="entry-fww">
										<small>Feature</small>
										<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
										<p><?php the_excerpt(); ?></p>
									</div>
								</div>
							</div>
						<?php endforeach;
						wp_reset_postdata();?>
					</div>
					<div class="row equal-heights" id="equal-heights">
						<?php fww_rss( 'http://blog.nationalarchives.gov.uk/blog/tag/first-world-war/feed/', '14' ) ?>
						<?php fww_news_rss( 'http://www.nationalarchives.gov.uk/category/first-world-war-portal-news/feed/', '15' ) ?>
					</div>
				</section>
				<section id="explore-our-records">
					<div class="row">
						<div class="col-md-12">
							<article>
								<div class="entry-header">
									<h2>Explore our records</h2>
								</div>
								<div class="entry-content clearfix">
									<div class="col-sm-4">
										<div class="fww-box clearfix">
											<a href="#"><img src="http://placehold.it/360x160" class="img-responsive"></a>
											<div class="entry-fww">
												<h3><a href="#">Title</a></h3>
												<p>Eu congue salutatus philosophia per. Nec ex admodum gubergren.</p>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="fww-box clearfix">
											<a href="#"><img src="http://placehold.it/360x160" class="img-responsive"></a>
											<div class="entry-fww">
												<h3><a href="#">Title</a></h3>
												<p>Eu congue salutatus philosophia per. Nec ex admodum gubergren.</p>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="fww-box clearfix">
											<a href="#"><img src="http://placehold.it/360x160" class="img-responsive"></a>
											<div class="entry-fww">
												<h3><a href="#">Title</a></h3>
												<p>Eu congue salutatus philosophia per. Nec ex admodum gubergren.</p>
											</div>
										</div>
									</div>
								</div>
							</article>
						</div>
					</div>
				</section>
				<section id="discover-personal-stories">
					<div class="row">
						<div class="col-md-12">
							<article>
								<div class="entry-header">
									<h2>Discover personal stories</h2>
								</div>
								<div class="entry-content clearfix">
									<div class="col-sm-6">
										<div class="fww-box clearfix">
											<a href="#"><img src="http://placehold.it/560x160" class="img-responsive"></a>
											<div class="entry-fww">
												<h3><a href="#">Title</a></h3>
												<p>Eu congue salutatus philosophia per. Nec ex admodum gubergren.</p>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="fww-box clearfix">
											<a href="#"><img src="http://placehold.it/560x160" class="img-responsive"></a>
											<div class="entry-fww">
												<h3><a href="#">Title</a></h3>
												<p>Eu congue salutatus philosophia per. Nec ex admodum gubergren.</p>
											</div>
										</div>
									</div>
								</div>
							</article>
						</div>
					</div>
				</section>
				<section id="about-our-programme">
					<div class="row">
						<div class="col-sm-4">
							<article>
								<div class="entry-header">
									<h2>About our programme</h2>
								</div>
								<div class="entry-content clearfix">
									<div class="fww-box clearfix">
										<a href="#"><img src="http://placehold.it/640x240" class="img-responsive"></a>
										<div class="entry-fww">
											<h3><a href="#">Title</a></h3>
											<p>Eu congue salutatus philosophia per. Nec ex admodum gubergren.</p>
										</div>
									</div>
								</div>
							</article>
						</div>
						<div class="col-sm-4">
							<article>
								<div class="entry-header">
									<h2>What's on</h2>
								</div>
								<div class="entry-content clearfix">
									<div class="fww-box clearfix">
										<div class="thumb-img">
											<img src="http://placehold.it/640x240" class="img-responsive">
										</div>
										<ul>
										<?php
										for ($i = 0; $i < 4; ++$i) {
											$atomDate = $data->events[$i]->start->local;
											$newDate = date('l j M Y, H:i', strtotime($atomDate));
											echo '<li><h3><a href="' . $data->events[$i]->url . '" target="_blank">' . $data->events[$i]->name->text . '</a></h3>';
											echo '<p>' . $newDate . '<p></li>';
										}
										?>
										</ul>
									</div>
								</div>
							</article>
						</div>
						<div class="col-sm-4">
							<article>
								<div class="entry-header">
									<h2>Bookshop</h2>
								</div>
								<div class="entry-content clearfix">
									<div class="fww-box clearfix">
										<a href="#"><img src="http://placehold.it/640x240" class="img-responsive"></a>
										<div class="entry-fww">
											<h3><a href="#">Title</a></h3>
											<p>Eu congue salutatus philosophia per. Nec ex admodum gubergren.</p>
										</div>
									</div>
								</div>
							</article>
						</div>
					</div>
				</section>
			</div>
		</main>
	</div>
<?php get_footer(); ?>