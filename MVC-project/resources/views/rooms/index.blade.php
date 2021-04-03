@extends ('layout.header')

@section ('content')

	<div>
	    <div class='btn-toolbar pull-right'>
	        <div class='btn-group'>
	            <a class="btn btn-default new-button grey-back" href="/rooms/create">New Room</a>
	        </div>
	    </div>
	    <h1 class="content-header grey-back">Rooms</h1>
	</div>

	<p>To view, edit, or delete a room, please select them from the list below.</p>

	<div>
    <form action="#">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit">Search</button>
    </form>
  	</div>
	<hr/>

	<a href="/rooms/show">
	<div class="object-div grey-back">
	    <table width="100%">
	    	<tr>
				<td width="20%">Room Number: 100A</td>
				<td width="20%">Type: SP</td>
				<td width="60%">Baker, Mary A.</td>
	    	</tr>
	    </table>
	</div>
	</a>

@endsection