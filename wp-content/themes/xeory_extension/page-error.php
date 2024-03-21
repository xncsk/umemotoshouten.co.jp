<?php
/**
 * Template Name:エントリーフォーム（エラー）
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
			<header class="mb5vw wrap">
				<h1 class="smoothText activeTriggerOnload borderExtend border-left-extend h1"><?php the_title() ?></h1>
				<p class="gray fadeUpOnload">ERROR</p>
			</header>
			<div class="span-9 center">
				<p class="tac red mb20">エラー箇所を修正してください。</p>
				<?php echo do_shortcode('[mwform_formkey key="16"]'); ?>
			</div>
		</section>
	</article>
</div>
<?php get_footer(); ?>