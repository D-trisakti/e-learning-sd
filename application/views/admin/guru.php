<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data guru</h6>
    </div>
    <a href="<?= base_url(); ?>admin/tambah_guru" class="btn btn-primary float-right">Tambah Data guru </a>
<a href ="<?= base_url(); ?>guru/cetakguru" class ="btn btn-warning float-right"> Cetak</a>
</div>
<div class="container">
    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data guru <strong>Berhasil !</strong>
                    <?= $this->session->flashdata('flash'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>

<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Nip</th>
                    <th>Mata Pelajaran</th>
                    <th>aksi</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Nama</th>
                    <th>Nip</th>
                    <th>Mata Pelajaran</th>
                    <th>aksi</th>
                </tr>
            </tfoot>
            <?php foreach ($guru as $guru) : ?>
                <tr>
                    <td><?= $guru['nama']; ?></td>
                    <td><?= $guru['nis']; ?></td>
                    <td><?= $guru['mapel']; ?></td>
                    <td>
                        <a href="<?php echo base_url(); ?>admin/hapus_guru/<?= $guru['id']; ?>" class="badge badge-danger float-left" onclick="return confirm ('yakin ?');">
                            Hapus </a>
                        <div class="ml-3">
                            <a href="<?php echo base_url(); ?>admin/detail_guru/<?= $guru['id']; ?>" class="badge badge-primary float-left"> Detail</a>
                            <a href="<?php echo base_url(); ?>admin/ubah_guru/<?= $guru['id']; ?>" class="badge badge-success float-left"> Ubah</a>
                    </td>
                </tr>
            <?php endforeach ?>
            <tbody>

        </table>
    </div>