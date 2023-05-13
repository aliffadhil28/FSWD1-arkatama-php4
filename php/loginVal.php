<?php 

session_start();
include 'connect_db.php';


$email = $_POST['email'];
$pass = $_POST['pass'];
$cb = $_POST['rm'];
// $isLoggedIn = false;

$query = "SELECT * FROM users where email='$email'and password='$pass'";
$result = mysqli_query($conn,$query);
$result2 = mysqli_fetch_array($result);
if ($result) {
    if ($cb == "on") {
        $_SESSION['email']= $result2['email'];
        $_SESSION['pass']= $result2['password'];
        $_SESSION['name']= $result2['name'];
        $_SESSION['avatar']= $result2['avatar'];
        $_SESSION['id_user']= $result2['id'];
        $_SESSION['rm']=$cb;
        setcookie("checkLogin",true,time()+(86400 * 30), "/");
        header("location:index.php");
        // echo "Berhasil";
    }else{
        setcookie("checkLogin",true,time()+(86400 * 30), "/");
    }
    // header("location:index.php");
}else {
    echo "Gagal";
    header("location:login.php");
}

