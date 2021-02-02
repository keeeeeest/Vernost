<head>
    <link rel="stylesheet" href="/static/css/animals.css">
</head>

<!--
<main class="container">
            <section>
                <h2 class="content-center">Животные ищут хозяина</h2>

                <div class="flex-container flex-xs-column">
                    <div class="flex-block">
                        <div>
                            <img src="/static/img/rada.jpg">
                        </div>
                        <div>
                            <h4>Основная информация:</h4>
                                <ul>
                                    <li>
                                        <span>Кличка:</span> Рада
                                    </li>
                                    <li>
                                        <span>Порода:</span> Метис
                                    </li>
                                    <li>
                                        <span>Пол:</span> Женский
                                    </li>
                                    <li>
                                        <span>Возраст:</span> 4 года
                                    </li>
                                    <li>
                                        <span>Масть:</span> Серый
                                    </li>
                                    <li>
                                        <span>Доп. инфо:</span> Рада, метис, 4 года. Очень хорошая девочка. Будет прекрасным компаньоном вашей семье. +7 (921) 910-47-89 Татьяна
                                    </li>
                                </ul>
                        </div>
                    </div>

                    <div class="flex-block">
                        <div>
                            <img src="/static/img/falik.jpg">
                        </div>
                        <div>
                            <h4>Основная информация:</h4>
                                <ul>
                                    <li>
                                        <span>Кличка:</span> Фалик
                                    </li>
                                    <li>
                                        <span>Порода:</span> Кавказская овчарка
                                    </li>
                                    <li>
                                        <span>Пол:</span> Мужской
                                    </li>
                                    <li>
                                        <span>Возраст:</span> 3 года
                                    </li>
                                    <li>
                                        <span>Масть:</span> Серый
                                    </li>
                                    <li>
                                        <span>Доп. инфо:</span> Фалик, КО, 3 года тел. + 7 (921) 910-47-89 Татьяна
                                    </li>
                                </ul>
                        </div>
                    </div>

                    <div class="flex-block">
                        <div>
                            <img src="/static/img/milka.jpg">
                        </div>
                        <div>
                            <h4>Основная информация:</h4>
                                <ul>
                                    <li>
                                        <span>Кличка:</span> Милка
                                    </li>
                                    <li>
                                        <span>Порода:</span> Метис
                                    </li>
                                    <li>
                                        <span>Пол:</span> Женский
                                    </li>
                                    <li>
                                        <span>Возраст:</span> 4 года
                                    </li>
                                    <li>
                                        <span>Масть:</span> Серый
                                    </li>
                                    <li>
                                        <span>Доп. инфо:</span> Милка, метис, 4 года тел. + 7 (921) 910-47-89 Татьяна
                                    </li>
                                </ul>
                        </div>
                    </div>

                    <div class="flex-block">
                        <div>
                            <img src="/static/img/lada.jpg">
                        </div>
                        <div>
                            <h4>Основная информация:</h4>
                            <ul>
                                <li>
                                    <span>Кличка:</span> Лада
                                </li>
                                <li>
                                    <span>Порода:</span> Кане-корсо
                                </li>
                                <li>
                                    <span>Пол:</span> Женский
                                </li>
                                <li>
                                    <span>Возраст:</span> 2 года
                                </li>
                                <li>
                                    <span>Масть:</span> Чёрный
                                </li>
                                <li>
                                    <span>Доп. инфо:</span> Лада, Кане-корсо, 2 года тел. + 7 (921) 910-47-89 Татьяна
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="flex-block">
                        <div>
                            <img src="/static/img/salt.jpg">
                        </div>
                        <div>
                            <h4>Основная информация:</h4>
                                <ul>
                                    <li>
                                        <span>Кличка:</span> Солёный
                                    </li>
                                    <li>
                                        <span>Порода:</span> Метис
                                    </li>
                                    <li>
                                        <span>Пол:</span> Мужской
                                    </li>
                                    <li>
                                        <span>Возраст:</span> 2 года
                                    </li>
                                    <li>
                                        <span>Масть:</span> Серый
                                    </li>
                                    <li>
                                        <span>Доп. инфо:</span> Соленый, метис НО, 2 года, тел. + 7 (921) 910-47-89 Татьяна
                                    </li>
                                </ul>
                        </div>
                    </div>

                    <div class="flex-block">
                        <div>
                            <img src="/static/img/jerry.jpg">
                        </div>
                        <div>
                            <h4>Основная информация:</h4>
                                <ul>
                                    <li>
                                        <span>Кличка:</span> Джерри
                                    </li>
                                    <li>
                                        <span>Порода:</span> Метис
                                    </li>
                                    <li>
                                        <span>Пол:</span> Мужской
                                    </li>
                                    <li>
                                        <span>Возраст:</span> 3 года
                                    </li>
                                    <li>
                                        <span>Масть:</span> Чепрачный
                                    </li>
                                    <li>
                                        <span>Доп. инфо:</span> Джерри, метис НО, 3 года, тел. + 7 (921) 910-47-89 Татьяна
                                    </li>
                                    </li>
                                </ul>
                        </div>
                    </div>
                </div>
            </section>
</main>
-->

<main class="container">
            <section>
                <h2 class="content-center">Животные ищут хозяина</h2>
                <div class="flex-container flex-xs-column">
                <?php foreach ($animals as $animal):?>
                    <div class="flex-block">
                        <div>
                            <img src="<? echo $animal['img'] ?>">
                        </div>
                        <div>
                            <h4>Основная информация:</h4>
                                <ul>
                                    <li>
                                        <span>Кличка:</span> <? echo $animal['animal_name'] ?>
                                    </li>
                                    <li>
                                        <span>Порода:</span> <? echo $animal['breed'] ?>
                                    </li>
                                    <li>
                                        <span>Пол:</span> <? echo $animal['gender'] ?>
                                    </li>
                                    <li>
                                        <span>Возраст:</span> <? echo $animal['age'] ?>
                                    </li>
                                    <li>
                                        <span>Масть:</span> <? echo $animal['color'] ?>
                                    </li>
                                    <li>
                                        <span>Доп. инфо:</span> <? echo $animal['description'] ?>
                                    </li>
                                </ul>
                        </div>
                    </div>
                <?php endforeach;?>
                </div>
            </section>
</main>

