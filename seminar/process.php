<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $institution = $_POST['institution'];
    $country = $_POST['country'];
    $address = $_POST['address'];

    // Prepare and execute the query to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO participants (name, email, institution, country, address) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $email, $institution, $country, $address);
    $stmt->execute();

    // Check if the query was successful
    if ($stmt->affected_rows > 0) {
        $message = "Pendaftaran Berhasil!";
    } else {
        $message = "Pendaftaran Gagal. Silakan coba lagi.";
    }

    // Close the statement
    $stmt->close();
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Peserta</title>
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
            text-align: center; /* Menyelaraskan teks di tengah */
        }
        h1 {
            color: #4A4E69; /* Warna judul yang lembut */
            margin-bottom: 1.5rem; /* Jarak bawah judul */
        }
        p {
            color: #333; /* Warna teks biasa */
            margin-bottom: 1rem; /* Jarak bawah paragraf */
        }
        a {
            color: #9A8C98; /* Warna link */
            text-decoration: none; /* Menghapus garis bawah */
        }
        a:hover {
            text-decoration: underline; /* Garis bawah saat hover */
        }
    </style>
</head>
<body>

    <div class="container">
        <?php if (isset($message)): ?>
            <h1><?php echo $message; ?></h1>
            <p>Nama: <?php echo htmlspecialchars($name); ?></p>
            <p>Email: <?php echo htmlspecialchars($email); ?></p>
            <p>Institusi: <?php echo htmlspecialchars($institution); ?></p>
            <p>Country: <?php echo htmlspecialchars($country); ?></p>
            <p>Address: <?php echo htmlspecialchars($address); ?></p>
            <p><a href="index.html">Kembali ke Halaman Utama</a></p> <!-- Link back to the main page -->
        <?php else: ?>
            <h1>Pendaftaran Gagal</h1>
            <p>Silakan coba lagi.</p>
            <p><a href="index.html">Kembali ke Halaman Utama</a></p> <!-- Link back to the main page -->
        <?php endif; ?>
        
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
