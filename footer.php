<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.2.0-rc
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="assets/plugins/jszip/jszip.min.js"></script>
<script src="assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="assets/dist/js/demo.js"></script> -->
<!-- Page specific script -->
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true
        })
        $('#example3').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true
        })
        $('#example4').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true
        })
        $('#example5').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true
        })
        $('#example6').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true
        })
        $('#example7').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true
        })
    });

    function deleteSwal(id, namaTabel, page) {
        Swal.fire({
            title: 'Hapus data',
            text: "Anda yakin ingin menghapus data!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya hapus!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "proses/proses_hapus.php",
                    type: "POST",
                    data: {
                        namaTabel: namaTabel,
                        id: id
                    },
                    cache: false,
                    success: function(result) {
                        Swal.fire({
                            title: 'Deleted!',
                            text: 'File berhasil dihapus.',
                            icon: 'success'
                        }).then((result) => {
                            window.location.href = "?folder=" + page + "&page=" + page + "&actions=tampil"
                        })
                    }
                })
            }
        })
    }
    $(document).ready(function() {
        let i = 2;
        $('#addCore').click(function() {
            if (i <= 13) {
                $('#dynamic_fieldCore').append('<div class="form-group row" id="Corerow' + i + '"><label class="col-sm-3 mt-2 control-label" for="member_' + i + '">Subkriteria ' + i + '</label><div class="col-sm-5"><select required name="kritCore[' + i + ']" class="form-control"><option value="" selected disabled>--Pilih--</option><option value="pai">PAI</option><option value="pkn">PKN</option><option value="bahasa_indonesia">Bahasa Indonesia</option><option value="mtk">MTK</option><option value="ipa">IPA</option><option value="ips">IPS</option><option value="sbdp">SBDP</option><option value="pjok">PJOK</option><option value="bahasa_inggris">Bahasa Inggris</option><option value="bahasa_arab">Bahasa Arab</option><option value="tahsin">Tahsin</option><option value="tik">TIK</option><option value="nilai_raport">Nilai Raport</option></select></div><div class="col-sm-3"><select required class="form-control" name="subCore[' + i + ']"><option value="" disabled selected>Pilih</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select></div><div class="col-sm-1 mt-1"><button type="button" class="btn-sm btn-danger btn_removeCore" name="remove" id="' + i + '">-</button></div>');
                i++;
            }
        });
        $(document).on('click', '.btn_removeCore', function() {
            var button_id1 = $(this).attr("id");
            i--;
            $('#Corerow' + button_id1 + '').remove();
        });
        let k = 2;
        $('#addSecon').click(function() {
            if (k <= 13) {
                $('#dynamic_fieldSecon').append('<div class="form-group row" id="Seconrow' + k + '"><label class="col-sm-3 mt-2 control-label" for="member_' + k + '">Subkriteria ' + k + '</label><div class="col-sm-5"><select required name="kritSecon[' + k + ']" class="form-control"><option value="" selected disabled>--Pilih--</option><option value="pai">PAI</option><option value="pkn">PKN</option><option value="bahasa_indonesia">Bahasa Indonesia</option><option value="mtk">MTK</option><option value="ipa">IPA</option><option value="ips">IPS</option><option value="sbdp">SBDP</option><option value="pjok">PJOK</option><option value="bahasa_inggris">Bahasa Inggris</option><option value="bahasa_arab">Bahasa Arab</option><option value="tahsin">Tahsin</option><option value="tik">TIK</option><option value="nilai_raport">Nilai Raport</option></select></div><div class="col-sm-3"><select required class="form-control" name="subSecon[' + k + ']"><option value="" disabled selected>Pilih</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select></div><div class="col-sm-1 mt-1"><button type="button" class="btn-sm btn-danger btn_removeSecon" name="remove" id="' + k + '">-</button></div>');
                k++;
            }
        });
        $(document).on('click', '.btn_removeSecon', function() {
            var button_id2 = $(this).attr("id");
            k--;
            $('#Seconrow' + button_id2 + '').remove();
        });
    });

    function myFunction1() {
        let data = document.getElementById("bobotCore").value;
        if (Number(data) > 100) {
            data = document.getElementById("bobotCore").value = 100
        } else if (Number(data) < 0) {
            data = document.getElementById("bobotCore").value = 0
        }
        let max = 100 - data;
        document.getElementById("bobotSecon").value = max;
    }

    function myFunction2() {
        let data2 = document.getElementById("bobotSecon").value;
        if (Number(data2) > 100) {
            data2 = document.getElementById("bobotSecon").value = 100
        } else if (Number(data2) < 0) {
            data2 = document.getElementById("bobotSecon").value = 0
        }
        let max2 = 100 - data2;
        document.getElementById("bobotCore").value = max2;
    }
</script>
</body>

</html>