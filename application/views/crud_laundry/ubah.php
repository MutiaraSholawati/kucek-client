<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Ubah Data Laundry
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="kode" value="<?= $laundry['kd_laundry']; ?>">
                        <div class="form-group">
                            <label for="kode">Kode Laundry</label>
                            <input type="text" name="kode" class="form-control" id="kode" value="<?= $laundry['kd_laundry']; ?>">
                            <small class="form-text text-danger"><?= form_error('kode'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" value="<?= $laundry['nama_laundry']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $laundry['alamat']; ?>">
                            <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="kontak">Kontak</label>
                            <input type="text" name="kontak" class="form-control" id="kontak" value="<?= $laundry['kontak']; ?>">
                            <small class="form-text text-danger"><?= form_error('kontak'); ?></small>
                        </div>
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>