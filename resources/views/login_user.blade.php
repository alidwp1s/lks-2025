<!DOCTYPE html>
<html>
<head>
  <title>Login User</title>
  <link href="css/bootstrap.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container mt-5">
    <h3>Login Developer / Player</h3>
    <div class="card p-4">
      <div class="mb-3">
        <label>Username</label>
        <input type="text" id="username" class="form-control">
      </div>
      <div class="mb-3">
        <label>Password</label>
        <input type="password" id="password" class="form-control">
      </div>
      <button onclick="loginUser()" class="btn btn-success">Login</button>
      <div id="message" class="mt-3 text-danger"></div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script>
    function loginUser() {
      axios.post('/api/login/user', {
        username: document.getElementById('username').value,
        password: document.getElementById('password').value
      }).then(res => {
        alert('Login berhasil!');
        localStorage.setItem('token', res.data.token);

        const role = res.data.user.role;
        if (role === 'developer') {
          window.location.href = '/developer/dashboard';
        } else {
          window.location.href = '/player/dashboard';
        }
      }).catch(err => {
        document.getElementById('message').innerText = 'Login gagal';
      });
    }
  </script>
</body>
</html>
