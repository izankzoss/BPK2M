<?php
session_start();
if ($_SESSION['masuk']='admin') {
    header('location:admin.php');
} elseif($_SESSION['masuk']='user') {
    header('location:users.php');
    
}
else{
header('location:login.php');
}
