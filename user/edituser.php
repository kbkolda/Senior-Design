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
            <h3 class="panel-title">Select user</h3>
        </div>
       
        <div class="panel-body">
          <form class="form-horizontal row-border" method= "POST" action="selectuser.php">

            <div class="form-group">
            <label class="col-md-2 control-label">User Name</label>
            <div class="col-md-10">
            <select class="form-control" name="selecteduser">
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



<?php

    class user{
        public $user;
        public $firstname;
        public $lastname;
        public $street;
        public $city;
        public $state;
        public $zip;
        public $homephone;
        public $workphone;
        public $email;
        public $archive;
    }

$theuser = "";
if(isset($_SESSION['selecteduser']))
{
    $theuser = $_SESSION['selecteduser'];
}
else
{
    $theuser = "Select a User";
}


$sql = "SELECT firstname, lastname, street, city, state, zip, homephone, workphone, email, user.archive from userinfo
INNER JOIN user on user.userID = userinfo.userID WHERE user.user = '$theuser'";


    $sth = $bdd->prepare($sql);
    $sth->execute();
    $result = $sth->fetchAll(PDO::FETCH_CLASS,"user");
    $result = $result[0];
    




echo "<body> 
     <div id=\"includedContent\"></div>
  </body> 
  

 <div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-6 col-sm-6 col-xs-12\">
        </div>
    </div>
    <!-- Row start -->
    <div class=\"row\">
      <div class=\"col-md-12 col-sm-6 col-xs-12\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading clearfix\">
            <i class=\"icon-calendar\"></i>
            <h3 class=\"panel-title\">Edit User</h3>
          </div>
          <div class=\"panel-body\">
            <form class=\"form-horizontal row-border\" method =\"POST\" action=\"editinguser\">
            
                <div class=\"form-group\">
                <label class=\"col-md-2 control-label\">Username</label>
                <div class=\"col-md-10\">
                  <input class=\"form-control\" type=\"text\" name=\"euser\" value=$theuser disabled>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-md-2 control-label\">First Name</label>
                <div class=\"col-md-10\">
                  <input class=\"form-control\" type=\"text\" name=\"efname\" value=\"$result->firstname\">
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-md-2 control-label\">Last Name</label>
                <div class=\"col-md-10\">
                  <input class=\"form-control\" type=\"text\" name=\"elname\" value=\"$result->lastname\">
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-md-2 control-label\">Steet Address</label>
                <div class=\"col-md-10\">
                  <input type=\"text\" name=\"estreet\" class=\"form-control\" value=\"$result->street\">
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-md-2 control-label\">City</label>
                <div class=\"col-md-10\">
                  <input type=\"text\" name=\"ecity\" value=\"$result->city\" class=\"form-control\">
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-md-2 control-label\">State</label>
                <div class=\"col-md-10\">
                  <input type=\"text\" name=\"estate\" value=\"$result->state\" class=\"form-control\">
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-md-2 control-label\">Zip Code</label>
                <div class=\"col-md-10\">
                  <input type=\"text\" name=\"ezip\" value=\"$result->zip\" class=\"form-control\">
                </div>
              </div>
                          <div class=\"form-group\">
                <label class=\"col-md-2 control-label\">Home Phone</label>
                <div class=\"col-md-10\">
                  <input type=\"text\" name=\"ehomephone\" value=\"$result->homephone\" pattern='^\+?\d{0,13}\d{3}[\-]\d{3}[\-]\d{4}' title=\"XXX-XXX-XXXX\" class=\"form-control\">
                </div>
              </div>
                            <div class=\"form-group\">
                <label class=\"col-md-2 control-label\">Work Phone</label>
                <div class=\"col-md-10\">
                  <input type=\"text\" name=\"eworkphone\" value=\"$result->workphone\" pattern='^\+?\d{0,13}\d{3}[\-]\d{3}[\-]\d{4}' title=\"XXX-XXX-XXXX\" class=\"form-control\">
                </div>
              </div>
                <div class=\"form-group\">
                <label class=\"col-md-2 control-label\">E-mail</label>
                <div class=\"col-md-10\">
                  <input type=\"text\" name=\"eemail\" value=\"$result->email\" class=\"form-control\">
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-md-2 control-label\">Archive</label>
                <div class=\"col-md-10\">
                  <input type=\"checkbox\" name=\"earchive\" value=\"$result->archive\" class=\"form-control\">
                </div>
              </div>


                <div class =\"pull-right\">
				<button type=\"submit\" onclick=\"submitAlert()\" class=\"btn btn-primary\">Submit</button>
</div>
                
            </form>
          </div>
        </div>
      </div>

    </div>
    <!-- Row end -->
  </div>";
?>


<script>
function submitAlert() {
    alert("User Edited");
}
</script>