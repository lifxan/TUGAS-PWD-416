<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
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
            padding: 3rem; /* Padding kontainer */
            border-radius: 15px; /* Border radius untuk efek lembut */
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); /* Bayangan lembut */
            max-width: 500px; /* Lebar maksimal kontainer */
            width: 100%; /* Lebar responsif */
        }
        h1 {
            color: #4A4E69; /* Warna judul yang lembut */
            text-align: center;
            margin-bottom: 2rem; /* Jarak bawah judul diperbesar */
        }
        label {
            font-weight: bold; /* Label tebal */
            color: #4A4E69; /* Warna label */
        }
        input[type="text"],
        input[type="password"] {
            border: 1px solid #ccc; /* Border input */
            border-radius: 5px; /* Border radius untuk input */
            padding: 0.8rem; /* Spasi dalam input */
            width: 100%; /* Lebar penuh */
            margin-bottom: 1.5rem; /* Jarak bawah input */
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
        <h1>Login Admin</h1>
        <form action="admin.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            
            <input type="submit" value="Login">
        </form>
        <a href="index.html" class="btn-back">Kembali ke Halaman Utama</a> <!-- Button to go back -->
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
