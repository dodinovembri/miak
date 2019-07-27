
    <div class="container">
      <div class="row">
        <div class="span12">
         
        	<!-- awal -->
			<?php  
				include 'module/koneksi.php';
				$query = mysqli_query($koneksi, "SELECT * FROM barang_tersedia");
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
			<a href="?module=insert_product"><i class="fas fa-plus-circle"></i> Tambah Produk</a><br><br>
			<div class="panel-body table-responsive">   
              <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
				<thead>
					<th>No</th>
					<th>Kode Produk</th>
					<th>Nama Produk</th>					
					<th>Action</th>
				</thead>
				<tbody>
				<?php 
					$no = 1;
					while ($row = mysqli_fetch_array($query)) { ?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $row['id_barang_tersedia']; ?></td>
						<td><?php echo $row['nama']; ?></td>						
						<td>
							<a href="?module=edit_product&id_barang_tersedia=<?php echo $row['id_barang_tersedia']; ?>"><abbr title="Edit"><i class="fas fa-pencil-alt"></i></abbr></a>
							<a onclick="return konfirmasi();" href="?module=hapus_product&id_barang_tersedia=<?php echo $row['id_barang_tersedia']; ?>"><abbr title="Hapus"><li class="fas fa-trash-alt"></li></abbr></a>
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
  