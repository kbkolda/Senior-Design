<?php
include '../header.html';
include('../login_func/session.php');
require_once('../bdd.php');
 session_start();
?>
    <script src='/js/bootstrap.js'></script>

<?php 
    $sql = "SELECT email from distro";
    $query = $bdd->prepare($sql);
    $sth = $query->execute();
    class amail{
                public $email;
                public $password;
            }
    $result = $query->fetchAll(PDO::FETCH_CLASS,"amail");
    
    echo "<div class=\"container\">
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
            <h3 class=\"panel-title\">Current E-mail</h3>
          </div>
          <div class=\"panel-body\">
            <form class=\"form-horizontal row-border\" method =\"\" action=\"\">
              <div class=\"form-group\">
                <label class=\"col-md-2 control-label\">".$result[0]->email."</label>
                <div class=\"col-md-10\">
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>

    </div>
    <!-- Row end -->
  </div>
  
  </div>";
?>
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
            <h3 class="panel-title">Change Distro E-mail</h3>
          </div>
          <div class="panel-body">
            <form class="form-horizontal row-border" method ="POST" action="modifydistro">
              <div class="form-group">
                <label class="col-md-2 control-label">E-mail</label>
                <div class="col-md-10">
                  <input class="form-control" type="text" name="fromemail" placeholder="">
                </div>
              </div>
              
               <div class="form-group">
                <label class="col-md-2 control-label">Password</label>
                <div class="col-md-10">
                  <input type="text" name="frompass" value="" class="form-control" placeholder="">
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
