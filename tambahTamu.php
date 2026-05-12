<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title> 4902 607062500046 Qolbiyah Mualifah Muhammad </title>
    <style>
        body {font-family: Arial, sans-serif; background-color: #f8f1e9; margin:0; padding:0;}
        header {background-color: #8B4513; color: white; padding: 25px 0; text-align:center;}
        nav {background-color: #343a40; overflow:hidden;}
        nav a {float:left; display:block; color:white; padding:14px 20px; text-decoration:none;}
        nav a:hover {background-color:#ddd; color:black;}
        .content {text-align:center; margin-top:60px; padding:20px;}
        footer {background-color:#343a40; color:white; padding:12px; text-align:center; position:fixed; bottom:0; width:100%;}
    </style>
</head>
<body>
    <header><h1>Hotel D3 RPLA Telkom University</h1></header>
    <nav>
        <a href="tamu.php">Tamu</a>
    </nav>
    <div class="content">
        <h2>Tambah Tamu Baru</h2>
        <form action="prosesTamu.php" method="POST">
            Nama Lengkap: <input type="text" name="nama" id=""><br>
            No KTP: <input type="text" name="no_ktp" id=""><br>
            No HP: <input type="text" name="no_hp" id=""><br>
            Alamat: <input type="text" name="alamat" id=""><br>
            <input type="submit" value="Simpan">
            <a href="tamu.php">Batal</a>
        </form>
    </div>
    <footer><p>&copy; 2026 D3 RPLA Telkom University</p></footer>
</body>
</html>