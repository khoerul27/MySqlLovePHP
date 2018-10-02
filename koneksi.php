<?php

$dbServer = "localhost"     //database server anda ~ your database server
$dbUser   = "mydbuser"      //username dari database anda ~ your database username
$dbPass   = "mydb123"       //Password database anda (Kosongkan jika tidak ada) ~ your database password (let be empty if you are not set yet)
$dbName   = "dbname"        //Nama database anda ~ your database name

//Perintah koneksi ~ connection command line

$koneksi  = mysqli_connect($dbServer, $dbUser, $dbPass, $dbName);
