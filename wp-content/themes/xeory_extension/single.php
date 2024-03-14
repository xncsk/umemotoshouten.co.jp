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
		<div id="main" role="main" class="df df-jc-between mb10vw">
			<div class="post-inner span-9 center p3vw">
				<?php
				if ( have_posts() ) :
					while ( have_posts() ) : the_post();
						?>
						<?php 
						global $post;
						$cf = get_post_meta($post->ID);
						?>
						<article class="mb50">
							<header class="mb30 fs0">
								<span class="label label-big bg-black mr10">
									<?php
									$category = get_the_category();
									if ( !empty( $category[0]->cat_name ) ){
										echo $category[0]->cat_name;
									}
									?>
								</span>
								<time datetime="<?php the_time('Y-m-d'); ?>" class="fs16 gray"><?php the_time('Y年m月d日'); ?></time>
								<h1 class="fs3vw mt10"><?php the_title(); ?></h1>
							</header>
							<?php if( get_the_post_thumbnail() ) : ?>
								<div class="mb20">
									<?php the_post_thumbnail(array(1200, 630, true)); ?>
								</div>
							<?php endif; ?>
							<section class="mb50 read-text">
								<?php
								the_content();
								?>
							</section>
						</article>
						<?php
					endwhile;
				else :
					?>
					<p>投稿が見つかりません。</p>
					<?php
				endif;
				?>
				<div class="w50p center">
					<div class="df df-jc-between">
						<div><?php previous_post_link('%link', '<span class="i-cheveron-left"></span>' . __('前の記事へ','att') , false); ?></div>
						<div><?php next_post_link('%link',  __('次の記事へ','att') . '<span class="i-cheveron-right"></span>', false); ?></div>		
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php get_template_part('cta') ?>
</div>
<?php get_footer(); ?>