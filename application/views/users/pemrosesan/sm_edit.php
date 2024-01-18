<script src="assets/js/select2.min.js"></script>
<script src="assets/js/jquery-ui.js"></script>
<script>
$( function() {
  $( "#tanggal_nomor_surat" ).datepicker();
} );
$( function() {
  $( "#tanggal_nomor_asal" ).datepicker();
} );
</script>
<script type="text/javascript" src="assets/js/core/app.js"></script>


<!-- Main content -->
<div class="content-wrapper">
  <!-- Content area -->
  <div class="content">

    <!-- Dashboard content -->
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <div class="panel panel-flat">

            <div class="panel-body">

              <fieldset class="content-group">
                <legend class="text-bold"><i class="icon-folder-download2"></i> Edit Surat Masuk</legend>
                <?php
                echo $this->session->flashdata('msg');
                ?>
                <div class="msg"></div>
                <form class="form-horizontal" action="" method="post">
                    <!-- <div class="form-group">
                      <label class="control-label col-lg-3">Nomor</label>
                      <div class="col-lg-5">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="icon-database"></i></span>
                          <select class="form-control cari_ns" name="ns" id="ns" required disabled>
                            <option value="<?php echo $query->nomor_surat; ?>"><?php echo $query->nomor_surat; ?></option>
                          </select>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="icon-calendar"></i></span>
                          <input type="text" name="tanggal_nomor_surat" class="form-control daterange-single" id="tanggal_nomor_surat" value="<?php echo $query->tanggal_nomor_surat; ?>" maxlength="10" required placeholder="Masukkan Tanggal">
                        </div>
                      </div>
                    </div> -->

                    <div class="form-group">
                      <label class="control-label col-lg-3">No. Surat</label>
                      <div class="col-lg-5">
    												<input type="text" name="nomor_asal" id="nomor_asal" class="form-control" value="<?php echo $query->nomor_asal; ?>" placeholder="" required readonly>
    									</div>
                      <div class="col-lg-4">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="icon-calendar"></i></span>
                          <input type="text" name="tanggal_nomor_asal" class="form-control daterange-single" id="tanggal_nomor_asal" value="<?php echo $query->tanggal_nomor_asal; ?>" maxlength="10" required placeholder="Masukkan Tanggal">
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-lg-3">Penerima</label>
                      <div class="col-lg-9">
    												<!-- <input type="text" name="pengirim" id="pengirim" class="form-control" value="<?php echo $query->pengirim; ?>" placeholder=""> -->
                            <select class="form-control cari_penerima" name="penerima" id="penerima" required>
                              <option value=""></option>
                              <?php
                              $this->db->order_by('nama_lengkap', 'ASC');
                                    foreach ($this->db->get('tbl_user')->result() as $baris): ?>
                                        <option value="<?php echo $baris->id_user; ?>" <?php if($baris->id_user == $query->id_user){echo "selected";} ?>><?php echo $baris->nama_lengkap; ?></option>
                              <?php endforeach; ?>
                            </select>
    									</div>
                    </div>

                    <!-- <div class="form-group">
                      <label class="control-label col-lg-3">Penerima</label>
                      <div class="col-lg-9">
    												<input type="text" name="penerima" id="penerima" class="form-control" value="<?php echo $query->penerima; ?>" placeholder="">
    									</div>
                    </div> -->

                    <div class="form-group">
                      <label class="control-label col-lg-3">Perihal</label>
                      <div class="col-lg-9">
    												<input type="text" name="perihal" id="perihal" class="form-control" value="<?php echo $query->perihal; ?>" placeholder="">
    									</div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-lg-3"><b>Lampiran</b></label>
                      <div class="col-lg-12">
                        <table class="table table-bordered" width="100%">
                          <tr style="background:#222;color:#f1f1f1;">
                            <th width='10%'><b>NO.</b></th>
                            <th><b>Berkas</b></th>
                            <th width='10%'><b>Aksi</b></th>
                          </tr>
                          <?php
                          $lampiran = $this->db->get_where('tbl_lampiran', "token_lampiran='$query->token_lampiran'");
                          $no = 1;
                          foreach ($lampiran->result() as $baris) {?>
                            <tr>
                              <td><?php echo $no; ?></td>
                              <td><a href="lampiran/<?php echo $baris->nama_berkas; ?>" target="_blank" title="<?php echo substr($baris->ukuran / 1024, 0, 5); ?> MB"><?php echo $baris->nama_berkas; ?></a></td>
                              <td><a href="lampiran/<?php echo $baris->nama_berkas; ?>" target="_blank" title="<?php echo substr($baris->ukuran / 1024, 0, 5); ?> MB" class="btn btn-default xs"><i class="icon-download"></i></a></td>
                            </tr>
                          <?php
                            $no++;
                          }?>
                        </table>
    									</div>
                    </div>
                    <script>
                        $(document).ready(function () {
                            $(".cari_penerima").select2({
                                placeholder: "Pilih Nama Cabang"
                            });
                        });
                    </script>
                    <hr>
                    <a href="users/sm" class="btn btn-default"><< Kembali</a>
                    <button type="submit" name="btnupdate" id="submit-all" class="btn btn-primary" style="float:right;">Update</button>
                </form>

              </fieldset>


            </div>

        </div>
      </div>
    </div>
    <!-- /dashboard content -->
