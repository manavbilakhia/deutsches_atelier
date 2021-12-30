<?php $this->load->view('common/header');?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.css" rel="stylesheet" type="text/css"/>

<div class="content">
	<div class="col-md-12">
		<div  class="card">
			<div class="card-header"><legend>Dashboard</legend></div>
			<div class="card-body" width: 410px;>
				<div id='calendar'></div>
				<div class='clearfix'></div>
				<hr/>
				<div class="col-md-12" >
				<div class="col-md-10" ><h4>Events</h4></div>
				<?php if($this->session->userdata('user_group_id')==1):?>
				<div class="col-md-2" ><button class="btn btn-default" data-toggle="modal" data-target="#events"><i class="fa fa-plus"> </i> Add Events</button></div>
				<?php endif;?>
				<div class='clearfix'></div>
				<?php foreach($all_events as $event):?>
				<div class="callout callout-primary">
				  <h4><?php echo $event->event_name;?></h4>
				  <p><?php echo $event->discription;?></p>
				</div>
				<?php endforeach;?>
				</div>
			</div>
			<div class="card-footer"></div>
			<div class='clearfix'></div>
		</div>
	</div>
</div>
<!-- Modal -->
<div id="events" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
		<form method="post" action="index.php?/home/create_event">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Create New Event</h4>
      </div>
      <div class="modal-body">
			Event Name
			<input type="text" name="title" class="form-control" placeholder="Enter Event Name" value="" required />
			Description
			<textarea type="text" name="description" class="form-control" placeholder="Enter Event description" value="" required></textarea>
			Start Date
			<input type="date" id="startdate" name="startdate" class="form-control" placeholder="Enter Event Start Date" value="" min='<?php echo date('Y-m-d');?>' required />
			End Date
			<input type="date" id="enddate" name="enddate" class="form-control" placeholder="Enter Event End Date" value="" min='<?php echo date('Y-m-d');?>' required />
		
      </div>
      <div class="modal-footer">
		<input type="submit"  class="btn btn-primary" value="Create Event" />
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
	  </form>
    </div>

  </div>
</div>
<div class='clearfix'></div>
<script src='http://fullcalendar.io/js/fullcalendar-2.1.1/lib/moment.min.js'></script>
<script src='http://fullcalendar.io/js/fullcalendar-2.1.1/lib/jquery.min.js'></script>
<script src="http://fullcalendar.io/js/fullcalendar-2.1.1/lib/jquery-ui.custom.min.js"></script>
<script src='http://fullcalendar.io/js/fullcalendar-2.1.1/fullcalendar.min.js'></script>
<script>

	$(document).ready(function() {
	    var date = new Date();
		var d = date.getDate();
		var m = date.getMonth();
		var y = date.getFullYear();
		var newdate = new Date(y,m,d);
		
		$('#startdate').on('change',function(){
			var d1 = $(this).val();
			var sd = new Date(d1);
			var d2 = $('#enddate').val();
			var ed = new Date(d2);
			alert(newdate+'='+sd);
			if(newdate > sd){
				alert('Min date should be todays date.');
				$(this).val(date);
			}
			if(sd < ed){
				alert('End date should be greater than start date.');
				$(this).val(date);
			}
		});
		$('#enddate').on('change',function(){
			var d1 = $('#startdate').val();
			var sd = new Date(d1);
			var d2 = $(this).val();
			var ed = new Date(d2);
			if(sd < ed){
				alert('End date should be greater than start date.');
				$(this).val(date);
			}
		});
		/*  className colors
		
		className: default(transparent), important(red), chill(pink), success(green), info(blue)
		
		*/		
		
		  
		/* initialize the external events
		-----------------------------------------------------------------*/
	
		$('#external-events div.external-event').each(function() {
		
			// create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
			// it doesn't need to have a start or end
			var eventObject = {
				title: $.trim($(this).text()) // use the element's text as the event title
			};
			
			// store the Event Object in the DOM element so we can get to it later
			$(this).data('eventObject', eventObject);
			
			// make the event draggable using jQuery UI
			$(this).draggable({
				zIndex: 999,
				revert: true,      // will cause the event to go back to its
				revertDuration: 0  //  original position after the drag
			});
			
		});
	
	
		/* initialize the calendar
		-----------------------------------------------------------------*/
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay,listWeek',
				contentHeight: 600,
			},
			defaultDate: new Date(),
			navLinks: true,
			eventLimit: true,
			events: <?php echo $events;?>
			
		});
		
		
	});

</script>

<?php $this->load->view('common/footer');?>