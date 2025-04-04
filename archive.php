<?php
/*
Template Name: ブログページ
Template Post Type: blog
*/
?>
<?php get_header();?>
    <!-- fv -->
    <main>
        <div class="home">
            <div class="home-text-wrap inner-1200">
                <h2 class="home_title">Blog</h2>
            </div>
        </div>
        
        <section class="blog--list">
            <ul>
             <?php if ( have_posts() ) : ?>
             <?php while ( have_posts() ) : the_post(); ?>
                <li class="blog--item">
                    <article>
                        <a href="<?php echo get_permalink(); ?>" class="blog--item-link">
                            <div class="blog--item-contents">
                                <div class="blog--item-img">
                                    <?php the_post_thumbnail( ); ?>
                                </div>
                                <!-- <img src="" alt="" class="blog--item-img"> -->
                                <div class="blog--item-textbox">
                                    <time class="blog--item-day" datetime="<?php the_time( 'Y-m-d' ); ?>"><?php the_time( 'Y/m/d' ); ?></time>
                                    <h4 class="blog--item-title"><?php the_title(); ?></h4>
                                    <p class="blog--item-text"><?php echo post_custom('copy'); ?></p>
                                </div>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 39 39"
                                fill="none">
                                <circle cx="19.0904" cy="19.6648" r="18.5541" transform="rotate(-180 19.0904 19.6648)"
                                    stroke="#333333" />
                                <path
                                    d="M22.3711 19.6648L15.8137 27.5261L19.6709 19.6648L15.8137 11.8036L22.3711 19.6648Z"
                                    fill="#333333" />
                            </svg>
                        </a>
                    </article>
                </li>
                <?php endwhile; ?>
                <?php else : ?>
                    <p>まだ投稿はありません。</p>
                <?php endif; ?>
            </ul>
        </section>
    </main>
      <?php get_footer(); ?>