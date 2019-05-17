<?php 

include 'header.html';
include('./login_func/session.php');
require_once('bdd.php');
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
                            $sql = "SELECT user from user;";
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
?>