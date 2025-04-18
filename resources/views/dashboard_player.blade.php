<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard - Gaming Portal</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>
  <body>
   
   <nav class="navbar navbar-expand-lg sticky-top bg-primary navbar-dark">
      <div class="container">
        <a class="navbar-brand" href="#">Gaming Portal</a>
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

         <li><a href="/user/dashboard/discover" class="nav-link px-2 text-white">Discover Games</a></li>
         <li><a href="/user/dashboard/manage" class="nav-link px-2 text-white">Manage Games</a></li>
         <li><a href="#" class="nav-link px-2 text-white">User Profile</a></li>
         
         @php
           $player = Auth::guard('web')->user();
         @endphp

         @if($player)
         <li class="nav-item">
           <a class="nav-link active bg-dark" href="#">Welcome, {{ $player->username }}</a>
         </li>
         <li class="nav-item">
           <form method="POST" action="{{ route('logout') }}">
               @csrf
               <button type="submit" class="btn bg-white text-primary ms-4">Sign Out</button>
           </form>
         </li>
         @else
         <li class="nav-item">
           <a class="nav-link text-warning" href="#">Not Logged In</a>
         </li>
         @endif
       </ul> 
      </div>
    </nav>

    <main>

      <div class="hero py-5 bg-light">
         <div class="container text-center">
          <h1 class="mb-0 mt-0">Dashboard</h1>
         </div>
      </div>

      <div class="list-form py-5">
         <div class="container">
          <h5 class="alert alert-info text-center">
            Welcome. Don't forget to sign out when you are finished using this page
          </h5>
         </div>
      </div>
      
    </main>
   
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script>
      function logout() {
        localStorage.removeItem('token');
        alert('Logged out!');
        window.location.href = '/player';
      }
    </script>
  </body>
</html>
