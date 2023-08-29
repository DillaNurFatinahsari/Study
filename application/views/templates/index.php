<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?php echo $title; ?>
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
                    Tambah Data
                </button>

        </div>
        <div class="card-body">
            <?php echo $this->session->flashdata('suc'); ?>
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Nama</td>
                            <td>Id</td>
                            <td>Alamat</td>
                            <td colspan="2">Action</td>
                        </tr>
                        </tread>
                    <tbody>
                        <?php
                        foreach ($mahasiswa1 as $mhs1) : ?>
                            <tr>
                                <td><?php echo $mhs1['no']; ?></td>
                                <td><?php echo $mhs1['nama']; ?></td>
                                <td><?php echo $mhs1['id']; ?></td>
                                <td><?php echo $mhs1['alamat']; ?></td>
                                <td>
                                    <button type="button" class="badge badge-primary" data-toggle="modal" data-target="#editmodal<?php echo $mhs1['id']; ?>">
                                        Edit
                                    </button>
                                    <a href="<?php echo base_url() ?>Home/hapus_data/<?php echo $mhs1['id']; ?>" class="badge badge-danger">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Modal untuk tambah Data -->

<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">FORM TAMBAH DATA</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('home/proses_tambah_data'); ?>

                <div class="form-group">
                    <label>No</label>
                    <input type="number" name="no" class="form-control" required="">
                </div>
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" required="">
                </div>
                <div class="form-group">
                    <label>Id</label>
                    <input type="number" name="id" class="form-control" required="">
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="alamat" class="form-control" required="">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <?php echo form_close() ?>
            </div>
        </div>
    </div>
</div>

<!-- Akhir Modal -->

<!-- Modal untuk Edit -->

<?php $no = 1;
foreach ($mahasiswa1 as $mhs1) : $no++; ?>
    <div class="modal fade" id="editmodal<?php echo $mhs1['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">FORM EDIT DATA</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo form_open_multipart('home/proses_edit_data'); ?>

                    <input type="hidden" name="id" value="<?php echo $mhs1['id']; ?>">

                    <div class=" form-group">
                        <label>No</label>
                        <input type="number" name="no" class="form-control" value="<?php echo $mhs1['no']; ?>">
                    </div>
                    <div class=" form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" value="<?php echo $mhs1['nama']; ?>">
                    </div>
                    <div class=" form-group">
                        <label>Id</label>
                        <input type="text" name="id" class="form-control" value="<?php echo $mhs1['id']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" name="alamat" class="form-control" value="<?php echo $mhs1['alamat']; ?>">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <?php echo form_close() ?>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>


<!-- Akhir Edit -->