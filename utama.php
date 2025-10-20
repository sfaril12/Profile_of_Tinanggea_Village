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
				<h3><span class="heading">Profil Kecamatan Tinanggea</h3>
				<h1 class="bold">Kabupaten Konawe Selatan</h1>
				<a href="#about" class="smoothScroll btn btn-default">Selengkapnya</a>
			</div>
		</div>
	</div>		
</section>

<!-- about section -->
<section id="about">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 text-center">
				<h1 class="heading bold">PROFIL DAERAH</h1>
				<h2 class="subheading"></h2>
			<hr>
      </div>
      <div id="row">
        <div class="col-md-4 team">
          <div class="thumbnail">
            <div class="team-img"><img src="img/team/gbr01.jpg" alt="..."></div>
			<?php
			  include "config.php";
			  $hasil=mysqli_query($connect,"SELECT * FROM uraian WHERE id_uraian=1");
			  while($data=mysqli_fetch_row($hasil))
			  {
				  $judul=$data[1];
			      $uraian_singkat=$data[2];
			  }
			  ?>
            <div class="caption">
              <h3><?php echo $judul ?></h3>
              <p><?php echo $uraian_singkat ?></p>
			  <p class="text-center">
				<br>
				<br>
				<a href="page.php?id=1" class="selengkapnya">Info Selengkapnya</a>
			  </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 team">
          <div class="thumbnail">
            <div class="team-img"><img src="img/team/gbr02.jpg" alt="..."></div>
			<?php
			  $hasil=mysqli_query($connect,"SELECT * FROM uraian WHERE id_uraian=2");
			  while($data=mysqli_fetch_row($hasil))
			  {
				  $judul=$data[1];
			      $uraian_singkat=$data[2];
			  }
			  ?>
            <div class="caption">
              <h3><?php echo $judul ?></h3>
              <p><?php echo $uraian_singkat ?></p>
			  <p class="text-center">
				<br>
				<a href="page.php?id=2" class="selengkapnya">Info Selengkapnya</a>
			  </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 team">
          <div class="thumbnail">
            <div class="team-img"><img src="img/team/gbr03.jpg" alt="..."></div>
			<?php
			  $hasil=mysqli_query($connect,"SELECT * FROM uraian WHERE id_uraian=3");
			  while($data=mysqli_fetch_row($hasil))
			  {
				  $judul=$data[1];
			      $uraian_singkat=$data[2];
			  }
			  ?>
            <div class="caption">
              <h3><?php echo $judul ?></h3>
              <p><?php echo $uraian_singkat ?></p>
			  <p class="text-center">
				<a href="page.php?id=3" class="selengkapnya">Info Selengkapnya</a>
			  </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<!-- portfolio section -->
