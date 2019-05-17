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
            <h3 class="panel-title">Add Staff</h3>
          </div>
          <div class="panel-body">
            <form class="form-horizontal row-border" method ="POST" action="addingstaff">
              
              
              
            <!--addusername-->
            <div class="form-group">
                <label class="col-md-2 control-label">User Name</label>
                <div class="col-md-10">
                  <input class="form-control" type="text" name="addusername" placeholder="User Name">
                </div>
             </div>
             
             
              <!--addfirstname-->
              <div class="form-group">
                <label class="col-md-2 control-label">First Name</label>
                <div class="col-md-10">
                  <input class="form-control" type="text" name="addfirstname" placeholder="First Name">
                </div>
              </div>
              
              
              <!--addlastname-->
              <div class="form-group">
                <label class="col-md-2 control-label">Last Name</label>
                <div class="col-md-10">
                  <input class="form-control" type="text" name="addlastname" placeholder="Last Name">
                </div>
              </div>

                <!--email-->
                <div class="form-group">
                <label class="col-md-2 control-label">E-mail</label>
                <div class="col-md-10">
                  <input type="text" name="email" placeholder="E-mail" class="form-control">
                </div>
              </div>
              
              <!--phone-->
                <div class="form-group">
                <label class="col-md-2 control-label">Phone</label>
                <div class="col-md-10">
                  <input type="text" name="phone" pattern='^\+?\d{0,13}\d{3}[\-]\d{3}[\-]\d{4}' title="XXX-XXX-XXXX" placeholder="Phone" class="form-control">
                </div>
              </div>
              
                <!--addpassword-->
              <div class="form-group">
                <label class="col-md-2 control-label">Password</label>
                <div class="col-md-10">
                  <input class="form-control" type="password" name="addpassword" placeholder ="Password">
                </div>
              </div>
              
                            <div class="form-group">
                <label class="col-md-2 control-label">Role</label>
                <div class="col-md-10">
    <select class="form-control" name="addtype">
                 <option>PT Staff</option>
                 <option>Admin</option>
                 <option>Head Staff</option>
                 <option>FT Staff</option>
                 <option>Support</option>

                 

    </select>
    </div>
              </div>
              
              
               <div class="form-group">
					<label for="child" class="col-sm-2 control-label">Classroom</label>
					<div class="col-sm-10">
					  <select name="addclassroom" class="form-control" id="addclassroom">";
					  ?>
					  
							<?php

									$sql = "SELECT room from classroom;";
									$result = mysqli_query($conn, $sql);
									while($row = mysqli_fetch_assoc($result)){
										foreach($row as $cname => $cvalue){
											echo "<option value=$cvalue>$cvalue</option>";
										}					
									}
									

							
						?>	
						</select>
					</div>
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
  </div>
  
  
  
  
  <script>
function submitAlert() {
    alert("Staff Added");
}
</script>
