<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url('assets/img/LOGO_JURNALISTIK.png'); ?>" rel="icon">
    <link href="<?php echo base_url('assets/img/LOGO_JURNALISTIK.png'); ?>" rel="apple-touch-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Welcome to Download</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            /* Font untuk teks */
            background-color: #f0f0f0;
            /* Warna latar belakang */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            /* Mengatur konten ke tengah secara horizontal */
            align-items: center;
            /* Mengatur konten ke tengah secara vertikal */
            min-height: 100vh;
        }

        h1 {
            text-align: center;
            /* Posisi teks rata tengah */
            margin-top: 50px;
            /* Margin atas */
            color: #333;
            /* Warna teks */
            font-size: 2rem;
        }

        .container {
            max-width: 960px;
            /* Lebar maksimum container */
            margin: 0 auto;
            /* Posisi di tengah halaman */
            padding: 100px;
            /* Padding */
            background-color: #fff;
            /* Warna latar belakang */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            /* Shadow untuk efek depth */
            text-align: center;
            /* Menengahkan konten di dalam container */
        }

        .welcome-message {
            text-align: center;
            /* Posisi teks rata tengah */
            margin-top: 20px;
            /* Margin atas */
            color: #555;
            /* Warna teks */
            margin-bottom: 50px;
        }

        .btn-container {
            margin-top: 20px;
            /* Spasi antara tombol */
        }

        .download-btn,
        .logout-btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            margin-right: 10px;
            transition: background-color 0.3s ease;
        }

        .download-btn:hover,
        .logout-btn:hover {
            background-color: #fff;
        }

                /* Media queries untuk tampilan layar kecil */
            @media screen and (max-width: 768px) {
            h1 {
                font-size: 1.5rem;
                /* Ukuran teks h1 pada layar kecil */
            }

            .container {
                padding: 50px;
                /* Padding pada layar kecil */
            }

            .welcome-message {
                margin-bottom: 20px;
                /* Margin bawah pada layar kecil */
            }

            .download-btn,
            .logout-btn {
                padding: 8px 16px;
                /* Ukuran tombol pada layar kecil */
            }
        }

    </style>
</head>

<body>
    <div class="container">
        <h1 class="selamat">Selamat datang di Buku Tahunan siswa Elektronik</h1>
        <div class="welcome-message">
            <?php
            // Ambil data nama pengguna dari session
            $nama_pengguna = $this->session->userdata('nama');
            echo "Halo, $nama_pengguna. Klik Download untuk mengakses file secara offline";
            ?>
        </div>

        <div class="btn-container">
            <a href="<?php echo base_url('assets/file/dwn.pdf'); ?>" class="download-btn" download="buku tahunan siswa">Download</a>
            <a href="<?php echo base_url('login/logout'); ?>" class="logout-btn">Logout</a>
        </div>
        <!-- Tambahkan konten atau fitur lainnya di sini -->
    </div>
</body>

</html>