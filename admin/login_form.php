<form class="form-signin" method="post" action="login.php">
    <div class="text-center">
        <img class="mb-4" src="../img/logo.jpg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Авторизация</h1>
        <label for="inputLogin" class="sr-only">Логин</label>
        <input  type="text" id="inputLogin" class="form-control" placeholder="введите ваш логин" required autofocus name="login">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="ваш пароль" required name="pass">
        <button class="btn btn-lg btn-primary btn-block" type="submit">Войти</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </div>

</form>