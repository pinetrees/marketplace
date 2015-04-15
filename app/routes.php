<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// =============================================
// STATIC ROUTES ===============================
// =============================================
Route::get('/', function()
{
	return View::make('home')->with('user', Auth::user());
});

Route::get('/about', function()
{
	return View::make('about')->with('page', Page::findByName('about'));
});

Route::get('/news', function()
{
	return View::make('news')->with('page', Page::findByName('news'));
});


// =============================================
// UTILITY ROUTES ==============================
// =============================================
Route::get('/setting/get/{key}', function($key)
{
	print_r( Setting::get($key) );
});
Route::get('/form/vault', function() {
	return View::make('forms/vault');
});

Route::get('/user/projects/count', function()
{
	return Auth::user()->projects()->count();
});
Route::get('/category/{category}/extend/node', function($category)
{
	print_r( Category::extendNode($category) );
});
Route::get('/project/with/categories/{id}', function($id)
{
	echo json_encode( Project::withCategories($id) );
});

Route::get('/threads', function()
{
	return Thread::with('messages')->get();
});

Route::get('/bind/user/{uid}/to/thread/{tid}', function($uid, $tid)
{
	echo $uid;
	echo $tid;
	print_r(User::find($uid)->threads()->attach(Thread::find($tid)));
});

Route::get('/read/thread', function()
{
	return Thread::markAsRead(2);
});

//Broken
Route::get('/copy/named/{name}', function()
{
	print_r( Copy::named('defualt-copy') );
});

// =============================================
// INTERNAL ROUTES =============================
// =============================================
Route::get('/profile', function()
{
	if (Auth::check())
	{
		return View::make('profile');
	} else {
		return Redirect::to('/login');
	}
});

Route::get('/dashboard', function()
{
	if (Auth::check())
	{
		if(Auth::user()->role_id == 1) { 
			return Redirect::to('/admin'); 
		} else if(Auth::user()->role_id == 3) {
			return View::make('dashboard/buyer');
		} else if(Auth::user()->role_id == 2) {
			$services = Service::where('user_id', '=', Auth::user()->id)->with('categories')->get();
			return View::make('dashboard/provider')->with('services', $services)->with('categories', Category::all())->with('regions', Region::all())->with('providers', User::all())->with('user', Auth::user());
		} else { 
			return Redirect::to('/login');
		}
	} else {
		return Redirect::to('/login');
	}
});

Route::get('/dashboard/settings', function()
{
	Session::put('tab', 'settings');
	return Redirect::to('/dashboard');
});

Route::get('/admin/dashboard/buyer', function()
{
	if (Auth::check())
	{
		if(Auth::user()->role_id != 1) {
			return Redirect::to('/login');
		} else {
			return View::make('dashboard/buyer');
		}
	} else {
		return Redirect::to('/login');
	}
});

Route::get('/admin/dashboard/provider', function()
{
	if (Auth::check())
	{
		if(Auth::user()->role_id != 1) {
			return Redirect::to('/login');
		} else {
			$services = Service::where('user_id', '=', Auth::user()->id)->with('categories')->get();
			return View::make('dashboard/provider')->with('services', $services)->with('categories', Category::all())->with('regions', Region::all())->with('providers', User::all())->with('user', Auth::user());
		}
	} else {
		return Redirect::to('/login');
	}
});

Route::get('/admin', function()
{
	if (Auth::check() && Auth::user()->isAdmin())
	{
		return View::make('admin');
	} else {
		return Redirect::to('/login');
	}
});

Route::get('/dashboard/messages', function()
{
	if( Auth::user() )
	{
		if( Auth::user()->isAdmin() )
		{
			return View::make('messages')->with('messages', Message::needsModeration());
		} else {
			return View::make('messages')->with('messages', Message::to(Auth::user()));
		}
	} else {
		Session::put('redirect', Request::url());
		return Redirect::to('/login');
	}
});

Route::get('/dashboard/inbox', function()
{
	if( Auth::user() )
	{
		return View::make('threads')->with('threads', Auth::user()->getThreads());
	} else {
		Session::put('redirect', Request::url());
		return Redirect::to('/login');
	}
});

Route::get('/dashboard/projects/{id}', function($id)
{
	Session::put('projectID', $id);
	return Redirect::to('/dashboard');	
});

// =============================================
// ADMIN ROUTES ================================
// =============================================

