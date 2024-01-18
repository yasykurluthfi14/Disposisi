<!-- Password recovery -->
<form action="" method="post">
  <div class="panel panel-body login-form">
    <div class="text-center">
      <div class="icon-object border-warning text-warning"><i class="icon-spinner11"></i></div>
      <h5 class="content-group">Reset Password <small class="display-block">Ubah Password Baru</small></h5>

      <?php
      echo $this->session->flashdata('msg');
      ?>

    </div>

    <div class="form-group has-feedback">
      <input type="text" class="form-control" name="un" placeholder="Username" value="<?php echo ucwords($this->uri->segment(4)); ?>" required readonly>
      <div class="form-control-feedback">
        <i class="icon-user text-muted"></i>
      </div>
    </div>

    <div class="form-group has-feedback">
      <input type="password" class="form-control" name="password" placeholder="Masukkan Password Baru" required autofocus>
      <div class="form-control-feedback">
        <i class="icon-user-lock text-muted"></i>
      </div>
    </div>

    <div class="form-group has-feedback">
      <input type="password" class="form-control" name="password2" placeholder="Ulangi Password Baru" required>
      <div class="form-control-feedback">
        <i class="icon-user-lock text-muted"></i>
      </div>
    </div>

    <div class="col-md-12">
      <div class="col-md-6">
        <div class="form-group">
          <a href="" class="btn bg-blue btn-block"><i class="icon-circle-left2 position-left"></i> Login</a>
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <button type="submit" name="btnkirim" class="btn bg-blue btn-block">Simpan <i class="icon-arrow-right14 position-right"></i></button>
        </div>
      </div>
    </div>

  </div>
</form>
<!-- /password recovery -->
