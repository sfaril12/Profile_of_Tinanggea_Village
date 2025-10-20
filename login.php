<?php
session_start();
include 'config.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = mysqli_real_escape_string($connect, $_POST['username']);
    $password = md5($_POST['pass']);

    $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $result = mysqli_query($connect, $query);
    
    if (mysqli_num_rows($result) == 1) {
        $_SESSION['admin'] = $username;
        $_SESSION['logged_in'] = true;
        header("Location: index.php");
        exit();
    } else {
        $error = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login - Kecamatan Tinanggea</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	
	<style>
		body {
			opacity: 0;
			transition: opacity 0.5s ease-in-out;
			background: #f9f9f9;
			font-family: 'Montserrat', sans-serif;
		}
		body.fade-in {
			opacity: 1;
		}

		.back-button {
			position: fixed;
			top: 20px;
			left: 20px;
			z-index: 1000;
		}
		
		.back-btn {
			background: #FFD321;
			color: #000;
			border: 2px solid #000;
			padding: 12px 24px;
			text-decoration: none;
			font-weight: bold;
			border-radius: 5px;
			transition: all 0.3s ease;
			display: inline-flex;
			align-items: center;
			gap: 8px;
			font-size: 14px;
		}
		
		.back-btn:hover {
			background: #000;
			color: #FFD321;
			text-decoration: none;
			transform: translateY(-2px);
			box-shadow: 0 4px 8px rgba(0,0,0,0.2);
		}

		.container-login100 {
			position: relative;
		}

		.wrap-login100 {
			background: rgba(255, 255, 255, 0.95);
			border-radius: 10px;
			box-shadow: 0 0 20px rgba(0,0,0,0.1);
		}

		.login100-form-title {
			color: #303030;
			font-weight: bold;
		}

		.login100-form-btn {
			background: #FFD321;
			color: #000;
			border: none;
			font-weight: bold;
			transition: all 0.3s ease;
		}

		.login100-form-btn:hover {
			background: #000;
			color: #FFD321;
			transform: translateY(-2px);
		}

		.alert-danger {
			background: #f8d7da;
			color: #721c24;
			border: 1px solid #f5c6cb;
			border-radius: 5px;
			padding: 12px;
			margin-bottom: 20px;
		}
		
		.close {
			float: right;
			font-size: 1.5rem;
			font-weight: bold;
			line-height: 1;
			color: #000;
			text-shadow: 0 1px 0 #fff;
			opacity: .5;
			background: transparent;
			border: 0;
		}
		
		.close:hover {
			color: #000;
			text-decoration: none;
			opacity: .75;
		}
		
		@media (max-width: 768px) {
			.back-button {
				top: 10px;
				left: 10px;
			}
			
			.back-btn {
				padding: 10px 16px;
				font-size: 12px;
			}
		}
	</style>
</head>
<body>
	
	<div class="back-button">
		<a href="utama.php" class="back-btn" id="backBtn">
			<i class="fa fa-arrow-left"></i> Kembali ke Beranda
		</a>
	</div>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('img/geografis.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Login Administrator
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" method="post" action="">

					<?php if (!empty($error)): ?>
						<div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin-bottom: 20px;">
							<?php echo $error; ?>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
					<?php endif; ?>

					<div class="wrap-input100 validate-input" data-validate = "Masukkan username">
						<input class="input100" type="text" name="username" placeholder="Username" required>
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Masukkan password">
						<input class="input100" type="password" name="pass" placeholder="Password" required>
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn" type="submit">
							Login
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	
	<div id="dropDownSelect1"></div>
	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/main.js"></script>

	<script>
		document.addEventListener('DOMContentLoaded', function() {
			document.body.classList.add('fade-in');
			
			var backBtn = document.getElementById('backBtn');
			if (backBtn) {
				backBtn.addEventListener('click', function(e) {
					e.preventDefault();
					var destination = this.href;
					document.body.style.opacity = 0;
					setTimeout(function() {
						window.location.href = destination;
					}, 500);
				});
			}

			document.querySelectorAll('.close').forEach(function(button) {
				button.addEventListener('click', function() {
					this.parentElement.style.display = 'none';
				});
			});
		});
	</script>
</body>
</html>