Route::get('/user/{id}', function($id)
{
	if( Auth::user() && Auth::user()->isAdmin() )
	{
		$user = User::find($id);
		if( $user->isProvider() )
		{
			return Redirect::to("/provider/$user->id");
		} else {
			return Redirect::to("/buyer/$user->id");
		}
	} else {
		return Redirect::to('/');
	}
});

// =============================================
// TEMPLATE ROUTES =============================
// =============================================

Route::get('/project/{id}', function($id)
{
	return View::make('project/single')->with('project', Project::find($id));
});

Route::get('/service/{id}', function($id)
{
	return View::make('service/single')->with('service', Service::find($id));
});

Route::get('/provider/{id}', function($id)
{
	return View::make('provider/single')->with('provider', User::find($id));
});

Route::get('/buyer/{id}', function($id)
{
	if( Auth::user() && Auth::user()->isAdmin() )
	{
		return View::make('buyer/single')->with('buyer', User::find($id));
	} else {
		return Redirect::to('/');
	}
});

// =============================================
// AUTHENTICATION ROUTES =======================
// =============================================
Route::get('/login', function()
{
	if( Auth::user() ) {
		return Redirect::to('/dashboard');
	} else {
		return View::make('login');
	}
});

Route::get('/registration', function()
{
	if( Auth::user() ) {
		return Redirect::to('/dashboard');
	} else {
		return View::make('registration');
	}
});

Route::get('/login/backdoor/{id}', function($id)
{
	if( Auth::check() && Session::has('skeleton') )
	{
		return Redirect::to('/login');
	} else {
		return Redirect::to('/login');
	}
});

Route::post('/login', function()
{
	$username = Input::get('username');
	$password = Input::get('password');
	$remember = Input::get('remember');
	if ((Auth::attempt(array('username' => $username, 'password' => $password), $remember)) ||
	    (Auth::attempt(array('email' => $username, 'password' => $password), $remember)))
	{
		if(Request::ajax()) 
		{
			echo json_encode(array("success" => true));
		} else {
			if( Session::has('redirect') )
			{
				return Redirect::to(Session::pull('redirect'));	
			} else {
				return Redirect::to('/dashboard');
			}
		}
	} else {
		if(Request::ajax())
		{
			echo json_encode(array("success" => false, "message" => "That combination isn't in our system"));
		} else {
			return Redirect::to('/login');
		}
	}
});

Route::get('/logout', function()
{
	Auth::logout();
    
	return Redirect::to('/');
});

Route::get('/{type}/{id}/message', function($type, $id)
{
	if( Auth::user() )
	{
		Session::put('action', 'message');
		return Redirect::to('/' . $type . '/' . $id);
	} else {
		Session::put('redirect', Request::url());
		return Redirect::to('/login');
	}
});

// =============================================
// QUERY ROUTES ================================
// =============================================
Route::get('/market', function()
{
	if( !Session::has('type') && Auth::check() ) Session::put('type', Auth::user()->wantsA());
	return View::make('/market/single')->with('type', Session::pull('type'))->with('categoryExtension', Session::pull('categoryExtension'));
	//->with(Session::pull('key'), Session::pull('value'));
});

Route::get('/market/type/{type}', function($type)
{
	Session::put('type', Text::singular($type));
	//Session::put('key', 'type');	
	//Session::put('value', Text::singular($type));	
	return Redirect::to('/market');
});

Route::get('/projects', function()
{
	return Redirect::to('/market/type/projects');
});

Route::get('/services', function()
{
	return Redirect::to('/market/type/services');
});

Route::get('/{redirect}/category/{category}', function($redirect, $category)
{
	Session::put('categoryExtension', json_encode(Category::extendNodeWithObjects($category)));	
	//Session::put('key', 'categoryExtension');	
	//Session::put('value', json_encode(Category::extendNodeWithObjects($category)));	
	return Redirect::to("/$redirect");
});

Route::post('/market', function()
{
	$subcategories = DB::table('categories')->where('parent_id', 0)->get();
	$type = Input::get('type');
	$query = Input::get('query');
	$category = Input::get('category');
	$region = Input::get('region');
	$sort_by = Input::get('sort-by');
	switch ($type) {
		case 'project':
			$results = Project::all();
			break;
		case 'service':
			//This may be broken
			$results = Service::with_Categories($category);
			break;
	}	
	$results_were = 'results were';
	if( count($results) == 1 ) $results_were = 'result was';
	$for = 'for the search for';
	if( $query == '' ) $for = '';
	if ( $category == '' ) $category = 0;
	return View::make('market/dynamic')
		->with('user', Auth::user())
		->with('type', $type)
		->with('results', $results)
		->with('results_were', $results_were)
		->with('for', $for)
		->with('query', $query)
		->with('category_id', $category)
		->with('subcategories', DB::table('categories')->where('parent_id', $category)->get())
		->with('region_id', $region)
		->with('sort_by', $sort_by);
});

