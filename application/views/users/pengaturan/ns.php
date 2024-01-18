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
          <h5 class="panel-title"><i class="icon-cube"></i> Data Nomor Surat</h5>
          <hr style="margin:0px;">
          <div class="heading-elements">
            <ul class="icons-list">
              <li><a data-action="collapse"></a></li>
            </ul>
          </div>

                <?php
                if ($user->row()->level != 's_admin') { ?>
                    <br>
                    <a href="users/ns/t" class="btn btn-primary">+ <i class="icon-cube"></i> Nomor Surat</a>
                <?php
                } ?>
        </div>

        <table class="table datatable-basic" width="100%">
          <thead>
            <tr>
              <th width="30px;">No.</th>
              <th>Nomor Surat</th>
              <th>Keterangan</th>
              <?php
              if ($user->row()->level != 's_admin') { ?>
              <th class="text-center" width="170"></th>
              <?php
              } ?>
            </tr>
          </thead>
          <tbody>
              <?php
              $no = 1;
              foreach ($ns->result() as $baris) {
              ?>
                <tr>
                  <td><?php echo $no.'.'; ?></td>
                  <td><?php echo $baris->nomor_surat; ?></td>
                  <td><?php echo $baris->ket; ?></td>
                  <?php
                  if ($user->row()->level != 's_admin') { ?>
                  <td>
                    <a href="users/ns/e/<?php echo $baris->id_ns; ?>" class="btn btn-success btn-xs"><i class="icon-pencil7"></i></a>
                    <a href="users/ns/h/<?php echo $baris->id_ns; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Apakah Anda yakin?')"><i class="icon-trash"></i></a>
                  </td>
                  <?php
                  } ?>
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
