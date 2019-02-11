@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in!
                     <a href="http://127.0.0.1:8000/site" class="nav-link">押しちゃってください(*´ω｀)</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
