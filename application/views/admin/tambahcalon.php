<div class="box">
	<div class="box-inner">
		<div class="box-header well">
			<h2>Tambah Kandidat </h2>
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
			echo form_open_multipart('admin/simpancalon', $form_attribute);
			?>
			<div class="form-container" style="width: 400px;">
				<label class="label-control"> NISN</label>
				<?php
				$form_attribute	= array(
					'type'		=> 'text',
					'name'		=> 'nisn',
					'class'		=> 'form-control'
				);
				echo form_input($form_attribute);
				?>
				<label class="label-control"> No Kandidat</label>
				<?php
				$form_attribute	= array(
					'type'		=> 'text',
					'name'		=> 'no',
					'class'		=> 'form-control'
				);
				echo form_input($form_attribute);
				?>
				<label class="label-control"> Nama Kandidat</label>
				<?php
				$form_attribute	= array(
					'type'		=> 'text',
					'name'		=> 'nama',
					'class'		=> 'form-control'
				);
				echo form_input($form_attribute);
				?>
				<label class="label-control">Visi Misi</label>
				<?php
				$form_attribute	= array(
					'type'		=> 'text',
					'name'		=> 'deskripsi',
					'class'		=> 'form-control'
				);
				echo form_input($form_attribute);
				?>
				<label class="label-control"> Photo</label>
				<?php
				$form_attribute	= array(
					'type'		=> 'file',
					'name'		=> 'photo',
					'class'		=> 'form-control'
				);
				echo form_input($form_attribute);
				?>
				<br />
				<button type="submit" class="btn btn-primary"> Simpan Data</button>
			</div>
			<?php
			echo form_close();
			?>
		</div>
	</div>
</div>