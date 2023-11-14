<?php
include_once('config.php');
if(isset($_POST['tambah'])){
    extract($_POST);
    foreach($siswa as $id){
        mysqli_query($conn,"insert into tblsetkelas values(null, '$id','$kelas','$tahun')");
    }
    echo "<script>alert('proses berhasil');location.href='?hal=setkelas';</script>";
}
?>