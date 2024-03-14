<?php get_header(); ?>
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
	<article id="main" role="main" itemprop="mainContentOfPage" class="wrap mb10vw">
		<header class="mb5vw">
			<h1 class="smoothText activeTriggerOnload borderExtend border-left-extend h1 b df-jc-center">NEWS</h1>
			<p class="gray fadeUpOnload"><?= COMPANYNAME ?>の最新のお知らせ</p>
		</header>
		<ul class="li-border is-dashed mb5vw">
			<?php
			while ( have_posts() ) : the_post();
				$cf = get_post_meta($post->ID); ?>
				<li class="df df-ai-center">
					<div class="ws-nowrap mr10 sp-mb5"><time datetime="<?php the_time('Y-m-d'); ?>" class=""><?php the_time('Y年m月d日'); ?></time></div>
					<dl>
						<?php
						$category = get_the_category();
							// if( $category ) :
						?>
						<dt class="fs0 sp-mb5"><span class="label label-big bg-black"><?php echo $category[0]->cat_name; ?></span></dt>
						<dd><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd>
					</dl>
				</li>
				<?php
			endwhile;
			?>
			<?php
			?>
		</ul>
		<?php if (function_exists("pagination")) {
			pagination($wp_query->max_num_pages);
		}
		?>
	</article>
</div>
<?php get_footer(); ?>