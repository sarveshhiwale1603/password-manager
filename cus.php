<?php
include("config.php");
?>
<?php
if(isset($_POST['dnk'])){
    $query=mysqli_query($conn,"select * from companies where id='".$_POST['dnk']."'");
    $row=mysqli_fetch_array($query);
    echo ' 
    <div class="row">
    <div class="col-md-12">
      <div class="form-group">
        <label for="date">
        <b> Company Name: </b> 
        </label>
        <input type="hidden" name="id" value="'.$row['id'].'">
        '.$row['company_name'].'
      </div>
    </div>
 </br>
       <div class="col-md-12">
          <div class="form-group">
            <label for="clock_in">
            <b>  Contact Person : </b> 
            </label> '.$row['contact_person'].'
          </div>
        </div>
      
        </br>
      <div class="col-md-12">
      <div class="form-group">
        <label for="date">
        <b>  Mobile No : </b> 
        </label> '.$row['mobile_no'].'
          </div>
        </div>
        </br>
      <div class="col-md-12">
      <div class="form-group">
        <label for="date">
        <b>  Whatsapp No: </b> 
        </label> '.$row['whatsapp_no'].'
      </div>
    </div>
  </br>

  <div class="col-md-12">
  <div class="form-group">
    <label for="date">
    <b> GST No: </b> 
    </label> '.$row['GST_no'].'
  </div>
</div>
<div class="col-md-12">
<div class="form-group">
  <label for="date">
  <b>  PAN No : </b> 
  </label> '.$row['PAN_no'].'
    </div>
  </div>

  </div>
  ';
  }
  ?>
<?php
if(isset($_POST['dnkk'])){
    $query=mysqli_query($conn,"select * from companies where id='".$_POST['dnkk']."'");
    $row=mysqli_fetch_array($query);
    echo ' 
     <div class="row">
    <div class="col-md-12">
      <div class="form-group">
        <label for="date">
       <b> Company Name </b> <span class="text-danger">*</span>
        </label>
        <div class="input-group">
        <input type="hidden" name="id" value="'.$row['id'].'">

          <input class="form-control" name="company_name" type="text" value="'.$row['company_name'].'" data-dtp="dtp_dl6pL">
          
        </div>
      </div>
    </div>
 </br>

                <div class="col-md-12">
          <div class="form-group">
            <label for="clock_in">
            <b> Contact Person </b> <span class="text-danger">*</span>
            </label>
            <div class="input-group">
              <input class="form-control" name="contact_person" type="text" value="'.$row['contact_person'].'"  data-dtp="dtp_qHHzf">
              
            </div>
          </div>
       
      </div>
      </br>
      <div class="col-md-12">
      <div class="form-group">
        <label for="date">
        <b> Mobile No </b> <span class="text-danger">*</span>
        </label>
        <div class="input-group">
          <input class="form-control" name="mobile_no" type="text" value="'.$row['mobile_no'].'" data-dtp="dtp_dl6pL">
          
          </div>
        </div>
      </div>
</br>
<div class="col-md-12">
<div class="form-group">
  <label for="date">
  <b> Whatsapp No </b> <span class="text-danger">*</span>
  </label>
  <div class="input-group">
    <input class="form-control" name="whatsapp_no" type="text" value="'.$row['whatsapp_no'].'" data-dtp="dtp_dl6pL">
    
    </div>
  </div>
</div>
</br> 
<div class="col-md-12">
<div class="form-group">
  <label for="date">
  <b> GST No </b> <span class="text-danger">*</span>
  </label>
  <div class="input-group">
    <input class="form-control" name="GST_no" type="text" value="'.$row['GST_no'].'" data-dtp="dtp_dl6pL">
    
    </div>
  </div>
</div>
</br>

<div class="col-md-12">
<div class="form-group">
<label for="clock_in">
<b> PAN No </b> <span class="text-danger">*</span>
</label>
<div class="input-group">
<input class="form-control" name="PAN_no" type="text" value="'.$row['PAN_no'].'" data-dtp="dtp_dl6pL"></input>


</div>
</div>
</div>

</div>
</br>

  </div>
  <div class="modal-footer">
  <button type="submit" class="btn btn-primary" name="cusEdit">Save changes</button>
</div>

  ';
  }
  
  
  ?>