<?php
    include 'koneksi.php';
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $alamat = $_POST['alamat'];
    // print_r($_POST);
    $query = "INSERT INTO `user`(`username`, `password`, `nama`, `alamat`) VALUES ('$username','$password', '$nama', '$alamat')";

    $sql = mysqli_query($connect, $query);

    if($sql){
        header('Location: index.php?success=1');
    }else{
        echo "Tambah data gagal: " . mysqli_error($connect);
    }
?>