/*
Pada kasus ini, saya ibaratkan kita sudah mempunyai halaman web misalnya, di mana halaman web tersebut memiliki tombol untuk menghapus data dengan primary kunci. Kita harus memiliki tabel dengan atribut 'id' (dsb.) sebagai primary key

form menggunakan metode 'get' artinya kode ini dipasang di halaman itu sendiri
*/

//kode dimulai dari sini

<?php
include 'koneksi.php'          //Hubungkan file ini dengan file koneksi database yang kita punya

if(isset($_GET['hapus']){    //Jika kita menekan tombol dengan nama 'hapus', maka perintah dibawahnya akan berjalan

  /*  - Di bagian kiri merupakan variabel yang menyimpan data dari form
      - mysqli_real_escape_string adalah perintah supaya database aman dari injeksi
      - Variabel koneksi didapat dari koneksi.php
      - $_GET['id'] adalah perintah untuk mengambil data dengan kunci id.
  */
  
  $id     = mysqli_real_escape_string($koneksi, $_GET['id']);    //kunci utama atau primary key dari datanya
  
  //Perintah SQL untuk menghapus data
  $sql    = "DELETE FROM data WHERE id='$id'";
  
  //Perintah untuk menghubungkan sekaligus mengeksekusi perintah sql di atas
  $query  = mysqli_query($koneksi, $sql);
  
  //perintah untuk mengecek apakah data berhasil dihapus atau tidak
  if(empty($query){
    echo "Gagal menghapus data"; }
    
  if(!empty($query){
    echo "Sukses menghapus data"; }
}
//perintah untuk mengalihkan file ini sehingga tidak bisa diakses secara langsung kecuali hanya menekan tombol pada form
else {
  header('location: index.php')   //halaman dialihkan ke index jika diakses secara langsung
}
