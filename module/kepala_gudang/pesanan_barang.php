<div class="container">
  <div class="row">
    <div class="span12">
     

<?php  
	include 'module/koneksi.php';
	$query = mysqli_query($koneksi, "SELECT barang.*, bahan_baku.nama_bahan_baku as nama_bahan_bb, bahan_baku.satuan_bahan_baku as satuan_bb FROM barang JOIN bahan_baku ON barang.id_barang = bahan_baku.id_bahan_baku WHERE barang.jumlah <= barang.rop AND barang.status='B'");
?>

		<b>Buat Pesanan Barang</b><br><br>
		<div class="panel-body table-responsive">   
		    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
			<thead>
				<th>No</th>				
				<th>Nama barang</th>
				<th>Persediaan</th>
				<th>Satuan</th>		
				<th>Action</th>
			</thead>
			<tbody>
			<?php 
				$no = 1;
				while ($row = mysqli_fetch_array($query)) { ?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $row['nama_bahan_bb']; ?></td>					
					<td><?php echo $row['jumlah']; ?></td>
					<td><?php echo $row['satuan_bb']; ?></td>			
					<td>
						<a href="?module=pesan_barang&id_barang=<?php echo $row['id_barang']; ?>"><abbr title="Pesan Barang"><i class="far fa-envelope"></i></abbr></a>				
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
		</div>

		</div>
	</div>
</div>