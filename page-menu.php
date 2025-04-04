<?php get_header();?>
    <!-- fv -->
    <main>
        <div class="home">
            <div class="home-text-wrap inner-1200">
                <h2 class="home_title"><?php the_title(); ?></h2>
                <p class="home-text">
                    <?php the_content(); ?>
                </p>
            </div>
            <div class="home--img-wrap">
                <img class="home--img" src="<?php echo get_template_directory_uri(); ?>/img/menu-kv.jpg" alt="">
            </div>
        </div>

        <!-- point -->
        <section id="menu--list" class="menu--list inner-1200">
            <ul>
                <?php
                    $args = array(
                    // 投稿タイプ
                    'post_type'      => 'menu-item',
                    // 1ページに表示する投稿数
                    'posts_per_page' => 5,
                    );
                    // データの取得
                    $posts = get_posts($args);
                    ?>
                    
                <?php foreach ($posts as $post) : ?>
                <?php setup_postdata($post); ?>
                    <li class="menu--list-item">
                        <?php the_post_thumbnail ('thumbnail', ['class' => 'menu--item-img'] ); ?>
                        <div class="menu--list-title">
                            <h4 class="menu--list-maintitle"><?php the_title(); ?></h4>
                            <p class="menu--list-price"><?php echo '¥' . post_custom('price'); ?></p>
                        </div>
                        <p class="menu--list-text">
                            <?php the_content(); ?>                    
                        </p>
                    </li>
                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
            </ul>
        </section>

    </main>

      <?php get_footer(); ?>