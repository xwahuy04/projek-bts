<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>Buku Tahunan Siswa</title>
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
			margin-left: 10px;
			/* Ubah margin-left menjadi 10px */
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
				margin-right: 10px;
				/* Atur jarak antara ikon toggler dan teks */
				margin-left: -10px;
			}

			.navbar-brand,
			.navbar-collapse {
				flex-grow: 1;
			}
		}

		/* Sidebar Dropdown Styling */
		.dropdown-content {
			display: none;
			position: absolute;
			background-color: #fff;
			min-width: 200px;
			z-index: 1;
		}

		.dropdown-content a {
			color: black;
			padding: 12px 16px;
			text-decoration: none;
			display: block;
		}

		.dropdown-content a:hover {
			background-color: #007bff;
		}

		.dropdown-toggle .fa-caret-down {
			margin-left: 5px;
		}

		/* Show dropdown content on hover */
		.dropdown-toggle:hover+.dropdown-content {
			display: block;
		}

		.dropdown-content {
			display: none;
			/* Sembunyikan dropdown secara default */
			position: absolute;
			background-color: #fff;
			min-width: 200px;
			z-index: 1;
		}

		.dropdown-toggle:hover+.dropdown-content,
		.dropdown-content:hover {
			display: block;
			/* Tampilkan dropdown saat di-hover pada dropdown toggle atau dropdown content */
		}


		/* Perbarui CSS untuk submenu "Siswa dan Siswi" */
		.sidebar #siswa-dropdown {
			display: none;
			/* Sembunyikan submenu secara default */
			background-color: #fff;
			padding: 10px;
			position: absolute;
			top: 50px;
			left: 0;
			width: 100%;
			z-index: 1001;
		}

		.sidebar .dropdown-toggle:hover+#siswa-dropdown,
		#siswa-dropdown:hover {
			display: block;
			/* Tampilkan submenu saat di-hover pada dropdown toggle atau submenu itu sendiri */
		}
	</style>

</head>

