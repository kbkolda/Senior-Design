<?php include '../header.html';
include('../login_func/session.php');
require_once('../bdd.php');
session_start();
?>
<script src='/js/bootstrap.js'></script>


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
            <h3 class="panel-title">Select Staff Member</h3>
          </div>
          <div class="panel-body">
        <div class="panel-body">
          <form class="form-horizontal row-border" method= "POST" action="selectstaff.php">


<!--staffmember-->
<div class="form-group">
    <label class="col-md-2 control-label">Staff Name</label>
    <div class="col-md-10">
    <select class="form-control" name="staffmember">
        <?php
         $conn = mysqli_connect('localhost','peacebr2_user','dbuser','peacebr2_db')or die("cannot connect"); 	

        $sql = "SELECT username, firstname, lastname from staff WHERE archive = 0 ORDER BY lastname;";
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
</div>


<?php

class staffmember{
    public $username;
    public $firstname;
    public $lastname;
    public $email;
    public $phone;
    public $classroom;
    public $archive;
}

$staffName = "";
if(isset($_SESSION['selectedstaff']))
{
    $staffName = $_SESSION['selectedstaff'];
}
else
{
    $staffName = "Select a Staff Member";
}

$sql = "SELECT username,firstname,lastname,email,Type, archive, classroom, phone FROM staff WHERE username = '$staffName'"; 
    $sth = $bdd->prepare($sql);
    $sth->execute();

    $result = $sth->fetchAll(PDO::FETCH_CLASS,"staffmember");
    
    $result = $result[0];







echo "<body><div id=\"includedContent\"></div></body><div class=\"container\"><div class=\"row\"><div class=\"col-md-6 col-sm-6 col-xs-12\"></div></div><div class=\"row\"><div class=\"col-md-12 col-sm-6 col-xs-12\"><div class=\"panel panel-default\"><div class=\"panel-heading clearfix\"><i class=\"icon-calendar\"></i><h3 class=\"panel-title\">$staffName</h3></div><div class=\"panel-body\"><div class=\"panel-body\"><form class=\"form-horizontal row-border\" method =\"POST\" action=\"editingstaff.php\">
              <div class=\"form-group\">";


    echo '
    <div class="form-group">
        <label class="col-md-2 control-label">User Name</label>
        <div class="col-md-10">
            <input type="text" name="susername" value="'.$result->username.'" class="form-control">
        </div>
    </div>
            
    <div class="form-group">
        <label class="col-md-2 control-label">First Name</label>
            <div class="col-md-10">
                <input type="text" name="sfirstname" value="'.$result->firstname.'" class="form-control">
            </div>
    </div>
              
              
    <div class="form-group">
        <label class="col-md-2 control-label">Last Name</label>
            <div class="col-md-10">
                <input type="text" name="slastname" value="'.$result->lastname.'" class="form-control">
            </div>
    </div>
              
              
    <div class="form-group">
        <label class="col-md-2 control-label">E-mail</label>
            <div class="col-md-10">
                <input class="form-control" type="text" name ="semail" value="'.$result->email.'">
            </div>
    </div>
    
    <div class="form-group">
                <label class="col-md-2 control-label">Phone</label>
                <div class="col-md-10">
                  <input type="text" name="sphone" value="'.$result->phone.'" pattern="^\+?\d{0,13}\d{3}[\-]\d{3}[\-]\d{4}" title="XXX-XXX-XXXX" class="form-control">
                </div>
    </div>
    		';
    
    

            echo   "<div class=\"form-group\">
					<label for=\"staffrole\" class=\"col-sm-2 control-label\">Role</label>
					<div class=\"col-sm-10\">
					<select name=\"staffroledd\" class=\"form-control\" id=\"staffroledd\">
                <option>Admin</option>
                 <option>Head Staff</option>
                 <option>FT Staff</option>
                 <option>PT Staff</option>
                 <option>Support</option>
                 <option selected=\"selected\">$result->Type</selected>
              ";
              
             

				
              
              
              
              
              
              
      echo		'								</select>
							</div>
					</div>	

                <div class="form-group">
					<label for="child" class="col-sm-2 control-label">Classroom</label>
					<div class="col-sm-10">
					  <select name="sclassroom" class="form-control" id="sclassroom">";
					  ?>
					  
							<?php
							echo ';
									$theuser = $_SESSION['selectedstaff'];
									$sql = "SELECT room from classroom;";
									$result = mysqli_query($conn, $sql);
									while($row = mysqli_fetch_assoc($result)){
										foreach($row as $cname => $cvalue){
											echo "<option value=$cvalue>$cvalue</option>";
										}					
									}
									
									$sql = "Select classroom from staff
									        WHERE username = '$theuser'";
									 $result = mysqli_query($conn, $sql);
									while($row = mysqli_fetch_assoc($result)){
										foreach($row as $cname => $cvalue){
											echo "<option selected=\"selected\">$cvalue</selected>";
											break;
										}					
									    
									}
									
							echo '
							
						<?php echo "	
						</select>
					</div>
					</div>	


       <div class="form-group">
                

                <div class="col-md-10">
                <input type="checkbox" name="sarchive" value="'.$result->archive.'" class="form-control">
                </div>
                <label class="col-md-2 control-label">Archive</label>
        </div>
       
        
                <div class ="pull-right">
				<button type="submit" onclick="submitAlert()" class="btn btn-primary">Submit</button>
                </div>
            </form>
          </div>
        </div>
      </div>

    </div>
    <!-- Row end -->
  </div>';

  
  
  
  
  
  
  
  ?>


  
  <script>
function submitAlert() {
    alert("Staff Edited");
}
</script>

