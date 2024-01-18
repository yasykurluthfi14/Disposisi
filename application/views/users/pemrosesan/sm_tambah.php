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

<link rel="stylesheet" type="text/css" href="assets/upload/dropzone.min.css">
<!-- <link rel="stylesheet" type="text/css" href="assets/upload/basic.min.css"> -->
<script type="text/javascript" src="assets/upload/dropzone.min.js"></script>

<style>
.dropzone {
  margin-top: 10px;
  border: 2px dashed #0087F7;
}
</style>

<?php
$this->db->order_by('id_surat_masuk', 'DESC');
$this->db->limit(1);
$cek_ns = $this->db->get('tbl_surat_masuk');
if ($cek_ns->num_rows() == 0) {
  $nomor_surat = "KP.904/0";
  //edited 1
} else {
  $noUrut = substr($cek_ns->row()->nomor_surat, 7); // Mengambil angka di belakang "/"

  // Tingkatkan nomor urut
  $noUrut++;

  // Bentuk nomor surat baru dengan format "KP.904/x"
  $nomor_surat = "KP.904/" . $noUrut;
}
?>
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
                <legend class="text-bold"><i class="icon-folder-download2"></i> Tambah Surat Masuk Baru</legend>
                <?php
                echo $this->session->flashdata('msg');
                ?>
                <div class="msg"></div>
                <form class="form-horizontal" action="users/sm"  enctype="multipart/form-data" method="post">
                    <!-- <div class="form-group">
                      <label class="control-label col-lg-3">Nomor</label>
                      <div class="col-lg-5">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="icon-database"></i></span>
                          <select class="form-control cari_ns" name="ns" id="ns" required>
                            <option value=""></option>
                            <?php foreach ($data_ns as $baris): ?>
                                <option value="<?php echo $baris->nomor_surat; ?>"><?php echo $baris->nomor_surat; ?></option>
                            <?php endforeach; ?>
                          </select>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="icon-calendar"></i></span>
                          <input type="text" name="tanggal_nomor_surat" class="form-control daterange-single" id="tanggal_nomor_surat" value="<?php echo date('d-m-Y'); ?>" maxlength="10" required placeholder="Masukkan Tanggal">
                        </div>
                      </div>
                    </div> -->

                    <div class="form-group">
                      <label class="control-label col-lg-3">No. Surat</label>
                      <div class="col-lg-5">
    												<!-- <input type="text" name="nomor_asalx" id="nomor_asalx" class="form-control" placeholder="" value="<?php echo $nomor_surat; ?>" required readonly> -->
                            <!-- edited by ujik -->
                            <!-- <input type="text" name="nomor_asalx" id="nomor_asalx" class="form-control" placeholder="" value="" required> -->
                            <input type="text" name="nomor_asal" id="nomor_asal" class="form-control" placeholder="" value="" required>
    									</div>
                      <div class="col-lg-4">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="icon-calendar"></i></span>
                          <input type="text" name="tanggal_nomor_asal" class="form-control daterange-single" id="tanggal_nomor_asal" value="<?php echo date('d-m-Y'); ?>" maxlength="10" required placeholder="Masukkan Tanggal">
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-lg-3">Penerima</label>
                      <div class="col-lg-9">
    												<!-- <input type="text" name="pengirim" id="pengirim" class="form-control" placeholder=""> -->
                            <select class="form-control cari_penerima" name="penerima" id="penerima" required>
                              <option value=""></option>
                              <?php
                              $this->db->order_by('nama_lengkap', 'ASC');
                                    foreach ($this->db->get('tbl_user')->result() as $baris): ?>
                                        <option value="<?php echo $baris->nama_lengkap; ?>"><?php echo $baris->nama_lengkap; ?></option>
                              <?php endforeach; ?>
                            </select>
    									</div>
                    </div>

                    <!-- <div class="form-group">
                      <label class="control-label col-lg-3">Penerima</label>
                      <div class="col-lg-9">
    												<input type="text" name="penerima" id="penerima" class="form-control" placeholder="">
    									</div>
                    </div> -->

                    <div class="form-group">
                      <label class="control-label col-lg-3">Perihal</label>
                      <div class="col-lg-9">
    												<input type="text" name="perihal" id="perihal" class="form-control" placeholder="">
    									</div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-lg-3"><b>Lampiran</b></label>
                      <div class="col-lg-12">
                          <div class="dropzone" id="myDropzone">
                            <div class="dz-message">
                             <h3> Klik atau Drop Lampiran disini</h3>
                            </div>
                          </div>
                          <i style="color:red">*Lampiran wajib diisi</i>
    									</div>
                    </div>

                    <hr>
                    <a href="users/sm" class="btn btn-default"><< Kembali</a>
                    <button type="submit" id="submit-all" class="btn btn-primary" style="float:right;">Kirim</button>
                </form>

                <script>
                    $(document).ready(function () {
                        $(".cari_ns").select2({
                            placeholder: "Pilih nomor"
                        });

                        $(".cari_penerima").select2({
                            placeholder: "Pilih Nama Cabang"
                        });
                    });
                </script>
              </fieldset>


            </div>

        </div>
      </div>
    </div>
    <!-- /dashboard content -->

