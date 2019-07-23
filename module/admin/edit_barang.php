
    <div class="container">
      <div class="row">
        <?php  
                    include 'module/koneksi.php';
                    $id_barang = $_GET['id_barang'];
                    $query_select = mysqli_query($koneksi, "SELECT * FROM barang WHERE id_barang='$id_barang'");
                ?>
        
         <div class="span12">Edit Data Barang<br><br></div>
          <!-- awal -->
          <form method="post" action="?module=simpan_edit"> 
          <?php while ($row = mysqli_fetch_array($query_select)) { ?>             
            <div class="span2">Id Barang</div>
            <div class="span10"><input type="text" name="id_barang" value="<?php echo $row['id_barang']; ?>" required><br></div>
            <div class="span2">Nama Barang</div>
            <div class="span10"><input type="text" name="nama_barang"value="<?php echo $row['nama_barang']; ?>" required><br></div>
            <div class="span2">Satuan</div>
            <div class="span10"><input type="text" name="satuan" value="<?php echo $row['satuan']; ?>" required><br></div>
            <div class="span2">Harga</div>
            <div class="span10"><input type="text" name="harga" value="<?php echo $row['harga']; ?>" required><br><br></div>
            
            <?php } ?> 
            <div class="span12"><input type="submit" value="Simpan"></input></div>
            </form>

          <!-- akhir -->

                      
      </div>      
    </div>    
  