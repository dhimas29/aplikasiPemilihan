<!DOCTYPE html>
<html lang="en">

<head>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

    <?php
    session_start();
    session_destroy();
    echo "<script>
            Swal.fire({
                title: 'Logout!',
                text: 'Berhasil Logout',
                icon: 'success'
            }).then((result) => {
                    window.location.href = 'index.php'
            })
         </script>";
    ?>
</body>

</html>