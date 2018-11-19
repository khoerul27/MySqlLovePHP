<?php

$koneksi = mysqli_connect("localhost", "root", "", "wikikom");

?>


<!DOCTYPE html>
<head>
    <title>Belajar</title>
</head>
<body style="background: lightblue;color:#2e2e2e">
    <h1>Cari kosakata</h1>
    <br>
    <form action="tampil.php" method="GET">

        <input type="text" name="cari" placeholder="Cari di sini" style="padding: 20px;text-align:center;background: black; color: white;border:4px red double;border-radius: 25px;">
        <button type="submit" style="padding: 20px;text-align:center;background: black; color: white;border:4px red double;border-radius: 25px;">Cari</button>   

    </form>
</body>

</html>







<?php 

if(isset($_GET['cari']))
{

$kosakata = $_GET['cari'];


$tampil = "SELECT * FROM wikikom_media WHERE kata='$kosakata'";

$eksekusi = mysqli_query($koneksi, $tampil);

$cek = mysqli_num_rows($eksekusi);

if($cek == 0){
    echo "Tidak ada data";
}

elseif($cek > 0){

while($data = mysqli_fetch_assoc($eksekusi)){
    echo "Kata : ".$data['kata'];
    echo "<br>";
    echo "Definisi : ".$data['definisi'];
    echo "<br>";
    echo "Sumber: ".$data['sumber'];
    echo "<br>";
    echo "<a href='delete.php?kunci=".$data['id_kata']."'>Hapus</a>";
    echo "  <a href='update.php?kunci=".$data['id_kata']."'>Update</a>";
    echo "<p>";

}
}
}
?>