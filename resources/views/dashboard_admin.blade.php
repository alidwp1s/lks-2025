<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard - Administrator Portal</title>
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
  </head>
  <body>
   
   <nav class="navbar navbar-expand-lg sticky-top bg-primary navbar-dark">
      <div class="container">
        <a class="navbar-brand" href="index.html">Administrator Portal</a>
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          
         <li><a href="#" class="nav-link px-2 text-white">List Admins</a></li>
         <li><a href="#" class="nav-link px-2 text-white">List Users</a></li>
         <li class="nav-item">
           <a class="nav-link active bg-dark" href="#">Welcome, Administrator</a>
         </li> 
         <li class="nav-item">
          <button onclick="logout()" class="btn bg-white text-primary ms-4">Sign Out</button>
         </li>
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
          <h5 class="alert alert-info">
            Welcome, Administrator. Don't forget to sign out when you are finished using this page
          </h5>
         </div>
      </div>
      
    </main>
   

    <script src="js/bootstrap.js"></script>
    <script src="js/popper.js"></script>
    <script>
      function logout() {
        localStorage.removeItem('token');
        alert('Logged out!');
        window.location.href = '/admin';
      }
    </script>
  </body>
</html>