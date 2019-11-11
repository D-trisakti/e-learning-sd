<div class="container">

    <div vlass='row mt-3'>
        <div vlass ='md-6'>
                 <div class="card">
                  <div class="card-header">
                    Form Tambah Data Siswa 
                    </div>
                    <div class="card-body">
                        <form action=""method="post">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                 <input type="text" name="nama" class="form-control" id="nama">
                                 <small class="form-text text-danger"><?=form_error('nama');?></small>
                        </div>
                            <div class="form-group">
                                <label for="nis">NIS</label>
                                 <input type="number" name="nis" class="form-control" id="nis">
                                 <small class="form-text text-danger"><?=form_error('nis');?></small>
                        </div>
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
                        <button type="submit" class="btn btn-primary
                        float-right">Tambah Data </button>
                    </form>
                </div>
            </div>

        

        </div>
    </div>

</div>