<?php get_header(); ?>

<section class="contain-to-grid" role="content">

	<div class="hero-wrapper internal-page">

	<!-- Row for main content area -->
		<div class="small-12 columns" role="main">

			<div class="row">

	  			<div class="small-7 columns">
		
					<div class="hero-page">
						<span id="hero-headline"class="hero-headline left">Lorem ipsum, lorem ipsum.</span>
						<span id="hero-subhead" class="hero-subhead left">Subtitle lorem ipsum text goes here.</span>
					</div>

				</div>

				<div class="small-5 columns">
		
					<div class="hero-page">
						<span><img class="services-image" src="http://placehold.it/500x150&text=Placeholder+Image"></span>
					</div>

				</div>

			</div>

		</div>

	</div>

</section>

<!-- Start the main container -->
<section class="container row page-content" role="document">

	<div class="small-12 large-9 push-3 columns" role="main">

		<div class="page-content">

			<h1><?php wp_title("",true); ?></h1>			

			<div class="flex-video">
			  <iframe width="420" height="315" src="http://www.youtube.com/embed/0_EW8aNgKlA" frameborder="0" allowfullscreen></iframe>
			</div>

			<hr>

			<div class="row">

	  			<div class="small-12 large-5 columns">
  					<p><img class="5col-img" src="http://placehold.it/740x350&amp;text=Placeholder+Image"></p>
  					<p><span class="content headline">Subtitle Lorem Ipsum Text Goes Here</span></p>
  					<p>Cras suscipit, urna eu convallis dapibus, nisl magna lacinia nisi, quis dictum mi enim ut dui. Cras sodales est eu nulla tempus elementum. Ut dapibus sagittis lobortis. Maecenas diam velit, tristique eget ullamcorper nec, sollicitudin et lacus.</p> 
 					<p>Duis elementum faucibus gravida. Ut nibh libero, blandit vitae placerat quis, tempor sed arcu. Mauris suscipit sagittis hendrerit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In volutpat leo quis erat ultricies in rutrum tortor aliquet. Aliquam vitae diam eget lacus fermentum consectetur. Maecenas pretium cursus volutpat. Pellentesque id sapien odio, vel eleifend augue. Vivamus eu lectus non risus aliquam congue. Suspendisse potenti.</p> 
 					<p>Duis vulputate erat lacus, eget varius massa.</p>
	  			</div>

	  			<div class="small-12 large-7 columns">
  					<dl>
						<dt class="service1">Service 1</dt>
						<dd>Cras suscipit, urna eu convallis dapibus, nisl magna lacinia nisi, quis dictum mi enim ut dui. Cras sodales est eu nulla tempus elementum. Ut dapibus sagittis lobortis. Maecenas diam velit, tristique eget ullamcorper nec, et lacus. </dd>
						<dt class="service2">Service 1</dt>
						<dd>Cras suscipit, urna eu convallis dapibus, nisl magna lacinia nisi, quis dictum mi enim ut dui. Cras sodales est eu nulla tempus elementum. Ut dapibus sagittis lobortis. Maecenas diam velit, tristique eget ullamcorper nec, et lacus. </dd>
						<dt class="service3">Service 1</dt>
						<dd>Cras suscipit, urna eu convallis dapibus, nisl magna lacinia nisi, quis dictum mi enim ut dui. Cras sodales est eu nulla tempus elementum. Ut dapibus sagittis lobortis. Maecenas diam velit, tristique eget ullamcorper nec, et lacus. </dd>
						<dt class="service4">Service 1</dt>
						<dd>Cras suscipit, urna eu convallis dapibus, nisl magna lacinia nisi, quis dictum mi enim ut dui. Cras sodales est eu nulla tempus elementum. Ut dapibus sagittis lobortis. Maecenas diam velit, tristique eget ullamcorper nec, et lacus. </dd>
						<dt class="service5">Service 1</dt>
						<dd>Cras suscipit, urna eu convallis dapibus, nisl magna lacinia nisi, quis dictum mi enim ut dui. Cras sodales est eu nulla tempus elementum. Ut dapibus sagittis lobortis. Maecenas diam velit, tristique eget ullamcorper nec, et lacus. </dd>
					</dl> 
	  			</div>

			</div>

		</div>

	</div>

		<div class="small-12 large-3 pull-9 columns" role="main">

		<?php wp_nav_menu(array('theme_location' => 'subservices', 'container' => false, 'menu_class' => 'inline-list left sidebar-menu')); ?>

	</div>

</section>

<section class="contain-to-grid" role="content">

	<div class="horizontal-cta-wrapper">

	<!-- Row for main content area -->
		<div class="small-12 columns" role="main">

			<div class="row">

	  			<div class="small-12 columns">
		
					<div class="cta">
						<span class="headline">Let us become the strongest link in your supply chain.</span>
						<div class="button radius orange right left-spacing"><a href="#"><span>Learn&nbsp;more&nbsp;&#9658;</span></a></div>
					</div>

				</div>

			</div>

		</div>

	</div>

</section>

<?php get_footer(); ?>

