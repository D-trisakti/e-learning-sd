<H4><?= $judul ?></H4>
<table class="table">

    <thead class="thead-dark">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Nis</th>
            <th scope="col">Kelas</th>
            <th scope="col">aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $counter = 1 ?>
        <?php foreach ($kelas as $kls) : ?>
            <tr>
                <th scope="row"> <?php echo $counter++; ?>
                <td><?= $kls['nama'] ?></td>
                <td><?= $kls['nis'] ?></td>
                <td><?= $kls['kelas'] ?></td>
                <td>
                <a href="<?php echo base_url(); ?>/guru/tambah_nilai/<?= $kls['id']; ?>" class="badge badge-success float-left"> tambah Nilai</a> 
                <a href="<?php echo base_url(); ?>/guru/detail_siswa/<?= $kls['id']; ?>" class="badge badge-danger float-left"> Detail Nilai</a></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>