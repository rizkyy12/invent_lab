<?php
    include "config.php";

    $pass = md5($_POST['password']);
    $username = mysqli_escape_string($koneksi, $_POST['username']);
    $password = mysqli_escape_string($koneksi, $pass);

    $cek_user = mysqli_query($koneksi, "SELECT * FROM t_laboratorium WHERE username='$username' and password='$password'");
    $user_valid = mysqli_fetch_array($cek_user);

    if ($user_valid){
        if($password == $user_valid['password']){
            session_start();
            $_SESSION['username'] = $user_valid['username'];
            $_SESSION['nama_lab'] = $user_valid['nama_lab'];
            $_SESSION['ka_lab'] = $user_valid['ka_lab'];

            if ($username == "admin_robotika"){
                header('location:lab_robotika/lab_robotika.php');
            }
            else if($username == "admin_iml"){
                header('location:lab_iml.php');
            }
            else if ($username == "admin_informatika"){
                header('location:lab_informatika.php');
            }
        }
        else{
            echo "<script> alert ('username/password salah!'); document.location='index.php'</script>";
        }
    }else{
        echo "<script> alert ('username/password salah!'); document.location='index.php'</script>";
    }
?>