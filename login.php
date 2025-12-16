<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-gradient" style="background: linear-gradient(135deg, #74ebd5 0%, #9face6 100%); height:100vh;">

<div class="container d-flex justify-content-center align-items-center" style="height:100vh;">
  <div class="card shadow-lg p-4 rounded-4" style="width: 380px;">

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST["username"]);
    echo "<h2 class='text-center text-success'>Chào mừng bạn, $username!</h2>";
} else {
?>
    <h3 class="text-center mb-4 text-primary">Đăng nhập</h3>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      <div class="mb-3">
        <label class="form-label">Username</label>
        <input type="text" name="username" class="form-control" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" name="password" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-primary w-100 rounded-pill">Login</button>
    </form>
<?php
}
?>
  </div>
</div>

</body>
</html>
