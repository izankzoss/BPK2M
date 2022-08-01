<?php 
include "config/__config_database.php";
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
    $_SESSION ['USERNAME'] = $user_valid['USERNAME'];
    $_SESSION ['NM_LENGKAP'] = $user_valid['NM_LENGKAP'];
    $_SESSION ['JABATAN'] = $user_valid['JABATAN'];
    $_SESSION ['LEVEL'] = $user_valid['LEVEL'];

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
