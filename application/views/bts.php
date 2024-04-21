<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>Jurnalistik - Buku Tahunan Siswa</title>
	<meta content="" name="description">
	<meta content="" name="keywords">
	<link href="<?php echo base_url('assets/img/LOGO_JURNALISTIK.png'); ?>" rel="icon">
	<link href="<?php echo base_url('assets/img/LOGO_JURNALISTIK.png'); ?>" rel="apple-touch-icon">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>">

	<link href="<?php echo base_url('assets/vendor/aos/aos.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/vendor/boxicons/css/boxicons.min.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/vendor/glightbox/css/glightbox.min.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/vendor/swiper/swiper-bundle.min.css'); ?>" rel="stylesheet">

	<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<style>
		body {
			margin: 0;
			font-family: Arial, sans-serif;
			background-color: #f1f1f1;
			/* Warna latar belakang */
		}

		.sidebar {
			height: 100%;
			width: 0;
			position: fixed;
			z-index: 1;
			top: 0;
			left: 0;
			background-color:  #333;
			overflow-x: hidden;
			transition: 0.5s;
			padding-top: 60px;
		}

		.sidebar a {
			padding: 10px 15px;
			text-decoration: none;
			font-size: 20px;
			/* Mengurangi ukuran tulisan */
			color: #fff;
			display: block;
			transition: 0.3s;
		}

		.sidebar a:hover {
			color: #007bff;
		}

		.sidebar .close-btn {
			position: absolute;
			top: 0;
			right: 25px;
			font-size: 36px;
			/* Ukuran icon toggle */
			color: #fff;
			/* Warna icon toggle */
			margin-left: 50px;
		}


		.open-btn {
			position: fixed;
			top: 20px;
			left: 40px;
			color: #fff;
			/* Adjust this value to move the toggle icon */
			z-index: 1000;
			/* Ensure the toggle icon is above other elements */
			font-size: 36px;
			/* Enlarge the toggle icon */
			cursor: pointer;
		}

		.open-btn:hover {
			color: #007bff;
			/* Warna icon toggle saat dihover */
		}


		.download-icon {
			position: fixed;
			top: 20px;
			right: 20px;
			/* Adjust this value to position the download icon next to the toggle icon */
			z-index: 1000;
			/* Ensure the download icon is above other elements */
			font-size: 36px;
			/* Enlarge the download icon */
			cursor: pointer;
			color: #fff;
			/* Mengubah warna ikon download menjadi putih */
			transition: color 0.3s ease;
			/* Efek transisi saat perubahan warna */
		}


		.download-icon:hover {
			color: #ffff;
			/* Mengubah warna ikon download menjadi biru saat dihover */
		}


		.autoplay-icon {
			position: fixed;
			top: 20px;
			right: 70px;
			/* Sesuaikan dengan posisi yang diinginkan */
			z-index: 1000;
			font-size: 36px;
			cursor: pointer;
			color: #fff;
		}

		.autoplay-icon:hover {
			color: #ffff;
			/* Warna ikon autoplay saat di-hover */
		}


		@media screen and (max-height: 450px) {
			.sidebar {
				padding-top: 15px;
			}

			@media screen and (min-width: 768px) {
				.open-btn {
					display: none;
					/* Menyembunyikan icon toggle pada layar lebar */
				}
			}


			.sidebar a {
				font-size: 16px;
				/* Ukuran tulisan untuk layar kecil */
			}

			.sidebar .close-btn {
				font-size: 28px;
				/* Ukuran icon toggle untuk layar kecil */
			}

			.open-btn {
				font-size: 28px;
				/* Ukuran icon toggle untuk layar kecil */
			}
		}
	</style>
</head>

