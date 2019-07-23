<script src="assets/js/highcharts.js"></script>
<script src="assets/js/exporting.js"></script>
<script src="assets/js/export-data.js"></script>

<?php include 'module/koneksi.php'; 
$q = mysqli_query($koneksi, "SELECT nama_barang, jumlah FROM barang");
while ($r = mysqli_fetch_array($q)) {
   $nama_barang[] = $r['nama_barang'];
   $jumlah_barang[] = $r['jumlah'];
 } 
 foreach ($nama_barang as $key => $value) {
   $array[] = $value;
 }

 foreach ($jumlah_barang as $key => $val) {
   $array2[] = (int)$val;
 }

 ?>
    <div class="container">
      <div class="row">
        <div class="span6">
          <div class="widget widget-nopad">
            <div class="widget-header"> &nbsp;<i class="fas fa-beer"></i>
              <h3> Today's Stats</h3>
            </div>
            <!-- /widget-header -->
             <?php include 'module/koneksi.php'; 
              $q = mysqli_query($koneksi, "SELECT COUNT(*) AS jumlah FROM barang WHERE jumlah <= rop AND status='B'");
              while ($r = mysqli_fetch_array($q)) {
                $jumlah = $r['jumlah'];
              }

              $qu = mysqli_query($koneksi, "SELECT COUNT(*) AS jumlah FROM barang WHERE jumlah <= ss AND status='B'");
              while ($ro = mysqli_fetch_array($qu)) {
                $jumlah2 = $ro['jumlah'];
              }
            ?>
            <div class="widget-content">
              <div class="widget big-stats-container">
                <div class="widget-content">
                  <h6 class="bigstats">Status <a href="#" >Surya Bakery</a> Hari Ini</h6>
                  <div id="big_stats" class="cf">
                    <!-- <div class="stat"> <i class="fas fa-user-tag"></i> <span class="value">851</span> </div> -->
                    <!-- .stat -->
                    
                    <div class="stat"> <a href="?module=pesanan_barang"><i class="fas fa-list-alt"></i></a> <span class="value"><?php echo $jumlah; ?></span><br>Pesan EOQ  </div>
                    <!-- .stat -->
                    
                    <div class="stat"> <a href="?module=pesanan_ss"><i class="fas fa-shield-alt"></i></a> <span class="value"><?php echo $jumlah2; ?></span><br>Pesan Safety Stock </div>
                    <!-- .stat -->
                    
                    <!-- <div class="stat"> <i class="fas fa-truck-pickup"></i> <span class="value">25%</span> </div> -->
                    <!-- .stat --> 
                  </div>
                </div>
                <!-- /widget-content --> 
                
              </div>
            </div>
          </div>
          <!-- /widget -->
        </div>
        <!-- /span6 -->
        <div class="span6">
          <div class="widget">
            <div class="widget-header"> &nbsp;<i class="fas fa-chart-bar"></i>
              <h3> Chart Stock</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
             <div id="container"></div>
              <!-- /area-chart --> 
            </div>
            <!-- /widget-content --> 
          </div>
          <!-- /widget -->
        </div>
        <!-- /span6 --> 
      </div>
      <!-- /row --> 
    </div>

<script type="text/javascript">
  Highcharts.chart('container', {
  chart: {
    type: 'column'
  },
  title: {
    text: 'Persediaan Bahan Baku'
  },
 xAxis: {
    categories: <?php echo json_encode($array); ?>,
  },
  yAxis: {
    min: 0,
    title: {
      text: 'Jumlah'
    }
  },
  tooltip: {
    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
      '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
    footerFormat: '</table>',
    shared: true,
    useHTML: true
  },
  plotOptions: {
    column: {
      pointPadding: 0.2,
      borderWidth: 0
    }
  },
  series: [{
                            name: 'Bahan Baku',
                            data: <?php echo json_encode($array2); ?>
                          }]
});
</script>