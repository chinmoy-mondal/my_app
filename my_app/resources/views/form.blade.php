

  @extends('layout.main')
  @push('title')
  <title>Registration</title>
  @endpush
  @section('main-section')
  <h1 class="text-center">Registration</h1>

  <form action="{{ url('/reg') }}" method="POST">
    @csrf
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" name="name" class="form-control" id="name" placeholder="Enter name" value="{{ old('name') }}">
      <span class="text-danger">
        @error('name')
          {{ $message }}
        @enderror
      </span>
    </div>
    
    <div class="form-group">
      <label for="phone">Phone:</label>
      <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter phone" value="{{ old('phone') }}">
      <span class="text-danger">
        @error('phone')
          {{ $message }}
        @enderror
      </span>
    </div>

    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" value="{{ old('email') }}">
      <span class="text-danger">
        @error('email')
          {{ $message }}
        @enderror
      </span>
    </div>


    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter password">
      <span class="text-danger">
        @error('password')
          {{ $message }}
        @enderror
      </span>
    </div>

    <div class="form-group">
      <label for="pwd">Conform Password:</label>
      <input type="password" name="conform_password" class="form-control" id="pwd" placeholder="Enter password">
      <span class="text-danger">
        @error('conform_password')
          {{ $message }}
        @enderror
      </span>
    </div>

    <button type="submit" class="btn btn-default">Submit</button>
  </form>
  @endsection