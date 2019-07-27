
    <div class="container">
      <div class="row">
        <div class="span12">
         
        	<!-- awal -->
			<?php  
				include 'module/koneksi.php';
				$query = mysqli_query($koneksi, "SELECT komposisis.*, barang_tersedia.nama as nama_barang_ada, bahan_baku.nama_bahan_baku as nama_bahanbaku_ada FROM komposisis JOIN barang_tersedia ON komposisis.id_barang_tersedia = barang_tersedia.id_barang_tersedia JOIN bahan_baku ON komposisis.id_bahan_baku = bahan_baku.id_bahan_baku");
			?>
			<script type="text/javascript">
				function konfirmasi() {
					tanya = confirm("Anda yakin akan menghapus data ??");
					if (tanya == true) {
						return true;
					}
					else
						return false;
				}
			</script>
			<a href="?module=insert_komposisis"><i class="fas fa-plus-circle"></i> Tambah Komposisi Produk</a><br><br>
			<div class="panel-body table-responsive">   
              <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
				<thead>
					<th>No</th>					
					<th>Nama Produk</th>
					<th>Bahan Baku</th>	
					<th>Jumlah</th>										
					<th>Action</th>
				</thead>
				<tbody>
				<?php 
					$no = 1;
					while ($row = mysqli_fetch_array($query)) { ?>
					<tr>
						<td><?php echo $no++; ?></td>						
						<td><?php echo $row['nama_barang_ada']; ?></td>
						<td><?php echo $row['nama_bahanbaku_ada']; ?></td>						
						<td><?php echo $row['jumlah']; ?></td>						
						<td>
							<a href="?module=edit_komposisis&id_komposisi=<?php echo $row['id_komposisi']; ?>"><abbr title="Edit"><i class="fas fa-pencil-alt"></i></abbr></a>
							<a onclick="return konfirmasi();" href="?module=hapus_komposisis&id_komposisi=<?php echo $row['id_komposisi']; ?>"><abbr title="Hapus"><li class="fas fa-trash-alt"></li></abbr></a>
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
  