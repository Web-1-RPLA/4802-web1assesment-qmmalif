<?php 
    require_once "koneksi.php";

    $sql = "SELECT * FROM kamar";
    $result = mysqli_query($conn, $sql);
?>

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
        table{
            width:100%;
            border-collapse: collapse;
        }

        th, td{
            border:1px solid #ddd;
            padding:10px;
        }

        th{
            background:#8B4513;
            color:white;
        }

        a{
            text-decoration:none;
        }
        .content {text-align:center; margin-top:60px; padding:20px;}
        footer {background-color:#343a40; color:white; padding:12px; text-align:center; position:fixed; bottom:0; width:100%;}
    </style>
    <script>
        function confirmDelete(id){
                if (confirm("Hapus data ini?") == true) {
                    window.location.href = "hapustamu.php?id=" + id;
                }
        }
    </script>
</head>
<body>
    <header><h1>Hotel D3 RPLA Telkom University</h1></header>
    <nav>
        <a href="index.php">Home</a>
        <a href="tambahkamar.php">Tambah Kamar</a>
    </nav>
    <div class="content">
        <h2>Data Kamar</h2>
        <table>
            <?php 
                if (mysqli_num_rows($result) < 1) {
                    echo "Belum ada data kamar.";
                }
                else {
                    echo "<thead>
                    <tr>
                            <th>ID</th>
                            <th>Nomor Kamar</th>
                            <th>Tipe</th>
                            <th>Harga/Malam</th>
                            <th>Status</th>
                            <th>Aksi</th>
                            </tr>
                            </thead>";
                while ($row = mysqli_fetch_assoc($result)) {
                echo "<tbody>                    
                    <tr>
                    <td>$row=['id']</td>
                    <td>$row=['no_kamar']</td>
                    <td>$row=['tipe_kamar']</td>
                    <td>$row=['harga_per_malam']</td>
                    <td>$row=['status']</td>
                    <td>
                            <a href='editkamar.php?id=$row[id]'>Edit</a>
                            <a href='#' onclick='confirmDelete($row[id])'>Hapus</a>
                    </td>
                    </tr>
                </tbody>";
                };
                };
            ?>
        </table>
    </div>
    <footer><p>&copy; 2026 D3 RPLA Telkom University</p></footer>
</body>
</html>