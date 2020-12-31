<div class="container">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
    <!-- <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data laundry <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div> -->
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>laundry/tambah" class="btn btn-primary">Tambah
                Data Laundry</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari data laundry.." name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Daftar Laundry</h3>
            <?php if (empty($laundry)) : ?>
                <div class="alert alert-danger" role="alert">
                data laundry tidak ditemukan.
                </div>
            <?php endif; ?>
            <ul class="list-group">
                <?php foreach ($laundry as $dry) : ?>
                <li class="list-group-item">
                    <?= $dry['kd_laundry']; ?>
                    <?= $dry['nama_laundry']; ?>

                    <a href="<?= base_url(); ?>laundry/hapus/<?= $dry['kd_laundry']; ?>"
                        class="badge badge-danger float-right tombol-hapus">hapus</a>
                    <a href="<?= base_url(); ?>laundry/ubah/<?= $dry['kd_laundry']; ?>"
                        class="badge badge-success float-right">ubah</a>
                    <a href="<?= base_url(); ?>laundry/detail/<?= $dry['kd_laundry']; ?>"
                        class="badge badge-primary float-right">detail</a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

</div>