<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0" >
    <h1>Daftar User</h1>
    <tr>
        <th>Nama</th>
        <th>Usernamet</th>
        <th>Alamat</th>
        <th>Edit</th>
    </tr>
    <?php
			include('koneksi.php');

			$sql	= "SELECT * FROM user";
			$query	= mysqli_query($connect, $sql);

			while ($data = mysqli_fetch_assoc($query)) :
	?>
    <tr>
        <td><?=$data['nama'];?></td>
        <td><?=$data['username'];?></td>
        <td><?=$data['alamat'];?></td>
        <td><a href="hapus_proses.php">hapus</a></td>
        
    </tr>
    <?php endwhile ?>
    </table>
    
</body>
</html>