<?php
include 'header.html';
include('./login/session.php');
require_once('bdd.php');
 session_start();
$theUser = $_SESSION['username'];
$dday = $_SESSION['defaultday'];
$sql = "SELECT id, title, start, end, color FROM events WHERE user = '$theUser';";

$req = $bdd->prepare($sql);
$req->execute();
$events = $req->fetchAll();

?>



    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>Peace Brookings Calendar</h1>
                <p class="lead"></p><!-- title below title-->
                <div id="calendar" class="col-centered">
                </div>
            </div>
			
        </div>
				<!-- /.row -->
				<!-- ADD Modal -->
				<div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			<form class="form-horizontal" method="POST" action="addEvent.php">
			
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Add Event</h4>
			  </div>
			  <div class="modal-body">
					 <!---Check boxes -->
					 <h5></h5>
  					<div class="panel panel-default">
    				<div class="panel-body">Dates: 
							
						
                        <div class="checkbox-inline" >
                            <input type="checkbox" class="form-check-input" name="days1" value="Monday" checked>
                            <label class="form-check-label" for="check">Monday</label>
                        </div>
                        <div class="checkbox-inline">
                            <input type="checkbox" class="form-check-input" name="days2" value="Tuesday" checked>
                            <label class="form-check-label" for="check">Tuesday</label>
                        </div>
                        <div class="checkbox-inline">
                            <input type="checkbox" class="form-check-input" name="days3" value="Wednesday" checked>
                            <label class="form-check-label" for="check">Wednesday</label>
                        </div>
                        <div class="checkbox-inline">
                            <input type="checkbox" class="form-check-input" name="days4" value="Thursday" checked>
                            <label class="form-check-label" for="check">Thursday</label>
                        </div>
                        <div class="checkbox-inline">
                            <input type="checkbox" class="form-check-input" name="days5" value="Friday" checked>
                            <label class="form-check-label" for="check">Friday</label>
												</div>
												
								</div>
  					    </div>
                        <!--
              
                    </div>
          <!-- end of check box -->
				  
				  <div class="form-group">
					<label for="start" class="col-sm-2 control-label">Start date</label>
					<div class="col-sm-10">
					  <input type="text" name="start" class="form-control" id="start" readonly>
					</div>
				  </div>
				  
				   <div class="form-group">
					<label for="end" class="col-sm-2 control-label">End date</label>
					<div class="col-sm-10">
						<input type="text" name="end" class="form-control" id="end" readonly>
					</div>
					</div>
				  
				  				  <div class="form-group">
					<label for="child" class="col-sm-2 control-label">Child</label>
					<div class="col-sm-10">
					  <select name="child" class="form-control" id="child">
							<?php
									$conn = mysqli_connect('localhost','peacebr2_user','dbuser','peacebr2_db')or die("cannot connect"); 	
									$theuser = $_SESSION['username'];
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
					<div class="form-group">
					<label for="startTime" class="col-sm-2 control-label">Start Time</label>
					<div class="col-sm-10">				
					<input class="timepicker" name="timepicker-start" />
					<script>
						$(document).ready(function(){
    $('input.timepicker').timepicker({
                timeFormat: 'h:mm p',
                minTime: '7:00am',
				maxTime: '6:00pm',
				defaultTime: '7:00am',
                startHour: 7,
                startTime: '7:00am',
				interval: 10,
				zindex: 1150,
            	dynamic: false,
                dropdown: true,
                scrollbar: true
    });
});


