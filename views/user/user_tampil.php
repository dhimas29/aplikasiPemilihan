<?php
// if ($_SESSION['pesan_tambah'] == 'sukses') { 
?>
<!-- <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })
        Toast.fire({
            icon: 'success',
            title: 'Signed in successfully'
        })
    </script> -->
<?php
//     $_SESSION['pesan_tambah'] = 'kelar';
// }
?>
<?php $namaTabel = 'tbl_users'; ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data User</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data User</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data User</h3>
                            <a href="?folder=user&page=user&actions=tambah" class="btn btn-primary btn-sm" style="float: right;">Tambah Data</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th style="width: 5%;">No</th>
                                        <th>Username</th>
                                        <th>Level</th>
                                        <th style="width: 100px;">
                                            <center>Aksi</center>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $nomor = 1;
                                    foreach ($koneksi->query('select * from tbl_users order by level_user,username asc') as $key => $value) { ?>
                                        <tr>
                                            <td><?= $nomor++; ?></td>
                                            <td><?= $value['username']; ?></td>
                                            <td><?= $value['level_user']; ?></td>
                                            <td>
                                                <a href="?folder=user&page=user&actions=edit&id=<?= $value['id'] ?>" class="btn btn-sm btn-info">Edit</a> |
                                                <a onclick="return deleteSwal(<?= $value['id'] ?>,'<?= $namaTabel ?>','user')" class="btn btn-sm btn-danger">Delete</a>
                                                <!-- <a href="proses/proses_hapus.php?id=<?= $value['id'] ?>&tabel=user" class="btn btn-sm btn-danger">Delete</a> -->
                                            </td>
                                        </tr>
                                    <?php }; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>