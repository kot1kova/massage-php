var swiper = new Swiper('.services-slider', {
	slidesPerView: 4,
	spaceBetween: 24,
	loop: true,
	breakpoints: {
		0: {
			slidesPerView: 1,
			// spaceBetween: 20,
		},

		375: {
			slidesPerView: 1,
			// spaceBetween: 20,
		},

		640: {
			slidesPerView: 2,
			//   spaceBetween: 20,
		},

		768: {
			slidesPerView: 3,
			//   spaceBetween: 40,
		},

		1024: {
			slidesPerView: 3,
			spaceBetween: 24,
		},
		1260: {
			slidesPerView: 4,
			spaceBetween: 24,
		},
	},

	navigation: {
		nextEl: '.slider-next',
		prevEl: '.slider-prev',
	},
})

var swiper = new Swiper('.reviews-slider', {
	slidesPerView: 3,
	spaceBetween: 0,
	loop: true,
	centeredSlides: true,

	breakpoints: {
		0: {
			slidesPerView: 1,
		},
		375: {
			slidesPerView: 1,
		},
		640: {
			slidesPerView: 2,
		},
		768: {
			slidesPerView: 3,
		},
		1024: {
			slidesPerView: 3,
			spaceBetween: 0,
		},
		1260: {
			slidesPerView: 3,
			spaceBetween: 0,
		},
	},
	navigation: {
		nextEl: '.slider-next',
		prevEl: '.slider-prev',
	},
	pagination: {
		el: '.swiper-pagination',
		clickable: true,
	},
})

var swiper = new Swiper('.news-slider', {
	slidesPerView: 3,
	spaceBetween: 24,
	loop: true,
	breakpoints: {
		0: {
			slidesPerView: 1,
			// spaceBetween: 20,
		},

		375: {
			slidesPerView: 1,
			// spaceBetween: 20,
		},

		640: {
			slidesPerView: 2,
			//   spaceBetween: 20,
		},

		768: {
			slidesPerView: 3,
			//   spaceBetween: 40,
		},

		1024: {
			slidesPerView: 3,
			spaceBetween: 24,
		},
	},
	navigation: {
		nextEl: '.slider-next',
		prevEl: '.slider-prev',
	},
})

var swiper = new Swiper('.prices-slider', {
	slidesPerView: 4,
	spaceBetween: 24,
	loop: true,
	breakpoints: {
		0: {
			slidesPerView: 1,
			// spaceBetween: 20,
		},

		375: {
			slidesPerView: 2,
			// spaceBetween: 20,
		},

		640: {
			slidesPerView: 3,
			//   spaceBetween: 20,
		},

		768: {
			slidesPerView: 3,
			//   spaceBetween: 40,
		},

		1024: {
			slidesPerView: 4,
			spaceBetween: 24,
		},
	},

	navigation: {
		nextEl: '.slider-next',
		prevEl: '.slider-prev',
	},
})

var swiper = new Swiper('.team-slider', {
	slidesPerView: 4,
	spaceBetween: 24,
	loop: true,
	breakpoints: {
		0: {
			slidesPerView: 1,
			// spaceBetween: 20,
		},

		375: {
			slidesPerView: 1,
			// spaceBetween: 20,
		},

		640: {
			slidesPerView: 2,
			//   spaceBetween: 20,
		},

		768: {
			slidesPerView: 3,
			//   spaceBetween: 40,
		},

		1024: {
			slidesPerView: 4,
			spaceBetween: 24,
		},
	},
	navigation: {
		nextEl: '.slider-next',
		prevEl: '.slider-prev',
	},
})

document.querySelectorAll('.faq__toggle').forEach(button => {
	button.addEventListener('click', () => {
		const panel = button.nextElementSibling
		const isOpen = panel.classList.toggle('open')

		button.setAttribute('aria-expanded', isOpen ? 'true' : 'false')

		button.classList.toggle('active', isOpen)
	})
})

document.querySelectorAll('.price__toggle').forEach(button => {
	button.addEventListener('click', () => {
		const panel = button.nextElementSibling
		const isOpen = panel.classList.toggle('open')

		button.setAttribute('aria-expanded', isOpen ? 'true' : 'false')

		button.classList.toggle('active', isOpen)
	})
})

document
	.querySelector('.header__toggle')
	.addEventListener('click', function () {
		document.querySelector('.header__menu').classList.toggle('active')
		this.classList.toggle('active')
	})