Route::get('/market/cat-{cid}/reg-{rid}', function($cid, $rid)
{
});

Route::post('/query', function()
{
	echo Project::__query(Input::all())->toJSON();
});

// =============================================
// API ROUTES ==================================
// =============================================
Route::group(array('prefix' => 'api'), function() {

	Route::resource('users', 'UserController', 
		array('only' => array('index', 'store', 'destroy')));

});
Route::post('/user/update', function()
{
	$user = Auth::user();
	$user->first_name = Input::get('first_name');
	$user->last_name = Input::get('last_name');
	$user->company = Input::get('company');
	$user->email = Input::get('email');
	$user->phone = Input::get('phone');
	$user->website = Input::get('website');
	$user->tooltips = Input::get('tooltips');
	$user->notifications = Input::get('notifications');
	
	$password = Input::get('password');
	if(!empty($password))
		$user->password = Hash::make($password);


	$file = Input::file('avatar');
	if( $file ) 
	{
		$name = 'user-' . Auth::user()->id . '-avatar';// . '.' . $file->getClientOriginalExtension();
		$upload = $file->move(public_path() . '/avatars', $name);
		$user->hasAvatar = true;
	}

	$user->save();
	if(Request::ajax()) 
		echo json_encode(array("success" => true, "message" => "Your information has been updated"));
	else 
		return Redirect::to('/dashboard/settings');
});

Route::post('/register', function()
{
	$return = array();
	$inputs = Input::all();
	$rules = array('email' => 'unique:users,email');
	$validator = Validator::make($inputs, $rules);
	if( $validator->fails() ) 
		return json_encode( array( 
			'success'	=> false,
			'messages' 	=> $validator->messages() 
		) );
	$user = new User;
	$user->email = Input::get('email');
	$user->first_name = Input::get('first_name');
	$user->last_name = Input::get('last_name');
	$user->username = $user->email;
	$user->role_id = Input::get('role_id');
	$user->password = Hash::make(Input::get('password'));
	$user->save();
	$user->createDefaultSettings();
	Auth::login($user);
	return json_encode( array(
		'success'	=> true,
		'user'		=> (array)$user,
	) );
});

Route::get('/user/delete/{id}', function($id)
{
	$user = User::find($id);
	if( $user ) $user->delete();
	else echo 'No such user';
});

Route::post('/add/region', function() 
{
	$region_name = Input::get('name');
	if( !$region_name ) return json_encode(array("success" => false));
	$region = new Region;
	$region->name = $region_name;
	$region->save();
	return json_encode(array("success" => true));
});

Route::post('/delete/region', function()
{
	$region_id =  Input::get('id');
	if( !$region_id ) return json_encode(array("success" => false));
	$region = Region::find($region_id);
	$region->delete();
	return json_encode(array("success" => true));
	
});

Route::post('/add/category', function() 
{
	$category = new Category;
	$category->name = Input::get('name');
	$category->parent_id = Input::get('parent_id');
	$category->save();
	return json_encode($category);
});

Route::post('/delete/category', function()
{
	$category_id =  Input::get('id');
	if( !$category_id ) return json_encode(array("success" => false));
	$category = Category::find($category_id);
	$category->delete();
	return json_encode(array("success" => true, "message" => "Category deleted successfully."));
	
});

Route::post('/project/update', function()
{
	$project = Project::makeFromInput();
	if( Input::get('requested-category') != '' )
	{
		$category = Input::get('requested-category');

		$thread = new Thread;
		$thread->name = 'Request for new category';
		$thread->project_id = $project->id;
		$thread->sender_id = Auth::user()->id;
		$thread->recipient_id = 1;
		$thread->save();
	
		$recipients = array($thread->sender_id, $thread->recipient_id);
		$recipients = User::withAdministratorIDs($recipients);
		$thread->users()->sync($recipients);
	
		$message = new Message;
		$message->thread_id = $thread->id;
		$message->sender_id = Auth::user()->id;
		$message->recipient_id = $thread->recipient_id;
		$message->message = "I would like to add '$category' as a category to help classify my project";
		$message->save();
	}
	if( Input::get('id') == 0 ) {
		$action = 'created';
	} else {
		$action = 'updated';
	}
	return json_encode(array('success' => true, 'message' => "Your project has been $action!", "action" => "create", "type" => "project", "project" => Project::withCategories($project->id)));
});

