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
                <h3 class="panel-title">Clear Archive</h3>
            </div>
        <div class="panel-body">
        <div class="form-group">
            <form class="form-horizontal row-border" method= "POST" action="clearingarchive">
                <div class="form-group">
                    <label class="col-md-2 control-label">Date</label>
                    <div class="col-md-10">
                        <div class="input-group input-append date" id="datePicker">
                            <input type="text" class="form-control" name="count" />
                            <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                        </div>
                    </div>
                </div>
            <div class ="pull-right">
		        <button type="submit" class="btn btn-primary">Clear</button>
		    </div>
            </form>
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