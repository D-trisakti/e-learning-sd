<form class="user" method="post" action="<?= base_url('admin/tambah_jadwal') ?>">
    <div class="form-group">
        <div class="container">
            <div class="form-group">
                <label for="hari">Hari</label>
                <select class="form-control" id="hari" name="hari">
                    <option value="Senin">Senin</option>
                    <option value="Selasa">Selasa</option>
                    <option value="Rabu">Rabu</option>
                    <option value="Kamis">Kamis</option>
                    <option value="Jumat">Jumat</option>
                    <option value="Sabtu">Sabtu</option>
                </select>
            </div>
        </div>
        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
    <div class="form-group">
        <div class="container">
            <label for="jam_mulai">mulai Pukul : </label>
            <input type="time" class="form-control form-control-user" id="jam_mulai" name="jam_mulai">
            <label for="jam_selesai">Selesai Pukul : </label>
            <input type="time" class="form-control form-control-user" id="jam_selesai" name="jam_selesai">
        </div>
    </div>
    </div>
    <div class="container">
        <div class="form-group">
            <label for="Guru">Guru</label>

            <select class="form-control" id="guru" name="guru">
                <?php foreach ($gurus as $gurus) : ?>
                    <option value="<?= $gurus['nama'] ?>"><?= $gurus['nama'] ?>-<?= $gurus['mapel'] ?></option>
                <?php endforeach ?>
            </select>
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

        <button type="submit" class="btn btn-primary btn-user btn-block">
            Tambahkan Data
        </button>
</form>