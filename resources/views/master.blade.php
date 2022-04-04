<!DOCTYPE html>
<html>
<head>
    <title>Главная</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
</head>
<body>
<header>
    <nav class="header-main-nav">
        <div class="header-main">
            <div class="left-header">
                <div class="title">
                    <a href="{{route('index')}}">Кинокам</a>
                </div>
                @guest()
                <a class="registr-title" href="{{route('register')}}"><img src="/pict/reg-show.png"></a>
                @endguest()
            </div>
            <div class="right-header">
                <ul class="header-menu-bar">
                    <li><a class="menu-bar-cont" href="{{route('categories')}}">Жанры кино</a> </li>
                    <li><a class="menu-bar-cont" href="">О нас</a></li>
                    <li><a class="menu-bar-cont" href="">Правообладателям</a></li>
                    @guest()
                        <li><a class="menu-bar-cont" href="{{route('login')}}">Авторизация</a></li>
                    @endguest()
                    @auth()
                        <li><a class="menu-bar-cont" href="{{route('get-logout')}}">Выйти</a></li>

                    @endauth
                </ul>
                <div class="header-search-bar">
                    <img src="/pict/search.png">
                </div>
                @auth()
                <ul class="header-menu-bar">
                    <li><a class="menu-bar-cont" href="{{route('home')}}">Панель администратора</a> </li>
                </ul>
                @endauth

            </div>
        </div>
    </nav>
</header>
<div class="maincont-middle">
    <div class="cont-middle">
            @yield('content')
    </div>
</div>
<footer>
    <div class="footer-container">
        <hr class="remove-margin">
        <section class="section">
            <div class="first-footer-flex">
                <div class="left-first-footer-flex">
                    <div class="lfff-links">
                        <div>
                            <ul class="first-links">
                                <li class> <a href="" class="text-nowrap">Техническая поддержка</a></li>
                                <li class> <a href="" class="text-nowrap">Восстановление пароля</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="lfff-links2">
                        <div>
                            <ul class="m-links">
                                <li class> <a href="" class="text-nowrap">Условия продажи подписки</a></li>
                                <li class> <a href="" class="text-nowrap">Партнёрам</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="right-first-footer-flex">
                    <img src="/pict/sosity.png">
                </div>
            </div>
        </section>
        <hr class="remove-margin">
        <section class="section">
            <div class="two-footer-flex">
                <div class="middle-footer-flex">
                    <form class="enter-mail">
                        <div class="text-inp">
                            <input autocomplete="off" id="subscrib" class="sub-input" type="email">
                            <label for="subscrib" class="text-input">Подпишитесь на рассылку</label>
                        </div>
                        <div class="but-inp" style="animation-delay: 150ms;">
                            <button type="button" class="sub-butt">Подписаться</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <section class="three-footer-flex">
            <div class="copyright">
                        <span>
                            © 2020-2021 Kinocome.ru. Все права защищены.
                        </span>
            </div>
        </section>
    </div>

</footer>

</body>
</html>
