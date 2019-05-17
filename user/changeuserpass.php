<?php
include '../header.html';
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
        </div>
       
        <div class="panel-body">
          <form class="form-horizontal row-border" method= "POST" action="./changepass">
            <div class="form-group">
                <label class="col-md-2 control-label">User Name</label>
                <div class="col-md-10">
                <select class="form-control" name="pwusername">
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
            <label class="col-md-2 control-label">New Password</label>
            <div class="col-md-10">
                <input type="text" name="changeuserpw" class="form-control">
             </div>
        </div>
        <div class ="pull-right">
		    <button type="submit" class="btn btn-primary">Submit</button>
        </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Row end -->
</div>






