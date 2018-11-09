<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Larissa Huang - Portfolio </title>

	<?php include('header-scripts-and-styles.php'); ?>
	
	<link href="css/green-pearl.css" rel="stylesheet">
	
</head>
<body class="page--green-pearl">

	<?php include('header.php'); ?>

	<!-- GP Banner -->
	<section class="hero">
		<div class="gp-inner" data-aos="slide-right">
			<img src="img/green-pearl-banner.jpg" class="banner">
		</div>
	</section>



	<div class="container" data-aos="slide-right">
		<div class="row padding">
			<div class="col-md-12">
				<h1 class="text-center">GREEN PEARL</h1>
				<p class="tools">VS Code, Wordpress, PHP, Timber, Twig, Sass, MySQL, Cloudflare</p>
			</div>
			<a target="_blank" href="http://www.greenpearlservices.ca" class="btn btn-outline-secondary" data-aos="fade-up">View Site</a>
		</div>
	</div>

		<div class="container">
		<div class="row padding">
			<div class="col-12">
				<h2>Custom Web Development</h2>
					
				<p><span class="subhead">Duration:</span> 6 weeks.</p>
				<p><span class="subhead">Objective:</span> To prepare content, discover target demographics, and create a web presence for Green Pearl, a project management consultancy owned and operated by Megan Rempel.<p>

				<p class="small">My personal goals for this project was to challenge my Wordpress development skills and create a custom theme from a starter theme selected based on an assessment of client goals. 
				</p>
			</div>
		</div>

		<div class="row padding">
			<div class="col-md-12">
				<h2>Understanding client needs</h2>
				<p class="subhead">Content Preparation</p>

				<p>Before I could begin development, I needed to understand the content I was working with. If I wasn't certain what kind of services Green Pearl provides, its audience might not know either. I created a content ideation document for Megan to fill out which included prompts such as:</p>

				<br>
				<p> "What makes you green?"</p>

				<br>
				<p>"Describe 3-8 services you offer that will help people understand what Green Pearl does."</p>

				<br> 
				<p>"Clarify Green Pearl's main offering to its target audience in one sentence."
				</p>

				<br>
				<p>"Provide Testimonials from businesses you have worked for."
				</p>
				
				<br>
				
				<p>
				Gaining a thorough understanding of what Green Pearl is, its services and its history was an important stage of my development process, because I believe content hierarchy informs development decisions.

				</br>

				<p>
				This most valuable outcome of this document was the clarification of Green Pearl's mission statement:
				</p>

				<br>
				<p class="large">"Green Pearl supports local projects that aspire to build a healthier community."</p>
				</p>

				<p class="subhead">Target Audience</p>
				<p>
				The content ideation document also allowed me to discover that Green Pearl's target audiences are small businesses with environmental initiative, individuals with a project they want to finish, local organizations, local initiatives that are focusing on systems that save time and energy.
				</p>
			</div>
		</div>

		<div class="row padding">
			<div class="col-md-12">
				<h2>Hosting</h2>

				<p>Megan had already paid for a basic Wix membership, but once I informed her of the full suite of available options from site builders like Wix, Weebly and Squarespace to content management systems like Wordpess and Drupal,  she decided to switch to WordPress.</p>

				<p>I guided her through the purchase of hosting from <a href="https://www.namecheap.com/">Namecheap</a>, as she had purchased her domain name from them and was familiar with their service. My reasoning was that this would save her time, which is valuable to her as a sole entrepreneur.</p>
			</div>
		</div>

		<div class="row padding">
			<div class="col-12">
				<h2>Theme or Hand-code?</h2>

				<p>After taking into account the scale of Megan’s content and her needs as a micro-business owner, I decided that it wouldn't be too difficult to customize of a <span class="focus">starter theme</span> to suit her needs. A starter theme is a blank theme that offers file structure with minimal design, designed to be easily built on. </p>
			</div>
		</div>

	<div class="row padding">
		<div class="col-12">
				<h2>Starter Theme Selection</h2>

				<p>I selected <a href="https://www.upstatement.com/timber/">Timber</a>  for its file structure, compatibility with Sass, active community, thorough <a href="https://github.com/timber/starter-theme"> documentation</a>, easy learning curve, and integration with Wordpress Core.
 				</p>
			</div>
		</div>

