<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url('assets/img/LOGO_JURNALISTIK.png'); ?>" rel="icon">
    <link href="<?php echo base_url('assets/img/LOGO_JURNALISTIK.png'); ?>" rel="apple-touch-icon">
    <title>Welcome to Download</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            /* Font untuk teks */
            background-color: #f0f0f0;
            /* Warna latar belakang */
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            /* Posisi teks rata tengah */
            margin-top: 50px;
            /* Margin atas */
            color: #333;
            /* Warna teks */
        }

        .container {
            max-width: 960px;
            /* Lebar maksimum container */
            margin: 0 auto;
            /* Posisi di tengah halaman */
            padding: 20px;
            /* Padding */
            background-color: #fff;
            /* Warna latar belakang */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            /* Shadow untuk efek depth */
        }

        .welcome-message {
            text-align: center;
            /* Posisi teks rata tengah */
            margin-top: 20px;
            /* Margin atas */
            color: #555;
            /* Warna teks */
        }

        .logout-link {
            display: block;
            /* Menjadikan tautan sebagai blok */
            text-align: center;
            /* Posisi teks rata tengah */
            margin-top: 20px;
            /* Margin atas */
        }

        .logout-link a {
            color: #007bff;
            /* Warna tautan */
            text-decoration: none;
            /* Hapus garis bawah */
        }

        .logout-link a:hover {
            text-decoration: underline;
            /* Tambahkan garis bawah saat dihover */
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Selamat datang di Admin Panel</h1>
        <div class="welcome-message">
            <?php
            // Ambil data nama pengguna dari session
            $nama_pengguna = $this->session->userdata('nama');
            echo "Halo, $nama_pengguna. Selamat datang!";
            ?>
        </div>

        <div class="logout-link">
            <a href="<?php echo base_url('login/logout'); ?>">Logout</a>
        </div>
        <!-- Tambahkan konten atau fitur lainnya di sini -->
    </div>
</body>

</html>