<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Larissa Huang - Portfolio </title>

	<?php include('header-scripts-and-styles.php'); ?>

	<link href="css/infinite-yoga.css" rel="stylesheet">



</head>

<body>


	<?php include('header.php'); ?>


	<div class="contain">
		<div class="row row-2">
			<div class="col-xs-12 col-sm-6 wrap-logo">


				<img class="yoga--logo" src="../img/infinite-yoga-logo.jpg" />


			</div>

			<div class="col-xs-12 col-sm-6 view">


			</div>
		</div>

		<hr class="line">
		<div class="row row-2">


			<div class="col-sm-3 wrap">
				<div class="keygroup">
					<p class="key guusto">Adobe XD
						<p class="key guusto">Adobe Illustrator</p>

				</div>

			</div>

			<div class="col-sm-9">

				<h3 style="margin-top:0px" class="title">Objective</h3>

				<p>
					Infinite Yoga helps people get better at yoga by giving them a way to observe their own practice. It's a mobile motion tracking app that uses a wireless motion capture system to track small, unobtrusive sensors that the yogi wears on their body, in order to deliver custom pose alignment reports. Each sensor has an accelerometer, gyroscope sensor and magnetometer which detect movement on 3 axes.</p>


				<p>Infinite Yoga was my capstone project for my UI and UX course. My challenge was to bring to life an idea that was feasible based on existing technology, but not yet mainstream.</p>



				<video controls mute autoplay loop>
					<source src="video/iPhone-X-Prototype.mp4" type="video/mp4">
				</video>

				<h3 class="title">Sketches</h3>
				<p>I did some sketching to explore user onboarding and map out the main sections of my app: Tutorial, Goals, Review, and Go Infinite.</p>

				<p>Through research and exploration, I discovered the main Goals of the app.</p>
				
				<ul>
					<li>Flow - transition integrity between poses. </li>
					<li>Strength - bodyweight support.</li> 
					<li>Precision - accuracy in poses.</li>
					<li>Custom - a custom blend of the three above.</li>
				</ul>

				<img src="img/sketches.jpg" class="sketch responsive" />


				<h3 class="title">Feedback</h3>
				<p>After the first iteration of my design, I received some critique from my classmates which informed my design iteration.

					<ul>
						<li>On the Goals screen, the iconography wasn't self-evident or illustrative.</li>

						<li>On the Review screen, performance metrics weren't being demonstrated clearly enough.</li>
						<li>On the Custom Screen, the custom selector didn't offer enough cues for user interaction.</li>
						<li>There was no user profile or a weight section to calculate how much body weight the user is supporting.</li>
					</ul>


					<h3 class="title">Branding</h3>

					<p>Inspired by the illustrations on the app Headspace, I decided to try my hand at creating a likeable character to humanize the onboarding process and give the app a welcoming, jubilant identity.</p>

					<img src="img/identity-design.jpg" class="responsive" />

					<h3 class="title">User Flow</h3>

					<p>With Adobe XD's Prototype feature, I worked through the onboarding flow, choosing to offer only one key piece of information on each screen so that a user wouldn't be overwhelmed.</p>

					<img id="myImg" src="img/prototype-screens.png" class="iteration responsive"  style="width:100%;max-width:848px"/>

					
					<div id="myModal" class="modal">
					<span class="close">&times;</span>
					<img class="modal-content" id="img01">
					<div id="caption"></div>
					</div>

					<script>

					var modal = document.getElementById('myModal');

		
					var img = document.getElementById('myImg');
					var modalImg = document.getElementById("img01");
					var captionText = document.getElementById("caption");
					img.onclick = function(){
					modal.style.display = "block";
					modalImg.src = this.src;
					captionText.innerHTML = this.alt;
					}

				
					var span = document.getElementsByClassName("close")[0];

					
					span.onclick = function() { 
					modal.style.display = "none";
					}
					</script>

					<h3 class="title">Prototypes</h3>

					<img class="prototype-img responsive" src="img/final-large-prototype-display-screens.jpg" />
					<br><br>

					<p>“At its heart, a yoga practice is an intention to observe your actions and reactions.”</p>



					<p class="pullright">- Amy Pearce-Hayden, Yoga Teacher</p>
			</div>



		</div>

	</div>


	<?php include('connect-with-me.php'); ?>
	<?php include('footer.php'); ?>
</body>

</html>