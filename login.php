<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>

    <style>
      form {
        background-color: cyan;
        padding: 20px;
      }

      button {
        color: red;
        cursor: pointer;
      }

      h1 {
        text-align: center;
      }
    </style>
  </head>
  <body>
    <h1>Form Login</h1>
    <form action="">
      <table>
        <thead>
          <tr>
            <td>Email</td>
            <td>:</td>
            <td><input type="email" /></td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Password</td>
            <td>:</td>
            <td><input type="password" /></td>
          </tr>
          <tr>
            <td colspan="3" style="text-align: right">
              <button type="submit">Login</button>
            </td>
          </tr>
        </tbody>
      </table>
    </form>
  </body>
</html>
