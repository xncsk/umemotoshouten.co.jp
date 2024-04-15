<?php get_header(); ?>
<div id="swiper" class="mv02 l-section">
	<div class="swiper">
		<div class="swiper-wrapper">
			<div class="swiper-slide">
				<div class="slide">
					<picture class="slide-media">
						<source srcset="/img/w3000xh2000-mv1-min.webp" media="(min-width:601px)" type="image/webp">
						<source srcset="/img/w3000xh2000-mv1-min.jpg" media="(min-width:601px)" type="image/jpg">
						<source srcset="/img/w860xh1864-mv1-min.webp" media="(max-width:600px)" type="image/webp">
						<source srcset="/img/w860xh1864-mv1-min.jpg" media="(max-width:600px)" type="image/jpg">
						<img src="/img/w3000xh2000-mv1-min.jpg" alt="<?= COMPANYNAME?>のマンションリフォーム外観">
					</picture>
					<h2 class="slide-title font-noto-serif white text-black-shadow">時代を超えた<br class="pc-dn">デザインと機能性</h2>
					<p class="slide-text white text-black-shadow">こだわりのマンションリノベーション。</p>
				</div>
			</div>
			<div class="swiper-slide">
				<div class="slide">
					<picture class="slide-media">
						<source srcset="/img/w3000xh2000-mv2-min.webp" media="(min-width:601px)" type="image/webp">
						<source srcset="/img/w3000xh2000-mv2-min.jpg" media="(min-width:601px)" type="image/jpg">
						<source srcset="/img/w860xh1864-mv2-min.webp" media="(max-width:600px)" type="image/webp">
						<source srcset="/img/w860xh1864-mv2-min.jpg" media="(max-width:600px)" type="image/jpg">
						<img src="/img/w3000xh2000-mv2-min.jpg" alt="自然との共生">
					</picture>
					<h2 class="slide-title font-noto-serif white text-black-shadow">自然との共生が生む、<br>心地よい暮らし。</h2>
					<p class="slide-text white text-black-shadow">環境に優しい建築素材を使用。</p>
				</div>
			</div>
			<div class="swiper-slide">
				<div class="slide">
					<div class="js-appear dn">
						<?php get_template_part('part-logo-animation'); ?>
					</div>
					<picture class="slide-media">
						<source srcset="/img/w3000xh2000-mv3-min.webp" media="(min-width:601px)" type="image/webp">
						<source srcset="/img/w3000xh2000-mv3-min.jpg" media="(min-width:601px)" type="image/jpg">
						<source srcset="/img/w860xh1864-mv3-min.webp" media="(max-width:600px)" type="image/webp">
						<source srcset="/img/w860xh1864-mv3-min.jpg" media="(max-width:600px)" type="image/jpg">
						<img src="/img/w3000xh2000-mv3-min.jpg" alt="<?= COMPANYNAME?>のマンションリフォーム内観">
					</picture>
					<h2 class="slide-title font-noto-serif black text-white-shadow">マンション<br class="pc-dn">フルリフォーム<br>カンパニー</h2>
					<p class="slide-text black text-white-shadow">マンションリノベーションの<br class="pc-dn">プロが叶える理想の空間。</p>
				</div>
			</div>
		</div>
		
	</div>
