<?php

$koneksi = mysqli_connect("localhost", "root", "", "wikikom");

if(!isset($_GET['kunci'])){
    header('location: tampil.php');
}

if(isset($_GET['kunci'])){
    $id = $_GET['kunci'];

    $tampil = "SELECT * FROM wikikom_media WHERE id_kata=$id";
    $prosestampil = mysqli_query($koneksi, $tampil);

    $data = mysqli_fetch_assoc($prosestampil);

    echo "<form action='update.php' method='post'>";
    echo "<input type='text' name='katabaru' value='".$data['kata']."' disabled>";
    echo "<br><textarea name='definisibaru'>".$data['definisi']."</textarea>";
    echo "<input type='text' name='id' value='".$data['id_kata']."' hidden>";
    echo "<br><button name='updatedata' type='submit'>Update Data</button>";
    echo "</form>";

}

if(isset($_POST['updatedata'])){
    $definisibaru = $_POST['definisibaru'];
    $idkata = $_POST['id'];

    $update = "UPDATE wikikom_media SET definisi='$definisibaru' WHERE id_kata=$idkata";
    mysqli_query($koneksi, $update);
}