<div id="portfolio">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h1 class="heading bold">POTENSI DESA UNGGULAN</h1>
				<h2 class="subheading">Kecamatan Tinanggea, Kabupaten Konawe Selatan</h2>
				<!-- ISO section -->
				<div class="iso-section">
					<ul class="filter-wrapper clearfix">
                   		 <li><a href="#" class="opc-main-bg" data-filter=".html">Kelurahan Tinanggea</a></li>
                   		 <li><a href="#" class="opc-main-bg" data-filter=".photoshop">Desa Bungin Permai</a></li>
                    	 <li><a href="#" class="opc-main-bg" data-filter=".wordpress">Desa Torokeku Baru</a></li>
                    	 <li><a href="#" class="opc-main-bg" data-filter=".mobile">Desa Akuni</a></li>
               		</ul>
               		<div class="iso-box-section wow fadeIn" data-wow-delay="0.9s">
               			<div class="iso-box-wrapper col4-iso-box">

                            <!-- Html Portfolio (3 gambar) -->
                            <div class="iso-box html col-lg-4 col-md-4 col-sm-6 col-xs-6">
               				 	<a href="img/portfolio/1.jpg" data-lightbox-gallery="portfolio-gallery"><img src="img/portfolio/1.jpg" alt="portfolio img"></a>
               				 </div>

               				 <div class="iso-box html col-md-4 col-lg-4 col-sm-6 col-xs-6">
               				 	<a href="img/portfolio/2.jpg" data-lightbox-gallery="portfolio-gallery"><img src="img/portfolio/2.jpg" alt="portfolio img"></a>
               				 </div>

               				 <div class="iso-box html col-lg-4 col-md-4 col-sm-6 col-xs-12">
               				 	<a href="img/portfolio/3.jpg" data-lightbox-gallery="portfolio-gallery"><img src="img/portfolio/3.jpg" alt="portfolio img"></a>
               				 </div>

                            <!-- Photoshop Portfolio (3 gambar) -->
               				 <div class="iso-box photoshop col-lg-4 col-md-4 col-sm-6 col-xs-6">
               				 	<a href="img/portfolio/4.jpg" data-lightbox-gallery="portfolio-gallery"><img src="img/portfolio/4.jpg" alt="portfolio img"></a>
               				 </div>

               				 <div class="iso-box photoshop col-lg-4 col-md-4 col-sm-6 col-xs-6">
               				 	<a href="img/portfolio/5.jpg" data-lightbox-gallery="portfolio-gallery"><img src="img/portfolio/5.jpg" alt="portfolio img"></a>
               				 </div>

               				 <div class="iso-box photoshop col-lg-4 col-md-4 col-sm-6 col-xs-12">
               				 	<a href="img/portfolio/6.jpg" data-lightbox-gallery="portfolio-gallery"><img src="img/portfolio/6.jpg" alt="portfolio img"></a>
               				 </div>

                            <!-- Wordpress Portfolio (3 gambar) -->
               				 <div class="iso-box wordpress col-lg-4 col-md-4 col-sm-6 col-xs-6">
               				 	<a href="img/portfolio/7.jpg" data-lightbox-gallery="portfolio-gallery"><img src="img/portfolio/7.jpg" alt="portfolio img"></a>
               				 </div>

               				 <div class="iso-box wordpress col-lg-4 col-md-4 col-sm-6 col-xs-6">
               				 	<a href="img/portfolio/8.jpg" data-lightbox-gallery="portfolio-gallery"><img src="img/portfolio/8.jpg" alt="portfolio img"></a>
               				 </div>

               				 <div class="iso-box wordpress col-lg-4 col-md-4 col-sm-6 col-xs-12">
               				 	<a href="img/portfolio/9.jpg" data-lightbox-gallery="portfolio-gallery"><img src="img/portfolio/9.jpg" alt="portfolio img"></a>
               				 </div>

                            <!-- Mobile Portfolio (3 gambar) -->
               				 <div class="iso-box mobile col-lg-4 col-md-4 col-sm-6 col-xs-6">
               				 	<a href="img/portfolio/10.jpg" data-lightbox-gallery="portfolio-gallery"><img src="img/portfolio/10.jpg" alt="portfolio img"></a>
               				 </div>

               				 <div class="iso-box mobile col-lg-4 col-md-4 col-sm-6 col-xs-6">
               				 	<a href="img/portfolio/11.jpg" data-lightbox-gallery="portfolio-gallery"><img src="img/portfolio/11.jpg" alt="portfolio img"></a>
               				 </div>

               				 <div class="iso-box mobile col-lg-4 col-md-4 col-sm-6 col-xs-12">
               				 	<a href="img/portfolio/12.jpg" data-lightbox-gallery="portfolio-gallery"><img src="img/portfolio/12.jpg" alt="portfolio img"></a>
               				 </div>

               			</div>
               		</div>

				</div>
			</div>
		</div>
	</div>
</div>		

<!-- team section -->
<section id="team">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h1 class="heading bold">OUR TEAM</h1>
				<h2 class="subheading">WUJUD ASLI DEVELOPER</h2>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-6 wow fadeIn" data-wow-delay="0.9s">
				<div class="team-wrapper">
					<img src="img/team/safaril1.jpg" class="img-responsive" alt="team img">
						<div class="team-des">
							<h4>Safaril Adam</h4>
							<h3>Ketua Kelompok</h3>
						</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-6 wow fadeIn" data-wow-delay="1.3s">
				<div class="team-wrapper">
					<img src="img/team/nikmal1.jpg" class="img-responsive" alt="team img">
						<div class="team-des">
							<h4>Nikmal Anakoruo</h4>
							<h3>Anggota</h3>
						</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-6 wow fadeIn" data-wow-delay="1.6s">
				<div class="team-wrapper">
					<img src="img/team/elang2.jpg" class="img-responsive" alt="team img">
						<div class="team-des">
							<h4>Elang Firmansyah</h4>
							<h3>Anggota</h3>
						</div>
				</div>
			</div>
			<hr>
			<div class="col-md-4 col-sm-4 col-xs-6 wow fadeIn" data-wow-delay="2.0s">
				<div class="team-wrapper">
					<img src="img/team/aswad2.jpg" class="img-responsive" alt="team img">
						<div class="team-des">
							<h4>Muhamad Aswaad Satria Pratama</h4>
							<h3>Anggota</h3>
						</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-6 wow fadeIn" data-wow-delay="2.3s">
				<div class="team-wrapper">
					<img src="img/team/aden1.jpg" class="img-responsive" alt="team img">
						<div class="team-des">
							<h4>Ananda Aden Putra</h4>
							<h3>Anggota</h3>
						</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-6 wow fadeIn" data-wow-delay="2.6s">
				<div class="team-wrapper">
					<img src="img/team/opang3.jpg" class="img-responsive" alt="team img">
						<div class="team-des">
							<h4>Abdillah Jumawal Koda</h4>
							<h3>Anggota</h3>
						</div>
				</div>
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
				<p> Developer By  AAENOS <a rel="nofollow" href="http://www.templatemo.com" target="_parent">Company</a></p>
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