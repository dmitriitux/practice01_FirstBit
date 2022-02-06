
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Авторизация</title>
  <link rel="stylesheet" href="normalize.css">
  <link rel="stylesheet" href="style.css">
</head>

<?php
  require 'backend.php';
?>

<body>
  <form action="index.php" method="post" name="auth">

    <div class="container">
      <h1 class="box__caption">
        Авторизация
      </h1>

      <label for="username" class="box__label">
        <input class="<?php if (isset($error)){echo 'warning';}?> " placeholder="Username" type="text" name="username" required>
      </label>

      <label for="password" class="box__label">
        <input class="<?php if (isset($error)){echo 'warning';}?> " placeholder="Password" type="password" name="password" required>
      </label>

      <input type="submit" class="box__btn" value="Log in" name="submit">
    </div>

  </form>

</body>

</html>
