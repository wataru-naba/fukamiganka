<?php get_header()?>


<div class="contents">

<div class="sub_main"><img src="../images/sub_news.jpg"></div>

<?php
	$offset = $_GET["post"];
	$arg = array(
		'offset'=>$offset,
		'posts_per_page'=>7,
		'cat' => '-3');
	$the_query = new WP_Query($arg);
	$count = 0;
?>

<div class="block block_news" id="posts">
    <div class="inner">
		<h2 class="t_sub mincho">お知らせ一覧</h2>
		<div class="news">
             <ul class="list_news clearfix">
             <?php if($the_query->have_posts()): while($the_query->have_posts()): $the_query->the_post(); ?>
             <li><a href="<?php the_permalink()?>"><span><?php echo get_the_date( 'Y.m.d' ); ?></span><p><?php the_title(); ?></p></a></li>
             <?php endwhile; endif; ?>
             </ul>
        </div>
        <?php
        $count_posts = wp_count_posts();
        $posts = $count_posts->publish;
        ?>
        <div class="paging">
            <?php if($offset >= 7):?>
				<a href="<?php  bloginfo('url')?>?post=<?php echo $offset-7?>#posts" class="b_link nolink"><i class="icon-angle-double-left"></i>前の7件</a>
			<?php endif;?>
			
            <?php if($posts > $offset+7):?>
				<a href="<?php  bloginfo('url')?>?post=<?php echo $offset+7?>#posts" class="b_link nolink">次の7件<i class="icon-angle-double-right"></i></a>
				<?php else:?>
					<a class=""></a>
            <?php endif;?>
        </div>
    </div>
</div>

<!--診療時間-->
<div class="block block_info">
	<div class="info">
		<div>
			<h2 class="t_top"><img src="../images/t_info.png" alt="診療時間" width="126" class="imgfix"></h2>
		</div>
		<div>
			<img src="../images/tel.png" alt="0565-34-1155" width="147" class="tel_img imgfix">
		</div>
		<div>
			<div class="consultation">
				<div class="hour">
					診療時間<br/>
					9：30〜<br/>12：30
				</div>
				<dl>
					<dt>曜日</dt>
					<dd>月</dd>
					<dd>火</dd>
					<dd>水</dd>
					<dd>木</dd>
					<dd>金</dd>
					<dd>土</dd>
					
					<dt>診療</dt>
					<dd>○<br/>2診<br/>★</dd>
					<dd>○</dd>
					<dd>○<br/>2診<br/>★</dd>
					<dd>○<br/>2診</dd>
					<dd>○<br/>2診</dd>
					<dd>○<br/>2診</dd>
					
					<dt>担当</dt>
					<dd>院長<br/>副院長</dd>
					<dd>院長</dd>
					<dd>院長<br/>副院長</dd>
					<dd>院長<br/>副院長</dd>
					<dd>院長<br/>副院長</dd>
					<dd>院長<br/>副院長</dd>
				</dl>
			</div>

			<div class="consultation">
				<div class="hour">
					診療時間<br/>
					15：30〜<br/>18：30
				</div>
				<dl>
					<dt>曜日</dt>
					<dd>月</dd>
					<dd>火</dd>
					<dd>水</dd>
					<dd>木</dd>
					<dd>金</dd>
					<dd>土</dd>
					
					<dt>診療</dt>
					<dd>○</dd>
					<dd>-</dd>
					<dd>○</dd>
					<dd>○</dd>
					<dd>○</dd>
					<dd>-</dd>
					
					<dt>担当</dt>
					<dd>院長</dd>
					<dd>-</dd>
					<dd>院長</dd>
					<dd>副院長</dd>
					<dd>院長</dd>
					<dd>-</dd>
				</dl>
			</div>
			

			<p class="shinryo_mes">
			2診：2診制です。<br/>
			★手術日のため、2診は11：30まで。<br/>
			休診日：火曜午後・土曜午後・日曜日・祝日・年末年始<br/>
			疾患の内容により、同日にすべての検査が行えない場合があります。<br/>
			ご不明な場合はお問合せ下さい
			</p>
			<a href="../yoyaku.html" class="b_yoyaku">診療の予約をする</a>
		</div>
	</div>
</div>

</div><!--/contents-->

<?php get_footer()?>