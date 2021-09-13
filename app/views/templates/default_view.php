<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../app/styles/index.css">
    <script src="../../../js/jquery-1.7.1.min.js"></script>
    <title>fishing</title>
</head>
<body>
<header class="header_wrapper">
    <div class="container">
        <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
                <span class="fs-4">fishing</span>
            </a>
            <nav id="nav" class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
                <div>
                    <a class="nav-link me-3 py-2  text-decoration-none" href="/">Главная</a>
                </div>
                <div class="menu-item" >
                    <a class="nav-link me-3 py-2  text-decoration-none" href="#">Каталог</a>
                    <div  class="submenu">
                        <a class="p-2 link-secondary" href="<?= \core\Route::getUrl('product', 'coils')?>">Катушки</a>
                        <a class="p-2 link-secondary" href="<?= \core\Route::getUrl('product', 'rod')?>">Удилище</a>
                        <a class="p-2 link-secondary" href="<?= \core\Route::getUrl('product', 'boats')?>">Лодки </a>
                    </div>
                </div>
                <div>
                    <a class="nav-link me-3 py-2  text-decoration-none"
                       href="<?= \core\Route::getUrl('index', 'contacts') ?>">Контакты</a>
                </div>
                <div class="text-end">
                    <a href="<?= \core\Route::getUrl('index', 'login') ?>" class="btn btn-color me-2">Войти</a>
                    <a href="<?= \core\Route::getUrl('cart', 'show') ?>" class="btn btn-color me-2">Корзина <i
                                class="fa fa-shopping-basket"></i></a>
                    <div id="cartCntItems">
                        <?php if (isset($this->countCart)): ?>
                            <?php if ($this->countCart > 0): ?>
                                <div>Выбрано: (<?= $this->countCart ?>) товара</div>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </nav>
        </div>
        <div class="pricing-header   text-center">
            <h2 class="display-9 fw-normal"> Рыбалка – это отличный способ провести время с семьей и друзьями.
            </h2>
        </div>
    </div>
</header>
<main>
    <?php
    include_once 'app' . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . $pageView;
    ?>
</main>
<footer class="footer mt-auto py-3 bg-light">
    <div class="container">
        <span class="d-flex justify-content-center text-muted">Oleinik 2021</span>
    </div>
</footer>
<script src="../../../js/main.js"></script>

</body>
</html>