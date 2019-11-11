<div class="container">

            <div class="card">
                <div class="card-header">
                    Detail Data tugas
                </div>
                <div class="card-body">
                    <h5 class="card-title">Nama Kode tugas : <?= $tugas['kode_tugas']; ?></h5>
                    <p class="card-subtitle mb-2 text-muted">Tugas Untuk kelas : <?= $tugas['kelas']; ?></p>
                    <p class="card-text">Mata Pelajaran : <?= $tugas['mapel']; ?></p>
                    <p class="card-text">Status Tugas :<?= $tugas['status']; ?></p>
                    <p class="card-text">Waktu Pengumpulan Tugas :<?= $tugas['waktu_pengumpulan']; ?></p>
                   <a href="<?= base_url('guru/download_tugas/') . $tugas['file']; ?>">Download file</a>
                    <p class="card-text">Deskripsi Tugas :<?= $tugas['deskripsi']; ?></p>
                   
                   
                </div>
            </div>
        </div>
