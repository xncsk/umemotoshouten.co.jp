			</div><?php /* .main-content */ ?>
			<footer id="footer" class="footer bg-black relative">
				<div class="wrap pt5vw">
					<div class="df df-jc-between">
						<div class="span-4 mb20">
							<a href="<?php echo home_url(); ?>" class="logo db">
								<figure class="mb10">
									<img src="/img/logo-yoko-nega.svg" alt="<?= COMPANYNAME ?>ロゴ">
								</figure>
							</a>
							<dl class="white">
								<dt><?= COMPANYNAME ?></dt>
								<dd>
									<p><?= ZIPCODE ?>&nbsp;<?= ADDRESS ?></p>
									<div class="df df-ai-center">
										<dl class="fs0 df df-ai-center df-nowrap mr10">
											<dt class="label bg-accent mr5">TEL</dt>
											<dd class="fs16"><?= TEL ?></dd>
										</dl>
										<dl class="fs0 df df-ai-center df-nowrap">
											<dt class="label bg-accent mr5">MOBILE</dt>
											<dd class="fs16"><?= MOBILE ?></dd>
										</dl>
									</div>
								</dd>
							</dl>
						</div>
						<div class="span-8">
							<nav class="mb10">
								<ul class="f-navi df df-jc-end tab-df-jc-center sp-df-jc-start">
									<?php get_template_part('part-gnav') ?>
									<li><a href="/privacy-policy/">プライバシーポリシー</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
				<p class="white tac fs12 pt10 pb10">&copy;<?php echo date('Y'); ?> <?= COMPANYNAME ?></p>
			</footer>
		</div>
	</div>
	<label class="pure-overlay" for="pure-toggle-right" data-overlay="right"></label>
</div>
<div id="page_top"><a href="#"></a></div>
<?php wp_footer(); ?>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha384-vk5WoKIaW/vJyUAd9n/wmopsmNhiy+L2Z+SBxGYnUkunIxVxAv/UtMOhba/xskxh" crossorigin="anonymous"></script>
<?php get_template_part('script_common'); ?>
<?php if(is_page('entry')): ?>
	<script>
		const div = document.querySelector('#mw_wp_form_mw-wp-form-20 form');
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
<?php if(is_home() || is_front_page()): ?>
<script>
	$(document).ready(function() {
		setTimeout(function() {
			$(".js-appear").css("display", "block");
		}, 1000);
	});
</script>
<?php endif; ?>
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