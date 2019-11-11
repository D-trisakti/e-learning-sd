<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Detail Data Siswa
                </div>
                <div class="card-body">
                    <h5 class="card-title">Nama lengkap siswa : <?= $siswa['nama']; ?></h5>
                    <p class="card-subtitle mb-2 text-muted">Nomor Induk Siswa : <?= $siswa['nis']; ?></p>
                    <p class="card-text">Alamat email : <?= $siswa['email']; ?></p>
                    <p class="card-text">Kelas : <?= $siswa['kelas']; ?></p>
                    <p class="card-text">Terdaftar sejak : <?= date('d F Y', $siswa['date_created']); ?></p>
                    <a href="<?= base_url(); ?>admin/siswa" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>