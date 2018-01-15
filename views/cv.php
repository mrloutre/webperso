<!DOCtYPE html>
<html>

<head>
	<?php include("head.php"); ?>
</head>

<body>
	<header>
		<?php include("menu.php"); ?>
	</header>
	<div class="container">
		<div id="splitlayout" class="splitlayout">
			<?php include("intro.php"); ?>
			<!-- /intro -->
			<div class="page page-right">
		
				<div class="btn-group-vertical" role="group" aria-label="Basic example">
				
					<button type="button" class="btn btn-primary bg-dark text-white border-dark" data-toggle="modal" data-target="#experience">
						Expériences
					</button>
					<button type="button" class="btn btn-primary bg-dark text-white border-dark" data-toggle="modal" data-target="#formation">
						Formations
					</button>
					<button type="button" class="btn btn-primary bg-dark text-white border-dark" data-toggle="modal" data-target="#hobbie">
						Hobbies
					</button>
					
				</div>
				<!-- bouton d'appel -->
				<?php include("experience.php"); ?>
				<!-- /appel page experience -->
				<?php include("formation.php"); ?>
				<!-- /appel page expérience -->
				<?php include("hobbie.php"); ?>
				<!-- /appel page home (test) -->

			</div>
			<!-- /page-right -->

			<a href="#" class="back back-left" title="intro">&larr;</a>
		</div>
		<!-- /splitlayout -->
	</div>
	
	<!-- /container -->
	<script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
	<script src="../js/jquery-3.2.1.min.js"></script>
	<script src="../js/classie.js"></script>
	<script src="../js/SplitLayout.js"></script>
	<script src="../js/typed.min.js"></script>
	<script src="../bootstrap/js/bootstrap.min.js"></script>
	<script text="text/javascript">
		var typed = new Typed("#typed", {
			// strings: ['Salut^1000\n<br/> ceci est mon site web ^1000\n<br/> si vous avez 5 min, je vais tenter de me présenter :)<br/>'],
			stringsElement: '#typed-strings',
			typeSpeed: 2,
			startDelay: 100,
			cursorChar: '',
			loop: false,
			onComplete: function prettyLog() {
				var circle = document.createElement("div");
				circle.className = "profile";
				circle.id = "image-circle";
				document.getElementById("image").appendChild(circle);
				var image = document.createElement("img");
				image.src = "../img/moi_small2.jpg";
				image.alt = "profile2";
				document.getElementById("image-circle").appendChild(image);
			},
		});
	</script>
</body>

</html>