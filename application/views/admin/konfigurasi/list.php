<?php
if ($this->session->flashdata('sukses')) {
	echo '<div class="alert alert-success alert-dismissible">';
	echo '  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>';
	echo $this->session->flashdata('sukses');
	echo'</div>';
}
?>

<?php
	//notif eror
	echo validation_errors('<div class="alert alert-warning">','</div>');

	//form open
	echo form_open(base_url('admin/konfigurasi'), ' class="form-horizontal"');
?>

<div class="form-group row">
	<label class="col-md-3 col-form-label control-label">Nama Website</label>
	<div class="col-md-5">
		<input type="text" name="namaweb" class="form-control" placeholder="Nama Website"
			value="<?php echo $konfigurasi->namaweb ?>" required>
	</div>
</div>
<div class="form-group row">
	<label class="col-md-3 col-form-label control-label">Tagline/Moto</label>
	<div class="col-md-8">
		<input type="text" name="tagline" class="form-control" placeholder="Tagline/Moto"
			value="<?php echo $konfigurasi->tagline ?>" required>
	</div>
<div class="form-group row">
	<label class="col-md-2 col-form-label control-label">Email</label>
	<div class="col-md-8">
		<input type="email" name="email" class="form-control" placeholder="Email"
			value="<?php echo $konfigurasi->email ?>" required>
	</div>
<div class="form-group row">
	<label class="col-md-3 col-form-label control-label">Website</label>
	<div class="col-md-8">
		<input type="text" name="website" class="form-control" placeholder="Website"
			value="<?php echo $konfigurasi->website ?>" required>
	</div>
<div class="form-group row">
	<label class="col-md-3 col-form-label control-label">Alamat Facebook</label>
	<div class="col-md-8">
		<input type="text" name="facebook" class="form-control" placeholder="Facebook"
			value="<?php echo $konfigurasi->facebook ?>" required>
	</div>
<div class="form-group row">
	<label class="col-md-3 col-form-label control-label">Alamat Instagram</label>
	<div class="col-md-8">
		<input type="text" name="instagram" class="form-control" placeholder="Instagram"
			value="<?php echo $konfigurasi->instagram ?>" required>
	</div>
<div class="form-group row">
	<label class="col-md-3 col-form-label control-label">Telepon/HP</label>
	<div class="col-md-8">
		<input type="text" name="telepon" class="form-control" placeholder="Telepon"
			value="<?php echo $konfigurasi->telepon ?>" required>
	</div>
<div class="form-group row">
	<label class="col-md-3 col-form-label control-label">Alamat Kantor</label>
	<div class="col-md-8">
		<input type="text" name="alamat" class="form-control" placeholder="Alamat Kantor"
			value="<?php echo $konfigurasi->alamat ?>" required>
	</div>
</div>
<div class="form-group">
	<label class="col-md-7 col-form-label control-label">Keywords (untuk SEO Google)</label>
	<div class="col-md-15">
		<textarea name="keywords" class="form-control" placeholder="keyword (untuk SEO Google)">
		<?php echo $konfigurasi->keywords ?></textarea>
	</div>
</div>
<div class="form-group">
	<label class="col-md-7 col-form-label control-label">Kode Metatext</label>
	<div class="col-md-15">
		<textarea name="metatext" class="form-control" placeholder="Metatext">
		<?php echo $konfigurasi->metatext ?></textarea>
	</div>
</div>
<div class="form-group">
	<label class="col-md-7 col-form-label control-label">Deskripsi</label>
	<div class="col-md-15">
		<textarea name="deskripsi" class="form-control" placeholder="Deskripsi Website">
		<?php echo $konfigurasi->deskripsi ?></textarea>
	</div>
</div>
<div class="form-group">
	<label class="col-md-7 col-form-label control-label">Rekening Pembayran</label>
	<div class="col-md-15">
		<textarea name="rekening_pembayaran" class="form-control" placeholder="Rekening Pembayran">
		<?php echo $konfigurasi->rekening_pembayaran ?></textarea>
	</div>
</div>
<div class="form-group row">
	<label class="col-md-3 col-form-label"></label>
	<div class="col-md-9">
		<button class="btn btn-success btn-lg" name="submit" type="submit">
			<i class="fa fa-save"></i> Simpan
		</button>
		<button class="btn btn-info btn-lg" name="reset" type="reset">
			<i class="fa fa-times"></i> Reset
		</button>
	</div>
</div>
					
<?php echo form_close(); ?>