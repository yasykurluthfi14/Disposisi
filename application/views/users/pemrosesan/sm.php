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
          <h5 class="panel-title"><i class="icon-folder-download2"></i> Data Surat Masuk</h5>
          <hr style="margin:0px;">
          <div class="heading-elements">
            <ul class="icons-list">
              <li><a data-action="collapse"></a></li>
            </ul>
          </div>

                <?php
                if ($user->row()->level == 'admin') { ?>
                    <br>
                    <a href="users/sm/t" class="btn btn-primary">+ <i class="icon-folder-download2"></i> Surat Masuk baru</a>
                <?php
                } ?>
        </div>

        <table class="table datatable-basic" width="100%">
          <thead>
            <tr>
              <th width="30px;">No.</th>
              <!-- <th>Nomor</th>
              <th>Tanggal</th> -->
              <th>No surat</th>
              <th>Tgl Surat</th>
              <!-- <th>Pengirim</th> -->
              <th>Perihal</th>
              <th>dibaca</th>
              <!-- <th>disposisi</th> -->
              <th class="text-center" width="170"></th>
            </tr>
          </thead>
          <tbody>
              <?php
              $no = 1;
              foreach ($sm->result() as $baris) {
              ?>
                <tr>
                  <td><?php echo $no.'.'; ?></td>
                  <!-- <td><?php echo $baris->nomor_surat; ?></td>
                  <td><?php echo $baris->tanggal_nomor_surat; ?></td> -->
                  <td><?php echo $baris->nomor_asal; ?></td>
                  <td><?php echo $baris->tanggal_nomor_asal; ?></td>
                  <!-- <td><?php echo $baris->pengirim; ?></td> -->
                  <td><?php echo $baris->perihal; ?></td>
                  <td><?php
                        if ($baris->dibaca == 1) {?>
                            <button type="button" class="btn btn-success"><i class="icon-checkmark4"></i></button>
                      <?php
                        }?>
                  </td>
                  <!-- <td><?php
                        if ($baris->disposisi == 1) {?>
                            <button type="button" class="btn btn-success"><i class="icon-checkmark4"></i></button>
                      <?php
                        }?>
                  </td> -->
                  <td>
                    <a href="users/sm/d/<?php echo $baris->id_surat_masuk; ?>" class="btn btn-default btn-xs"><i class="icon-eye"></i></a>
                    <?php
                    if ($user->row()->level == 'admin') { ?>
                    <a href="users/sm/e/<?php echo $baris->id_surat_masuk; ?>" class="btn btn-success btn-xs"><i class="icon-pencil7"></i></a>
                    <a href="users/sm/h/<?php echo $baris->id_surat_masuk; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Apakah Anda yakin?')"><i class="icon-trash"></i></a>
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
