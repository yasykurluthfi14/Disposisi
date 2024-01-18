<!-- Main content -->
<div class="content-wrapper">
  <!-- Content area -->
  <div class="content">

    <!-- Dashboard content -->
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <div class="panel panel-flat">

            <div class="panel-body">

              <fieldset class="content-group">
                <legend class="text-bold"><i class="icon-user"></i> Tambah Pengguna</legend>
                <?php
                echo $this->session->flashdata('msg');
                ?>
                <form class="form-horizontal" action="" method="post">
                  <div class="form-group">
                    <label class="control-label col-lg-3">Level</label>
                    <div class="col-lg-9">
                      <select class="form-control" name="level" required>
                        <option value="">- Pilih Level Pengguna -</option>
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                        <option value="s_admin">Super Admin</option>
                        <option value="sekretaris">Sekretaris</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-lg-3">Nama Pengguna</label>
                    <div class="col-lg-9">
                      <input type="text" name="username" class="form-control" value="" placeholder="Nama Pengguna" maxlength="100" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-3">Katasandi</label>
                    <div class="col-lg-9">
                      <input type="password" name="password" class="form-control" value="" placeholder="Katasandi" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-lg-3">Ulangi Katasandi</label>
                    <div class="col-lg-9">
                      <input type="password" name="password2" class="form-control" value="" placeholder="Ulangi Katasandi" required>
                    </div>
                  </div>

                  <a href="users/pengguna" class="btn btn-default"><< Kembali</a>
                  <button type="submit" name="btnsimpan" class="btn btn-primary" style="float:right;">Simpan</button>
                </form>

              </fieldset>


            </div>

        </div>
      </div>
    </div>
    <!-- /dashboard content -->
