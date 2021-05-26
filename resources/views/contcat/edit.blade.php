@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>update Contcat</h2>
            <form action="{{ route('contcat.update',$contcat->id) }}" method="post">
                
                @csrf
                {{ method_field('put') }}

              <div class="form-group">
                <label>First Name</label>
                <input type="text" name="FName" class="form-control" value="{{ $contcat->FName }}">
              </div>
              
              <div class="form-group">
                <label>Last Name</label>
                <input type="text" name="LName" class="form-control" value="{{ $contcat->LName }}">
              </div>

              <div class="form-group">
                <label>Email</label>
                <input type="email" name="Email" class="form-control" value="{{ $contcat->Email }}">
              </div>

              <button type="submit" class="btn btn-primary mt-3">Submit</button>

            </form>
        </div>
    </div>
</div>
@endsection
