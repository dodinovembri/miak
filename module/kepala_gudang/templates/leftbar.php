<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
      <ul class="mainnav">
        <li id="menu" <?php if ($_GET['module'] == 'home') {
          echo 'class="active"';
        } ?>><a href="?module=home"><i class="fas fa-home fa-2x"></i><span>Home</span> </a> </li>
       <!--  <li <?php if ($_GET['module'] == 'orderan_kegudang') {
          echo 'class="active"';
        } ?>><a href="?module=orderan_kegudang"><i class="fas fa-user-tag"></i><span>Orderan Ke Gudang</span> </a> </li> -->
        <li id="menu" <?php if ($_GET['module'] == 'persediaan_barang') {
          echo 'class="active"';
        } ?>><a href="?module=persediaan_barang"><i class="fas fa-cubes fa-2x"></i><span>Persediaan Bahan Baku</span> </a></li>

         <li id="menu" <?php if ($_GET['module'] == 'barang') {
          echo 'class="active"';
        } ?>><a href="?module=barang"><i class="fab fa-codepen fa-2x"></i><span>Bahan Baku</span> </a></li>

        <li id="menu" <?php if ($_GET['module'] == 'pesanan_barang') {
          echo 'class="active"';
        } ?>><a href="?module=pesanan_barang"><i class="fas fa-pencil-alt fa-2x"></i><span>Buat Pesanan</span> </a> </li>

        <li id="menu" <?php if ($_GET['module'] == 'pesanan_ss') {
          echo 'class="active"';
        } ?>><a href="?module=pesanan_ss"><i class="fas fa-shield-alt fa-2x"></i><span>Pesanan Safety Stock</span> </a> </li>

        <li id="menu" <?php if ($_GET['module'] == 'status_pesanan') {
          echo 'class="active"';
        } ?>><a href="?module=status_pesanan"><i class="far fa-smile fa-2x"></i><span>Status Pesanan</span> </a> </li>

        <!-- <li <?php if ($_GET['module'] == 'barang_siap_kirim') {
          echo 'class="active"';
        } ?>><a href="?module=barang_siap_kirim"><i class="fas fa-tasks"></i><span>Konfirmasi Barang Siap Dikirim</span> </a> </li> -->
      </ul>
    </div> 
  </div>
</div>