</div>
<section class="section">
	<header class="mb5vw wrap">
		<h2 class="smoothText activeTrigger h2 borderLeftTrigger">SERIVCE</h2>
		<p class="gray fade-in fade-in-up"><?= COMPANYNAME ?>は、マンションリフォームやリノベーションを主軸とし、<br class="sp-dn">新たな展開に果敢に挑戦するチャレンジングカンパニーです。</p>
	</header>
	<div class="wrap">
		<div class="respSlider l-section">
			<div class="l-inner">
				<div class="swiper swiper-a">
					<ul class="swiper-wrapper li-service">
						<li class="swiper-slide">
							<figure class="bgLRTrigger mb10"><img src="/img/w800xh600-dinoc-min.jpg" class="bgappearTrigger border is-text-color bw2" alt="ダイノックシート"></figure>
							<dl class="fade-in fade-in-up">
								<dt class="mb5 b tac">ダイノックシート</dt>
								<dd>ダイノックシートは耐久性が高く、さまざまなデザインや色合いが用意されており、お部屋の雰囲気を一新するのに最適です。古くなった壁面の張替えや、デザインの変更をお考えの方にお勧めです。</dd>
							</dl>
						</li>
						<li class="swiper-slide">
							<figure class="bgLRTrigger mb10"><img src="/img/w800xh600-outerwall-min.jpg" class="bgappearTrigger border is-text-color bw2" alt="外壁工事・塗装工事"></figure>
							<dl class="fade-in fade-in-up">
								<dt class="mb5 b tac">外壁工事・塗装工事</dt>
								<dd>外壁は建物を守る重要な要素であり、風雨や紫外線などの外部からの影響を受けやすいため、定期的なメンテナンスが必要です。</dd>
							</dl>
						</li>
						<li class="swiper-slide">
							<figure class="bgLRTrigger mb10"><img src="/img/w800xh600-daiku.jpg" class="bgappearTrigger border is-text-color bw2" alt="大工工事"></figure>
							<dl class="fade-in fade-in-up">
								<dt class="mb5 b tac">大工工事</dt>
								<dd>大工工事は、建物の骨組みや基本的な構造を担う重要な工程です。新たな壁の設置や取り壊し、天井や床の補修など、建物全体の安定性や美観を保つために欠かせない工事です。</dd>
							</dl>
						</li>
						<?php
						/*
						<li class="swiper-slide">
							<figure class="bgLRTrigger mb10"><img src="/img/w800xh600-repair-min.jpg" class="bgappearTrigger border is-text-color bw2" alt="外壁補修"></figure>
							<dl class="fade-in fade-in-up">
								<dt class="mb5 b tac">外壁補修</dt>
								<dd>外壁は建物を保護し、美観を維持する重要な要素ですが、時間の経過とともに劣化や破損が生じることがあります。</dd>
							</dl>
						</li>
						<li class="swiper-slide">
							<figure class="bgLRTrigger mb10"><img src="/img/w800xh600-tile-min.jpg" class="bgappearTrigger border is-text-color bw2" alt="タイル工事"></figure>
							<dl class="fade-in fade-in-up">
								<dt class="mb5 b tac">タイル工事</dt>
								<dd>壁やタイルは室内外の美観や清潔さに大きな影響を与えますが、時間とともに傷みや汚れが蓄積されることがあります。</dd>
							</dl>
						</li>
						<li class="swiper-slide">
							<figure class="bgLRTrigger mb10"><img src="/img/w800xh600-sealing-min.jpg" class="bgappearTrigger border is-text-color bw2" alt="シーリング工事"></figure>
							<dl class="fade-in fade-in-up">
								<dt class="mb5 b tac">シーリング工事</dt>
								<dd>シーリングは建物の隙間や接合部を密封し、水漏れや風の侵入を防ぐ重要な役割を果たしています。</dd>
							</dl>
						</li>
						<li class="swiper-slide">
							<figure class="bgLRTrigger mb10"><img src="/img/w800xh600-entrance-min.jpg" class="bgappearTrigger border is-text-color bw2" alt="エントランス工事"></figure>
							<dl class="fade-in fade-in-up">
								<dt class="mb5 b tac">エントランス工事</dt>
								<dd>古くなったエントランスのリニューアルや、セキュリティの強化、アクセシビリティの向上など、様々なニーズに対応しています。</dd>
							</dl>
						</li>
						*/
						?>
						<li class="swiper-slide">
							<figure class="bgLRTrigger mb10"><img src="/img/w800xh600-pipe-min.jpg" class="bgappearTrigger border is-text-color bw2" alt="設備工事"></figure>
							<dl class="fade-in fade-in-up">
								<dt class="mb5 b tac">設備工事</dt>
								<dd>古くなった設備の更新や、新しい設備の取り付け、改修など、お客様のニーズに合わせた工事を行っています。</dd>
							</dl>
						</li>
						<li class="swiper-slide">
							<figure class="bgLRTrigger mb10"><img src="/img/w800xh600-interior-min.jpg" class="bgappearTrigger border is-text-color bw2" alt="内装工事"></figure>
							<dl class="fade-in fade-in-up">
								<dt class="mb5 b tac">内装工事</dt>
								<dd>壁紙の張り替えや床材の交換、キッチンやバスルームの改装など、お客様のご要望に合わせた工事を行っています。</dd>
							</dl>
						</li>
						<li class="swiper-slide">
							<figure class="bgLRTrigger mb10"><img src="/img/w800xh600-denki.jpg" class="bgappearTrigger border is-text-color bw2" alt="電気工事"></figure>
							<dl class="fade-in fade-in-up">
								<dt class="mb5 b tac">電気工事</dt>
								<dd>配線の新設や修理、コンセントやスイッチの交換など、さまざまな電気設備に関する工事を行っています。</dd>
							</dl>
						</li>
						<?php
						/*
						<li class="swiper-slide">
							<figure class="bgLRTrigger mb10"><img src="/img/w800xh600-largeapartment-repair-min.jpg" class="bgappearTrigger border is-text-color bw2" alt="大規模修繕工事"></figure>
							<dl class="fade-in fade-in-up">
								<dt class="mb5 b tac">大規模修繕工事</dt>
								<dd>大規模修繕工事は、外壁や屋根の補修、給排水管の更新、共用部のリニューアルなど、建物全体の状態を改善するための総合的な工事です。</dd>
							</dl>
						</li>
						*/
						?>
					</ul>
					<div class="swiper-button-prev"></div>
					<div class="swiper-button-next"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="wrap bg-logo">
		<p class="pv10vw fs7vw font-noto-serif fw700"><span class="smoothText activeTrigger df-jc-center">仕上がりに</span><span class="smoothText activeTrigger fs10vw df-jc-center">絶対の自信</span></p>
		<div class="read-text tac sp-tal fs20 font-noto-serif mb6vw">
			<p class="fade-in fade-in-up">私たちは、お客様の理想を形にするために<br class="sp-dn">確かな技術と経験を持ったプロフェッショナル集団です。</p>
			<p class="fade-in fade-in-up">お客様とのコミュニケーションを大切にし<br class="sp-dn">細部にまでこだわり抜いたリフォーム工事を提供しています。</p>
			<p class="fade-in fade-in-up">お客様の満足を第一に考え<br class="sp-dn">安心してご依頼いただけるサービスを心がけています。</p>
		</div>
	</div>
