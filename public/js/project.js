$('input[name="start_date"]').change(function(){
	$date = new Date($(this).val().replace('-',','));
	$('span.start-date-view').html(buildDateString($date));
});

$('input[name="end_date"]').change(function(){
	$date = new Date($(this).val().replace('-',','));
	$('span.end-date-view').html(buildDateString($date));
});

