<H4><?= $judul ?></H4>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Nis</th>
            <th scope="col">Kelas</th>
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
            </tr>
        <?php endforeach ?>
    </tbody>
</table>