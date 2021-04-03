@extends ('layout.header')

@section ('content')

	<div>
	    <h1 class="content-header grey-back">Daily Revenue Report</h1>
	</div>


    <div class="object-div grey-back">

    	<table width="100%">
	    	<tr>
				<td>Patient: 12345</td>
			</tr><tr>
				<td>Baker, Mary</td>
			</tr><tr>
				<td>Room 101A</td>
	    	</tr>
	    </table><hr/>

	    <table width="100%">
	    	<tr>
				<td width="20%"><b>Financial Source</b></td>
				<td width="10%"><b>Cost Centre</b></td>
				<td width="15%"><b>Item Code</b></td>
				<td width="35%"><b>Description</b></td>
				<td width="20%"><b>Charge</b></td>
	    	</tr>
	    	<tr>
				<td width="20%">Assure</td>
				<td width="10%">100</td>
				<td width="15%">2000</td>
				<td width="35%">Semi-Private Room</td>
				<td width="20%">$200.00</td>
	    	</tr>
	    	<tr>
				<td width="20%">Self-Pay</td>
				<td width="10%">100</td>
				<td width="15%">2005</td>
				<td width="35%">Television</td>
				<td width="20%">$5.00</td>
	    	</tr>
	    	<tr>
				<td width="20%">Assure</td>
				<td width="10%">110</td>
				<td width="15%">1580</td>
				<td width="35%">Glucose</td>
				<td width="20%">$25.00</td>
	    	</tr>
	    </table><hr/>

	    <table width="100%">
	    	<tr>
				<td width="70%"></td>
				<td width="10%"><b>Total:</b></td>
				<td width="20%">$230.00</td>
	    	</tr>
	    </table>
	</div>

@endsection