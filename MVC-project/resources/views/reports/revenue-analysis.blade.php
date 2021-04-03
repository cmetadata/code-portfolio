@extends ('layout.header')

@section ('content')

<!--PUT STUFF HERE-->
<table width="100%">
	<tr>
		<td align="center">
			<h1 class="title"><b>Revenue Analysis</b></h1>
		</td>
	</tr>
	<tr> 
		<td align="center">
			<h2 class="title">Date: 2018-12-05</h2>
		</td>
	</tr>
	<hr>
</table>

<table width="100%" class="grey-back">
	<br>

	<tr>
		<td width="15%" align="left">Cost Centre</td>
		<td width="15%" align="left">Name</td>
		<td width="15%" align="center">Number Of Transactions</td>
		<td width="15%" align="left">Total Charges</td>
		<td width="10%" align="left">Assure</td>	
		<td width="10%" align="left">ESI</td>
		<td width="10%" align="left">Self Pay</td>
		<td width="10%" align="left">Other</td>
	</tr> 
	<hr>
</table>

<table width="100%">
	<br>

	<tr>
		<td width="15%" align="left">100</td>
		<td width="15%" align="left">Room and Board</td>
		<td width="15%" align="center">124</td>
		<td width="15%" align="left">12,000.97</td>
		<td width="10%" align="left">3,500.34</td>	
		<td width="10%" align="left">1,594.65</td>
		<td width="10%" align="left">4,806.63</td>
		<td width="10%" align="left">2,100.00</td>
	</tr>
</table>

<table width="100%">
	<br>

	<tr>
		<td width="15%" align="left">110</td>
		<td width="15%" align="left">Laboratory</td>
		<td width="15%" align="center">536</td>
		<td width="15%" align="left">73,587.45</td>
		<td width="10%" align="left">12,549.90</td>	
		<td width="10%" align="left">13,904.23</td>
		<td width="10%" align="left">17,133.32</td>
		<td width="10%" align="left">10,000.00</td>
	</tr>
</table>

<table width="100%">
	<br>

	<tr>
		<td width="15%" align="left">125</td>
		<td width="15%" align="left">Radiology</td>
		<td width="15%" align="center">210</td>
		<td width="15%" align="left">38,210.90</td>
		<td width="10%" align="left">13,795.45</td>	
		<td width="10%" align="left">9,490.39</td>
		<td width="10%" align="left">5,342.22</td>
		<td width="10%" align="left">9,618.93</td>
	</tr>
</table>

<table width="100%">
	<br>

	<tr>
		<td width="70%" align="left">Total Revenue</td>
		<td width="30%" align="right">123,799.32</td>
	</tr>

</table>
@endsection