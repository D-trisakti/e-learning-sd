<div class="card-body">
    <div class="table-responsive">
    <div class="container">
    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data nilai<strong>Berhasil !</strong>
                    <?= $this->session->flashdata('flash'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                <th>Nama Kelas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Nama Kelas</th>
                    <th>Aksi</th>
                </tr>
            </tfoot>
            <tbody>
            <tr>
            <th>1</th>
            <th>
            <a href="<?php echo base_url() ?>/guru/detail_tugas_1 " class="badge badge-success float-left"> Detail<a>
            </th>
            </tr>
            <tr>
            <th>2</th>
            <th>
            <a href="<?php echo base_url() ?>/guru/detail_tugas_2 " class="badge badge-success float-left"> Detail<a>
            </th>
            </tr>
            <tr>
            <th>3</th>
            <th>
            <a href="<?php echo base_url() ?>/guru/detail_tugas_3 " class="badge badge-success float-left"> Detail<a>
            </th>
            </tr>
            <tr>
            <th>4</th>
            <th>
            <a href="<?php echo base_url() ?>/guru/detail_tugas_4 " class="badge badge-success float-left"> Detail<a>         
            </th>
            </tr>
            <tr>
            <th>5</th>
            <th>
            <a href="<?php echo base_url() ?>/guru/detail_tugas_5 " class="badge badge-success float-left"> Detail<a>         
            </th>
            </tr>
            <tr>
            <th>6</th>
            <th>
            <a href="<?php echo base_url() ?>/guru/detail_tugas_6 " class="badge badge-success float-left"> Detail<a>
            </th>
            </tr>
            </tbody>

        </table>
    </div>