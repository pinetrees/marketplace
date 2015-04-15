var startDate = new Date();
var endDate = new Date();
$(function () {
	window.prettyPrint && prettyPrint();
	$('.start-date-controller').fdatepicker()
		.on('changeDate', function (ev) {
		ev.date = new Date($(this).attr('data-date'));
		if (typeof(endDate) != 'undefined' && ev.date.valueOf() > endDate.valueOf()) {
			$('#alert').show().find('strong').text('The start date can not be greater then the end date');
		} else {
			$('#alert').hide();
			startDate = new Date(ev.date);
			$(this).closest('table').find('.start-date-view').val($(this).data('date')).trigger('change');
		}
		$(this).fdatepicker('hide');
	}).trigger('changeDate');
	$('.end-date-controller').fdatepicker()
		.on('changeDate', function (ev) {
		ev.date = new Date($(this).attr('data-date'));
		console.log(ev);
		if (typeof(startDate) != 'undefined' && ev.date.valueOf() < startDate.valueOf()) {
			$('.end.date.error').show().text('The end date can not be less then the start date');
		} else {
			$('#alert').hide();
			endDate = new Date(ev.date);
			$(this).closest('table').find('.end-date-view').val($(this).data('date')).trigger('change');
		}
		$(this).fdatepicker('hide');
	}).trigger('changeDate');
	// implementation of disabled form fields
	var nowTemp = new Date();
	var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);
	var projectStart = $('#start-date-controller').fdatepicker({
		onRender: function (date) {
			return date.valueOf() < now.valueOf() ? 'disabled' : '';
		}
	}).on('changeDate', function (ev) {
		if( typeof(ev.date) == 'undefined' ) ev.date = new Date($(this).val());
		$('#start-date-controller').closest('table').find('.start-date-view').val($(this).data('date')).trigger('change');
		if (ev.date.valueOf() > projectEnd.date.valueOf()) {
			var newDate = new Date(ev.date)
			newDate.setDate(newDate.getDate() + 1);
			projectEnd.update(newDate);
			$('.end-date-view').val($('.start-date-view').val()).trigger('change');
		}
		projectStart.hide();
		$('#end-date-controller').trigger('click');
	}).data('datepicker');
	var projectEnd = $('#end-date-controller').fdatepicker({
		onRender: function (date) {
			return date.valueOf() <= projectStart.date.valueOf() ? 'disabled' : '';
		}
	}).on('changeDate', function (ev) {
		projectEnd.hide();
		$('#end-date-controller').closest('table').find('.end-date-view').val($(this).data('date')).trigger('change');
	}).data('datepicker');
});
