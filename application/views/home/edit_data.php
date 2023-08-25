<div class="container-fluid">

    <h3><?php echo $title; ?></h3>
    <hr>
    <br>

    <form method="post" action="<?php echo base_url('Home/proses_edit_data'); ?>">

        <input type="hidden" name="id" value="<?php echo $mahasiswa1['id']; ?> ">
</div>

<div class="form-group row">
    <label for="no" class="col-sm-2 col-form-label">No</label>
    <div class="col-sm-5">
        <input type="number" class="form-control" name="no" required="" value="<?php echo $mahasiswa1['no']; ?>">
    </div>
</div>
<div class="form-group row">
    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-5">
        <input type="text" class="form-control" name="nama" required="" value="<?php echo $mahasiswa1['nama']; ?>">
    </div>
</div>

<div class="form-group row">
    <label for="id" class="col-sm-2 col-form-label">Id</label>
    <div class="col-sm-5">
        <input type="text" class="form-control" name="id" required="" value="<?php echo $mahasiswa1['id']; ?>">
    </div>
    <div class="form-group row">
        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" name="alamat" required="" value="<?php echo $mahasiswa1['alamat']; ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="alamat" class="col-sm-2 col-form-label"></label>
        <div class="col-sm-5">
            <button type="submit" class="btn btn-primary">Ubah</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </div>
    </div>
    </form>
</div>