<div class="card-body">
<?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Tugas <strong>Berhasil !</strong>
                    <?= $this->session->flashdata('flash'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead class="table-dark">
                <th>kelas</th>
                <th>kode tugas</th>
                <th>Nama Guru</th>
                <th>Mata pelajaran</th>
                <th>Status</th>
                <th>Waktu Pengumpulan</th>
                <th>aksi</th>
            </thead>
            <tfoot class="table-dark">
                <th>kelas</th>
                <th>kode tugas</th>
                <th>Nama guru</th>
                <th>Mata pelajaran</th>
                <th>Status</th>
                <th>Waktu Pengumpulan</th>
                <th>aksi</th>
            </tfoot>
            <tbody class ="table-light">
            <?php foreach ($tugas as $tgs) : ?>
            <tr>   
                <td><?= $tgs['kelas'] ?></td>
                <td><?= $tgs['kode_tugas'] ?></td>
                <td><?= $tgs['guru'] ?></td>
                <td><?= $tgs['mapel'] ?></td>
                <td><?= $tgs['status'] ?></td>
                <td><?= $tgs['waktu_pengumpulan'] ?></td>
                <td>
                        <a href="<?php echo base_url(); ?>guru/hapus_tugas/<?= $tgs['id']; ?>" class="badge badge-danger float-left" onclick="return confirm ('yakin ?');">
                            Hapus </a>
                        <div class="ml-3">
                            <a href="<?php echo base_url(); ?>guru/detail_tugas/<?= $tgs['id']; ?>" class="badge badge-primary float-left"> Detail</a>
                    </td>
            </tr>
                <?php endforeach ?>
                </tbody>
        </table>
    </div>
</div>