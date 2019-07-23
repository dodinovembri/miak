
    <div class="container">
      <div class="row">
        <?php  
                    include 'module/koneksi.php';
                    $id_barang = $_GET['id_barang'];
                    $query_select = mysqli_query($koneksi, "SELECT komposisi.*,  barang_tersedia.* FROM komposisi JOIN barang_tersedia ON komposisi.id_barang=barang_tersedia.id_barang_tersedia WHERE komposisi.id_barang='$id_barang'");
                ?>
        
         <!-- <div class="span12">Edit Data Barang<br><br></div> -->
          <!-- awal -->
          <form method="post" action="?module=simpan_edit_komposisi">              
          <?php while ($row2 = mysqli_fetch_array($query_select)) { ?>             
            <div class="span2">Barang</div>
            <div class="span10"><select name="id_barang">
	          <option value="<?php echo $row2['id_barang']; ?>"><?php echo $row2['nama']; ?></option>
	          <?php include 'module/koneksi.php';
	          $query = mysqli_query($koneksi, "SELECT * FROM barang_tersedia");
	          while ($row = mysqli_fetch_array($query)) { ?>
	              <option value="<?php echo $row['id_barang_tersedia']; ?>"><?php echo $row['nama']; ?></option> 
	          <?php } ?>
	            
	          </select><br>    
	        </div>            
            <div class="span2">Gelatin</div>
            <div class="span10"><input type="text" name="gelatin" value="<?php echo $row2['gelatin']; ?>" required><br></div>
            <div class="span2">Tepung Terigu</div>
            <div class="span10"><input type="text" name="tepung_terigu"  value="<?php echo $row2['tepung_terigu']; ?>" required><br></div>
            <div class="span2">Susu Cair</div>
            <div class="span10"><input type="text" name="susu_cair" value="<?php echo $row2['susu_cair']; ?>" required><br></div>
            <div class="span2">Telur</div>
            <div class="span10"><input type="text" name="telur" value="<?php echo $row2['telur']; ?>" required><br></div>
            <div class="span2">Mentega</div>
            <div class="span10"><input type="text" name="mentega" value="<?php echo $row2['mentega']; ?>" required><br></div>
            <div class="span2">Coklat Bubuk</div>
            <div class="span10"><input type="text" name="coklat_bubuk" value="<?php echo $row2['coklat_bubuk']; ?>" required><br></div>
            <div class="span2">Selai Strawberry</div>
            <div class="span10"><input type="text" name="selai_strawberry" value="<?php echo $row2['selai_strawberry']; ?>" required><br></div>
            <div class="span2">Selai Blueberry</div>
            <div class="span10"><input type="text" name="selai_blueberry" value="<?php echo $row2['selai_blueberry']; ?>" required><br></div>
            <div class="span2">Selai Nanas</div>
            <div class="span10"><input type="text" name="selai_nanas" value="<?php echo $row2['selai_nanas']; ?>" required><br></div>
            <div class="span2">Coklat</div>
            <div class="span10"><input type="text" name="coklat" value="<?php echo $row2['coklat']; ?>" required><br><br></div>           
            
            <?php } ?>             
             <div class="span12"><input type="submit" value="Simpan"></input><br><br><br><br><br><br></div>
            </form>

          <!-- akhir -->

                      
      </div>      
    </div>    
  