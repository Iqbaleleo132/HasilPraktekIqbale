<?php
require 'koneksi.php';
$data_edit = mysqli_query($conn, "SELECT * FROM produk WHERE id_produk = $_GET[edit]");
$result = mysqli_fetch_array($data_edit);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h2>Edit Data Produk</h2>
    <h5><a href="dataproduk.php" style="padding:10px;background-color:#434242;color:#fff;border-radius:4px;text-decoration:none;">Tampilan Produk</a></h5>
    <form action="" method="POST">
        <table>
        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td><input type="text" name="nama_produk" id="" value="<?php echo $result['nama_produk'] ?>" require></td>
        </tr>
        <tr>
            <td>Harga Jual</td>
            <td>:</td>
            <td><input type="text" name="harga_jual" id="" value="<?php echo $result['harga_jual'] ?>"  require></td>
        </tr>
        <tr>
            <td>Stok</td>
            <td>:</td>
            <td><input type="text" name="stok" id="" value="<?php echo $result['stok'] ?>"  require></td>
        </tr>
        <tr>
            <td>foto</td>
            <td>:</td>
            <td><input type="file" name="foto" enctype='multipart/form-data' id="" value="<?php echo $result['foto'] ?>"  require></td>
        </tr>
        <tr>
            <td>Deskripsi</td>
            <td>:</td>
            <td><input type="text" name="deskripsi" id="" value="<?php echo $result['deskripsi'] ?>"  require></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="edit" id=""></td>
        </tr>
        </table>
    </form>

    <?php
    include 'koneksi.php';
    require 'koneksi.php';

        if(isset($_POST['edit'])){


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
        $Update = "UPDATE produk SET '$namaproduk', '$harga', '$stok', '$foto','$deskripsi' WHERE id_produk = $_GET[edit]";
        return mysqli_affected_rows($conn);

        if($Update){
            echo"<script> alert('Berhasil Update')</script>";
            header ("refresh:0;dataproduk.php");
        }else{
            echo"<script> alert('Gagal Update')</script>";
            header ("refresh:0;dataproduk.php");
        }

    };
    ?>
</body>
</html>