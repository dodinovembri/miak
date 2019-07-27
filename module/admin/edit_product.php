
    <div class="container">
      <div class="row">
        <?php  
                    include 'module/koneksi.php';
                    $id_barang_tersedia = $_GET['id_barang_tersedia'];
                    $query_select = mysqli_query($koneksi, "SELECT * FROM barang_tersedia WHERE id_barang_tersedia='$id_barang_tersedia'");
                ?>
        
         <div class="span12"><b>Edit Data Produk</b><br><br></div>
          <!-- awal -->
          <form method="post" action="?module=simpan_edit_product"> 
          <?php while ($row = mysqli_fetch_array($query_select)) { ?>             
            <div class="span2">Kode Produk</div>
            <div class="span10"><input type="text" name="id_barang_tersedia" value="<?php echo $row['id_barang_tersedia']; ?>" readonly><br></div>
            <div class="span2">Nama Produk</div>
            <div class="span10"><input type="text" name="nama_barang"value="<?php echo $row['nama']; ?>" required><br><br></div>            
            <?php } ?> 
            <div class="span2">&nbsp;</div>
            <div class="span10"><input type="submit" value="Simpan"></input></div>
            </form>

          <!-- akhir -->

                      
      </div>      
    </div>    
  