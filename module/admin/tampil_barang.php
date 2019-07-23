
    <div class="container">
      <div class="row">
        <div class="span12">
         
        	<!-- awal -->
			<?php  
				include 'module/koneksi.php';
				$query = mysqli_query($koneksi, "SELECT * FROM barang");
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
			<a href="?module=insert_barang"><i class="fas fa-plus-circle"></i> Tambah Barang</a><br><br>
			<div class="panel-body table-responsive">   
              <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
				<thead>
					<th>No</th>
					<th>Id barang</th>
					<th>Nama barang</th>
					<th>Satuan</th>
					<th>Harga</th>
					<th>Action</th>
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
						<td><?php echo $row['harga']; ?></td>	
						<td>
							<a href="?module=edit_barang&id_barang=<?php echo $row['id_barang']; ?>"><abbr title="Edit"><i class="fas fa-pencil-alt"></i></abbr></a>
							<a onclick="return konfirmasi();" href="?module=hapus_barang&id_barang=<?php echo $row['id_barang']; ?>"><abbr title="Hapus"><li class="fas fa-trash-alt"></li></abbr></a>
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
  