/*
File ini berisi contoh cara mencari sebuah data dari database dengan menggunakan PHP.

Cara ini menggunakan sebuah form dengan method GET

*/

<?php

include 'koneksi.php';      //Menghubungkan file ini dengan file koneksi database

//misal dalam url ada seperti ini http://.../file.com?cari=khoerul maka variabel cari memiliki data "khoerul" dan bisa diatur seperti dibawah ini

if(isset($_GET['cari')){  

  //letakan data dari variabel get cari ke dalam variabel $kataKunci
  $kataKunci = mysqli_real_escape_string($koneksi, $_GET['cari']);
  
  //SQL untuk mencari kata
  $sql = "SELECT * FROM data WHERE nama='$khoerul'";
  
  //Perintah untuk mengeksekusi sql
  $query = mysqli_connect($koneksi, $sql);
  
  //cek apakah berhasil ditemukan atau tidak
  if(!empty($query){                    //Untuk mengecek berhasil dihubungkan oleh database atau tidak
  
    if(mysqli_num_row($query) == 0){    //Untuk mengecek jika data tidak ada
      echo "Nama tidak ditemukan"; }
      
    if(mysqli_num_row($query) != 0){    //Untuk mengecek jika data ada
      echo "Nama tidak ditemukan"; }
      
   }
   
   if(empty($query){                    //Untuk mengecek berhasil dihubungkan oleh database atau tidak
    echo "Gagal menghubungkan dengan database"; }
  
  
