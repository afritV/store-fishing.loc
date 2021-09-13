<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="wrapper text-center pt-2">
                <form enctype="multipart/form-data" method="post" action="<?= \core\Route::getUrl('admin', 'store') ?>">
                    <h2 class="mb-5">Создать нового пользователя</h2>
                    <label for="login" class="sr-only">Введите имя пользователя</label>
                    <input style="mb-5" type="text" name="login" id="login" class="form-control"
                           placeholder="Введите имя" required="" autofocus="">
                    <label for="inputEmail" class="sr-only">Введите имя пользователя</label>
                    <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Введите емейл">
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inputPassword" name="password" class="form-control"
                           placeholder="Введите пароль" required="">
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Зарегестрировать</button>
                </form>
            </div>
        </div>
    </div>
</div>
