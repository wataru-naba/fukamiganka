<?php get_header()?>

<div class="contents">

<div class="sub_main"><img src="<?= base_url ()?>images/sub_news.jpg"></div>

<div class="block block_news">
	<div class="inner">
		<h2 class="t_sub mincho">お知らせ</h2>
		<div class="news">
             <?php if(have_posts()): while(have_posts()):the_post(); ?>

			<h3 class="t_news clearfix"><?php the_title(); ?><div class="date"><?php the_time('Y.m.d'); ?></div></h3>
			<p> <?php the_content(); ?></p>
            <?php endwhile; endif; ?>

			<div class="news_back"><a href="<?php bloginfo('url')?>" class="b_link"><i class="icon-angle-double-right"></i>一覧に戻る</a></div>
		</div>
	</div>
</div>


<?php get_footer()?>