<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Cek username dan password (sederhana)
    if ($_POST['username'] === 'admin' && $_POST['password'] === 'admin') {
        $_SESSION['loggedin'] = true;
    } else {
        die('Login gagal');
    }
}

if (!isset($_SESSION['loggedin'])) {
    die('Silakan login terlebih dahulu.');
}

// Proses pendaftaran peserta
if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $institution = $_POST['institution'];
    $country = $_POST['country'];
    $address = $_POST['address'];

    // Prepare and execute the query to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO participants (name, email, institution, country, address) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $email, $institution, $country, $address);
    $stmt->execute();

    // Close the statement
    $stmt->close();
}

// Ambil data peserta
$query = "SELECT * FROM participants";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Peserta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f9f9f9; /* Warna latar belakang yang lembut */
            font-family: 'Poppins', sans-serif;
        }
        .container {
            max-width: 800px; /* Lebar maksimal kontainer */
            margin: 2rem auto; /* Margin atas dan bawah, serta tengah */
            background-color: white; /* Latar belakang kontainer putih */
            padding: 2rem; /* Padding kontainer */
            border-radius: 15px; /* Border radius untuk efek lembut */
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); /* Bayangan lembut */
        }
        h1 {
            color: #4A4E69; /* Warna judul yang lembut */
            text-align: center;
            margin-bottom: 1.5rem; /* Jarak bawah judul */
        }
        table {
            width: 100%; /* Lebar tabel penuh */
            margin-top: 1.5rem; /* Jarak atas untuk tabel */
            border-collapse: collapse; /* Menghapus spasi antar sel */
        }
        th, td {
            border: 1px solid #ccc; /* Border untuk sel */
            padding: 1rem; /* Spasi dalam sel */
            text-align: left; /* Rata kiri untuk teks */
        }
        th {
            background-color: #9A8C98; /* Warna latar belakang untuk header */
            color: white; /* Warna teks header */
        }
        a {
            color: #4A4E69; /* Warna link */
            text-decoration: none; /* Menghapus garis bawah */
        }
        a:hover {
            text-decoration: underline; /* Garis bawah saat hover */
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
        <h1>Data Peserta</h1>
        <table>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Institusi</th>
                <th>Country</th>
                <th>Address</th>
                <th>Aksi</th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?php echo htmlspecialchars($row['name']); ?></td>
                <td><?php echo htmlspecialchars($row['email']); ?></td>
                <td><?php echo htmlspecialchars($row['institution']); ?></td>
                <td><?php echo htmlspecialchars($row['country']); ?></td>
                <td><?php echo htmlspecialchars($row['address']); ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                    <a href="delete.php?id=<?php echo $row['id']; ?>">Hapus</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </table>
        <a href="index.html" class="btn-back">Kembali ke Halaman Utama</a> <!-- Button to go back -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
