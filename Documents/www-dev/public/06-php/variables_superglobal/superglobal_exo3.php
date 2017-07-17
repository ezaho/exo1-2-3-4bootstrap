<?php
if (isset( $_POST["login"])) {
  setcookie('cookie_login', 'blablabla', (time() + 3600));
}
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="" method="post">
    Login: <input type="text" name="Login" ><br>
    Mot de passe:<input type="text" name="pswd" ><br>
      <input type="submit" >
    </form>
    



  </body>
</html>
