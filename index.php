<?php
      session_start();
    if(empty($_SESSION['username'])){
    header('location:login.php');
                    }
?>
<html>
    <head>
        <title>Web Sekolah</title>
        <style>
            .header{
                width: 100%;
                height: 40px;
                background-color: #8D94BA;
            }
            .sidebar{
                min-height: 400px;
                width: 20%;
                background-color: #A0CFD3;
                float: left;
            }
            .content{
                min-height: 400px;
                width: 79%;
                background-color: #B4EDD2;
                float: right;
            }
            .sidebar ul{
                list-style-type: none;
                padding: 0;
            }
            .sidebar li{
                padding: 0px;
                text-align: center;
                border-bottom: 1px solid #FFF;
            }
            .sidebar a{
                text-decoration: none;
                color: white;
                display: block;
                padding-top: 20px;
                padding-bottom: 20px;
                background-color: #9A7AA0;
            }
            .content a{
                padding: 3px;
                background-color: #278FDF;
                color: #FFF;
                text-decoration: none;
                border-radius: 2px;
            }
            .content table tr{
                height: 30px;
            }
        </style>
    </head>
    <body>
        <div class="header">

        </div>
        <div class="sidebar">
            <ul>
                <li>
                    <a href="?hal=tampil">Data Siswa</a>
                </li>
                <li>
                    <a href="?hal=tampilkelas">Data Kelas</a>
                </li>
                <li>
                    <a href="?hal=setkelas">Set Kelas</a>
                </li>
                <li>
                    <a href="?hal=presensi">Presensi</a>
                </li>
                <li>
                    <a href="?hal=tampiluser">Pengguna</a> 
                </li>
                <li>
                    <a href="?hal=logout">Logout</a>
                </li>
               
            </ul>
        </div>
        <div class="content">
            <?php
                $hal = isset($_GET['hal'])?$_GET['hal']:"";
                if($hal!=""){
                    include_once("$hal".".php");
                }
                ?>
            
        </div>
    </body>
</html>
