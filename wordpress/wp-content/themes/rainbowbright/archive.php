<?php
/*
Template Name: ニュース一覧
*/
?>
<?php get_header(); ?>
  <div class="all-news wf-section">
    <div class="news-title">
      <div class="news-title-en">News</div>
      <div class="news-title-ja">新着情報</div>
    </div>
    <div class="news-content">
      <?php //ブログ一覧を表示する．start ?>

        <?php if (have_posts()) : while (have_posts()) : the_post();?>

          <div class="article">
            <a href="<?php the_permalink();?>" class="blog-item">
              <?php //アイキャッチを表示させる　start ?>
                <div class="blog-item-thumbnail-box">
                  <?php if(has_post_thumbnail()): //投稿にサムネイルがあるか確認?>
                    <img class="blog-item-thumbnail" src="<?php the_post_thumbnail_url(); //アイキャッチ画像のurlを取得?>">
                  <?php endif; ?>
                </div>
              <?php //アイキャッチを表示させる end ?>
                              
              <?php //投稿の内容を表示　start ?>
                <div class="article-content">
                    <div class="article-info">
                      <div class="date">
                        <?php the_date(); //投稿日を表示?>
                      </div>
                    </div>
                    <div class="article-title">
                      <?php the_title(); //タイトルを表示?>
                    </div>
                    <div class="substance">
                      <?php the_excerpt(); //抜粋を表示?>
                    </div>
                </div>
              <?php //投稿の内容を表示　end ?>
            </a>
          </div>

        <?php endwhile; endif; ?>
      <?php //ブログ一覧を表示する　end ?>
    </div>
<?php get_footer(); ?>