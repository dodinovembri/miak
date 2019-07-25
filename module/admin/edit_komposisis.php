
    <div class="container">
      <div class="row">
        <?php  
                    include 'module/koneksi.php';
                    $id_komposisi = $_GET['id_komposisi'];
                    $query_select = mysqli_query($koneksi, "SELECT * FROM komposisis WHERE id_komposisi='$id_komposisi'");
                ?>
        
         <!-- <div class="span12">Edit Data Barang<br><br></div> -->
          <!-- awal -->
          <form method="post" action="?module=simpan_edit_komposisis"> 

          <?php while ($row2 = mysqli_fetch_array($query_select)) { ?>  
           <input type="hidden" name="id_komposisi" value="<?php echo $row2['id_komposisi']; ?>">            
            <div class="span2">Barang</div>
            <div class="span10"><select name="id_barang_tersedia">
	          <option value="<?php echo $row2['id_barang_tersedia']; ?>"><?php echo $row2['id_barang_tersedia']; ?></option>
	          <?php include 'module/koneksi.php';
	          $query = mysqli_query($koneksi, "SELECT * FROM barang_tersedia");
	          while ($row = mysqli_fetch_array($query)) { ?>
	              <option value="<?php echo $row['id_barang_tersedia']; ?>"><?php echo $row['nama']; ?></option> 
	          <?php } ?>
	            
	          </select><br>    
	        </div>

          <div class="span2">Bahan Baku</div>
            <div class="span10"><select name="id_bahan_baku">
            <option value="<?php echo $row2['id_bahan_baku']; ?>"><?php echo $row2['id_bahan_baku']; ?></option>
            <?php include 'module/koneksi.php';
            $query = mysqli_query($koneksi, "SELECT * FROM bahan_baku");
            while ($row = mysqli_fetch_array($query)) { ?>
                <option value="<?php echo $row['id_bahan_baku']; ?>"><?php echo $row['nama_bahan_baku']; ?></option> 
            <?php } ?>
              
            </select><br>    
          </div>            
            <div class="span2">Jumlah</div>
            <div class="span10"><input type="number" name="jumlah" value="<?php echo $row2['jumlah']; ?>" required><br><br></div>
                       
            
            <?php } ?>             
            <div class="span2">&nbsp;</div>
             <div class="span10"><input type="submit" value="Simpan"></input><br><br><br><br><br><br></div>
            </form>

          <!-- akhir -->

                      
      </div>      
    </div>    
  