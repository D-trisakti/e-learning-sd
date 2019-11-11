<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-7">
      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-lg">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Halaman Registrasi</h1>
                </div>
                <form class="user" method="post" action="<?= base_url('auth/registration') ?>">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Nama Lengkap" value="<?= set_value('nama'); ?>">
                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="Email" name="Email" placeholder="Alamat Email" value="<?= set_value('Email'); ?>">
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
                      Register Account
                    </button>

                </form>
                <hr>
                <!-- <div class="text-center">
                  <a class="small" href="">Forgot Password?</a>
                </div> -->
                <div class="text-center">
                  <a class="small" href="<?= base_url(); ?>auth/login">Sudah akun ? Masuk Disini</a>
                </div>
              </div>
            </div>
          </div>
          <footer class="sticky-footer bg-white">
            <div class="container my-auto">
              <div class="copyright text-center my-auto">
                <span>Copyright &copy; Rektor D 2019</span>
              </div>
            </div>
          </footer>
        </div>
      </div>
    </div>
  </div>
</div>