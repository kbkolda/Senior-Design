<?php
include '../header.html';

include('../login_func/session.php');
require_once('../bdd.php');
 session_start();
?>
    <script src='/js/bootstrap.js'></script>

<head>
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
            <h3 class="panel-title">Add User</h3>
          </div>
          <div class="panel-body">
            <form class="form-horizontal row-border" method ="POST" action="addinguser.php">
              <div class="form-group">
                <label class="col-md-2 control-label">First Name</label>
                <div class="col-md-10">
                  <input class="form-control" type="text" name="addfirstname" placeholder="First Name">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-2 control-label">Last Name</label>
                <div class="col-md-10">
                  <input class="form-control" type="text" name="addlastname" placeholder="Last Name">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-2 control-label">Steet Address</label>
                <div class="col-md-10">
                  <input type="text" name="addstreetaddress" value="" class="form-control" placeholder="Street Address">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-2 control-label">City</label>
                <div class="col-md-10">
                  <input type="text" name="addcity" value="Brookings" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-2 control-label">State</label>
                <div class="col-md-10">
                  <input type="text" name="addstate" value="South Dakota" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-2 control-label">Zip Code</label>
                <div class="col-md-10">
                  <input type="text" name="addzip" value="57006" class="form-control">
                </div>
              </div>
                          <div class="form-group">
                <label class="col-md-2 control-label">Home Phone</label>
                <div class="col-md-10">
                  <input type="text" name="homephone" pattern='^\+?\d{0,13}\d{3}[\-]\d{3}[\-]\d{4}' title="XXX-XXX-XXXX" placeholder="Home Phone" class="form-control">
                </div>
              </div>
                            <div class="form-group">
                <label class="col-md-2 control-label">Work Phone</label>
                <div class="col-md-10">
                  <input type="text" name="workphone"  pattern='^\+?\d{0,13}\d{3}[\-]\d{3}[\-]\d{4}' title="XXX-XXX-XXXX" placeholder="Work Phone" class="form-control">
                </div>
              </div>
                <div class="form-group">
                <label class="col-md-2 control-label">E-mail</label>
                <div class="col-md-10">
                  <input type="text" name="email" placeholder="E-mail" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-2 control-label">User Name</label>
                <div class="col-md-10">
                  <input class="form-control" type="text" name="addusername" placeholder="User Name">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-2 control-label">Password</label>
                <div class="col-md-10">
                  <input class="form-control" type="password" name="addpassword" placeholder ="Password">
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
    alert("User Added");
}
</script>
