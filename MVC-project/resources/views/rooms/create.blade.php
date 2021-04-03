@extends ('layout.header')

@section ('content')

    <form method="POST" action="/organizations">

        {{ csrf_field() }}

        <div class="parent-div"> 
        
        <div class="login-form">

        <h1 class="title2 grey-back">Create Room</h1>
        
        <div class="grey-back buffer">

            <div class="form-group">
                <label for="organizationName">Room Number:</label>
                <input type="text" class="form-control" id="organizationName" name="organizationName" required>
            </div>

            <div class="form-group text-center">
                <label for="organizationName">Room Type:</label>
                <select class="form-control text-center">
                    <label for="organizationName">Room Type:</label>
                    <option value="one">Private</option>
                    <option value="two">Semi-Private</option>
                </select>
            </div>            

            <button type="submit" class="btn btn-default">Submit</button>

        </div>

        </div>

        </div>

    </form> 


@endsection
