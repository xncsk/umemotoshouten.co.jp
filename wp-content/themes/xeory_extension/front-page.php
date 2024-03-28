<?php get_header(); ?>
<div id="swiper" class="mv02 l-section">
	<div class="swiper">
		<div class="swiper-wrapper">
			<div class="swiper-slide">
				<div class="slide"><?php
					if(wp_is_mobile()){
						echo '<figure class="slide-media"><img src="/img/mv-top-sp1-min.jpg" alt="トップページメインビジュアル1"></figure>';
					} else {
						echo '<figure class="slide-media"><img src="/img/w3000xh2000-mv1.jpg" alt="トップページメインビジュアル1"></figure>';
					}
					?><h2 class="slide-title font-noto-serif white text-black-shadow">時代を超えたデザインと機能性</h2>
					<p class="slide-text white text-black-shadow">こだわりのマンションリノベーション。</p>
				</div>
			</div>
			<div class="swiper-slide">
				<div class="slide"><?php
					if(wp_is_mobile()){
						echo '<figure class="slide-media"><img src="/img/mv-top-sp2-min.jpg" alt="トップページメインビジュアル2"></figure>';
					} else {
						echo '<figure class="slide-media"><img src="/img/w3000xh2000-mv2.jpg" alt="トップページメインビジュアル2"></figure>';
					}
					?>
					<h2 class="slide-title font-noto-serif white text-black-shadow">自然との共生が生む、<br>心地よい暮らし。</h2>
					<p class="slide-text white text-black-shadow">環境に優しい建築素材を使用。</p>
				</div>
			</div>
			<div class="swiper-slide">
				<div class="slide"><?php
					if(wp_is_mobile()){
						echo '<figure class="slide-media"><img src="/img/mv-top-sp3-min.jpg" alt="トップページメインビジュアル3"></figure>';
					} else {
						echo '<figure class="slide-media"><img src="/img/w3000xh2000-mv3.jpg" alt="トップページメインビジュアル3"></figure>';
					}
					?>
					<h2 class="slide-title font-noto-serif black text-white-shadow">マンションフルリフォーム</h2>
					<p class="slide-text black text-white-shadow">マンションリノベーションのプロが叶える理想の空間。</p>
				</div>
			</div>
		</div>
		<div class="swiper-pagination"></div>
	</div>
