console.log(categories);
$.each(categories, function(index, category){
	indexedCategories[category.id] = category;
});
category = indexedCategories[1];

$('.category.data').click(categoryClick);

function categoryClick(){
	id = $(this).attr('data-id');
	changeCategory(id);
	$('input[name="categories[]"][value="' + category.id + '"]').prop('checked', true);
	$('input[name="category-validator"]').val('true').trigger('blur');
}

function changeCategory(id){
	category = indexedCategories[id];
	$('.current-directory').html(category.name);
	$('.category.data').remove();
	$.each(category.children, function(index, child){
		$child = $('<tr></tr>').addClass('category data').attr('data-id', child.id).attr('data-index', index).html($('<td></td>').html(child.name)).click(categoryClick);
		$('.category-list').append($child);
	});
	if( category.id != 1 ) {
		//$('.parent-directory').show();
		categoryIsRoot = false;
		$('.directory-display').show();
	} else {
		//$('.parent-directory').hide();
		categoryIsRoot = true;
		$('.directory-display').hide();
		$('input[name="category-validator"]').val('');
	}

	filterResults();
}

$('.parent-directory').click(function(){
	$('input[name="categories[]"][value="' + category.id + '"]').prop('checked', false);
	changeCategory(category.parent_id);
});

function appendCategory(category){
	$category = $('<tr></tr>').addClass('category data').attr('data-id', category.id).html($('<td></td>').html(category.name)).click(categoryClick);
	$('.category-list').append($category);
}

function filterResults(){
	$('.result').removeClass('active-category');

	console.log(category);
	$('.market .project.result').filter(function(){
		if( category.id == 1 ) return true; 
		var $project = $(this);
		var active = false;
		project = indexedProjects[$(this).attr('data-id')];
		console.log(project);
		$.each(project.categories, function(index, value){
			if( value.id == category.id ){
				active = true;
			}
		});
		return active;
	}).addClass('active-category');

	$('.market .service.result').filter(function(){
		if( category.id == 1 ) return true; 
		var $service = $(this);
		var active = false;
		service = indexedServices[$(this).attr('data-id')];
		$.each(service.categories, function(index, value){
			if( value.id == category.id ){
				active = true;
			}
		});
		return active;
	}).addClass('active-category');
	displayFilteredResults();
}
