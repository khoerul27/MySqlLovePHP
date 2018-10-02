/*
Pada kasus ini, saya ibaratkan kita sudah mempunyai halaman web misalnya, di mana halaman web tersebut memiliki form dan tombol untuk meng-update data dengan kunci. Kita harus memiliki tabel dengan atribut 'id' (dsb.) sebagai primary key

form menggunakan metode 'post'
*/

//kode dimulai dari sini

<?php
include 'koneksi.php'          //Hubungkan file ini dengan file koneksi database yang kita punya

if(isset($_POST['update']){    //Jika kita menekan tombol dengan nama 'update' pada form, maka perintah dibawahnya akan berjalan

  /*  - Di bagian kiri merupakan variabel yang menyimpan data dari form
      - mysqli_real_escape_string adalah perintah supaya database aman dari injeksi
      - Variabel koneksi didapat dari koneksi.php
      - $_POST['nama'] adalah perintah untuk mengambil data dari form bernama 'nama' , dst.
  */
  
  $id     = mysqli_real_escape_string($koneksi, $_POST['id']);    //kunci utama atau primary key dari datanya
  $nama   = mysqli_real_escape_string($koneksi, $_POST['nama']);
  $alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);
  $email  = mysqli_real_escape_string($koneksi, $_POST['email']);
  
  //Perintah SQL untuk menambahkan data
  $sql    = "UPDATE data SET nama='$nama' alamat='alamat' email='$email' WHERE id='$id'";
  
  //Perintah untuk menghubungkan sekaligus mengeksekusi perintah sql di atas
  $query  = mysqli_query($koneksi, $sql);
  
  //perintah untuk mengecek apakah data berhasil ditambahkan atau tidak
  if(empty($query){
    echo "Gagal meng-update data"; }
    
  if(!empty($query){
    echo "Sukses meng-update data"; }
}

//perintah untuk mengalihkan file ini sehingga tidak bisa diakses secara langsung kecuali hanya menekan tombol pada form
else {
  header('location: index.php')   //halaman dialihkan ke index jika diakses secara langsung
}
