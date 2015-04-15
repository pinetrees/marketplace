<!-- Admin users table -->
<table class="responsive full">
  <thead>
    <tr>
      <th>Name</th>
    </tr>
  </thead>
  <tbody>
  @foreach($projects as $project)
    <tr>
      <td><a href="/project/{{$project->id}}">{{ $project->name }}</a></td>
    </tr>
  @endforeach
  </tbody>
</table>
<!--End admin users table-->
