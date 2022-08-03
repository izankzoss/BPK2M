<?php  
// menghubungkan php dengan koneksi database

session_start();
if(isset($_SESSION['JABATAN'])) { 
  header('location:admin.php');
} else{
  echo "<script>
      alert('Maaf, Anda tidak memiliki akses ke sistem'); 
  window.location.href='index.php';
</script>";
}
include 'config/config_database.php';
$db =__database();


// menangkap data yang dikirim dari form login
if (isset($_POST['login'])) {
  # code...

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
 if($data['JABATAN']=="user" ){

   $_SESSION['id'] = $data['id'];
  $_SESSION['user'] = $data['username'];
  $_SESSION['nm_lengkap'] = $data['nm_lengkap'];
  $_SESSION['JABATAN'] ="user";
  header('location:users.php');
 
  // buat session login dan username
  
  // alihkan ke halaman dashboard admin
  
 
 }else if($data['JABATAN']=="admin"){

  // buat session login dan username
  $_SESSION['id'] = $data['id'];
  $_SESSION['user'] = $data['username'];
  $_SESSION['nm_lengkap'] = $data['nm_lengkap'];
  $_SESSION['JABATAN'] ="admin";
   header('location:index.php');
 
  // alihkan ke halaman dashboard pegawai
 
}else{
  echo "<script>
      alert('Maaf, Anda tidak memiliki akses ke sistem'); 
  window.location.href='indek.php';
</script>";


}

}
}


?>