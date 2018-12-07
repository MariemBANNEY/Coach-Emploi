<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myemail = mysqli_real_escape_string($db,$_POST['email']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT * FROM utilisateur WHERE email = '$myemail' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
   //   $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
       //  session_register("myemail");
         $_SESSION['login_user'] = $myemail;
         
         header("location: index.php");
      }else {
         $error = "Your Login email or Password is invalid";
      }
   }
?>
<?php require_once 'template/header.php'; ?>
<?php require_once 'template/navbar.php'; ?>
<link rel="stylesheet" type="text/css" href="css/util.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<div class="page-content" id="acceuil">

	<div class="header-page-fluid">
		<a href="index.php" style="color: #0093A8">
					<h1 style="margin-top: 30px;margin-left: 0px;color: #0093A8"><b>Coach-Emploi</b></h1>
		</a>
	</div>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/login.jpg);">
					<span class="login100-form-title-1">
						Vous Avez Déjà Un Compte <br/>Coach-Emploi ? <br/>Connectez-Vous !
					</span>
				</div>

				<form class="login100-form validate-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
					<div class="wrap-input100 validate-input m-b-26" data-validate="email obligatoire" class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
						<span class="label-input100" >E-mail *</span>
						<input class="input100" type="text" name="email" placeholder="entrer votre email" required >
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "mot de passe obligatoire" class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
						<span class="label-input100">Mot de passe *</span>
						<input class="input100" type="password" name="password" placeholder="entrer votre mot de passe" required>
					</div>

					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								se souvenir de moi
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								mot de passe oublié?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="submit">
							Se connecter
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	</div>
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main2.js"></script>  
