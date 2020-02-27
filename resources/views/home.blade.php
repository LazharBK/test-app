@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
              <h1>Welcome </h1>
                <div class="card-footer">
                    <a class="btn btn-primary" href="{{route('link.create')}}" role="button">Add Link</a>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
