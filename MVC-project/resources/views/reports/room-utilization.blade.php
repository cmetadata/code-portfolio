@extends ('layout.header')

@section ('content')

	<div>
	    <h1 class="content-header grey-back">Room Utilization Report</h1>
	</div>

    <div class="object-div">
	    <table width="100%">
	    	<tr>
				<td width="10%">Room</td>
				<td width="10%">Bed</td>
				<td width="10%">Type</td>
				<td width="20%">Patient Number</td>
				<td width="30%">Patient Name</td>
				<td width="20%">Date Admitted</td>
	    	</tr>
	    </table>
	</div>

	<div class="grey-back object-div">
	    <table width="100%">
	    	<tr>
				<td width="10%">100</td>
				<td width="10%">A</td>
				<td width="10%">SP</td>
				<td width="20%">30854</td>
				<td width="30%">Kuhn, Gregory</td>
				<td width="20%">2014/10/03</td>
	    	</tr>
	    	<tr>
				<td></td>
				<td>B</td>
				<td>SP</td>
				<td></td>
				<td></td>
				<td></td>
	    	</tr>
	    	<tr>
				<td>101</td>
				<td>A</td>
				<td>SP</td>
				<td>12345</td>
				<td>Baker, Mary</td>
				<td>2014/10/02</td>
	    	</tr>
	    	<tr>
				<td></td>
				<td>B</td>
				<td>SP</td>
				<td>41932</td>
				<td>Darnell, Joann</td>
				<td>2014/09/30</td>
	    	</tr>
	    </table>
	</div>

@endsection