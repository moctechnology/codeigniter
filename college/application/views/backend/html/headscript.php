<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="<?php echo URL;?>assets/admin/css/font-awesome.css">
<link rel="stylesheet" href="<?php echo URL;?>assets/admin/pickadate.js/css/main.css">
<link rel="stylesheet" href="<?php echo URL;?>assets/admin/pickadate.js/lib/themes/classic.css" id="theme_base">
<link rel="stylesheet" href="<?php echo URL;?>assets/admin/pickadate.js/lib/themes/classic.date.css" id="theme_date">
<link rel="stylesheet" href="<?php echo URL;?>assets/admin/pickadate.js/lib/themes/classic.time.css" id="theme_time">

<link rel="stylesheet" href="<?php echo URL;?>assets/admin/css/style.default.css" type="text/css" />
<link rel="stylesheet" href="<?php echo URL;?>assets/admin/prettify/prettify.css" type="text/css" />
<link rel='stylesheet' id='headers-css' href="<?php echo URL;?>assets/admin/css/custom.css" type='text/css' />




<script type='text/javascript' src="<?php echo URL;?>assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo URL;?>assets/admin/prettify/prettify.js"></script>
<script type="text/javascript" src="<?php echo URL;?>assets/admin/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="<?php echo URL;?>assets/admin/js/jquery-ui-1.9.2.min.js"></script>
<script type="text/javascript" src="<?php echo URL;?>assets/admin/js/jquery.flot.min.js"></script>
<script type="text/javascript" src="<?php echo URL;?>assets/admin/js/jquery.flot.resize.min.js"></script>
<script type="text/javascript" src="<?php echo URL;?>assets/admin/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo URL;?>assets/admin/js/custom.js"></script>
<script type="text/javascript" src="<?php echo URL;?>assets/admin/js/fullcalendar.min.js"></script>

<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->

<script type='text/javascript'>

	jQuery(document).ready(function() {
	
		var date = new Date();
		var d = date.getDate();
		var m = date.getMonth();
		var y = date.getFullYear();
		
		var calendar = jQuery('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			buttonText: {
				prev: '&laquo;',
				next: '&raquo;',
				prevYear: '&nbsp;&lt;&lt;&nbsp;',
				nextYear: '&nbsp;&gt;&gt;&nbsp;',
				today: 'today',
				month: 'month',
				week: 'week',
				day: 'day'
			},
			selectable: true,
			selectHelper: true,
			select: function(start, end, allDay) {
				var title = prompt('Event Title:');
				if (title) {
					calendar.fullCalendar('renderEvent',
						{
							title: title,
							start: start,
							end: end,
							allDay: allDay
						},
						true // make the event "stick"
					);
				}
				calendar.fullCalendar('unselect');
			},
			editable: true,
			events: [
				{
					title: 'All Day Event',
					start: new Date(y, m, 1)
				},
				{
					title: 'Long Event',
					start: new Date(y, m, d-5),
					end: new Date(y, m, d-2)
				},
				{
					title: 'Meeting',
					start: new Date(y, m, d, 10, 30),
					allDay: false
				},
				{
					title: 'Lunch',
					start: new Date(y, m, d, 12, 0),
					end: new Date(y, m, d, 14, 0),
					allDay: false
				},
				{
					title: 'Birthday Party',
					start: new Date(y, m, d+1, 19, 0),
					end: new Date(y, m, d+1, 22, 30),
					allDay: false
				},
				{
					title: 'Click for Google',
					start: new Date(y, m, 28),
					end: new Date(y, m, 29),
					url: 'http://google.com/'
				}
			]
		});
		
	});

</script>