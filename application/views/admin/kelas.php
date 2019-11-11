<div class="card-body">
    <div class="table-responsive">
    <div class="container">
    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data <strong>Berhasil !</strong>
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
            <a href="<?php echo base_url() ?>/admin/detail_kelas1 " class="badge badge-success float-left"> Detail<a>
            <a href="<?php echo base_url() ?>/admin/jadwalkls1 " class="badge badge-primary float-left"> Jadwal<a>            
            <a href="<?php echo base_url() ?>/admin/cetaksiswakls1 " class="badge badge-warning float-left"> Cetak<a>           
        </th>
            </tr>
            <tr>
            <th>2</th>
            <th>
            <a href="<?php echo base_url() ?>/admin/detail_kelas2 " class="badge badge-success float-left"> Detail<a>
            <a href="<?php echo base_url() ?>/admin/jadwalkls2 " class="badge badge-primary float-left"> Jadwal<a> 
            <a href="<?php echo base_url() ?>/admin/cetaksiswakls2 " class="badge badge-warning float-left"> Cetak<a>              
            </th>
            </tr>
            <tr>
            <th>3</th>
            <th>
            <a href="<?php echo base_url() ?>/admin/detail_kelas3 " class="badge badge-success float-left"> Detail<a>
            <a href="<?php echo base_url() ?>/admin/jadwalkls3 " class="badge badge-primary float-left"> Jadwal<a>
            <a href="<?php echo base_url() ?>/admin/cetaksiswakls3 " class="badge badge-warning float-left"> Cetak<a>               
            </th>
            </tr>
            <tr>
            <th>4</th>
            <th>
            <a href="<?php echo base_url() ?>/admin/detail_kelas4 " class="badge badge-success float-left"> Detail<a>
            <a href="<?php echo base_url() ?>/admin/jadwalkls4 " class="badge badge-primary float-left"> Jadwal<a> 
            <a href="<?php echo base_url() ?>/admin/cetaksiswakls4 " class="badge badge-warning float-left"> Cetak<a>              
            </th>
            </tr>
            <tr>
            <th>5</th>
            <th>
            <a href="<?php echo base_url() ?>/admin/detail_kelas5 " class="badge badge-success float-left"> Detail<a>
            <a href="<?php echo base_url() ?>/admin/jadwalkls5 " class="badge badge-primary float-left"> Jadwal<a>   
            <a href="<?php echo base_url() ?>/admin/cetaksiswakls5 " class="badge badge-warning float-left"> Cetak<a>            
            </th>
            </tr>
            <tr>
            <th>6</th>
            <th>
            <a href="<?php echo base_url() ?>/admin/detail_kelas6 " class="badge badge-success float-left"> Detail<a>
            <a href="<?php echo base_url() ?>/admin/jadwalkls6 " class="badge badge-primary float-left"> Jadwal<a>
            <a href="<?php echo base_url() ?>/admin/cetaksiswakls6 " class="badge badge-warning float-left"> Cetak<a>               
            </th>
            </tr>
            </tbody>

        </table>
    </div>