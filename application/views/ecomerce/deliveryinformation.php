<html>
<body>
<form action='<?= $this->config->base_url();?>ecomerce/checkout/check' method="post">

	<?php $tgl=date('Y-m-d'); 
		echo $tgl;
	?>
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

<?php $i = 1; ?>
<?php foreach ($this->cart->contents() as $items): ?>

	<?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>

	<tr>
		<td><?php echo anchor (base_url().'ecomerce/shoppingcart/delete/'.$items['rowid'], 'x'); ?></td>
	  <td><?php echo form_input(array('name' => 'qty'.$i, 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?></td>
	  <td>
		<?php echo $items['name']; ?>

			<?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>

				<p>
					<?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>

						<strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />

					<?php endforeach; ?>
				</p>

			<?php endif; ?>

	  </td>
	  <td style="text-align:right"><?php echo $this->cart->format_number($items['price']); ?></td>
	  <td style="text-align:right">$<?php echo $this->cart->format_number($items['subtotal']); ?></td>
	</tr>

<?php $i++; ?>

<?php endforeach; ?>


</body>
</html>
