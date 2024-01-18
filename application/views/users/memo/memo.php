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
          <h5 class="panel-title"><i class="icon-file-text2"></i> Data Memo</h5>
          <hr style="margin:0px;">
          <div class="heading-elements">
            <ul class="icons-list">
              <li><a data-action="collapse"></a></li>
            </ul>
          </div>

                <?php
                if ($user->row()->level == 'admin') { ?>
                    <br>
                    <a href="users/memo/t" class="btn btn-primary">+ <i class="icon-file-text2"></i> Memo</a>
                <?php
                } ?>
        </div>

        <table class="table datatable-basic" width="100%">
          <thead>
            <tr>
              <th width="30px;">No.</th>
              <th>Judul Memo</th>
              <th>Memo</th>
              <?php
              if ($user->row()->level == 'user') { ?>
              <th class="text-center" width="170"></th>
              <?php
              } ?>
            </tr>
          </thead>
          <tbody>
              <?php
              $no = 1;
              foreach ($memo->result() as $baris) {
              ?>
                <tr>
                  <td><?php echo $no.'.'; ?></td>
                  <td><?php echo $baris->judul_memo; ?></td>
                  <td><?php echo $baris->memo; ?></td>
                  <?php
                  if ($user->row()->level == 'user') { ?>
                  <td>
                    <a href="users/memo/e/<?php echo $baris->id_memo; ?>" class="btn btn-success btn-xs"><i class="icon-pencil7"></i></a>
                    <a href="users/memo/h/<?php echo $baris->id_memo; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Apakah Anda yakin?')"><i class="icon-trash"></i></a>
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
