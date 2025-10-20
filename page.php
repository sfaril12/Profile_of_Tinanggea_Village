<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<!-- SITE TITLE -->
	<title>tugas web </title>
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
				<?php

				$id=$_GET["id"];
				include "config.php";
				$hasil=mysqli_query($connect,"SELECT * FROM uraian WHERE id_uraian='".$id."'");
				while($data=mysqli_fetch_row($hasil)){
				echo"<h3><span class='heading'>$data[1]</h3>";
				echo"<h1 class='bold'>Kecamatan Tinanggea</h1>";
				}
				?>
				<a href="#about" class="smoothScroll btn btn-default">Selengkapnya</a>
			</div>
		</div>
	</div>		
</section>

<!-- about section -->
<?php
	$id=$_GET["id"];
	
	include "config.php";
	$hasil=mysqli_query($connect,"SELECT * FROM uraian WHERE id_uraian='".$id."'");
	while($data=mysqli_fetch_row($hasil))
	{
		$judul=$data[1];
		$photo=$data[4];
		$uraian=$data[3];
	}
	?>
<div id="about">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-6 ">
        <div class="about-img">
		<?php echo "<img src='img/".$photo."' class='img-responsive' alt='' >";?>	
		</div>
      </div>
      <div class="col-xs-12 col-md-6">
        <div class="about-text">
          <h2><?php	echo $judul; ?></h2>
          <hr>
          <p><?php	echo $uraian;?></p>
		  <p><a href="utama.php">Kembali</a></p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- contact section -->
<section id="contact">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 text-center">
				<h1 class="heading bold">Hubungi Kami</h1>
				<h2 class="subheading">KAMI SANGAT MENGHARGAI MASUKAN ANDA</h2>
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
					<li><a href="http://www.facebook.com/templatemo" 
                    				class="fa fa-facebook wow bounceIn" data-wow-delay="0.3s" target="_parent"></a></li>
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
				<p> Developer By  AAENOS <a rel="nofollow" href="http://www.templatemo.com" target="_parent">Company</a></p>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-3">
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