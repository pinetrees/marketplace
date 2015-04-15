jQuery(function($){
	return;
	$('.create.project').find('input[name="name"]').val('Project One');
	$('.create.project').find('textarea[name="summary"]').val('Summary One');
	$('.create.project').find('textarea[name="about"]').val('About One');
	$('.create.project').find('input[name="categories[]"]').first().prop('checked', 'checked');
});
