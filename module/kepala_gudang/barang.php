    <div class="container">
      <div class="row">
        <div class="span12">
			<script type="text/javascript" language="JavaScript">
			 function konfirmasi()
			 {
			 tanya = confirm("Anda Yakin Akan Menghapus Data ?");
			 if (tanya == true) return true;
			 else return false;
			 }</script>         
        	<!-- awal -->
        	<?php  
				include 'module/koneksi.php';
				$query = mysqli_query($koneksi, "SELECT * FROM barang");
			?>        		
        		<a href="?module=tambah"><i class="fas fa-plus-circle"></i> Tambah Barang </a><br><br>
        		<div class="panel-body table-responsive">   
                    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
					<thead>
						<th>No</th>
						<th>Id barang</th>
						<th>Nama barang</th>						
						<th>Satuan</th>
						<th>Biaya Pemesanan</th>
						<th>Biaya Penyimpanan</th>
						<th>EOQ</th>
						<th>Frekuensi Pemesanan</th>	
						<th>ROP</th>	
						<th>SS</th>	
						<th>Actions</th>								
					</thead>
					<tbody>
					<?php 
						$no = 1;
						while ($row = mysqli_fetch_array($query)) { ?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $row['id_barang']; ?></td>
							<td><?php echo $row['nama_barang']; ?></td>							
							<td><?php echo $row['satuan']; ?></td>
							<td><?php echo $row['biaya_pemesanan']; ?></td>
							<td><?php echo $row['biaya_penyimpanan']; ?></td>
							<td><?php echo $row['eoq']; ?></td>
							<td><?php echo $row['frekuensi_pemesanan']; ?></td>
							<td><?php echo $row['rop']; ?></td>
							<td><?php echo $row['ss']; ?></td>
							<td>
								<a href="?module=lihat&id_barang=<?php echo $row['id_barang']; ?>"><abbr title="Lihat"><i class="fas fa-eye"></i></abbr></a>
								<a href="?module=edit&id_barang=<?php echo $row['id_barang']; ?>"><abbr title="Edit"><i class="fas fa-pencil-alt"></i></abbr></a>
								<a onclick="return konfirmasi();" href="?module=hapus&id_barang=<?php echo $row['id_barang']; ?>"><abbr title="Hapus"><li class="fas fa-trash-alt"></li></abbr></a>
							</td>							
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>

        	<!-- akhir -->

        </div>                
      </div>      
    </div>    