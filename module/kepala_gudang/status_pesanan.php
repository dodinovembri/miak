<div class="container">
  <div class="row">
    <div class="span12">
     
<?php  
	include 'module/koneksi.php';
	// $query = mysqli_query($koneksi, "SELECT barang.*, orderan_untuk_supplier.* FROM barang JOIN orderan_untuk_supplier ON barang.id_barang=orderan_untuk_supplier.id_pesanan WHERE orderan_untuk_supplier.status='B' OR orderan_untuk_supplier.status='P'");
	$query = mysqli_query($koneksi, "SELECT barang.*, orderan_untuk_supplier.* FROM barang JOIN orderan_untuk_supplier ON barang.id_barang=orderan_untuk_supplier.id_pesanan");
?>

		<b>Status Pesanan</b><br><br>
		<div class="panel-body table-responsive">   
		    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
			<thead>
				<th>No</th>				
				<th>Nama barang</th>
				<th>Tanggal</th>
				<th>Status</th>		
			</thead>
			<tbody>
			<?php 
				$no = 1;
				while ($row = mysqli_fetch_array($query)) { ?>
				<tr>
					<td><?php echo $no++; ?></td>				
					<td><?php echo $row['nama_barang']; ?></td>			
					<td><?php echo $row['tgl']; ?></td>
					<td><?php echo $row['status']; ?></td>			
				</tr>
				<?php } ?>
			</tbody>
		</table>
		</div>

		</div>
	</div>
</div>