<div class="container">
  <div class="row">
    <?php 
      include 'module/koneksi.php';
      $query2 = mysqli_query($koneksi, "SELECT * FROM barang WHERE jumlah <= 0");
      if (mysqli_num_rows($query2) > 0) {      
        echo "<script>window.alert('Jumlah Barang Mencapai 0')</script>";
      }
      else{ ?>



    
     <div class="span12">Order Pembuatan Roti<br><br></div>
    	<!-- awal -->
      <form method="post" action="?module=barang_orderans">              
        <div class="span2">Tanggal</div>
        <div class="span10"><input type="date" name="tgl" required><br></div>
        <div class="span2">Pesanan</div>
        <div class="span10"><select name="pesanan" required>
          <option></option>
          <?php include 'module/koneksi.php';
          $query = mysqli_query($koneksi, "SELECT * FROM barang_tersedia");
          while ($row = mysqli_fetch_array($query)) { ?>
              <option value="<?php echo $row['id_barang_tersedia']; ?>"><?php echo $row['nama']; ?></option> 
          <?php } ?>
            
          </select><br>    
        </div>
        <div class="span2">Jumlah</div> 
        <div class="span10"><input type="text" name="jumlah" required><br><br></div>
          
        <div class="span12"><input type="submit" value="Simpan"></input></div>
    		</form>

    	<!-- akhir -->

                  
  </div>      
</div>    
<?php 
      }
    ?>