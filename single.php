<?php
/*
Template Name: ブログ投稿ページ
Template Post Type: blog
*/
?>

<?php get_header();?>
    <!-- fv -->
    <main>
        <?php if(have_posts()) :?>
        <?php while (have_posts()) : the_post() ; ?>
        <article class="blog-detail--head-wrap">
            <div class="blog-detail--head">
                <div class="blog-detail--head-textbox">
                    <time class="blog-detail--day" datetime="<?php the_time( 'Y-m-d' ); ?>"><?php the_time( 'Y/m/d' ); ?></time>
                    <h2 class="blog-detail--head-text"><?php the_title(); ?></h2>
                </div>
            </div>
            <div class="blog-detail--contents">
                <div >
                <?php the_post_thumbnail ('thumbnail', ['class' => 'blog-detail--thumbnail'] ); ?>
                </div>
                <p>
                    <?php the_content(); ?>
                </p>
            </div>
        </article>
        <?php endwhile; ?>
        <?php endif; ?>
        <div class="btn-backpage blog-link">
            <a href="#" onclick="history.back()" return false;>Back page</a>
        </div>
    </main>

      <?php get_footer(); ?>