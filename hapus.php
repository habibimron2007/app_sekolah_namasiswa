<?php
    include_once('config.php');
    $id = isset($_GET['id'])?$_GET['id']:"";
    $hapus = mysqli_query($conn, "delete from tblsiswa where id=$id");
    if($hapus){
        echo "<script>alert('hapus berhasil');location.href='?hal=tampil';</script>";
    }
?>