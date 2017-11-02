<header>
    <?php if(isset($_COOKIE['login'])) { ?>
        <div id="header">
            <div>
                <a href="info?id=<?=$_COOKIE['id']?>"><?=$_COOKIE['login']?></a>
                <a href="/user/logout"><small>[Выйти]</small></a><br>
                <small><?=date('H:i')?> YKT</small>
            </div>
            <div align="center">
                <nav>
                    <a class="btn btn-success" href="/desk/newadv">Добавить объявление</a>
                    <a class="btn btn-default" href="/">Главная</a>
                    <a class="btn btn-default" href="/cabinet/">Кабинет</a>
                    <a class="btn btn-default" href="/forum/">Форум</a>
                </nav>
            </div>
            <br>
        </div>
        <?php }else { ?>
        <div id="header">
            <div align="center">
                <nav>
                    <a class="btn btn-success" href="/desk/newadv">Добавить объявление</a>
                    <a class="btn btn-default" href="/">Главная</a>
                    <a class="btn btn-default" href="/user/login/">Вход</a>
                    <a class="btn btn-default" href="/user/register/">Регистрация</a>
                    <a class="btn btn-default" href="/forum/">Форум</a>
                </nav>
            </div>
            <br>
        </div>
        <?php } ?>
</header>