Route::post('/service/update', function()
{
	$service = Service::makeFromInput();
	if( Input::get('requested-category') != '' )
	{
		$category = Input::get('requested-category');

		$thread = new Thread;
		$thread->name = 'Request for new category';
		$thread->service_id = $service->id;
		$thread->sender_id = Auth::user()->id;
		$thread->recipient_id = 1;
		$thread->save();
	
		$recipients = array($thread->sender_id, $thread->recipient_id);
		$recipients = User::withAdministratorIDs($recipients);
		$thread->users()->sync($recipients);
	
		$message = new Message;
		$message->thread_id = $thread->id;
		$message->sender_id = Auth::user()->id;
		$message->recipient_id = $thread->recipient_id;
		$message->message = "I would like to add '$category' as a category to help classify my service";
		$message->save();
	}
	if( Input::get('id') == 0 ) {
		$action = 'created';
	} else {
		$action = 'updated';
	}
	return json_encode(array('success' => true, 'message' => "Your service has been $action!", "action" => "create", "type" => "service", "service" => Service::withCategories($service->id)));
});

Route::post('/content/update', function()
{
	$content = Content::makeFromInput();
	if( Input::get('id') == 0 ) {
		$action = 'created';
	} else {
		$action = 'updated';
	}
	return json_encode(array('success' => true, 'message' => "The content has been $action.", "type" => "content", "content" => Content::find($content->id)));
});

Route::post('/content/delete', function(){
	$content = Content::find(Input::get('id'));
	$content->delete();
	return json_encode(array('success' => true, 'message' => "The content has been deleted."));
});

Route::post('/project/delete', function(){
	$project = Project::find(Input::get('id'));
	$project->active = false;
	$project->save();
	//$project->delete();
	return json_encode(array('success' => true, 'message' => "The project has been deleted."));
});

Route::post('/service/delete', function(){
	$service = Service::find(Input::get('id'));
	$service->active = false;
	$service->save();
	//$service->delete();
	return json_encode(array('success' => true, 'message' => "The service has been deleted."));
});

Route::post('/page/update', function()
{
	$page = Page::find(Input::get('id'));
	$page->title = Input::get('title');
	$page->summary = Input::get('excerpt');
	$page->save();
	$content = Input::get('content');
	foreach( $content as $order => $content_id )
	{
			$content = Content::find($content_id);
			$content->order = $order;
			$content->save();	
	}
	return json_encode(array('success' => true, 'message' => "The page has been updated."));
});

Route::post('/send/message', function()
{
	$thread = new Thread;
	$thread->name = Input::get('subject');
	$thread->project_id = Input::get('project_id');
	$thread->service_id = Input::get('service_id');
	$thread->sender_id = Auth::user()->id;
	$thread->recipient_id = Input::get('recipient_id');
	$thread->save();

	$recipients = array($thread->sender_id, $thread->recipient_id);
	$recipients = User::withAdministratorIDs($recipients);
	$thread->users()->sync($recipients);

	$message = new Message;
	$message->thread_id = $thread->id;
	$message->sender_id = Auth::user()->id;
	$message->recipient_id = Input::get('recipient_id');
	$message->message = Input::get('message');
	$message->save();

	$user = User::admin();
	$text = 'You have a new message awaiting moderation.';
	$data = array(
		'name' => $user->first_name, 
		'url' => URL::to('/dashboard/inbox'),
		'unsubscribe' => URL::to('/dashboard/settings'),
		'text'	=> $text
	);
	Mail::send('emails.dynamic', $data, function($m)
	{
		$m->to('joshua@tier27.com', 'Joshua Kornreich')->subject('Subject');
	});
	return json_encode(array("success" => true, "message" => "Your message has been sent"));

});

