<!-- Main content -->
<div class="content-wrapper">
  <!-- Content area -->
  <div class="content">
<br><br>
    <!-- Dashboard content -->
    <div class="row">
      <div class="col-md-1"></div>
      <div class="panel panel-flat col-md-9">
        <?php
        echo $this->session->flashdata('msg');
        ?>
          <div class="panel-body">
            <fieldset class="content-group">
              <legend class="text-bold"><i class="icon-printer"></i> Laporan Surat Masuk</legend>
              <form class="form-inline" action="" method="post">
                <div class="form-group">Dari Tanggal
                  <div class="input-group">
                    <div class="input-group-addon"><i class="icon-calendar22"></i></div>
                    <input type="date" name="tgl1" class="form-control daterange-single" value="" maxlength="10" required>
                  </div>
                </div>
                &nbsp; Sampai dengan Tanggal
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon"><i class="icon-calendar22"></i></div>
                    <input type="date" name="tgl2" class="form-control daterange-single" value="" maxlength="10" required>
                  </div>
                </div>
                <button type="submit" name="data_lap" class="btn btn-default">Enter</button>
              </form>
            </fieldset>
          </div>

      </div>
      <div class="col-md-2"></div>
    </div>
    <!-- /dashboard content -->