<script type="text/javascript">

$('.msg').html('');

Dropzone.options.myDropzone = {

  // Prevents Dropzone from uploading dropped files immediately
  url: "<?php echo base_url('users/sm') ?>",
  paramName:"userfile",
  // acceptedFiles:"'file/doc','file/xls','file/xlsx','file/docx','file/pdf','file/txt',image/jpg,image/jpeg,image/png,image/bmp",
  autoProcessQueue: false,
  maxFilesize: 10, //MB
  parallelUploads: 10,
  maxFiles: 10,
  addRemoveLinks:true,
  dictCancelUploadConfirmation: "Yakin ingin membatalkan upload ini?",
  dictInvalidFileType: "Type file ini tidak dizinkan",
  dictFileTooBig: "File yang Anda Upload terlalu besar {{filesize}} MB. Maksimal Upload {{maxFilesize}} MB",
  dictRemoveFile: "Hapus",

  init: function() {
    var submitButton = document.querySelector("#submit-all")
        myDropzone = this; // closure

    submitButton.addEventListener("click", function(e) {
      // if ($("#ns").val() == '' || $("#tanggal_nomor_surat").val() == '' || $("#nomor_asal").val() == '' || ("#tanggal_nomor_asal").val() == '') {
      //     alert('Nomor dan No. Surat wajib diisi!');
      // }
      e.preventDefault();
      e.stopPropagation();
      myDropzone.processQueue(); // Tell Dropzone to process all queued files.
    });

    // You might want to show the submit button only when

    this.on("error", function(file, message) {
                alert(message);
                this.removeFile(file);
                errors = true;
    });

    // files are dropped here:
    this.on("addedfile", function(file) {
      // Show submit button here and/or inform user to click it.
      //  alert("Apakah anda yakin");
    });

    this.on("sending", function(data, xhr, formData) {
            formData.append("ns", jQuery("#ns").val());
            formData.append("tanggal_nomor_surat", jQuery("#tanggal_nomor_surat").val());
            formData.append("nomor_asal", jQuery("#nomor_asal").val());
            formData.append("tanggal_nomor_asal", jQuery("#tanggal_nomor_asal").val());
            formData.append("pengirim", jQuery("#pengirim").val());
            formData.append("penerima", jQuery("#penerima").val());
            formData.append("perihal", jQuery("#perihal").val());
    });

    this.on("complete", function(file) {
      //Event ketika Memulai mengupload
      myDropzone.removeFile(file);
    });

    this.on("success", function (file, response) {
      //Event ketika Memulai mengupload
      // console.log(response);
      //           $(response).each(function (index, element) {
      //               if (element.status) {
      //               }
      //               else {

      $(".cari_ns").select2({
        placeholder: "Pilih nomor",
        allowClear: true
      });
      $(".cari_ns").val('').trigger('change');
                            $('.form-horizontal')[0].reset();
                            $('.msg').html('<div class="alert alert-success alert-dismissible" role="alert">'+
                                          '     <button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
                                          '       <span aria-hidden="true">&times;&nbsp; &nbsp;</span>'+
                                          '     </button>'+
                                          '     <strong>Sukses!</strong> Surat Masuk berhasil dikirim.'+
                                          '  </div>');
                            $("#nomor_asal").focus();

                            alert('Sukses, Surat Masuk berhasil dikirim');
                            window.location="<?php echo base_url(); ?>users/sm/t";
                //     }
                // });

      myDropzone.removeFile(file);
    });

  }
};

</script>
