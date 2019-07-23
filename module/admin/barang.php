
    <div class="container">
      <div class="row">
        <div class="span12">
         
        	<!-- awal -->
          <script type="text/javascript">
            function konfirmasi() {
              tanya = confirm("Barang Sudah Masuk ??");
              if (tanya == true) {
                return true;
              }
              else
                return false;
            }
          </script>
        		<?php  
              include 'module/koneksi.php';
              $query = mysqli_query($koneksi, "SELECT * FROM orderan_untuk_supplier WHERE status='P'");
            ?>            
            <div class="panel-body table-responsive">   
              <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                <th>No</th>
                <th>Id barang</th>
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
                  <td><?php echo $row['jumlah']; ?></td>
                  <td><?php echo $row['tgl']; ?></td>                  
                  <td>                                         
                    <a onclick="return konfirmasi();" href="?module=update_pesanan&id_orderan_untuk_supplier=<?php echo $row['id_orderan_untuk_supplier']; ?>&id_barang=<?php echo $row['id_pesanan']; ?>"><abbr title="Konfirmasi Barang Sudah Masuk"><i class="fas fa-check-square"></i></abbr></a>
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
  