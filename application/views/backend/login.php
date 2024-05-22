<form method="post" action="<?php echo site_url('auth/login') ?>">
<!DOCTYPE html>
<html>
<head>
  <title>Tabungan Mahasiswa</title>
  <style>
    <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      margin-top: 100px;
    }

    h2 {
      text-align: center;
      margin-bottom: 30px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }

    .btn {
      display: block;
      width: 100%;
      padding: 10px;
      text-align: center;
      background-color: #1e90ff;
      color: #fff;
      border: none;
      border-radius: 3px;
      cursor: pointer;
      font-size: 16px;
    }

    .btn:hover {
      background-color: #4169e1;
    }

    .error-message {
      color: red;
      margin-top: 10px;
    }
</style>



</head>
<body>
  <div class="container">
    <h2>Tabungan Mahasiswa</h2>
    <form>
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <button type="submit" class="btn">Login</button>
      <div class="error-message"></div>
    </form>
  </div>
</body>
</html>