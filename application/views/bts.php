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
			padding: 0;
			border-top: 5px solid black;
			/* Warna dan ukuran border sesuaikan kebutuhan */
		}

		.navbar {
			border-bottom: 5px solid #40E0D0;
			/* Warna dan ukuran border sesuaikan kebutuhan */
			padding: 1%;
			background-color: #333;
			position: fixed;
			margin-bottom: 20px;
			/* Navbar tetap di atas saat di-scroll */
			width: 100%;
			/* Lebar navbar sama dengan lebar layar */
			z-index: 1000;
			/* Pastikan navbar berada di atas elemen lain */
			top: 0;
			/* Atur posisi navbar di bagian atas */
		}

		.navbar-nav {
			display: flex;
			align-items: center;
			/* Posisikan ikon-ikon secara vertikal di tengah */
			gap: 10px;
			/* Jarak antara ikon-ikon */
		}

		.nav-item {
			list-style: none;
			/* Hilangkan bullets dari list item */
		}

		.nav-link {
			color: #fff;
			font-size: 18px;
			/* Ukuran font ikon */
			text-decoration: none;
			display: flex;
			/* Gunakan flexbox untuk penataan */
			align-items: center;
			/* Posisikan ikon di tengah vertikal */
		}


		.navbar-brand {
			color: #fff;
			font-size: 20px;
			margin-right: 110px;
			text-align: center;
			/* Tambahkan gaya lainnya sesuai kebutuhan */
		}

		.navbar-nav .nav-item .nav-link {
			color: #fff;
			/* Tambahkan gaya lainnya sesuai kebutuhan */
		}

		.navbar-toggler {
			color: #fff;
			margin-left: 10px; /* Ubah margin-left menjadi 10px */
			order: -1;
		}

		.autoplay-icon,
		.download-icon {
			color: #fff;
			font-size: 24px;
			/* Tambahkan gaya lainnya sesuai kebutuhan */
		}

		.autoplay-icon:hover,
		.download-icon:hover {
			color: #007bff;
			/* Tambahkan gaya lainnya sesuai kebutuhan */
		}

		.navbar-text {
			color: #fff;
			/* Tambahkan gaya lainnya sesuai kebutuhan */
		}

		.navbar-brand:hover {
			color: white !important;
		}

		.navbar-toggler-icon {
			color: #fff;
			margin-left: 10px;
		}



		.open-btn {

			color: #fff;
			/* Warna ikon saat awal */
			font-size: 24px;
			/* Ukuran ikon */
			display: flex;
			/* Menggunakan flexbox untuk penataan */
			align-items: center;
			/* Mengatur penataan vertikal */
			cursor: pointer;
			/* Kursor menunjukkan tautan dapat diklik */
			transition: color 0.3s ease;
		}

		/* Sembunyikan ikon close secara default */
		#close-icon {
			display: none;
		}


		.close-btn:hover {
			color: #007bff;
			/* Ubah warna ikon close saat dihover menjadi biru */
		}



		/* Gaya saat ikon di hover */
		.open-btn:hover {
			color: #007bff;
			/* Warna saat di hover */
		}

		.sidebar {
			height: 100%;
			width: 0;
			position: fixed;
			top: 0;
			right: 0;
			background-color: #333;
			overflow-x: hidden;
			transition: 0.5s;
			padding-top: 60px;
			z-index: 1000;
		}

		.sidebar a {
			padding: 10px 15px;
			text-decoration: none;
			font-size: 20px;
			color: #fff;
			display: block;

		}

		.sidebar a:hover {
			background-color: #007bff;
			color: #fff;
		}

		.close-btn {
			position: absolute;
			top: 0;
			right: 25px;
			font-size: 36px;
			margin-left: 50px;
			color: #fff;
			/* Ubah warna ikon close menjadi putih */
			cursor: pointer;
		}

		/* Mobile devices (portrait and landscape) */
		@media only screen and (max-width: 480px) {
			.navbar-nav .nav-item {
				display: block !important;
				/* Tetap tampilkan semua item pada layar kecil */
			}
		}

		/* Tablets (portrait and landscape) */
		@media only screen and (min-width: 481px) and (max-width: 768px) {
			.navbar-nav .nav-item {
				display: block !important;
				/* Tetap tampilkan semua item pada ukuran tablet */
			}
		}

		/* Custom styling for the navbar toggler icon on small screens */
		@media only screen and (max-width: 991.98px) {
			.navbar-toggler-icon {
				margin-left: 10px;
				/* Menggeser ikon toggler ke kanan */
				order: -1;
				/* Mengubah urutan ikon toggler agar berada di sebelah kanan */
				color: #fff;
			}
		}

		

		.navbar {
			display: flex;
			justify-content: space-between;
			align-items: center;
		}

		/* Styles for smaller screens */
		@media (max-width: 768px) {
			.navbar {
				flex-direction: column;
				/* Stack elements vertically on small screens */
				align-items: center;
				/* Center elements horizontally */
			}
		}

		/* Styles for smaller screens */
@media (max-width: 768px) {
    .navbar-brand {
        display: flex;
        align-items: center;
    }

    .navbar-toggler {
        margin-right: 10px; /* Atur jarak antara ikon toggler dan teks */
		margin-left: -10px;
    }

    .navbar-brand,
    .navbar-collapse {
        flex-grow: 1;
    }
}

	</style>

</head>

<body>
	<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
	<a class="navbar-brand" href="#">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i id="toggle-icon" class="fa-solid fa-bars"></i>
            </button>
            Jurnalistik - Buku Tahunan Siswa
        </a>


        <div class="collapse navbar-collapse" id="navbarNav">
            <!-- Ikon-ikon berada di sebelah kanan -->
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="login">
                        <div class="download-icon">
                            <i class="fas fa-download"></i>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" onclick="toggleAutoplay()">
                        <div class="autoplay-icon">
                            <i id="autoplay-btn" class="fas fa-play"></i>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" onclick="openSidebar()">
                        <div id="open-btn" class="open-btn" onclick="toggleSidebar()">
                            <i id="open-icon" class="fas fa-bars"></i>
                            <i id="close-icon" class="fas fa-times"></i>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>



	<div class="sidebar" id="sidebar">
	<a href="#" class="close-btn" onclick="closeSidebar(event)">&times;</a>
		<a href="#hero" onclick="closeSidebar()">Buku Tahunan Siswa</a>
		<a href="#sampuldepan" onclick="closeSidebar()">Sampul Depan</a>
		<a href="#daftarisi" onclick="closeSidebar()">Daftar Isi</a>
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

	<main id="main">

		<section id="sampuldepan" class="bts" style="padding-top: 85px;">
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

		function closeSidebar(event) {
    event.preventDefault(); // Menghentikan perilaku default dari tombol
    var sidebar = document.getElementById("sidebar");
    var openBtn = document.getElementById("open-btn");
    var downloadIcon = document.getElementById("download-icon");

    sidebar.style.width = "0";
    openBtn.style.display = "block"; // Menampilkan kembali icon toggle
    document.body.style.overflow = "auto"; // Mengaktifkan scroll kembali
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