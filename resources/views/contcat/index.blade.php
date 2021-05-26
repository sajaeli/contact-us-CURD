@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <table class="table table-hover">
                    <a href="{{ route('contcat.create') }}" class="btn btn-info col-2" >Add</a>
                    <thead>
                    <tr>
                        <th>FirstName</th>
                        <th>LastName</th>
                        <th>Email</th>
                        <th>action</th>
                    </tr>
                    </thead>
                    
                    <tbody>
                    @foreach ($contcats as $contcat)
                        <tr>
                            <td>{{ $contcat->LName }}</td>
                            <td>{{ $contcat->FName }}</td>
                            <td>{{ $contcat->Email }}</td>
                            <td>
                                <a href="{{ route('contcat.edit', $contcat->id) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> edit</a>
                                
                                <form action="{{ route('contcat.destroy', $contcat->id) }}" method="post" style="display: inline-block">
                                    {{ csrf_field() }}
                                    {{ method_field('delete') }}
                                    <button type="submit" class="btn btn-danger delete btn-sm"><i class="fa fa-trash"></i> delete</button>
                                </form><!-- end of form -->

                            </td>
                        </tr>
                    
                    @endforeach
                    </tbody>

                </table><!-- end of table -->
            </div>
        </div>
    </div>
</div>
@endsection
