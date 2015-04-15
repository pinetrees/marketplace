<!-- Admin users table -->
<table class="responsive full">
  <thead>
    <tr>
      <th>Name</th>
    </tr>
  </thead>
  <tbody>
  @foreach($services as $service)
    <tr>
      <td><a href="/service/{{$service->id}}">{{ $service->name }}</a></td>
    </tr>
  @endforeach
  </tbody>
</table>
<!--End admin users table-->
