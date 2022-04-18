<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Seleksi</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Seleksi</li>
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
                            <h3 class="card-title">Seleksi</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form class="form-horizontal" action="proses/proses_tambah.php" method="post">
                                <input type="hidden" name="namaTabel" value="tbl_seleksi">
                                <?php
                                $fetch_kode = $koneksi->query("select max(kode_seleksi) as kode_seleksi from tbl_seleksi")->fetch();
                                $kode_seleksi = $fetch_kode['kode_seleksi'];
                                $urutan = (int) substr($kode_seleksi, 2);
                                $urutan++;
                                $huruf = "KS";
                                $kode_seleksi = $huruf . sprintf("%03s", $urutan);
                                ?>
                                <input type="hidden" value="<?= $kode_seleksi ?>" name="kode_seleksi">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="nama" class="col-sm-3 col-form-label">Lomba</label>
                                        <div class="col-sm-5">
                                            <select name="lomba" id="lomba" required class="form-control">
                                                <option value="" selected disabled>--Pilih--</option>
                                                <option value="OSN">OSN</option>
                                                <option value="KSN">KSN</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nama" class="col-sm-3 col-form-label">Tanggal</label>
                                        <div class="col-sm-5">
                                            <input type="date" required name="tanggal_lomba" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">Core</h3>
                                            </div>
                                            <div class="card-body">
                                                <div class="form-group row">
                                                    <label for="nama" class="col-sm-3 col-form-label">Bobot</label>
                                                    <div class="col-sm-9">
                                                        <input type="number" oninput="myFunction1()" id="bobotCore" class="form-control" required name="bobotCore">
                                                    </div>
                                                </div>
                                                <button type="button" class="btn btn-sm btn-secondary" name="addCore" id="addCore">Tambah</button>
                                                <div class="form-group row">
                                                    <label class="col-sm-3 mt-2 control-label" for="member1">Subkriteria 1</label>
                                                    <div class="col-sm-5">
                                                        <select name="kritCore[1]" id="kritCore" required class="form-control">
                                                            <option value="" selected disabled>--Pilih--</option>
                                                            <option value="pai">PAI</option>
                                                            <option value="pkn">PKN</option>
                                                            <option value="bahasa_indonesia">Bahasa Indonesia</option>
                                                            <option value="mtk">MTK</option>
                                                            <option value="ipa">IPA</option>
                                                            <option value="ips">IPS</option>
                                                            <option value="sbdp">SBDP</option>
                                                            <option value="pjok">PJOK</option>
                                                            <option value="bahasa_inggris">Bahasa Inggris</option>
                                                            <option value="bahasa_arab">Bahasa Arab</option>
                                                            <option value="tahsin">Tahsin</option>
                                                            <option value="tik">TIK</option>
                                                            <option value="nilai_raport">Nilai Raport</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <select class="form-control" id="kritCore" required name="subCore[1]">
                                                            <option value="" disabled selected>Pilih</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div id="dynamic_fieldCore"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">Secondary</h3>
                                            </div>
                                            <div class="card-body">
                                                <div class="form-group row">
                                                    <label for="nama" class="col-sm-3 col-form-label">Bobot</label>
                                                    <div class="col-sm-9">
                                                        <input type="number" oninput="myFunction2()" id="bobotSecon" class="form-control" name="bobotSecon" required>
                                                    </div>
                                                </div>
                                                <button type="button" class="btn btn-sm btn-secondary" name="addSecon" id="addSecon">Tambah</button>
                                                <div class="form-group row">
                                                    <label class="col-sm-3 mt-2 control-label" for="member1">Subkriteria 1</label>
                                                    <div class="col-sm-5">
                                                        <select name="kritSecon[1]" id="kritSecon" required class="form-control">
                                                            <option value="" selected disabled>--Pilih--</option>
                                                            <option value="pai">PAI</option>
                                                            <option value="pkn">PKN</option>
                                                            <option value="bahasa_indonesia">Bahasa Indonesia</option>
                                                            <option value="mtk">MTK</option>
                                                            <option value="ipa">IPA</option>
                                                            <option value="ips">IPS</option>
                                                            <option value="sbdp">SBDP</option>
                                                            <option value="pjok">PJOK</option>
                                                            <option value="bahasa_inggris">Bahasa Inggris</option>
                                                            <option value="bahasa_arab">Bahasa Arab</option>
                                                            <option value="tahsin">Tahsin</option>
                                                            <option value="tik">TIK</option>
                                                            <option value="nilai_raport">Nilai Raport</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <select class="form-control" id="kritSecon" required name="subSecon[1]">
                                                            <option value="" disabled selected>Pilih</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div id="dynamic_fieldSecon"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <label for="">Total Bobot</label>
                                        <label for="">100%</label>
                                    </div>
                                </div>
                        </div>
                        <div class="card-footer">
                            <a href="?page=user&actions=tampil" class="btn btn-danger btn-sm">
                                Kembali
                            </a>
                            <button type="submit" class="btn btn-success btn-sm">Submit</button>
                        </div>
                        </form>
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