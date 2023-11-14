<?php
    include_once('config.php');
    if(isset($_POST['simpan'])){
        extract($_POST);
        if($password1 == $password2){

            $pass = password_hash($password1,PASSWORD_DEFAULT);
            $insert = mysqli_query($conn, "insert into tbluser values(null, '$nama','$username','$pass')");
            if($insert){
                echo "<script>alert('simpan berhasil');location.href='?hal=tampiluser';</script>";
            }
        }else{

            echo "<script>('password tidak sama!!!');location.href='?hal=tambahuser';</script>";
        }
    }
?>
<form action="?hal=tambahuser" method="post">
    <table>
        <tr>
            <td>Nama User</td>
            <td>
                <input type="text" name="nama" placeholder="Nama User" required>
            </td>
        </tr>
        <tr>
            <td>Username</td>
            <td>
                <input type="text" name="username" placeholder="Username" required>
            </td>
        </tr>
        <tr>
            <td>Password</td>
            <td>
                <input type="password" name="password1" placeholder="Password" required>
            </td>
        </tr>
        <tr>
            <td>Konfirmasi Password</td>
            <td>
                <input type="password" name="password2" placeholder="Password" required>
            </td>
        </tr>
        <tr>
            <td>
                <button type="submit" name="simpan" value="simpan">Simpan</button>
            </td>
            <td>
                <button type="reset">Reset</button>
            </td>
        </tr>
    </table>
</form>