<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Web-разработка сайтов любой сложности за разумные сроки - оставьте заявку прямо сейчас и получите консультацию в подарок!">
    <title>Phoenix - разработка сайтов любой сложности за разумные сроки</title>
    <link rel="icon" href="img/icons/phoenix-icon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/media.css">     
    <link rel="stylesheet" href="css/flag-icon.min.css"> 
</head>
<body>
    <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(72721972, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/72721972" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
    <header class="header" id="header">
        <div class="header__top">
            <div class="container">
                <nav>
                    <a href="/#header" class="nav__logo"><img src="img/phoenix-logo.svg" alt="Daddy`s Web - web sites creation"></a>
                    <ul class="menu">
                        <li class="menu_item"><a href="#advantages" class="menu_link">Преимущества</a></li>
                        <li class="menu_item"><a href="#stages" class="menu_link">Этапы</a></li>
                        <li class="menu_item"><a href="#services" class="menu_link">Услуги</a></li>
                        <li class="menu_item"><a href="#carousel" class="menu_link">Отзывы</a></li>
                        <li class="menu_item"><a href="#portfolio" class="menu_link">Портфолио</a></li>
                        <!-- <li class="menu_item"><a href="#header" class="menu_link">Наверх</a></li> -->
                    </ul>
                    <a href="tel:+79372115115" class="header-phone">+7 937 211-51-15</a>
                    <!-- <div class="header-icons">
                        <a href="<?php

                                    $url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

                                ?>en"><span class="flag-icon flag-icon-gb" alt="английская версия"></span></a>
                    </div> -->
                           
                    <div class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </nav>
            </div>
        </div>   
        <div class="hero_section">
                <div class="container">
                    <div class="offer">
                        <h1 class="offer__label">Продающий сайт для вашего бизнеса</h1>
                        <h2 class="offer__title">Web-разработка, создание и продвижение сайтов: команда</h2>
                        <button onclick="window.location.href = '#consultation';" class="offer__btn">Оставить заявку</button>
                    
                        <div class="trigger">
                            <div class="trigger__item">
                                <div class="trigger__round">
                                    <div class="trigger__img"><img src="img/icons/Icon1.png" alt="list"></div>
                                </div>
                                <div class="trigger__text"><span>Более</span> 20 выполненных проектов</div>
                            </div>
                            <div class="trigger__item">
                                <div class="trigger__round">
                                    <div class="trigger__img"><img src="img/icons/Icon2.png" alt="hand"></div>
                                </div>
                                <div class="trigger__text"><span>Более</span> 90% довольных заказчиков</div>
                            </div>
                            <div class="trigger__item">
                                <div class="trigger__round">
                                    <div class="trigger__img"><img src="img/icons/Icon3.png" alt="pc"></div>
                                </div>
                                <div class="trigger__text"><span>Высшее</span> техническое образование</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <img class="offer__img" height="500px" src="img/hero-bg.png" alt="human"> -->
                <!-- <img class="offer__phrase" width='170px' src="img/Phrase.png" alt="phrase"> -->

                <!-- <div class="social">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-vk"></i></a>
                </div> -->
            </div>
    </header>

    <main>
        <section class="advantages" id="advantages">
            <div class="container">
                <h2 class="advantages-header">Наши преимущества</h2>
                <div class="advantages__wrapper">
                    <div class="advantages__item">
                        <img src="./img/icons/advantages-price.svg" alt="price" class="advantages__icon">
                        <div class="advantages__subtitle">
                            Цена
                        </div>
                        <div class="advantages__descr">
                            Мы готовы выстроить плодотворное взаимодействие с клиентом под <span>любой</span> бюджет
                        </div>
                    </div>
                    <div class="advantages__item">
                        <img src="./img/icons/advantages-quality.svg" alt="quality" class="advantages__icon">
                        <div class="advantages__subtitle">
                            Качество
                        </div>
                        <div class="advantages__descr">
                            Это наш основополагающий ориентир. Мы очень тщательно относимся к качеству наших работ 
                        </div>
                    </div>
                    <div class="advantages__item">
                        <img src="./img/icons/advantages-service.svg" alt="support" class="advantages__icon">
                        <div class="advantages__subtitle">
                            Сервис
                        </div>
                        <div class="advantages__descr">
                            Мы предоставляем безвозмездную поддержку нашим клиентам в течение одного месяца
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="stages" id="stages">
            <div class="container">
                <h2 class="stages-header">Этапы работы</h2>
                <div class="stages__wrapper">
                    <div class="stages__item">
                        <div class="stages__number">1</div>
                        <div class="stages__subtitle">
                            Согласование
                        </div>
                        <div class="stages__descr">
                            Согласовываем Ваш проект, уточняем детали и Ваши пожелания по разработке сайта
                        </div>
                    </div>
                    <div class="stages__item">
                        <div class="stages__number">2</div>
                        <div class="stages__subtitle">
                            Дизайн, вёрстка
                        </div>
                        <div class="stages__descr">
                            Делаем дизайн и вёрстку проекта, показываем, вносим правки в случае необходимости
                        </div>
                    </div>
                    <div class="stages__item">
                        <div class="stages__number">3</div>
                        <div class="stages__subtitle">
                            Финал
                        </div>
                        <div class="stages__descr">
                            Переносим сайт на хостинг, настраиваем работу форм обратной связи, сдаём проект
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="consultation" id="consultation">
            <div class="container">
                <h2 class="title title_left">
                    Оставить заявку
                </h2>
                
                <form id="consultation-form" class="feed-form" action="#" method="get" onsubmit="ym(72721972,'reachGoal','form_filled_out'); return true;">
                    <input name="name" required placeholder="Имя" type="text">
                    <input name="phone" required placeholder="Телефон">
                    <input name="email" required placeholder="E-mail" type="email">
        
                    <button class="button button_submit">оставить заявку</button>
                    <span class="warning">* Оставляя заявку, Вы даёте своё согласие с <a href="<?php

                                echo $url;

                            ?>privacy.php" style="text-decoration: none; font-size: 16px; font-weight: 400; color: rgba(238, 190, 21, 0.8);">политикой обработки данных</a>; <br>все поля формы заполняйте корректно</span>
                </form>
            </div>
        </section>

        <section class="services" id="services">
            <div class="container">
                <h2 class="services-header">Наши услуги</h2>
                <div class="services-descr">
                    <ul>
                        <li>Подбор доменного имени и хостинга</li>
                        <li>Разработка и создание сайтов:
                            <ul>
                                <li>составление брифа и технического задания на создание/разработку сайта</li>
                                <li>разработка прототипа</li>
                                <li>веб-дизайн сайтов</li>
                                <li>нативная кросс-браузерная адаптивная HTML/CSS вёрстка</li>
                                <li>в конструкторах (FlexBe, Tilda, platformaLP и др.)</li>
                                <li>в WebFlow</li>
                                <li>в CMS WordPress</li>
                            </ul>
                    
                        </li>
                    
                        <li>Перенос сайтов с WebFlow на CMS WordPress</li>
                        <li>"Натяжка" вёрстки на "админку" (WordPress)</li>
                        <li>Работа с целями Яндекс.Метрики</li>
                        <li>Работа с Яндекс.Метрикой, подключение аналитики</li>
                        <li>SEO</li>
                        <li>SMM</li>
                        <li>Комплексный Интернет-маркетинг</li>
                        <li>Реклама:
                            <ul>
                                <li>Контекстная реклама</li>
                                <li>Реклама в социальных сетях</li>
                                <li>Реклама на Авито</li>
                            </ul>
                        </li>
                    </ul>
                </div>
                
            </div>
        </section>

        <section class="carousel" id="carousel">
            <div class="container">
                <h2 class="title">Отзывы</h2>
                <div class="carousel__inner">
                    <div>
                        <img src="img/carousel/compressed/1.jpg" alt="slide">
                    </div>
                    <div>
                        <img src="img/carousel/compressed/2.jpg" alt="slide">
                    </div>
                    <div>
                        <img src="img/carousel/compressed/3.jpg" alt="slide">
                    </div>
                    <div>
                        <img src="img/carousel/compressed/4.jpg" alt="slide">
                    </div>
                    <div>
                        <img src="img/carousel/compressed/5.jpg" alt="slide">
                    </div>
                    <div>
                        <img src="img/carousel/compressed/6.jpg" alt="slide">
                    </div>
                </div>
            </div>
        </section>

        <section class="portfolio" id="portfolio">
            <div class="container">
                <h2 class="portfolio-header">Портфолио</h2>
                <!-- portfolio-cards-wrapper -->
                <div class="portfolio-cards-wrapper">
                    <!-- Card -->
                    <div class="card">
                        <a href="https://гучетль.рф" class="card-link" target="_blank">                    
                            <img class="card-img" src="./img/portfolio/compressed/11.jpg" alt="Сайт художника-коллекционера">
                            <h3 class="card-title">Сайт художника-коллекционера</h3>
                            <p>Разработка и создание сайта, Vigbo</p>
                        </a>
                    </div>
                    <!-- Card -->
                    <div class="card">
                        <a href="https://vegas-avto.ru" class="card-link" target="_blank">                    
                            <img class="card-img" src="./img/portfolio/compressed/12.jpg" alt="Лендинг транспортной компании">
                            <h3 class="card-title">Лендинг транспортной компании «Вегас-Авто»</h3>
                            <p>HTML/CSS, размещение на хостинге заказчика</p>
                        </a>
                    </div>
                    <!-- Card -->
                    <div class="card">
                        <a href="https://vk.com/albums-151416898?z=photo-151416898_457239115%2Fphotos-151416898" class="card-link" target="_blank">                    
                            <img class="card-img" src="./img/portfolio/compressed/1.jpg" alt="Лендинг про аквариумы">
                            <h3 class="card-title">Лендинг про аквариумы</h3>
                            <p>Веб-дизайн лендинга, Adobe Photoshop</p>
                        </a>
                    </div>
                    <!-- // Card -->
                    <!-- Card -->
                    <div class="card">
                        <a href="https://coffee-5101df.webflow.io/" class="card-link" target="_blank">
                            <img class="card-img" src="./img/portfolio/compressed/2.jpg" alt="Фабрика кофе">
                            <h3 class="card-title">Адаптивный лендинг про кофе</h3>
                            <p>Верстка адаптивного лендинга, WebFlow</p>
                        </a>
                    </div>
                    <!-- // Card -->
                    <!-- Card -->
                    <div class="card">
                        <a href="https://paintingshop.webflow.io/" class="card-link" target="_blank">
                            <img class="card-img" src="./img/portfolio/compressed/3.jpg" alt="Сайт-каталог картин">
                            <h3 class="card-title">Сайт-каталог картин</h3>
                            <p>Верстка многостраничного сайта-каталога, WebFlow</p>
                        </a>
                    </div>
                    <!-- // Card -->
                    <!-- Card -->
                    <div class="card">
                        <a href="https://cafe-rose-eb6ef0.webflow.io/" class="card-link" target="_blank">
                            <img class="card-img" src="./img/portfolio/compressed/4.jpg" alt="Кафе Роза">
                            <h3 class="card-title">Адаптивный лендинг кафе</h3>
                            <p>Верстка адаптивного лендинга, WebFlow</p>
                        </a>
                    </div>
                    <!-- // Card -->
                     <!-- Card -->
                     <div class="card">
                        <a href="https://vasily1299.github.io/rolli" class="card-link" target="_blank">                    
                            <img class="card-img" src="./img/portfolio/compressed/5.jpg" alt="Интернет-магазин роллов">
                            <h3 class="card-title">Интернет-магазин роллов</h3>
                            <p>Вёрстка HTML/CSS/JavaScript, работа с корзиной</p>
                        </a>
                    </div>
                    <!-- // Card -->
                     <!-- Card -->
                     <div class="card">
                        <a href="https://vasily1299.github.io/estate" class="card-link" target="_blank">                    
                            <img class="card-img" src="./img/portfolio/compressed/6.jpg" alt="Сайт агентства недвижимости">
                            <h3 class="card-title">Сайт агентства недвижимости</h3>
                            <p>Вёрстка HTML/CSS/JavaScript, работа с фильтрами</p>
                        </a>
                    </div>
                    <!-- // Card -->
                     <!-- Card -->
                     <div class="card">
                        <a href="https://vasily1299.github.io/juice" class="card-link" target="_blank">                    
                            <img class="card-img" src="./img/portfolio/compressed/7.jpg" alt="Лендинг про соки">
                            <h3 class="card-title">Лендинг про соки</h3>
                            <p>Вёрстка лендинга, HTML/CSS</p>
                        </a>
                    </div>
                    <!-- // Card -->
                     <!-- Card -->
                     <div class="card">
                        <a href="https://vasily1299.github.io/wordpress" class="card-link" target="_blank">                    
                            <img class="card-img" src="./img/portfolio/compressed/8.jpg" alt="Посадочная страница интенсива по WordPress">
                            <h3 class="card-title">Посадочная страница интенсива по WordPress</h3>
                            <p>Адаптивная вёрстка HTML/CSS</p>
                        </a>
                    </div>
                    <!-- // Card -->
                     <!-- Card -->
                     <div class="card">
                        <a href="https://vasily1299.github.io/uber" class="card-link" target="_blank">                    
                            <img class="card-img" src="./img/portfolio/compressed/9.jpg" alt="Сайт официального партнёра Uber">
                            <h3 class="card-title">Сайт официального партнёра Uber</h3>
                            <p>Адаптивная вёрстка HTML/CSS/JavaScript по сетке Bootstrap4 с использованием препроцессора SASS</p>
                        </a>
                    </div>
                    <!-- // Card -->
                     <!-- Card -->
                     <div class="card">
                        <a href="https://behance.net/vasily1299" class="card-link" target="_blank">                    
                            <img class="card-img" src="./img/portfolio/compressed/10.jpg" alt="Клуб виртуальной реальности в Новороссийске">
                            <h3 class="card-title">Клуб виртуальной реальности в Новороссийске</h3>
                            <p>Веб-дизайн, Figma</p>
                        </a>
                    </div>
                    <!-- // Card -->
                </div>
                <!-- // portfolio-cards-wrapper -->
                <!-- <div class="portfolio-link">
                    <p>Больше примеров работ <a href="https://vk.com/webschoolvk" target="_blank">здесь</a></p>
                </div> -->
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container">
            <div class="footer-row">
                <ul class="footer-contacts">
                    <li>
                        <a target="_blank" href="https://vk.com/web_studio_phoenix">
                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m23.456 5.784c-.27.849-.634 1.588-1.09 2.259l.019-.03q-.672 1.12-1.605 2.588-.8 1.159-.847 1.2c-.138.173-.234.385-.267.618l-.001.007c.027.212.125.397.268.535l.4.446q3.21 3.299 3.611 4.548c.035.092.055.198.055.309 0 .194-.062.373-.167.52l.002-.003c-.176.181-.422.293-.694.293-.03 0-.061-.001-.09-.004h.004-2.631c-.001 0-.003 0-.005 0-.337 0-.647-.118-.89-.314l.003.002c-.354-.291-.669-.606-.951-.948l-.009-.012q-.691-.781-1.226-1.315-1.782-1.694-2.63-1.694c-.021-.002-.045-.003-.07-.003-.165 0-.319.051-.446.138l.003-.002c-.104.13-.167.298-.167.479 0 .036.002.07.007.105v-.004c-.027.314-.043.679-.043 1.048 0 .119.002.237.005.355v-.017 1.159c.01.047.016.101.016.156 0 .242-.11.458-.282.601l-.001.001c-.387.177-.839.281-1.316.281-.102 0-.202-.005-.301-.014l.013.001c-1.574-.03-3.034-.491-4.275-1.268l.035.02c-1.511-.918-2.763-2.113-3.717-3.525l-.027-.042c-.906-1.202-1.751-2.56-2.471-3.992l-.07-.154c-.421-.802-.857-1.788-1.233-2.802l-.06-.185c-.153-.456-.264-.986-.31-1.535l-.002-.025q0-.758.892-.758h2.63c.024-.002.052-.003.081-.003.248 0 .477.085.658.228l-.002-.002c.2.219.348.488.421.788l.003.012c.484 1.367.997 2.515 1.587 3.615l-.067-.137c.482.97 1.015 1.805 1.623 2.576l-.023-.031q.8.982 1.248.982c.009.001.02.001.032.001.148 0 .277-.08.347-.2l.001-.002c.074-.19.117-.411.117-.641 0-.049-.002-.098-.006-.146v.006-3.879c-.021-.457-.133-.884-.32-1.267l.008.019c-.124-.264-.273-.492-.45-.695l.003.004c-.164-.164-.276-.379-.311-.619l-.001-.006c0-.17.078-.323.2-.423l.001-.001c.121-.111.283-.178.46-.178h.008 4.146c.022-.003.047-.004.073-.004.195 0 .37.088.486.226l.001.001c.103.188.164.413.164.651 0 .038-.002.075-.005.112v-.005 5.173c-.002.024-.003.052-.003.08 0 .184.051.357.139.504l-.002-.004c.073.108.195.178.333.178h.001c.176-.012.336-.07.471-.162l-.003.002c.272-.187.506-.4.709-.641l.004-.005c.607-.686 1.167-1.444 1.655-2.25l.039-.07c.344-.57.716-1.272 1.053-1.993l.062-.147.446-.892c.155-.446.571-.76 1.06-.76.019 0 .038 0 .057.001h-.003 2.631q1.066 0 .8.981z"/></svg>
                        </a>
                    </li>
                    <li>
                        <a href="tel:%2079372115115">
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 202.541 202.541" style="enable-background:new 0 0 202.541 202.541;" xml:space="preserve">
                                <path d="M202.482,51.982c-1.07,25.305-10.387,63.51-48.689,101.813c-38.304,38.303-76.508,47.619-101.813,48.69
                                c-0.877,0.037-1.751,0.056-2.625,0.056c-0.001,0-0.002,0-0.003,0c-16.634,0-32.289-6.496-44.083-18.289
                                c-7.017-7.017-7.017-18.434,0-25.451l29.421-29.421c3.399-3.399,7.918-5.271,12.726-5.271c4.807,0,9.326,1.872,12.725,5.271
                                l11.699,11.699c0.764,0.055,1.727,0.099,2.859,0.099c9.159,0,27.25-2.726,45.5-20.976c21.063-21.063,21.394-41.879,20.896-48.34
                                l-11.718-11.718c-7.017-7.017-7.017-18.434-0.001-25.45l29.422-29.422C162.196,1.872,166.715,0,171.523,0s9.326,1.872,12.726,5.271
                                C196.569,17.593,203.216,34.619,202.482,51.982z"/>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="https://wa.clck.bar/79372115115">
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 30.667 30.667" style="enable-background:new 0 0 30.667 30.667;"
                            xml:space="preserve">
                            <g>
                            <path d="M30.667,14.939c0,8.25-6.74,14.938-15.056,14.938c-2.639,0-5.118-0.675-7.276-1.857L0,30.667l2.717-8.017
                            c-1.37-2.25-2.159-4.892-2.159-7.712C0.559,6.688,7.297,0,15.613,0C23.928,0.002,30.667,6.689,30.667,14.939z M15.61,2.382
                            c-6.979,0-12.656,5.634-12.656,12.56c0,2.748,0.896,5.292,2.411,7.362l-1.58,4.663l4.862-1.545c2,1.312,4.393,2.076,6.963,2.076
                            c6.979,0,12.658-5.633,12.658-12.559C28.27,8.016,22.59,2.382,15.61,2.382z M23.214,18.38c-0.094-0.151-0.34-0.243-0.708-0.427
                            c-0.367-0.184-2.184-1.069-2.521-1.189c-0.34-0.123-0.586-0.185-0.832,0.182c-0.243,0.367-0.951,1.191-1.168,1.437
                            c-0.215,0.245-0.43,0.276-0.799,0.095c-0.369-0.186-1.559-0.57-2.969-1.817c-1.097-0.972-1.838-2.169-2.052-2.536
                            c-0.217-0.366-0.022-0.564,0.161-0.746c0.165-0.165,0.369-0.428,0.554-0.643c0.185-0.213,0.246-0.364,0.369-0.609
                            c0.121-0.245,0.06-0.458-0.031-0.643c-0.092-0.184-0.829-1.984-1.138-2.717c-0.307-0.732-0.614-0.611-0.83-0.611
                            c-0.215,0-0.461-0.03-0.707-0.03S9.897,8.215,9.56,8.582s-1.291,1.252-1.291,3.054c0,1.804,1.321,3.543,1.506,3.787
                            c0.186,0.243,2.554,4.062,6.305,5.528c3.753,1.465,3.753,0.976,4.429,0.914c0.678-0.062,2.184-0.885,2.49-1.739
                            C23.307,19.268,23.307,18.533,23.214,18.38z"/>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="https://t.me/Sergey_kadkin_Phoenix">
                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12c0-6.627-5.373-12-12-12zm5.894 8.221-1.97 9.28c-.145.658-.537.818-1.084.508l-3-2.21-1.446 1.394c-.14.18-.357.295-.6.295-.002 0-.003 0-.005 0l.213-3.054 5.56-5.022c.24-.213-.054-.334-.373-.121l-6.869 4.326-2.96-.924c-.64-.203-.658-.64.135-.954l11.566-4.458c.538-.196 1.006.128.832.941z"/></svg>
                        </a>
                    </li>
                </ul>

                <ul class="footer-nav">
                    <li>
                        <a href="#advantages">Преимущества</a>
                    </li>
                    <li>
                        <a href="#stages">Этапы</a>
                    </li>
                    <li>
                        <a href="#services">Услуги</a>
                    </li>
                    <li>
                        <a href="#carousel">Отзывы</a>
                    </li>
                    <li>
                        <a href="#portfolio">Портфолио</a>
                    </li>
                </ul>

                <div class="footer-copyright">
                    Copyright ©2022 Phoenix | Продающий сайт для твоего бизнеса . Все права защищены.
                </div>

            </div>
        </div>
    </footer>
    <div class="overlay">
        <div class="modal modal_mini" id="thanks">
            <div class="modal__close">&times;</div>
            <div class="modal__subtitle">Спасибо за вашу заявку!</div>
            <div class="modal__descr">Наш менеджер свяжется с вами 
                в ближайшее время!</div>
        </div>
    </div>



    <!-- Библиотеки и плагины -->
    <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script> -->
    
    
    <script src="./libs/jquery/jquery-3.5.1.min.js"></script>
    <script src="./libs/vide/jquery.vide.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/jquery.maskedinput.min.js"></script>
    <!-- <script charset="utf-8" type="text/javascript" src="https://cp.callback-free.com/api/js/form-builder.js" data-key="8mICuZrj"></script> -->
    

    <!-- Собственные скрипты и вызовы библиотек -->
    <script src="./js/main.js"></script>

</body>
</html>