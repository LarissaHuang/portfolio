<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Larissa Huang - Portfolio </title>

	<?php include('header-scripts-and-styles.php'); ?>

	<link href="css/shutter-thunder.css" rel="stylesheet">
</head>
<body>

	<?php include('header.php'); ?>

	<!-- Shutter Thunder Banner -->
    <section class="hero" data-aos="slide-right">
        <div class="hero--inner" >
            <img src="img/mockup-banner.jpg" class="banner"/>	
		</div>
	</section>
	
	<div class="container">
		<div class="row padding">
			<div class="col-12">
				<h1 class="text-center">SHUTTER THUNDER</h1>
				<p class="tools">VS Code, Wordpress, PHPMyAdmin, MySQL, Cloudflare</p>
			</div>
			<a target="_blank" href="http://www.shutter-thunder.com" class="btn btn-outline-secondary"  data-aos="fade-up" >View Site</a>
		</div>
	</div>

	<div class="container">
		<div class="row padding">
			<div class="col-12">
				<h2>Custom Web Development</h2>
					
				<p><span class="subhead">Duration:</span> 5 weeks.</p>
				<p><span class="subhead">Objective:</span> To create a professional, impactful web presence for Shutter Thunder, a photography and cinematography business owned by James Clark by migrating his site from a limited theme with a boxed layout to a powerful, full-width theme.</p>
			</div>
		</div>

		<div class="row padding">
			<div class="col-12">
				<h2>Understanding client needs</h2>

					<p class="subhead">Deliverables</p>
						<p> A Wordpress site with 5 custom-developed pages featuring full-width image or videos, a modal photo gallery such as Lightbox or Fancybox, a client login portal for James' clients to view, favourite and comment on their own galleries after logging in with a password, video-hosting site content on Vimeo or Youtube.</p>
					
					<p class="subhead">Target Audience</p>
						<p>
						The target audiences of Shutter Thunder's  services are creatives looking for filmmaking help, musicians in need of a music video, companies in need of promotional brand videos, people in need of headshots, models, actors, professionals, couples getting married and people who want concept photography.
						</p>
			</div>
		</div>

		<div class="row padding">
			<div class="col-12">
				<h2>Sitemap</h2>
				<p>The initial sitemap I was given by James went through a few changes as we realized that there needed to be a homepage for visitors to get a first impression of Shutter Thunder and its services, before exploring Photography or Cinematography. </p>
			</div>
		</div>
	

		<div class="row padding">
			<div class="col-12">
				<img data-aos="fade-up" class="responsive" src="img/shutter-thunder-sitemap.jpg"/>
			</div>
		</div>

			<div class="row padding">
			<div class="col-12">
				<h2>Theme or Hand-code?</h2>

				<p>We decided to go with a Wordpress theme because as a content creator and owner who didn’t want to touch code, James would have the easiest time using the Wordpress Dashboard for updating content. </p>
			</div>
		</div>


			<div class="row padding">
			<div class="col-12">
				<h2>Theme Exploration</h2>

				<p>I decided to narrow down my options by using <a href="https://scanwp.net/">ScanWP Theme Detector</a> to detect the themes on some websites of businesses that were similar to Shutter Thunder. Some of the themes that stood out were Portafolio, Photofocus, Emporia, Full Frame, and Shapely. To narrow down these themes to the ones most suited for my client's needs, I ran them through a rigorous selection criteria.</p>
			</div>
		</div>

		<div class="row padding">
			<div class="col-12">
				<h2>Theme Selection Criteria</h2>
		
				<p class="subhead">1. Information Architecture</p>

				<p>Appropriate for the type of content I’m working with.</p>
				<p>Serves my Target Audiences and meets my Objectives.
				</p>

				<p class="subhead">2. Documentation & Support</p>

				<p>Thorough documentation with detailed instructions on customization.</p>
				<p>Updated and supported by its developer.</p>
				<p> Ideally has a developer community around it to help with potential problems.
				</p>

				<p class="subhead">3. Compatibility</p>

				<p>Compatible with the Wordpress version I’m working with.</p>
				<p>Compatible With the extensions, plugins, widgets, and functional elements I plan to use. 
				</p>
				<p>
				Compatible with Bootstrap, Foundation, or other frameworks I may wish to use.
				</p>

				<p class="subhead">4. Future-proof</p>

				<p>Responsive.</p>
				<p> Uses HTML5 tags such as header, footer, section, article and nav.</p>
				<p> Compatible with custom media queries.
				</p> 
				<p> Easy to implement and maintain by my client, the content author. </p>
				<p>Uses the most current Wordpress Core code such as <pre>“get_header()”</pre> instead of <pre>“include”</pre> and  <pre>“echo stylesheet_uri” </pre> instead of <pre>“wp_nav_menu”</pre>
				</p>

				<p class="subhead">5. Speed</p>

				<p>Lightweight, with no excess code, providing fast rendering time.
				</p>

				<p class="subhead"> 6. Cost</p>

				<p>The theme had to be free due to client request.
				</p>
			</div>
		</div>
		<div class="row padding">
			<div class="col-12">
				<h2>Theme Validation with Plugins</h2>
				<p>With the help of some plugins, I was able to learn more about potential risks associated with themes that may have passed the above criteria.</p>

				<p>
				<a href="https://en-ca.wordpress.org/plugins/theme-check/">Theme Check</a> checks a theme for potential issues and displays warnings so I was able to learn about and pre-empt some potential challenges while working with a selected theme.</p>

				<p><a href="https://en-ca.wordpress.org/plugins/wordpress-importer/">WP Importer</a> allows you to test the theme's functionality with dummy content by allowing you to  import an .xml file of cross-sectional data (dummy content) to the theme.</p>

			</div>
		</div>

		<div class="row padding">
			<div class="col-12">
				<h2>Wordpress Site Migration</h2>

				<p>I helped James migrate his site from a limited theme with a boxed layout to the selected theme, Shapely. Because I was planning on editing the theme's page templates, I created a child theme so James' site wouldn't be affected by theme updates. Most of my work was in customizing the functions.php file, custom page templates and stylesheets.</p>
				<p>I used MAMP and worked locally from the htdocs folder in order to not disrupt the live site. </p>
			</div>
		</div>

		
		<div class="row padding">
			<div class="col-12"  data-aos="fade-up">
			
				<h2>Media Management</h2>

				<video width="800" height="600" controls mute autoplay loop>
					<source src="video/cinematography-transparent.mp4" type="video/mp4" class="responsive">
					Your browser does not support the video tag.
				</video>

				<p>I hosted the video on Vimeo and in Photoshop  adjusted down the resolution of all the images down without noticeably affecting the visual appeal to keep loading times fast.</p>
			</div>
		</div>


		<div class="row padding">
			<div class="col-12" data-aos="fade-up">
				
				<h2>Plugins</h2>
				
				<video width="800" height="600" controls mute autoplay loop>
					<source src="video/photography-transparent.mp4" type="video/mp4" class="responsive">
				Your browser does not support the video tag.
				</video>

				<p>I implemented a plugin called Sunshine Photocart and activated a client login portal for James’ clients to have access to their own image gallery with a passcode. Once they are in, they can view, favourite, and share select images.

				<br> I created a custom Fancybox image gallery with thumbnail images for the photography section using WordPress Core’s gallery shortcode.

				<br> I upgraded the basic form with Gravity Forms, performed testing with my own email to ensure messages were being received, then changed it to my client’s email.</p>
			</div>
		</div>				
			

		<div class="row padding">
			<div class="col-12">
			
				<h2>Optimization</h2>

				<p>I set the Vimeo-hosted banner video control settings to mute, autoplay, and loop for optimal impact and control. To ensure the site was mobile-responsive, I used percentage based padding site-wide. Finally, before launch, I registered the site on Cloudflare, in order to serve cached static content to the visitors. The advantage of having cached content is that the site's loading time is, on average, cut in half. Another advantage of Cloudflare is that it screens malicious attacks and bots.</p>
			</div>
		</div>


		<div class="row padding">
			<a href="http://www.shutter-thunder.com" class="btn btn-outline-secondary"  data-aos="fade-up" >View Site</a>
		</div>



		<div class="work-buttons">
			<a href="hive.php" class="btn btn-outline-secondary"  data-aos="slide-right" id="previous-btn"> <i class="fas fa-arrow-left"> </i>  Previous: Hive </a>
			<a href="green-pearl.php" class="btn btn-outline-secondary"  data-aos="slide-left"  id="next-btn"> Next: Green Pearl   <i class="fas fa-arrow-right"></i></a>
		</div>

		
	</div><?php // .container ?>
	<?php include('footer.php'); ?>
</body>
</html>