<body>

	</head>

	<body>

		<div class="sidebar" id="sidebar">
			<a href="#" class="close-btn" onclick="closeSidebar()">&times;</a>
			<a href="#hero" onclick="closeSidebar()">Buku Tahunan Siswa</a>
			<a href="#sampuldepan" onclick="closeSidebar()">Sampul Depan</a>
			<a href="#daftarisi" onclick="closeSidebar()" onclick="closeSidebar()">Daftar Isi</a>
			<a href="#wks" onclick="closeSidebar()">Kepala Sekolah</a>
			<a href="#datguru" onclick="closeSidebar()">Guru dan Karyawan</a>
			<a href="#wkps" onclick="closeSidebar()">Ketua Pengurus OSIS</a>
			<a href="#fbps" onclick="closeSidebar()">Pengurus OSIS</a>
			<a href="#" onclick="closeSidebar()">Dewan Perwakilan Kelas</a>
			<a href="#" onclick="closeSidebar()">Program Keahlian</a>
			<a href="#dss" onclick="closeSidebar()">Siswa dan Siswi</a>
			<a href="#" onclick="closeSidebar()">Foto Ekstrakurikuler</a>
			<a href="#sb" onclick="closeSidebar()">Sampul Belakang</a>


		</div>

		<div id="open-btn" class="open-btn" onclick="openSidebar()">
			<i class="fas fa-bars"></i>
		</div>
		<div class="download-icon">
			<a href="login">
				<i class="fas fa-download"></i>
			</a>
		</div>
		<div class="autoplay-icon">
			<a onclick="toggleAutoplay()">
				<i id="autoplay-btn" class="fas fa-play"></i>
			</a>
		</div>





		<main id="main">

			<section id="sampuldepan" class="bts">
				<img src="<?php echo base_url('assets/img/bts-2021/img001.jpg'); ?>" />
			</section>
			<section id="daftarisi" class="bts">
				<img src="<?php echo base_url('assets/img/bts-2021/img002.jpg'); ?>" />
			</section>
			<section id="wks" class="bts">
				<img id="play-button" src="<?php echo base_url('assets/img/bts-2021/img003.jpg') ?>" alt="Play Video" onclick="playVideo()" />
				<iframe id="video-frame" display max-width="100%" height="auto" src="https://www.youtube.com/embed/fY585EuqG_4?si=5AcFNEJP1PnYNe8S" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>" />
			</section>
			<section id="datguru" class="bts">
				<img src="<?php echo base_url('assets/img/bts-2021/img004.jpg'); ?>" />
				<img src="<?php echo base_url('assets/img/bts-2021/img004.jpg'); ?>" />
				<img src="<?php echo base_url('assets/img/bts-2021/img005.jpg'); ?>" />
				<img src="<?php echo base_url('assets/img/bts-2021/img006.jpg'); ?>" />
				<img src="<?php echo base_url('assets/img/bts-2021/img007.jpg'); ?>" />
				<img src="<?php echo base_url('assets/img/bts-2021/img008.jpg'); ?>" />
			</section>
			<section id="wkps" class="bts">
				<img src="<?php echo base_url('assets/img/bts-2021/img009.jpg'); ?>" />
			</section>
			<section id="fbps" class="bts">
				<img src="<?php echo base_url('assets/img/bts-2021/img010.jpg'); ?>" />
				<img src="<?php echo base_url('assets/img/bts-2021/img011.jpg'); ?>" />
			</section>
			<section id="dss" class="bts">
				<img src="<?php echo base_url('assets/img/bts-2021/img012.jpg'); ?>" />
				<img src="<?php echo base_url('assets/img/bts-2021/img013.jpg'); ?>" />
				<img src="<?php echo base_url('assets/img/bts-2021/img014.jpg'); ?>" />
				<img src="<?php echo base_url('assets/img/bts-2021/img015.jpg'); ?>" />
				<img src="<?php echo base_url('assets/img/bts-2021/img016.jpg'); ?>" />
				<img src="<?php echo base_url('assets/img/bts-2021/img017.jpg'); ?>" />
				<img src="<?php echo base_url('assets/img/bts-2021/img018.jpg'); ?>" />
				<img src="<?php echo base_url('assets/img/bts-2021/img019.jpg'); ?>" />
				<img src="<?php echo base_url('assets/img/bts-2021/img020.jpg'); ?>" />
				<img src="<?php echo base_url('assets/img/bts-2021/img021.jpg'); ?>" />
				<img src="<?php echo base_url('assets/img/bts-2021/img022.jpg'); ?>" />
				<img src="<?php echo base_url('assets/img/bts-2021/img023.jpg'); ?>" />
			</section>
			<section id="jurusan" class="bts">
				<img src="<?php echo base_url('assets/img/bts-2021/img024.jpg'); ?>" />
				<img src="<?php echo base_url('assets/img/bts-2021/img025.jpg'); ?>" />
				<img src="<?php echo base_url('assets/img/bts-2021/img026.jpg'); ?>" />
			</section>
			<section id="sb" class="bts">
				<img src="<?php echo base_url('assets/img/bts-2021/img027.jpg'); ?>" />
			</section>
		</main>

		<footer id="footer">
			<div class="container">
				<h3>Buku Tahunan Siswa SMKN 1 Lumajang 2024</h3>
				<p></p>
				<div class="social-links">
					<a href="https://www.instagram.com/smkn1lumajang?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" class="instagram"><i class="bx bxl-instagram"></i></a>
					<a href="https://web.facebook.com/people/SMKN-1-Lumajang/100071251050566/" class="facebook"><i class="bx bxl-facebook"></i></a>
					<a href="https://www.youtube.com/@smkn1lumajangtv797" class="youtube"><i class="bx bxl-youtube"></i></a>
					<a href="https://www.tiktok.com/@smkn1lumajang?_t=8knQnkBiAXB&_r=1" class="tiktok"><i class="bx bxl-tiktok"></i></a>
					<a href="https://t.me/info_ppdb_smkn1lumajang_2024" class="telegram"><i class="bx bxl-telegram"></i></a>
				</div>
				<div class="copyright">
					&copy; Copyright <strong><span>smkn1lmj</span></strong>. Buku Tahunan Siswa SMKN 1 Lumajang
				</div>
				<div class="credits">

					Desain Oleh <a href="#">Jurnalistik SMKN 1 Lumajang</a>


				</div>
			</div>
		</footer>

		<div id="preloader"></div>
		<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

		<script src="<?php echo base_url('assets/vendor/purecounter/purecounter_vanilla.js'); ?>"></script>
		<script src="<?php echo base_url('assets/vendor/aos/aos.js'); ?>"></script>
		<script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/vendor/glightbox/js/glightbox.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/vendor/isotope-layout/isotope.pkgd.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/vendor/swiper/swiper-bundle.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/vendor/typed.js/typed.umd.js'); ?>"></script>
		<script src="<?php echo base_url('assets/vendor/waypoints/noframework.waypoints.js'); ?>"></script>
		<script src="<?php echo base_url('assets/vendor/php-email-form/validate.js'); ?>"></script>

		<script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
		<script>
			function openSidebar() {
				var sidebar = document.getElementById("sidebar");
				var downloadIcon = document.getElementById("download-icon");
				var openBtn = document.getElementById("open-btn");

				if (sidebar.style.width === "250px") {
					sidebar.style.width = "0";
					downloadIcon.style.right = "20px"; // Mengembalikan posisi icon download saat sidebar tertutup
					openBtn.style.display = "block"; // Menampilkan kembali icon toggle setelah sidebar tertutup
				} else {
					sidebar.style.width = "250px"; // Menggeser icon download saat sidebar terbuka
					openBtn.style.display = "none"; // Sembunyikan icon toggle saat sidebar terbuka
				}
			}


			function closeSidebar() {
				var sidebar = document.getElementById("sidebar");
				var openBtn = document.getElementById("open-btn");
				var downloadIcon = document.getElementById("download-icon");

				sidebar.style.width = "0";
				openBtn.style.display = "block"; // Menampilkan kembali icon toggle
			}

			let isAutoplay = false;
			let scrollInterval;

			function toggleAutoplay() {
				isAutoplay = !isAutoplay;
				const autoplayBtn = document.getElementById('autoplay-btn');

				if (isAutoplay) {
					autoplayBtn.classList.remove('fa-play');
					autoplayBtn.classList.add('fa-pause');
					startAutoplay();
				} else {
					autoplayBtn.classList.remove('fa-pause');
					autoplayBtn.classList.add('fa-play');
					stopAutoplay();
				}
			}

			function startAutoplay() {
				scrollInterval = setInterval(() => {
					window.scrollBy(0, 20); // Adjust scroll speed as needed
				}, 100); // Adjust scroll interval as needed (milliseconds)
			}

			function stopAutoplay() {
				clearInterval(scrollInterval);
			}
		</script>

	</body>

</html>