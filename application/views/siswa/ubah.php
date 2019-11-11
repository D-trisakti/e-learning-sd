<div class="container">

    <div vlass='row mt-3'>
        <div vlass ='md-6'>
                 <div class="card">
                  <div class="card-header">
                    Form Ubah Data Siswa 
                    </div>
                    <div class="card-body">
                        <form action=""method="post">
                        <input type="hidden" name="id" value="<?= $siswa['id'];?> ">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                 <input type="text" name="nama" class="form-control" id="nama" value="<?= $siswa['nama'];?>">
                                 <small class="form-text text-danger"><?=form_error('nama');?></small>
                        </div>
                            <div class="form-group">
                                <label for="nis">NIS</label>
                                 <input type="number" name="nis" class="form-control" id="nis" value="<?= $siswa['nis'];?>">
                                 <small class="form-text text-danger"><?=form_error('nis');?></small>
                        </div>
                        <div class="form-group">
                            <label for="kelas">Kelas</label>
                            <select class="form-control" id="kelas" name="kelas">
                            <?php foreach ( $kelas as $kls) : ?>
                            <?php if( $kls == $siswa ['kelas'] ) : ?>
                            <option value="<?= $kls; ?>" selected><?= $kls; ?></option>
                            <?php else : ?>
                            <option value="<?= $kls; ?>"><?= $kls; ?></option>
                            <?php endif; ?>
                            <?php endforeach;?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary
                        float-right">Ubah Data </button>
                    </form>
                </div>
            </div>

        

        </div>
    </div>

</div>