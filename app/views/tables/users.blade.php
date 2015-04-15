<!-- Admin users table -->
		<div class="row">
		    <div class="small-12 columns">
		      <div class="row">
			<div class="small-12 medium-12 large-12 columns left">
			  <select id="user-roles" name="role-filter">
				<option value="0">All roles</option>
			    @foreach( $roles as $role )
			    <option value="{{$role->id}}">{{$role->name}}</option>
			    @endforeach
			  </select>
			</div>
		      </div> <!--/.row-->
		    </div>
		</div> <!--/.row-->

<table class="responsive">
  <thead>
    <tr>
      <th width="200">First</th>
      <th width="200">Last</th>
      <th width="200">Role</th>
      <th width="200">Member since</th>
      <th width="200">Last activity</th>
    </tr>
  </thead>
  <tbody class="users">
  @foreach($users as $user)
    <tr data-id="{{$user->id}}" role-id="{{$user->role_id}}">
      <td>{{ $user->first_name }}</td>
      <td>{{ $user->last_name }}</td>
      <td>{{ $user->role->name }}</td>
      <td>{{ date('F d, Y', strtotime($user->created_at)) }}</td>
      <td>{{ date('F d, Y', strtotime($user->updated_at)) }}</td>
    </tr>
  @endforeach
  </tbody>
</table>
<!--End admin users table-->
