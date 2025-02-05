 <!-- command update data karyawan -->
<?php $this->load->view('template/header') ?>
<section id="main-content">
    <section class="wrapper">
        <div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
     Ubah
    </div>
    <br>
	<?php echo form_open_multipart('karyawan/ubah/'.$getData['id_karyawan']); ?>
	<?php echo validation_errors() ?>
	<div class="form-group row">
		<label for="Nama" class="col-sm-2 col-form-label">Nama</label>
		<div class="col-sm-10">
			<input type="text" name="Nama" class="form-control" id="Nama"  value="<?php echo $getData['Nama'] ?>" placeholder="Nama">
			<?php echo form_error('Nama') ?> <!-- menampilkan error saat rule Nama gagal -->
		</div>
	</div>
	<div class="form-group row">
		<label for="Pendidikan" class="col-sm-2 col-form-label">Pendidikan</label>
		<div class="col-sm-10">
			<input type="text" name="Pendidikan" class="form-control" id="Pendidikan"  value="<?php echo $getData['Pendidikan'] ?>" placeholder="Pendidikan">
			<?php echo form_error('Pendidikan') ?> <!-- menampilkan error saat rule Nama gagal -->
		</div>
	</div>
	<div class="form-group row">
		<label for="JenisKelamin" class="col-sm-2 col-form-label">JenisKelamin</label>
		<div class="col-sm-10">
			<input type="text" name="JenisKelamin" class="form-control" id="JenisKelamin"  value="<?php echo $getData['JenisKelamin'] ?>" placeholder="JenisKelamin">
			<?php echo form_error('JenisKelamin') ?> <!-- menampilkan error saat rule JenisKelamin gagal -->
		</div>
	</div>
	<div class="form-group row">
		<label for="Alamat" class="col-sm-2 col-form-label">Alamat</label>
		<div class="col-sm-10">
			<input type="text" name="Alamat" class="form-control" id="Alamat"  value="<?php echo $getData['Alamat'] ?>" placeholder="Alamat">
			<?php echo form_error('Alamat') ?> <!-- menampilkan error saat rule Alamat gagal -->
		</div>
	</div>
	<div class="form-group row">
		<label for="KodePos" class="col-sm-2 col-form-label">Kode Pos</label>
		<div class="col-sm-10">
			<input type="number" name="KodePos" class="form-control" id="Username"  value="<?php echo $getData['KodePos'] ?>" placeholder="KodePos">
			<?php echo form_error('KodePos') ?> <!-- menampilkan error saat rule Username gagal -->
		</div>
	</div>
	<div class="form-group row">
		<label for="NoHp" class="col-sm-2 col-form-label">NoHp</label>
		<div class="col-sm-10">
			<input type="text" name="NoHp" class="form-control" id="NoHp"  value="<?php echo $getData['NoHp'] ?>" placeholder="NoHp">
			<?php echo form_error('NoHp') ?> <!-- menampilkan error saat rule NoHp gagal -->
		</div>
	</div>
	<div class="form-group row">
		<label for="Email" class="col-sm-2 col-form-label">Email</label>
		<div class="col-sm-10">
			<input type="text" name="Email" class="form-control" id="Email"  value="<?php echo $getData['Email'] ?>" placeholder="Email">
			<?php echo form_error('Email') ?> <!-- menampilkan error saat rule Email gagal -->
		</div>
	</div>
	<div class="form-group row">
		<label for="Hobby" class="col-sm-2 col-form-label">Hobby</label>
		<div class="col-sm-10">
			<input type="text" name="Hobby" class="form-control" id="Password"  value="<?php echo $getData['Hobby'] ?>" placeholder="Hobby">
			<?php echo form_error('Hobby') ?> <!-- menampilkan error saat rule Password gagal -->
		</div>
	</div>

	<div class="form-group">
		<label for="image">Image</label>
		<input type="file" name="image">
		<?php echo $message ?>
	</div>
	<div class="form-group row">
		<label for="col-sm-2"></label>
		<input type="submit" class="btn btn-success" value="Ubah">
		<a href="<?php echo site_url('karyawan') ?>" class="btn btn-danger">Cancel</a>
	</div>
</form>
<!-- load footer -->
</main>
<script type="text/javascript">
	$(document).ready(function() {
		$('#example').DataTable();
	} );
</script>
<?php $this->load->view('template/footer') ?>