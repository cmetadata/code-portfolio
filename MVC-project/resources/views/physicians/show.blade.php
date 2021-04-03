@extends ('layout.header')

@section ('content')

	<div>
	    <h1 class="content-header grey-back">Physician</h1>
	</div>

    <a class="btn btn-default grey-back" onclick="getConfirmation();" >Delete Physician</a>
    <a class="btn btn-default grey-back" href="/physicians/edit">Edit Physician</a>

    <hr/>
    <p>Display physician information here</p>

@endsection