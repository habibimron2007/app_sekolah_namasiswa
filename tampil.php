<?php
include_once('config.php');

$sql = mysqli_query($conn,"select * from tblsiswa order by nama_siswa ASC");
?>
<!DOCTYPE html>
<html>
    <head>
        <title> CRUD PHP dan MYSQL</title>
    </head>
    <body>
        
        <a href="?hal=tambah">tambah data</a><br><br>

        <table border=1 width="80%" cellspacing=0>
            <tr>
                <th>NO</th>
                <th>NIS</th>
                <th>NISN</th>
                <th>NAMA SISWA</th>
                <th>ALAMAT</th>
                <th>HP</th>
                <th>AGAMA</th>
                <th>JENIS KELAMIN</th>
                <th>EDIT</th>
                <th>HAPUS</th>
            </tr>
            <?php
            $no= 1;
            while($baris=mysqli_fetch_array($sql)){
                ?>
                <tr>
                    <td><?=$no++?></td>
                    <td><?=$baris['nis']?></td>
                    <td><?=$baris['nisn']?></td>
                    <td><?=$baris['nama_siswa']?></td>
                    <td><?=$baris['alamat']?></td>
                    <td><?=$baris['hp']?></td>
                    <td><?=$baris['agama']?></td>
                    <td><?=$baris['jk']?></td>
                    <td><a href="?hal=edit&id=<?=$baris['id']?>">Edit</a></td>
                    <td><a href="?hal=hapus&id=<?=$baris['id']?>" onclick="return confirm('yakin akan dihapus')">Hapus</a></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>