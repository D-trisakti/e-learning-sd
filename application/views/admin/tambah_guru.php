<form class="user" method="post" action="<?= base_url('admin/tambah_guru') ?>">
    <div class="form-group">
        <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Nama Lengkap" value="<?= set_value('nama'); ?>">
        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
    <div class="form-group">
        <input type="text" class="form-control form-control-user" id="Email" name="Email" placeholder="Alamat Email" value="<?= set_value('Email'); ?>">
        <?= form_error('Email', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
    <div class="form-group">

        <input type="text" class="form-control form-control-user" id="nis" name="nis" placeholder="Nomor Induk Pengajar" value="<?= set_value('nis'); ?>">
        <?= form_error('nis', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
    <div class="container">
        <div class="form-group">
            <label for="mapel">Mata Pelajaran</label>
            <select class="form-control" id="mapel" name="mapel">
                <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                <option value="Bahasa Sunda">Bahasa Sunda</option>
                <option value="Bahasa Inggris">Bahasa Inggris</option>
                <option value="Pendidikan Agama">Pendidikan Agama</option>
                <option value="Pendidikan Kewarganegaraan">Pendidikan Kewarganegaraan</option>
                <option value="Matematika">Matematika</option>
                <option value="Ilmu Pengetahuan Alam">Ilmu Pengetahuan Alam</option>
                <option value="Ilmu Pengetahuan Sosial">Ilmu Pengetahuan Sosial</option>
                <option value="Seni Budaya">Seni Budaya</option>
                <option value="Pendidikan Jasmani Kesehatan">Pendidikan Jasmani Kesehatan</option>

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