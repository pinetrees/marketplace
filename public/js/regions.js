console.log(regions);
$.each(regions, function(index, region){
	indexedRegions[region.id] = region;
});
$('.region.data').click(function(){
	id = $(this).attr('data-id');
	if( region.id != id )
	{
		region = indexedRegions[id];
	} else {
		region = {};
	}
	console.log(region);
	filterResultsByRegion();
});

function filterResultsByRegion(){
	if( typeof( region.id ) == 'undefined' ){
		$('.result').addClass('active-region');
		displayFilteredResults();
		return true;
	}
	$('.result').removeClass('active-region');

	$('.project.result').filter(function(){
		var $project = $(this);
		var active = false;
		project = indexedProjects[$(this).attr('data-id')];
		return ( project.region_id == region.id );
	}).addClass('active-region');

	$('.service.result').filter(function(){
		var $service = $(this);
		service = indexedServices[$(this).attr('data-id')];
		return ( service.region_id == region.id );
	}).addClass('active-region');
	displayFilteredResults();
}
