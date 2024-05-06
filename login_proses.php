<?php 
    include 'koneksi.php';
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM `user` WHERE `username` = '$username' AND `password` = '$password'";
    $sql = mysqli_query($connect, $query);
    $data = mysqli_fetch_array($sql);

    if(mysqli_num_rows($sql)>0){
        $_SESSION['username'] = $username;
        $_SESSION['id_user'] = $data['id_user'];
        $_SESSION['status'] = 'login';
        header('Location: home.php');
    }else{
        header('Location: index.php?pesan=gagal');
    }

?>