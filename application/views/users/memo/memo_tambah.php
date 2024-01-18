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
                <legend class="text-bold"><i class="icon-file-text2"></i> Tambah Memo</legend>
                <?php
                echo $this->session->flashdata('msg');
                ?>
                <form class="form-horizontal" action="" method="post">
                  <div class="form-group">
                    <label class="control-label col-lg-3">Judul Memo</label>
                    <div class="col-lg-9">
                      <input type="text" name="judul_memo" class="form-control" value="" placeholder="Judul Memo" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-lg-3">Memo</label>
                    <div class="col-lg-9">
                      <textarea name="memo" rows="2" cols="80" class="form-control" placeholder="Memo" required></textarea>
                    </div>
                  </div>

                  <a href="users/memo" class="btn btn-default"><< Kembali</a>
                  <button type="submit" name="btnsimpan" class="btn btn-primary" style="float:right;">Simpan</button>
                </form>

              </fieldset>


            </div>

        </div>
      </div>
    </div>
    <!-- /dashboard content -->