<div class="row padding">
		<div class="col-12">
		<h2>Custom Templates Management</h2>
		<p>Timber comes with <a href="https://twig.symfony.com/">Twig</a>, a concise, flexible, templating language that would allow me to separate PHP from HTML, and write templates the way I want. All that's required is wrapping any WordPress function call in double braces, for example: <pre>{{function(‘wp_title’, ‘any parameter’)}}</pre>
		</p>
</div>
</div>

<div class="row padding">
		<div class="col-12">
		<h2>Timber!</h2>
		<p> 
		Timber and Twig met my rigorous theme selection criteria (outlined on my previous project, Shutter Thunder), because they would allow me to build my own custom responsive, lightweight theme that runs Sass, supports ACF (Advanced Custom Fields), and integrates Wordpress Core code.
		</p>
</div>
</div>
		
		<div class="row padding">
			<h2>Design</h2>
					
			<div class="col-md-12" data-aos="fade-up">
				<video width="800" height="600" controls mute autoplay loop>
					<source src="video/greenpearl-home-mockup.mp4" type="video/mp4" >
					Your browser does not support the video tag.
				</video>

				<p>I incorporated logo and image assets from Megan into the site design by sampling colours from the logo and applying them to the buttons and the navigation links' active states to achieve a minimal and cohesive appearance.</p>
			</div>
		</div>
				
			
		<div class="row padding">
			<h2>Development</h2>
					
			<div class="col-md-12" data-aos="fade-up">
				<video width="800" height="600" controls mute autoplay loop>
					<source src="video/greenpearl-about-mockup.mp4" type="video/mp4" >
					Your browser does not support the video tag.
				</video>
		
				<p>Twig offered convenient Sass mixins in the  <span class="focus">helpers.scss</span> file to create variables for media query screen sizes such as “$max” for the max width that I wanted a CSS rule to apply to. The ones that I used were:</p>

				<pre>$small: 480px;</pre>
				<pre>$medium: 768px;</pre>
				<pre>$desktop: 1024px;</pre>
				<pre>$large: 1025px;</pre>

<p>I created a custom Twig file called page-home.twig and made a class for the services section of Green Pearl. </p>

<p>In <span class="focus">helpers.scss</span>, I was able to define the space that a grid item would take up on screen and assign class names to them. For the "Qualified to Help You" services section on the homepage, I made individual grid items that occupy one third of a large screen, one half of a medium screen, and the whole of a small screen.
I also set primary, secondary, and tertiary color variables for use in link active and hover states.

Within the integrated terminal of VS Code, I set up Gulp and BrowserSync to see a live-updated, responsive version of the site on my iPhone 7 as I worked with media queries. 
</p>

			</div>
		</div>
			
		<div class="row padding">
			<h2>Plugins & Optimization </h2>
					
			<div class="col-md-12" data-aos="fade-up">
				<video width="800" height="600" controls mute autoplay loop>
					<source src="video/greenpearl-contact-mockup.mp4" type="video/mp4" >
					Your browser does not support the video tag.
				</video>
		
				<p>I implemented the ACF (Advanced Custom Fields) plugin for the Testimonials section so Megan could add and edit the content on the Wordpress Dashboard, and used Gravity Forms for the contact form. Before launch, I registered the site on Cloudflare, in order to serve cached static content to the visitors.</p>
				
				<p>The advantage of having cached content is that the site's loading time is, on average, cut in half. Another advantage of Cloudflare is that it screens malicious attacks and bots.</p>
			</div>
		</div>


		<div class="row padding">
			<a target="_blank" href="http://www.greenpearlservices.ca" class="btn btn-outline-secondary" data-aos="fade-up">View Site</a>
		</div>

	
		<div class="work-buttons">
			<a href="shutter-thunder.php" class="btn btn-outline-secondary"  data-aos="slide-right" id="previous-btn"><i class="fas fa-arrow-left"> </i>  Previous: Shutter Thunder </a>
			<a href="infinite-yoga.php" class="btn btn-outline-secondary"  data-aos="slide-left" id="next-btn">  Next: Infinite Yoga <i class="fas fa-arrow-right"> </i> </a>
		</div>

	</div><?php // .container-fluid ?>
	<?php include('footer.php'); ?>
</body>
</html>