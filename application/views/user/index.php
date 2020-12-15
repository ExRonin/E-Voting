<?php foreach ($datapemilihan as $datapemilihan) { ?>
	<div class="container">
		<div class="box">
			<div class="box-inner">
				<div class="box-header well">
					<h2>Selamat Datang di <?php echo $datapemilihan['judul']; ?></h2>
				</div>
				<div class="box-content">
					<center>
						<h3>
							<p>Silahkan Pilih Calon dibawah ini </p>
						</h3>
					</center>
					<hr />
					<br /><br />
					<div class="row">
						<?php
						foreach ($datacalon as $loaddata) {


						?>
							<div class="col-lg-4">
								<div class="box">
									<div class="box-inner">
										<div class="box-header well">
											<h2 class="text-center"> Nomor <?php echo $loaddata['no']; ?> &nbsp||&nbsp <?php echo $loaddata['nama']; ?> </h2>
										</div>
										<div class="box-content">
											<img width="100%" height="400" src="<?php echo base_url(); ?>asset/img/<?php echo $loaddata['photo']; ?>" />
											<p>
												<h3>Visi Misi :</h3><?php echo $loaddata['deskripsi']; ?>
											</p></br /><br />
											<?php
											$form_attribute	= array(
												'methode'	=> 'post',
												'class'		=> 'form-horizontal'
											);
											echo form_open('user/vote', $form_attribute);
											?>
											<?php
											$form_attribute	= array(
												'type'		=> 'hidden',
												'name'		=> 'nisn',
												'class'		=> 'form-control',
												'value'		=> $loaddata['nisn']
											);
											echo form_input($form_attribute);
											?>
											<?php
											$form_attribute	= array(
												'type'		=> 'hidden',
												'name'		=> 'username',
												'class'		=> 'form-control',
												'value'		=> $username
											);
											echo form_input($form_attribute);
											?>
											<button class="btn btn-danger" style="width: 100%;">Pilih Nomor <?php echo $loaddata['no']; ?></button>
											<?php
											echo form_close();
											?>
										</div>
									</div>
								</div>
							</div>
					<?php
						}
					}
					?>
					</div>
				</div>
			</div>
		</div>
	</div>