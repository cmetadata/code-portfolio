@extends ('layout.header')

@section ('content')

	<div>
	    <div class='btn-toolbar pull-right'>
	        <div class='btn-group'>
	            <a class="btn btn-default new-button grey-back" href="/transactions/create">New Transaction</a>
	        </div>
	    </div>
	    <h1 class="content-header grey-back">Transactions</h1>
	</div>

	<p>To view, edit, or delete a transaction, please select them from the list below.</p>

	<div>
    <form action="#">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit">Search</button>
    </form>
  	</div>
	<hr/>

	<a href="/transactions/show">
	<div class="object-div grey-back">
	    <table width="100%">
	    	<tr>
				<td width="20%">Transaction ID: 1234567890</td>
				<td width="80%">Baker, Mary A.</td>
	    	</tr>
	    </table>
	</div>
	</a>

@endsection