</section>
<section class="section ovh bg-recruit">
	<div class="wrap">
		<header class="mb5vw">
			<h2 class="smoothText activeTrigger h2 borderRightTrigger">RECRUIT</h2>
			<p class="tar fade-in fade-in-right"><?= COMPANYNAME ?>の求人情報</p>
		</header>
		<div class="df df-jc-end fade-in fade-in-up">
			<div class="span-5 p4vw bg-white-alpha">
				<div class="read-text mb20">
					<p><?= COMPANYNAME ?>では、一緒に働く仲間を募集しています。マンションリフォームのプロフェッショナルとして、経験豊富な方はもちろん、<span class="marker">意欲的な未経験の方</span>も大歓迎致します。我々は、高品質なサービスとお客様の満足度を追求するために、チームワークを重視しています。安定した環境で成長したい方、やりがいを感じながら働きたい方、ぜひご応募ください。キャリアの一翼を担うチャンスを提供します。</p>
				</div>
				<div class="tar"><a href="/recruit/" class="textlinkstretch fade-in fade-in-left"><span>求人情報</span></a></div>
			</div>
		</div>
	</div>
</section>
<section class="section">
	<div class="wrap">
		<header class="mb5vw">
			<h2 class="smoothText activeTrigger h2 borderLeftTrigger">NEWS</h2>
			<p class="gray fade-in fade-in-left"><?= COMPANYNAME ?>からのお知らせ</p>
		</header>
		<div class="df df-jc-end fade-in fade-in-up">
			<?php
			$information= get_posts( [
				'posts_per_page' => 3,
				'category' => 'news'
			]);
			?>
			<ul class="span-9 li-border is-solid">
				<?php
				foreach( $information as $post ):
					setup_postdata( $post );
					?>
					<li>
						<time datetime="<?php the_time('Y-m-d'); ?>" class="gray mr10"><?php the_time('Y年m月d日'); ?></time><span class="label label-big bg-black mr10">
							<?php
							$category = get_the_category();
							if ( !empty( $category[0]->cat_name ) ){
								echo $category[0]->cat_name;
							}
						?></span><br class="pc-dn"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</li>
					<?php
				endforeach;
				wp_reset_postdata();
				?>
			</ul>
		</div>
	</div>
</section>
<?php get_template_part('cta') ?>
<?php get_footer(); ?>
