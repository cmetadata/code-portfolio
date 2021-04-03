@extends ('layout.header')

@section ('content')

	<div>
	    <h1 class="content-header grey-back">Patient</h1>
	</div>

    <a class="btn btn-default grey-back" onclick="getConfirmation();" >Delete Patient</a>
    <a class="btn btn-default grey-back" href="/patients/edit">Edit Patient</a>

    <hr/>
    <p>Display patient information here</p>

@endsection