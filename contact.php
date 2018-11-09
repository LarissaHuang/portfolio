<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Larissa Huang - Portfolio </title>
	
	<?php include('header-scripts-and-styles.php'); ?>
	<link rel="stylesheet" type="text/css" href="css/contact-form.css" />
</head>

<body class="page--contact">


	<?php include('header.php'); ?>
		
	<div class="container">

		<!--- Works -->
		<div class="row">
			<div class="col-12">
				<div id="page-wrap" class="padding">

					<div id="contact-area">
						<p>Hi, it's a pleasure to meet you. Drop me a line about a project, meeting up for a coffee, or any other inquiries you may have.</p>
						<form method="post" action="contactengine.php">
					
							<label for="Name">Name:</label>
							<input type="text" name="Name" />

							<label for="City">City:</label>
							<input type="text" name="City" />
						
							<label for="Email">Email:</label>
							<input type="text" name="Email" />
						
							<label for="Message">Message:</label>
							<textarea name="Message" rows="20" cols="20"></textarea>
						
							<div class="g-recaptcha" data-sitekey="6LcFqWkUAAAAANPLw302ccVpw1ZeZ7nR9bdtugKm"></div>
								
							<input type="submit" name="submit" value="Submit" class="submit-button" />
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
		
	<p class="social">More of a social media person?</p>
	<?php include('connect-with-me.php'); ?>
	<?php include('footer.php'); ?>
</body>
</html>