$(document).ready(function(){
    $('input.endpicker').timepicker({
                timeFormat: 'h:mm p',
                minTime: '7:00am',
				maxTime: '6:00pm',
				defaultTime: '6:00pm',
                startHour: 7,
                startTime: '7:00am',
				interval: 10,
				zindex: 1150,
            	dynamic: false,
                dropdown: true,
                scrollbar: true
    });
});

						</script>
					</div>
					</div>

					<div class="form-group">
					<label for="endTime" class="col-sm-2 control-label">End Time</label>
					<div class="col-sm-10">				
					<input class="endpicker" name="timepicker-end" />

					</div>
					</div>
					<div class="form-group">
					<label for="title" class="col-sm-2 control-label">Title</label>
					<div class="col-sm-10">
					  <input type="text" name="title" class="form-control" id="title" placeholder="Title">
					</div>
				  </div>
				  <div class="form-group">
					<label for="color" class="col-sm-2 control-label">Color</label>
					<div class="col-sm-10">
					  <select name="color" class="form-control" id="color">
						  <option value="">Choose</option>
						  <option style="color:#0071c5;" value="#0071c5">&#9724; Dark blue</option>
						  <option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquoise</option>
						  <option style="color:#008000;" value="#008000">&#9724; Green</option>						  
						  <option style="color:#FFD700;" value="#FFD700">&#9724; Yellow</option>
						  <option style="color:#FF8C00;" value="#FF8C00">&#9724; Orange</option>
						  <option style="color:#FF0000;" value="#FF0000">&#9724; Red</option>
						  <option style="color:#000;" value="#000">&#9724; Black</option>
						  
						</select>
					</div>
				  </div>


				
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save changes</button>
			  </div>
			</form>
			</div>
		  </div>
		</div>
		

		
		<!-- EDIT Modal -->
		<div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			<form class="form-horizontal" method="POST" action="editEventTitle.php">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Edit Event</h4>
			  </div>
			  <div class="modal-body">
				
				  <div class="form-group">
					<label for="title" class="col-sm-2 control-label">Title</label>
					<div class="col-sm-10">
					  <input type="text" name="title" class="form-control" id="title" placeholder="Title">
					</div>
					</div>
					
					<!-- start date -->
				  <div class="form-group">
					<label for="start" class="col-sm-2 control-label">Start date</label>
					<div class="col-sm-10">
					  <input type="text" name="start" class="form-control" id="start" readonly>
					</div>
				  </div>

					<!--end of start date read only-->

					<!-- Start of time picker -->
					<div class="form-group">
					<label for="startTime" class="col-sm-2 control-label">Start Time</label>
					<div class="col-sm-10">				
					<input class="timepicker" name="timepicker-start" />
					<script>
						$(document).ready(function(){
    $('input.timepicker').timepicker({
                timeFormat: 'h:mm p',
                minTime: '7:00am',
				maxTime: '6:00pm',
				defaultTime: '7:00am',
                startHour: 7,
                startTime: '7:00am',
				interval: 10,
				zindex: 1150,
            	dynamic: false,
                dropdown: true,
                scrollbar: true
    });
});


