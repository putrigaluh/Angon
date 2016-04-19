<html>
<body>
<form action='<?= $this->config->base_url();?>ecomerce/checkout/check' method="post">

	
<table border=1>
	<tr>
		<th>Nama</th>
		<td><input type='text' name='nama' value="<?php echo $this->session->userdata('nama_user'); ?>"></td>
	</tr>
	<tr>
		<td><input type="hidden" name="tgl" value="<?php echo date('Y-m-d'); ?>"></td>
		<td><input type="hidden" name="id_user" value="<?php echo $this->session->userdata('id_user'); ?>"></td>
	</tr>
	
	<tr>
		<th>Alamat</th>
		<td><input type='text' name='alamat_pengiriman'></td>
	</tr>
	<tr>
		<th>Provinsi</th>
		<td><input type='text' name=''></td>
	</tr>
	<tr>
		<th>Kota</th>
		<td>
			<select name="kota" value='0'>
				<option value='1'>Malang</option>
				<option value='2'>Surabaya</option>
				<option value='3'>Blitar</option>
			</select>
		</td>
	</tr>
	<tr>
		<th>Nomor Telephone</th>
		<td><input type='text' name='no_telp'></td>
	</tr>
	<tr>
		<input type='hidden' name='status' value='Pending'>
		<td colspan='2' align ="right"><input type='submit' name='submit'></td>
	</tr>
	
</table>
</form>



</body>
</html>
