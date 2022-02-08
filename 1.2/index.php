
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

<body>
  <form>

    <div class="container">
      <h1 class="box__caption">
        Авторизация
      </h1>

      <label for="username" class="box__label">
        <input class="<?php if (isset($errorUser)){echo 'warning';}?> " placeholder="Username" type="text" name="username" id="username" required>
      </label>

      <label for="password" class="box__label">
        <input class="<?php if (isset($errorPsw)){echo 'warning';}?> " placeholder="Password" type="password" name="password" id="password" required>
      </label>

      <input onclick="login()" type="submit" class="box__btn" value="Log in" name="submit">
    </div>

  </form>

<div id="result"></div>
<script>
function login(){
    const login = document.getElementById('username').value;
    const pass = document.getElementById('password').value;

    const params = new URLSearchParams();
    params.set('username', login);
    params.set('password', pass);

    fetch('backend.php', {
       method: 'POST',
       body: params
    }).then(
       response => {
          return response.text();
      }
    ).then(
      text => {
          document.getElementById('result').innerHTML = text;
      }
    );
}
</script>
</body>

</html>
