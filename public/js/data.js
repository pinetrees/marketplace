var current_data_id;
var current_data_directory = {};
var indexedCategories = new Array();
var indexedRegions = new Array();
var indexedProjects = new Array();
var indexedServices = new Array();
var indexedMessages = new Array();
var indexedThreads = new Array();
var category = {};
var region = {};
var project = {};
var service = {};
var message = {};
var $date = new Date();
var user_id;
var query = {
	type : 'service'
}

var categoryIsRoot = true;
var categoryExtension = {};

var months = new Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
var isAdmin = false;
