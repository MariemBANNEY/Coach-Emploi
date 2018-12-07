<?php require_once 'template/header.php'; ?>
<?php require_once 'template/navbar.php'; ?>
<!-- Google font -->
<link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">

<!-- Bootstrap -->
<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

<!-- Font Awesome Icon -->
<link rel="stylesheet" href="css/font-awesome.min.css">

<!-- Custom stlylesheet -->
<link type="text/css" rel="stylesheet" href="css/style.css"/>
<div class="page-content" id="acceuil">

	<div class="header-page-fluid">
		<a href="index.php" style="color: #0093A8">
					<h1 style="margin-top: 30px;margin-left: 20px;color: #0093A8"><b>Coach-Emploi</b></h1>
		</a>
	</div>
	<!-- Contact -->
		<div id="contact" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<!-- contact form -->
					<div class="col-md-6">
						<div class="contact-form">
							<h4>Envoyer un Message</h4>
							<form>
								<input class="input" type="text" name="name" placeholder="Nom">
								<input class="input" type="email" name="email" placeholder="Email">
								<input class="input" type="text" name="subject" placeholder="Objet">
								<textarea class="input" name="message" placeholder="Enter votre Message"></textarea>
								<button class="main-button icon-button pull-right">Envoyer le Message</button>
							</form>
						</div>
					</div>
					<!-- /contact form -->

					<!-- contact information -->
					<div class="col-md-5 col-md-offset-1">
						<h4>Information Contact</h4>
						<ul class="contact-details">
							<li><i class="fa fa-envelope"></i>Coach-Emploi@gmail.com</li>
							<li><i class="fa fa-phone"></i></li>
							<li><i class="fa fa-map-marker"></i></li>
						</ul>

						

					</div>
					<!-- contact information -->

				</div>
				<!-- /row -->

			</div>
			<!-- /container -->

		</div>
		<!-- /Contact -->
	</div>
	<!-- jQuery Plugins -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
		<script type="text/javascript" src="js/google-map.js"></script>
		<script type="text/javascript" src="js/main.js"></script>