$(document).ready(function(){
    $('input.endpicker').timepicker({
                timeFormat: 'h:mm p',
                minTime: '7:00am',
				maxTime: '6:00pm',
				defaultTime: '6:00pm',
                startHour: 7,
                startTime: '7:00am',
				interval: 10,
				zindex: 1150,
            	dynamic: false,
                dropdown: true,
                scrollbar: true
    });
});

						</script>
					</div>
					</div>

					<div class="form-group">
					<label for="endTime" class="col-sm-2 control-label">End Time</label>
					<div class="col-sm-10">				
					<input class="endpicker" name="timepicker-end" />

					</div>
					</div>
  <!--end of time picker-->
				  <div class="form-group">
					<label for="color" class="col-sm-2 control-label">Color</label>
					<div class="col-sm-10">
					  <select name="color" class="form-control" id="color">
						  <option value="">Choose</option>
						  <option style="color:#0071c5;" value="#0071c5">&#9724; Dark blue</option>
						  <option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquoise</option>
						  <option style="color:#008000;" value="#008000">&#9724; Green</option>						  
						  <option style="color:#FFD700;" value="#FFD700">&#9724; Yellow</option>
						  <option style="color:#FF8C00;" value="#FF8C00">&#9724; Orange</option>
						  <option style="color:#FF0000;" value="#FF0000">&#9724; Red</option>
						  <option style="color:#000;" value="#000">&#9724; Black</option>
						  
						</select>
					</div>
				  </div>
				    <div class="form-group"> 
						<div class="col-sm-offset-2 col-sm-10">
						  <div class="checkbox">
							<label class="text-danger"><input type="checkbox"  name="delete"> Delete event</label>
						  </div>
						</div>
					</div>
				  
				  <input type="hidden" name="id" class="form-control" id="id">
				
				
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save changes</button>
			  </div>
			</form>
			</div>
		  </div>
		</div>

    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
	
	<!-- FullCalendar -->
	<script src='../js/moment.min.js'></script>
	<script src='../js/fullcalendar.min.js'></script>
	
	<script type="text/javascript" src="../js/bootstrap-datepicker.js"></script>
		<script type="text/javascript" src="../js/jquery.timepicker.js"></script>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap-datepicker.css" />
		<link rel="stylesheet" type="text/css" href="../css/jquery.timepicker.css" />
		
	<script>

	$(document).ready(function() {
		      function fmt(date) {
        return date.format("YYYY-MM-DD HH:mm");
      }
	        var date = new Date();
			var d = date.getDate();
			var m = date.getMonth();
			var y = date.getFullYear();
	  
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next,today',
				center: 'title',
				right: 'month'
			},
			defaultDate:moment(
			            <?php
			                if($_SESSION['defaultday'] == "")
			                {
			                    echo "";
			                }
			                else
			                    echo $_SESSION['defaultday'];
			                ?>),
			editable: true,
			weekends: false,
			eventLimit: true, // allow "more" link when too many events
			selectable: true,
			selectHelper: true,
			displayEventTime: true,
			displayEventEnd: true,
			select: function(start, end) {
			    
			    
			var mondayCheck = moment(start);	
			
			
	if(start.isBefore(moment()))
	{
	    var date1 = moment(start,'YYYY-MM-DD');
		var date2 = moment(moment(),'YYYY-MM-DD');
		var diff = date2.diff(date1,'days');
		console.log(diff);
        alert('Cannot Modify a Previous Date!');
    }
    
    /*else if(mondayCheck.isoWeekday("Monday").format('YYYY-MM-DD') == moment().isoWeekday("Monday").format("YYYY-MM-DD"))
    {
            alert("Cannot add within the current calendar week!\n"+
            "You attempted to add an event for " + start.format('YYYY-MM-DD')+"\n"+
            "For the week beginning on " + moment().isoWeekday("Monday").format('YYYY-MM-DD') +"\n");
    }
    */
           else if(start.isBefore(moment().add(13, 'days')))
                    {
                        alert("Cannot add within 14 days of schedule!");
                    }
    
    
    
                    else if(start.isAfter(moment().add(60, 'days')))
                    {
                        alert("Cannot add past 60 days of current date!");
                    }
                    else {
                      <?php
                        $sql = "SELECT date from blockdate";
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
                        array_push($banresult,$row->date);
                        }
                    ?>
                    var bannedDates = <?php echo json_encode($banresult);?>;
                    var iterations = 0;
                    var isBanned = 0;
                    for(iterations = 0; iterations < bannedDates.length;++iterations)
                    {
                        if(bannedDates[iterations] ==moment(start).format('YYYY-MM-DD'))
                        {
                            isBanned = 1;
                        }
                    }
                    var bannedDates = <?php echo json_encode($banresult);?>
                    
                    if(isBanned == 1)
                    {
                        alert("Date has been disabled!");
                    }
                    else
                    {
                                          
                    $('#ModalAdd #start').val(moment(start).format('YYYY-MM-DD'));
				    $('#ModalAdd #end').val(moment(end).format('YYYY-MM-DD'));
				    $('#ModalAdd').modal('show');
                      
                    }
    }
			},
			dayRender: function(date, cell){
                if (moment().diff(date,'days') > 0){
                    cell.css("background-color","Silver");
                }
                
                if(date > moment().add(60, 'days'))
                {
                    cell.css("background-color","Silver");
                }
                
                if(date < moment().add(13, 'days'))
                {
                    cell.css("background-color","Silver");
                }
                                
                
                <?php
                        $sql = "SELECT date from blockdate";
                        $sth = $bdd->prepare($sql);
                        $sth->execute();
                        
                        class Datesa {
                            public $date;
                        }
                        
                        $result = $sth->fetchAll(PDO::FETCH_CLASS,"Datesa");
                        
                        $banresult = array();
                        $strin = "";
                        foreach($result as $row)
                        {
                        array_push($banresult,$row->date);
                        }
                    ?>
                    
                    var b1 = <?php echo json_encode($banresult);?>;
                    var iterations = 0;
                    for(iterations = 0; iterations < b1.length;++iterations)
                   {
                        var theDate = b1[iterations].split('-');
                        var theMoment = moment([theDate[0],theDate[1],theDate[2]]);
                        var f1 = theMoment.subtract(1, 'months').format('YYYYMMDD');
                        var f2 = moment(date).format('YYYYMMDD');
                        if(f1 == f2)
                        {
                            cell.css("background-color","IndianRed");
                        }
                    }
                
                
                
                
                
                
         },
			eventRender: function(event, element) {
				element.bind('dblclick', function() {
					$('#ModalEdit #id').val(event.id);
					$('#ModalEdit #title').val(event.title);
					$('#ModalEdit #color').val(event.color);
					$('#ModalEdit #start').val(event.start);
					$('#ModalEdit').modal('show');
				});
			},
			
			eventDrop: function(event, delta, revertFunc) { // si changement de position
                        edit(event);
			},
			eventStartEditable: false,
			eventResize: function(event,dayDelta,minuteDelta,revertFunc) { // si changement de longueur
                        edit(event);
			},
			events: [
			<?php foreach($events as $event): 
			
				$start = explode(" ", $event['start']);
				$end = explode(" ", $event['end']);
				if($start[1] == '00:00:00'){
					$start = $start[0];
				}else{
					$start = $event['start'];
				}
				if($end[1] == '00:00:00'){
					$end = $end[0];
				}else{
					$end = $event['end'];
				}
			?>
				{
					id: '<?php echo $event['id']; ?>',
					title: '<?php echo $event['title']; ?>',
					start: '<?php echo $start; ?>',
					end: '<?php echo $end; ?>',
					color: '<?php echo $event['color']; ?>',
				},
			<?php endforeach; ?>
			]
		});
		
		function edit(event){
			start = event.start.format('YYYY-MM-DD HH:mm:ss');
			if(event.end){
				end = event.end.format('YYYY-MM-DD HH:mm:ss');
			}else{
				end = start;
			}
			
			id =  event.id;
			
			Event = [];
			Event[0] = id;
			Event[1] = start;
			Event[2] = end;
			
			$.ajax({
			 url: 'editEventDate.php',
			 type: "POST",
			 data: {Event:Event},
			 success: function(rep) {
					if(rep == 'OK'){
						alert('Saved');
					}else{
						alert('Could not be saved. try again.'); 
					}
				}
			});
		}
		
	});

</script>

<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
</body>

<div class="form-group">
            <form class="form-horizontal row-border" method= "POST" action="submitCalendar.php">
                <div class="form-group">
                </div>
            <div style="text-align: center;">
		        <button type="submit" class="btn btn-primary" onclick="Ughfml()">Submit Calendar</button>
		    </div>
            </form>
        </div>


<script>
function Ughfml() {
    alert("Calendar Submitted");
}
</script>







</html>
