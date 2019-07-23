<script type="text/javascript">
    function Validate() {
        var password = document.getElementById("txtPassword").value;
        var confirmPassword = document.getElementById("txtConfirmPassword").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
  </script>
<div class="container">
  <div class="row">
    
     <div class="span12">Order Pembuatan Roti<br><br></div>
    	<!-- awal -->
      <form method="post" action="?module=simpan_password">

        <div class="span2">New Password</div>
        <div class="span10"><input type="password" name="password" id="txtPassword" required><br></div>
         <div class="span2">Confirm Password</div>
        <div class="span10"><input type="password" name="password" id="txtConfirmPassword" required><br></div>
          
        <div class="span12"><input type="submit" value="Simpan" onclick="return Validate()"></input></div>
    		</form>

    	<!-- akhir -->
                  
  </div>      
</div>    