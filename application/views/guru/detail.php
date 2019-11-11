<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Detail Data Guru
                </div>
                <div class="card-body">
                    <h5 class="card-title">Nama lengkap Guru : <?= $user['nama']; ?></h5>
                    <p class="card-subtitle mb-2 text-muted">Nomor Induk : <?= $user['nis']; ?></p>
                    <p class="card-text">Alamat email : <?= $user['email']; ?></p>
                    <p class="card-text">Mengajar Mata Pelajaran : <?= $user['mapel']; ?></p>
                    <p class="card-text">Terdaftar sejak : <?= date('d F Y', $user['date_created']); ?></p>
                    <a href="<?= base_url(); ?>/guru" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>