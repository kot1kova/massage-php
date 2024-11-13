<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <?php wp_head(); ?>
    <title>Physio Dynamics</title>
</head>

<body>
    <svg style="display: none">
        <!--  -->
        <symbol id="hero" viewBox="0 0 690 367">
            <g>
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M690 40C690 17.9086 672.091 0 650 0H40C17.9086 0 0 17.9086 0 40V237V282V327C0 349.091 17.9086 367 40 367H358C380.091 367 398 349.091 398 327V322C398 299.909 415.909 282 438 282H650C672.091 282 690 264.091 690 242V40Z"
                    fill="#176763" />
            </g>
        </symbol>
        <!--  -->
        <symbol id="services-block" viewBox="0 0 282 187">
            <g>
                <path
                    d="M282 20C282 8.95431 273.046 0 262 0H20C8.95431 0 0 8.9543 0 20V128.115V152V167C0 178.046 8.95432 187 20 187H186.106C195.771 187 203.606 179.165 203.606 169.5V169.5C203.606 159.835 211.441 152 221.106 152H262C273.046 152 282 143.046 282 132V20Z" />
            </g>
        </symbol>
        <!--  -->
        <symbol id="offer-arrow" viewBox="0 0 21 21">
            <g>
                <path
                    d="M9.29173 0.763631C9.86524 0.190118 10.7951 0.190118 11.3686 0.763631L19.9353 9.3303C20.2107 9.60571 20.3654 9.97925 20.3654 10.3687C20.3654 10.7582 20.2107 11.1318 19.9353 11.4072L11.3686 19.9739C10.7951 20.5474 9.86524 20.5474 9.29173 19.9739C8.71822 19.4003 8.71822 18.4705 9.29173 17.897L15.3514 11.8373H1.76349C0.952424 11.8373 0.294922 11.1798 0.294922 10.3687C0.294922 9.55767 0.952424 8.90017 1.76349 8.90017H15.3514L9.29173 2.84051C8.71822 2.26699 8.71822 1.33714 9.29173 0.763631Z" />
            </g>
        </symbol>
        <!--  -->
        <symbol id="why-block" fill="#EAEAEA" width="690" height="152" viewBox="0 0 690 152">
            <g>
                <path
                    d="M528 0H24C10.7452 0 0 10.7452 0 24V128C0 141.255 10.7451 152 24 152H570.026C583.281 152 594.026 141.255 594.026 128V83.6456C594.026 70.3907 604.772 59.6456 618.026 59.6456H666C679.255 59.6456 690 48.9004 690 35.6455V24C690 10.7452 679.255 0 666 0H594.026H528Z" />
            </g>
        </symbol>
        <!--  -->
        <symbol width="588" height="518" viewBox="0 0 588 518" fill="#176763" id="why-banner" viewBox="0 0 690 367">
            <g>
                <path
                    d="M588 24C588 10.7452 577.255 0 564 0H126C112.745 0 102 10.7452 102 24V257C102 270.255 91.2548 281 78 281H24C10.7452 281 0 291.745 0 305V494C0 507.255 10.7452 518 24 518H102H146H564C577.255 518 588 507.255 588 494V24Z" />
                <circle cx="349" cy="228" r="219.5" stroke="#F5F5F5" stroke-dasharray="6 6" />
                <circle cx="344" cy="266" r="189.5" stroke="#F5F5F5" stroke-dasharray="6 6" />
            </g>
        </symbol>
        <!--  -->
        <symbol viewBox="0 0 588 518" fill="#F5F5F5" id="slider-next" viewBox="0 0 23 23">
            <g>
                <path
                    d="M9.62043 4.36433C10.1062 3.87856 10.8938 3.87856 11.3796 4.36433L18.6357 11.6204C18.8689 11.8537 19 12.1701 19 12.5C19 12.8299 18.8689 13.1463 18.6357 13.3796L11.3796 20.6357C10.8938 21.1214 10.1062 21.1214 9.62043 20.6357C9.13465 20.1499 9.13465 19.3623 9.62043 18.8765L14.7531 13.7439L3.2439 13.7439C2.55691 13.7439 2 13.187 2 12.5C2 11.813 2.55691 11.2561 3.2439 11.2561L14.7531 11.2561L9.62043 6.12347C9.13465 5.6377 9.13465 4.8501 9.62043 4.36433Z" />
            </g>
        </symbol>
        <!--  -->
        <symbol viewBox="0 0 12 11" fill="#F5F5F5" id="services-btn" viewBox="0 0 23 23">
            <g>
                <path
                    d="M5.32683 0.230028C5.66639 -0.0766761 6.21694 -0.0766761 6.5565 0.230028L11.6287 4.81133C11.7917 4.95861 11.8833 5.15837 11.8833 5.36667C11.8833 5.57496 11.7917 5.77472 11.6287 5.922L6.5565 10.5033C6.21694 10.81 5.66639 10.81 5.32683 10.5033C4.98726 10.1966 4.98726 9.69933 5.32683 9.39263L8.91463 6.15203H0.869512C0.389294 6.15203 0 5.80041 0 5.36667C0 4.93292 0.389294 4.5813 0.869512 4.5813H8.91463L5.32683 1.3407C4.98726 1.034 4.98726 0.536733 5.32683 0.230028Z" />
            </g>
        </symbol>
        <!--  -->
    </svg>
    <div class="top">
        <div class="top__header-inner container">
            <div class="top__header-address">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_46_612)">
                        <path opacity="0.3"
                            d="M12 4C9.24 4 7 6.24 7 9C7 11.85 9.92 16.21 12 18.88C14.11 16.19 17 11.88 17 9C17 6.24 14.76 4 12 4ZM12 11.5C10.62 11.5 9.5 10.38 9.5 9C9.5 7.62 10.62 6.5 12 6.5C13.38 6.5 14.5 7.62 14.5 9C14.5 10.38 13.38 11.5 12 11.5Z"
                            fill="#D9D9D9" />
                        <path
                            d="M12 2C8.13 2 5 5.13 5 9C5 14.25 12 22 12 22C12 22 19 14.25 19 9C19 5.13 15.87 2 12 2ZM7 9C7 6.24 9.24 4 12 4C14.76 4 17 6.24 17 9C17 11.88 14.12 16.19 12 18.88C9.92 16.21 7 11.85 7 9Z"
                            fill="#141514" />
                        <path
                            d="M12 11.5C13.3807 11.5 14.5 10.3807 14.5 9C14.5 7.61929 13.3807 6.5 12 6.5C10.6193 6.5 9.5 7.61929 9.5 9C9.5 10.3807 10.6193 11.5 12 11.5Z"
                            fill="#141514" />
                    </g>
                    <defs>
                        <clipPath id="clip0_46_612">
                            <rect width="24" height="24" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
                <p class="top__header-text">
                    58 Middle Point Rd, San Francisco, 94124
                </p>
            </div>
            <div class="top__header-info">
                <p class="top__header-text">Mon - Fri</p>
                <p class="top__header-text">08:00 - 20:00</p>
            </div>
            <div class="top__header-info">
                <p class="top__header-text">Sat</p>
                <p class="top__header-text">08:00 - 18:00</p>
            </div>
        </div>
    </div>

    <header class="header">
        <div class="header__inner container">
            <div class="header__left">
                <a href="./index.html" class="header__logolink">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/logo.svg" alt="header-logo" class="header__logo" /></a>

                <nav class="header__nav">
                    <ul class="header__menu">
                        <li class="header__links">
                            <a href="/services" class="header__link">Service
                                <svg viewBox="0 0 13 8" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6.36452 5.06084L11.3145 0.11084L12.7285 1.52484L6.36452 7.88884L0.000514922 1.52484L1.41451 0.110839L6.36452 5.06084Z" />
                                </svg>
                            </a>
                        </li>
                        <li class="header__links">
                            <a href="/about" class="header__link">About us</a>
                        </li>
                        <li class="header__links">
                            <a href="/price" class="header__link">Price</a>
                        </li>
                        <li class="header__links">
                            <a href="/contact" class="header__link">Contact</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <button class="header__toggle" aria-label="Toggle navigation">
                <span class="header__toggle-bar"></span>
                <span class="header__toggle-bar"></span>
                <span class="header__toggle-bar"></span>
            </button>
            <div class="header__right">
                <div class="header__lang">
                    <button class="header__lang-btn">
                        EN
                        <svg viewBox="0 0 13 8" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M6.36452 5.06084L11.3145 0.11084L12.7285 1.52484L6.36452 7.88884L0.000514922 1.52484L1.41451 0.110839L6.36452 5.06084Z"
                                fill="#141514" />
                        </svg>
                    </button>
                </div>
                <div class="header__contact">
                    <div class="header__info">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M19.957 21.125C20.5758 21.125 21.082 20.6187 21.082 20V16.0738C21.082 15.455 20.5758 14.9488 19.957 14.9488C18.562 14.9488 17.2008 14.7237 15.9408 14.3075C15.8283 14.2625 15.7045 14.2513 15.592 14.2513C15.2995 14.2513 15.0183 14.3638 14.7933 14.5775L12.3183 17.0525C9.13453 15.4212 6.52453 12.8225 4.90453 9.63875L7.37953 7.16375C7.69453 6.84875 7.78453 6.41 7.66078 6.01625C7.24453 4.75625 7.01953 3.40625 7.01953 2C7.01953 1.38125 6.51328 0.875 5.89453 0.875H1.95703C1.33828 0.875 0.832031 1.38125 0.832031 2C0.832031 12.5638 9.39328 21.125 19.957 21.125ZM15.907 16.6475C16.8633 16.9175 17.842 17.0862 18.832 17.1537V18.83C17.347 18.7287 15.9183 18.4362 14.557 17.9862L15.907 16.6475ZM3.11578 3.125H4.80328C4.88203 4.12625 5.05078 5.105 5.32078 6.03875L3.97078 7.38875C3.50953 6.03875 3.21703 4.61 3.11578 3.125Z"
                                fill="#141514" />
                        </svg>
                        <a href="tele:+0000000000" class="header__cont">+1234567890</a>
                    </div>
                    <div class="header__info">
                        <svg width="24" height="18" viewBox="0 0 24 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M2.95703 17.6668H20.957C22.1945 17.6668 23.207 16.6918 23.207 15.5002V2.50016C23.207 1.3085 22.1945 0.333496 20.957 0.333496H2.95703C1.71953 0.333496 0.707031 1.3085 0.707031 2.50016V15.5002C0.707031 16.6918 1.71953 17.6668 2.95703 17.6668ZM20.957 2.50016L11.957 7.906L2.95703 2.50016H20.957ZM2.95703 4.66683L11.957 10.0835L20.957 4.66683V15.5002H2.95703V4.66683Z"
                                fill="#141514" />
                        </svg>
                        <a href="mailto:hello@mail.com" class="header__cont">hello@mail.com</a>
                    </div>
                </div>
                <div class="header__social">
                    <div class="header__icons">
                        <a href="#" target="_blank" class="header__soc-link">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/header/social/Instagram.svg" alt="viber" class="header__icon" />
                        </a>
                    </div>
                    <div class="header__icons">
                        <a href="#" target="_blank" class="header__soc-link"><img src="<?php bloginfo('template_url'); ?>/assets/img/header/social/Facebook.svg"
                                alt="facebook" class="header__icon" /></a>
                    </div>
                    <div class="header__icons">
                        <a href="#" target="_blank" class="header__soc-link">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/header/social/tg.svg" alt="tg" class="header__icon" /></a>
                    </div>
                    <div class="header__icons">
                        <a href="#" target="_blank" class="header__soc-link"><img src="<?php bloginfo('template_url'); ?>/assets/img/header/social/whatsapp.svg"
                                alt="" class="header__icon" /></a>
                    </div>
                </div>
            </div>
        </div>
    </header>