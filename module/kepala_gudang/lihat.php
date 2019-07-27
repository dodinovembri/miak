<?php  
	include 'module/koneksi.php';

	$id_barang = $_GET['id_barang'];
	$query = mysqli_query($koneksi, "SELECT * FROM barang WHERE id_barang='$id_barang'");
	while ($row = mysqli_fetch_array($query)) {
		$id_barang = $row['id_barang'];
		$nama_barang = $row['nama_barang'];
		$satuan = $row['satuan'];
		$jumlah = $row['jumlah'];
		$harga = $row['harga'];
		$biaya_pemesanan = $row['biaya_pemesanan'];
		$biaya_penyimpanan_blm = $row['biaya_penyimpanan'];
		$biaya_penyimpanan = 100 / ($harga/$biaya_penyimpanan_blm);
		$lt = $row['lt'];
		$sl = $row['sl'];
	}

?>
<div class="container">
  <div class="row">
    <!-- <div class="span6"> -->
    <!-- awal -->
    	<form method="post" action="?module=simpan_edit">
            <div class="span2">Id Barang</div>
    		<div class="span10"><input type="text" name="id_barang" value="<?php echo $id_barang; ?>" readonly></input><br></div>
            <div class="span2">Nama Barang</div>
    		<div class="span10"><input type="text" name="nama_barang" value="<?php echo $nama_barang; ?>" required></input><br></div>
<!--             <div class="span2">Satuan</div>
    		<div class="span10"><input type="text" name="satuan" value="<?php echo $satuan; ?>" required></input><br></div> -->
    		<div class="span2">Jumlah</div>
            <div class="span10"><input type="text" name="jumlah" value="<?php echo $jumlah; ?>" required></input><br></div>
    		<div class="span2">Harga</div>
            <div class="span10"><input type="text" name="harga" value="<?php echo $harga; ?>" required></input><br></div>
            <div class="span2">Biaya Pesan</div>
    		<div class="span10"><input type="text" name="biaya_pemesanan" value="<?php echo $biaya_pemesanan; ?>" required></input><br></div>
    		<div class="span2">Biaya Simpan</div> 
            <div class="span10"><input type="text" name="biaya_penyimpanan" value="<?php echo $biaya_penyimpanan; ?>" required></input><br></div>
    		<div class="span2">Lead Time</div>
            <div class="span10"><input type="text" name="lt" value="<?php echo $lt; ?>" required></input><br></div>
            <div class="span2">Service Level</div>
    		<div class="span10"><input type="text" name="sl" value="<?php echo $sl; ?>" required></input><br><br></div>
            <br><br>
    		<!-- <div class="span12"><input type="submit"></input></div> -->
    	</form>
    <!-- akhir -->
    <!-- </div> -->
  </div>
</div>