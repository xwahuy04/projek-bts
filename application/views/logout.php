<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <style>
        body {
            font-family: Arial, sans-serif; /* Font untuk teks */
            background-color: #f0f0f0; /* Warna latar belakang */
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 960px; /* Lebar maksimum container */
            margin: 0 auto; /* Posisi di tengah halaman */
            padding: 20px; /* Padding */
            background-color: #fff; /* Warna latar belakang */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Shadow untuk efek depth */
            text-align: center; /* Posisi teks rata tengah */
        }

        h1 {
            color: #333; /* Warna teks */
        }

        .logout-message {
            margin-top: 20px; /* Margin atas */
            color: #555; /* Warna teks */
        }

        .back-link {
            display: block; /* Menjadikan tautan sebagai blok */
            margin-top: 20px; /* Margin atas */
            text-align: center; /* Posisi teks rata tengah */
        }

        .back-link a {
            color: #007bff; /* Warna tautan */
            text-decoration: none; /* Hapus garis bawah */
        }

        .back-link a:hover {
            text-decoration: underline; /* Tambahkan garis bawah saat dihover */
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Logout Berhasil</h1>
        <div class="logout-message">
            Anda telah berhasil logout dari Admin Panel.
        </div>
        <div class="back-link">
            <a href="<?php echo base_url(); ?>">Kembali ke Halaman Utama</a>
        </div>
    </div>
</body>

</html>
