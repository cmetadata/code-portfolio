@extends ('layout.header')

@section ('content')

<!--PUT STUFF HERE-->
<table width="100%">
	<tr>
		<td align="center">
			<h1 class="title"><b>Mortality Rates</b></h1>
		</td>
	</tr>
	<hr>
</table>


<table width="100%" class="grey-back">
	<br>

	<tr>
		<td width="15%" align="Left"><b>First Name</b></td>
		<td width="15%" align="Left"><b>Last Name</b></td>
		<td width="15%" align="Left"><b>Age</b></td>	
		<td width="15%" align="Left"><b>Gender</b></td>
		<td width="40%" align="Left"><b>Cause Of Death</b></td>
	</tr> 
</table>

<table width="100%">
	<br>


	<tr>
		<td width="15%" align="left">Rose</td>
		<td width="15%" align="left">Melange</td>
		<td width="15%" align="left">34</td>
		<td width="15%" align="left">Female</td>	
		<td width="40%" align="left">Complications from surgery</td>
	</tr>
</table>

<table width="100%">
	<br>

	<tr>
		<td width="15%" align="left">James</td>
		<td width="15%" align="left">Thompson</td>
		<td width="15%" align="left">52</td>	
		<td width="15%" align="left">Male</td>
		<td width="40%" align="left">Flu</td>
	</tr>

</table>

<table width="100%">
	<br>

	<tr>
		<td width="15%" align="left">Alex</td>
		<td width="15%" align="left">Mooney</td>
		<td width="15%" align="left">20</td>	
		<td width="15%" align="left">Male</td>
		<td width="40%" align="left">Infection</td>
	</tr>
</table>

<table width="100%">
	<br>

	<tr>
		<td width="70%" align="left">Total Deaths</td>
		<td width="30%" align="right">3</td>
	</tr>

</table> 
<br>
@endsection