<div class="container">
  <div class="row">
   
      <div class="span12">Tambah User<br><br></div>
    	<!-- awal -->
      <form method="post" action="?module=simpan_tambah_user">        	
        <div class="span2">Username</div>
        <div class="span10"><input type="text" name="username" required><br></div>        
        <div class="span2">Password</div>
        <div class="span10"><input type="password" name="password" required><br></div>        
        <div class="span2">Role</div>
        <div class="span10"><select name="role">
          <option ></option>
          <?php include 'module/koneksi.php';
          $query = mysqli_query($koneksi, "SELECT * FROM role");
          while ($row = mysqli_fetch_array($query)) { ?>
              <option value="<?php echo $row['id_role']; ?>"><?php echo $row['role']; ?></option> 
          <?php } ?>
            
          </select><br>   <br><br> 
        </div>
       
        <div class="span12"><input type="submit" value="Simpan"></input></div>
    		</form>

    	<!-- akhir -->

                  
  </div>      
</div>    
