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
            <label class="col-md-2 control-label">User</label>
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
            <h3 class="panel-title">Selected User: <?php echo $_SESSION['selecteduser']?></h3>
        </div>
       
        <div class="panel-body">
          <form class="form-horizontal row-border" method= "POST" action="selectchild">
            <div class="form-group">
					<label for="child" class="col-sm-2 control-label">Child</label>
					<div class="col-sm-10">
					  <select name="selectedchild" class="form-control" id="selectedchild">
							<?php
							
									$conn = mysqli_connect('localhost','peacebr2_user','dbuser','peacebr2_db')or die("cannot connect"); 	
									$theuser = $_SESSION['selecteduser'];
									$sql = "SELECT name from children where parentID = '$theuser';";
									$result = mysqli_query($conn, $sql);
									while($row = mysqli_fetch_assoc($result)){
										foreach($row as $cname => $cvalue){
											echo "<option value=\"$cvalue\">" . $cvalue . "</option>";
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



<div class="container"><div class="row"><div class="col-md-6 col-sm-6 col-xs-12"></div></div>




<?php
class child{
    public $name;
    public $parentID;
    public $dob;
    public $nickname;
    public $emergencycontact;
    public $emergencyhomenumber;
    public $emergencyworknumber;
    public $medicalconditions;
    public $classroom;
}


$thechild =""; 
$theuser = $_SESSION['selecteduser'];


if(isset($_SESSION['selectedchild']))
{
    $thechild = $_SESSION['selectedchild'];
}
else
{
    $thechild = "No Child Selected!";
}



$sql = "SELECT name,parentID,dob,nickname,emergencycontact,emergencyhomenumber,emergencyworknumber,medicalconditions,classroom from children
    INNER JOIN user on user.user = children.parentID
    WHERE children.name = '$thechild' AND user.user = '$theuser'";



    $sth = $bdd->prepare($sql);
    $sth->execute();

    $use = $sth->fetchAll(PDO::FETCH_CLASS,"child");
    
    $use = $use[0];


echo "<div class=\"row\">
    <div class=\"col-md-12 col-sm-6 col-xs-12\">
      <div class=\"panel panel-default\">
        <div class=\"panel-heading clearfix\">
          <i class=\"icon-calendar\"></i>
            <h3 class=\"panel-title\">Edit Child: $thechild    Parent: $theuser</h3>
        </div>";

echo " <div class=\"panel-body\">
          <form class=\"form-horizontal row-border\" method= \"POST\" action=\"editingchild\"><div class=\"form-group\">
              <label class=\"col-md-2 control-label\">Child Name</label>
              <div class=\"col-md-10\">
                <input type=\"text\" name=\"echildname\" value =\"$use->name\" class=\"form-control\" readonly>
              </div>
            </div>

          <div class=\"form-group\">
              <label class=\"col-md-2 control-label\">Nick Name</label>
              <div class=\"col-md-10\">
                <input type=\"text\" name=\"enickname\"value =\"$use->nickname\" class=\"form-control\">
              </div>
            </div>

             <div class=\"form-group\">
             <label class=\"col-md-2 control-label\">Date of Birth</label>
             <div class=\"col-md-10\">
             <div class=\"input-group input-append date\" id=\"datePicker\">
                <input type=\"text\" class=\"form-control\" name=\"edob\"value =\"$use->dob\" />
                <span class=\"input-group-addon add-on\"><span class=\"glyphicon glyphicon-calendar\"></span></span>
            </div>
            </div>
            </div>


            <div class=\"form-group\">
              <label class=\"col-md-2 control-label\">Emergency Contact</label>
              <div class=\"col-md-10\">
                <input type=\"text\" name=\"econtactname\"value =\"$use->emergencycontact\" class=\"form-control\">
              </div>
            </div>


            <div class=\"form-group\">
              <label class=\"col-md-2 control-label\">Emergency Home Phone</label>
              <div class=\"col-md-10\">
                <input type=\"text\" name=\"ehomenumber\"value =\"$use->emergencyhomenumber\" class=\"form-control\">
              </div>
            </div>

             <div class=\"form-group\">
              <label class=\"col-md-2 control-label\">Emergency Work Phone</label>
              <div class=\"col-md-10\">
                <input type=\"text\" name=\"eworknumber\"value =\"$use->emergencyworknumber\" class=\"form-control\">
              </div>
            </div>

            <div class=\"form-group\">
              <label class=\"col-md-2 control-label\">Medical Conditions</label>
              <div class=\"col-md-10\">
                <input type=\"text\" name=\"emedicalconditions\"value =\"$use->medicalconditions\" class=\"form-control\">
              </div>
            </div>
            
				<div class=\"form-group\">
					<label for=\"child\" class=\"col-sm-2 control-label\">Classroom</label>
					<div class=\"col-sm-10\">
					  <select name=\"eclassroom\" class=\"form-control\" id=\"eclassroom\">";
					  ?>
					  
							<?php
							
									$conn = mysqli_connect('localhost','peacebr2_user','dbuser','peacebr2_db')or die("cannot connect"); 	
									$theuser = $_SESSION['selecteduser'];
									$sql = "SELECT room from classroom;";
									$result = mysqli_query($conn, $sql);
									while($row = mysqli_fetch_assoc($result)){
										foreach($row as $cname => $cvalue){
											echo "<option value=$cvalue>$cvalue</option>";
										}					
									}
									
								    $thechild = $_SESSION['selectedchild'];
									$sql = "Select classroom from children
									        WHERE parentID = '$theuser'
									        AND   name = '$thechild'";
									 $result = mysqli_query($conn, $sql);
									while($row = mysqli_fetch_assoc($result)){
										foreach($row as $cname => $cvalue){
											echo "<option selected=\"selected\">$cvalue</selected>";
											break;
										}					
									    
									}									
									
							?>
						<?php	echo "
						</select>
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
    alert("Child Edited");
}
</script>
            




		
					