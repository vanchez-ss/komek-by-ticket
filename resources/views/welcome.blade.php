<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo asset('css/app.css')?>" type="text/css"> 
        <title>Komek By Ticket</title>
    </head>
    <body class="app app--background">
        <div class="wrapper">
            <header class="header">
                <img class="header__poster" src="../images/header-poster.jpg">
                <div class="header__content header__content--center">
                    <img src="../svgs/logo.svg"/>
                    <div class="header__info">
                        <div class="header__title">Казахстан</div>
                        <div class="header__subtitle">улица Тестовая 1</div>
                    </div>
                    <div class="header__info">
                        <div class="header__title">
                            +7 (775) 000 00 01
                            <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.75 0.75L5.75 5.75L0.75 0.75" stroke="#A0AEB7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="header__subtitle">Касса</div>
                    </div>
                    <div class="header__socials">
                        <img src="../svgs/facebook.svg"/>
                        <img src="../svgs/instagram.svg"/>
                        <img src="../svgs/youtube.svg"/>
                        <img src="../svgs/vk.svg"/>
                        <div class="button">
                            Мне пришёл билет
                        </div>
                    </div>
                </div>
            </header>

            <main class="main">
                <div class="main__menu">
                    <div class="main__menu-buttons">
                        <div class="main__menu-button main__menu-button--active">Афиша</div>
                        <div class="main__menu-button">Сеансы</div>
                        <div class="main__menu-button">Кинотеатр</div>
                        <div class="main__menu-button">Контакты</div>
                    </div>
                    <div class="button">Войти</div>
                    <div class="button">Написать отзыв</div>
                </div>
                <div class="main__calendar">
                    <div class="button button--reverse button--reverse--active">Сегодня</div>
                    <div class="button button--reverse">Завтра</div>
                    <div class="button button--reverse">Воскресенье, 10 сент.</div>
                    <div class="button button--reverse">Понедельник, 11 сент.</div>
                    <div class="button button--reverse">Вторник, 12 сент.</div>
                    <div class="button button--reverse">Среда, 13 сент.</div>
                </div>
                <div class="main__content">
                    <div class="main__card">
                        <div class="main__card-poster">
                            <div class="main__card-badge">Премьера</div>
                            <div class="main__card-age">12+</div>
                            <img src="../images/item_1.webp" onerror="this.onerror=null;this.src='{{ asset('../svgs/image.svg') }}';this.classList.add('main__card-poster--is-placeholder');"/>
                        </div>
                        <div class="main__card-info">
                            <div class="main__card-title">Праздники</div>
                            <div class="main__card-genres">
                                <div class="main__card-genre">комедия</div>
                            </div>
                            <div class="main__card-sessions">
                                <div class="main__card-session">
                                    <div class="main__card-session-info">
                                        <span class="main__card-session-time">
                                            15:35
                                        </span>
                                        <div class="main__card-session-price">
                                            <span>2D</span>
                                            <span>1233 ₸</span>
                                        </div>
                                    </div>
                                    Зал 3
                                </div>
                                <div class="main__card-session">
                                    <div class="main__card-session-info">
                                        <span class="main__card-session-time">
                                            17:40
                                        </span>
                                        <div class="main__card-session-price">
                                            <span>2D</span>
                                            <span>3080 ₸</span>
                                        </div>
                                    </div>
                                    Зал 6 VIP
                                </div>
                                <div class="main__card-session">
                                    <div class="main__card-session-info">
                                        <span class="main__card-session-time">
                                            19:15
                                        </span>
                                        <div class="main__card-session-price">
                                            <span>2D</span>
                                            <span>1700 ₸</span>
                                        </div>
                                    </div>
                                    Зал 4
                                </div>
                                <div class="main__card-session">
                                    <div class="main__card-session-info">
                                        <span class="main__card-session-time">
                                            21:05
                                        </span>
                                        <div class="main__card-session-price">
                                            <span>2D</span>
                                            <span>1700 ₸</span>
                                        </div>
                                    </div>
                                    Зал 3
                                </div>
                                <div class="main__card-session">
                                    <div class="main__card-session-info">
                                        <span class="main__card-session-time">
                                            21:40
                                        </span>
                                        <div class="main__card-session-price">
                                            <span>2D</span>
                                            <span>4070 ₸</span>
                                        </div>
                                    </div>
                                    Зал 6 VIP
                                </div>
                                <div class="main__card-session">
                                    <div class="main__card-session-info">
                                        <span class="main__card-session-time">
                                            22:45
                                        </span>
                                        <div class="main__card-session-price">
                                            <span>2D</span>
                                            <span>1700 ₸</span>
                                        </div>
                                    </div>
                                    Зал 3
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main__card">
                        <div class="main__card-poster">
                            <div class="main__card-age">16+</div>
                            <img src="../images/item_2.jpg" onerror="this.onerror=null;this.src='{{ asset('../svgs/image.svg') }}';this.classList.add('main__card-poster--is-placeholder');"/>
                        </div>
                        <div class="main__card-info">
                            <div class="main__card-title">Мег 2: Бездна</div>
                            <div class="main__card-genres">
                                <div class="main__card-genre">экшен</div>
                                <div class="main__card-genre">триллер</div>
                            </div>
                            <div class="main__card-sessions">
                                <div class="main__card-session">
                                    <div class="main__card-session-info">
                                        <span class="main__card-session-time">
                                            15:35
                                        </span>
                                        <div class="main__card-session-price">
                                            <span>2D</span>
                                            <span>4030 ₸</span>
                                        </div>
                                    </div>
                                    Зал 6 VIP
                                </div>
                                <div class="main__card-session">
                                    <div class="main__card-session-info">
                                        <span class="main__card-session-time">
                                            17:40
                                        </span>
                                        <div class="main__card-session-price">
                                            <span>2D</span>
                                            <span>3080 ₸</span>
                                        </div>
                                    </div>
                                    Зал 2 Auro
                                </div>
                                <div class="main__card-session">
                                    <div class="main__card-session-info">
                                        <span class="main__card-session-time">
                                            19:15
                                        </span>
                                        <div class="main__card-session-price">
                                            <span>2D</span>
                                            <span>1700 ₸</span>
                                        </div>
                                    </div>
                                    Зал 4
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main__card">
                        <div class="main__card-poster">
                            <div class="main__card-age">16+</div>
                            <img src="../images/item_3.webp" onerror="this.onerror=null;this.src='{{ asset('../svgs/image.svg') }}';this.classList.add('main__card-poster--is-placeholder');"/>
                        </div>
                        <div class="main__card-info">
                            <div class="main__card-title">Заложники</div>
                            <div class="main__card-genres">
                                <div class="main__card-genre">экшен</div>
                                <div class="main__card-genre">триллер</div>
                            </div>
                            <div class="main__card-sessions">
                                <div class="main__card-session">
                                    <div class="main__card-session-info">
                                        <span class="main__card-session-time">
                                            16:10
                                        </span>
                                        <div class="main__card-session-price">
                                            <span>2D</span>
                                            <span>4030 ₸</span>
                                        </div>
                                    </div>
                                    Зал 1
                                </div>
                                <div class="main__card-session">
                                    <div class="main__card-session-info">
                                        <span class="main__card-session-time">
                                            21:30
                                        </span>
                                        <div class="main__card-session-price">
                                            <span>2D</span>
                                            <span>3080 ₸</span>
                                        </div>
                                    </div>
                                    Зал 1
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main__card">
                        <div class="main__card-poster">
                            <div class="main__card-age">6+</div>
                            <img src="../images/item_4.webp" onerror="this.onerror=null;this.src='{{ asset('../svgs/image.svg') }}';this.classList.add('main__card-poster--is-placeholder');"/>
                        </div>
                        <div class="main__card-info">
                            <div class="main__card-title">Леди Баг и Супер-Кот: Пробуждение силы</div>
                            <div class="main__card-genres">
                                <div class="main__card-genre">фентези</div>
                                <div class="main__card-genre">боевик</div>
                                <div class="main__card-genre">мелодрама</div>
                                <div class="main__card-genre">мультфильм</div>
                                <div class="main__card-genre">комедия</div>
                            </div>
                            <div class="main__card-sessions">
                                <div class="main__card-session">
                                    <div class="main__card-session-info">
                                        <span class="main__card-session-time">
                                            16:10
                                        </span>
                                        <div class="main__card-session-price">
                                            <span>2D</span>
                                            <span>4030 ₸</span>
                                        </div>
                                    </div>
                                    Зал 1
                                </div>
                                <div class="main__card-session">
                                    <div class="main__card-session-info">
                                        <span class="main__card-session-time">
                                            21:30
                                        </span>
                                        <div class="main__card-session-price">
                                            <span>2D</span>
                                            <span>3080 ₸</span>
                                        </div>
                                    </div>
                                    Зал 1
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main__card">
                        <div class="main__card-poster">
                            <div class="main__card-badge">Премьера</div>
                            <img src="../images/item_6.png" onerror="this.onerror=null;this.src='{{ asset('../svgs/image.svg') }}';this.classList.add('main__card-poster--is-placeholder');"/>
                        </div>
                        <div class="main__card-info">
                            <div class="main__card-title">Когда не загрузилась афиша</div>
                            <div class="main__card-genres">
                                <div class="main__card-genre">комедия</div>
                            </div>
                            <div class="main__card-sessions">
                                <div class="main__card-session">
                                    <div class="main__card-session-info">
                                        <span class="main__card-session-time">
                                            15:35
                                        </span>
                                        <div class="main__card-session-price">
                                            <span>2D</span>
                                            <span>1233 ₸</span>
                                        </div>
                                    </div>
                                    Зал 3
                                </div>
                                <div class="main__card-session">
                                    <div class="main__card-session-info">
                                        <span class="main__card-session-time">
                                            17:40
                                        </span>
                                        <div class="main__card-session-price">
                                            <span>2D</span>
                                            <span>3080 ₸</span>
                                        </div>
                                    </div>
                                    Зал 6 VIP
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main__card">
                        <div class="main__card-poster">
                            <div class="main__card-badge">Премьера</div>
                            <div class="main__card-age">6+</div>
                            <img src="../images/item_5.jpg" onerror="this.onerror=null;this.src='{{ asset('../svgs/image.svg') }}';this.classList.add('main__card-poster--is-placeholder');"/>
                        </div>
                        <div class="main__card-info">
                            <div class="main__card-title">Руслан и Людмила. Больше, чем сказка</div>
                            <div class="main__card-genres">
                                <div class="main__card-genre">анимационое приключение</div>
                            </div>
                            <div class="button button--v2">
                                Сеансы на Завтра
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            
            <footer class="footer">
                <div class="footer__content">
                    <img src="../svgs/logo.svg"/>
                    <div class="footer__info">
                        <div class="footer__title footer__title--column">
                            <span>admin@example.com</span>
                            <span>ticket@example.com</span>
                        </div>
                        <div class="footer__subtitle">улица Тестовая 1</div>
                    </div>
                    <div class="footer__info">
                        <div class="footer__title">
                            +7 (775) 000 00 01
                            <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.75 0.75L5.75 5.75L0.75 0.75" stroke="#A0AEB7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="footer__subtitle">Касса</div>
                    </div>
                    <div class="footer__info">
                        <div class="footer__title">08:00 - 22:00 с пн.-пт.</div>
                        <div class="footer__subtitle">График работы</div>
                    </div>
                </div>
                <div class="footer__content footer__content--secondary footer__content--border">
                    <div class="footer__menu">
                        Меню
                        <div class="footer__menu-items">
                            <div class="footer__menu-item">
                                Афиша
                            </div>
                            <div class="footer__menu-item">
                                Сеансы
                            </div>
                            <div class="footer__menu-item">
                                Пушкинская карта
                            </div>
                            <div class="footer__menu-item">
                                Кинотеатр
                            </div>
                            <div class="footer__menu-item">
                                Контакты
                            </div>
                        </div>
                    </div>
                    <div class="footer__block">
                        <div class="footer__payments">
                            Способы оплаты:
                            <div class="footer__payment-items">
                                <img src="../svgs/mastercard.svg"/>
                                <img src="../svgs/visa.svg"/>
                            </div>
                        </div>
                        <span>
                            Все сеансы начинаются с рекламно-информационного блока.<br>
                            Точную продолжительность сеансов можно уточнить в кинотеатре.
                        </span>
                    </div>
                </div>
                <div class="footer__content footer__content--secondary footer__content--center">
                    <div class="footer__socials">
                        <img src="../svgs/facebook.svg"/>
                        <img src="../svgs/instagram.svg"/>
                        <img src="../svgs/youtube.svg"/>
                        <img src="../svgs/vk.svg"/>
                    </div>
                    <div class="footer__info">
                        <div class="footer__subtitle">© 2025 Все права защищены</div>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>
