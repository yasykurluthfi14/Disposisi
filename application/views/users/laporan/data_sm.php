<!-- Main content -->
<div class="content-wrapper">
  <!-- Content area -->
  <div class="content">
    <?php
    echo $this->session->flashdata('msg');
    ?>
    <!-- Dashboard content -->
    <div class="row">
      <!-- Basic datatable -->
      <div class="panel panel-flat">
        <div class="panel-heading">
          <h5 class="panel-title"><i class="icon-file-empty2"></i> Data Laporan Surat Masuk</h5>
          <hr style="margin:0px;">
          <div class="heading-elements">
            <ul class="icons-list">
              <li><a data-action="collapse"></a></li>
            </ul>
          </div>
          <form action="" method="post" target="_blank">
            <button type="submit" name="btncetak" class="btn btn-primary">Cetak Laporan</button>
          </form>
        </div>

        <table class="table datatable-basic" width="100%">
          <thead>
            <tr>
              <th width="1%">No</th>
              <th width="10%">Tgl. Surat</th>
              <th width="10%">No. Surat</th>
              <th width="20%">Perihal</th>
            </tr>
          </thead>
          <tbody>
              <?php
              $no = 1;
              foreach ($sql->result() as $baris) {
              ?>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $baris->tanggal_nomor_asal; ?></td>
                  <td><?php echo $baris->nomor_asal; ?></td>
                  <td><?php echo $baris->perihal; ?></td>
                </tr>
              <?php
              $no++;
              } ?>
          </tbody>
        </table>
      </div>
      <!-- /basic datatable -->
    </div>
    <!-- /dashboard content -->
