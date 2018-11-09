<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Larissa Huang - Portfolio </title>

	<?php include('header-scripts-and-styles.php'); ?>
	
	<link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css">
	<link href="css/about.css" rel="stylesheet">
</head>
<body class="page--about">


	<?php include('header.php'); ?>


	<!-- Video Banner -->
	<section class="hero">
		<div class="about-banner" data-aos="flip-down">
			<video width="auto" muted autoplay loop>
				<source src="img/bannervideo-final.mp4" type="video/mp4" class="banner">
				Your browser does not support the video tag.
			</video>						
		</div>
	</section>

	<div class="container">

		<div class="row padding" data-aos="fade-right">
			<h1 class="text-center">Services</h1>
		</div>
	</div>

	<div class="container">
		<div class="row text-center">
			<div class="col-xs-12 col-sm-6 col-md-4">
				<img src="img/coding.png"/>
				<h2 class="services">Web Development</h4>
				<p>With a skill set ranging from information architecture and content management to custom-coding sites that are attractive, mobile-compatible, and representative of your brand, I am experienced with the web development process.</p>
			</div>

			<div class="col-xs-12 col-sm-6 col-md-4">
				<img src="img/design.png"/>
				<h2 class="services">Web Design</h4>
				<p>My illustration, graphic design, and web design knowledge can help you establish a web presence that engages your target demographic.</p>
			</div>

			<div class="col-sm-12 col-md-4 col-sm-12">
				<img src="img/responsive-design.png"/>
				<h2 class="services">UI & UX Design</h4>
				<p>My approach to User Interface and User Experience design is research-based, marrying UX principles to a fascination with the novel and bleeding edge.</p>
			</div>
		</div>

		<hr class="my-4">
			
		<div class="row padding">
			<div class="col-12 me-jumping" data-aos="fade-up">
				<img src="img/large-img.jpg" width="300px" height="auto"/>
			</div>
		</div>
	</div><?php // .container ?>

	<div class="container">
		<div class="row" data-aos="fade-down">
			<div class="col-lg-6 col-md-6 col-sm-12 skills-badges">
				<i class="devicon-html5-plain-wordmark colored"></i>
				<i class="devicon-css3-plain-wordmark colored"></i>
				<i class="devicon-javascript-plain colored js"></i>
				<i class="devicon-bootstrap-plain-wordmark colored bs"></i>
				<img class="skill-badge ps" src="img/photoshop.svg">
				<img class="skill-badge ai" src="img/illustrator.svg">
				<img class="skill-badge xd" src="img/experience.svg">
				<img class="skill-badge ae" src="img/after-effects.svg">
				<img class="skill-badge pr" src="img/premiere.svg">
	    	<img class="skill-badge sk" src="img/sketch.svg">
			</div>
		</div>
	</div><?php // .container ?>

	<div class="container">
		<div class="row padding">
			<div class="col-12">
				<h3 class="about">About Me - Larissa Huang</h3>
				<p>I'm a design-oriented web developer who enjoys the process of striking upon creative ways to solve challenges. Having attained a BA in Creative Writing from the University of Wales, I am an effective communicator and deep listener as well.
				<br />
				Above all, I am driven by a passion for ideas. I see my pursuit of web development as a technologically-enhanced way of bringing ideas to life. I will be graduating from BCIT's New Media Web Design and Development Program in October 2018, and will be looking for a company to apply my innovative, cross-disciplinary skill set. I believe success is a trifecta of consistently applied Hard Work, Creativity, and Willingness to Learn.</p>
			</div>
		</div>
	</div>

	<?php include('connect-with-me.php'); ?>
	<?php include('footer.php'); ?>

</body>
</html>