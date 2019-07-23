    <div class="container">
      <div class="row">
        
         <!-- <div class="span12">Insert Komposisi<br><br></div> -->
          <!-- awal -->
          <form method="post" action="?module=simpan_komposisi">              
            <div class="span2">Barang</div>
            <div class="span10"><select name="id_barang">
	          <option></option>
	          <?php include 'module/koneksi.php';
	          $query = mysqli_query($koneksi, "SELECT * FROM barang_tersedia");
	          while ($row = mysqli_fetch_array($query)) { ?>
	              <option value="<?php echo $row['id_barang_tersedia']; ?>"><?php echo $row['nama']; ?></option> 
	          <?php } ?>
	            
	          </select><br>    
	        </div>            
            <div class="span2">Gelatin</div>
            <div class="span10"><input type="text" name="gelatin" required><br></div>
            <div class="span2">Tepung Terigu</div>
            <div class="span10"><input type="text" name="tepung_terigu" required><br></div>
            <div class="span2">Susu Cair</div>
            <div class="span10"><input type="text" name="susu_cair" required><br></div>
            <div class="span2">Telur</div>
            <div class="span10"><input type="text" name="telur" required><br></div>
            <div class="span2">Mentega</div>
            <div class="span10"><input type="text" name="mentega" required><br></div>
            <div class="span2">Coklat Bubuk</div>
            <div class="span10"><input type="text" name="coklat_bubuk" required><br></div>
            <div class="span2">Selai Strawberry</div>
            <div class="span10"><input type="text" name="selai_strawberry" required><br></div>
            <div class="span2">Selai Blueberry</div>
            <div class="span10"><input type="text" name="selai_blueberry" required><br></div>
            <div class="span2">Selai Nanas</div>
            <div class="span10"><input type="text" name="selai_nanas" required><br></div>
            <div class="span2">Coklat</div>
            <div class="span10"><input type="text" name="coklat" required><br><br><br></div>           
            
              
            <div class="span12"><input type="submit" value="Simpan"></input><br><br><br><br><br><br></div>
            </form>

          <!-- akhir -->

                      
      </div>      
    </div>    