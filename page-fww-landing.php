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
								<img src="http://placehold.it/440x160" class="img-responsive">
								<div class="entry-fww">
									<p>Event</p>
									<h2><a href="#">Hands on History: Theatre in the First World War</a></h2>
									<p>Friday 11 March, 09:45-16:30</p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="fww-box clearfix">
								<img src="http://placehold.it/440x160" class="img-responsive">
								<div class="entry-fww">
									<p>Feature</p>
									<h2><a href="#">Unit war diaries</a></h2>
									<p>We've published more digitised unit war diaries on Discovery.
										Search now by regiment, battalion, brigade or division number:</p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="fww-box clearfix">
								<img src="http://placehold.it/440x160" class="img-responsive">
								<div class="entry-fww">
									<p>Blog</p>
									<h2><a href="#">Building a virtual First World War village</a></h2>
									<p>Within the archives there are many stories of events on the Home Front during the First World War.</p>
								</div>
							</div>
						</div>
						</div>
					<div class="row">
						<div class="col-md-4">
							<div class="fww-box clearfix">
								<img src="http://placehold.it/440x160" class="img-responsive">
								<div class="entry-fww">
									<p>Feature</p>
									<h2><a href="#">Interactive global First World War map</a></h2>
									<p>Explore the global impact of the First World War through our new online map, which highlights key events and figures in the conflict from our records.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="fww-box clearfix">
								<img src="http://placehold.it/440x160" class="img-responsive">
								<div class="entry-fww">
									<p>News</p>
									<h2><a href="#">Works by artist Sarah Kogan to be shown at The National Archives</a></h2>
									<p>We have today announced an exhibition of contemporary art, set to be welcomed to The National Archives next month. Changing the Landscape, an ambitious...</p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="fww-box clearfix">
								<img src="http://placehold.it/440x160" class="img-responsive">
								<div class="entry-fww">
									<p>News</p>
									<h2><a href="#">First World War related baby names revealed</a></h2>
									<p>There were 1,634 babies given First World War related names during the war (1914-1919) in England and Wales, new data analysis reveals. The battles...</p>
								</div>
							</div>
						</div>
					</div>
				</section>
				<div class="row">
					<div class="col-md-12">
						<article>
							<div class="entry-header">
								<h2>Explore our records</h2>
							</div>
							<div class="entry-content clearfix">
								<div class="col-md-4">
									<div class="fww-box clearfix">
										<a href="#"><img src="http://placehold.it/360x160" class="img-responsive"></a>
										<div class="entry-fww">
											<h3><a href="#">Title</a></h3>
											<p>Eu congue salutatus philosophia per. Nec ex admodum gubergren.</p>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="fww-box clearfix">
										<a href="#"><img src="http://placehold.it/360x160" class="img-responsive"></a>
										<div class="entry-fww">
											<h3><a href="#">Title</a></h3>
											<p>Eu congue salutatus philosophia per. Nec ex admodum gubergren.</p>
										</div>
									</div>
								</div>
								<div class="col-md-4">
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
				<div class="row">
					<div class="col-md-12">
						<article>
							<div class="entry-header">
								<h2>Discover personal stories</h2>
							</div>
							<div class="entry-content clearfix">
								<div class="col-md-6">
									<div class="fww-box clearfix">
										<a href="#"><img src="http://placehold.it/560x160" class="img-responsive"></a>
										<div class="entry-fww">
											<h3><a href="#">Title</a></h3>
											<p>Eu congue salutatus philosophia per. Nec ex admodum gubergren.</p>
										</div>
									</div>
								</div>
								<div class="col-md-6">
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
				<div class="row">
					<div class="col-md-4">
						<article>
							<div class="entry-header">
								<h2>About our programme</h2>
							</div>
							<div class="entry-content clearfix">
									<div class="fww-box clearfix">
										<a href="#"><img src="http://placehold.it/560x160" class="img-responsive"></a>
										<div class="entry-fww">
											<h3><a href="#">Title</a></h3>
											<p>Eu congue salutatus philosophia per. Nec ex admodum gubergren.</p>
										</div>
									</div>
							</div>
						</article>
					</div>
					<div class="col-md-4">
						<article>
							<div class="entry-header">
								<h2>What's on</h2>
							</div>
							<div class="entry-content clearfix">
								<div class="fww-box clearfix">
									<a href="#"><img src="http://placehold.it/560x160" class="img-responsive"></a>
									<div class="entry-fww">
										<h3><a href="#">Title</a></h3>
										<p>Eu congue salutatus philosophia per. Nec ex admodum gubergren.</p>
									</div>
								</div>
							</div>
						</article>
					</div>
					<div class="col-md-4">
						<article>
							<div class="entry-header">
								<h2>Bookshop</h2>
							</div>
							<div class="entry-content clearfix">
								<div class="fww-box clearfix">
									<a href="#"><img src="http://placehold.it/560x160" class="img-responsive"></a>
									<div class="entry-fww">
										<h3><a href="#">Title</a></h3>
										<p>Eu congue salutatus philosophia per. Nec ex admodum gubergren.</p>
									</div>
								</div>
							</div>
						</article>
					</div>
				</div>
			</div>
		</main>
	</div>
<?php get_footer(); ?>