

@extends('layout.main')
@push('title')
<title>Registration</title>
@endpush
@section('main-section')
<h1 class="text-center">Registration</h1>

<form action="{{ url('/login') }}" method="POST">
  @csrf


  <div class="form-group">
    <label for="email">Email:</label>
    <input type="text" name="email" class="form-control" id="email" placeholder="Enter email" value="{{ old('email') }}">
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


  <button type="submit" class="btn btn-default">Submit</button>
</form>
@endsection