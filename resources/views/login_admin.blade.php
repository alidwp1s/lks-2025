<!DOCTYPE html>
<html>
<head>
  <title>Login Admin</title>
  <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container mt-5">
    <h3>Login Administrator</h3>
    <form method="POST" action="/admin/dashboard">
      @csrf
      <div class="card p-4">
        <div class="mb-3">
          <label>Username</label>
          <input type="text" name="username" class="form-control" required>
        </div>
        <div class="mb-3">
          <label>Password</label>
          <input type="password" name="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
        @if($errors->any())
        <div class="text-danger mt-2">{{ $errors->first() }}</div>
        @endif
      </div>
    </form>
  </div>

  <script src="{{ asset('js/bootstrap.js') }}"></script>
  <script src="{{ asset('js/popper.js') }}"></script>
</body>
</html>
