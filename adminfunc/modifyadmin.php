<?php
include '../header.html';
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
            <h3 class="panel-title">Change Password</h3>
          </div>
          <div class="panel-body">
            <form class="form-horizontal row-border" method ="POST" action="changepass">
              <div class="form-group">
                <label class="col-md-2 control-label">New Password</label>
                <div class="col-md-10">
                  <input class="form-control" type="text" name="newpw" placeholder="">
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
        </div>
