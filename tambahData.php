/*
Pada kasus ini, saya ibaratkan kita sudah mempunyai halaman web misalnya yang sudah diisi form dan file ini berisi bagaimana kita menghubungkan dan menambah data ke database dari hasil form yang telah kita buat

form menggunakan metode 'post'
*/

//kode dimulai dari sini

<?php

include 'koneksi.php'          //Hubungkan file ini dengan file koneksi database yang kita punya

if(isset($_POST['submit']){    //Jika kita menekan tombol submit pada form, maka perintah dibawahnya akan berjalan

  /*  - Di bagian kiri merupakan variabel yang menyimpan data dari form
      - mysqli_real_escape_string adalah perintah supaya database aman dari injeksi
      - Variabel koneksi didapat dari koneksi.php
      - $_POST['nama'] adalah perintah untuk mengambil data dari form bernama 'nama' , dst.
  */

  $nama   = mysqli_real_escape_string($koneksi, $_POST['nama']);
  $alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);
  $email  = mysqli_real_escape_string($koneksi, $_POST['email']);
  
  //Perintah SQL untuk menambahkan data
  $sql    = "INSERT INTO data(nama, alamat, email) VALUES ('$nama', '$alamat', '$email')";
  
  //Perintah untuk menghubungkan sekaligus mengeksekusi perintah sql di atas
  $query  = mysqli_query($koneksi, $sql);
  
  //perintah untuk mengecek apakah data berhasil ditambahkan atau tidak
  
  if(empty($query){
    echo "Gagal menambahkan data"; }
    
  if(!empty($query){
    echo "Sukses menambahkan data"; }

}

//perintah untuk mengalihkan file ini sehingga tidak bisa diakses secara langsung kecuali hanya menekan tombol pada form
else {
  header('location: index.php')   //halaman dialihkan ke index jika diakses secara langsung
}

    


