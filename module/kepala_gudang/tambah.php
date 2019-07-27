<div class="container">
  <div class="row">
    <!-- <div class="span6"> -->
    <!-- awal -->    
        <form method="post" action="?module=simpan">
            <div class="span2">Bahan Baku</div>
            <div class="span10">
                    <select name="id_barang" required>
                      <option></option>
                      <?php include 'module/koneksi.php';
                      $query = mysqli_query($koneksi, "SELECT * FROM bahan_baku");
                      while ($row = mysqli_fetch_array($query)) { ?>
                          <option value="<?php echo $row['id_bahan_baku']; ?>"><?php echo $row['nama_bahan_baku']; ?></option> 
                      <?php } ?>
                        
                    </select><br>
            </div>

            <!-- <div class="span2">Nama Barang</div>
            <div class="span10"><input type="text" name="nama_barang" placeholder="Nama Barang" required></input><br></div> -->            
            <div class="span2">Jumlah</div>
            <div class="span10"><input type="text" name="jumlah" placeholder="Jumlah" required></input><br></div>
            <div class="span2">Harga</div>
            <div class="span10"><input type="text" name="harga" placeholder="Harga"  required></input><br></div>
            <div class="span2">Biaya Pesan</div>
            <div class="span10"><input type="text" name="biaya_pemesanan" placeholder="Biaya Pemesanan"  required></input><br></div>
            <div class="span2">Biaya Simpan (%)</div> 
            <div class="span10"><input type="text" maxlength="3" name="biaya_penyimpanan" placeholder="Biaya Penyimpanan" required></input><br></div>
            <div class="span2">Lead Time</div>
            <div class="span10"><input type="text" name="lt" placeholder="Lead Time" required></input><br></div>
            <div class="span2">Service Level</div>
            <div class="span10"><input type="text" name="sl" value="2.05" placeholder="Service Level"  required></input><br><br></div>
            <br><br>
            <div class="span12"><input type="submit" value="Simpan"></input></div>
        </form>
    <!-- akhir -->
    <!-- </div> -->
  </div>
</div>