<?php
require 'koneksi.php';

$id= $_GET['hapus'];

if(isset($_GET['hapus'])){
$delete = mysqli_query($conn,"DELETE FROM produk WHERE id_produk = '$id'");


};

if($delete){
    echo"<script> alert('Data Berhasil Dihapus')</script>";
    header ("refresh:0;dataproduk.php");
}else{
    echo"<script> alert('Data Tidak Berhasil Dihapus')</script>";
    header ("refresh:0;dataproduk.php");
}
?>