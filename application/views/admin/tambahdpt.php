<div class="box">
	<div class="box-inner">
		<div class="box-header well">
			<h2> Tambah DPT (Daftar Pemilih ) </h2>
		</div>
		<div class="box-content">
			<?php if ($this->session->flashdata('info')) { ?>
				<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<?php echo $this->session->flashdata('info'); ?>
				</div>
			<?php } ?>
			<?php if ($this->session->flashdata('failed')) { ?>
				<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<?php echo $this->session->flashdata('failed'); ?>
				</div>
			<?php } ?>
			<?php
			$form_attribute = array(
				'method'	=> 'post',
				'class'		=> 'form-horizontal'
			);
			echo form_open_multipart('admin/simpandpt', $form_attribute);
			?>
			<div class="row">
				<div class="col-lg-6">
					<h4>Tambah Data Satu/Satu</h4>
					<hr />
					<label class="label-control">NISN</label>
					<?php
					$form_attribute = array(
						'type'		=> 'text',
						'class'		=> 'form-control',
						'name'		=> 'nisn'
					);
					echo form_input($form_attribute);
					?>
					<label class="label-control">Nama</label>
					<?php
					$form_attribute = array(
						'type'		=> 'text',
						'class'		=> 'form-control',
						'name'		=> 'nm_siswa'
					);
					echo form_input($form_attribute);
					?>

					<label class="label-control">Password</label>
					<?php
					$form_attribute = array(
						'type'		=> 'text',
						'class'		=> 'form-control',
						'name'		=> 'password'
					);
					echo form_input($form_attribute);
					?>
					<label class="label-control">Jenis Kelamin</label>
					<select class="form-control" name="jk">
						<option selected value="L">L</option>
						<option value="P">P</option>
					</select>
					<label class="label-control">Kelas</label>
					<select class="form-control" name="kd_kelas">
						<?php foreach ($datakelas as $load) { ?>
							<option value="<?php echo $load['kd_kelas']; ?>"> <?php echo $load['nm_kelas']; ?> </option>
						<?php
						}
						?>
					</select>
					<br />
					<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Simpan DPT</button>
				</div>
				<?php
				echo form_close();
				?></form>
				<!-- 
				<div class="col-lg-6 text-center">
					<h4>Tambah Data Massal</h4>
					<hr /> <br /><br /><br />
					<button class="btn btn-default" style="width: 100%;" href="<?php echo base_url("excel/format.xlsx"); ?>"><span class="glyphicon glyphicon-cloud-download"></span> Download Format Excel</button> <br /> <br />
					<input type="file" class="form-control" />
					<button type="submit" class="btn btn-default" style="width: 100%;"><span class="glyphicon glyphicon-cloud-upload"></span> Upload Data</button>
				-->
			</div>
		</div>
	</div>
</div>
</div>