@extends ('layout.header')

@section ('content')

	<div>
	    <h1 class="content-header grey-back">Transaction</h1>
	</div>

    <a class="btn btn-default grey-back" onclick="getConfirmation();" >Delete Transaction</a>
    <a class="btn btn-default grey-back" href="/transactions/edit">Edit Transaction</a>

    <hr/>
    <p>Display transaction information here</p>

@endsection