<?php include '../header.html';
include('../login_func/session.php');
require_once('../bdd.php');
session_start();
?>

<script src='/js/bootstrap.js'></script>
  <body> 
     <div id="includedContent"></div>
  </body> 
  
      <div class="container">
    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
        </div>
    </div>
  
 
  <!-- Row start -->
  <div class="row">
    <div class="col-md-12 col-sm-6 col-xs-12">
      <div class="panel panel-default">
        <div class="panel-heading clearfix">
          <i class="icon-calendar"></i>
            <h3 class="panel-title">Add Child</h3>
        </div>
       
        <div class="panel-body">
          <form class="form-horizontal row-border" method= "POST" action="addingchild.php">



            <div class="form-group">
            <label class="col-md-2 control-label">User Name</label>
            <div class="col-md-10">
            <select class="form-control" name="addchildusername">
                          <?php
							
                            $conn = mysqli_connect('localhost','peacebr2_user','dbuser','peacebr2_db')or die("cannot connect"); 	

                            $sql = "SELECT user.user, user.userID, userinfo.firstname, userinfo.lastname, userinfo.userID FROM user INNER JOIN userinfo ON user.userID=userinfo.userID WHERE user.archive = 0 ORDER BY userinfo.lastname";
                            $result = mysqli_query($conn, $sql);
                            while($row = mysqli_fetch_assoc($result)){
                                foreach($row as $cname => $cvalue){
                                    echo "<option value=\"$cvalue\">" .$row["lastname"]. ", " .$row["firstname"]. "</option>";
                                    break;
                                }					
                            }
 
                    ?>
             </select>
             </div>
             </div>





            <div class="form-group">
              <label class="col-md-2 control-label">Child Name</label>
              <div class="col-md-10">
                <input type="text" name="addchildname" class="form-control">
              </div>
            </div>

          <div class="form-group">
              <label class="col-md-2 control-label">Nick Name</label>
              <div class="col-md-10">
                <input type="text" name="addnickname" class="form-control">
              </div>
            </div>

             <div class="form-group">
             <label class="col-md-2 control-label">Date of Birth</label>
             <div class="col-md-10">
             <div class="input-group input-append date" id="datePicker">
                <input type="text" class="form-control" name="adddateofbirth" />
                <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
            </div>
            </div>
            </div>


            <div class="form-group">
              <label class="col-md-2 control-label">Emergency Contact</label>
              <div class="col-md-10">
                <input type="text" name="addecontactname" class="form-control">
              </div>
            </div>


            <div class="form-group">
              <label class="col-md-2 control-label">Emergency Home Phone</label>
              <div class="col-md-10">
                <input type="text" name="addecontacthomephone" class="form-control">
              </div>
            </div>

             <div class="form-group">
              <label class="col-md-2 control-label">Emergency Work Phone</label>
              <div class="col-md-10">
                <input type="text" name="addecontactworkphone" class="form-control">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label">Medical Conditions</label>
              <div class="col-md-10">
                <input type="text" name="addmedicalconditions" class="form-control">
              </div>
            </div>

             <div class ="pull-right">
		<button type="submit" onclick="submitAlert()"class="btn btn-primary">Submit</button>
            </div>
                
            
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Row end -->
  
</div>




<script>
$(document).ready(function() {
    $('#datePicker')
        .datepicker({
            format: 'yyyy-mm-dd'
        })
        .on('changeDate', function(e) {
            // Revalidate the date field
            $('#eventForm').formValidation('revalidateField', 'date');
        });

});
</script>



<script>
function submitAlert() {
    alert("Child Added");
}
</script>