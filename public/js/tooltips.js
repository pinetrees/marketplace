var tooltips = {};
tooltips["dashboard-projects"] = 'This is where you can create, modify, and view your projects';
tooltips["dashboard-settings"] = 'This is where you can turn these things off!';
tooltips["avatar-navigation"] = 'This takes you to your dashboard';
tooltips["market-type-switch"] = 'Toggle between projects and services';

$.each($('.has-tooltip'), function(index, tippable){
	name = $(this).attr('data-tooltip-name');
	console.log(name);
	title = tooltips[name];
	console.log(tooltips[name]);
	if( typeof(title) != 'undefined' ){
		$(this).attr('data-tooltip', '');
		$(this).attr('aria-haspopup', 'true');
		$(this).attr('title', title);
	}
});
