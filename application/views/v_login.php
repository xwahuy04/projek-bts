<!DOCTYPE html>
<html>

<head>
	<title>Form Login | Buku  Tahunan Siswa</title>
	<link href="<?php echo base_url('assets/img/LOGO_JURNALISTIK.png'); ?>" rel="icon">
	<link href="<?php echo base_url('assets/img/LOGO_JURNALISTIK.png'); ?>" rel="apple-touch-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		body {
			background: url(<?php echo base_url('assets/img/background.png'); ?>);
			background-position: center;
			background-size:cover;
			display:flex;
			justify-content: center;
			align-items: center;
			font-family: Arial, sans-serif;
			min-height: 100vh;
			margin: 0;
			padding: 0;
		}

		.container {
			max-width: 960px;
			margin: 0 auto;
			padding: 100px;
			background-color: rgba(255, 255, 255, 0.80);
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
			text-align: center;
		}

		h1 {
			text-align: center;
			margin-bottom: 50px;
			margin-top: 20px;
		}

		form {
			max-width: 400px;
			margin: 20px auto;
			padding: 20px;

			border-radius: 5px;
		}

		table {
			width: 100%;
			border-collapse: collapse;
		}

		table td {
			padding: 10px;
			border: none;
		}

		input[type="text"] {
			width: calc(100% - 20px);
			padding: 8px;
			margin-bottom: 10px;
			box-sizing: border-box;
			border-radius: 5px;
			text-align: center;
		}

		input[type="submit"] {
			width: 100%;
			padding: 8px;
			background-color: #000ff0;
			color: #fff;
			border: none;
			cursor: pointer;
		}

		input[type="submit"]:hover {
			background-color: #000ff0;
		}

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
			<table style="border: none;"> 
				<tr>
					<td><label for="nis" class="pesan">Masukkan NIS Anda</label></td>
				</tr>
				<tr>
					<td><input type="text" id="nis" name="nis" placeholder="NIS"></td>
				</tr>
				<tr>
					<td><input type="submit" value="Login"></td>
				</tr>
				<tr>
					<td><a href="../projek-bts/" class="btn-back">Kembali</a></td>
				</tr>

			</table>
		</form>
	</div>
</body>

</html>