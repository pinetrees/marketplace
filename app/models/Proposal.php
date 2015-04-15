<?php


class Proposal extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'proposals';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	/**
	 * The attributes available for mass assignment
	 *
	 * @var array
	 */
	protected $fillable = array('name'); 

	public function message() 
	{
		return $this->hasOne('Message');
	}

	public function buyer()
	{
		return $this->belongsTo('User', 'buyer_id');
	}

	public function provider()
	{
		return $this->belongsTo('User', 'provider_id');
	}

	public function project()
	{
		return $this->belongsTo('Project');
	}

	public function path()
	{
		return public_path() . '/proposals/ ' . $this->name;
	}

	public static function makeFromInput()
	{
	        $file = Input::file('proposal');
		if( $file ) 
		{
			$project = Project::find(Input::get('project_id'));
			$provider = Auth::user();
			$name = static::generateName($project, $provider, $file);
			$upload = $file->move(public_path() . '/proposals', $name);
			if( $upload )
			{	
				$proposal = new Proposal;
				$proposal->buyer_id = Input::get('recipient_id');
				$proposal->provider_id = $provider->id;
				$proposal->project_id = $project->id;
				$proposal->name = $name;
				$proposal->save();
				return $proposal;
			} else {
				return false;
			}
		} else {
			return false;
		}
	}

	public static function byLinks($provider, $project)
	{
		return Proposal::where('provider_id', $provider->id)->where('project_id', $project->id);
	}

	public static function generateName($project, $provider, $file)
	{
		return Text::spaceless($project->name) . Text::spaceless($provider->company) . '.' . $file->getClientOriginalExtension();
	}

}
