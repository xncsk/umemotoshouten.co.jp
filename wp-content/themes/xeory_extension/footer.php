			</div><?php /* .main-content */ ?>
			<footer id="footer" class="footer bg-gray">
				<div class="wrap pv3vw">
					<div class="df df-jc-between">
						<div class="span-8">
							<nav class="mb10">
								<ul class="f-navi df">
									<?php get_template_part('part-gnav') ?>
									<li><a href="/privacy-policy/">プライバシーポリシー</a></li>
								</ul>
							</nav>
						</div>
						<div class="span-4 tab-mb30">
							<figure class="logo-box-footer"><img src="/img/logo-rec-posi.svg" alt="<?= COMPANYNAME ?>ロゴ"></figure>
							<p class="tar"><?= ZIPCODE ?><br><?= ADDRESS ?></p>
							<dl class="fs0 df df-ai-center df-nowrap df-jc-end">
								<dt class="label bg-accent mr5">TEL & FAX</dt>
								<dd class="fs16"><?= TEL ?></dd>
							</dl>
						</div>
					</div>
				</div>
				<p class="white tac fs12 pt10 pb10 bg-black">&copy;<?php echo date('Y'); ?> <?= COMPANYNAME ?></p>
			</footer>
		</div>
	</div>
	<label class="pure-overlay" for="pure-toggle-right" data-overlay="right"></label>
</div>
<div id="page_top"><a href="#"></a></div>
<?php wp_footer(); ?>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha384-vk5WoKIaW/vJyUAd9n/wmopsmNhiy+L2Z+SBxGYnUkunIxVxAv/UtMOhba/xskxh" crossorigin="anonymous"></script>
<?php if(is_home() || is_front_page()): ?>
	<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
	<script>
		const myDelay = 5000;
		let timer;
		const switchAnimation = () => {
			clearTimeout(timer);
			let activeSlide = document.querySelectorAll('.mv02 .swiper-slide[class*=-active]');
			for (let i = 0; i < activeSlide.length; i++) {
				activeSlide[i].classList.remove('anm-finished');
				activeSlide[i].classList.add('anm-started');
			}
			timer =  setTimeout(() => {
				for (let i = 0; i < activeSlide.length; i++) {
					activeSlide[i].classList.remove('anm-started');
					activeSlide[i].classList.add('anm-finished');
				}
			}, myDelay - 1000);
		}
		const finishAnimation = () => {
			let activeSlide = document.querySelectorAll('.mv02 .swiper-slide.anm-started');
			for (let i = 0; i < activeSlide.length; i++) {
				activeSlide[i].classList.remove('anm-started');
				activeSlide[i].classList.add('anm-finished');
			}
		}

		const mySwiper = new Swiper('.mv02 .swiper', {
			effect: 'fade',
			fadeEffect: {
				crossFade: true,
			},
			loop: false,
			loopAdditionalSlides: 1,
			speed: 2000,
			autoplay: {
				delay: myDelay,
				disableOnInteraction: false,
				waitForTransition: false,
				stopOnLastSlide: true,
			},
			followFinger: false,
			pagination: {
				el: '.mv02 .swiper-pagination',
				clickable: true,
			},
			on: {
				slideChange: () => {
					finishAnimation();
				},
				slideChangeTransitionStart: () => {
					switchAnimation();
				},
			}
		});
	</script>
	<script>
		let serviceSwiper = null;
		const mediaQuery = window.matchMedia('(max-width: 600px)');

		const checkBreakpoint = (e) => {
			if (e.matches) {
				initSwiper();
			} else if (serviceSwiper) {
				serviceSwiper.destroy(false, true);
			}
		}

		const initSwiper = () => {
			serviceSwiper = new Swiper('.respSlider .swiper-a', {
				slidesPerView: 1,
				spaceBetween: 10,
				loop: true,
				loopAdditionalSlides: 3,
				speed: 500,
				centeredSlides: true,
			// autoplay: {
			// 	delay: 4000,
			// 	disableOnInteraction: false,
			// },
				grabCursor: true,
				navigation: {
					nextEl: '.respSlider .swiper-a .swiper-button-next',
					prevEl: '.respSlider .swiper-a .swiper-button-prev',
				},
				breakpoints: {
					600: {
						slidesPerView: 1.5,
					}
				},
			});
		};

		mediaQuery.addListener(checkBreakpoint);
		checkBreakpoint(mediaQuery);
	</script>
	<script>
		$(document).ready(function() {
			setTimeout(function() {
				$(".js-appear").css("display", "block");
			}, myDelay * 3);
		});
	</script>
<?php endif; ?>
<?php get_template_part('script_common'); ?>
<?php if(is_page('entry') || is_page('error')): ?>
	<script>
		const div = document.querySelector('#mw_wp_form_mw-wp-form-16 form');
		div.classList.add('h-adr');
	</script>
<?php endif; ?>
<script>
	$(function () {
		$(window).on('scroll', function () {
			if ($(this).scrollTop() >= 10) {
				$('.header').addClass('small-header');
			} else {
				$('.header').removeClass('small-header');
			}
		});
	});
</script>
<?php
/*
<?php if(is_home() || is_front_page()): ?>
<script>
	$(document).ready(function() {
		setTimeout(function() {
			$(".js-appear").css("display", "block");
		}, 1000);
	});
</script>
<?php endif; ?>
*/
?>
<?php if(is_page('recruit')): ?>
<script>
	$(function() {
		var windowHeight = $(window).height();
		var headerheight = $("#header").outerHeight();
		$(".box-mv-recruit").css("height", windowHeight - headerheight);
	});
</script>
<script>
	function adjustRadius() {
		var circles = document.querySelectorAll('.adjustRadius');
		var windowWidth = window.innerWidth;

		circles.forEach(function(circle) {
			if (windowWidth < 600) {
				var radius = Math.min(windowWidth * 0.25, 150);
			} else {
				var radius = Math.min(windowWidth * 0.12, 150);
			}
			circle.setAttribute('r', radius);
		});
	}
	window.addEventListener('resize', adjustRadius);
	adjustRadius();
</script>
<?php endif; ?>
</body>
</html>