<?php

// Template Name: Contact
?>
<?php get_header(); ?>
<main class="contacts-page">
  <section class="maps container">
    <div class="maps__wrapper">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d916459.0574330174!2d7.3650135234632295!3d46.87195303427101!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478c64ef6f596d61%3A0x5c56b5110fcb7b15!2z0KjQstC10LnRhtCw0YDQuNGP!5e0!3m2!1sru!2sua!4v1731344076312!5m2!1sru!2sua"
        width="1200"
        height="479"
        style="border: 0"
        allowfullscreen=""
        loading="lazy"
        class="map-point"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </section>
  <section class="contacts">
    <div class="contacts__inner container">
      <img
        src="<?php bloginfo('template_url'); ?>/assets/img/contacts-img.png"
        alt="photo"
        class="contacts__img" />
      <div class="contacts__wrapper">
        <div class="contacts__address">
          <img
            src="<?php bloginfo('template_url'); ?>/assets/img/contact-icon/room.png"
            alt=""
            class="contacts__map" />
          <p class="contacts__text">
            58 Middle Point Rd, San Francisco, 94124
          </p>
        </div>
        <div class="contacts__contacts">
          <div class="contacts__title">Contact us</div>
          <div class="contacts__item">
            <img
              src="<?php bloginfo('template_url'); ?>/assets/img/contact-icon/Vector-1.png"
              alt=""
              class="contacts__icon" />
            <p class="contacts__info">(123) 456 - 789</p>
          </div>
          <div class="contacts__item">
            <img
              src="<?php bloginfo('template_url'); ?>/assets/img/contact-icon/Vector-2.png"
              alt=""
              class="contacts__icon" />
            <p class="contacts__info">(123) 456 - 789</p>
          </div>
          <div class="contacts__item">
            <img
              src="<?php bloginfo('template_url'); ?>/assets/img/contact-icon/Vector.png"
              alt=""
              class="contacts__icon" />
            <p class="contacts__info">(123) 456 - 789</p>
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