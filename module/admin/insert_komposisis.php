    <div class="container">
      <div class="row">
        
         <!-- <div class="span12">Insert Komposisi<br><br></div> -->
          <!-- awal -->
          <form method="post" action="?module=simpan_komposisis">              
            <div class="span2">Produk</div>
            <div class="span10"><select name="id_barang">
	          <option></option>
	          <?php include 'module/koneksi.php';
	          $query = mysqli_query($koneksi, "SELECT * FROM barang_tersedia");
	          while ($row = mysqli_fetch_array($query)) { ?>
	              <option value="<?php echo $row['id_barang_tersedia']; ?>"><?php echo $row['nama']; ?></option> 
	          <?php } ?>
	            
	          </select><br>    
	        </div>  
            <div class="span2">Bahan Baku</div>
            <div class="span10"><select name="id_bahan_baku">
              <option></option>
              <?php include 'module/koneksi.php';
              $query = mysqli_query($koneksi, "SELECT * FROM bahan_baku");
              while ($row = mysqli_fetch_array($query)) { ?>
                  <option value="<?php echo $row['id_bahan_baku']; ?>"><?php echo $row['nama_bahan_baku']; ?></option> 
              <?php } ?>
                
              </select><br>
            </div>                     
            <div class="span2">Jumlah</div>
            <div class="span10"><input type="number" name="jumlah" required><br> <br></div>

            <div class="span2">&nbsp;</div><br>
            <div class="span10"><input type="submit" value="Simpan"></input><br><br><br><br><br><br></div>
            </form>

          <!-- akhir -->

                      
      </div>      
    </div>    