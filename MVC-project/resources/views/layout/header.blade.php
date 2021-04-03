<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mountain View Community Hospital</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ secure_asset('css/custom.css') }}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <script type="text/javascript">
         <!--
            function getConfirmation(){
               var retVal = confirm("Are you sure you want to delete this?");
               if( retVal == true ){
                  window.location.replace("/");
                  return true;
               }
               else{
                  return false;
               }
            }
         //-->
      </script>

</head>
<body>

<div class="container">

    <h1 class="title">Mountain View Community Hospital</h1>

    <nav class="navbar navbar-default navbar-static-top">
      <div class="container-fluid left">
        <ul class="nav navbar-nav">

      <li><a href="/">Home</a></li>
      <li><a href="/patients">Patients</a></li>
      <li><a href="/physicians">Physicians</a></li>
      <li><a href="/rooms">Rooms</a></li>
      <li><a href="/items">Items</a></li>
      <li><a href="/cost-centres">Cost Centres</a></li>
      <li><a href="/patient-bills">Patient Bills</a></li>
      <li><a href="/transactions">Transactions</a></li>
      <li class="nav-item dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
          Reports
          <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="/reports/patient-bill">Patient Bill</a></li>
          <li><a class="dropdown-item" href="/reports/revenue-analysis">Revenue Analysis</a></li>
          <li><a class="dropdown-item" href="/reports/room-utilization">Room Utilization</a></li>
          <li><a class="dropdown-item" href="/reports/daily-revenue">Daily Revenue</a></li>
          <li><a class="dropdown-item" href="/reports/healthcare-associated-incident">Healthcare Associated Incident</a></li>
          <li><a class="dropdown-item" href="/reports/mortality-rates">Mortality Rates</a></li>
        </ul>
      </li>    
    </ul>
  </div>
        
      <div class="container-fluid right">
        <ul class="nav navbar-nav">
          <li><a href="/help">Help</a></li>
          <li><a href="/login">Login</a></li>
        </ul>
      </div>
  </nav>


    <div class="content">

        @yield ('content')

    </div>

    @include ('layout.footer')

</div>

</body>
</html> 