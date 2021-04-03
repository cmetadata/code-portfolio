@extends ('layout.header')

@section ('content')

	<div>
	    <div class='btn-toolbar pull-right'>
	        <div class='btn-group'>
	            <a class="btn btn-default new-button grey-back" href="/cost-centres/create">New Cost Centre</a>
	        </div>
	    </div>
	    <h1 class="content-header grey-back">Cost Centres</h1>
	</div>

	<p>To view, edit, or delete a cost centre, please select them from the list below.</p>

	<div>
    <form action="#">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit">Search</button>
    </form>
  	</div>
	<hr/>

	<a href="/cost-centres/show">
	<div class="object-div grey-back">
	    <table width="100%">
	    	<tr>
				<td width="33%">Cost Centre ID: 125</td>
				<td width="33%">Radiology</td>
	    	</tr>
	    </table>
	</div>
	</a>

@endsection