Route::get('/send/message/tail', function()
{
	$user = User::admin();
	$text = 'You have a new message awaiting moderation.';
	$data = array(
		'name' => $user->first_name, 
		'url' => URL::to('/dashboard/inbox'),
		'unsubscribe' => URL::to('/dashboard/settings'),
		'text'	=> $text
	);
	Mail::send('emails.dynamic', $data, function($m)
	{
		$m->to('joshua@tier27.com', 'Joshua Kornreich')->subject('Subject');
	});
	return;
	return json_encode(array("success" => true, "message" => "Your message has been sent"));
});

Route::post('/admin/send/message', function()
{
	$thread = new Thread;
	$thread->name = Input::get('subject');
	//$thread->project_id = Input::get('project_id');
	//$thread->service_id = Input::get('service_id');
	$thread->sender_id = Auth::user()->id;
	$thread->recipient_id = Input::get('recipient_id');
	$thread->approved = 1;
	$thread->save();

	$recipients = array($thread->sender_id, $thread->recipient_id);
	//$recipients = User::withAdministratorIDs($recipients);
	$thread->users()->sync($recipients);

	$message = new Message;
	$message->thread_id = $thread->id;
	$message->sender_id = Auth::user()->id;
	$message->recipient_id = Input::get('recipient_id');
	$message->message = Input::get('message');
	$message->approved = 1;
	$message->save();
	return json_encode(array("success" => true, "message" => "Your message has been sent"));

	$user = User::admin();
	$text = 'You have a new message awaiting moderation.';
	Mail::send('emails.dynamic', array('name' => $user->first_name, 'url' => URL::to('/dashboard/inbox'), 'text' => $text), function($m)
	{
		$m->to('joshua@tier27.com', 'Joshua Kornreich')->subject('Subject');
	});

});

Route::get('/send/mail', function()
{
	Mail::send('emails.ink.basic', array('subject' => 'Subject', 'body' => 'Message'), function($m)
	{
		$m->from('joshua@tier27.com', 'John Smith')->to('joshua@tier27.com', 'Joshua Kornreich')->subject('A message from the contact form');
	});
	echo 'Mail sent...';
});

Route::get('/send/simple/mail', function()
{
	Mail::send('emails.simple', array('subject' => 'Subject', 'body' => 'Message'), function($m)
	{
		$m->to('joshua.kornreich@gmail.com', 'Joshua Kornreich')->subject('Subject');
	});
	echo 'Mail sent...';
});

Route::get('/send/dynamic/mail/{uid}', function($uid)
{
	$user = User::find($uid);
	if( !$user ) return;
	$message = 'You have a message waiting for you in your ESM inbox.';
	Mail::send('emails.dynamic', array('name' => $user->first_name, 'url' => URL::to('/dashboard/inbox'), 'message' => $message), function($m)
	{
		$m->to('joshua@tier27.com', 'Joshua Kornreich')->subject('Subject');
	});
	echo 'Mail sent...';
});

Route::post('/send/proposal', function()
{
	$proposal = Proposal::makeFromInput();
	$project = Project::find(Input::get('project_id'));
	
	if( $proposal ) {
		$thread = new Thread;
		$thread->name = 'Proposal for ' . $project->name;
		$thread->project_id = Input::get('project_id');
		$thread->service_id = Input::get('service_id');

		$thread->sender_id = Auth::user()->id;
		$thread->recipient_id = Input::get('recipient_id');
		$thread->save();
	
		//$recipients = array($thread->sender_id, $thread->recipient_id);
		$recipients = array($thread->recipient_id);
		$recipients = User::withAdministratorIDs($recipients);
		$thread->users()->sync($recipients);
		
		$message = new Message;
		$message->thread_id = $thread->id;
		$message->sender_id = Auth::user()->id;
		$message->recipient_id = Input::get('recipient_id');
		$message->attachment_id = $proposal->id;
		$message->message = Input::get('message');
		$message->save();
		return Redirect::to('/project/' . $project->id);
	} else {
		return json_encode(array("success" => false, "message" => "Your proposal submission was unsuccessful."));
	}

});

Route::post('/approve/message', function()
{
	return Message::approve(Input::get('message'));
});

Route::post('/unapprove/message', function()
{
	return Message::unapprove(Input::get('message'));
});

Route::get('/approve/thread/{id}', function($id)
{
	$thread = Thread::approve($id);
	print_r( $thread );
});

Route::get('/unapprove/thread/{id}', function($id)
{
	$thread = Thread::approve($id, false);
	print_r( $thread );
});

