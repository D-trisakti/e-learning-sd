<div class="container">

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
                   
                </div>
                <table class="table">
                    <thead class="thead-dark">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Mata Pelajaran</th>
            <th scope="col">nilai</th>
            <th scope="col">aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $counter = 1 ?>
        <?php foreach ($nil as $nil) : ?>
            
            <tr>
                <th scope="row"> <?php echo $counter++; ?>
                <td> <?= $nil['mapel'] ?></td>
                <td> <?= $nil['nilai'] ?></td>
                <td> <a href="<?php echo base_url(); ?>/guru/tambah_nilai/<?= $siswa['id']; ?>" class="badge badge-warning float-left"> ubah  Nilai</a> 
                </td>
            
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
            </div>
        </div>
