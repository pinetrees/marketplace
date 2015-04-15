$('input[name="query"]').keyup(function(){
	query = $(this).val();

	if(query.length < 5){
		$('.result').addClass('active-query');
		displayFilteredResults();
		return true;
	};

	$('.result').removeClass('active-query');

	$.each(projects, function(index, project){
		if(project.summary.toLowerCase().indexOf(query.toLowerCase()) != -1){
			console.log(project.summary);
			$('.project.result').filter(function(){
				return ( $(this).attr('data-id') == project.id );
			}).addClass('active-query');
		}
	});

	$.each(services, function(index, service){
		if(service.summary.toLowerCase().indexOf(query.toLowerCase()) != -1){
			console.log(service.summary);
			$('.service.result').filter(function(){
				return ( $(this).attr('data-id') == service.id );
			}).addClass('active-query');
		}
	});

	displayFilteredResults();
});

$('.category-option').click(function(){
	id = $(this).attr('data-id');
	navigateToCategory(indexedCategories[id]);	
});
$('.category-option a').click(function(e){
	e.preventDefault();
});
