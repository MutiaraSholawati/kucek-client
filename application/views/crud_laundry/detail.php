<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data laundry
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $laundry['nama_laundry']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $laundry['kd_laundry']; ?></h6>
                    <p class="card-text"><?= $laundry['alamat']; ?></p>
                    <p class="card-text"><?= $laundry['kontak']; ?></p>
                    <a href="<?= base_url(); ?>laundry" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        
        </div>
    </div>
</div>