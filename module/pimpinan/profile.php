<div class="container">
  <div class="row">
    
    	<?php include 'module/koneksi.php'; 
    	$username = $_SESSION['username'];
      // $q = mysqli_query($koneksi, "SELECT user.*, role.*, role.role as rol, user.role as rol_user FROM user JOIN role ON user.role = role.id_role WHERE user.username='$username'"); 
    	$q = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username'"); 
    	while ($r = mysqli_fetch_array($q)) {
    	 	$id = $r['id'];
    	 	$nama = $r['nama'];
    	 	$jabatan = $r['jabatan'];
    	 	$id_role = $r['rol_user'];
    	 	$role = $r['rol'];
    	 } ?>
      <div class="span12"><b>Profile</b><br><br></div>
    	<!-- awal -->
      <form method="post" action="?module=simpan_update_user">  
      	<input type="hidden" name="id" value="<?php echo $id; ?>"></input>            
        <div class="span2">Username</div>
        <div class="span10"><input type="text" name="username" value="<?php echo $username; ?>" required><br></div>
        <div class="span2">Nama</div>
        <div class="span10"><input type="text" name="nama" value="<?php echo $nama; ?>" required><br></div>
        <div class="span2">Jabatan</div>
        <div class="span10"><input type="text" name="jabatan" value="<?php echo $jabatan; ?>" required><br></div>
        <!-- <div class="span2">Role</div>
        <div class="span10"><select name="role" required>
          <option value="<?php echo $id_role; ?>" ><?php echo $role; ?></option>
          <?php include 'module/koneksi.php';
          $query = mysqli_query($koneksi, "SELECT * FROM role");
          while ($row = mysqli_fetch_array($query)) { ?>
              <option value="<?php echo $row['id_role']; ?>"><?php echo $row['role']; ?></option> 
          <?php } ?>
            
          </select><br>   <br>
        </div> -->
       <div class="span2">&nbsp;</div>
        <div class="span10"><input type="submit" value="Simpan"></input></div>
    		</form>

    	<!-- akhir -->

                  
  </div>      
</div>    
