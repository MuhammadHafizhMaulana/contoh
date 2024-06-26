<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Pasien</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto mt-5">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Login Pasien</h5>
                    </div>
                    <div class="card-body">
                        <form action="login_proses.php" method="post">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary">LOGIN</button>
                        </form>
                    </div>
                    <div class="card-footer">
                        <p>Belum punya akun? <a href="daftar.php">Daftar Sekarang</a></p>
                    </div>
                    <?php
                        if(isset($_GET['pesan'])) {
                        if ($_GET['pesan'] == "gagal")
                        {
                            echo "Login gagal. Username atau password salah.";
                        } elseif ($_GET['pesan'] == "logout"){
                            echo "Anda telah berhasil logout.";
                        } elseif ($_GET['pesan'] == "belum_login"){
                            echo "Anda harus login terlebih dahulu untuk akses halaman utama.";
                        } 
                    }
                    if(isset($_GET['success']) && $_GET['success'] == 1){
                        echo "<div class='alert alert-success'>Data berhasil ditambahkan!</div>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
