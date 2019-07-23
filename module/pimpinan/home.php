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

<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
      
        <!-- /span6 -->
        <div class="span12">
          <div class="widget">
            <div class="widget-header">&nbsp; <i class="fas fa-chart-bar"></i>
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
    <!-- /container --> 
  </div>
  <!-- /main-inner --> 
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