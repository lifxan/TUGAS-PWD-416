<?php
include 'db.php';

$id = $_GET['id'];
$query = "DELETE FROM participants WHERE id = $id";
mysqli_query($conn, $query);

header("Location: admin.php");
mysqli_close($conn);
?>
