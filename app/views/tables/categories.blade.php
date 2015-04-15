
     <table class="responsive small-12 data form" data-name="categories">
	  <thead>
	    <tr class="directory-display hide">
	      <th><a class="parent-directory"><< </a><span class="current-directory">Root</span></th>
	    </tr>
	  </thead>
	  <tbody class="category-list">
	    @foreach($categories as $index => $category)
	    @if($category->ofRoot())
	    <tr class="category data" data-id="{{ $category->id }}" data-index="{{ $index }}">
	      <td>{{ $category->name }}</td>
	    </tr>
	    @endif
	    @endforeach
	    <tr>
          </tbody>
	  @if(Request::path() == 'admin')
          <tbody>
	      <td><input type="text" name="category" class="new" placeholder="Add category"></td>
	    </tr>
	    <tr>
	      <td><input type="submit" class="btn-passport btn-blue add category submit" value="Save"></td>
	    </tr>
	    <tr>
	      <td><input type="submit" class="btn-passport btn-blue delete category submit" value="Delete"></td>
	    </tr>
	    <tr>
	      <td><span class="category response-message">Response will go here.</span></td>
	    </tr>
	  </tbody>
	  @elseif(strpos(Request::path(),'dashboard') !== false)
          <tbody>
	      <td><input type="text" name="requested-category" class="new" placeholder="Request a category"></td>
	    </tr>
	  </tbody>
	  @endif
     </table>
<script>
var categories = {{ $categories }};
var structuredCategories = {{ json_encode($structuredCategories) }};
current_data_directory.children = structuredCategories;
console.log(current_data_directory);
</script>
<script src="/js/categories.js"></script>
