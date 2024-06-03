
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
      <div class="col-sm-5">
      <form action="">
        <div class="form-group">
          <input type="search" name="search" id="" class="" value="{{$search}}">
        </div>
        <button class="btn btn-primary">search</button>
        <a href="{{ url('/reg/view') }}">
          <button class="btn btn-primary">reset</button>
        </a>
      </form>
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
        @foreach ($user as $us)
        <tr>
          <td>{{$us->name}}</td>
          <td>{{$us->email}}</td>
          <td>{{$us->phone}}</td>
        </tr>         
        @endforeach

      </tbody>
    </table>
    <div class="row">
      {{ $user->links() }}
    </div>
  </div>
  </body>
  </html>
  