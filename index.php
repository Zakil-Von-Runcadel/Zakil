<!DOCTYPE html>
<html>
<head>
  <title>Halaman Login | Zakil</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      background-color: #f8f8f8;
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    form {
      background-color: white;
      padding: 40px;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      width: 300px;
    }

    table {
      width: 100%;
    }

    h1 {
      text-align: center;
      font-size: 24px;
      margin-bottom: 10px;
    }

    hr {
      margin-bottom: 20px;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      margin: 8px 0;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 14px;
    }

    input[type="submit"] {
      width: 100%;
      padding: 10px;
      background-color: #007bff;
      border: none;
      color: white;
      border-radius: 6px;
      font-size: 16px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <form action="cheklogin.php" method="post">
    <h1>Login</h1>
    <hr>
    <table>
      <tr>
        <td>Username</td>
      </tr>
      <tr>
        <td colspan="2"><input name="username" type="text" id="username" size="10"></td>
      </tr>
      <tr>
        <td>Password</td>
      </tr>
      <tr>
        <td colspan="2"><input name="password" type="password" id="password" size="10"></td>
      </tr>
      <tr>
        <td colspan="3" align="center">
          <input type="submit" name="submit" id="submit" value="Login">
        </td>
      </tr>
    </table>
  </form>
</body>
</html>
