<!DOCTYPE html> 
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Peserta</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f9f9f9; /* Warna latar belakang yang lembut */
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }
        .container {
            background-color: white; /* Latar belakang kontainer putih */
            padding: 3rem; /* Meningkatkan padding kontainer */
            border-radius: 15px; /* Border radius untuk efek lembut */
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); /* Bayangan lembut */
            max-width: 600px; /* Lebar maksimal kontainer ditingkatkan */
            width: 100%; /* Lebar responsif */
        }
        h1 {
            color: #4A4E69; /* Warna judul yang lembut */
            text-align: center;
            margin-bottom: 1.5rem; /* Jarak bawah judul */
        }
        label {
            font-weight: bold; /* Label tebal */
            color: #4A4E69; /* Warna label */
        }
        input[type="text"],
        input[type="email"],
        input[type="text"],
        select {
            border: 1px solid #ccc; /* Border input */
            border-radius: 5px; /* Border radius untuk input */
            padding: 0.8rem; /* Meningkatkan spasi dalam input */
            width: 100%; /* Lebar penuh */
            margin-bottom: 1.5rem; /* Meningkatkan jarak bawah input */
        }
        input[type="submit"] {
            background-color: #9A8C98; /* Warna tombol */
            color: white; /* Warna teks tombol */
            border: none; /* Tanpa border */
            padding: 1rem 1.5rem; /* Meningkatkan spasi dalam tombol */
            border-radius: 30px; /* Border radius untuk tombol */
            cursor: pointer; /* Kursor pointer saat hover */
            transition: background-color 0.3s ease; /* Transisi hover */
            width: 100%; /* Lebar penuh */
            font-size: 1.1rem; /* Ukuran font tombol ditingkatkan */
            margin-top: 1rem; /* Jarak atas untuk tombol daftar */
        }
        input[type="submit"]:hover {
            background-color: #C9ADA7; /* Warna hover tombol */
        }
        .btn-back {
            display: block; /* Menjadikan tombol kembali menjadi block */
            text-align: center; /* Menengahkan teks */
            margin-top: 1.5rem; /* Jarak atas untuk tombol kembali */
            color: #4A4E69; /* Warna teks tombol kembali */
            text-decoration: none; /* Menghapus garis bawah */
            font-weight: bold; /* Menebalkan teks tombol kembali */
        }
        .btn-back:hover {
            text-decoration: underline; /* Menambahkan garis bawah saat hover */
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Pendaftaran Peserta</h1>
        <form action="process.php" method="post">
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="institution">Institusi:</label>
            <input type="text" id="institution" name="institution" required>
            
            <label for="country">Negara:</label>
            <input type="text" id="country" name="country" required>

            <label for="address">Alamat:</label>
            <input type="text" id="address" name="address" required>

            <input type="submit" value="Daftar">
        </form>
        <a href="index.html" class="btn-back">Kembali ke Halaman Utama</a> <!-- Button to go back -->
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
