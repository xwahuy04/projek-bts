<!DOCTYPE html>
<html>

<head>
	<title>Form Login | Jurnalistik Smekensa</title>
	<link href="<?php echo base_url('assets/img/LOGO_JURNALISTIK.png'); ?>" rel="icon">
	<link href="<?php echo base_url('assets/img/LOGO_JURNALISTIK.png'); ?>" rel="apple-touch-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		body {
			background-color: #fff;
			/* Warna latar belakang putih */
			font-family: Arial, sans-serif;
			/* Font untuk teks */
			margin: 0;
			padding: 0;
		}

		h1 {
			text-align: center;
			margin-bottom: 50px;
			margin-top: 20px;
			/* Posisi teks rata tengah */
		}

		form {
			max-width: 400px;
			/* Lebar maksimum form */
			margin: 20px auto;
			/* Posisi form di tengah halaman */
			padding: 20px;

			/* Warna latar belakang form */
			border-radius: 5px;
			/* Sudut border melengkung */
		}

		table {
			width: 100%;
			/* Lebar tabel 100% */
			border-collapse: collapse;
			/* Gabungkan border sel */
		}

		table td {
			padding: 10px;
			/* Padding untuk sel tabel */
			border: none;
			/* Hapus border pada sel */
		}

		input[type="text"] {
			width: calc(100% - 20px);
			/* Lebar input 100% dikurangi padding */
			padding: 8px;
			/* Padding input */
			margin-bottom: 10px;
			/* Margin bawah input */
			box-sizing: border-box;
			/* Ukuran box termasuk border dan padding */
			border-radius: 5px;
			/* Sudut border melengkung */
		}

		input[type="submit"] {
			width: 100%;
			/* Lebar tombol 100% */
			padding: 8px;
			/* Padding tombol */
			background-color: #000ff0;
			/* Warna tombol login */
			color: #fff;
			/* Warna teks tombol login */
			border: none;
			/* Tanpa border */
			cursor: pointer;
			/* Pointer saat dihover */
		}

		input[type="submit"]:hover {
			background-color: #000ff0;
			/* Warna tombol saat dihover */
		}

		/* Responsive Styles */
		@media screen and (max-width: 480px) {
			form {
				padding: 10px;
			}

			h1 {
				margin-bottom: 30px;
			}
		}

		.pesan {
			text-align: center;
		}

		.container {
			justify-content: center;
			text-align: center;
		}

		.judul {
			margin-top: 200px;
		}

	  /* Gaya untuk tombol Kembali */
	  .btn-back {
            display: inline-block;
            padding: 8px 20px;
            background-color:  #272829;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn-back:hover {
            background-color: #aaa;
        }

	</style>
</head>

<body>
	<div class="container">
		<h1 class="judul">Login Buku Tahunan Siswa Elektronik</h1>
		<form action="<?php echo base_url('login/aksi_login'); ?>" method="post">
			<table style="border: none;"> <!-- Hapus border pada tabel -->
				<tr>
					<td><label for="nis" class="pesan">Masukkan NIS Anda</label></td>
				</tr>
				<tr>
					<td><input type="text" id="nis" name="nis"></td>
				</tr>
				<tr>
					<td><input type="submit" value="Login"></td>
				</tr>
				<tr>
					<td><a href="http://localhost/projek-bts/" class="btn-back">Kembali</a></td>
				</tr>

			</table>
		</form>
	</div>
</body>

</html>