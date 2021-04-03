@extends ('layout.header')

@section ('content')

    <form method="POST" action="/organizations">

        {{ csrf_field() }}

        <div class="parent-div"> 
        
        <div class="login-form">

        <h1 class="title2 grey-back">Create Bill</h1>
        
        <div class="grey-back buffer">

            <div class="form-group">
                <label for="organizationName">Patient Number:</label>
                <input type="text" class="form-control" id="organizationName" name="organizationName" required>
            </div>

            <div class="form-group">
                <label for="organizationName">Patient Name:</label>
                <input type="text" class="form-control" id="organizationName" name="organizationName" required>
            </div>
            <hr/>

            <div class="form-group">


                <div class="checkbox">
                    <table width="100%">
                        <tr><td></td></tr>
                        <tr>
                            <td width="30%"><label><input type="checkbox" value="">Semiprivate Room</label></td>
                            <td width="30%"><label><input type="checkbox" value="">Private Room</label></td>
                            <td width="30%"><label><input type="checkbox" value="">Television</label></td>
                        </tr><tr><td><br/></td></tr>
                        <tr>
                            <td width="30%"><label><input type="checkbox" value="">Laboratory</label></td>
                            <td width="30%"><label><input type="checkbox" value="">Glucose</label></td>
                        </tr><tr><td><br/></td></tr>
                        <tr>
                            <td width="30%"><label><input type="checkbox" value="">Radiology</label></td>
                            <td width="30%"><label><input type="checkbox" value="">Chest X-Ray</label></td>
                        </tr><tr></tr>
                    </table>

                </div>             

            </div>             


            <button type="submit" class="btn btn-default">Submit</button>

        </div>

        </div>

        </div>

    </form> 


@endsection
