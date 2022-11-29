<?php
require 'koneksi.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Produk</title>
</head>
<body>
    <h2  align="center">Data Produk</h2>
    <h5 align="center"><a href="tambahproduk.php" style="padding:10px;background-color:#434242;color:#fff;border-radius:4px;align-item:center;text-decoration:none;">Tambah Data</a></h5>
    <table border="1" align="center" cellspacing="0"  width="70%">
        <tr style="text-align:center; font-weight:bold;background-color:#eee;">
            <td>No</td>
            <td>Nama Produk</td>
            <td>Harga</td>
            <td>Stok</td>
            <td>Foto</td>
            <td>Deskripsi</td>
            <td>Aksi</td>
        </tr>

        <?php
        $no = 1;
        $select = mysqli_query($conn, "SELECT * FROM produk");
        while($hasil = mysqli_fetch_array($select)){
        ?>
        <tr style="text-align:center;">
            <td><?php echo $no++?></td>
            <td><?php echo $hasil['nama_produk']?></td>
            <td><?php echo $hasil['harga_jual']?></td>
            <td><?php echo $hasil['stok']?></td>
            <td><?php echo $hasil['foto']?></td>
            <td><?php echo $hasil['deskripsi']?></td>
            <td>
                <a href="editproduk.php">Edit</a> 
                <a href= "deleteproduk.php?hapus=<?php echo $hasil['id_produk']; ?>">Hapus</a>
            </td>
        </tr>
        <?php }?>

    </table>
</body>
</html>