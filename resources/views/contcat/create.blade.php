@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>Add Contcat</h2>
            <form action="{{ route('contcat.store') }}" method="post">
                
                @csrf

              <div class="form-group">
                <label>First Name</label>
                <input type="text" name="FName" class="form-control @error('FName') is-invalid @enderror">
                @error('FName')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              
              <div class="form-group">
                <label>Last Name</label>
                <input type="text" name="LName" class="form-control @error('LName') is-invalid @enderror">
                @error('LName')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>

              <div class="form-group">
                <label>Email</label>
                <input type="email" name="Email" class="form-control @error('Email') is-invalid @enderror">
                @error('Email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>

              <button type="submit" class="btn btn-primary mt-3">Submit</button>

            </form>
        </div>
    </div>
</div>
@endsection
