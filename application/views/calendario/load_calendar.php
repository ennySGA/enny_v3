<div style="width:600px" class="widget-box widget-calendar">
	<div class="widget-title">
		<h5><?php echo $title ?></h5>
	</div>
	<div id='calendar'></div>
</div>

<script>

	$(document).ready(function() {
	
		$('#calendar').fullCalendar({
		
			editable: true,
			
			events: <?php echo json_encode($events); ?>,
			
			eventDrop: function(event, delta) {
				alert(event.title + ' se ha recorrido ' + delta + ' días\n' +
					'(hay que updatear la db.)');
			},
			
			loading: function(bool) {
				if (bool) $('#loading').show();
				else $('#loading').hide();
			}
			
		});
		
	});

</script>