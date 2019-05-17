<?php 

include '../header.html';
include('../login_func/session.php');
require_once('../bdd.php');
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
            </div>
        <div class="panel-body">
        <div class="form-group">
            <form class="form-horizontal row-border" method= "POST" action="blockadate">
                <div class="form-group">
                    <label class="col-md-2 control-label">Block Date</label>
                    <div class="col-md-10">
                        <div class="input-group input-append date" id="datePicker">
                            <input type="text" class="form-control" name="blockthisdate" />
                            <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                        </div>
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
            </div>
        <div class="panel-body">
    	    <div class="form-group">
                <form class="form-horizontal row-border" method= "POST" action="unblockdate">
                <div class="form-group">
                      <label class="col-md-2 control-label">Unblock Date</label>
                        <div class="col-md-10">
                        <div class="input-group input-append date" id="">
                            <span class="input-group-addon add-on">
            			<select name="unblock" class="form-control" id="unblock">
            				<?php
            				    $conn = mysqli_connect('localhost','peacebr2_user','dbuser','peacebr2_db')or die("cannot connect"); 	
            					$theuser = $_SESSION['username'];
            					$sql = "SELECT date from  blockdate ORDER by date ASC";
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
<?php echo ' <body> 
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
        
<div class="panel-heading">

<h1 class="panel-title">Blocked Days</h1>
</div>

<table class="table">
<tbody>';
    $sql = "SELECT date from blockdate  ORDER by date ASC";
    $sth = $bdd->prepare($sql);
    $sth->execute();
    class Dates {
        public $date;
                }
    $result = $sth->fetchAll(PDO::FETCH_CLASS,"Dates");
    $banresult = array();
    $strin = "";
    foreach($result as $row)
    {
        echo '<tr><td>'.$row->date.'</td></tr>';
    }
        
echo '</tbody>
</table>
</div>';?>



<script>
$(document).ready(function() {
    $('#datePicker')
        .datepicker({
            format: 'yyyy-mm-dd'
        })
        .on('changeDate', function(e) {
            // Revalidate the date field
            $('#eventForm').formValidation('revalidateField', 'date');
        });

});
</script>