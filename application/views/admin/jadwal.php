<div class="card-body">
    <div class="container"><a href="<?= base_url(); ?>admin/tambah_jadwal" class="btn btn-primary float-right">Tambah Jadwal </a>

        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Hari</th>
                        <th>Jam</th>
                        <th>Nama Guru</th>
                        <th>Mata Pelajaran</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Hari</th>
                        <th>Jam</th>
                        <th>Nama Guru</th>
                        <th>Mata Pelajaran</th>
                    </tr>
                </tfoot>
                <?php foreach ($jadwal as $jadwal) : ?>
                    <tr>
                        <td><?= $jadwal['hari']; ?></td>
                        <td><?= $jadwal['jam_mulai']; ?> - <?= $jadwal['jam_selesai']; ?></td>
                        <td><?= $jadwal['nama_guru']; ?></td>
                        <td><?= $jadwal['nama_mapel']; ?></td>

                    </tr>
                <?php endforeach ?>
                <tbody>

            </table>
        </div>
    </div>