Route::post('/approve/thread', function()
{
	Thread::approve(Input::get('thread'));
	$thread = Thread::find(Input::get('thread'));
	$user = User::find($thread->recipient_id);
	$text = 'You have a message waiting for you in your ESM inbox.';
	$data = array(
		'name' => $user->first_name, 
		'url' => URL::to('/dashboard/inbox'), 
		'text' => $text,
		'unsubscribe' => URL::to('/dashboard/settings')
	);
	Mail::send('emails.dynamic', $data, function($m)
	{
		$m->to('joshua@tier27.com', 'Joshua Kornreich')->subject('Subject');
	});
	return 1;

});

Route::post('/unapprove/thread', function()
{
	$thread = Thread::approve(Input::get('thread'), false);
	return 1;
});

Route::post('/read/message', function()
{
	return Message::markAsRead(Input::get('message'));
});

Route::post('/read/thread', function()
{
	return Thread::markAsRead(Input::get('thread'));
});

Route::post('/post/response', function()
{
	$responder = Responder::makeFromInput();
	return json_encode($responder->attachSender());
});

Route::post('/post/message', function()
{
	$message = Message::makeFromInput();
	return json_encode($message->attachSender());
});

Route::post('/admin/configuration/settings/update', function()
{
	foreach(Input::all() as $key => $value)
	{
		$setting = Setting::firstOrNew(array('key' => $key));
		$setting->key = $key;
		$setting->value = $value;
		$setting->save();
	}
	return json_encode(array("success" => true, "message" => 'The settings have been updated'));
});

Route::get('/bookmarks', function()
{
	return Auth::user()->bookmarks()->get()->toJSON();
});

Route::get('/bookmark/service/{id}', function($id)
{
	Auth::user()->bookmarks()->detach($id);
	Auth::user()->bookmarks()->attach($id);
});

Route::get('/unbookmark/service/{id}', function($id)
{
	Auth::user()->bookmarks()->attach($id);
	Auth::user()->bookmarks()->detach($id);
});

Route::post('/bookmark/service', function()
{
	$id = Input::get('id');
	Auth::user()->bookmarks()->detach($id);
	Auth::user()->bookmarks()->attach($id);
});

Route::post('/unbookmark/service', function()
{
	$id = Input::get('id');
	Auth::user()->bookmarks()->attach($id);
	Auth::user()->bookmarks()->detach($id);
});

Route::post('/bookmark', function()
{
	$id = Input::get('id');
	Auth::user()->bookmarks()->detach($id);
	Auth::user()->bookmarks()->attach($id);
});

Route::post('/unbookmark', function()
{
	$id = Input::get('id');
	Auth::user()->bookmarks()->attach($id);
	Auth::user()->bookmarks()->detach($id);
});

// =============================================
// CATCH ALL ROUTE =============================
// =============================================
App::missing(function($exception)
{
	return View::make('home');
});

// =============================================
// VIEW COMPOSERS ==============================
// =============================================
View::composer('/market/dynamic', function($view)
{
	$view
		->with('type', 'project')
		->with('regions', Region::all())
		->with('categories', Category::all())
		->with('results_were', 'results_were')
		->with('for', '')
		->with('query', '')
		->with('subcategories', Category::where('parent_id', 0)->get());
});

View::composer('/market/*', function($view)
{
	$view
		->with('page', Page::findByName('market'))
		->with('projects', Project::thatIsActive()->with('categories')->get())
		->with('services', Service::thatIsActive()->with('categories')->get())
		->with('categories', Category::with('children')->get())
		->with('regions', Region::all())
		->with('structuredCategories', Category::structured());
});


View::composer('dashboard/buyer', function($view)
{
	$view
		->with('projects', Auth::user()->getProjects())
		->with('services', Auth::user()->getServices())
		->with('categories', Category::with('children')->get())
		->with('structuredCategories', Category::structured())
		->with('regions', Region::all())
		->with('projectID', Session::pull('projectID'))
		->with('tab', Session::pull('tab'));
});

View::composer('dashboard/provider', function($view)
{
	$view
		->with('projects', Auth::user()->getProjects())
		->with('services', Auth::user()->getServices())
		->with('categories', Category::with('children')->get())
		->with('structuredCategories', Category::structured())
		->with('regions', Region::all())
		->with('projectID', Session::pull('projectID'));
});

