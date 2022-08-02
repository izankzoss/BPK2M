<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'config/config_database.php';
$db =__database();

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($db,"SELECT * FROM users WHERE USERNAME='$username' and PASSWORD='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

 $data = mysqli_fetch_array($login);

 // cek jika user login sebagai admin
 if($data['JABATAN']=="admin"){

  // buat session login dan username
  
  // alihkan ke halaman dashboard admin
  
 // cek jika user login sebagai pegawai
 }else if($data['JABATAN']=="user"){
  // buat session login dan username
  
  // alihkan ke halaman dashboard pegawai
  header("location:users.php");

 }else if($data['JABATAN']=="admin"){
  $_SESSION['username'] = $username;
  $_SESSION['jabatan'] = "admin";
  $_SESSION['masuk'] ='admin';

  // alihkan ke halaman login kembali
  header("location:index.php?pesan=gagal");
 } 
}else{
  $_SESSION['username'] = $username;
  $_SESSION['jabatan'] = "user";
  $_SESSION['masuk'] ='user';
 header("location:index.php?pesan=gagal");
}

?>