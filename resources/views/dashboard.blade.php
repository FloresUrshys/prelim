@extends('base')

@extends('navbar')

@section('title', 'Dashboard')

@section('content')
    <div class="container m-3">
        <h1>Dashboard</h1>
        <div class="card offset-sm-2 border border-light mt-5">
            <div class="card-header">
                <img class="img-responsive center-block d-block mx-auto rounded-circle" src="images/logo.png" alt="logo">
            </div>
            <div class="card-body shadow bg-info">
                <h1 class="text-center text-danger">Warning!</h1>
                <h3 class="text-center">Website not Responsive</h3>
                <h5 class="text-center">Don't try to stretch this page</h5>

            </div>
        </div>
    </div>

@endsection
