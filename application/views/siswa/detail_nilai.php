<div class="container">

            <div class="card">
                <div class="card-header">
                    Detail Data Siswa
                </div>
                <div class="card-body">
                    <h5 class="card-title">Nama lengkap siswa : <?= $user['nama']; ?></h5>
                    <p class="card-subtitle mb-2 text-muted">Nomor Induk Siswa : <?= $user['nis']; ?></p>
                    <p class="card-text">Alamat email : <?= $user['email']; ?></p>
                    <p class="card-text">Kelas : <?= $user['kelas']; ?></p>
                    <p class="card-text">Terdaftar sejak : <?= date('d F Y', $user['date_created']); ?></p>
                   
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
               
                
            
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
            </div>
        </div>
