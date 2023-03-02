<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link type="text/css" href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
        <nav class="navbar">

            <!-- LOGO -->
            
            <div class="logo">BRS 2.0 {{$data['source']}}</div>
            
            <!-- NAVIGATION MENU -->
            
            <ul class="nav-links">
            
                <!-- USING CHECKBOX HACK -->
            
                <input type="checkbox" id="checkbox_toggle" />
            
                <label for="checkbox_toggle" class="hamburger">&#9776;</label>
            
                <!-- NAVIGATION MENUS -->
            
                <div class="menu">
            
                    <li><a href="/">Home</a></li>
            
                    <li><a href="/">About</a></li>
            
                    <li class="services">
            
                        <a href="/">Services</a>
            
                        <!-- DROPDOWN MENU -->
            
                        <ul class="dropdown">
            
                        <li><a href="/">Dropdown 1 </a></li>
            
                        <li><a href="/">Dropdown 2</a></li>
            
                        <li><a href="/">Dropdown 2</a></li>
            
                        <li><a href="/">Dropdown 3</a></li>
            
                        <li><a href="/">Dropdown 4</a></li>
            
                        </ul>
            
                    </li>
            
                    <li><a href="/">Pricing</a></li>
            
                    <li><a href="/">Contact</a></li>
            
                </div>
            
            </ul>
            
        </nav>
        
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card" style="margin-top: 40px">
        
                        <div class="card-body login-form">
                            <form method="POST" action="{{ route('payment') }}">
                                @csrf
                                <div class="mb-3 row">
                                    <label for="join"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Book a Tee Time') }}</label>
        
                                    <div class="col-md-6">
                                        <input type="datetime-local" class="form-control" id="dateTime" name="dateTime" required autocomplete="dateTime" autofocus>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-md-8 col-form-label text-md-right">Name</label>
        
                                    <div class="col-md-8">
                                        <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="surname" class="col-md-8 col-form-label text-md-right">Surname</label>
        
                                    <div class="col-md-8">
                                        <input id="surname" type="surname" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-md-8 col-form-label text-md-right">Email</label>
        
                                    <div class="col-md-8">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    </div>
                                </div>
                                <input type="submit" value="Book Time" style="background: teal; color: white">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </body>
</html>
