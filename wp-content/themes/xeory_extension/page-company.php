<?php
/**
 * Template Name:会社情報
 */
get_header();
?>
<div id="content" class="content">
	<section class="wrap">
		<div class="breadcrumb-box mb10vw mt10">
			<ol class="breadcrumb breadcrumb-global" itemscope itemtype="http://schema.org/BreadcrumbList">
				<?php if(function_exists('bcn_display')){
					bcn_display_list();
				}?>
			</ol>
		</div>
	</section>
	<article id="main" role="main" itemprop="mainContentOfPage">
		<header class="mb5vw wrap">
			<h1 class="smoothText activeTriggerOnload borderExtend border-left-extend h1"><?php the_title() ?></h1>
			<p class="gray fadeUpOnload">COMPANY INFORMATION</p>
		</header>
		<div class="wrap mb5vw">
			<section class="df df-jc-between mb5vw">
				<header class="span-4 mb3vw">
					<div class="sticky-content">
						<h2 class="smoothText activeTrigger ">会社概要</h2>
						<p class="gray fade-in fade-in-up">COMPANY PROFILE</p>
					</div>
				</header>
				<div class="span-8 sp-mb20">
					<table class="table table-border table-responsive-tr-block sp-table-th-main">
						<tbody>
							<tr>
								<th class="span-4 tab-span-5 tal">会社名</th>
								<td><?= COMPANYNAME ?></td>
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
								<th class="tal">TEL & FAX</th>
								<td><?= TEL ?></td>
							</tr>
							<tr>
								<th class="tal">適格請求書発行<br class="sp-dn">事業者登録番号</th>
								<td><?= INVOICE ?></td>
							</tr>
							<tr>
								<th class="tal">事業内容</th>
								<td>
									<ul>
										<li class="df df-ai-center df-nowrap"><span class="i-caret-right mr5"></span><span>電気工事業</span></li>
										<li class="df df-ai-center df-nowrap"><span class="i-caret-right mr5"></span>内装工事業</li>
										<li class="df df-ai-center df-nowrap"><span class="i-caret-right mr5"></span>解体工事業</li>
										<li class="df df-ai-center df-nowrap"><span class="i-caret-right mr5"></span>リフォーム工事業</li>
										<li class="df df-ai-center df-nowrap"><span class="i-caret-right mr5"></span>建築・土木工事の施工請負</li>
										<li class="df df-ai-center df-nowrap"><span class="i-caret-right mr5"></span>建設機械のレンタル</li>
										<li class="df df-ai-center df-nowrap"><span class="i-caret-right mr5"></span>産業廃棄物の収集、運搬及び処理業</li>
										<li class="df df-ai-center df-nowrap"><span class="i-caret-right mr5"></span>不動産の売買、賃貸、管理及びその仲介、代理</li>
										<li class="df df-ai-center df-nowrap"><span class="i-caret-right mr5"></span>ホテル・旅館・簡易宿泊所等の経営</li>
										<?php
										/*
										<li>・マンションのリフォーム工事の企画、設計、施工</li>
										<li>・マンションの内装工事、外装工事、設備工事</li>
										<li>・マンションの耐震補強工事、バリアフリー化工事</li>
										<li>・マンションのリノベーション、リメイク工事</li>
										<li>・マンションの建替え、増改築工事</li>
										<li>・マンションの維持管理サービス、アフターサポート</li>
										<li>・マンションのコンサルティング、アドバイザリーサービス</li>
										<li>・その他、マンションに関連するリフォーム・リノベーションに関する一切の事業</li>
										*/
										?>
									</ul>
								</td>
							</tr>
							<tr>
								<th class="tal">取引金融機関</th>
								<td>みずほ銀行、あおぞら銀行</td>
							</tr>
						</tbody>
					</table>
				</div>
			</section>
			<section class="df df-jc-between">
				<header class="span-4 mb3vw">
					<div class="sticky-content">
						<h2 class="smoothText activeTrigger ">アクセス</h2>
						<p class="gray fade-in fade-in-up">access</p>
					</div>
				</header>
				<div class="span-8">
					<div class="gmap-box">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3231.3442968125223!2d139.6594345755477!3d35.91407177251299!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018c0ef371916df%3A0x1c5c10fd35d56c3e!2z44CSMzM3LTAwMzMg5Z-8546J55yM44GV44GE44Gf44G-5biC6KaL5rK85Yy65b6h6JS177yR77yZ4oiS77yX77yX!5e0!3m2!1sja!2sjp!4v1710477392976!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
				</div>
			</section>
		</div>
		<?php get_template_part('cta'); ?>
	</article>
</div>
<?php get_footer(); ?>