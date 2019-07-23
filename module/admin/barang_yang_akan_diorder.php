
    <div class="container">
      <div class="row">
        <div class="span12">
         
        	<!-- awal -->
        	<script type="text/javascript">
				function konfirmasi() {
					tanya = confirm("Barang Sudah Diorder ??");
					if (tanya == true) {
						return true;
					}
					else
						return false;
				}
			</script>
        		<?php  
              include 'module/koneksi.php';
              $query = mysqli_query($koneksi, "SELECT orderan_untuk_supplier.*, barang.* FROM orderan_untuk_supplier JOIN barang ON orderan_untuk_supplier.id_pesanan = barang.id_barang WHERE orderan_untuk_supplier.status='B'");
            ?>            
            <div class="panel-body table-responsive">   
              <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                <th>No</th>
                <th>Id barang</th>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Tgl</th>
                <th>Action</th>                
              </thead>
              <tbody>
              <?php 
                $no = 1;
                while ($row = mysqli_fetch_array($query)) { ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $row['id_pesanan']; ?></td>
                  <td><?php echo $row['nama_barang']; ?></td>
                  <td><?php echo $row['jumlah']; ?></td>
                  <td><?php echo $row['tgl']; ?></td>                  
                  <td>                                         
                    <a onclick="return konfirmasi();" href="?module=update_barang_yang_akan_diorder&id_orderan_untuk_supplier=<?php echo $row['id_orderan_untuk_supplier']; ?>"><abbr title="Pesan Barang"><i class=" far fa-envelope"></i></abbr></a>
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
  