</div>
<section class="section">
		<header class="mb5vw wrap">
			<h2 class="smoothText activeTrigger h2 borderLeftTrigger">SERIVCE</h2>
			<p class="gray fade-in fade-in-up"><?= COMPANYNAME ?>は、マンションリフォームやリノベーションを主軸とし、<br class="sp-dn">新たな展開に果敢に挑戦するチャレンジングカンパニーです。</p>
		</header>
		<?php
		/*
		<div class="card04 mb30">
			<div class="swiper swiper-a">
				<ul class="swiper-wrapper df li-service">
					<li class="swiper-slide">
						<figure class="bgLRTrigger mb10"><img src="/img/w800xh600-dinoc.jpg" class="bgappearTrigger border is-text-color bw2" alt="ダイノックシート"></figure>
						<dl class="fade-in fade-in-up">
							<dt class="mb5 b tac">ダイノックシート</dt>
							<dd>ダイノックシートは耐久性が高く、さまざまなデザインや色合いが用意されており、お部屋の雰囲気を一新するのに最適です。古くなった壁面の張替えや、デザインの変更をお考えの方にお勧めです。</dd>
						</dl>
					</li>
					<li class="swiper-slide">
						<figure class="bgLRTrigger mb10"><img src="/img/w800xh600-outerwall.jpg" class="bgappearTrigger border is-text-color bw2" alt="外壁工事・塗装工事"></figure>
						<dl class="fade-in fade-in-up">
							<dt class="mb5 b tac">外壁工事・塗装工事</dt>
							<dd>外壁は建物を守る重要な要素であり、風雨や紫外線などの外部からの影響を受けやすいため、定期的なメンテナンスが必要です。</dd>
						</dl>
					</li>
					<li class="swiper-slide">
						<figure class="bgLRTrigger mb10"><img src="/img/w800xh600-window.jpg" class="bgappearTrigger border is-text-color bw2" alt="窓枠工事"></figure>
						<dl class="fade-in fade-in-up">
							<dt class="mb5 b tac">窓枠工事</dt>
							<dd>古くなった窓枠は風や雨の浸入を招き、断熱性や防音性の低下につながる恐れがあります。専門のチームが正確な計測と高品質な素材を使用し、丁寧に窓枠の取り替えや補修を行います。</dd>
						</dl>
					</li>
					<li class="swiper-slide">
						<figure class="bgLRTrigger mb10"><img src="/img/w800xh600-repair.jpg" class="bgappearTrigger border is-text-color bw2" alt="外壁補修"></figure>
						<dl class="fade-in fade-in-up">
							<dt class="mb5 b tac">外壁補修</dt>
							<dd>外壁は建物を保護し、美観を維持する重要な要素ですが、時間の経過とともに劣化や破損が生じることがあります。外壁にひび割れや塗膜の剥がれ、サビなどが見られる場合は、早めの補修が必要です。</dd>
						</dl>
					</li>
					<li class="swiper-slide">
						<figure class="bgLRTrigger mb10"><img src="/img/w800xh600-tile.jpg" class="bgappearTrigger border is-text-color bw2" alt="タイル工事"></figure>
						<dl class="fade-in fade-in-up">
							<dt class="mb5 b tac">タイル工事</dt>
							<dd>壁やタイルは室内外の美観や清潔さに大きな影響を与えますが、時間とともに傷みや汚れが蓄積されることがあります。</dd>
						</dl>
					</li>
					<li class="swiper-slide">
						<figure class="bgLRTrigger mb10"><img src="/img/w800xh600-sealing.jpg" class="bgappearTrigger border is-text-color bw2" alt="シーリング工事"></figure>
						<dl class="fade-in fade-in-up">
							<dt class="mb5 b tac">シーリング工事</dt>
							<dd>シーリングは建物の隙間や接合部を密封し、水漏れや風の侵入を防ぐ重要な役割を果たしています。時間が経つにつれてシーリング材の劣化や剥がれが生じることがありますが、これらの問題は早めの補修が必要です。</dd>
						</dl>
					</li>
					<li class="swiper-slide">
						<figure class="bgLRTrigger mb10"><img src="/img/w800xh600-entrance.jpg" class="bgappearTrigger border is-text-color bw2" alt="エントランス工事"></figure>
						<dl class="fade-in fade-in-up">
							<dt class="mb5 b tac">エントランス工事</dt>
							<dd>古くなったエントランスのリニューアルや、セキュリティの強化、アクセシビリティの向上など、さまざまなニーズに応じた工事を提供しています。</dd>
						</dl>
					</li>
					<li class="swiper-slide">
						<figure class="bgLRTrigger mb10"><img src="/img/w800xh600-pipe.jpg" class="bgappearTrigger border is-text-color bw2" alt="設備工事"></figure>
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
						<figure class="bgLRTrigger mb10"><img src="/img/w800xh600-storage.jpg" class="bgappearTrigger border is-text-color bw2" alt="収納設置"></figure>
						<dl class="fade-in fade-in-up">
							<dt class="mb5 b tac">収納設置</dt>
							<dd>クローゼットや押入れ、キッチンやリビングなど、さまざまな場所に収納スペースを設置いたします。お客様のニーズに合わせたカスタマイズも可能です。</dd>
						</dl>
					</li>
					<li class="swiper-slide">
						<figure class="bgLRTrigger mb10"><img src="/img/w800xh600-largeapartment-repair.jpg" class="bgappearTrigger border is-text-color bw2" alt="大規模修繕工事"></figure>
						<dl class="fade-in fade-in-up">
							<dt class="mb5 b tac">大規模修繕工事</dt>
							<dd>大規模修繕工事は、外壁や屋根の補修、給排水管の更新、共用部のリニューアルなど、建物全体の状態を改善するための総合的な工事です。</dd>
						</dl>
					</li>
				</ul>
			</div>
		</div>
		*/
		?>
		<div class="respSlider l-section mb30">
			<div class="l-inner">
				<div class="swiper swiper-a">
					<ul class="swiper-wrapper li-service">
						<li class="swiper-slide">
							<figure class="bgLRTrigger mb10"><img src="/img/w800xh600-dinoc.jpg" class="bgappearTrigger border is-text-color bw2" alt="ダイノックシート"></figure>
							<dl class="fade-in fade-in-up">
								<dt class="mb5 b tac">ダイノックシート</dt>
								<dd>ダイノックシートは耐久性が高く、さまざまなデザインや色合いが用意されており、お部屋の雰囲気を一新するのに最適です。古くなった壁面の張替えや、デザインの変更をお考えの方にお勧めです。</dd>
							</dl>
						</li>
						<li class="swiper-slide">
							<figure class="bgLRTrigger mb10"><img src="/img/w800xh600-outerwall.jpg" class="bgappearTrigger border is-text-color bw2" alt="外壁工事・塗装工事"></figure>
							<dl class="fade-in fade-in-up">
								<dt class="mb5 b tac">外壁工事・塗装工事</dt>
								<dd>外壁は建物を守る重要な要素であり、風雨や紫外線などの外部からの影響を受けやすいため、定期的なメンテナンスが必要です。</dd>
							</dl>
						</li>
						<li class="swiper-slide">
							<figure class="bgLRTrigger mb10"><img src="/img/w800xh600-window.jpg" class="bgappearTrigger border is-text-color bw2" alt="窓枠工事"></figure>
							<dl class="fade-in fade-in-up">
								<dt class="mb5 b tac">窓枠工事</dt>
								<dd>古くなった窓枠は風や雨の浸入を招き、断熱性や防音性の低下につながる恐れがあります。専門のチームが正確な計測と高品質な素材を使用し、丁寧に窓枠の取り替えや補修を行います。</dd>
							</dl>
						</li>
						<li class="swiper-slide">
							<figure class="bgLRTrigger mb10"><img src="/img/w800xh600-repair.jpg" class="bgappearTrigger border is-text-color bw2" alt="外壁補修"></figure>
							<dl class="fade-in fade-in-up">
								<dt class="mb5 b tac">外壁補修</dt>
								<dd>外壁は建物を保護し、美観を維持する重要な要素ですが、時間の経過とともに劣化や破損が生じることがあります。外壁にひび割れや塗膜の剥がれ、サビなどが見られる場合は、早めの補修が必要です。</dd>
							</dl>
						</li>
						<li class="swiper-slide">
							<figure class="bgLRTrigger mb10"><img src="/img/w800xh600-tile.jpg" class="bgappearTrigger border is-text-color bw2" alt="タイル工事"></figure>
							<dl class="fade-in fade-in-up">
								<dt class="mb5 b tac">タイル工事</dt>
								<dd>壁やタイルは室内外の美観や清潔さに大きな影響を与えますが、時間とともに傷みや汚れが蓄積されることがあります。</dd>
							</dl>
						</li>
						<li class="swiper-slide">
							<figure class="bgLRTrigger mb10"><img src="/img/w800xh600-sealing.jpg" class="bgappearTrigger border is-text-color bw2" alt="シーリング工事"></figure>
							<dl class="fade-in fade-in-up">
								<dt class="mb5 b tac">シーリング工事</dt>
								<dd>シーリングは建物の隙間や接合部を密封し、水漏れや風の侵入を防ぐ重要な役割を果たしています。時間が経つにつれてシーリング材の劣化や剥がれが生じることがありますが、これらの問題は早めの補修が必要です。</dd>
							</dl>
						</li>
						<li class="swiper-slide">
							<figure class="bgLRTrigger mb10"><img src="/img/w800xh600-entrance.jpg" class="bgappearTrigger border is-text-color bw2" alt="エントランス工事"></figure>
							<dl class="fade-in fade-in-up">
								<dt class="mb5 b tac">エントランス工事</dt>
								<dd>古くなったエントランスのリニューアルや、セキュリティの強化、アクセシビリティの向上など、さまざまなニーズに応じた工事を提供しています。</dd>
							</dl>
						</li>
						<li class="swiper-slide">
							<figure class="bgLRTrigger mb10"><img src="/img/w800xh600-pipe.jpg" class="bgappearTrigger border is-text-color bw2" alt="設備工事"></figure>
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
							<figure class="bgLRTrigger mb10"><img src="/img/w800xh600-storage.jpg" class="bgappearTrigger border is-text-color bw2" alt="収納設置"></figure>
							<dl class="fade-in fade-in-up">
								<dt class="mb5 b tac">収納設置</dt>
								<dd>クローゼットや押入れ、キッチンやリビングなど、さまざまな場所に収納スペースを設置いたします。お客様のニーズに合わせたカスタマイズも可能です。</dd>
							</dl>
						</li>
						<li class="swiper-slide">
							<figure class="bgLRTrigger mb10"><img src="/img/w800xh600-largeapartment-repair.jpg" class="bgappearTrigger border is-text-color bw2" alt="大規模修繕工事"></figure>
							<dl class="fade-in fade-in-up">
								<dt class="mb5 b tac">大規模修繕工事</dt>
								<dd>大規模修繕工事は、外壁や屋根の補修、給排水管の更新、共用部のリニューアルなど、建物全体の状態を改善するための総合的な工事です。</dd>
							</dl>
						</li>
					</ul>
					<div class="swiper-button-prev"></div>
					<div class="swiper-button-next"></div>
				</div>
			</div>
		</div>
</section>
<section class="section ovh bg-recruit">
	<div class="wrap">
		<header class="mb5vw">
			<h2 class="smoothText activeTrigger h2 borderRightTrigger">RECRUIT</h2>
			<p class="tar fade-in fade-in-right"><?= COMPANYNAME ?>の求人情報</p>
		</header>
		<div class="">
			<div class="df df-jc-end fade-in fade-in-up">
				<div class="span-5 p4vw bg-white-alpha">
					<div class="read-text mb20">
						<p><?= COMPANYNAME ?>では、一緒に働く仲間を募集しています。マンションリフォームのプロフェッショナルとして、経験豊富な方はもちろん、<span class="marker">意欲的な未経験の方</span>も大歓迎致します。我々は、高品質なサービスとお客様の満足度を追求するために、チームワークを重視しています。安定した環境で成長したい方、やりがいを感じながら働きたい方、ぜひご応募ください。キャリアの一翼を担うチャンスを提供します。</p>
					</div>
					<div class="tar"><a href="/recruit/" class="textlinkstretch fade-in fade-in-left"><span>求人情報</span></a></div>
				</div>
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
