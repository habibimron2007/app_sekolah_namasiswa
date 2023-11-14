<?php
    include_once('config.php');
    $tahun = isset($_GET['tahun'])?$_GET['tahun']:"";
    $bulan = isset($_GET['bulan'])?$_GET['bulan']:"";
    $kelas = isset($_GET['kelas'])?$_GET['kelas']:"";
    if($kelas != "" && $bulan != "" && $kelas != ""){
        $ambilkelas = mysqli_query($conn,"select * from tblkelas where id=$kelas");
        $datakelas = mysqli_fetch_array($ambilkelas);
        $sql = mysqli_query($conn, "select a.nama_siswa, b.nama_kelas from tblsiswa a, tblkelas b, tblsetkelas c where a.id=c.idsiswa AND b.id=c.idkelas AND b.id=$kelas order by a.nama_siswa ASC");
        $jumhari = cal_days_in_month(CAL_GREGORIAN,$bulan,$tahun);
        $header = "";
        $data = "";
        for($i=1;$i<=$jumhari;$i++){
            $header = $header."<th width='2%'>$i</th>";
            $data = $data."<td>&nbsp;</td>";
        }
?>
    <table>
        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td><?=$datakelas['nama_kelas']?></td>
        </tr>
        <tr>
            <td>Bulan</td>
            <td>:</td>
            <td>
                <?php
                    switch($bulan){
                        case 1 :
                            echo "Januari";
                            break;
                        case 2 :
                            echo "Februari";
                            break;
                        case 3 :
                            echo "Maret";
                            break;
                        case 4 :
                            echo "April";
                            break;
                        case 5 :
                            echo "Mei";
                            break;
                        case 6 :
                            echo "Juni";
                            break;
                        case 7 :
                            echo "Juli";
                            break;
                        case 8 :
                            echo "Agustus";
                            break;
                        case 9 :
                            echo "September";
                            break;
                        case 10 :
                            echo "Oktober";
                            break;
                        case 11 :
                            echo "November";
                            break;
                        case 12 :
                            echo "Desember";
                            break;
                    }
                ?>
                <?=$tahun?>
            </td>
        </tr>
    </table>
    <table border="1" cellspacing=0 cellpadding=0 width="100%">
        <tr>
            <th width="2%">No</th>
            <th>Nama Siswa</th>
            <?=$header?>
        </tr>
        <?php
            $no=1;
            while($row=mysqli_fetch_array($sql)){
                ?>
                <tr>
                    <td align="center"><?=$no++?></td>
                    <td><?=$row['nama_siswa']?></td>
                    <?=$data?>
                </tr>
                <?php
            }
        ?>
    </table>
<?php
    }else{
        echo "Data tidak dapat ditampilkan";
    }
?>
<script>
    window.print();
</script>
