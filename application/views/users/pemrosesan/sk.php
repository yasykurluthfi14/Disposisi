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
          <h5 class="panel-title"><i class="icon-folder-upload2"></i> Data Surat Keluar</h5>
          <hr style="margin:0px;">
          <div class="heading-elements">
            <ul class="icons-list">
              <li><a data-action="collapse"></a></li>
            </ul>
          </div>

                <?php
                if ($user->row()->level == 'user') { ?>
                    <br>
                    <a href="users/sk/t" class="btn btn-primary">+ <i class="icon-folder-upload2"></i> Surat Keluar baru</a>
                <?php
                } ?>
        </div>

        <table class="table datatable-basic" width="100%">
          <thead>
            <tr>
              <th width="30px;">No.</th>
              <th>Nomor</th>
              <th>Tanggal</th>
              <th>Pengirim</th>
              <th>Perihal</th>
              <th>dibaca</th>
              <th class="text-center" width="170"></th>
            </tr>
          </thead>
          <tbody>
              <?php
              $no = 1;
              foreach ($sk->result() as $baris) {
              ?>
                <tr <?php if($baris->peringatan == 1){echo 'style="background:yellow;"';} ?>>
                  <td><?php echo $no.'.'; ?></td>
                  <td><?php echo $baris->nomor_surat; ?></td>
                  <td><?php echo $baris->tanggal_nomor_surat; ?></td>
                  <td><?php echo $baris->nama_lengkap; ?></td>
                  <td><?php echo $baris->perihal; ?></td>
                  <td><?php
                        if ($baris->dibaca == 1) {?>
                            <button type="button" class="btn btn-success"><i class="icon-checkmark4"></i></button>
                      <?php
                        }?>
                  </td>
                  
                  <td>
                    <a href="users/sk/d/<?php echo $baris->id_surat_keluar; ?>" class="btn btn-default btn-xs"><i class="icon-eye"></i></a>
                    <?php
                    if ($user->row()->level == 'user') { ?>
                    <a href="users/sk/e/<?php echo $baris->id_surat_keluar; ?>" class="btn btn-success btn-xs"><i class="icon-pencil7"></i></a>
                    <a href="users/sk/h/<?php echo $baris->id_surat_keluar; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Apakah Anda yakin in?')"><i class="icon-trash"></i></a>
                    <?php
                    } ?>
                  </td>
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
