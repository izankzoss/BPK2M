<?php
session_start();
if ($_SESSION['JABATAN']=='admin') {
   echo "<script>
  window.location.href='admin.php';
</script>";
} elseif($_SESSION['JABATAN']=='user'){
     echo "<script>
  window.location.href='users.php';
</script>";
}
else{
header('location:login.php');
}
