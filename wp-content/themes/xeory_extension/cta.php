<section class="bg-contact relative">
	<div class="box-contact bg-white-alpha center p4vw">
		<header class="mb30">
			<h2 class="smoothText activeTrigger df-jc-center h2 fs5vw">CONTACT</h2>
		</header>
		<p class="lh20 mb20 tac sp-tal"><span class="b"><?= COMPANYNAME ?></span>へのお問い合わせは、<br>お気軽にお電話ください。</p>			
		<div class="mb30 pb30 bb">
			<?php if(wp_is_mobile()): ?>
				<div class="tab-mb10 tac">
					<a href="tel:<?= TEL ?>" class="btn bgleft-main">
						<div class="df df-ai-center df-nowrap"><span class="i-mobile mr5"></span><span>電話する</span></div>
					</a>
				</div>
			<?php else: ?>
				<div class="df df-ai-baseline df-jc-center df-nowrap mb30"><span class="fs2vw i-phone mr5"></span><span class="fs4vw b"><?= TEL ?></span></div>
			<?php endif; ?>
			<div class="df df-jc-center"><span class="label label-big bg-black mr5">営業時間</span><time><?= STARTTIME ?></time>〜<time class="mr10"><?= ENDTIME ?></time></div>
		</div>
	</div>
</section>