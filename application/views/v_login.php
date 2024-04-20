<?php
// Cek apakah pengguna sudah login
if ($this->session->userdata('status') === 'login') {
    redirect('admin'); // Ganti 'admin/dashboard' dengan URL halaman yang diinginkan
}
?>

<!DOCTYPE html>
<html>

<head>
	<title>Form Login| Jurnalistik Smekensa</title>
	<link href="<?php echo base_url('assets/img/LOGO_JURNALISTIK.png'); ?>" rel="icon">
	<link href="<?php echo base_url('assets/img/LOGO_JURNALISTIK.png'); ?>" rel="apple-touch-icon">
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
			margin-bottom: 100px;
			margin-top: 50px;
			/* Posisi teks rata tengah */
		}

		form {
			width: 300px;
			/* Lebar form */
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
	</style>
</head>

<body>
	<h1>Form Login</h1>
	<form action="<?php echo base_url('login/aksi_login'); ?>" method="post">
		<table style="border: none;"> <!-- Hapus border pada tabel -->
			<tr>
				<td><label for="nis">Username</label></td>
			</tr>
			<tr>
				<td><input type="text" id="nis" name="nis"></td>
			</tr>
			<tr>
				<td><input type="submit" value="Login"></td>
			</tr>
		</table>
	</form>
</body>

</html>