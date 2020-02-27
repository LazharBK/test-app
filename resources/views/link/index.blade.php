@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                <ul class="list-group">
                @if(count($links)>0)
                    @foreach($links as $link)
                        <li class="list-group-item"><a href="{{route('link.show',['link'=>$link->code])}}">{{route('link.show',['link'=>$link->code])}}</a> : for route: {{$link->url}} </li>
                    @endforeach
                    @else
                  
                  <li class="list-group-item">No link found :(</li>
                      @endif
                    </ul>
                </div>
                <div class="card-footer">
                    <a class="btn btn-primary" href="{{route('link.create')}}" role="button">Add Link</a>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
