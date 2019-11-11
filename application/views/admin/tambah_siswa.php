<form class="user" method="post" action="<?= base_url('admin/tambah_siswa') ?>">
    <div class="form-group">
        <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Nama Lengkap" value="<?= set_value('nama'); ?>">
        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
    <div class="form-group">
        <input type="text" class="form-control form-control-user" id="Email" name="Email" placeholder="Alamat Email" value="<?= set_value('email'); ?>">
        <?= form_error('Email', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
    <div class="form-group">

        <input type="text" class="form-control form-control-user" id="nis" name="nis" placeholder="Nomor Induk Siswa" value="<?= set_value('nis'); ?>">
        <?= form_error('nis', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
    <div class="container">
        <div class="form-group">
            <label for="kelas">Kelas</label>
            <select class="form-control" id="kelas" name="kelas">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <input type="password" class="form-control form-control-user" id="Password1" name="password1" placeholder="Password">
            <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="col-sm-6">
            <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
        </div>
    </div>
    <button type="submit" class="btn btn-primary btn-user btn-block">
        Tambahkan Data
    </button>

</form>