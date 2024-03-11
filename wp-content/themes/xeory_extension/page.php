<?php get_header(); ?>
<div id="content" class="content">
	<div class="wrap">
		<div class="breadcrumb-box mb20">
			<ol class="breadcrumb breadcrumb-global" itemscope itemtype="http://schema.org/BreadcrumbList">
				<?php if(function_exists('bcn_display')){
					bcn_display_list();
				}?>
			</ol>
		</div>
		<div id="main" <?php bzb_layout_main(); ?> role="main">
			<article class="mb50">
				<header class="mb3vw wrap">
					<h1 class="smoothText activeTriggerOnload h1 b df-jc-center"><?php the_title() ?></h1>
				</header>
				<section class="mb50">
					<?php
					the_content();
					?>
				</section>
			</article>
		</div>
	</div>
</div>
<?php get_footer(); ?>