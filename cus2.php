<?php
include("config.php");
?>
<?php
if(isset($_POST['dnkk'])){
    $query=mysqli_query($conn,"select * from company_details where id='".$_POST['dnkk']."'");
    $row=mysqli_fetch_array($query);
    echo ' 
     <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label for="clock_in">
            <b> Username </b> <span class="text-danger">*</span>
            </label>
            <div class="input-group">
              <input class="form-control" name="username" type="text" value="'.$row['username'].'"  data-dtp="dtp_qHHzf">
              
            </div>
          </div>
       
      </div>
      </br>
      <div class="col-md-12">
      <div class="form-group">
        <label for="date">
        <b> Password </b> <span class="text-danger">*</span>
        </label>
        <div class="input-group">
          <input type="password"class="form-control" name="password" type="text" value="'.$row['password'].'" data-dtp="dtp_dl6pL">
          <input type="hidden"class="form-control" name="id12" type="text" value="'.$row['id'].'" data-dtp="dtp_dl6pL">
          </div>
        </div>
      </div>
</br>
  </div>
  <div class="modal-footer">
  <button type="submit" class="btn btn-primary" name="cusEdit3">Save changes</button>
</div>

  ';
  }
  
  
  ?>