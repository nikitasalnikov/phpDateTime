<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/style/all.css">
    <link rel="stylesheet" href="/style/style.css">
</head>

<body>
    <div class="wrap">
        <header class="header">
            <a href="/" class="logo">PROWEB</a>
            <div class="singIn">
                <a href="/page/login.php" class="singIn__link">Вход</a>
                <a href="/page/registration.php" class="singIn__link">Регистрация</a>
            </div>
            <div class="user">
                <div class="user__profile">
                    <img src="/img/2.jpg" alt="" class="user__profile-img">
                    <h4 class="user__profile-name">Имя</h4>
                </div>
                <ul class="user__menu">
                    <li><a href="#" class="user__menu-link"><i class="far fa-external-link"></i>Выход</a></li>
                </ul>
            </div>
        </header>
        <aside class="menu">
            <div class="menu__reviews">
                <span class="menu__reviews_span" data-href="https://proweb.uz">
                    <i class="far fa-chevron-right"></i>
                </span>
                <span class="menu__reviews_text">Оставить озыв</span>
            </div>
            <ul class="menu__list">
                <li><a href="/" class="menu__list-link active"><i class="fal fa-home"></i>Главная</a></li>
                <li><a href="/page/contact.php" class="menu__list-link"><i class="fal fa-address-book"></i>Контакты</a></li>
                <li><a href="/page/table.php" class="menu__list-link"><i class="fas fa-times"></i>Таблица умножения</a></li>
                <li><a href="/page/calc.php" class="menu__list-link"><i class="fas fa-calculator-alt"></i>Калькулятор</a></li>
                <li><a href="/page/slide.php" class="menu__list-link"><i class="far fa-presentation"></i>Слайдер</a></li>
                <li><a href="/page/guest.php" class="menu__list-link"><i class="fal fa-books"></i>Гостевая книга</a></li>
                <li><a href="/page/test.php" class="menu__list-link"><i class="fal fa-vial"></i>Тест</a></li>
            </ul>
        </aside>
        <main class="main">
            <?
                $name = 'proweb'; /* $ - способ объявления переменной */
                // echo '<h1>Proweb</h1>'; /* Выводит информации на экран */
            ?>

            <?if($name == 'proweb'):?>
            <h1><?= $name?></h1> <!-- равно = - означает вывод в тег -->
            <?else:?>
            <h2>В переменной $name находится <?= $name?></h2>
            <?endif;?>

            <?
                $array = ['John', 'Alex', 'Marina']; /* Массив */
                $countries = [ /* ассоциотивный массив. Нет понятия объект. ключи обязательно должны быть в кавычках */
                    'uzbekistan' => ['tashkent', 'samarkand', 'buxara'],
                    'russia' => ['moskva', 'st.peterburg'],
                    'usa' => ['california', 'washington']
                ]
            ?>

            <?for($i = 0; $i < count($array); $i++):?>
            <h2><?= $array[$i]?></h2>
            <?endfor;?>

            <?foreach($countries as $country => $info):?>
            <h2><?= $country?></h2>
            <hr>
                <?foreach($info as $key => $value):?>
                    <p><?= $value?></p>
                <?endforeach;?>
            <?endforeach;?>

            <form action="">
                <p>Выберите год рождения</p>
                <select>
                    <?for($i = 1960; $i <= date('Y'); $i++):?>
                    <option><?= $i?></option>
                    <?endfor;?>
                </select>
            </form>

                      
           <h2><?php date_default_timezone_set("Asia/Tashkent");
               echo date(" \T\o\d\a\y\  \i\s\: d.m.Y, H:i:sa");
            ?></h2>
                      
        </main>
    </div>

    <script src="/js/script.js"></script>
</body>

</html>