View::composer('admin', function($view)
{
	$view
		->with('users', User::all())
		->with('types', array('Administrator', 'Provider', 'Buyer'))
		->with('projects', Project::all())
		->with('services', Service::all())
		->with('regions', Region::all())
		->with('categories', Category::with('children')->get())
		->with('structuredCategories', Category::structured())
		->with('pages', Page::all())
		->with('content', Content::all())
		->with('managing', true)
		->with('settings', Setting::all())
		->with('roles', Role::all());
});

View::composer('service/single', function($view)
{
	
});

//Sweet!
if( Auth::check() && Auth::user()->isAdmin() )
{
	Session::put('skeleton', true);
	View::share('providers', User::providers());
}
View::share('user', Auth::user());
//View::share('featured_projects', Project::featured());
View::share('featured_projects', array());
//View::share('featured_services', Service::featured());
View::share('featured_services', array());
//View::share('featured_articles', Content::featured());
View::share('featured_articles', array());
View::share('unread', Thread::unread());
//View::share('copy', Copy::all());


// =============================================
// UTILITY ROUTES ==============================
// =============================================
Route::get('/administrators', function()
{
	$administrators = User::administratorIDs();
	$arr = array(1, 2);
	print_r( User::withAdministratorIDs($arr) );
});

Route::get('/connect/project/{pid}/to/service/{sid}', function($pid, $sid)
{
	$project = Project::find($pid);
	$project->services()->detach($sid);
	$project->services()->attach($sid);
});

Route::get('/disconnect/project/{pid}/from/service/{sid}', function($pid, $sid)
{
	$project = Project::find($pid);
	$project->services()->attach($sid);
	$project->services()->detach($sid);
});

Route::get('/buyer/{id}/services', function($id)
{
	$region = Region::take(1)->get()->first();
	echo json_encode(User::find($id)->hasManyThrough('Service', 'Project'));
	echo json_encode(User::find($id)->hasManyThrough('Project', 'Service'));
});

Route::get('/is/bookmarked/{id}', function($id)
{
	echo Service::find($id)->isBookmarked();
});

Route::post('/assign', function()
{
	$project = Project::find(Input::get('project_id'));
	$project->assignToProvider(Input::get('provider_id'));	
	return Redirect::back();
});

Route::post('/unassign', function()
{
	$project = Project::find(Input::get('project_id'));
	$project->unassignFromProvider();
	return Redirect::back();
});

Route::get('/become/{id}', function($id)
{
	if( Auth::check() && Session::has('skeleton') )
	{
		Auth::logout();
		$user = User::find($id);
		Auth::login($user);
		return Redirect::back();
	} else {
		return Redirect::to('/login');
	}
});


// =============================================
// MESSAGING ROUTES ============================
// =============================================
Route::get('/mark/as/unread/{id}', function($id)
{
	$thread = Thread::find($id);
	$thread->markAsUnread(1);
	return 'Done!';
});

Route::get('/email/template', function()
{
	Return View::make('emails.ink.basic');
});

Route::get('/email/template/simple', function()
{
	Return View::make('emails.simple');
});

Route::get('/email/template/dynamic', function()
{
	Return View::make('emails.dynamic')
	->with('name', 'Josh')
	->with('url', URL::to('/dashboard/inbox'))
	->with('text', 'This is just a test!')
	->with('unsubscribe', URL::to('/dashboard/settings'));
});

Route::get('/approve/messages/by/thread/{id}', function($id)
{
	echo DB::table('messages')->where('thread_id', $id)->update(array('approved' => true));	
});

Route::post('/contact', function()
{
	$contact = new Contact;
	$contact->name = Input::get('name');
	$contact->email = Input::get('email');
	$contact->message = Input::get('message');
	$contact->save();
	Mail::send('emails.text', array('subject' => 'Subject', 'body' => $contact->message), function($m) use ($contact)
	{
		$m->from($contact->email, $contact->name)->to('joshua@tier27.com', 'Joshua Kornreich')->to(Setting::get('administrative-email-address'), Setting::get('admin-name'))->subject('A message from the contact form');
	});
	return json_encode(array('success' => true, 'message' => 'Thank you! Your message has been sent.'));
});

// =============================================
// CONTENT ROUTES ==============================
// =============================================
Route::post('/edit/copy', function()
{
	if( !Auth::check() ) return json_encode(array("success" => false));
	$copy = Copy::firstOrNew(array(
		'name' => Input::get('name')
	));
	$copy->content = Input::get('content');
	$copy->save();
	return json_encode(array("success" => true, "name" => $copy->name, "content" => $copy->content));
	
});
