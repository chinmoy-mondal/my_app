
<!DOCTYPE html>
<html lang="en">
<head>
  <title>login </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li><a href="{{ url('/logout') }}">logout</a></li>
    </ul>
  </div>
</nav>

<div class="container">
  <h2>Login</h2>
    <div class="row">
      <div class="col-sm-3" >
      <form action="">
          <input type="search" name="search" id="" class="" value="{{$search}}">
        <button class="btn btn-primary">search</button>
      </form>
      </div>
      <div class="col-sm-6">
        
      <a href="{{ url('/login') }}">
        <button class="btn btn-danger">reset</button>
      </a>
      </div>
    </div>
    <table class="table">
      <thead>
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
        </tr>
      </thead>
      <tbody>
          <?php
            foreach ($user as $us ) {
              ?>
                <tr>
                  <td>{{$us->name}}</td>
                  <td>{{$us->email}}</td>
                  <td>{{$us->phone}}</td>
                </tr>
              <?php
            }
          ?>

        
        
      </tbody>
    </table>
    <div class="row">
      <?php
        if(count($user)){
          $user->links();
        }
        
      ?>
    </div>
  </div>
  </body>
  </html>
  