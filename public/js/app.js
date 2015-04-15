global_data = {};
jQuery(function($){
	$('form .login').click(function(){
		$form = $(this).closest('form');
		$.post('/login', $form.serialize(), function(res){
			res = $.parseJSON( res );
			global_data.res = res;
			if( res.success ) $form.submit();
			else $form.find('.message').html(res.message);
		});
	});
	$('form input').keypress(function(e){
		if( e.keyCode == 13 ) $(this).closest('form').find('.submit').trigger( "click" );
	});
	$('form.user .update').click(function(){
		$form = $(this).closest('form');
		$.post('/user/update', $form.serialize(), function(res){
			res = $.parseJSON( res );
			global_data.res = res;
			if( res.success ) $form.find('.response-message').html(res.message);
		});
	});
	$('form.user .register').click(function(e){
		e.preventDefault();
		$form = $(this).closest('form');
		$.post('/register', $form.serialize(), function(res){
			res = $.parseJSON( res );
			global_data.res = res;
			$('#thanksModal').foundation('reveal', 'open');
		});
	});

	$('#data ul li a.button').click(function(e){
		e.preventDefault();
		var target = $(this).attr('data-target');
		$('table.data').hide().filter(function(){
			return($(this).attr('data-name') == target);
		}).show();
	});

	$('#projects ul li a.button').click(function(e){
		e.preventDefault();
		var target = $(this).attr('data-target');
		$('#projects .data-tab').hide().filter(function(){
			return($(this).attr('data-name') == target);
		}).show();
	});

	$('#services ul li a.button').click(function(e){
		e.preventDefault();
		var target = $(this).attr('data-target');
		$('#services .data-tab').hide().filter(function(){
			return($(this).attr('data-name') == target);
		}).show();
	});

	$('#content ul li a.button').click(function(e){
		e.preventDefault();
		var target = $(this).attr('data-target');
		$('#content .data-tab').hide().filter(function(){
			return($(this).attr('data-name') == target);
		}).show();
	});

	$('input.add.region').click(function(){
		$input = $(this).closest('.form').find('input.new');	
		$.post('/add/' + $input.attr('name'), { name: $input.val() }, function(res){
			res = $.parseJSON( res );
			if( res.success ) window.location.reload();
		});
	});

	$('input.add.category').click(function(){
		$input = $(this).closest('.form').find('input.new');	
		$.post('/add/' + $input.attr('name'), { name: $input.val(), parent_id: category.id }, function(res){
			alert(res);
			category = $.parseJSON( res );
			category.children = new Array();
			indexedCategories[category.parent_id].children.push(category);
			indexedCategories[category.id] = category;
			appendCategory(category);
	
		});
	});

	$('input.delete.region').click(function(){
		$input = $(this).closest('.form').find('input.new');	
		$.post('/delete/' + $input.attr('name'), { id: current_data_id }, function(res){
			res = $.parseJSON( res );
			if( res.success ) window.location.reload();
		});
	});

	$('input.delete.category').click(function(){
		$input = $(this).closest('.form').find('input.new');	
		if( category.children.length != 0 ) {
			$('.category.response-message').show().html('This category has children associated with it. Delete the children first.').delay(1000).fadeOut(800);
			return false;
		}
		$.post('/delete/' + $input.attr('name'), { id: category.id }, function(res){
			res = $.parseJSON( res );
			if( res.success == true ) {
				id = category.id;
				delete indexedCategories[id];
				$.each(indexedCategories[category.parent_id].children, function(index, child){
					if( child.id == id ) {
						indexedCategories[category.parent_id].children.splice(index, 1);
					}
				});
				changeCategory(category.parent_id);
				$('.category.response-message').show().html(res.message).delay(1000).fadeOut(800);
			}
		});
	});

	$('table.data tr.data').click(function(){
		$(this).closest('table.data').find('tr.data').not($(this)).removeClass('active');
		$(this).toggleClass('active');
		current_data_id = $(this).attr('data-id');
		global_data.current_data_id = current_data_id;
	});

	$('select[name="update-project"]').change(manageProject);
	function manageProject() {
		while(!categoryIsRoot){
			$('.parent-directory').trigger('click');
		}
		var id = $(this).val();
		clearProjectForm();
		if( id == 0 ) {
			$('input[type="submit"].project.create').val("Create Project");
			$('a[name="view"]').hide();
			$('.project.delete').hide();
			return;
		}
		$('.project.delete').show();
		$('.project.create').val("Update Project");
		$('a[name="view"]').show();
		$.each(projects, function(index, value) {
			if( value.id == id ) project = value;
		});
		global_data.project = project;
		$panel = $('.update.project .details');
		$panel.find('input[name="name"]').val(project.name);
		fields = new Array("summary", "about", "purpose", "requirements", "terms", "timeline", "budget", "resources", "qualifications", "evaluation");
		$.each(fields, function(index, field){
			$panel.find('textarea[name="' + field + '"]').val(project[field]).autosize().trigger('autosize.resize');
		});
		$panel.find('#start-date-controller').fdatepicker('update', project.start_date).trigger('changeDate');
		$panel.find('#end-date-controller').fdatepicker('update', project.end_date).trigger('changeDate');
		$panel.find('select[name="region_id"]').val(project.region_id);
		$panel.find('input[name="id"]').val(project.id);
		$.each(project.categories, function(index, value) {
			//$panel.find('input[name="categories[]"][value="' + value.id + '"]').prop('checked', 'checked');
			//console.log(value);
		});
		//We want to clone this so as to not mutate it or else it will only work once
		programaticallyClickCategories(project.categories.slice(0));
	}

	$('select[name="update-service"]').change(manageService);
	function manageService() {
		while(!categoryIsRoot){
			$('.parent-directory').trigger('click');
		}
		var id = $(this).val();

		clearServiceForm();
		if( id == 0 ) {
			$('input[type="submit"].service.create').val("Create Service");
			$('a[name="view"]').hide();
			$('.service.delete').hide();
			return;
		}
		$('.service.delete').show();
		$('.service.create').val("Update Service");
		$('a[name="view"]').show();
		$.each(services, function(index, value) {
			if( value.id == id ) service = value;
		});
		global_data.service = service;
		$panel = $('.update.service .details');
		$panel.find('input[name="name"]').val(service.name);
		$panel.find('textarea[name="summary"]').val(service.summary);
		$panel.find('textarea[name="about"]').val(service.about).autosize().trigger('autosize.resize');
		$panel.find('select[name="region_id"]').val(service.region_id);
		$panel.find('input[name="id"]').val(service.id);
		$panel.find('input[name="categories[]"]').prop('checked', false);
		$.each(service.categories, function(index, value) {
			//$panel.find('input[name="categories[]"][value="' + value.id + '"]').prop('checked', 'checked');
			//console.log(value);
		});
		programaticallyClickCategories(service.categories.slice(0));
	}

	$('a[name="view"]').click(function(e){
		e.preventDefault();
		href = $(this).attr('href') + $(this).closest('form').find('input[name="id"]').val();
		window.location.href = href;
	});

	$('select[name="update-content"]').change(function() {
		var id = $(this).val();
		if( id == 0 ) {
			$('.content.delete').hide();
			clearContentForm();
			return;
		}
		$('.content.carrier').val("Update Content");
		$('.content.delete').show();
		_content = _.findWhere(content, {id: id});
		console.log(_content);
		$panel = $('.update.service .details');
		$panel.find('input[name="title"]').val(_content.title);
		$panel.find('textarea[name="content"]').val(_content.content).autosize().trigger('autosize.resize');
		$panel.find('select[name="page_id"]').val(_content.page_id);
		$panel.find('input[name="id"]').val(_content.id);
	});

	$('.delete.project').click(function(e){
		e.preventDefault();
		$form = $(this).closest('form');
		$.post('/project/delete', { id : project.id }, function(res){
			res = $.parseJSON(res);
			console.log(res);
			$form.find('.response-message').html(res.message);
			$_ = $('select[name="update-project"]')
			$_.find(':selected').remove();
			$_.val('0').trigger('change');
			project = _.without(projects, project);
		});
	});

	$('.delete.service').click(function(e){
		e.preventDefault();
		$form = $(this).closest('form');
		$.post('/service/delete', { id : service.id }, function(res){
			res = $.parseJSON(res);
			console.log(res);
			$form.find('.response-message').show().html(res.message).delay(2000).fadeOut(2000);
			$_ = $('select[name="update-service"]')
			$_.find(':selected').remove();
			$_.val('0').trigger('change');
			service = _.without(services, service);
		});
	});

	$('.delete.content').click(function(e){
		e.preventDefault();
		$form = $(this).closest('form');
		$.post('/content/delete', { id : _content.id }, function(res){
			res = $.parseJSON(res);
			$form.find('.response-message').html(res.message);
			$_ = $('select[name="update-content"]')
			$_.find(':selected').remove();
			$_.val('0').trigger('change');
			content = _.without(content, _content);
		});
	});

	$('select[name="update-project"]').trigger( "change" );

	$('select[name="update-service"]').trigger('change');

	$('select[name="update-content"]').trigger( "change" );

	$('.admin li a').filter(function(){
		return ( $(this).attr('href') == '#content' );
	}).trigger('click')

	$('input[type="submit"].carrier').click(function(e){
		e.preventDefault();
		$form = $(this).closest('form');
		$.post($form.attr('action'), $form.serialize(), function(res){
			res = $.parseJSON(res);
			global_data.res = res;
			$form.find('.response-message').html(res.message);
			handle(res);
		});
	});

	$('input[type="submit"].project.create, input[type="submit"].service.create').click(function(e){
		e.preventDefault();
		$(this).closest('form').submit();
		return;
		$form = $(this).closest('form');
		$.post($form.attr('action'), $form.serialize(), function(res){
			res = $.parseJSON(res);
			global_data.res = res;
			$form.find('.response-message').html(res.message);
			handle(res);
		});
	});

	$('form[name="project"], form[name="service"]').on('valid.fndtn.abide', function(e){
		$form = $(this);
		$.post($form.attr('action'), $form.serialize(), function(res){
			res = $.parseJSON(res);
			global_data.res = res;
			$form.find('.response-message').show().html(res.message);
			handle(res);
		});
	});


	$('input[type="submit"].contact').click(function(e){
		e.preventDefault();
		$form = $(this).closest('form');
		$('.loading').show();
		$.post($form.attr('action'), $form.serialize(), function(res){
			$('.loading').hide();
			res = $.parseJSON(res);
			global_data.res = res;
			$form.slideUp(function(){
				$form.html(res.message).slideDown();
			});
			handle(res);
		});
	}).hover(function(){
	});

	$('input[type="submit"].admin-contact').click(function(e){
		e.preventDefault();
		$form = $(this).closest('form');
		$('.loading').show();
		$.post($form.attr('action'), $form.serialize(), function(res){
			$('.loading').hide();
			res = $.parseJSON(res);
			global_data.res = res;
			$form.slideUp(function(){
				$form.html(res.message).slideDown();
			});
			handle(res);
		});
	});

	$('.submit.message').click(function(e){
		e.preventDefault();
		$(this).closest('form').submit();
	});

	$('.reveal-modal.message form').on('valid.fndtn.abide', function(e){
		$form = $(this);
		$.post($form.attr('action'), $form.serialize(), function(res){
			$form.closest('.reveal-modal').find('.close-reveal-modal').trigger('click');
			res = $.parseJSON(res);
			global_data.res = res;
			$('.contact.button').remove();
			$('.contact.response-message').html(res.message);
		});
	});


	$('input[name="type"]').change(function(){
		var type = $(this).val();
		$('.result').removeClass('active-type').filter(function(){
			return ( $(this).hasClass(type) );
		}).addClass('active-type');
		displayFilteredResults();
	}).filter(function(){
		return ( $(this).val() == query.type );
	}).trigger('click').trigger('change');

	$('.history-back').click(function(){
		window.history.back();
	});

	programaticallyClickCategories(categoryExtension);


	/***************** The first messaging system ******************/
	$('.message-link').click(function(e){
		message = indexedMessages[$(this).closest('.message').attr('data-id')];
		if( message.read == 0 )
		{
			markAsRead(message);
		}
		$('.messages').hide();
		$message = $('.active-message').show();
		if( message.proposal != null )
		{
			$message.find('.proposal').closest('.row').show();
		} else {
			$message.find('.proposal').closest('.row').hide();
		}
		e.preventDefault();
		if( user.role_id == 1 ) 
		{
			$message.find('.sender').html($('<a></a>').attr('href', '/user/' + message.sender.id).html(message.sender.username))
		} else {
			$message.find('.sender').html(message.sender.username)
		}
		$message.find('.recipient').html($('<a></a>').attr('href', '/user/' + message.recipient.id).html(message.recipient.username))
		$message.find('.project').html($('<a></a>').attr('href', '/project/' + message.project.id).html(message.project.name))
		$message.find('.service').html($('<a></a>').attr('href', '/service/' + message.service.id).html(message.service.name))
		$message.find('.subject').html(message.subject)
		$message.find('.body').html(message.message)
		$.each(message.responses, function(index, response){
			$('.subsequent-messages').append(paintResponse(response));
		});	
	});

	$('.proposal a').click(function(e){
		e.preventDefault();
		window.location.href = $(this).attr('href') + message.proposal.name;
	});
	
	$('#message-to-messages').click(function(){
		$('.active-message').hide();
		$('.messages').show();
	});

	$('.active-message .approve').click(function(){
		$.post('/approve/message', { message: message.id }, function(res){
			if( res == 1 )
			{
				window.location.reload();
			}
		});
	});

	$('.submit.reply').click(function(){
		response = $('textarea[name="response"]').val();
		console.log(message);
		$.post('/post/response', { message_id : message.id, sender_id : user.id, response : response }, function(res){
			$('.subsequent-messages').append(paintResponse($.parseJSON(res)));
		});
	});

	/***************************************************************/
	/***************** The second messaging system *****************/
	$('.thread-link').click(function(e){
		e.preventDefault();
		thread = indexedThreads[$(this).closest('.thread').attr('data-id')];
		if( thread.approved == 1 ){
			$('.unapprove-thread').show();
			$('.approve-thread').hide();
		} else {
			$('.approve-thread').show();
			$('.unapprove-thread').hide();
		}
		if( thread.pivot.read == 0 )
		{
			markThreadAsRead(thread);
		}
		$('.threads').hide();
		$thread = $('.active-thread').show();
		message = thread.messages[0];
		if( message.proposal != null )
		{
			$thread.find('.proposal').closest('.row').show();
		} else {
			$thread.find('.proposal').closest('.row').hide();
		}
		$thread.find('.open-reply').show();
		$thread.find('.sender').html(thread.sender.username);
		$thread.find('.recipient').html($('<a></a>').attr('href', '/user/' + thread.recipient_id).html(thread.recipient.username));
		console.log(thread.project_id);
		if( thread.project_id != 0 )
			$thread.find('.project').html($('<a></a>').attr('href', '/project/' + thread.project.id).html(thread.project.name))
		if( thread.service_id != 0 )
			$thread.find('.service').html($('<a></a>').attr('href', '/service/' + thread.service.id).html(thread.service.name))
		$thread.find('.subject').html(thread.subject)
		$('.messages').html('');
		$.each(thread.messages, function(index, message){
			console.log(message);
			$('.messages').append(paintResponse(message));
		});	
	});

	$('.proposal a').click(function(e){
		e.preventDefault();
		window.location.href = $(this).attr('href') + message.proposal.name;
	});
	
	$('#thread-to-threads').click(function(){
		$('.active-thread').hide();
		$('.threads').show();
	});

	$('.file-upload').click(function(e){
		e.preventDefault();
		$('input[name="' + $(this).attr('data-target') + '"]').trigger('click');
	});

	$('.active-thread .approve-thread').click(function(){
		$.post('/approve/thread', { thread: thread.id }, function(res){
			if( res == 1 )
			{
				window.location.reload();
			}
		});
	});

	$('.active-thread .unapprove-thread').click(function(){
		$.post('/unapprove/thread', { thread: thread.id }, function(res){
			if( res == 1 )
			{
				window.location.reload();
			}
		});
	});

 	var $approveMessage = $('<button></button>').addClass('small-2 medium-2 columns btn-blue panel approve-message').html($('<span></span>').html('Approve'));
	$('.approve-message').click(approveMessage)

	$('.reply .submit').click(function(){
		message = $('textarea[name="response"]').val();
		console.log(message);
		$.post('/post/message', { thread_id : thread.id, sender_id : user.id, message : message }, function(res){
			$('.messages').append(paintResponse($.parseJSON(res)));
			$('.post-reply').slideUp();
		});
	});

	$('.open-reply').click(function(){
		$(this).hide();
		$('.post-reply').slideDown(function(){
			$(this).find('textarea').focus();
		});
	});

	$('.load-more-results').click(function(){
		loadMoreResults();
		if( countRemainingResults() == 0 ) $(this).slideUp();
	});

	$('.bookmark-service').click(function(){
		$(this).hide();
		service_id = $(this).closest('.service').attr('data-id');
		$.post('/bookmark/service', { id : service_id }, function(res){
		});
	});

	$('.unbookmark-service').click(function(){
		$(this).hide();
		service_id = $(this).closest('.service').attr('data-id');
		$.post('/unbookmark/service', { id : service_id }, function(res){
		});
	});

	$('.bookmark-project').click(function(){
		$(this).hide();
		project_id = $(this).closest('.project').attr('data-id');
		$.post('/bookmark', { id : project_id }, function(res){
		});
	});

	$('.unbookmark-project').click(function(){
		$(this).hide();
		project_id = $(this).closest('.project').attr('data-id');
		$.post('/unbookmark', { id : project_id }, function(res){
		});
	});

	$('.submit.assignment, .submit.unassignment').click(function(){
		$form = $(this).closest('form');
		$form.trigger('submit');
	});

	$('a[href="#users"]').click();
	$('.users tr').click(function(){
		$('.users tr').removeClass('active');
		$(this).addClass('active');
		user_id = $(this).attr('data-id');
		$('select[name="recipient_id"]').val(user_id);
		$('.admin-actions .view').attr('href', '/user/' + user_id);
		$('.admin-actions .become').attr('href', '/become/' + user_id);
	});

	var date = new Date();
	$('input[name="start_date"], input[name="end_date"]').val(date.toLocaleDateString()).trigger('change');

	$('input[type="file"][name="avatar"]').change(function(){
		$(this).closest('form').trigger('submit');
	});

	$('.upload-avatar').click(function(){
		$('input[type="file"][name="avatar"]').click();
	});

	$('select[name="role-filter"]').change(function(){
		var role_id = $(this).val();
		if( role_id == 0 ) return $('.users tr').show();
		$('.users tr').hide().filter(function(){
			return( $(this).attr('role-id') ==  role_id );
		}).show();
	});

	$('.copy').click(function(){
		$modal = $('#copy-modal');
		$modal.foundation('reveal', 'open').find('textarea[name="content"]').val($(this).html());
		$modal.find('input[name="name"]').val($(this).attr('data-name'));
	});

	$('input[type="submit"].edit-copy').click(function(e){
		e.preventDefault();
		$form = $(this).closest('form');
		$.post('/edit/copy', $form.serialize(), function(res){
			res = $.parseJSON(res);
			$('.copy').filter(function(){
				return ( $(this).attr('data-name') == res.name );
			}).html(res.content);	
			$('#copy-modal').foundation('reveal', 'close');
		});
	});

});
