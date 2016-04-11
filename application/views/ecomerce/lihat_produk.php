<html>
<body>
<form action=''>
<table border=1>
	<?php foreach($daftar_produk as $p){
		?>
			<tr>
				<td>
				<tr><td><?php echo $p->id_produk; ?></td></tr>
		        	<tr><td><?php echo $p->nama_produk; ?></td></tr>
		        	<tr><td><?php echo $p->harga_produk; ?></td></tr>
		        	<tr><td><?php echo $p->deskripsi; ?></td></tr>
		        	<tr><td><?php echo anchor(base_url().'ecomerce/shoppingcart/buy/'.$p->id_produk , 'order now'); ?></td></tr>
		        </td>
		    </tr>
		   <?php
		    }
		?>
</table>
</form>


</body>
</html>
