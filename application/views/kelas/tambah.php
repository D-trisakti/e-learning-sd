<div class="container">

    <div vlass='row mt-3'>
        <div vlass ='md-6'>
                 <div class="card">
                  <div class="card-header">
                    Form Tambah Data Guru 
                    </div>
                    <div class="card-body">
                        <form action=""method="post">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                 <input type="text" name="nama" class="form-control" id="nama">
                                 <small class="form-text text-danger"><?=form_error('nama');?></small>
                        </div>
                            <div class="form-group">
                                <label for="nis">NIP</label>
                                 <input type="number" name="nip" class="form-control" id="nip">
                                 <small class="form-text text-danger"><?=form_error('nip');?></small>
                        </div>
                        <div class="form-group">
                            <label for="[mapel]">Mata Pelajaran</label>
                            <select class="form-control" id="mapel" name="mapel">
                            <option value="Matematika">Matematika</option>
                            <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                            <option value="Ilmu Pengetahuan Alam">Ilmu Pengetahuan Alam</option>
                            <option value="Ilmu Pengetahuan Sosial">Ilmu Pengetahuan Sosial</option>
                            <option value="Pendidikan Agama">Pendidikan Agama</option>
                            <option value="Seni Budaya">Seni Budaya</option>
                            <option value="Pendidikan Kewarganegaraan">Pendidikan Kewarganegaraan</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary
                        float-right">Tambah Data </button>
                    </form>
                </div>
            </div>

        

        </div>
    </div>

</div>