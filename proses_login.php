<!DOCTYPE html>
<html lang="en">

<head>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <?php
    include('koneksi.php');
    session_start();
    $username = $_POST['username'];
    $pass = md5($_POST['password']);
    $cek = $koneksi->query("SELECT * FROM tbl_users where username='$username' and password='$pass'");
    $count = $cek->rowCount();
    if ($count > 0) {
        $fetch = $cek->fetch();
        if ($fetch['level_user'] == 'Admin') {
            $_SESSION['level'] = $fetch['level_user'];
            $_SESSION['id'] = $fetch['id'];
            $_SESSION['nama'] = $fetch['username'];
            echo "<script>
            Swal.fire({
                title: 'Login Berhasil!',
                text: 'Selamat Datang.',
                icon: 'success'
            }).then((result) => {
                    window.location.href = 'index_admin.php'
            })
         </script>";
        } else if ($fetch['level_user'] == 'Guru') {
            $_SESSION['level'] = $fetch['level_user'];
            $_SESSION['id'] = $fetch['id'];
            $_SESSION['nama'] = $fetch['username'];
            echo "<script>
            Swal.fire({
                title: 'Login Berhasil!',
                text: 'Selamat Datang.',
                icon: 'success'
            }).then((result) => {
                    window.location.href = 'index_admin.php'
            })
         </script>";
        } else if ($fetch['level_user'] == 'Kepala') {
            $_SESSION['level'] = $fetch['level_user'];
            $_SESSION['id'] = $fetch['id'];
            $_SESSION['nama'] = $fetch['username'];
            echo "<script>
            Swal.fire({
                title: 'Login Berhasil!',
                text: 'Selamat Datang.',
                icon: 'success'
            }).then((result) => {
                    window.location.href = 'index_admin.php'
            })
         </script>";
        } else {
            $_SESSION['level'] = $fetch['level_user'];
            $_SESSION['id'] = $fetch['id'];
            $_SESSION['nama'] = $fetch['username'];
            echo "<script>
            Swal.fire({
                title: 'Login Berhasil!',
                text: 'Selamat Datang.',
                icon: 'success'
            }).then((result) => {
                    window.location.href = 'index.php'
            })
         </script>";
        }
    } else {
        echo "<script>
            Swal.fire({
                title: 'Login Gagal!',
                text: 'Silahkan Login Kembali.',
                icon: 'warning'
            }).then((result) => {
                    window.location.href = 'index.php'
            })
         </script>";
    }
    ?>
</body>

</html>