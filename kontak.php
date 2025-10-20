<?php
// Include file config untuk koneksi database
include "config.php";

// Proses form jika disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = mysqli_real_escape_string($connect, $_POST['name']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $subjek = mysqli_real_escape_string($connect, $_POST['subject']);
    $pesan = mysqli_real_escape_string($connect, $_POST['message']);

    // Query untuk insert data ke tabel pesan
    $sql = "INSERT INTO pesan (nama, email, subjek, pesan_baru) 
            VALUES ('$nama', '$email', '$subjek', '$pesan')";

    if (mysqli_query($connect, $sql)) {
        $success_msg = "Pesan berhasil dikirim! Terima kasih atas masukan Anda.";
    } else {
        $error_msg = "Maaf, terjadi kesalahan. Pesan tidak dapat dikirim. Silakan coba lagi.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<!-- SITE TITLE -->
	<title>Kontak - Kecamatan Tinanggea</title>
<!--
Blaster Template
http://www.templatemo.com/tm-472-blaster
-->
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<!-- STYLESHEET CSS FILES -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/nivo-lightbox.css">
	<link rel="stylesheet" href="css/nivo_themes/default/default.css">
	<link rel="stylesheet" href="css/style.css">
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	
	<style>
		.alert {
			padding: 15px;
			margin-bottom: 20px;
			border: 1px solid transparent;
			border-radius: 4px;
			font-weight: bold;
		}
		.alert-success {
			color: #3c763d;
			background-color: #dff0d8;
			border-color: #d6e9c6;
		}
		.alert-danger {
			color: #a94442;
			background-color: #f2dede;
			border-color: #ebccd1;
		}
		.fade-in {
			animation: fadeIn 0.5s ease-in;
		}
		@keyframes fadeIn {
			from { opacity: 0; }
			to { opacity: 1; }
		}
	</style>
</head>
<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

<!-- navigation section -->
<section class="navbar navbar-fixed-top custom-navbar" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>
			<a href="#" class="navbar-brand"><span class="bold">AAENOS</span></a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="utama.php" class="smoothScroll">HOME</a></li>
				<li><a href="page.php?id=4" class="smoothScroll">TOPOGRAPI</a></li>
				<li><a href="page.php?id=5" class="smoothScroll">BATAS WILAYAH</a></li>
				<li><a href="page.php?id=6" class="smoothScroll">PERTUMBUHAN PENDUDUK</a></li>
				<li><a href="kontak.php" class="smoothScroll">KONTAK</a></li>
				<li><a href="login.php" class="smoothScroll">ADMIN</a></li>
			</ul>
		</div>
	</div>
</section>

<!-- home section -->
<section id="home">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<hr>
				<h3><span class="heading">Kontak Pribadi Kami</span></h3>
				<h1 class="bold">Apa Yang Ingin kamu tanyakan?</h1>
				<a href="#contact" class="smoothScroll btn btn-default">Hubungi</a>
			</div>
		</div>
	</div>		
</section>

<!-- contact section -->
<section id="contact">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 text-center">
				<h1 class="heading bold">Hubungi Kami</h1>
				<h2 class="subheading">KAMI SANGAT MENGHARGAI MASUKAN ANDA</h2>
				
				<?php
				// Tampilkan pesan sukses/error
				if (isset($success_msg)) {
					echo '<div class="alert alert-success">'.$success_msg.'</div>';
				}
				if (isset($error_msg)) {
					echo '<div class="alert alert-danger">'.$error_msg.'</div>';
				}
				?>
			</div>
		</div>
		<div class="row">
			<div class="contact-info-box col-md-4 col-sm-4 col-xs-6 wow fadeInUp" data-wow-delay="0.6s">
				<i class="fa fa-phone"></i>
					<h3>+62 812-6035-4246</h3>
			</div>
			<div class="contact-info-box col-md-4 col-sm-4 col-xs-6 wow fadeInUp" data-wow-delay="0.8s">
				<i class="fa fa-envelope-o"></i>
					<h3>aaenos@gmail.com</h3>
			</div>
			<div class="contact-info-box col-md-4 col-sm-4 col-xs-6 wow fadeInUp" data-wow-delay="1s">
				<i class="fa fa-map-marker"></i>
					<h3>Kendari, Sulawesi Tenggara</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<form action="" method="post">
					<div class="col-md-6 col-sm-6">
						<input name="name" type="text" class="form-control" id="name" placeholder="Nama Lengkap" required>
				  	  	<input name="email" type="email" class="form-control" id="email" placeholder="Alamat Email" required>
						<input name="subject" type="text" class="form-control" id="subject" placeholder="Subjek Pesan" required>
					</div>
					<div class="col-md-6 col-sm-6">
						<textarea name="message" rows="7" class="form-control" id="message" placeholder="Isi Pesan Anda" required></textarea>
					</div>
					<div class="col-md-offset-4 col-md-4 col-sm-offset-4 col-sm-6">
						<input name="submit" type="submit" class="form-control" id="submit" value="KIRIM PESAN">
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<!-- footer section -->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<ul class="social-icon">
					<li><a href="http://www.facebook.com/templatemo" class="fa fa-facebook wow bounceIn" data-wow-delay="0.3s" target="_parent"></a></li>
					<li><a href="#" class="fa fa-twitter wow bounceIn" data-wow-delay="0.6s"></a></li>
					<li><a href="#" class="fa fa-behance wow bounceIn" data-wow-delay="0.9s"></a></li>
					<li><a href="#" class="fa fa-dribbble wow bounceIn" data-wow-delay="0.9s"></a></li>
					<li><a href="#" class="fa fa-github wow bounceIn" data-wow-delay="0.9s"></a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>

<!-- copyright section -->
<section id="copyright">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-sm-8 col-xs-9">
				<p>Developer By AAENOS <a rel="nofollow" href="http://www.templatemo.com" target="_parent">Company</a></p>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-1">
				<a href="#home" class="smoothScroll fa fa-angle-up"></a>
			</div>
		</div>
	</div>
</section>

<!-- JAVASCRIPT JS FILES -->	
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/isotope.js"></script>
<script src="js/imagesloaded.min.js"></script>
<script src="js/nivo-lightbox.min.js"></script>
<script src="js/wow.min.js"></script>
<script>
    // Fungsi untuk transisi fade in saat halaman dimuat
    document.addEventListener('DOMContentLoaded', function() {
        document.body.classList.add('fade-in');
    });

    // Fungsi untuk transisi fade out saat berpindah halaman
    document.addEventListener('DOMContentLoaded', function() {
        var links = document.querySelectorAll('a[href]');
        
        links.forEach(function(link) {
            // Skip anchor links dan link dengan class smoothScroll (untuk scroll internal)
            if (link.getAttribute('href').indexOf('#') === 0 || link.classList.contains('smoothScroll')) {
                return;
            }
            
            // Skip link eksternal
            if (link.hostname !== window.location.hostname && !link.href.includes('page.php')) {
                return;
            }
            
            link.addEventListener('click', function(e) {
                // Jika link adalah link download atau target blank, skip
                if (link.getAttribute('download') || link.getAttribute('target') === '_blank') {
                    return;
                }
                
                e.preventDefault();
                var destination = this.href;
                
                // Efek fade out
                document.body.style.opacity = 0;
                
                // Tunggu transisi selesai sebelum pindah halaman
                setTimeout(function() {
                    window.location.href = destination;
                }, 500);
            });
        });

        // Tambahan khusus untuk link login
        var loginLink = document.querySelector('a[href="login.php"]');
        if (loginLink) {
            loginLink.addEventListener('click', function(e) {
                e.preventDefault();
                var destination = this.href;
                
                // Efek fade out
                document.body.style.opacity = 0;
                
                // Tunggu transisi selesai sebelum pindah halaman
                setTimeout(function() {
                    window.location.href = destination;
                }, 500);
            });
        }
    });
</script>

<script src="js/custom.js"></script>
</body>
</html>