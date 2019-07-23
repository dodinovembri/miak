    <div class="container">
      <div class="row">
        <div class="span12">
         
        	<!-- awal -->
        	<?php  
				include 'module/koneksi.php';
				$query = mysqli_query($koneksi, "SELECT * FROM barang");
			?>
        		Data Barang<br><br>
	        	<div class="panel-body table-responsive">   
		    		<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
					<thead>
						<th>No</th>
						<th>Id barang</th>
						<th>Nama barang</th>
						<th>Persediaan</th>
						<th>Satuan</th>									
					</thead>
					<tbody>
					<?php 
						$no = 1;
						while ($row = mysqli_fetch_array($query)) { ?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $row['id_barang']; ?></td>
							<td><?php echo $row['nama_barang']; ?></td>
							<td><?php echo $row['jumlah']; ?></td>
							<td><?php echo $row['satuan']; ?></td>							
						</tr>
						<?php } ?>
					</tbody>
				</table>
				</div>

        	<!-- akhir -->

        </div>                
      </div>      
    </div>    
