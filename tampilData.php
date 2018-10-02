/*
pada file ini, berisi kode untuk menampilkan data dari database.
*/

<?php

include 'koneksi.php'       //hubungkan dengan file koneksi ke database

//Perintah memilih semua data dari database dari yang terbaru dimasukkan

$sql   = "SELECT * FROM data order by id DESC";

//perintah untuk menghubungkan sekaligus mengeksekusi perintah sql di atas
//variabel $koneksi berasal dari koneksi.php

$query  = mysqli_query($koneksi, $sql);

//perintah untuk menampilkan data

while($data = mysqli_fetch_assoc($query)){
  echo "Nama : ".$data['nama'];
  echo "alamat : ".$data['alamat'];
  echo "email : ".$data['email'];
}

/*
  - variabel $data bebas bisa diganti apa saja.
  - mysqli_fetch_assoc digunakan untuk mengubah data-data di database menjadi array per kolom nya.
  - $data['nama'] dst. disesuaikan dengan kolom yang dibuat.
  - keterangan yang di dalam kurung siku adalah nama kolomnya.
*/



