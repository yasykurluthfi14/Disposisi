<!-- Password recovery -->
<form action="" method="post">
  <div class="panel panel-body login-form">
    <div class="text-center">
      <div class="icon-object border-warning text-warning"><i class="icon-spinner11"></i></div>
      <h5 class="content-group">Lupa Password <small class="display-block">Masukkan Email yang valid</small></h5>

      <?php
      echo $this->session->flashdata('msg');
      ?>

    </div>

    <div class="form-group has-feedback">
      <input type="email" class="form-control" name="email" placeholder="Masukkan Email" required>
      <div class="form-control-feedback">
        <i class="icon-mail5 text-muted"></i>
      </div>
    </div>

    <div class="col-md-12">
      <div class="col-md-6">
        <div class="form-group">
          <a href="" class="btn bg-blue btn-block"><i class="icon-circle-left2 position-left"></i> Kembali</a>
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <button type="submit" name="btnkirim" class="btn bg-blue btn-block">Kirim <i class="icon-arrow-right14 position-right"></i></button>
        </div>
      </div>
    </div>

  </div>
</form>
<!-- /password recovery -->
