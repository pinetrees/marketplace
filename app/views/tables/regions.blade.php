    <table class="responsive small-12 data form" data-name="regions">
	  <thead>
	    <tr class="region-display hide">
	      <th><a class="show-all-regions"><< </a><span class="current-region">Root</span></th>
	    </tr>
	  </thead>
	  <tbody>
	    @foreach($regions as $region)
	    <tr class="region data" data-id="{{ $region->id }}">
	      <td>{{ $region->name }}</td>
	    </tr>
	    @endforeach
	    <tr>
	  </tbody>
	  @if(Request::path() == 'admin')
	  <tbody>
	      <td><input type="text" name="region" class="new" placeholder="Add region"></td>
	    </tr>
	    <tr>
	      <td><input type="submit" class="btn-passport btn-blue add region submit" value="Save"></td>
	    </tr>
	    <tr>
	      <td><input type="submit" class="btn-passport btn-blue delete submit" value="Delete"></td>
	    </tr>
	  </tbody>
	  @endif
    </table>
<script>
var regions = {{ $regions }};
</script>
<script src="/js/regions.js"></script>
