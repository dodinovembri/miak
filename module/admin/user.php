
    <div class="container">
      <div class="row">
        <div class="span12">
         
        	<!-- awal -->
          <script type="text/javascript">
            function konfirmasi() {
              tanya = confirm("Barang Sudah Masuk ??");
              if (tanya == true) {
                return true;
              }
              else
                return false;
            }
          </script>
        		<?php  
              include 'module/koneksi.php';
              $query = mysqli_query($koneksi, "SELECT * FROM user");
            ?>     
            <a href="?module=tambah_user"><i class="fas fa-plus-circle"></i> Tambah User</a>       <br><br>
            <div class="panel-body table-responsive">   
              <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                <th>No</th>
                <th>Username</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Role</th>
                <th>Action</th>                
              </thead>
              <tbody>
              <?php 
                $no = 1;
                while ($row = mysqli_fetch_array($query)) { ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $row['username']; ?></td>
                  <td><?php echo $row['nama']; ?></td>
                  <td><?php echo $row['jabatan']; ?></td>
                  <td><?php echo $row['role']; ?></td>                  
                  <td>                                         
                    <a onclick="return konfirmasi();" href="?module=hapus_user&username=<?php echo $row['username']; ?>"><abbr title="Hapus"><li class="fas fa-trash-alt"></li></abbr></a>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
            </div>


        	<!-- akhir -->

        </div>                
      </div>      
    </div>    
  