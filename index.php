<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/index.css">
	<link rel="icon" href="images/logoSmall.PNG">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
	<div class="container-fluid">

		<div class="row">
			<ul class="nav">
				<li class="nav-item">
					<a class="nav-link" href="index.php">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="about.html">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="store.html">Store</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="discover.html">Discover</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="history.html">History</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="culture.html">Culture</a>
				</li>
			</ul>

		</div>

		<div class="row">

			<img src="images/welcome.jpg" alt="Welcome to Springfield" id="welcome">

		</div>

		<div class="row">
			<div class="col-md-2" id="leftColumn"
			style="padding-left: 0.5em; padding-top: 0.5em; padding-right: 0.5em; padding-bottom: 0.5em">
			<div class="card">
				<img class="card-img-top" src="images/presHomer.png" alt="Card image">
				<div class="card-body">
					<h4 class="card-title"><img src="images/simpsonText.png" class="w-100" alt="simpsonsText"></h4>
					<p class="card-text"><em>I am mayor</em></p>
					<form method="POST" action="https://formspree.io/xeqloppq">
						<div class="form-group">
							<label for="name">Full Name:</label><br>
							<input type="text" name="name" placeholder="Name" id="name" style="width: 100%" required/>
						</div>
						<div class="form-group">
							<label for="email">Email:</label><br>
							<input type="email" name="email" placeholder="Email" id="email" style="width: 100%" required/>
						</div>
						<div class="form-group">
							<label for="message">Message:</label><br>
							<textarea rows="7" name="comment" id="message" placeholder="Enter your message here..." form="usrform" style="width: 100%" required></textarea>
						</div>
						<button type="submit" class="btn btn-primary" style="width: 100%">Submit</button> 
					</form>
				</div>
			</div>
		</div>

		<div class="col-md-8" id="centerColumn">

			<h3 style="text-align: center; font-size: 24px">A city rich with creative culture, where our sense of adventure extends from the outdoors onto your plate. Whether you're a nature enthusiast,  a self-proclaimed foodie or love the downtown scene, one might argue that any time is the best time to discover Springfield. You’ve seen it in the movies, but nothing beats experiencing Springfield in person. Discover the best of Springfields attractions and landmarks. We’ll take you to all the city’s iconic must-sees, such as the Krusty Land etc.</h3>

			<br><br><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d47197.42890115741!2d-85.27730192927515!3d42.32462607230985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8817f2e4be5e890d%3A0xcfcb28afea26c0f4!2sSpringfield%2C%20MI!5e0!3m2!1sen!2sus!4v1585950262298!5m2!1sen!2sus" width="100%" height="585" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

		</div>

		<div class="col-md-2" id="rightColumn">
			
			<?php
			if (isset($_SESSION['username'])){
				echo "<h4 id='welcomeText'>Welcome back " . $_SESSION['username'] . "</h4>";
				echo "<a href='logout.php' class='logout'>LOG OUT</a>";
			}
			else{
					echo "<h4 id='LogInTitle'>Log in for</h4>";
					echo "<h4>Free Healthcare!</h4>";
					echo "<form method='POST' action='validation.php'>";
					echo "<div class='form-group'>";
					echo "	<label for='name'>Full Name:</label><br>";
					echo "	<input type='text' name='user' placeholder='Enter Full Name' id='name' style='width: 100%' required/>";
					echo "</div>";
					echo "<div class='form-group'>";
					echo "	<label for='ssn'>password:</label><br>";
					echo "	<input type='password' name='password' placeholder='Enter password' id='pass' style='width: 100%' required/>";
					echo "</div>";
					echo "<div class='form-group form-check'>";
					echo "	<label class='form-check-label'>";
					echo "		<input class='form-check-input' type='checkbox'> Remember me";
					echo "	</label>";
					echo "</div>";
					echo "<button type='submit' class='btn btn-primary' id='submit' style='width: 100%'>Log in</button>";
					echo "</form>";
			}
			?>
				<a href="signUpPage.php" class="signUpButton">sign up here</a>
			
			<br>
			<a class="weatherwidget-io" href="https://forecast7.com/en/39d78n89d65/springfield/" data-label_1="SPRINGFIELD" data-label_2="WEATHER" data-font="Jura" data-icons="Climacons Animated" data-days="5" data-theme="original" >SPRINGFIELD WEATHER</a>
			<script>
				!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
			</script>
		</div>
	</div>

	<div class="row" id="comments" style="background-color: #DCE69F">
		<div class="col-md-2" id="comments">
		</div>

		<div class="col-md-8" id="comments">
			<br>
			<div id="wpac-comment"></div>
			<script type="text/javascript">
				wpac_init = window.wpac_init || [];
				wpac_init.push({widget: 'Comment', id: 24372});
				(function() {
					if ('WIDGETPACK_LOADED' in window) return;
					WIDGETPACK_LOADED = true;
					var mc = document.createElement('script');
					mc.type = 'text/javascript';
					mc.async = true;
					mc.src = 'https://embed.widgetpack.com/widget.js';
					var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(mc, s.nextSibling);
				})();
			</script>
		</div>

		<div class="col-md-2" id="comments">
		</div>

	</div>

</div>
</div>

<footer>
	<br><br>
	<div class="row" style="width: 100%;">
		<div class="col-md-3">
			<p id="copyright" style="float: left;"> &copy; Team 5 (2020) </p>
		</div>

		<div class="col-md-6">

			<ul class="row" id="socials">
				<li>
					<a href="https://www.facebook.com/KalamazooCity/">
						<img class="logo" src="https://cdn2.iconfinder.com/data/icons/black-white-social-media/32/online_social_media_facebook-128.png" alt="Facebook">
					</a>
				</li>
				<li>
					<a href="https://twitter.com/KalamazooCity?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor">
						<img class="logo" src="https://cdn2.iconfinder.com/data/icons/black-white-social-media/32/twitter_online_social_media-128.png" alt="Twitter">
					</a>
				</li>
				<li>
					<a href="https://www.instagram.com/discoverkzoo/?hl=en">
						<img class="logo" src="https://cdn2.iconfinder.com/data/icons/black-white-social-media/32/instagram_online_social_media_photo-128.png" alt="Instagram">
					</a>
				</li>
				<li>
					<a href="https://mashable.com/article/google-plus-shutdown/">
						<img class="logo" src="https://cdn2.iconfinder.com/data/icons/black-white-social-media/32/online_social_media_google_plus-128.png" alt="Google+">
					</a>
				</li>
			</ul>
		</div>

		<div class="col-md-3">

			<p id="to-the-top"><a href="#top" style="float: right;">Go to the Top</a></p>

		</div>

	</div>

</footer>

<script type="text/javascript" language="javascript" src="js/index.js"></script>  

</body>
</html>