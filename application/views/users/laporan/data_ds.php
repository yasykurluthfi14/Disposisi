<!-- Main content -->
<div class="content-wrapper">
  <!-- Content area -->
  <div class="content">
    <!-- Dashboard content -->
    <div class="row">
      <!-- Basic datatable -->
      <div class="panel panel-flat">
        <div class="panel-heading">
          <h5 class="panel-title"><i class="icon-file-empty2"></i> Data Laporan Disposisi</h5>
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
          <th>Nomor</th>
                <th>No Surat</th>
                <th>No Agenda</th>
                <th>Sifat</th>
                <th>Tanggal</th>
                <th>Bagian</th>
                <th>Hal</th>
            </tr>
          </thead>
          <tbody>
              <?php
              $nomor = 1;
              foreach ($sql->result() as $baris) {
              ?>
                <tr>
                <td><?php echo $nomor++;  ?></td>
                <td><?php echo $baris->nomor_surat;  ?></td>
                <td><?php echo $baris->nomor_agenda;  ?></td>
                <td><?php echo $baris->sifat;  ?></td>
                <td><?php echo $baris->tanggal;  ?></td>
                <td><?php echo $baris->bagian;  ?></td>
                <td><?php echo $baris->hal;  ?></td>
                </tr>
              <?php
              $nomor++;
              } ?>
          </tbody>
        </table>
      </div>
      <!-- /basic datatable -->
    </div>
    <!-- /dashboard content -->
