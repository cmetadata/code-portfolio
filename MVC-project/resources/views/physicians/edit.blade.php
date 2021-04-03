@extends ('layout.header')

@section ('content')

    <form method="POST" action="/organizations">

        {{ csrf_field() }}

        <div class="parent-div"> 
        
        <div class="login-form">
                  
        <h1 class="title2 grey-back">Edit Physician</h1>
        
        <div class="grey-back buffer text-center">

            <div class="form-group">
                <label for="organizationName">First Name:</label>
                <input type="text" class="form-control" id="organizationName" name="organizationName" required>
            </div>       

            <div class="form-group">
                <label for="organizationName">Last Name:</label>
                <input type="text" class="form-control" id="organizationName" name="organizationName" required>
            </div>       


             <div class="form-group text-center">
                <label for="organizationName">Speciality:</label>
                <select class="form-control text-center">
                    <label for="organizationName">Specaility:</label>
                    <option value="one">Oncology</option>
                    <option value="two">Paediatrics</option>
                    <option value="three">Surgery</option>
                </select>
            </div>            

            <div class="form-group">
                <label for="organizationName">Telephone:</label>
                <input type="text" class="form-control" id="organizationName" name="organizationName" required>
            </div>            

            <button type="submit" class="btn btn-default">Submit</button>

        </div>

        </div>

        </div>

    </form> 


@endsection
