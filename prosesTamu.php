<?php
    require_once "koneksi.php";

    // function check ($data, $input) {
    //     if (!isset($_POST[$input])) {
    //         echo $data . " Tidak boleh kosong.";
    //         exit();
    //     }
    // }

    // check ("Nama", "nama");
    // check ("No KTP", "no_ktp");
    // check ("No hp", "no_hp");
    // check ("Alamat", "alamat");

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

    $sql = "INSERT INTO tamu (nama, no_ktp, no_hp, alamat) VALUES ('$_POST[nama]', '$_POST[no_ktp]', '$_POST[no_hp]', '$_POST[alamat]')";
    if (mysqli_query($conn, $sql)) {
        header("refresh:1;url=tamu.php");
        echo "Data berhasil disimpan";
        // exit();
    } else {
        echo "Data gagal disimpan";
    }
?>