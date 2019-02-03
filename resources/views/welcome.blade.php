@extends('layouts.app')
@section('page-title','Blue Water Staffing')
@section('content')
  <section class="hero is-bold is-light is-fullheight-with-navbar">
    <div class="hero-body">
      <div class="container">
        <div class="column is-half is-offset-3">
          <img src="{{asset('/images/main-logo.png')}}" alt="">
        </div>
      </div>
    </div>
  </section>
{{-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blue Water Recruiting</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #197aaa;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #197aaa;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Blue Water Recruiting
                </div>

                <div class="links">
                    <a href="https://bluwtr.com/About">About</a>
                    <a href="https://bluwtr.com/Contact">Contact Us</a>
                    <a href="https://bluwtr.com/Posting">Jobs</a>
                    <a href="https://bluwtr.com/clientportal">Client</a>
                    <a href="https://bluwtr.com/candidatelogin">Candidate</a>
                    <a href="https://bluwtr.com/amportal">Account Manager</a>
                </div>
            </div>
        </div>
    </body>
</html> --}}
