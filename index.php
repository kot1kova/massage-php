<?php

// Template Name: Home
?>
<?php get_header(); ?>
<main class="main-page">
  <section class="hero">
    <div class="hero__inner container">
      <div class="hero__wrapper">
        <svg class="hero__banner">
          <use xlink:href="#hero"></use>
        </svg>
        <div class="hero__info">
          <h1 class="hero__title h1-title">unique selling proposition</h1>
          <p class="hero__text">
            Lorem ipsum dolor sit amet consectetur adipiscing eli mattis sit
            phasellus mollis sit aliquam sit nullam neque ultrices. Lorem
            ipsum dolor sit amet consectetur adipiscing eli mattis sit
            phasellus mollis sit aliquam sit nullam neque ultrices.
          </p>
        </div>
        <a
          href="https://booking.calit-app.com/"
          class="hero__link button"
          target="_blank">Get Started
          <svg
            width="11"
            height="11"
            viewBox="0 0 11 11"
            fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
              fill-rule="evenodd"
              clip-rule="evenodd"
              d="M4.94414 0.363329C5.25085 0.0566247 5.74811 0.0566247 6.05482 0.363329L10.6361 4.94463C10.7834 5.09191 10.8661 5.29168 10.8661 5.49997C10.8661 5.70826 10.7834 5.90802 10.6361 6.0553L6.05482 10.6366C5.74811 10.9433 5.25085 10.9433 4.94414 10.6366C4.63744 10.3299 4.63744 9.83264 4.94414 9.52593L8.18474 6.28533H0.918178C0.484433 6.28533 0.132812 5.93371 0.132812 5.49997C0.132812 5.06622 0.484433 4.7146 0.918178 4.7146H8.18474L4.94414 1.474C4.63744 1.1673 4.63744 0.670034 4.94414 0.363329Z"
              fill="#164876" />
          </svg></a>
      </div>
      <div class="hero__img">
        <img
          src="<?php bloginfo('template_url'); ?>/assets/img/main-page/hero-photo1.png"
          alt="hero"
          class="hero__photo" />
      </div>
    </div>
  </section>

  <section class="timetable">
    <div class="timetable__inner container">
      <div class="timetable__cover">
        <p class="timetable__title">Insurance</p>
        <p class="timetable__text">
          Lorem ipsum dolor sit amet consectetur adipiscing eli mattis sit
          phasellus mollis sit aliquam sit nullam neque ultrices. Lorem
          ipsum dolor sit amet consectetur
        </p>
      </div>
      <div class="timetable__wrapper">
        <div class="timetable__info">
          <p class="timetable__title">Book Schedule</p>
          <p class="timetable__text">
            Lorem ipsum dolor sit amet consectetur adipiscing eli mattis
          </p>
        </div>
        <div class="timetable__timetable"></div>
        <a href="#" class="timetable__link">get in touch</a>
      </div>
    </div>
  </section>

  <section class="services">
    <div class="services__inner container">
      <h2 class="services__title h2-title">Service</h2>
      <!-- Swiper -->
      <div class="swiper services-slider">
        <div class="slider__btn">
          <div class="slider-prev">
            <svg
              viewBox="0 0 17 17"
              fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M9.37957 16.6357C8.8938 17.1214 8.1062 17.1214 7.62043 16.6357L0.364329 9.37957C0.131053 9.14629 -1.1931e-06 8.8299 -1.16426e-06 8.5C-1.13541e-06 8.1701 0.131053 7.8537 0.364329 7.62043L7.62043 0.364331C8.1062 -0.121444 8.8938 -0.121444 9.37957 0.364332C9.86535 0.850105 9.86535 1.6377 9.37957 2.12347L4.24695 7.2561L15.7561 7.2561C16.4431 7.2561 17 7.81301 17 8.5C17 9.18699 16.4431 9.7439 15.7561 9.7439L4.24695 9.7439L9.37957 14.8765C9.86535 15.3623 9.86535 16.1499 9.37957 16.6357Z"
                fill="#1D9B96" />
            </svg>
          </div>
          <div class="slider-next">
            <svg
              viewBox="0 0 17 17"
              fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M7.62043 0.364331C8.1062 -0.121444 8.8938 -0.121444 9.37957 0.364331L16.6357 7.62043C16.8689 7.8537 17 8.1701 17 8.5C17 8.8299 16.8689 9.14629 16.6357 9.37957L9.37957 16.6357C8.8938 17.1214 8.1062 17.1214 7.62043 16.6357C7.13465 16.1499 7.13465 15.3623 7.62043 14.8765L12.7531 9.7439L1.2439 9.7439C0.556914 9.7439 0 9.18699 0 8.5C0 7.81301 0.556914 7.2561 1.2439 7.2561L12.7531 7.2561L7.62043 2.12347C7.13465 1.6377 7.13465 0.850105 7.62043 0.364331Z"
                fill="#F5F5F5" />
            </svg>
          </div>
        </div>
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <a href="./services.html" class="services__links">
              <div
                class="services__photo"
                style="
                      background-image: url(<?php bloginfo('template_url'); ?>/assets/img/main-page/services/slide-img1.png);
                    ">
                <svg class="services__block">
                  <use xlink:href="#services-block"></use>
                </svg>
              </div>

              <div class="services__btns">
                <svg class="services__btn">
                  <use xlink:href="#services-btn"></use>
                </svg>
              </div>
              <div class="services__info">
                <p class="services__text">Craniomandibular dysfunction</p>
              </div>
            </a>
          </div>
          <div class="swiper-slide">Slide 2</div>
          <div class="swiper-slide">Slide 3</div>
          <div class="swiper-slide">Slide 4</div>
          <div class="swiper-slide">Slide 5</div>
          <div class="swiper-slide">Slide 6</div>
          <div class="swiper-slide">Slide 7</div>
          <div class="swiper-slide">Slide 8</div>
          <div class="swiper-slide">Slide 9</div>
        </div>
      </div>
      <!-- Swiper JS -->
    </div>
  </section>

  <section class="offers">
    <div class="offers__inner container">
      <div class="offers__left">
        <div class="offers__info">
          <h2 class="offers__title h2-title">Popular offers</h2>
          <p class="offers__undertext">
            Lorem ipsum dolor sit amet consecte tur adipiscing elit semper
            dalaracc lacus vel facilisis volutpat est velitolm.
          </p>
        </div>
        <a href="#" class="offers__links">
          <div
            class="offers__offer first"
            style="
                  background-image: url(<?php bloginfo('template_url'); ?>/assets/img/main-page/offers/offer-img1.png);
                ">
            <div class="offers__btn">
              <svg class="offers__icon">
                <use xlink:href="#offer-arrow"></use>
              </svg>
            </div>
            <div class="offers__box">
              <p class="offers__subtitle">Popular offers</p>
              <p class="offers__text">
                Lorem ipsum dolor sit amet consecte tur adipiscing elit
                semper dalaracc lacus vel facilisis volutpat est velitolm.
              </p>
            </div>
          </div>
        </a>
      </div>
      <div class="offers__right">
        <a href="#" class="offers__links">
          <div
            class="offers__offer"
            style="
                  background-image: url(<?php bloginfo('template_url'); ?>/assets/img/main-page/offers/offer-img2.png);
                ">
            <div class="offers__btn">
              <svg class="offers__icon">
                <use xlink:href="#offer-arrow"></use>
              </svg>
            </div>
            <div class="offers__box">
              <p class="offers__subtitle">Popular offers</p>
              <p class="offers__text">
                Lorem ipsum dolor sit amet consecte tur adipiscing elit
                semper dalaracc lacus vel facilisis volutpat est velitolm.
              </p>
            </div>
          </div>
        </a>
        <a href="#" class="offers__links">
          <div
            class="offers__offer"
            style="
                  background-image: url(<?php bloginfo('template_url'); ?>/assets/img/main-page/offers/offer-img3.png);
                ">
            <div class="offers__btn">
              <svg class="offers__icon">
                <use xlink:href="#offer-arrow"></use>
              </svg>
            </div>
            <div class="offers__box">
              <p class="offers__subtitle">Popular offers</p>
              <p class="offers__text">
                Lorem ipsum dolor sit amet consecte tur adipiscing elit
                semper dalaracc lacus vel facilisis volutpat est velitolm.
              </p>
            </div>
          </div>
        </a>
      </div>
    </div>
  </section>

  <section class="why">
    <div class="why__inner container">
      <div class="why__wrapper">
        <h2 class="why__title h2-title">Why us?</h2>
        <ul class="why__items">
          <li class="why__item">
            <img
              src="<?php bloginfo('template_url'); ?>/assets/img/main-page//why/why-icon1.svg"
              alt=""
              class="why__icon" />
            <div class="why__info">
              <p class="why__subtitle">Consultation</p>
              <p class="why__text">
                Lorem ipsum dolor sit amet consecte tur adipiscing elit
                semper dalaracc lacus vel facilisis volutpat est velitolm.
              </p>
            </div>
          </li>
          <li class="why__item">
            <svg class="why__block">
              <use xlink:href="#why-block"></use>
            </svg>
            <img
              src="<?php bloginfo('template_url'); ?>/assets/img/main-page/why/why-icon2.svg"
              alt=""
              class="why__icon" />
            <div class="why__info">
              <p class="why__subtitle">Quality</p>
              <p class="why__text">
                Lorem ipsum dolor sit amet consecte tur adipiscing elit
                semper dalaracc lacus vel facilisis volutpat est velitolm.
              </p>
            </div>
          </li>
          <li class="why__item">
            <img
              src="<?php bloginfo('template_url'); ?>/assets/img/main-page/why/why-icon3.svg"
              alt=""
              class="why__icon" />
            <div class="why__info">
              <p class="why__subtitle">Team</p>
              <p class="why__text">
                Lorem ipsum dolor sit amet consecte tur adipiscing elit
                semper dalaracc lacus vel facilisis volutpat est velitolm.
              </p>
            </div>
          </li>
        </ul>
      </div>
      <div class="why__banner">
        <img
          src="<?php bloginfo('template_url'); ?>/assets/img/main-page//why/why-hero1.png"
          alt="img"
          class="why__img" />
        <div class="why__blocks">
          <svg class="why__block">
            <use xlink:href="#why-banner"></use>
          </svg>
        </div>
      </div>
    </div>
  </section>

  <section class="reviews">
    <div class="reviews__inner">
      <h2 class="reviews__title h2-title container">Testimonials</h2>
      <!-- Swiper -->
      <div class="swiper reviews-slider">
        <div class="slider__btn container">
          <div class="slider-prev">
            <svg
              width="17"
              height="17"
              viewBox="0 0 17 17"
              fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M9.37957 16.6357C8.8938 17.1214 8.1062 17.1214 7.62043 16.6357L0.364329 9.37957C0.131053 9.14629 -1.1931e-06 8.8299 -1.16426e-06 8.5C-1.13541e-06 8.1701 0.131053 7.8537 0.364329 7.62043L7.62043 0.364331C8.1062 -0.121444 8.8938 -0.121444 9.37957 0.364332C9.86535 0.850105 9.86535 1.6377 9.37957 2.12347L4.24695 7.2561L15.7561 7.2561C16.4431 7.2561 17 7.81301 17 8.5C17 9.18699 16.4431 9.7439 15.7561 9.7439L4.24695 9.7439L9.37957 14.8765C9.86535 15.3623 9.86535 16.1499 9.37957 16.6357Z"
                fill="#1D9B96" />
            </svg>
          </div>
          <div class="slider-next">
            <svg
              width="17"
              height="17"
              viewBox="0 0 17 17"
              fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M7.62043 0.364331C8.1062 -0.121444 8.8938 -0.121444 9.37957 0.364331L16.6357 7.62043C16.8689 7.8537 17 8.1701 17 8.5C17 8.8299 16.8689 9.14629 16.6357 9.37957L9.37957 16.6357C8.8938 17.1214 8.1062 17.1214 7.62043 16.6357C7.13465 16.1499 7.13465 15.3623 7.62043 14.8765L12.7531 9.7439L1.2439 9.7439C0.556914 9.7439 0 9.18699 0 8.5C0 7.81301 0.556914 7.2561 1.2439 7.2561L12.7531 7.2561L7.62043 2.12347C7.13465 1.6377 7.13465 0.850105 7.62043 0.364331Z"
                fill="#F5F5F5" />
            </svg>
          </div>
        </div>
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <p class="reviews__text">
              Porem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
              vulputate libero et velit interdum, ac aliquet odio mattis.
              Class aptent taciti sociosqu ad litora torquent per conubia
              nostra, per inceptos himenaeos. Porem ipsum dolor sit amet,
              consectetur adipiscing elit. Nunc vulputate libero et velit
              interdum, ac aliquet odio mattis. Class aptent taciti sociosqu
              ad litora torquent per conubia nostra, per inceptos himenaeos.
            </p>
            <div class="reviews__info">
              <div class="reviews__user">
                <p class="reviews__name">Jessica M.</p>
                <p class="reviews__prof">Small Business Owner</p>
              </div>
              <div class="reviews__stars">
                <img
                  src="<?php bloginfo('template_url'); ?>/assets/img/rev-star-5-activ.png"
                  alt=""
                  class="reviews__img" />
                <p>Rated 5.0/5.0 by users</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <p class="reviews__text">
              Porem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
              vulputate libero et velit interdum, ac aliquet odio mattis.
              Class aptent taciti sociosqu ad litora torquent per conubia
              nostra, per inceptos himenaeos. Porem ipsum dolor sit amet,
              consectetur adipiscing elit. Nunc vulputate libero et velit
              interdum, ac aliquet odio mattis. Class aptent taciti sociosqu
              ad litora torquent per conubia nostra, per inceptos himenaeos.
            </p>
            <div class="reviews__info">
              <div class="reviews__user">
                <p class="reviews__name">Jessica M.</p>
                <p class="reviews__prof">Small Business Owner</p>
              </div>
              <div class="reviews__stars">
                <img
                  src="<?php bloginfo('template_url'); ?>/assets/img/rev-star-5-activ.png"
                  alt=""
                  class="reviews__img" />
                <p>Rated 5.0/5.0 by users</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <p class="reviews__text">
              Porem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
              vulputate libero et velit interdum, ac aliquet odio mattis.
              Class aptent taciti sociosqu ad litora torquent per conubia
              nostra, per inceptos himenaeos. Porem ipsum dolor sit amet,
              consectetur adipiscing elit. Nunc vulputate libero et velit
              interdum, ac aliquet odio mattis. Class aptent taciti sociosqu
              ad litora torquent per conubia nostra, per inceptos himenaeos.
            </p>
            <div class="reviews__info">
              <div class="reviews__user">
                <p class="reviews__name">Jessica M.</p>
                <p class="reviews__prof">Small Business Owner</p>
              </div>
              <div class="reviews__stars">
                <img
                  src="<?php bloginfo('template_url'); ?>/assets/img/rev-star-5-activ.png"
                  alt=""
                  class="reviews__img" />
                <p>Rated 5.0/5.0 by users</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <p class="reviews__text">
              Porem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
              vulputate libero et velit interdum, ac aliquet odio mattis.
              Class aptent taciti sociosqu ad litora torquent per conubia
              nostra, per inceptos himenaeos. Porem ipsum dolor sit amet,
              consectetur adipiscing elit. Nunc vulputate libero et velit
              interdum, ac aliquet odio mattis. Class aptent taciti sociosqu
              ad litora torquent per conubia nostra, per inceptos himenaeos.
            </p>
            <div class="reviews__info">
              <div class="reviews__user">
                <p class="reviews__name">Jessica M.</p>
                <p class="reviews__prof">Small Business Owner</p>
              </div>
              <div class="reviews__stars">
                <img
                  src="<?php bloginfo('template_url'); ?>/assets/img/rev-star-5-activ.png"
                  alt=""
                  class="reviews__img" />
                <p>Rated 5.0/5.0 by users</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <p class="reviews__text">
              Porem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
              vulputate libero et velit interdum, ac aliquet odio mattis.
              Class aptent taciti sociosqu ad litora torquent per conubia
              nostra, per inceptos himenaeos. Porem ipsum dolor sit amet,
              consectetur adipiscing elit. Nunc vulputate libero et velit
              interdum, ac aliquet odio mattis. Class aptent taciti sociosqu
              ad litora torquent per conubia nostra, per inceptos himenaeos.
            </p>
            <div class="reviews__info">
              <div class="reviews__user">
                <p class="reviews__name">Jessica M.</p>
                <p class="reviews__prof">Small Business Owner</p>
              </div>
              <div class="reviews__stars">
                <img
                  src="<?php bloginfo('template_url'); ?>/assets/img/rev-star-5-activ.png"
                  alt=""
                  class="reviews__img" />
                <p>Rated 5.0/5.0 by users</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <p class="reviews__text">
              Porem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
              vulputate libero et velit interdum, ac aliquet odio mattis.
              Class aptent taciti sociosqu ad litora torquent per conubia
              nostra, per inceptos himenaeos. Porem ipsum dolor sit amet,
              consectetur adipiscing elit. Nunc vulputate libero et velit
              interdum, ac aliquet odio mattis. Class aptent taciti sociosqu
              ad litora torquent per conubia nostra, per inceptos himenaeos.
            </p>
            <div class="reviews__info">
              <div class="reviews__user">
                <p class="reviews__name">Jessica M.</p>
                <p class="reviews__prof">Small Business Owner</p>
              </div>
              <div class="reviews__stars">
                <img
                  src="<?php bloginfo('template_url'); ?>/assets/img/rev-star-5-activ.png"
                  alt=""
                  class="reviews__img" />
                <p>Rated 5.0/5.0 by users</p>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
      <!-- swiper -->
    </div>
  </section>

  <section class="news">
    <div class="news__inner container">
      <div class="news__top">
        <h2 class="news__title h2-title">News</h2>
        <a href="/news" class="news__link">View all
          <svg
            width="11"
            height="11"
            viewBox="0 0 11 11"
            fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
              fill-rule="evenodd"
              clip-rule="evenodd"
              d="M4.94414 0.363329C5.25085 0.0566247 5.74811 0.0566247 6.05482 0.363329L10.6361 4.94463C10.7834 5.09191 10.8661 5.29168 10.8661 5.49997C10.8661 5.70826 10.7834 5.90802 10.6361 6.0553L6.05482 10.6366C5.74811 10.9433 5.25085 10.9433 4.94414 10.6366C4.63744 10.3299 4.63744 9.83264 4.94414 9.52593L8.18474 6.28533H0.918178C0.484433 6.28533 0.132812 5.93371 0.132812 5.49997C0.132812 5.06622 0.484433 4.7146 0.918178 4.7146H8.18474L4.94414 1.474C4.63744 1.1673 4.63744 0.670034 4.94414 0.363329Z"
              fill="#F5F5F5" />
          </svg>
        </a>
      </div>

      <div class="swiper news-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <a href="/news" class="news__links">
              <div class="news__btn">
                <svg class="news__icon">
                  <use xlink:href="#offer-arrow"></use>
                </svg>
              </div>
              <img
                src="<?php bloginfo('template_url'); ?>/assets/img/main-page/new/news-img1.png"
                alt="news-photo"
                class="news__img" />
              <div class="news__info">
                <p class="news__subtitle">Name</p>
                <p class="news__text">
                  Porem ipsum dolor sit amet, consectetur adipiscing elit.
                  Nunc vulputate libero et velit interdum, ac aliquet odio
                  mattis. Class aptent taciti sociosqu ad litora torquent
                  per conubia nostra, per inceptos himenaeos.
                </p>
              </div>
              <div class="news__stats">
                <p class="news__data">06.10.24</p>
                <div class="news__view">
                  <img
                    src="<?php bloginfo('template_url'); ?>/assets/img/main-page/new/news-eye-icon.png"
                    alt=""
                    class="news__eye" />
                  <p class="watch">3243</p>
                </div>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="/news" class="news__links">
              <div class="news__btn">
                <svg class="news__icon">
                  <use xlink:href="#offer-arrow"></use>
                </svg>
              </div>
              <img
                src="<?php bloginfo('template_url'); ?>/assets/img/main-page/new/news-img1.png"
                alt="news-photo"
                class="news__img" />
              <div class="news__info">
                <p class="news__subtitle">Name</p>
                <p class="news__text">
                  Porem ipsum dolor sit amet, consectetur adipiscing elit.
                  Nunc vulputate libero et velit interdum, ac aliquet odio
                  mattis. Class aptent taciti sociosqu ad litora torquent
                  per conubia nostra, per inceptos himenaeos.
                </p>
              </div>
              <div class="news__stats">
                <p class="news__data">06.10.24</p>
                <div class="news__view">
                  <img
                    src="<?php bloginfo('template_url'); ?>/assets/img/main-page/new/news-eye-icon.png"
                    alt=""
                    class="news__eye" />
                  <p class="watch">3243</p>
                </div>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="/news" class="news__links">
              <div class="news__btn">
                <svg class="news__icon">
                  <use xlink:href="#offer-arrow"></use>
                </svg>
              </div>
              <img
                src="<?php bloginfo('template_url'); ?>/assets/img/main-page/new/news-img1.png"
                alt="news-photo"
                class="news__img" />
              <div class="news__info">
                <p class="news__subtitle">Name</p>
                <p class="news__text">
                  Porem ipsum dolor sit amet, consectetur adipiscing elit.
                  Nunc vulputate libero et velit interdum, ac aliquet odio
                  mattis. Class aptent taciti sociosqu ad litora torquent
                  per conubia nostra, per inceptos himenaeos.
                </p>
              </div>
              <div class="news__stats">
                <p class="news__data">06.10.24</p>
                <div class="news__view">
                  <img
                    src="<?php bloginfo('template_url'); ?>/assets/img/main-page/new/news-eye-icon.png"
                    alt=""
                    class="news__eye" />
                  <p class="watch">3243</p>
                </div>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="/news" class="news__links">
              <div class="news__btn">
                <svg class="news__icon">
                  <use xlink:href="#offer-arrow"></use>
                </svg>
              </div>
              <img
                src="<?php bloginfo('template_url'); ?>/assets/img/main-page/new/news-img1.png"
                alt="news-photo"
                class="news__img" />
              <div class="news__info">
                <p class="news__subtitle">Name</p>
                <p class="news__text">
                  Porem ipsum dolor sit amet, consectetur adipiscing elit.
                  Nunc vulputate libero et velit interdum, ac aliquet odio
                  mattis. Class aptent taciti sociosqu ad litora torquent
                  per conubia nostra, per inceptos himenaeos.
                </p>
              </div>
              <div class="news__stats">
                <p class="news__data">06.10.24</p>
                <div class="news__view">
                  <img
                    src="<?php bloginfo('template_url'); ?>/assets/img/main-page/new/news-eye-icon.png"
                    alt=""
                    class="news__eye" />
                  <p class="watch">3243</p>
                </div>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="/news" class="news__links">
              <div class="news__btn">
                <svg class="news__icon">
                  <use xlink:href="#offer-arrow"></use>
                </svg>
              </div>
              <img
                src="<?php bloginfo('template_url'); ?>/assets/img/main-page/new/news-img1.png"
                alt="news-photo"
                class="news__img" />
              <div class="news__info">
                <p class="news__subtitle">Name</p>
                <p class="news__text">
                  Porem ipsum dolor sit amet, consectetur adipiscing elit.
                  Nunc vulputate libero et velit interdum, ac aliquet odio
                  mattis. Class aptent taciti sociosqu ad litora torquent
                  per conubia nostra, per inceptos himenaeos.
                </p>
              </div>
              <div class="news__stats">
                <p class="news__data">06.10.24</p>
                <div class="news__view">
                  <img
                    src="<?php bloginfo('template_url'); ?>/assets/img/main-page/new/news-eye-icon.png"
                    alt=""
                    class="news__eye" />
                  <p class="watch">3243</p>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="slider__btn container">
          <div class="slider-prev">
            <svg
              width="17"
              height="17"
              viewBox="0 0 17 17"
              fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M9.37957 16.6357C8.8938 17.1214 8.1062 17.1214 7.62043 16.6357L0.364329 9.37957C0.131053 9.14629 -1.1931e-06 8.8299 -1.16426e-06 8.5C-1.13541e-06 8.1701 0.131053 7.8537 0.364329 7.62043L7.62043 0.364331C8.1062 -0.121444 8.8938 -0.121444 9.37957 0.364332C9.86535 0.850105 9.86535 1.6377 9.37957 2.12347L4.24695 7.2561L15.7561 7.2561C16.4431 7.2561 17 7.81301 17 8.5C17 9.18699 16.4431 9.7439 15.7561 9.7439L4.24695 9.7439L9.37957 14.8765C9.86535 15.3623 9.86535 16.1499 9.37957 16.6357Z"
                fill="#1D9B96" />
            </svg>
          </div>
          <div class="slider-next">
            <svg
              width="17"
              height="17"
              viewBox="0 0 17 17"
              fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M7.62043 0.364331C8.1062 -0.121444 8.8938 -0.121444 9.37957 0.364331L16.6357 7.62043C16.8689 7.8537 17 8.1701 17 8.5C17 8.8299 16.8689 9.14629 16.6357 9.37957L9.37957 16.6357C8.8938 17.1214 8.1062 17.1214 7.62043 16.6357C7.13465 16.1499 7.13465 15.3623 7.62043 14.8765L12.7531 9.7439L1.2439 9.7439C0.556914 9.7439 0 9.18699 0 8.5C0 7.81301 0.556914 7.2561 1.2439 7.2561L12.7531 7.2561L7.62043 2.12347C7.13465 1.6377 7.13465 0.850105 7.62043 0.364331Z"
                fill="#F5F5F5" />
            </svg>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="faq">
    <div class="faq__inner container">
      <div class="faq-top">
        <h2 class="faq__title h2-title">Frequently Asked Questions</h2>
        <p class="faq__subtitle">
          Lorem ipsum dolor sit amet consectetur adipiscing eli mattis sit
          phasellus mollis sit aliquam sit nullam neque ultrices.
        </p>
      </div>
      <div class="faq__wrapper">
        <div class="faq__img">
          <img
            src="<?php bloginfo('template_url'); ?>/assets/img/faq/faq-img1.png"
            alt=""
            class="faq__photo" />
        </div>
        <div class="faq__menu">
          <div class="faq__item">
            <button class="faq__toggle" aria-expanded="false">
              Consultation
              <svg
                width="12"
                height="12"
                viewBox="0 0 12 12"
                fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M10.8618 5.16997C11.1685 5.47668 11.1685 5.97394 10.8618 6.28065L6.28047 10.8619C6.13318 11.0092 5.93342 11.092 5.72513 11.092C5.51684 11.092 5.31708 11.0092 5.16979 10.8619L0.588491 6.28065C0.281787 5.97394 0.281787 5.47668 0.588491 5.16997C0.895196 4.86327 1.39246 4.86327 1.69917 5.16997L4.93976 8.41057L4.93976 1.14401C4.93976 0.710263 5.29138 0.358642 5.72513 0.358642C6.15888 0.358642 6.5105 0.710263 6.5105 1.14401L6.5105 8.41057L9.75109 5.16997C10.0578 4.86327 10.5551 4.86327 10.8618 5.16997Z"
                  fill="#141514" />
              </svg>
            </button>

            <div id="faq1" class="faq__panel">
              <p class="faq__text">
                Аккордеон — это элемент интерфейса, который позволяет
                пользователю раскрывать и скрывать части контента.
              </p>
            </div>
          </div>
          <div class="faq__item">
            <button class="faq__toggle" aria-expanded="false">
              Consultation
              <svg
                viewBox="0 0 12 12"
                fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M10.8618 5.16997C11.1685 5.47668 11.1685 5.97394 10.8618 6.28065L6.28047 10.8619C6.13318 11.0092 5.93342 11.092 5.72513 11.092C5.51684 11.092 5.31708 11.0092 5.16979 10.8619L0.588491 6.28065C0.281787 5.97394 0.281787 5.47668 0.588491 5.16997C0.895196 4.86327 1.39246 4.86327 1.69917 5.16997L4.93976 8.41057L4.93976 1.14401C4.93976 0.710263 5.29138 0.358642 5.72513 0.358642C6.15888 0.358642 6.5105 0.710263 6.5105 1.14401L6.5105 8.41057L9.75109 5.16997C10.0578 4.86327 10.5551 4.86327 10.8618 5.16997Z"
                  fill="#141514" />
              </svg>
            </button>

            <div class="faq__panel">
              <p class="faq__text">
                Аккордеон — это элемент интерфейса, который позволяет
                пользователю раскрывать и скрывать части контента.
              </p>
            </div>
          </div>
          <div class="faq__item">
            <button class="faq__toggle" aria-expanded="false">
              Consultation
              <svg
                viewBox="0 0 12 12"
                fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M10.8618 5.16997C11.1685 5.47668 11.1685 5.97394 10.8618 6.28065L6.28047 10.8619C6.13318 11.0092 5.93342 11.092 5.72513 11.092C5.51684 11.092 5.31708 11.0092 5.16979 10.8619L0.588491 6.28065C0.281787 5.97394 0.281787 5.47668 0.588491 5.16997C0.895196 4.86327 1.39246 4.86327 1.69917 5.16997L4.93976 8.41057L4.93976 1.14401C4.93976 0.710263 5.29138 0.358642 5.72513 0.358642C6.15888 0.358642 6.5105 0.710263 6.5105 1.14401L6.5105 8.41057L9.75109 5.16997C10.0578 4.86327 10.5551 4.86327 10.8618 5.16997Z"
                  fill="#141514" />
              </svg>
            </button>

            <div class="faq__panel">
              <p class="faq__text">
                Аккордеон — это элемент интерфейса, который позволяет
                пользователю раскрывать и скрывать части контента.
              </p>
            </div>
          </div>
          <div class="faq__item">
            <button class="faq__toggle" aria-expanded="false">
              Consultation
              <svg
                width="12"
                height="12"
                viewBox="0 0 12 12"
                fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M10.8618 5.16997C11.1685 5.47668 11.1685 5.97394 10.8618 6.28065L6.28047 10.8619C6.13318 11.0092 5.93342 11.092 5.72513 11.092C5.51684 11.092 5.31708 11.0092 5.16979 10.8619L0.588491 6.28065C0.281787 5.97394 0.281787 5.47668 0.588491 5.16997C0.895196 4.86327 1.39246 4.86327 1.69917 5.16997L4.93976 8.41057L4.93976 1.14401C4.93976 0.710263 5.29138 0.358642 5.72513 0.358642C6.15888 0.358642 6.5105 0.710263 6.5105 1.14401L6.5105 8.41057L9.75109 5.16997C10.0578 4.86327 10.5551 4.86327 10.8618 5.16997Z"
                  fill="#141514" />
              </svg>
            </button>

            <div id="faq1" class="faq__panel">
              <p class="faq__text">
                Аккордеон — это элемент интерфейса, который позволяет
                пользователю раскрывать и скрывать части контента.
              </p>
            </div>
          </div>
          <div class="faq__item">
            <button class="faq__toggle" aria-expanded="false">
              Consultation
              <svg
                viewBox="0 0 12 12"
                fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M10.8618 5.16997C11.1685 5.47668 11.1685 5.97394 10.8618 6.28065L6.28047 10.8619C6.13318 11.0092 5.93342 11.092 5.72513 11.092C5.51684 11.092 5.31708 11.0092 5.16979 10.8619L0.588491 6.28065C0.281787 5.97394 0.281787 5.47668 0.588491 5.16997C0.895196 4.86327 1.39246 4.86327 1.69917 5.16997L4.93976 8.41057L4.93976 1.14401C4.93976 0.710263 5.29138 0.358642 5.72513 0.358642C6.15888 0.358642 6.5105 0.710263 6.5105 1.14401L6.5105 8.41057L9.75109 5.16997C10.0578 4.86327 10.5551 4.86327 10.8618 5.16997Z"
                  fill="#141514" />
              </svg>
            </button>

            <div class="faq__panel">
              <p class="faq__text">
                Аккордеон — это элемент интерфейса, который позволяет
                пользователю раскрывать и скрывать части контента.
              </p>
            </div>
          </div>
          <div class="faq__item">
            <button class="faq__toggle" aria-expanded="false">
              Consultation
              <svg
                viewBox="0 0 12 12"
                fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M10.8618 5.16997C11.1685 5.47668 11.1685 5.97394 10.8618 6.28065L6.28047 10.8619C6.13318 11.0092 5.93342 11.092 5.72513 11.092C5.51684 11.092 5.31708 11.0092 5.16979 10.8619L0.588491 6.28065C0.281787 5.97394 0.281787 5.47668 0.588491 5.16997C0.895196 4.86327 1.39246 4.86327 1.69917 5.16997L4.93976 8.41057L4.93976 1.14401C4.93976 0.710263 5.29138 0.358642 5.72513 0.358642C6.15888 0.358642 6.5105 0.710263 6.5105 1.14401L6.5105 8.41057L9.75109 5.16997C10.0578 4.86327 10.5551 4.86327 10.8618 5.16997Z"
                  fill="#141514" />
              </svg>
            </button>

            <div class="faq__panel">
              <p class="faq__text">
                Аккордеон — это элемент интерфейса, который позволяет
                пользователю раскрывать и скрывать части контента.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="contact" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/img/contact-bg-img.png)">
    <div class="contact__inner container">
      <div class="contact__info">
        <h2 class="contact__title h2-title">Contact Us</h2>
        <p class="contact__text">
          Lorem ipsum dolor sit amet consectetur adipiscing eli mattis sit
          phasellus mollis sit aliquam sit nullam neque ultrices.
        </p>
      </div>
      <div class="contact__wrapper">
        <div class="contact__form">
          <div class="contact__inputs">
            <input type="text" placeholder="Name" class="contact__input input-field" />
            <input type="phone" placeholder="Phone" class="contact__input input-field" />
            <input type="email" placeholder="Email" class="contact__input input-field" />
          </div>
        </div>

        <div class="contact__message">
          <textarea class="contact__textarea textarea-field" placeholder="Message"></textarea>

        </div>

      </div>
      <div class="contact__btn-box">
        <div class="contact__box">
          <a href="mailto:contact@company.com" class="contact__link">contact@company.com</a>
          <a href="tele:+1231231212" class="contact__link">+1231231212</a>
        </div>
        <a href="#" class="contact__send">Send a massage
          <svg viewBox="0 0 11 11" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M4.94414 0.363528C5.25085 0.056823 5.74811 0.056823 6.05482 0.363527L10.6361 4.94483C10.7834 5.09211 10.8661 5.29187 10.8661 5.50017C10.8661 5.70846 10.7834 5.90822 10.6361 6.0555L6.05482 10.6368C5.74811 10.9435 5.25085 10.9435 4.94414 10.6368C4.63744 10.3301 4.63744 9.83283 4.94414 9.52613L8.18474 6.28553H0.918178C0.484433 6.28553 0.132812 5.93391 0.132812 5.50017C0.132812 5.06642 0.484433 4.7148 0.918178 4.7148H8.18474L4.94414 1.4742C4.63744 1.1675 4.63744 0.670232 4.94414 0.363528Z"
              fill="#1D9B96" />
          </svg>
        </a>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>