<?php 

include 'connect_db.php';
// session_start();
if ($_COOKIE["checkLogin"] == false) {
    header("Location:./login.php");
}
if (isset($_POST['submit'])) {
    $targetDir = "../storage/";
    $targetFile = $targetDir.basename($_FILES["avatar"]["name"]);

    if (move_uploaded_file($_FILES["avatar"]["tmp_name"],$targetFile)) {
        $name = $_POST['name'];
        $role = $_POST['role'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
    }
    $sql = "INSERT INTO users (name, role, password, email, phone, address, avatar, created_at, updated_at) 
        VALUES ('$name', '$role', '$password', '$email', '$phone', '$address', '$targetFile',NOW(),NOW())";

    if (mysqli_query($conn,$sql)) {
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Selamat !!</strong> Data baru telah ditambahkan
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
    }else{
        echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
        <strong>Maaf !!</strong> Terjadi Kesalahan Ketika Menambahkan Data
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
    }
    header("location:index.php");
    exit;
}