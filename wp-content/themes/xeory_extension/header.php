<!DOCTYPE HTML>
<html lang="ja" prefix="og: http://ogp.me/ns#">
<head>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-NF9G54SD');</script>
	<!-- End Google Tag Manager -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;500&family=Noto+Serif+JP:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.icomoon.io/53450/various/style.css?edwmg6">
	<?php
	if(is_page('entry')){
		print '<script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>';
	} elseif(is_page('recruit')){
		get_template_part('jobposting');
	}
	wp_head();
	?>
</head>
<body <?php body_class();?> itemschope="itemscope" itemtype="http://schema.org/WebPage">
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NF9G54SD"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<div class="pure-container" data-effect="pure-effect-push">
		<input type="checkbox" id="pure-toggle-right" class="pure-toggle" data-toggle="right"/>
		<label class="pure-toggle-label pc-dn" for="pure-toggle-right" data-toggle-label="right"><span class="pure-toggle-icon"></span><span class="pure-toggle-text">MENU</span></label>
		<nav class="pure-drawer" data-position="right">
			<a href="<?php echo esc_url(home_url()); ?>"><figure class="sp-span-8 center mb30"><img src="/img/logo-yoko-nega.svg" alt="<?= COMPANYNAME ?>ロゴ"></figure></a>
			<div class="gnav-container">
				<div class="mb20">
					<p class="fkds-slash is-white white mb10">お気軽にお電話ください。</p>
					<div class="tac">
						<a href="tel:<?= MOBILE ?>" class="btn bgleft-accent">
							<span class="i-mobile mr5"></span><span>電話する</span>
						</a>
					</div>
				</div>
				<ul class="li-pure-drawer">
					<?php get_template_part('part-gnav'); ?>
					<li><a href="/privacy-policy/">プライバシーポリシー</a></li>
				</ul>
			</div>
		</nav>
		<div class="pure-pusher-container">
			<div class="pure-pusher">
				<header id="header" class="header">
					<div class="wrap df df-ai-center tab-db">
						<div class="df df-ai-center df-nowrap mra tab-df-jc-between">
							<a href="<?php echo home_url(); ?>" class="logo db mr10">
								<figure><img src="/img/logo-yoko-posi.svg" alt="<?= COMPANYNAME ?>ロゴ"></figure>
							</a>
							<p class="fs14 black sp-dn">春日部市の内装のプロが、<br class="tab-dn">あなたの理想をカタチにします。</p>
						</div>
						<nav class="tab-span-12 tab-dn">
							<ul class="g-navi df df-jc-end df-nowrap">
								<?php get_template_part('part-gnav'); ?>
							</ul>
						</nav>
					</div>
				</header>
				<div class="main-content">