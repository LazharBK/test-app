@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                <form>
                    <div class="form-group">
                    <label for="exampleFormControlInput1">Link</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Votre lien">
                    </div>
                    <input class="btn btn-primary" type="submit" value="Submit">
                </form>

                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
