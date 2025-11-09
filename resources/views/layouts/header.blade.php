<head>
  <meta charset="UTF-8">
  <title>EduFun</title>
  @include('layouts.boostrap')
</head>

<body>
    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">

    <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
        <img src="{{ asset('img/LogoEduFun.png') }}" 
             alt="EduFun Logo"
             style="height:40px;" 
             class="me-2">
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarContent">

      <ul class="navbar-nav ms-auto">
          <li><a class="nav-link" href="{{ route('home') }}">Home</a></li>
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
              Category
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route('data.science') }}">Data Science</a></li>
              <li><a class="dropdown-item" href="{{ route('network.security') }}">Network Security</a></li>
            </ul>
          </li>

          <li><a class="nav-link" href="{{ route('writers') }}">Writers</a></li>
          <li><a class="nav-link" href="{{ route('about') }}">About Us</a></li>
      </ul>

    </div>
  </div>
</nav>
