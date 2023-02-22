@extends('layout.main')
@section('main_section')
     
<nav class="navbar navbar-light navbar-expand-lg mb-5" style="background-color: #e3f2fd;">
        <div class="container-fluid ">  
        <a class="navbar-brand" href="{{Route('dashboard')}}">Dashboard</a>     
            
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                    @else
                    {{session('success')}}                    
                    @endguest               
        </div>
    </nav>      

@endsection
<!-- -NAVBAR -
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid ">                
              <a class="navbar-brand" href="#">WappnetSystem</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>             
            </div>
            <div class="float-end col-4">  
            <div class="collapse navbar-collapse " id="navbarNavDarkDropdown" >
                <ul class="navbar-nav">
                  <li class="nav-item dropdown">
                    <a class="navbar-brand" href="#">Home</a>
                    <a class="navbar-brand" href="#">Technologies</a>
                    <a class="navbar-brand" href="#">carear</a>
                    <a class="navbar-brand" href="#">About us</a>                    
                  </li>
                </ul>
              </div>
              </div>
          </nav>        
      -->
