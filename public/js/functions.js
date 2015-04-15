function clearServiceForm(){
	$form = $('form[name="service"]');
	$form.find('input[type="text"], textarea').val('');
	$form.find('input[type="checkbox"]').prop('checked', false);
}

function clearProjectForm(){
	$form = $('form[name="project"]');
	$form.find('input[type="text"], textarea').val('');
	$form.find('input[type="checkbox"]').prop('checked', false);
}

function clearContentForm(){
	$form = $('form[name="content"]');
	$form.find('input[type="text"], textarea').val('');
	$form.find('input[type="checkbox"]').prop('checked', false);
	$form.find('.content.carrier').val('Create Content');
	$form.find('a[name="view"]').hide();
}

function buildDateString($date){
	if (isNaN($date.getDate())) return;
	return months[$date.getMonth()] + ' ' + $date.getDate() + ', ' + $date.getFullYear();
}

function programaticallyClickCategories(categories){
	var continueLooping = true;
	console.log(categories);
	$.each(categories, function(index, child){
		if( !continueLooping ) return;
		if( child.parent_id == category.id ){
			//changeCategory(child.id);
			$('.category.data').filter(function(){
				return ( $(this).attr('data-id') == child.id );
			}).trigger('click');
			categories.splice(index, 1);
			programaticallyClickCategories(categories);
			continueLooping = false;
		}
	});
}

function displayFilteredResults(){
	$results = $('.market .result').hide().filter(function(){
		return ( 
			$(this).hasClass('active-category') 
			&&
			$(this).hasClass('active-region') 
			&&
			$(this).hasClass('active-type')
			&&
			$(this).hasClass('active-query')
		);
	});
	$('.search-results-number').removeClass('hide');
	$('.search-results-counter').html($results.length);
	$results.slice(0, 3).show();
	if( countRemainingResults() > 0 ){
		$('.load-more-results').slideDown();
	} else {
		$('.load-more-results').slideUp();
	}
}

function loadMoreResults(){
	$('.result:hidden').filter(function(){
		return ( 
			$(this).hasClass('active-category') 
			&&
			$(this).hasClass('active-region') 
			&&
			$(this).hasClass('active-type')
			&&
			$(this).hasClass('active-query')
		);
	}).slice(0, 2).slideDown();
}

function countRemainingResults(){
	return $('.result:hidden').filter(function(){
		return ( 
			$(this).hasClass('active-category') 
			&&
			$(this).hasClass('active-region') 
			&&
			$(this).hasClass('active-type')
			&&
			$(this).hasClass('active-query')
		);
	}).length
}

function navigateToCategory(category){
	var categoryBranch = new Array();
	while(category.parent_id != 0){
		categoryBranch.push(category)
		category = indexedCategories[category.parent_id];
	}
	while(!categoryIsRoot){
		$('.parent-directory').trigger('click');
	}
	programaticallyClickCategories(categoryBranch);
}

function handle(res){
	if( res.type == 'project' ){
		if( _.findWhere(projects, { id : res.project.id }) == undefined ){
			projects.push(res.project);
			$option = $('<option></option>').val(res.project.id).html(res.project.name);
			$('select[name="update-project"]').append($option).val(res.project.id).trigger('change');
		}
	}
	if( res.type == 'content' ){
		if( _.findWhere(content, { id : res.content.id }) == undefined ){
			content.push(res.content);
			$option = $('<option></option>').val(res.content.id).html(res.content.title);
			$('select[name="update-content"]').append($option).val(res.content.id).trigger('change');
		}
	}
	if( res.type == 'service' ){
		if( _.findWhere(services, { id : res.service.id }) == undefined ){
			services.push(res.service);
			$option = $('<option></option>').val(res.service.id).html(res.service.name);
			$('select[name="update-service"]').append($option).val(res.service.id).trigger('change');
		}
	}
}

function markAsRead(message){
	$.post('/read/message', { message: message.id }, function(res){
		if( res == 1 )	
		{
			$um = $('.unread-messages');
			$um.html(parseInt($um.html())-1);
			$('.message').filter(function(){
				return ( $(this).attr('data-id') == message.id );
			}).removeClass('unread');		
		}
	});
}

function markThreadAsRead(thread){
	$.post('/read/thread', { thread: thread.id }, function(res){
		if( res == 1 )	
		{
			$um = $('.unread-messages');
			$um.html(parseInt($um.html())-1);
			$('.thread').filter(function(){
				return ( $(this).attr('data-id') == thread.id );
			}).removeClass('unread');		
			thread.pivot.read = 1;
		}
	});
}

function paintResponse(response){
	$message = $('<div></div>').addClass('small-12 medium-10 columns panel').html(response.message);
	$response = $('<div></div>').addClass('row').attr('data-id', response.id)
		.append($('<div></div>').addClass('small-12 medium-2 columns panel').html(response.sender.username))
		.append($message);
	if( isAdmin == 1 && response.approved != 1 ){
 		$approveMessage = $('<button></button>').addClass('small-2 medium-2 columns btn-blue panel approve-message').html($('<span></span>').html('Approve')).click(approveMessage);
		$message.removeClass('medium-10').addClass('medium-8');
		$response.append($approveMessage);
	} else if ( isAdmin == 1 && false ){
	//Soon to be the branch that handles not showing the approved toggle for admin conversations

	} else if ( isAdmin == 1 ){
 		$unapproveMessage = $('<button></button>').addClass('small-2 medium-2 columns btn-blue panel unapprove-message').html($('<span></span>').html('Unapprove')).click(unapproveMessage);
		$message.removeClass('medium-10').addClass('medium-8');
		$response.append($unapproveMessage);
	}
	return $response;
}

function approveMessage(){
	$.post('/approve/message', { message: $(this).closest('.row').attr('data-id') }, function(res){
		if( res == 1 )
		{
			window.location.reload();
		}
	});
}

function unapproveMessage(){
	$.post('/unapprove/message', { message: $(this).closest('.row').attr('data-id') }, function(res){
		if( res == 1 )
		{
			window.location.reload();
		}
	});
}

function paintResult(){

}
