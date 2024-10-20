<?php
include 'db.php';

// Memastikan ID peserta diambil dari URL dan valid
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0; // Pastikan id adalah integer

$query = "SELECT * FROM participants WHERE id = $id";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);

// Memastikan data peserta ditemukan
if (!$data) {
    die("Peserta tidak ditemukan."); // Pesan kesalahan jika tidak ada data
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $institution = $_POST['institution'];
    $country = $_POST['country'];
    $address = $_POST['address'];

    // Validasi input untuk menghindari SQL injection
    $name = mysqli_real_escape_string($conn, $name);
    $email = mysqli_real_escape_string($conn, $email);
    $institution = mysqli_real_escape_string($conn, $institution);
    $country = mysqli_real_escape_string($conn, $country);
    $address = mysqli_real_escape_string($conn, $address);

    // Update query untuk menyimpan semua data
    $query = "UPDATE participants SET name='$name', email='$email', institution='$institution', country='$country', address='$address' WHERE id=$id";

    // Eksekusi query dan periksa kesalahan
    if (mysqli_query($conn, $query)) {
        header("Location: admin.php");
        exit(); // Pastikan untuk menghentikan script setelah redirect
    } else {
        echo "Error: " . mysqli_error($conn); // Tampilkan kesalahan jika update gagal
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Peserta</title>
</head>
<body>
    <h1>Edit Peserta</h1>
    <form action="" method="post">
        <label>Nama:</label><br>
        <input type="text" name="name" value="<?php echo htmlspecialchars($data['name']); ?>" required><br>
        <label>Email:</label><br>
        <input type="email" name="email" value="<?php echo htmlspecialchars($data['email']); ?>" required><br>
        <label>Institusi:</label><br>
        <input type="text" name="institution" value="<?php echo htmlspecialchars($data['institution']); ?>" required><br>
        <label>Country:</label><br>
        <input type="text" name="country" value="<?php echo htmlspecialchars($data['country']); ?>" required><br>
        <label>Address:</label><br>
        <input type="text" name="address" value="<?php echo htmlspecialchars($data['address']); ?>" required><br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>
