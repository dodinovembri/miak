
    <div class="container">
      <div class="row">
        <div class="span12">
         
        	<!-- awal -->
        		<?php  
              include 'module/koneksi.php';
              $id_detail = $_GET['id_detail'];
              $query = mysqli_query($koneksi, "SELECT trx_bk.*, barang_tersedia.*, m_barang.* from trx_bk JOIN barang_tersedia ON trx_bk.pesanan = barang_tersedia.id_barang_tersedia JOIN m_barang ON trx_bk.bahan = m_barang.id_barang where trx_bk.id_trx_pelanggan = $id_detail");
            ?>            
            <div class="panel-body table-responsive">   
              <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                <th>No</th>
                <th>Barang Orderan</th>
                <th>Tgl</th>
                <th>Komposisi</th>
                <th>Jumlah</th>
                <!-- <th>Action</th>                 -->
              </thead>
              <tbody>
              <?php 
                $no = 1;
                while ($row = mysqli_fetch_array($query)) { ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $row['nama']; ?></td>
                  <td><?php echo $row['tgl']; ?></td>
                  <td><?php echo $row['nama_barang']; ?></td>                  
                  <td><?php echo $row['jumlah']; ?></td> 
                 <!--  <td>                                         
                    <a onclick="return konfirmasi();" href="?module=detail&id_orderan_untuk_supplier=<?php echo $row['id_orderan_untuk_supplier']; ?>">Detail</a>
                  </td> -->
                </tr>
                <?php } ?>
              </tbody>
            </table>
            </div>


        	<!-- akhir -->

        </div>                
      </div>      
    </div>    
  