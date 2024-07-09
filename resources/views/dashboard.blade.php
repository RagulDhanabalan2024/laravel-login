@extends('layouts.app')
@section('content')
    <style>
        @keyframes blink {
            50% {
                opacity: 0;
            }
        }

        .blink {
            animation: blink 1s infinite;
        }
    </style>
    <div class="container bg-success bg-opacity-10">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="d-flex justify-content-end align-items-center">
                    <div class="d-flex align-items-center">
                        <div class="blink bg-success" style="width: 10px; height: 10px; border-radius: 50%;"></div>
                        <strong class="mx-2">{{ Auth::user()->name }}</strong>
                        <img src="/user/user1.png" alt="user_profile" width="30px" height="30px" class="mx-2">
                        <a href="{{ route('logout') }}" class="btn btn-sm btn-danger">Logout</a>
                    </div>
                </div>
            </div>
            <div class="col-md-8 row align-items-center">
                <p class="font-monospace">
                    Welcome Sir,
                </p><br><br>
                <h5>
                    This is a sample dashboard for the login-system
                </h5>
            </div>
        </div>
    </div>
@endsection
