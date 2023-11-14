<?php 
    include_once('config.php');

    $id = isset($_GET['id'])?$_GET['id']:"";
    if($id != ""){
        $del = $conn->prepare("DELETE FROM tblkelas WHERE id = ?");
        $del->bind_param("i", $id);
        $del->execute();
        if($del){
            ?>
            <script>
                alert('Hapus Berhasil');
                location.href='?hal.tampilkelas';
            </script>
        <?php
        }
    }
    $query = mysqli_query($conn, "select * from tblkelas order by nama_kelas asc");

?>
<a href="?hal=tambahkelas">Tambah Data Kelas</a>
<br>
<br>
<table border="1" cellspacing=0 cellpadding=0 width="80%">
    <tr>
        <th>No</th>
        <th>Nama Kelas</th>
        <th>Jurusan</th>
        <th>Edit</th>
        <th>Hapus</th>
    </tr>
    <?php
        $no=1;
        while($baris = mysqli_fetch_array($query)){
            ?>
                <tr>
                    <td><?=$no++?></td>
                    <td><?=$baris['nama_kelas']?></td>
                    <td><?=$baris['jurusan']?></td>
                <td>
                    <a href="?hal=editkelas&id=<?=$baris['id']?>">Edit</a>
                </td>
                <td>
                    <a href="?hal=tampilkelas&id=<?=$baris['id']?>" onclick="return confirm('Yakin akan dihapus?');">Hapus</a>
                </td>
            </tr>
        <?php
    }
        ?>
</table> 