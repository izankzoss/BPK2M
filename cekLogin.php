<?php 
include "config/config_database.php";
$db = __database();

$pass = md5($_POST['password']);
$username = mysqli_escape_string($db, $_POST['username']);
$password = mysqli_escape_string($db,$pass);
$level = mysqli_escape_string($db, $_POST['level']);

// cek username
$cek_user = mysqli_query($db, "SELECT * FROM users where USERNAME ='$username' and level='$level' ");
$user_valid = mysqli_fetch_array($cek_user);
// uji jika username terdaftar
if ($user_valid) {
  // jika username terdaftar
  // cek password seseuai atau tidak
  if ($password == $user_valid['password']) {
    // jika password sesuai
    // buat session
    session_start();
    $_SESSION ['username'] = $user_valid['username'];
    $_SESSION ['nm_lengkap'] = $user_valid['nm_lengkap'];
    $_SESSION ['jabatan'] = $user_valid['jabatan'];
    $_SESSION ['level'] = $user_valid['level'];

    // uji level user
    if ($level == "Pegawai") {
      header('location:admin.php');
    } elseif ($level == "Operator") {
    echo "<script>
  window.location.href='index.php';
</script>";
      
  } elseif ($level == "Admin") {
      echo "<script>
  window.location.href='index.php';
</script>";
  }
   

} else {
 echo "<script>alert('Maaf, Login Gagal, password tidak sesuai!');
document.location='login.php'</script>";
}

} else {
 echo "<script>alert('Maaf, Login Gagal, username tidak terdaftar!');
document.location='login.php'</script>";
}

 
 
 ?>
 