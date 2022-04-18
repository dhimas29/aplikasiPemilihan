<?php
$data = $koneksi->query("SELECT * FROM tbl_raport
join tbl_siswa on tbl_siswa.id = tbl_raport.id_siswa
join tbl_users on tbl_users.id = tbl_siswa.id_user
where tbl_siswa.id='$_GET[id]'");
$fetch = $data->fetch();
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Nilai Raport</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Nilai Raport</li>
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
                <div class="col-10">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="nisn" class="col-sm-4 col-form-label">NISN</label>
                                <div class="col-sm-8">
                                    <input type="text" readonly value="<?= $fetch['username']; ?>" class="form-control" id="nisn">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nama" class="col-sm-4 col-form-label">NAMA</label>
                                <div class="col-sm-8">
                                    <input type="text" readonly value="<?= $fetch['nama']; ?>" class="form-control" id="nama">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <ul class="nav nav-pills ml-auto">
                                    <?php foreach ($koneksi->query("select * from tbl_raport 
                                    join tbl_kelas on tbl_raport.id_kelas = tbl_kelas.id
                                    where tbl_raport.id_siswa='$_GET[id]'") as $key => $value) { ?>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#tab<?php echo $value['kelas'] ?>">Kelas <?= $value['kelas']; ?></a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <?php foreach ($koneksi->query("select * from tbl_raport 
                                    join tbl_kelas on tbl_raport.id_kelas = tbl_kelas.id
                                    where tbl_raport.id_siswa='$_GET[id]'") as $key => $value) { ?>
                                    <div class="tab-pane fade" id="tab<?php echo $value['kelas'] ?>">
                                        <form class="form-horizontal" action="proses/proses_edit.php" method="post">
                                            <div class="form-group row">
                                                <label for="pai" class="col-sm-4 col-form-label">Nilai PAI</label>
                                                <div class="col-sm-8">
                                                    <input type="text" readonly value="<?= $value['pai']; ?>" class="form-control" id="pai">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="pkn" class="col-sm-4 col-form-label">Nilai PKN</label>
                                                <div class="col-sm-8">
                                                    <input type="text" readonly value="<?= $value['pkn']; ?>" class="form-control" id="pkn">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="bahasa_indonesia" class="col-sm-4 col-form-label">Nilai Bahasa Indonesia</label>
                                                <div class="col-sm-8">
                                                    <input type="text" readonly value="<?= $value['bahasa_indonesia']; ?>" class="form-control" id="bahasa_indonesia">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="mtk" class="col-sm-4 col-form-label">Nilai MTK</label>
                                                <div class="col-sm-8">
                                                    <input type="text" readonly value="<?= $value['mtk']; ?>" class="form-control" id="mtk">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="ipa" class="col-sm-4 col-form-label">Nilai IPA</label>
                                                <div class="col-sm-8">
                                                    <input type="text" readonly value="<?= $value['ipa']; ?>" class="form-control" id="ipa">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="ips" class="col-sm-4 col-form-label">Nilai IPS</label>
                                                <div class="col-sm-8">
                                                    <input type="text" readonly value="<?= $value['ips']; ?>" class="form-control" id="ips">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="sbdp" class="col-sm-4 col-form-label">Nilai SBDP</label>
                                                <div class="col-sm-8">
                                                    <input type="text" readonly value="<?= $value['sbdp']; ?>" class="form-control" id="sbdp">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="pjok" class="col-sm-4 col-form-label">Nilai PJOK</label>
                                                <div class="col-sm-8">
                                                    <input type="text" readonly value="<?= $value['pjok']; ?>" class="form-control" id="pjok">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="bahasa_inggris" class="col-sm-4 col-form-label">Nilai Bahasa Inggris</label>
                                                <div class="col-sm-8">
                                                    <input type="text" readonly value="<?= $value['bahasa_inggris']; ?>" class="form-control" id="bahasa_inggris">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="bahasa_arab" class="col-sm-4 col-form-label">Nilai Bahasa Arab</label>
                                                <div class="col-sm-8">
                                                    <input type="text" readonly value="<?= $value['bahasa_arab']; ?>" class="form-control" id="bahasa_arab">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="tahsin" class="col-sm-4 col-form-label">Nilai Tahsin</label>
                                                <div class="col-sm-8">
                                                    <input type="text" readonly value="<?= $value['tahsin']; ?>" class="form-control" id="tahsin">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="tik" class="col-sm-4 col-form-label">Nilai TIK</label>
                                                <div class="col-sm-8">
                                                    <input type="text" readonly value="<?= $value['tik']; ?>" class="form-control" id="tik">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="nilai_raport" class="col-sm-4 col-form-label">Nilai Raport</label>
                                                <div class="col-sm-8">
                                                    <input type="text" readonly value="<?= $value['nilai_raport']; ?>" class="form-control" id="nilai_raport">
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="?folder=raport&page=raport&actions=tampil" class="btn btn-danger btn-sm">
                                Kembali
                            </a>
                        </div>
                    </div>

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>