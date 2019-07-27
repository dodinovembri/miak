
    <div class="container">
      <div class="row">
        <?php  
                    include 'module/koneksi.php';
                    $id_bahan_baku = $_GET['id_bahan_baku'];
                    $query_select = mysqli_query($koneksi, "SELECT * FROM bahan_baku WHERE id_bahan_baku='$id_bahan_baku'");
                ?>
        
         <div class="span12"><b>Edit Bahan Baku</b><br><br></div>
          <!-- awal -->
          <form method="post" action="?module=simpan_edit_bahan_baku"> 
          <?php while ($row = mysqli_fetch_array($query_select)) { ?>             
            
            <input type="hidden" name="id_bahan_baku" value="<?php echo $row['id_bahan_baku']; ?>" readonly><br>
            <div class="span2">Nama Bahan Baku</div>
            <div class="span10"><input type="text" name="nama_bahan_baku" value="<?php echo $row['nama_bahan_baku']; ?>"  placeholder="Bahan Baku" required><br></div>
            <div class="span2">Satuan Bahan Baku</div>
            <div class="span10"><input type="text" name="satuan_bahan_baku"value="<?php echo $row['satuan_bahan_baku']; ?>"  placeholder="Satuan" required><br><br><br></div>            
            <?php } ?> 
            <div class="span12"><input type="submit" value="Simpan"></input></div>
            </form>

          <!-- akhir -->

                      
      </div>      
    </div>    
  