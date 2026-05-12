<?php
    require_once "koneksi.php";

    if (!isset($_POST['nomor_kamar'])) {
        echo "<p>Nomor Kamar tidak boleh kosong.</p>";
        exit();
    }

    if (!isset($_POST['tipe_kamar'])) {
        echo "<p>Tipe kamar tidak boleh kosong.</p>";
        exit();
    }

    if (!isset($_POST['harga_per_malam'])) {
        echo "<p>Harga per malam tidak boleh kosong.</p>";
        exit();
    }

    $sql = "INSERT INTO kamar (nomor_kamar, tipe_kamar, harga_per_malam) VALUES ('$_POST[nomor_kamar]', '$_POST[tipe_kamar]', '$_POST[harga_per_malam]')";
    if (mysqli_query($conn, $sql)) {
        header("refresh:1;url=kamar.php");
        echo "Data berhasil disimpan";
        // exit();
    } else {
        echo "Data gagal disimpan";
    }
?>