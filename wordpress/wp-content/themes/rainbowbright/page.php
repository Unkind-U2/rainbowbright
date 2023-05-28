<?php get_header(); ?>
<div class="page-container">
<?php // ループ処理開始 ?>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
<?php the_content(); ?>
<?php // ループ終わり?>
<?php endwhile; endif; ?>
<?php get_footer(); ?>