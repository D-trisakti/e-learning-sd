<div class="container">

    <div vlass='row mt-3'>
        <div vlass ='md-6'>
                 <div class="card">
                  <div class="card-header">
                    Form Ubah Data Guru
                    </div>
                    <div class="card-body">
                        <form action=""method="post">
                        <input type="hidden" name="id" value=" <?= $guru['id'];?> ">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                 <input type="text" name="nama" class="form-control" id="nama" value="<?= $guru['nama'];?>">
                                 <small class="form-text text-danger"><?=form_error('nama');?></small>
                        </div>
                            <div class="form-group">
                                <label for="nis">NIP</label>
                                 <input type="number" name="nip" class="form-control" id="nip" value="<?= $guru['nip'];?>">
                                 <small class="form-text text-danger"><?=form_error('nip');?></small>
                        </div>
                        <div class="form-group">
                            <label for="kelas">Mata Pelajaran</label>
                            <select class="form-control" id="Mapel" name="mapel">
                            <?php foreach ( $mapel as $pel) : ?>
                            <?php if( $pel == $guru ['mapel'] ) : ?>
                            <option value="<?= $pel; ?>" selected><?= $pel; ?></option>
                            <?php else : ?>
                            <option value="<?= $pel; ?>"><?= $pel; ?></option>
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