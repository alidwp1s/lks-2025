<!DOCTYPE html>
<html>
<head>
  <title>Login Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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

  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
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
