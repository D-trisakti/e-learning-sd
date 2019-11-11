<div class="container">

    <div vlass='row mt-3'>
        <div vlass ='md-6'>
                 <div class="card">
                  <div class="card-header">
                    Form Tambah Nilai siswa
                    </div>
                    <div class="card-body">
                        <form action=""method="post">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control form-control-user" id="nama" name="nama" value="<?= ($siswa['nama']); ?>" readonly >
                        </div>
                            <div class="form-group">
                            <label for="nis">nis</label>
                                <input type="text" class="form-control form-control-user" id="nis" name="nis" value="<?= ($siswa['nis']); ?>" readonly >
                        </div>
                        <div class="form-group">
                            <label for="kelas">kelas</label>
                                <input type="text" class="form-control form-control-user" id="kelas" name="kelas" value="<?= ($siswa['kelas']); ?>" readonly >
                        </div>
                        <div class="container">
    <div class="form-group">
                            <label for="mapel">mapel</label>
                            <select class="form-control" id="mapel" name="mapel" readonly>
                            <?php foreach ( $mapel as $mapel) : ?>
                            <?php if( $mapel == $guru ['mapel'] ) : ?>
                            <option value="<?= $mapel; ?>" selected><?= $mapel; ?></option>
                            <?php else : ?>
                            <option value="<?= $mapel; ?>"><?= $mapel; ?></option>
                            <?php endif; ?>
                            <?php endforeach;?>
                            </select>
                        </div>
    </div>
                        <div class="form-group">
                                <label for="nilai">Nilai</label>
                                <input type="number" min='10' max ='100' class="form-control form-control-user" id="nilai" name="nilai" placeholder="Range 10-100" >
                        </div>
                        <button type="submit" class="btn btn-primary
                        float-right">Tambah Data </button>
                    </form>
                </div>
            </div>

        

        </div>
    </div>

</div>