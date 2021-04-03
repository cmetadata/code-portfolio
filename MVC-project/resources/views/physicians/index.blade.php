@extends ('layout.header')

@section ('content')

	<div>
	    <div class='btn-toolbar pull-right'>
	        <div class='btn-group'>
	            <a class="btn btn-default new-button grey-back" href="/physicians/create">New Physician</a>
	        </div>
	    </div>
	    <h1 class="content-header grey-back">Physicians</h1>
	</div>

	<p>To view, edit, or delete a physician, please select them from the list below.</p>

	<div>
    <form action="#">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit">Search</button>
    </form>
  	</div>
	<hr/>

	<a href="/physicians/show">
	<div class="object-div grey-back">
	    <table width="100%">
	    	<tr>
				<td width="20%">Physician ID: 4321</td>
				<td width="80%">M.D. Thayer</td>
	    	</tr>
	    </table>
	</div>
	</a>

@endsection