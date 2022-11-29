
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Tambah Data</h2>
    <h5><a href="dataproduk.php" style="padding:10px;background-color:#434242;color:#fff;border-radius:4px;text-decoration:none;">Tampilkan Data Produk</a></h5>
    <form action="" method="POST">
        <table>
        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td><input type="text" name="nama_produk" id="" require></td>
        </tr>
        <tr>
            <td>Harga Jual</td>
            <td>:</td>
            <td><input type="text" name="harga_jual" id="" require></td>
        </tr>
        <tr>
            <td>Stok</td>
            <td>:</td>
            <td><input type="text" name="stok" id="" require></td>
        </tr>
        <tr>
            <td>foto</td>
            <td>:</td>
            <td><input type="file" name="foto" enctype='multipart/form-data' id="" require></td>
        </tr>
        <tr>
            <td>Deskripsi</td>
            <td>:</td>
            <td><input type="text" name="deskripsi" id="" require></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="simpan" id=""></td>
        </tr>
        </table>
    </form>

    <?php
    include 'koneksi.php';
    require 'koneksi.php';

        if(isset($_POST['simpan'])){


        // $insert = mysqli_query($conn, "INSERT INTO produk VALUES 
        // ('".$_POST['nama_produk']."', 
        // '".$_POST['harga_jual']."',
        // '".$_POST['stok']."',
        // '".$_POST['foto']."',
        // '".$_POST['deskripsi']."')");

        $namaproduk = $_POST["nama_produk"];
        $harga = $_POST["harga_jual"];
        $stok = $_POST["stok"];
        $foto = $_POST["foto"];
        $deskripsi = $_POST["deskripsi"];
        $query = "INSERT INTO produk VALUES(NULL, '$namaproduk', '$harga', '$stok', '$foto','$deskripsi')";
        $insert = mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);

    };
    ?>
</body>
</html>