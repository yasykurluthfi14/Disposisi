<?php
$user = $user->roW();
if ($user->level == "s_admin") {
    $level = "Super Admin";
}else{
    $level = $user->level;
}?>
<!-- Main content -->
<div class="content-wrapper">

  <!-- Content area -->
  <div class="content">

    <!-- Dashboard content -->
    <div class="row">

      <div class="col-md-6">
      <div class="panel panel-flat">
          <div class="panel-body">
              <center>
              <div style="display: flex; gap: 1em">
						<a href="<?= site_url('views/remove_avatar') ?>" class="txt-">Remove Avatar</a>
						<a href="<?= site_url('admin/setting/upload_avatar') ?>">Change Avatar</a>
                <img src="foto/default.png" alt="<?php echo $user->nama_lengkap; ?>" class="img-circle" width="176">
              </center>
            <br>
            <fieldset class="content-group">
              <!-- <legend class="text-bold"><i class="icon-bookmark2"></i>Tentang Saya</legend>
              <i class="icon-user"></i> <b>Nama Lengkap</b> : <?php echo $user->nama_lengkap; ?><br> -->
              <hr style="margin-top:0px;">
              <i class="icon-calendar"></i> <b>Tanggal Daftar</b> : <?php echo $user->tanggal_daftar; ?>
              <hr style="margin-top:10px;margin-bottom:10px;">
              <i class="icon-watch2"></i> <b>Login Terakhir</b> : <?php echo $user->terakhir_login; ?>
            </fieldset>
          </form>
          </div>
      </div>

      <div class="panel panel-flat">
          <div class="panel-body">
            <fieldset class="content-group">
              <legend class="text-bold"><i class="icon-key"></i> Ubah Katasandi</legend>
              <?php
              echo $this->session->flashdata('msg2');
              ?>
              <form class="form-horizontal" action="" method="post">
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

            </fieldset>
            <div class="col-md-12">
              <button type="submit" name="btnupdate2" class="btn btn-primary" style="float:right;">Simpan</button>
            </div>
          </form>
          </div>
      </div>
      </div>

      <div class="col-md-6">
      <div class="panel panel-flat">
          <div class="panel-body">
            <fieldset class="content-group">
              <legend class="text-bold"><i class="icon-user"></i> Ubah Profile</legend>
              <?php
              echo $this->session->flashdata('msg');
              ?>
              <form class="form-horizontal" action="" method="post">
                <div class="form-group">
                  <label class="control-label col-lg-3">Nama Pengguna</label>
                  <div class="col-lg-9">
                    <input type="text" name="username" class="form-control" value="<?php echo $user->username; ?>" placeholder="Nama Pengguna" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-3">Nama Lengkap</label>
                  <div class="col-lg-9">
                    <input type="text" name="nama_lengkap" class="form-control" value="<?php echo $user->nama_lengkap; ?>" placeholder="Nama Lengkap" maxlength="100" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-3">Email</label>
                  <div class="col-lg-9">
                    <input type="email" name="email" class="form-control" value="<?php echo $user->email; ?>" placeholder="Email" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-3">Level</label>
                  <div class="col-lg-9">
                    <input type="text" name="" class="form-control" value="<?php echo $level; ?>" placeholder="Level User" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-3">Alamat</label>
                  <div class="col-lg-9">
                    <textarea name="alamat" rows="3" cols="80" class="form-control" placeholder="Alamat" required><?php echo $user->alamat; ?></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-3">Telepon</label>
                  <div class="col-lg-9">
                    <input type="text" name="telp" class="form-control" value="<?php echo $user->telp; ?>" placeholder="Level User" maxlength="30" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-3">Pengalaman</label>
                  <div class="col-lg-9">
                    <textarea name="pengalaman" rows="3" cols="80" class="form-control" placeholder="Pengalaman" required><?php echo $user->pengalaman; ?></textarea>
                  </div>
                </div>

            </fieldset>
            <div class="col-md-12">
              <button type="submit" name="btnupdate" class="btn btn-primary" style="float:right;">Simpan</button>
            </div>
          </form>
          </div>
      </div>
      </div>


    </div>
    <!-- /dashboard content -->
