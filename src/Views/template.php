<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="сайт благотворительного фонда помощи 
        бездомным животным Верность Санкт-Петербург www.vernost.org, журнал Собычий остров">
        <meta name="keywords" content="фонд животных, благотворительный фонд животных, 
        пристройство кошек (котят), собак (щенков), бездомные, бродячие, брошенные животные, 
        помочь собаке, помоги кошке, бездомные животные, помощь бездомным животным, потеряшка, 
        потерянные животные, потерянные собаки, потерянные кошки, в хорошие руки собаки,
        в хорошие руки кошки, отдам собаку в хорошие руки, отдам в хорошие руки, отдам котят хорошие руки, 
        отдам хорошие руки щенка, отдам кошку хорошие руки, хорошие руки отдам петербург, 
        щенки в хорошие руки, собаки в хорошие руки, отдам котенка в хорошие руки, 
        возьму собаку в хорошие руки, возьму щенка, отдам щенка, журнал Собачий остров">
        <meta name="title" content="Верность: Благотворительный фонд помощи бездомным животным">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
        <!-- Верность: Благотворительный фонд помощи бездомным животным  -->
        <title><? echo $title; ?></title> 
        <!-- общие js библиотеки -->
        <!-- <script src="/static/js/libs/common-lib.js"></script> -->

        <!-- общие css-файлы -->
        <link rel="stylesheet" href="/static/css/main.css">

        <link rel="shortcut icon" href="/static/img/icons.png">
        <!-- <link rel="stylesheet" href="css/main.css"> -->
        
    </head>

    <body>
        <header>
            <div class="shapkaMain">

                <div class="shapka content-center">

                    <div class="flex-row content-center space-around shapka2">
                        <a href="/" class="logo flex-4"><img class="logo" src="/static/img/logo.png"></a>
                        <a class="button1" href="#find_animal">Найти питомца</a>
                        <a class="telefon flex-4" href="tel:+78126459010">Наш телефон: + 7 812 645-90-10</a>
                        <div class="hamburger-menu">
                            <input id="menu__toggle" type="checkbox" />
                            <label class="menu__btn" for="menu__toggle">
                              <span></span>
                            </label>
                            <ul class="menu__box">
                              <li><a class="menu__item" href="/">Главная</a></li>
                              <li><a class="menu__item" href="/animals">Животные</a></li>
                              <li><a class="menu__item" href="/help">Помочь Нам</a></li>
                              <li><a class="menu__item" href="/visit">Приехать в гости</a></li>
                              <li><a class="menu__item" href="/journal">Журнал "Собачий остров"</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <nav class="container">
                <ul class="flex-row space-around menu">
                    <li class="content-center">
                        <a href="/">Главная</a>
                    </li>
                    <li class="content-center drop-down">
                        <a href="/animals">Животные</a>
                        <!-- <ul class="submenu">
                            <li>
                                <a href="#">В приюте</a>
                            </li>
                            <li>
                                <a href="#">Потерянные</a>
                            </li>
                            <li>
                                <a href="#">Найденные</a>
                            </li>
                            <li>
                                <a href="#">Нашли хозяина</a>
                            </li>
                        </ul> -->
                    </li>
                    <li class="content-center">
                        <a href="/help">Помочь Нам</a>
                    </li>
                    <li class="content-center">
                        <a href="/visit">Приехать в гости</a>
                    </li>
                    <!-- <li class="content-center drop-down">
                        <a href="#">О Фонде</a>
                        <ul class="submenu">
                            <li>
                                <a href="#">О нашей деятельность</a>
                            </li>
                            <li>
                                <a href="#">Наши партнёры</a>
                            </li>
                            <li>
                                <a href="#">Финансовая отчётность</a>
                            </li>
                            <li>
                                <a href="#">Национальная ассоциация "Мы вместе"</a>
                            </li>
                        </ul>
                    </li> -->
                    <li class="content-center drop-down">
                        <a href="/journal">Журнал "Собачий Остров"</a>
                            <!-- <ul class="submenu">
                                <li>
                                    <a href="#">О журнале</a>
                                </li>
                                <li>
                                    <a href="#">Наши рубрики</a>
                                </li>
                                <li>
                                    <a href="#">Как купить журнал</a>
                                </li>
                                <li>
                                    <a href="#">Свежий номер</a>
                                </li>
                                <li>
                                    <a href="#">Архив номеров</a>
                                </li>
                                <li>
                                    <a href="#">Рекламодателям</a>
                                </li>
                            </ul> -->
                    </li>
                </ul>             
            </nav>


        </header>

        <? include_once $content; ?>

        <section class="modal" id="find_animal">
                <form enctype="multipart/form-data" name="find_animal" action="find_animal.php" method="get">
                    <p>Форма поиска питомца</p>
        
                    <div class="block">
                        <label for="breed">Порода</label>
                        <select required id="breed" name="breed">
                            <option value="Метис">Метис</option>
                            <option value="Кавказская овчарка">Кавказская овчарка</option>
                            <option value="Кане-корсо">Кане-корсо</option>
                        </select>
                        <span></span>
                    </div>
            
                    <div class="block">
                        <label for="color">Масть животного</label>
                        <select required id="color" name="color">
                            <option value="Серый">Серый</option>
                            <option value="Чёрный">Чёрный</option>
                            <option value="Чепрачный">Чепрачный</option>
                            <option value="Белый">Белый</option>
                            <option value="Рыжий">Рыжый</option>
                        </select>
                        <span></span>
                    </div>
            
                    <div class="block">
                        <label for="gender">Пол животного</label>
                        <select required id="gender" name="gender">
                            <option value="М">М</option>
                            <option value="Ж">Ж</option>
                        </select>
                        <span></span>
                    </div>
            
                    <input type="submit" value="Найти">
                    <a class="close-modal" href="#0">X</a>
                </form>
        </section>

        <footer>
            <div class="container flex-row podval space-between flex-xs-column">
                <section class="fondname">
                    <p>Благотворительный фонд помощи бездомным животным «Верность», Санкт-Петербург</p>
                </section>
        
                <section class="contacts">
                    <p>Эл.Почта: info@vernost.org</p>
                    <p>Телефон: + 7 812 645-90-10</p>
                </section>
        
                <section class="social vk ">
                    <a href="https://vk.com/vernost09"><i class="fa fa-vk fa-2x"></i></a>    
                </section>
            </div>
        </footer>

        <!-- общие js файлы -->
        <!-- <script src="/static/js/common.js"></script> -->
        <script src="/static/js/validator.js"></script>

        <!-- можно подключать через переменную 
        и передать в котроллере в массиве data -->
        <!-- <script src="/static/js/ echo $js; ?>"></script> -->
    </body>
</html>