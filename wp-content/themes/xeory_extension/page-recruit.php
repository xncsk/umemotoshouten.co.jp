<?php
/**
 * Template Name:求人情報
 */
get_header();
?>
<div id="content" class="content">
	<section class="box-mv-recruit">
		<header class="text-mv-recruit">
			<h1 class="font-noto-serif fs5vw sp-fs10vw mb3vw">未経験から始める<br>内装工事のキャリア</h1>
			<p class="fs2vw sp-dn">チームワークを大切にし、成長できる環境を提供します！</p>
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
		<section class="wrap section">
			<header class="mb3vw">
				<h2 class="smoothText activeTrigger h2 b df-jc-center mb10">募集の背景</h2>
				<p class="tac gray fade-in fade-in-up">MESSAGE</p>
			</header>
			<div class="read-text font-noto-serif tac sp-tal fs2vw fade-in fade-in-up">
				<p><?= COMPANYNAME ?>は内装工事において高い技術力と信頼を持つ企業です。</p>
				<p>これまで培ってきたノウハウと経験を活かし、<br>さらなる成長を目指すため、新しい仲間を募集しています。</p>
				<p>チームワークを大切にし、お客様の満足度を最優先に考える当社で、<br><span class="marker b fs3vw">一緒に働く仲間を募集しています。</span></p>
				<p>未経験の方も歓迎しますので、<br>やる気と向上心をお持ちの方はぜひご応募ください。</p>
			</div>
		</section>
		<section class="section bg-gray">
			<div class="wrap">
				<header class="mb3vw">
					<h2 class="smoothText activeTrigger h2 b df-jc-center mb10"><?= SITENAMESHORT ?>で働くメリット</h2>
					<p class="tac gray fade-in fade-in-up">MERIT</p>
				</header>
				<div class="df df-jc-between">
					<dl class="span-6 tab-mb20">
						<dt class="fs3vw b main-color-light mb5vw fade-in fade-in-left">職人としてのキャリアを<br>「3年後」「5年後」と<br>広い視点で考えられる環境を提供</dt>
						<dd class="read-text fade-in fade-in-up">将来の独立も視野に入れた長期的なキャリア支援を行います。<br>内装業界での経験を積みながら、自己成長を促進するための教育プログラムやキャリアパスの構築をサポートし、個々の目標達成に向けて共に歩んでいきます。</dd>
					</dl>
					<div class="span-6">
						<ol class="df df-jc-between mb20">
							<li class="span-3 tab-span-3 tac bg-main-light fs14 pv5 white">未経験</li>
							<li class="span-3 tab-span-3 tac bg-main-light fs14 pv5 white">1年〜2年</li>
							<li class="span-3 tab-span-3 tac bg-main-light fs14 pv5 white">2年〜3年</li>
							<li class="span-3 tab-span-3 tac bg-main-light fs14 pv5 white">3年〜5年</li>
						</ol>
						<figure class="career-step activeTrigger">
							<img src="/img/w800xh460-career-step.svg" alt="キャリアステップ">
						</figure>
						<figure class="fade-in fade-in-right"><img src="/img/w800xh460-career.svg" alt="キャリアステップライン"></figure>
					</div>
				</div>
			</div>
		</section>
		<section class="section bg-gray">
			<div class="wrap">
				<header class="mb3vw">
					<h2 class="smoothText activeTrigger h2 b df-jc-center mb10">求める人材</h2>
					<p class="tac sp-tal"><?= COMPANYNAME ?>では、<span class="b main-color-light">挨拶</span>、<span class="b main-color-light">礼儀</span>、<span class="b main-color-light">笑顔</span>を大切にすることを重要視しています。<br>お客様や同僚との円滑なコミュニケーションを図るために、<br class="sp-dn">以下のような姿勢をお持ちの方を求めています。</p>
				</header>
				<div class="df df-jc-between mb5vw">
					<dl class="span-4 tab-span-4 sp-span-12">
						<dt class="tac b mb10">
							<div class="relative">
								<svg class="svg-circle" width="300" height="300">
									<circle cx="50%" cy="50%" r="150" class="adjustRadius dashed" />
									<circle cx="50%" cy="50%" r="150" class="adjustRadius activeTrigger" />
								</svg>
								<dl class="trbl-center tac span-12">
									<dt class="mb10 gray">GREETING</dt>
									<dd class="b fs5vw font-noto-serif blurTrigger"><span class="main-color-light">挨拶</span></dd>
								</dl>
							</div>
						</dt>
						<dd>私たちは、人と人との繋がりを大切にしています。初対面でも心からの挨拶ができる方、周囲の方々とのコミュニケーションを大切にする方を歓迎します。</dd>
					</dl>
					<dl class="span-4 tab-span-4 sp-span-12">
						<dt class="tac b mb10">
							<div class="relative">
								<svg class="svg-circle" width="300" height="300">
									<circle cx="50%" cy="50%" r="150" class="adjustRadius dashed" />
									<circle cx="50%" cy="50%" r="150" class="adjustRadius activeTrigger" />
								</svg>
								<dl class="trbl-center tac span-12">
									<dt class="mb10 gray">COURTESY</dt>
									<dd class="b fs5vw font-noto-serif blurTrigger"><span class="main-color-light">礼儀</span></dd>
								</dl>
							</div>
						</dt>
						<dd>お客様や仲間との関係は、常に敬意と礼儀をもって接することで築かれます。正しい敬語やマナーを心得、常に謙虚な姿勢で取り組む方をお待ちしています。</dd>
					</dl>
					<dl class="span-4 tab-span-4 sp-span-12">
						<dt class="tac b mb10">
							<div class="relative">
								<svg class="svg-circle" width="300" height="300">
									<circle cx="50%" cy="50%" r="150" class="adjustRadius dashed" />
									<circle cx="50%" cy="50%" r="150" class="adjustRadius activeTrigger" />
								</svg>
								<dl class="trbl-center tac span-12">
									<dt class="mb10 gray">SMILE</dt>
									<dd class="b fs5vw font-noto-serif blurTrigger"><span class="main-color-light">笑顔</span></dd>
								</dl>
							</div>
						</dt>
						<dd>笑顔は、私たちの顔と心を明るくします。困難な状況でも前向きな姿勢で接することができる方、周囲に元気と活力を与える方を求めています。</dd>
					</dl>
				</div>
				<p class="mb3vw tac sp-tal fs2vw">これらの価値観に共感し、日々の業務に活かしていただける方のご応募をお待ちしています。</p>
				<p class="font-noto-serif tac fw700 mb5vw fade-in fade-in-down"><span class="main-color fs6vw">一生物</span><span class="fs5vw">の</span><span class="main-color fs6vw">スキル</span><span class="fs5vw">を。</span></p>
			</div>
		</section>
		<section class="section">
			<div class="wrap">
				<header class="mb3vw">
					<h2 class="smoothText activeTrigger h2 b df-jc-center mb10">募集要項</h2>
				</header>
				<table class="table table-responsive-tr-block mb3vw">
					<tbody>
						<tr>
							<th class="span-3 tab-span-4">募集職種</th>
							<td>内装職人</td>
						</tr>
						<tr>
							<th>業務内容</th>
							<td>
								<dl class="mb20">
									<dt class="b">内装工事の実施</dt>
									<dd>壁、天井、床などの内装工事を行います。材料のカットや取り付け、仕上げ作業を丁寧に行い、お客様の要望に応じた仕上がりを目指します。</dd>
								</dl>
								<dl class="mb20">
									<dt class="b">工事現場の準備</dt>
									<dd>工事現場での作業に必要な準備を行います。材料の搬入や工具の準備、施工計画の確認などを行い、安全かつ効率的な作業をサポートします。</dd>
								</dl>
								<dl class="mb20">
									<dt class="b">現場管理</dt>
									<dd>工事現場における安全管理や品質管理を行います。作業環境を整え、工程管理や進捗管理を行いながら、工事を円滑に進めます。</dd>
								</dl>
								<dl class="mb20">
									<dt class="b">お客様対応</dt>
									<dd>工事中や完成後にお客様とのコミュニケーションを行います。要望や問題点に迅速かつ丁寧に対応し、お客様の満足度向上を図ります。</dd>
								</dl>
								<dl class="mb20">
									<dt class="b">技術向上</dt>
									<dd>内装工事の技術を磨くため、新しい技術や材料の研究、研修会への参加などを積極的に行い、自己成長を目指します。</dd>
								</dl>
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
							<td>8:00 ～ 18:00</td>
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
					<a href="/recruit/entry/" class="btn btn-big bgleft-main">
						<div class="df df-ai-center"><span class="i-envelope mr5"></span><span>求人エントリー</span></div>
					</a>
				</div>
			</div>
		</section>
	</article>
</div>
<?php get_footer(); ?>