$('.tab-title.active a').trigger('click');
$('#pages .tab-title').first().find('a').trigger('click');
$('#pages form .update').click(function(){
	$form = $(this).closest('form');
	$.post('/page/update', $form.serialize(), function(res){
		res = $.parseJSON(res);
		console.log(res)
		if( res.success ) $form.find('.response-message').html(res.message);
	});
});
$('.sortable').sortable();
$('.admin-actions .view').click(function(e){
	//alert(user_id);
});
