
    <div class="container">
      <div class="row">
        <div class="span12">
         
        	<!-- awal -->
			<?php  
				include 'module/koneksi.php';
				$query = mysqli_query($koneksi, "SELECT * FROM komposisi");
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
			<a href="?module=insert_komposisi"><i class="fas fa-plus-circle"></i> Tambah Komposisi Barang</a><br><br>
			<div class="panel-body table-responsive">   
              <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
				<thead>
					<th>No</th>
					<th>Id barang</th>
					<th>Gelatin</th>
					<th>Tepung Terigu</th>
					<th>Susu Cair</th>
					<th>Telur</th>
					<th>Mentega</th>
					<th>coklat Bubuk</th>
					<th>Selai Strawberry</th>
					<th>Selai Blueberry</th>
					<th>Selai Nanas</th>
					<th>Coklat</th>
					<th>Action</th>
				</thead>
				<tbody>
				<?php 
					$no = 1;
					while ($row = mysqli_fetch_array($query)) { ?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $row['id_barang']; ?></td>
						<td><?php echo $row['gelatin']; ?></td>
						<td><?php echo $row['tepung_terigu']; ?></td>						
						<td><?php echo $row['susu_cair']; ?></td>						
						<td><?php echo $row['telur']; ?></td>						
						<td><?php echo $row['mentega']; ?></td>						
						<td><?php echo $row['coklat_bubuk']; ?></td>						
						<td><?php echo $row['selai_strawberry']; ?></td>						
						<td><?php echo $row['selai_blueberry']; ?></td>						
						<td><?php echo $row['selai_nanas']; ?></td>						
						<td><?php echo $row['coklat']; ?></td>						
						<td>
							<a href="?module=edit_komposisi&id_barang=<?php echo $row['id_barang']; ?>"><abbr title="Edit"><i class="fas fa-pencil-alt"></i></abbr></a>
							<a onclick="return konfirmasi();" href="?module=hapus_komposisi&id_barang=<?php echo $row['id_barang']; ?>"><abbr title="Hapus"><li class="fas fa-trash-alt"></li></abbr></a>
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
  