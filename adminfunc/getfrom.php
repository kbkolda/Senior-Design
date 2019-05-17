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