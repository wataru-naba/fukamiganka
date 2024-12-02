


<!--診療時間-->
<section class="top_banner">
	<div class="al-c m-t-20"><a href="./recruit.html"><img src="./images/info_recruit.png" alt="採用情報"></a></div>
</section><!--/top_banner-->

</div><!--/contents-->

<footer class="footer clearfix">
	<a href="./index.html" class="f_logo"><img src="./images/logo.svg" alt="深見眼科 愛知県豊田市の眼科"></a>
	<div class="copyright"><i class="icon-at"></i> Fukami eye clinic All Right Reserved.<br/><a href="https://fukami-ganka.jp/sitemap.html"> - サイトマップ</a></div>

</footer>

<div class="pagetop"><div class="inner"><i class="icon-up-open-big"></i></div></div>

</div><!--/page-->
</main>

<div class="float-nav mincho">
	<div class="pc767">
		<nav>  
			<a href="#" class="modal-button" data-target="modal-shinryo">診療案内</a>
			<a href="./yoyaku.php">診療予約</a>
		</nav>
	</div>
	<div class="sp767">
		<nav>  
			<a href="#" class="modal-frame-button" data-target="modalFrameShinryo"><img src="./images/spnav01.webp?<?=time()?>"></a>
			<a href="./yoyaku.php"><img src="./images/spnav02.webp?<?=time()?>"></a>
		</nav>
	</div>
</div>

<?php include('./inc/modal.php') ?>

<div class="modal-frame" id="modalFrameDegisuma">
	<div class="modal-frame-close"></div>
</div>
<div class="modal-frame" id="modalFrameShinryo">
	<!--診療時間-->
	<?php include('./inc/sinryo.php')?>
	<div class="modal-frame-close"></div>
</div>

<script src="./js/jquery.easing.1.3.js"></script>
<script src="./js/slick/slick.min.js"></script>
<script src="./js/n.js?<?= time()?>"></script>
<script src="./js/modal.js?<?= time()?>"></script>
<script src="./js/script.noviewport.js?<?= time()?>"></script>