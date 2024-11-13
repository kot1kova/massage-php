<?php

// Template Name: Error
?>
<?php get_header(); ?>
<main class="error-page">
	<section class="error">
		<div class="error__inner container">
			<h3 class="error__title">Oops!</h3>
			<img src="<?php bloginfo('template_url'); ?>/assets/img/error-404.png" alt="error" class="error__img">
			<a href="./index.html" class="error__link">
				<svg fill="#1D9B96" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path
						d="M6.05586 10.6367C5.74915 10.9434 5.25189 10.9434 4.94518 10.6367L0.363882 6.05537C0.216598 5.90808 0.133854 5.70832 0.133854 5.50003C0.133854 5.29174 0.216598 5.09198 0.363883 4.94469L4.94518 0.363393C5.25189 0.0566888 5.74916 0.0566888 6.05586 0.363393C6.36256 0.670098 6.36256 1.16736 6.05586 1.47407L2.81526 4.71467L10.0818 4.71467C10.5156 4.71467 10.8672 5.06629 10.8672 5.50003C10.8672 5.93378 10.5156 6.2854 10.0818 6.2854L2.81526 6.2854L6.05586 9.526C6.36256 9.8327 6.36256 10.33 6.05586 10.6367Z" />
				</svg>Back to main</a>
		</div>
	</section>
</main>
<?php get_footer(); ?>