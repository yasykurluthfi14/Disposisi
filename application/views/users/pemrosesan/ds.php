<!-- Main content -->
<div class="content-wrapper">
  <!-- Content area -->
  <div class="content">
    <!-- Dashboard content -->
    <div class="row">
      <!-- Basic datatable -->
      <div class="panel panel-flat">
          <h5 class="panel-title"><i class="icon-folder-download2"></i> Data Disposisi</h5>
          <hr style="margin:0px;">
          <div class="heading-elements">
            <ul class="icons-list">
              <li><a data-action="collapse"></a></li>
            </ul>
          </div>
    <div class="container">
      <!-- edited by ujik -->
      <!-- <a href="" class=""> -->
        <!-- <a href="<?php echo base_url('users/create/tambahdisposisi'); ?>" class=""> -->

        <?php
                if ($user->row()->level == 'admin') { ?>
                    <br>
                    <a href="users/create/tambahdisposisi" class="btn btn-primary">+ <i class="icon-folder-download2"></i> Disposisi</a>
                <?php
                } ?>
       <table class="group-grid table table-hover table-bordered table-responsive zebra-striped" id="memberGrid">
            <tr>
                <th>Nomor</th>
                <th>No Surat</th>
                <th>No Agenda</th>
                <th>Sifat</th>
                <th>Tanggal</th>
                <th>Bagian</th>
                <th>Hal</th>
                <th>File</th>
                <th></th>
            </tr>
            <?php $nomor = 1; ?>
            <?php foreach ($disposisi as $row) : ?>
                <tr>
                    <td><?php echo $nomor++;  ?></td>
                    <td><?= $row->nomor_surat ?></td>
                    <td><?= $row->nomor_agenda ?></td>
                    <td><?= $row->sifat ?></td>
                    <td><?= $row->tanggal ?></td>
                    <td><?= $row->bagian ?></td>
                    <td><?= $row->hal ?></td>
                    <td><?= $row->file ?></td>
                    <td>
                     <a href="<?php echo site_url('users/detail/' . $row->id_disposisi); ?>"><i class="icon-eye"></i></a> 
                    <?php
                    if ($user->row()->level == 'admin') { ?>
                        <a href="<?php echo site_url('users/editdisposisis/' . $row->id_disposisi); ?>" class="btn btn-success"><i class="icon-pencil7"></i></a>
                        <a href="<?php echo site_url('users/deletedisposisi/' . $row->id_disposisi); ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus barang ini?')"><i class="icon-trash"></i></a>
                        <?php
                    } ?>
                      </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
