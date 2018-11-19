<?php

$koneksi = mysqli_connect("localhost", "root", "", "wikikom");

if(!isset($_GET['kunci'])){
    header('location: tampil.php');
}

if(isset($_GET['kunci'])){
    $id = $_GET['kunci'];

    $sql = "DELETE FROM wikikom_media WHERE id_kata=$id";

    $cek = mysqli_query($koneksi, $sql);

    if(empty($cek)){
        header('location: tampil.php?gagal');
    }

    if(!empty($cek)){
        header('location: tampil.php?sukses');
    }
}

