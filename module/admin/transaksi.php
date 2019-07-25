
    <div class="container">
      <div class="row">
        <div class="span12">
         
        	<!-- awal -->        
        		<?php  
              include 'module/koneksi.php';
              $query = mysqli_query($koneksi, "SELECT trx_pelanggan.*, barang_tersedia.* from trx_pelanggan JOIN barang_tersedia ON trx_pelanggan.id_barang = barang_tersedia.id_barang_tersedia");
            ?>            
            <div class="panel-body table-responsive">   
              <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Tgl</th>
                <th>Jumlah</th>
                <th>Action</th>                
              </thead>
              <tbody>
              <?php 
                $no = 1;
                while ($row = mysqli_fetch_array($query)) { ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $row['nama']; ?></td>
                  <td><?php echo $row['tgl']; ?></td>
                  <td><?php echo $row['jumlah']; ?></td>                  
                  <td>                                         
                    <a href="?module=details&id_detail=<?php echo $row['id']; ?>" target="_blank">Komposisi</a>
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
  