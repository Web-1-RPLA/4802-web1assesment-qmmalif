<?php
    require_once "koneksi.php";

    if (!isset($_POST['nama'])) {
        echo "<p>Nama tidak boleh kosong.</p>";
        exit();
    }

    if (!isset($_POST['no_ktp'])) {
        echo "<p>Nomor KTP tidak boleh kosong.</p>";
        exit();
    }

    if (!isset($_POST['no_hp'])) {
        echo "<p>Nomor HP tidak boleh kosong.</p>";
        exit();
    }

    if (!isset($_POST['alamat'])) {
        echo "<p>Alamat tidak boleh kosong.</p>";
        exit();
    }

    $id = $_GET['id'];

    $sql = "UPDATE tamu SET nama='$_POST[nama]', no_hp='$_POST[no_hp]', no_ktp='$_POST[no_ktp]', alamat='$_POST[alamat]' WHERE id=" . $_GET['id'];

    if (mysqli_query($conn, $sql)) {
        header("refresh:1;url=tamu.php");
        echo "Data berhasil disimpan";
    } else {
        echo "Data gagal disimpan";
    }
?>