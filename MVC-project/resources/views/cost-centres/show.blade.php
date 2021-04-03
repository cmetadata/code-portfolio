@extends ('layout.header')

@section ('content')

	<div>
	    <h1 class="content-header grey-back">Cost Centre</h1>
	</div>


    <a class="btn btn-default grey-back" onclick="getConfirmation();" >Delete Cost Centre</a>
    <a class="btn btn-default grey-back" href="/cost-centres/edit">Edit Cost Centre</a>

    <hr/>
    <p>Display cost centre information here</p>

@endsection