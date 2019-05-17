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
    
<div class="row">
    <div class="col-md-12 col-sm-6 col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading clearfix">
                <i class="icon-calendar"></i>
                <h3 class="panel-title">Remove Class</h3>
            </div>
        <div class="panel-body">
    	    <div class="form-group">
                <form class="form-horizontal row-border" method= "POST" action="removeclass">
                <div class="form-group">
                      <label class="col-md-2 control-label">Remove Class</label>
                        <div class="col-md-10">
                            <span class="input-group-addon add-on">
            			<select name="removeclass" class="form-control" id="removeclass">
            				<?php
            				    $conn = mysqli_connect('localhost','peacebr2_user','dbuser','peacebr2_db')or die("cannot connect"); 	
            					$theuser = $_SESSION['username'];
            					$sql = "SELECT room from classroom ORDER by room ASC";
            									$result = mysqli_query($conn, $sql);
            									while($row = mysqli_fetch_assoc($result)){
            										foreach($row as $cname => $cvalue){
            											echo "<option value=\"$cvalue\">" . $cvalue . "</option>";
            										}					
            									}
            							?>
            			</select>
            			</span>
                        </div>
                        
                </div>
            </div>
            <div class ="pull-right">
		        <button type="submit" class="btn btn-primary">Remove</button>
		    </div>
                </form>
        </div>
        </div>
    </div>
</div>
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
            <h3 class="panel-title">Add Class</h3>
          </div>
          <div class="panel-body">
            <form class="form-horizontal row-border" method ="POST" action="addclass">
              <div class="form-group">
                <label class="col-md-2 control-label">New Class</label>
                <div class="col-md-10">
                  <input class="form-control" type="text" name="newclass" placeholder="" pattern="[^' ']+">
                </div>
              </div>
              
                              <div class ="pull-right">
				<button type="submit" class="btn btn-primary">Add</button>
</div>
                
                </form>
              </div>
        </div>             
        </div>              
        </div>              
        </div>

