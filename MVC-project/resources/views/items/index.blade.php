@extends ('layout.header')

@section ('content')

	<div>
	    <div class='btn-toolbar pull-right'>
	        <div class='btn-group'>
	            <a class="btn btn-default new-button grey-back" href="/items/create">New Item</a>
	        </div>
	    </div>
	    <h1 class="content-header grey-back">Items</h1>
	</div>

	<p>To view, edit, or delete an item, please select them from the list below.</p>

	<div>
    <form action="#">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit">Search</button>
    </form>
  	</div>
	<hr/>

	<a href="/items/show">
	<div class="object-div grey-back">
	    <table width="100%">
	    	<tr>
				<td width="20%">Item-Code: 2000</td>
				<td width="80%">Semiprivate Room</td>
	    	</tr>
	    </table>
	</div>
	</a>

@endsection