<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
      <ul class="mainnav">
        <li id="menu" <?php if ($_GET['module'] == 'home') {
          echo 'class="active"';
        } ?>><a href="?module=home"><i class="fas fa-home fa-2x"></i><span>Home</span> </a> </li>
        <li id="menu" <?php if ($_GET['module'] == 'orderan_pelanggan') {
          echo 'class="active"';
        } ?>><a href="?module=orderan_pelanggan"><i class="fas fa-pencil-alt fa-2x"></i><span>Input Orderan</span> </a> </li>
         <li id="menu" <?php if ($_GET['module'] == 'transaksi') {
          echo 'class="active"';
        } ?>><a href="?module=transaksi"><i class="fas fa-pencil-alt fa-2x"></i><span>Transaksi</span> </a> </li>
        <li id="menu" <?php if ($_GET['module'] == 'barang_yang_akan_diorder') {
          echo 'class="active"';
        } ?>><a href="?module=barang_yang_akan_diorder"><i class="fas fa-list-alt fa-2x"></i><span>Pesanan Ke Suplier</span> </a></li>
        <li id="menu" <?php if ($_GET['module'] == 'barang') {
          echo 'class="active"';
        } ?>><a href="?module=barang"><i class="fas fa-cart-arrow-down fa-2x"></i><span>Barang Masuk</span> </a></li>
        <!-- <li  <?php if ($_GET['module'] == 'barang_masuk') {
          echo 'class="active"';
        } ?>><a href="?module=barang_masuk"><i class="fas fa-gift"></i><span>Barang Masuk</span> </a> </li> -->
        <!-- <li id="menu" <?php if ($_GET['module'] == 'tampil_barang') {
          echo 'class="active"';
        } ?>><a href="?module=tampil_barang"><i class="fab fa-codepen fa-2x"></i><span>Kelola Data Barang</span> </a> </li> -->

         <li id="menu" <?php if ($_GET['module'] == 'kelola_product') {
          echo 'class="active"';
        } ?>><a href="?module=kelola_product"><i class="fas fa-cube fa-2x"></i><span>Kelola Product</span> </a> </li>

        <li id="menu" <?php if ($_GET['module'] == 'kelola_bahan_baku') {
          echo 'class="active"';
        } ?>><a href="?module=kelola_bahan_baku"><i class="fas fa-cube fa-2x"></i><span>Kelola Bahan Baku</span> </a> </li>

        <li id="menu" <?php if ($_GET['module'] == 'komposisi_barang') {
          echo 'class="active"';
        } ?>><a href="?module=komposisi_barangs"><i class="fas fa-cubes fa-2x"></i><span>Kelola Komposisi Product</span> </a> </li>

        <!-- <li <?php if ($_GET['module'] == 'tampil_barang') {
          echo 'class="active"';
        } ?>><a href="?module=barang_siap_dikirim"><i class="fas fa-truck-pickup"></i><span>Barang Siap Dikirim</span> </a> </li> -->
      </ul>
    </div> 
  </div>
</div>