<?php
    include_once('config.php');
    //ini proses select data
    $id = isset($_GET['id'])?$_GET['id']:"";
    if($id !=""){
        $sel = mysqli_query($conn, "select * from tblkelas where id=$id");
        $data = mysqli_fetch_array($sel);
    }

    //ini proses update data
    if(isset($_POST['update'])){
        extract($_POST);
        $up = mysqli_query($conn, "update tblkelas set nama_kelas='$nama_kelas', jurusan='$jurusan' where id=$id");
        if($up){
            ?>
                <script>
                    alert("Update Berhasil");
                    location.href='?hal=tampilkelas';
                </script>
            <?php
        }
    }
?>
<a href="?hal=tampilkelas">Kembali ke Tampil Kelas</a>
<br>
<br>
<form action="?hal=editkelas" method="post">
    <table>
        <input type="hidden" name="id" value="<?=$data['id']?>">
        <tr>
            <td>Nama Kelas</td>
            <td>
                <input type="text" value="<?=$data['nama_kelas']?>" name="nama_kelas" placeholder="Nama Kelas" required>
            </td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>
                <select name="jurusan" required>
                    <option value="">==pilih jurusan==</option>
                    <option <?=$data['jurusan']=="RPL"?'selected':''?> value="RPL">Rekayasa Perangkat Lunak</option>
                    <option <?=$data['jurusan']=="DKV"?'selected':''?> value="DKV">Desain Komunikasi Visual</option>
                    <option <?=$data['jurusan']=="MP"?'selected':''?> value="MP">Manajemen Perkantoran</option>
                    <option <?=$data['jurusan']=="AK"?'selected':''?> value="AK">Akuntansi</option>
                    <option <?=$data['jurusan']=="BD"?'selected':''?> value="BD">Bisnis Digital</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <button type="submit" name="update" value="simpan">Simpan</button>
            </td>
            <td>
                <button type="reset">Reset</button>
            </td>
        </tr>
    </table>
</form>