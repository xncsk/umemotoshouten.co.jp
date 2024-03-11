<aside id="side" class="span-3" role="complementary" itemscope="itemscope" itemtype="http://schema.org/WPSideBar">
	<div class="side-inner">
		<h3 class="smoothText activeTriggerOnload fs3vw b">NEWS</h3>
		<?php
		$information= get_posts( [
			'posts_per_page' => 5,
			'category' => 'news'
		]);
		if( $information):
		?>
		<ul class="li-border is-solid">
			<?php
			foreach( $information as $post ):
			setup_postdata( $post );
			?>
			<li>
				<span class="label bg-black"><?php the_time('Y年m月d日'); ?></span><br><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
			</li>
			<?php
			endforeach;
			wp_reset_postdata();
			?>
		</ul>
		<?php else: ?>
		<p>表示できる情報はありません。</p>
		<?php endif; ?>
	</div>
</aside>	