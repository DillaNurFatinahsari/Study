<div class="container-fluid">

    <h3><?php echo $title; ?></h3>
    <hr>
    <br>

    <form method="post" action="<?php echo base_url('Home/proses_tambah_data'); ?>">
        <div class="form-group row">
            <label for="no" class="col-sm-2 col-form-label">No</label>
            <div class="col-sm-5">
                <input type="number" class="form-control" name="no">
            </div>
        </div>

        <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="nama">
            </div>
        </div>

        <div class="form-group row">
            <label for="id" class="col-sm-2 col-form-label">Id</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="id">
            </div>
        </div>

        <div class="form-group row">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="alamat">

            </div>
        </div>

        <div class="form-group row">
            <label for="alamat" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-5">
                <button type="submit" class="btn btn-primary">Tambah</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </div>
        </div>

    </form>
</div>