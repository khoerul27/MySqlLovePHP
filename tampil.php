<?php

$koneksi = mysqli_connect("localhost", "root", "", "wikikom");

$tampil = "SELECT * FROM wikikom_media";

$eksekusi = mysqli_query($koneksi, $tampil);

while($data = mysqli_fetch_assoc($eksekusi)){
    echo "Kata : ".$data['kata'];
    echo "<br>";
    echo "Definisi : ".$data['definisi'];
    echo "<p>";

}
