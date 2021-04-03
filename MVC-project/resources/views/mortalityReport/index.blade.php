@extends ('layout.header')

@section ('content')
	<div>
	    <div class='btn-toolbar pull-right'>
	        <div class='btn-group'>
	            <a class="btn btn-default new-button grey-back" href="/cost-centres/create">New HAI report</a>
	        </div>
	    </div>
	    <h1 class="content-header grey-back">HAI Reports</h1>
	</div>

<!--PUT STUFF HERE-->
<table>
	<tr>
		<td width="100%" align="center">
			<h1 class="title">Mortality Rates For Mountain View Community Hospital</h1>
		</td>
	</tr>

	<tr width="50%">
		<td width="50%" align="center">Heeby Jeebyes</td>
    	<td width="50%" align="left">(518) 746-4242</td>
    </tr>
	<tr width="50%">
		<td width="50%" align="center">Columbus, OH 02340</td>
    	<td width="50%" align="left">DR@email.net</td>
    </tr>
</table>

@endsection