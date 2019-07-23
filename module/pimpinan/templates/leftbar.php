<?php
?>
<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
      <ul class="mainnav">
        <li id="menu" <?php if ($_GET['module'] == 'home') {
          echo 'class="active"';
        } ?>><a href="?module=home"><i class="fas fa-home fa-2x"></i><span>Home</span> </a> </li>
        <!-- <li <?php if ($_GET['module'] == 'laporan') {
          echo 'class="active"';
        } ?>><a href="?module=laporan"><i class="fas fa-chart-line"></i><span>Laporan Perkembangan</span> </a> </li> -->
      </ul>
    </div> 
  </div>
</div>

