<?php 
/**
 * Template Name: 採用情報
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<?php get_header()?>

<div class="contents">

<h2 class="title"><img src="./images/t_recruit.png" alt="採用情報" width="100"></h2>
<div class="sub_main"><img src="./images/sub_recruit.jpg" alt=""></div>

<div class="block">
	<div class="inner">
        <?php the_content(); ?>
	</div>
</div>


<?php get_footer()?>