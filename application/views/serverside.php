<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server Side Codeigniter 3</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css">
</head>

<body>
    <div class="container mt-3">
        <h3>Data Table Codeigniter Serverside</h3>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary mb-3" onClick="add()">
            Tambah data
        </button>

        <!-- Modal -->
        <div class="modal fade" id="modalData" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTitle">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body form">
                        <form action="#" id="formData">
                            <input type="hidden" id="id" name="id" value="">
                            <div class="form-group">
                                <label for="firstName">Nama Depan</label>
                                <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Masukkan nama depan">
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="form-group">
                                <label for="lastName">Nama Belakang</label>
                                <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Masukkan nama belakang">
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="form-group">
                                <label for="address">Alamat</label>
                                <input type="text" class="form-control" id="address" name="address" placeholder="Masukkan Alamat">
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="form-group">
                                <label for="lastName">Nomor Hp</label>
                                <input type="text" class="form-control" id="mobilePhoneNumber" name="mobilePhoneNumber" placeholder="Masukkan Nomor Handphone">
                                <div class="invalid-feedback"></div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="button" class="btn btn-primary" id="btnSave" onclick="save()">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">


                <table id="myTable" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Depan</th>
                            <th>Nama Belakang</th>
                            <th>Alamat</th>
                            <th>No Hp</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>
    <script>
        var saveData;
        var modal = $('#modalData');
        var tableData = $('#myTable');
        var formData = $('#formData');
        var modalTitle = $('#modalTitle');
        var btnSave = $('#btnSave');

        $(document).ready(function() {
            tableData.DataTable({
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    "url": "<?= base_url('serverside/getData'); ?>",
                    "type": "POST"
                },
                "columnDefs": [{
                    "target": [-1],
                    "orderable": false
                }]
            });
        });

        function reloadTable() {
            tableData.DataTable().ajax.reload();
        }

        function message(icon, text) {
            Swal.fire({
                icon: icon,
                title: 'Data Table Serverside',
                text: text,
                showConfirmButton: false,
                showCloseButton: false,
                timer: 3000,
                timerProgressBar: true,
            });
        }

        function deleteQuestion(id, name) {
            Swal.fire({
                title: 'Apakah anda yakin?',
                text: "Akan menghapus data " + name + "?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
            }).then((result) => {
                if (result.isConfirmed) {
                    deleteData(id);
                }
            })
        }

        function add() {
            saveData = 'tambah';
            formData[0].reset();
            modal.modal('show');
            modalTitle.text('Tambah Data');
        }

        function save() {
            btnSave.text('Mohon tunggu....');
            btnSave.attr('disabled', true);
            if (saveData == 'tambah') {
                url = "<?= base_url('serverside/add'); ?>"
            } else {
                url = "<?= base_url('serverside/update'); ?>"
            }


            $.ajax({
                type: "POST",
                url: url,
                data: formData.serialize(),
                dataType: "JSON",
                success: function(response) {
                    if (response.status == 'success') {
                        modal.modal('hide');
                        reloadTable();
                        if (saveData == 'tambah') {
                            message('success', 'Data Berhasil di tambah');
                        } else {
                            message('success', 'Data Berhasil di tambah');
                        }

                    } else {
                        for (var i = 0; i < response.inputerror.length; i++) {
                            $('[name="' + response.inputerror[i] + '"]').addClass('is-invalid');
                            $('[name="' + response.inputerror[i] + '"]').next().text(response.error_string[i]);
                        }
                    }
                    btnSave.text('Simpan data');
                    btnSave.attr('disabled', false);
                },
                error: function() {
                    message('error', 'Server gangguan, silahkan ulangi kembali');
                }
            });
        }

        function byid(id, type) {
            if (type == 'edit') {
                saveData = 'edit';
                formData[0].reset();
            }

            $.ajax({
                type: "GET",
                url: "<?= base_url('serverside/byid/') ?>" + id,
                dataType: "JSON",
                success: function(response) {

                    if (type == 'edit') {
                        formData.find('input').removeClass('is-invalid');
                        modalTitle.text('Ubah Data');
                        btnSave.text('Ubah Data');
                        btnSave.attr('disabled', false);
                        $('[name="id"]').val(response.id);
                        $('[name="firstName"]').val(response.nama_depan);
                        $('[name="lastName"]').val(response.nama_belakang);
                        $('[name="address"]').val(response.alamat);
                        $('[name="mobilePhoneNumber"]').val(response.no_hp);
                        modal.modal('show');
                    } else {
                        deleteQuestion(response.id, response.nama_depan);
                    }

                },
                error: function() {
                    message('error', 'Server gangguan, silahkan ulangi kembali');
                }
            });
        }

        function deleteData(id) {
            $.ajax({
                type: "POST",
                url: "<?= base_url('serverside/delete/') ?>" + id,
                dataType: "JSON",
                success: function(response) {
                    reloadTable();
                    message('success', 'Data Berhasil di hapus');

                },
                error: function() {
                    message('error', 'Server gangguan, silahkan ulangi kembali');
                }
            });
        }
    </script>

</body>

</html>