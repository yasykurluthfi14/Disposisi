

					<!-- Simple login form -->
					<form action="" method="post">
						<div class="panel panel-body login-form">
													<div class="text-center">
								<div class="icon-object border-slate-500 text-slate-500"><img src="foto/gambar.png" alt="Logo Surat Menyurat" width="80"></div>
								<h5 class="content-group">Form Login <small class="display-block">Silahkan Masuk</small></h5>
								<?php
								echo $this->session->flashdata('msg');
								?>
							</div>

							<div class="form-group has-feedback has-feedback-left">
								<input type="text" class="form-control" name="username" placeholder="Masukkan Nama Pengguna" required>
								<div class="form-control-feedback">
									<i class="icon-user text-muted"></i>
								</div>
							</div>

							<div class="form-group has-feedback has-feedback-left">
								<input type="password" class="form-control" name="password" placeholder="Masukkan Kata Sandi" required>
								<div class="form-control-feedback">
									<i class="icon-lock2 text-muted"></i>
								</div>
							</div>

							<div class="col-md-12">
								<!-- <div class="col-md-6">
									<div class="form-group">
										<a href="web/daftar" class="btn btn-primary btn-block"><i class="icon-circle-left2 position-left"></i> Daftar</a>
									</div>
								</div> -->

								<div class="col-md-12">
									<div class="form-group">
										<button type="submit" name="btnlogin" class="btn btn-primary btn-block">Masuk <i class="icon-circle-right2 position-right"></i></button>
									</div>
								</div>
							</div>

							<div class="text-center">
								<!-- <a href="web/lupa_password">Lupa Password??</a> -->
							</div>
						</div>
					</form>
					 <center>
</center>
					<!-- /simple login form -->
