<?php
/**
 * Template Name:会社情報
 */
get_header();
?>
<div id="content" class="content">
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
		<header class="mb3vw wrap">
			<h1 class="smoothText activeTriggerOnload h1 b df-jc-center"><?php the_title() ?></h1>
			<p class="tac gray fadeUpOnload">COMPANY INFORMATION</p>
		</header>
		<section class="mb10vw">
			<div class="bgLRTriggerOnload is-gray">
				<div class="df df-nowrap sp-df-wrap df-jc-between wrap">
					<div class="pc-vertical-text fs2vw font-noto-serif mb50 pc-ws-nowrap mr2p sp-mr0 pt5vw">
						<p>当社は、お客様の快適な空間づくりを支援するため、<br class="tab-dn">誠心誠意をモットーに日々努力してまいりました。</p>
						<p class="sp-mb10">私たちは、内装工事のプロフェッショナルとして、<br class="tab-dn">お客様のご要望を丁寧にお伺いし、<br class="tab-dn">最高のサービスを提供することを使命としています。</p>
						<p class="sp-mb10">私たちのチームは、経験豊富な職人と<br class="tab-dn">熱心なスタッフで構成されており、<br class="tab-dn">お客様のご期待にお応えするために常に努力しています。<br class="tab-dn">お客様のご満足を第一に考え、<br class="tab-dn">高品質な工事を追求することをお約束いたします。</p>
						<p>これからも、私たちが提供するサービスを通じて、<br class="tab-dn">お客様の生活やビジネスに新たな価値を<br class="tab-dn">お届けできるよう努めてまいります。</p>
						<p>何かお困りごとやご質問がございましたら、<br class="tab-dn">いつでもお気軽にご相談ください。<br class="tab-dn">私たちは、お客様のご要望に<br class="tab-dn">お応えすることを喜びとしております。</p>
					</div>
					<div class="span-3 sp-span-9 sp-center pt5vw">
						<figure class="bgRLTriggerOnload bgRLTrigger is-img-2vw mb10 box-shadow"><img src="/img/w1200xh1600-daihyo-min.jpg" alt="<?= COMPANYNAME ?> <?= DAIHYONAME ?>"></figure>
						<h4 class="ttl-accent b fs20 mb20">CEO PROFILE</h4>
						<dl class="df df-ai-center">
							<dt class="b fs20 mr10"><?= DAIHYONAME ?></dt>
							<dd class="gray fs14">HIROSHI YAMAZAKI</dd>
						</dl>
					</div>
				</div>
			</div>
		</section>
		<section class="wrap">
			<header class="mb3vw">
				<h2 class="smoothText activeTrigger fs4vw b df-jc-center">会社概要</h2>
				<p class="tac gray fade-in fade-in-up">COMPANY PROFILE</p>
			</header>
			<div class="df df-jc-between">
				<div class="span-6 sp-mb20">
					<table class="table table-border table-responsive-tr-block sp-table-th-main">
						<tbody>
							<tr>
								<th class="span-4 tab-span-5 tal">運営会社</th>
								<td><?= COMPANYNAME ?></td>
							</tr>
							<tr>
								<th class="tal">英語表記</th>
								<td>CHANGE Co., Ltd.</td>
							</tr>
							<tr>
								<th class="tal">所在地</th>
								<td><?= ZIPCODE ?> <br class="pc-dn"><?= ADDRESS ?></td>
							</tr>
							<tr>
								<th class="tal">代表者</th>
								<td><?= DAIHYONAME ?></td>
							</tr>
							<tr>
								<th class="tal">TEL</th>
								<td><?= TEL ?></td>
							</tr>
							<tr>
								<th class="tal">FAX</th>
								<td><?= FAX ?></td>
							</tr>
							<tr>
								<th class="tal">事業内容</th>
								<td>
									<ul>
										<li>壁紙・クロス張替え</li>
										<li>床・フローリング工事</li>
										<li>塩ビタイル張替え</li>
										<li>人工芝張替え</li>
										<li>ダイノックシート張替え</li>
										<li>内装工事全般</li>
									</ul>
								</td>
							</tr>
							<tr>
								<th class="tal">取引金融機関</th>
								<td>川口信用金庫</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="span-6">
					<div class="gmap-box">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3229.614368320207!2d139.76822607587638!3d35.95640247249969!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018be9daf24f09d%3A0xd1fe1f627b8dc6c8!2z44CSMzQ0LTAwMzIg5Z-8546J55yM5pil5pel6YOo5biC5YKZ5b6M5p2x77yY5LiB55uu77yR77yV4oiS77yV!5e0!3m2!1sja!2sjp!4v1708676669506!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
				</div>
			</div>
		</section>
	</article>
</div>
<?php get_footer(); ?>