<body>
	<nav class="navbar navbar-expand-lg">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<i id="toggle-icon" class="fa-solid fa-bars" onclick="toggleIcon()"></i>
				</button>
					Buku Tahunan Siswa
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
		<a href="#sampuldepan" onclick="closeSidebar()">Sampul Depan</a>
		<a href="#daftarisi" onclick="closeSidebar()">Daftar Isi</a>
		<a href="#ucapankepalasekolah" onclick="closeSidebar()">Ucapan Kepala Sekolah</a>
		<a href="#gurudankaryawan" onclick="closeSidebar()">Guru dan Karyawan</a>
		<a href="#ucapanketuaosis" onclick="closeSidebar()">Ucapan Ketua OSIS</a>
		<a href="#pengurusosis" onclick="closeSidebar()">Pengurus OSIS</a>
		<a href="#dpk" onclick="closeSidebar()">Dewan Perwakilan Kelas</a>
		<a href="#programkeahlian" onclick="closeSidebar()">Program Keahlian</a>
		<a href="#" class="dropdown-toggle" onclick="toggleDropdown(event)">
			Siswa dan Siswi
			
		</a>
		<div id="siswa-dropdown" class="dropdown-content">
			<a href="#OTKP1" onclick="closeSidebar()">OTKP 1</a>
			<a href="#OTKP2" onclick="closeSidebar()">OTKP 2</a>
			<a href="#AKL1" onclick="closeSidebar()">AKL 1</a>
			<a href="#AKL2" onclick="closeSidebar()">AKL 2</a>
			<a href="#PBK" onclick="closeSidebar()">PBK</a>
			<a href="#BD2" onclick="closeSidebar()">BDP 2</a>
			<a href="#ALFA" onclick="closeSidebar()">ALFA</a>
			<a href="#MM1" onclick="closeSidebar()">MM 1</a>
			<a href="#MM2" onclick="closeSidebar()">MM 2</a>
			<a href="#KIN1" onclick="closeSidebar()">KIN 1</a>
			<a href="#KIN2" onclick="closeSidebar()">KIN 2</a>
			<a href="#RPL" onclick="closeSidebar()">RPL</a>
			<a href="#DSG" onclick="closeSidebar()">DSG</a>
			<a href="#TKJ1" onclick="closeSidebar()">TKJ 1</a>
			<a href="#TKJ2" onclick="closeSidebar()">TKJ 2</a>
			<!-- Tambahkan submenu lainnya di sini -->
		</div>


		<a href="#fotoekskul" onclick="closeSidebar()">Foto Ekstrakurikuler</a>
		<a href="#sampulbelakang" onclick="closeSidebar()">Sampul Belakang</a>
	</div>

	<main id="main">

		<section id="sampuldepan" class="bts" style="padding-top: 85px;">
			<img src="<?php echo base_url('assets/img/1-20/1.png'); ?>" />
		</section>

		<section id="daftarisi" class="bts">
			<img src="<?php echo base_url('assets/img/1-20/2.png'); ?>" />
		</section>

		<section id="ucapankepalasekolah" class="bts">
			<img src="<?php echo base_url('assets/img/1-20/3.png'); ?>" />
			<img id="play-button" src="<?php echo base_url('assets/img/1-20/4.png') ?>" alt="Play Video" onclick="playVideo()" />
			<iframe id="video-frame" display width="100%" height="700px" src="https://www.youtube.com/embed/IUqF6cAKR6Q?si=6trCh90hSkorBIzj" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
		</section>

		<section id="gurudankaryawan" class="bts">
			<img src="<?php echo base_url('assets/img/1-20/5.png'); ?>" />
			<img src="<?php echo base_url('assets/img/1-20/6.png'); ?>" />
			<img src="<?php echo base_url('assets/img/1-20/7.png'); ?>" />
			<img src="<?php echo base_url('assets/img/1-20/8.png'); ?>" />
			<img src="<?php echo base_url('assets/img/1-20/9.png'); ?>" />
			<img src="<?php echo base_url('assets/img/1-20/10.png'); ?>" />
			<img src="<?php echo base_url('assets/img/1-20/11.png'); ?>" />
			<img src="<?php echo base_url('assets/img/1-20/12.png'); ?>" />
			<img src="<?php echo base_url('assets/img/1-20/13.png'); ?>" />
			<img src="<?php echo base_url('assets/img/1-20/14.png'); ?>" />
			<img src="<?php echo base_url('assets/img/1-20/15.png'); ?>" />
			<img src="<?php echo base_url('assets/img/1-20/16.png'); ?>" />
			<img src="<?php echo base_url('assets/img/1-20/17.png'); ?>" />
			<img src="<?php echo base_url('assets/img/1-20/18.png'); ?>" />
			<img src="<?php echo base_url('assets/img/1-20/19.png'); ?>" />
			<img src="<?php echo base_url('assets/img/1-20/20.png'); ?>" />
		</section>

		<section id="ucapanketuaosis" class="bts">
			<img id="play-button-2" src="<?php echo base_url('assets/img/21-40/21.png') ?>" alt="Play Video" onclick="playVideo2()" />
			<iframe id="video-frame-2" width="100%" height="890px" src="https://www.youtube.com/embed/bgdK78s-5Y0?autoplay=1&si=E-zB91iH1fqFDubA&autoplay=1&mute=1" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen style="display: none;"></iframe>
		</section>

		<section id="pengurusosis" class="bts">
			<img src="<?php echo base_url('assets/img/21-40/22.png'); ?>" />
			<img src="<?php echo base_url('assets/img/21-40/23.png'); ?>" />
		</section>

		<section id="dpk" class="bts">
			<img src="<?php echo base_url('assets/img/21-40/24.png'); ?>" />
		</section>

		<section id="programkeahlian" class="bts">
			<img src="<?php echo base_url('assets/img/21-40/25.png'); ?>" />
			<img src="<?php echo base_url('assets/img/21-40/26.png'); ?>" />
			<img src="<?php echo base_url('assets/img/21-40/27.png'); ?>" />
			<img src="<?php echo base_url('assets/img/21-40/28.png'); ?>" />
		</section>

		<section id="sds" class="bts">
			<div id="OTKP1">
				<img src="<?php echo base_url('assets/img/21-40/28.png'); ?>" />
				<img src="<?php echo base_url('assets/img/21-40/29.png'); ?>" />
				<img src="<?php echo base_url('assets/img/21-40/30.png'); ?>" />
				<img src="<?php echo base_url('assets/img/21-40/31.png'); ?>" />
				<img src="<?php echo base_url('assets/img/21-40/32.png'); ?>" />
				<img src="<?php echo base_url('assets/img/21-40/33.png'); ?>" />
				<img src="<?php echo base_url('assets/img/21-40/34.png'); ?>" />
			</div>
			<div id="otkp-2">
				<img src="<?php echo base_url('assets/img/bts-2021/img020.jpg'); ?>" />
				<img src="<?php echo base_url('assets/img/bts-2021/img019.jpg'); ?>" />
				<img src="<?php echo base_url('assets/img/bts-2021/img020.jpg'); ?>" />
				<img src="<?php echo base_url('assets/img/bts-2021/img021.jpg'); ?>" />
				<img src="<?php echo base_url('assets/img/bts-2021/img022.jpg'); ?>" />
				<img src="<?php echo base_url('assets/img/bts-2021/img023.jpg'); ?>" />
			</div>
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

		function toggleIcon(){
			event.preventDefault(); // Menghentikan perilaku bawaan dari anchor tag
        	toggleSidebar(); // Panggil fungsi toggleSidebar setelah menghentikan default behavior
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
		// Membuat variabel untuk menyimpan status dropdown
		let isDropdownOpen = false;

		function toggleDropdown(event) {
			const dropdownContent = event.currentTarget.nextElementSibling;
			const caretIcon = event.currentTarget.querySelector('.fas.fa-caret-down');

			// Memeriksa apakah dropdown sedang terbuka
			if (isDropdownOpen) {
				dropdownContent.style.display = 'none';
				caretIcon.classList.remove('rotate-icon');
				isDropdownOpen = false;
			} else {
				// Menutup dropdown lain jika ada yang terbuka
				document.querySelectorAll('.dropdown-content').forEach(item => {
					if (item !== dropdownContent && item.style.display === 'block') {
						item.style.display = 'none';
						const otherCaretIcon = item.previousElementSibling.querySelector('.fas.fa-caret-down');
						otherCaretIcon.classList.remove('rotate-icon');
					}
				});

				// Membuka dropdown yang di-klik
				dropdownContent.style.display = 'block';
				caretIcon.classList.add('rotate-icon');
				isDropdownOpen = true;
			}

			event.stopPropagation(); // Menghentikan event bubbling agar dropdown tidak menutup sendiri saat diklik
		}

		// Menambahkan event listener ke setiap dropdown toggle
		document.querySelectorAll('.dropdown-toggle').forEach(item => {
			item.addEventListener('click', toggleDropdown);
		});

		// Menutup dropdown saat klik di luar dropdown
		window.addEventListener('click', function(event) {
			if (isDropdownOpen) {
				document.querySelectorAll('.dropdown-content').forEach(item => {
					item.style.display = 'none';
					const caretIcon = item.previousElementSibling.querySelector('.fas.fa-caret-down');
					caretIcon.classList.remove('rotate-icon');
				});
				isDropdownOpen = false;
			}
		});
		
	</script>

</body>

</html>