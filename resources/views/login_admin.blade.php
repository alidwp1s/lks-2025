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
    <div class="card p-4">
      <div class="mb-3">
        <label>Username</label>
        <input type="text" id="username" class="form-control">
      </div>
      <div class="mb-3">
        <label>Password</label>
        <input type="password" id="password" class="form-control">
      </div>
      <button onclick="loginAdmin()" class="btn btn-primary">Login</button>
      <div id="message" class="mt-3 text-danger"></div>
    </div>
  </div>

    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
  <script>
    function loginAdmin() {
      axios.post('/api/login/admin', {
        username: document.getElementById('username').value,
        password: document.getElementById('password').value
      }).then(res => {
        alert('Login berhasil!');
        localStorage.setItem('token', res.data.token);
        window.location.href = '/admin/dashboard';
      }).catch(err => {
        document.getElementById('message').innerText = 'Login gagal';
      });
    }
  </script>
</body>
</html>
