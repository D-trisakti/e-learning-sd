<form class="user" method="post" action="">
<input type="hidden" name="id" value="<?= $siswa['id'];?> ">
    <div class="form-group">
        <div class ="container">
        <label for="nama">Nama Lengkap</label>
        </div>
        <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Nama Lengkap" value="<?=($siswa['nama']); ?>">
        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
    <div class="form-group">
    <div class ="container">
        <!-- <label for="Email">Alamat Email</label>
        </div>
        <input type="text" class="form-control form-control-user" id="Email" name="Email" placeholder="Alamat Email" value="<?=($siswa['email']); ?>">
         -->
    </div>
    <div class="form-group">
    <div class ="container">
        <label for="nis">Nomor Induk Siswa</label>
        </div>
        <input type="text" class="form-control form-control-user" id="nis" name="nis" placeholder="Nomor Induk Siswa" value="<?=($siswa['nis']); ?>">
        <?= form_error('nis', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
    <div class="container">
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
    </div>
    <!-- <div class="form-group">
        <input type="password" class="form-control form-control-user" id="passwordlama" name="passwordlama" placeholder="Password Lama">

</div>
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <input type="password" class="form-control form-control-user" id="Password1" name="password1" placeholder="Password">

        </div>
        <div class="col-sm-6">
            <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
        </div>
    </div> -->
    <button type="submit" class="btn btn-primary btn-user btn-block">
        Ubah Data
    </button>

</form>