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
            <!--removeeventdate-->
        <div class="form-group">
            <form class="form-horizontal row-border" method= "POST" action="removingevents">
                <div class="form-group">
                    <label class="col-md-2 control-label">Remove Events</label>
                    <div class="col-md-10">
                        <div class="input-group input-append date" id="datePicker">
                            <input type="text" class="form-control" name="removeeventdate" />
                            <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
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

<body> 
     <div id="includedContent"></div>
</body>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
        </div>
    </div>
    

        </div>
        </div>
    </div>
</div>


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