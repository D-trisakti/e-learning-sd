<?php echo form_open_multipart('guru/tambah_tugas'); ?>
    <div class="form-group">
        <div class="container">
        <input type="text" class="form-control" name ="kode" id ="kode" placeholder ="kode tugas"></input>
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
                <label for="Guru">Guru</label>

                <input type="text" class="form-control" name ="guru" id ="guru" readonly value="<?= ($user['nama']); ?>"></input>
                </input>
            </div>
            <label for= waktu">waktu pengumpulan : </label>
        <input type="date"  waktu.max = new Date().toISOString().split("T")[0]; id ="waktu" name ="waktu" ></input>
        <textarea name="deskripsi" id="deskripsi" cols="115" rows="10" placeholder ="Deskripsi Tugas "></textarea>
        
        <label for="berkas">Upload Sebuah File : </label>
        <input type="file" name ="berkas" id ="berkas"> </input>
      
            <button type="submit" class="btn btn-primary btn-user btn-block">
                Tambahkan Data
            </button>
</form>
