<?php
/**
 * Template Name:エントリーフォーム（確認）
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
		<section class="wrap section">
			<header class="mb3vw wrap">
				<h1 class="smoothText activeTriggerOnload h1 b df-jc-center"><?php the_title() ?></h1>
				<p class="tac gray fadeUpOnload">CONFIRM</p>
			</header>
			<div class="span-9 center">
				<?php echo do_shortcode('[mwform_formkey key="16"]'); ?>
			</div>
		</section>
	</article>
</div>
<?php get_footer(); ?>