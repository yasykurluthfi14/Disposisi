<!-- Advanced login -->

  <div class="panel panel-body login-form">

    <form action="#" id="form-lanjut" class="form-horizontal">

      <div class="text-center">
        <div class="icon-object border-success text-success"><i class="icon-plus3"></i></div>
        <h5 class="content-group">Form Daftar <small class="display-block">Silahkan daftar</small></h5>
        
        <div id="msg"></div>

      </div>

      <hr>
      <div class="form-group has-feedback has-feedback-left">
        <input type="text" class="form-control" placeholder="Masukkan NRP" name="nrp" id="nrp" required>
        <div class="form-control-feedback">
          <i class="icon-credit-card text-muted"></i>
        </div>
      </div>

      <div class="form-group has-feedback has-feedback-right">
        <a href="" class="btn btn-default"><i class="icon-circle-left2 position-left"></i> Kembali</a>
        <button type="submit" class="btn btn-success" name="btnlanjut" id="btnlanjut" value="Lanjut" style="float:right;"> Lanjut <i class="icon-circle-right2 position-right"></i></button>
        <br><br>
        <hr>
      </div>

    </form>
    <!-- <div class="form-group has-feedback has-feedback-left">
      <select class="form-control" name="bagian" required>
          <option value="" selected="select">-- Bagian --</option>
          <?php
          foreach ($bagian as $baris) {
            echo '<option value="'.$baris->id_bagian.'">'.$baris->nama_bagian.'</option>';
          }?>
      </select>
      <div class="form-control-feedback">
        <i class="icon-price-tag2 text-muted"></i>
      </div>
    </div> -->
<div id="data">
    <form action="#" id="form-daftar">
      <div id="msg2"></div>
        <input type="hidden" class="form-control" placeholder="NRP2" name="nrp2" id="nrp2" required>

        <div class="form-group has-feedback has-feedback-left">
          <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama_lengkap" required readonly>
          <div class="form-control-feedback">
            <i class="icon-user-check text-muted"></i>
          </div>
        </div>

        <div class="form-group has-feedback has-feedback-left">
          <input type="text" class="form-control" placeholder="Bagian" name="bagian" required readonly>
          <div class="form-control-feedback">
            <i class="icon-price-tag2 text-muted"></i>
          </div>
        </div>

        <div class="form-group has-feedback has-feedback-left">
          <input type="email" class="form-control" placeholder="Masukkan Email" name="email" id="email" required>
          <div class="form-control-feedback">
            <i class="icon-mention text-muted"></i>
          </div>
        </div>

        <div class="form-group has-feedback has-feedback-left">
          <input type="text" class="form-control" placeholder="Masukkan Username" name="username" id="username" required>
          <div class="form-control-feedback">
            <i class="icon-user-check text-muted"></i>
          </div>
        </div>

        <div class="form-group has-feedback has-feedback-left">
          <input type="password" class="form-control" placeholder="Masukkan Password" name="password" id="password" required>
          <div class="form-control-feedback">
            <i class="icon-user-lock text-muted"></i>
          </div>
        </div>

        <div class="form-group has-feedback has-feedback-left">
          <input type="password" class="form-control" placeholder="Ulangi Password" name="password2" id="password2" required>
          <div class="form-control-feedback">
            <i class="icon-user-lock text-muted"></i>
          </div>
        </div>

        <div class="col-md-12">
          <div class="col-md-6">
            <div class="form-group">
              <a id="btnbatal" class="btn bg-teal btn-block btn-lg"><i class="icon-spinner11 position-left"></i> Batal</a>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <button type="submit" class="btn bg-teal btn-block btn-lg" name="btndaftar" id="btndaftar">Daftar <i class="icon-envelop3 position-right"></i></button>
            </div>
          </div>
        </div>

    </form>
</div>
</div>
<!-- /advanced login -->


  <script type="text/javascript">
  $(document).ready(function() {
    $('#data').hide();

    $('#nrp').focus();
      $('#btnlanjut').click(function(){
       var btnlanjut = $('#btnlanjut');
       var nrp       = $('#nrp');
       if(nrp.val() != ''){

          $.ajax({
          type : 'POST',
          data :$('#form-lanjut').serialize(),
          url  : '<?php echo base_url(); ?>web/lanjut',
          cache: false,
          dataType: "JSON",
          beforeSend: function() {
              $('#nrp').attr('disabled',true);
              $('#btnlanjut').html('Proses... <i class="icon-spinner6 position-right"></i>');
              $('#btnlanjut').attr('disabled',true);
          },
          success: function(data){

            if (data.status == "gagal" || data.status == "proses") {
              $("#data").hide();
              $("#msg").show();
              $("#msg").html(data.pesan);
            }else{
              $("#msg").hide();
              $("#msg").html('');

              $('[name="nama_lengkap"]').val(data.status.nama_lengkap);
              $('[name="bagian"]').val(data.status.nama_bagian);
              $('[name="nrp2"]').val(data.status.nrp);
              $("#data").show();

              $('[name="email"]').focus();
            }

              $('#nrp').attr('disabled',false);
              $('#btnlanjut').html('Lanjut <i class="icon-circle-right2 position-right"></i>');
              $('#btnlanjut').attr('disabled',false);
          }
        });
       }
       //return false;
      });

      $('#btnbatal').click(function(){
          $('#form-lanjut')[0].reset();
          $('#form-daftar')[0].reset();

          $("#msg").hide();
          $("#msg").html('');
          $("#msg2").hide();
          $("#msg2").html('');

          $("#data").hide();

          $('[name="nrp"]').focus();
      });

      $('#btndaftar').click(function(){
       var btndaftar  = $('#btndaftar');
       var nrp2       = $('#nrp2');
       var email      = $('#email');
       var username   = $('#username');
       var password   = $('#password');
       var password2  = $('#password2');
       var re         = "";

       if(nrp2.val() != '' && email.val() != ''  && re != /\S+@\S+\.\S+/ && username.val() != '' && password.val() != '' && password2.val() != ''){

          $.ajax({
          type : 'POST',
          data :$('#form-daftar').serialize(),
          url  : '<?php echo base_url(); ?>web/proses_daftar',
          cache: false,
          dataType: "JSON",
          beforeSend: function() {
              $('#btndaftar').html('Proses... <i class="icon-spinner6 position-right"></i>');
              $('#btndaftar').attr('disabled',true);
          },
          success: function(data){

            if (data.status == "gagal") {
              // $("#msg").hide();
              // $("#msg").html('');
              $("#msg2").show();
              $("#msg2").html(data.pesan2);
            }else{

              $('#form-lanjut')[0].reset();
              $('#form-daftar')[0].reset();

              $("#data").hide();

              $('[name="nrp"]').focus();

              $("#msg").show();
              $("#msg").html(data.pesan2);

              $("#msg2").hide();
              $("#msg2").html('');

            }

              $('#btndaftar').html('Daftar <i class="icon-envelop3 position-right"></i>');
              $('#btndaftar').attr('disabled',false);
          }
        });
       }
       //return false;
      });


  });

  </script>
