<?php
    include 'riwayat.php';
    $id = $_GET['id'];

    $result = mysqli_query($conn, "DELETE FROM riwayat WHERE id_riwayat= '{$id}'");

    header('location: riwayat.php');
?>
