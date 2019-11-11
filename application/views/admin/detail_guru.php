<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Detail Data guru
                </div>
                <div class="card-body">
                    <h5 class="card-title">Nama lengkap : <?= $guru['nama']; ?></h5>
                    <p class="card-subtitle mb-2 text-muted">Nomor Induk Pengajar : <?= $guru['nis']; ?></p>
                    <p class="card-text">Alamat email : <?= $guru['email']; ?></p>
                    <p class="card-text">Mengajar Mata Pelajaran : <?= $guru['mapel']; ?></p>
                    <p class="card-text">Terdaftar sejak : <?= date('d F Y', $guru['date_created']); ?></p>
                    <a href="<?= base_url(); ?>admin/guru" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>