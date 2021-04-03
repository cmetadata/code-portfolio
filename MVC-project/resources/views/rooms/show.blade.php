@extends ('layout.header')

@section ('content')

	<div>
	    <h1 class="content-header grey-back">Room</h1>
	</div>

    <a class="btn btn-default grey-back" onclick="getConfirmation();" >Delete Room</a>
    <a class="btn btn-default grey-back" href="/rooms/edit">Edit Room</a>

    <hr/>
    <p>Display room information here</p>

@endsection