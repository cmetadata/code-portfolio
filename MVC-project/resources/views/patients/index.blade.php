@extends ('layout.header')

@section ('content')

	<div>
	    <div class='btn-toolbar pull-right'>
	        <div class='btn-group'>
	            <a class="btn btn-default new-button grey-back" href="/patients/create">New Patient</a>
	        </div>
	    </div>
	    <h1 class="content-header grey-back">Patients</h1>
	</div>

	<p>To view, edit, or delete a patient, please select them from the list below.</p>

	<div>
    <form action="#">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit">Search</button>
    </form>
  	</div>
	<hr/>

	<a href="/patients/show">
	<div class="object-div grey-back">
	    <table width="100%">
	    	<tr>
				<td width="25%">Patient ID: 12345</td>
				<td width="75%">Baker, Mary A.</td>
	    	</tr>
	    </table>
	</div>
	</a>

@endsection