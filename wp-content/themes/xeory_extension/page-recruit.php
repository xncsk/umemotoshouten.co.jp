<?php
/**
 * Template Name:求人情報
 */
get_header();
?>
<div id="content" class="content">
	<section class="box-mv-recruit">
		<header class="text-mv-recruit su-color">
			<h1 class="font-noto-serif mb3vw lh12"><span class="fs5vw">ハンパないっ！</span><br><span class="fs5vw">この</span><span class="fs10vw ls2vw">達成感。</span></h1>
			<p class="font-noto-serif fs2vw sp-dn">この仕事の達成感を味わえるのは、<?= COMPANYNAME ?>！</p>
		</header>
	</section>
	<section class="wrap">
		<div class="breadcrumb-box mb20 mt10">
			<ol class="breadcrumb breadcrumb-global" itemscope itemtype="http://schema.org/BreadcrumbList">
				<?php if(function_exists('bcn_display')){
					bcn_display_list();
				}?>
			</ol>
		</div>
	</section>
	<article id="main" role="main" itemprop="mainContentOfPage" class="mb10vw">
		<section class="section font-noto-serif bg-matsuri activeTrigger">
			<header class="vertical-text center mb10vw">
				<h2 class="ws-nowrap fade-in fade-in-up"><span class="fs6vw">仕事</span><span class="fs5vw">は</span><span class="fs6vw">祭り！</span></h2>
			</header>
			<div class="tac lh3 fs2vw">
				<p>私たちは、仕事を祭りのように、<br>活気と情熱にあふれた時間と捉えています。</p>
				<p>新しいプロジェクトはまるでお祭りの準備のよう。<br>チーム全体で協力し、一丸となって素晴らしい出来事を創り出す。</p>
				<p>そして、完成したプロジェクトをお披露目する時は、<br>まるでお祭りのクライマックスのような喜びが広がります。</p>
				<p>仕事を通じて、新しい出会いや感動を経験し、成長していく。<br>それが当社の仕事の楽しみ方です。</p>
			</div>
		</section>
		<section class="section bg-gray">
			<header class="wrap mb5vw">
				<h2 class="smoothText activeTrigger borderLeftTrigger h2">求める人物像</h2>
				<p class="gray fade-in fade-in-left">Ideal candidate profile</p>
			</header>
			<div class="relative">
				<div class="left-content">
					<ul class="read-text font-noto-serif">
						<li class="df mb3vw">
							<div class="mr10"><?php get_template_part('svg-check') ?></div>
							<dl>
								<dt class="fs3vw b lh1 mb10">熱意を持って仕事に取り組める方</dt>
								<dd>情熱と責任感を持ち、常に向上心を持って仕事に取り組む方</dd>
							</dl>
						</li>
						<li class="df mb3vw">
							<div class="mr10"><?php get_template_part('svg-check') ?></div>
							<dl>
								<dt class="fs3vw b lh1 mb10">責任感を持って取り組める方</dt>
								<dd>確かな責任感を持ち、仕事に真摯に向き合う方</dd>
							</dl>
						</li>
						<li class="df">
							<div class="mr10"><?php get_template_part('svg-check') ?></div>
							<dl>
								<dt class="fs3vw b lh1 mb10">常に向上心を持ち、成長を求める方</dt>
								<dd>自己成長を大切にし、常に進化し続ける方</dd>
							</dl>
						</li>
						<!-- <li class="fade-in fade-in-up"><span class="i-checkmark-hand main-color mr5"></span><span class="b">新しいアイデアや提案を積極的に出せる方</span></li> -->
						<!-- <li class="fade-in fade-in-up"><span class="i-checkmark-hand main-color mr5"></span><span class="b">顧客とのコミュニケーションが円滑に行える方</span></li> -->
					</ul>
				</div>
				<div class="right-out">
					<div class="fade-in fade-in-right m3 sp-m0">
						<figure class="tac box-shadow">
							<img src="/img/w1600xh1200-recruit.jpg" alt="<?= COMPANYNAME ?>求人">
							<?php
							/*
							<picture>
								<source srcset="/img/w1500xh1000-recruit-min.webp" type="image/webp">
								<img src="/img/w3000xh1500-recruit.jpg" alt="<?= COMPANYNAME ?>求人">
							</picture>
							*/
							?>
						</figure>
					</div>
				</div>
			</div>
		</section>
		<section class="section">
			<p class="font-noto-serif tac fw700 mb10vw mt10vw fade-in fade-in-down"><span class="main-color fs6vw">スキル</span><span class="fs5vw">を活かし、<br>さらなる</span><span class="main-color fs6vw">飛躍</span><span class="fs5vw">を。</span></p>
			<div class="wrap">
				<header class="mb5vw">
					<h2 class="smoothText activeTrigger h2 borderLeftTrigger">募集要項</h2>
					<p class="fade-in fade-in-left gray">Job Description</p>
				</header>
				<table class="table table-responsive-tr-block mb3vw">
					<tbody>
						<tr>
							<th class="span-4 tab-span-4">募集職種</th>
							<td>施工管理、多能工</td>
						</tr>
						<tr>
							<th>雇用形態</th>
							<td>正社員</td>
						</tr>
						<tr>
							<th>業務内容</th>
							<td>
								<p>首都圏界隈の中古マンションのリフォーム・リノベーション工事の施工管理業務をご担当いただきます。</p>
								<p>現場を発注者の立場で巡回して、工事の進捗管理や品質のチェックを主にご担当いただきます。</p>
								<p>時間外も平均で5時間～15時間となっておりますので、ワークライフバランスを取りながら就業できます。</p>
							</td>
						</tr>
						<tr>
							<th>具体的な仕事内容</th>
							<td>
								<ul>
									<li>・物件の現地調査、事前調査</li>
									<li>・マンションのオーナーへの提案業務</li>
									<li>・竣工時の室内チェック</li>
									<li>・各種事務処理等</li>
									<li>・内勤：外勤＝4：6</li>
									<li>・平均残業時間：5～15時間程度／月</li>
								</ul>
							</td>
						</tr>
						<tr>
							<th>採用人数</th>
							<td>若干名</td>
						</tr>
						<tr>
							<th>応募資格</th>
							<td>18歳～50歳まで（40歳までは未経験でも可）<br>※未経験者も大歓迎！（経験者優遇）<br>普通自動車免許（AT限定可）</td>
						</tr>
						<tr>
							<th>給与</th>
							<td>
								<p>経験者：月給300,000円〜（＋出来高）<br>未経験者：月給200,000円〜</p>
								<p>※試用期間3ヶ月あり（同条件）</p>
							</td>
						</tr>
						<tr>
							<th>勤務地</th>
							<td>都内近郊及び埼玉、千葉、神奈川など（施工現場によります）</td>
						</tr>
						<tr>
							<th>勤務時間</th>
							<td><?= STARTTIME ?>～<?= ENDTIME ?>（休憩1時間）7.5時間勤務</td>
						</tr>
						<tr>
							<th>休日・休暇</th>
							<td>日曜、その他希望日（応相談）</td>
						</tr>
						<tr>
							<th>福利厚生</th>
							<td>
								<ul>
									<li>・交通費支給</li>
									<li>・昇給あり</li>
									<li>・賞与年1回</li>
									<li>・社会保険あり</li>
									<li>・残業手当、休日手当あり</li>
									<li>・資格習得支援制度あり</li>
								</ul>
							</td>
						</tr>
						<tr>
							<th>応募方法</th>
							<td>下記『求人エントリー』からご応募ください。</td>
						</tr>
					</tbody>
				</table>
				<div class="tac">
					<a href="/recruit/entry/" class="btn btnarrow is-main">
						<div class="df df-ai-center"><span class="i-envelope mr5"></span><span>求人エントリー</span></div>
					</a>
				</div>
			</div>
		</section>
	</article>
</div>
<?php get_footer(); ?>