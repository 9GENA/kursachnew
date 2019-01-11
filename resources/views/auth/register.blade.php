
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">

    <title>Регистрация</title>

    <!-- Bootstrap core CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">

    <form class="form-signin" method="post">
        {!! csrf_field() !!}
          <img class="mb-4" src="/docs/4.2/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
          <h1 class="h3 mb-3 font-weight-normal">Пожалуйста зарегистрируйтесь</h1>
          <label for="inputEmail" class="sr-only">Email адрес</label>
          <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email адрес" required autofocus>
          <label for="inputPassword" class="sr-only">Пароль</label>
          <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Пароль" required>
          <label for="inputPassword" class="sr-only">Повторите пароль</label>
          <input type="password" id="inputPassword" name="password_confirmation" class="form-control" placeholder="Повторите пароль" required>
          <div class="checkbox mb-3">
    <label>
      <input type="checkbox" name="remember" value="1" > Запомнить
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Зарегистрироваться</button>
  <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
</form>
</body>
</html>
