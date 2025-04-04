<?php get_header();?>

    <!-- fv -->
    <main>
        <div class="home">
            <div class="home-text-wrap inner-1200">
                <h2 class="home_title">Menu</h2>
                <p class="home-text">
                    健康的で美味しい食事を楽しんでいただくために、当店では栄養バランスにこだわったヘルシーメニューをご用意しております。<br>
                    新鮮な野菜や良質なたんぱく質を使用し、カロリーを抑えつつも満足感のある一皿をお届けします。
                </p>
            </div>
            <div class="home--img-wrap">
                <img class="home--img" src="<?php echo get_template_directory_uri(); ?>/img/menu-kv.jpg" alt="">
            </div>
        </div>

        <!-- point -->
        <section id="menu--list" class="menu--list inner-1200">
            <ul>
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post() ?>
                    <li class="menu--list-item">
                        <?php the_post_thumbnail ('thumbnail', ['class' => 'menu--item-img'] ); ?>
                        <div class="menu--list-title">
                            <h4 class="menu--list-maintitle"><?php the_title(); ?></h4>
                            <p class="menu--list-price"><?php echo '¥' . post_custom('price'); ?><?php ('shop'); ?></p>
                        </div>
                        <p class="menu--list-text">
                            <?php the_content(); ?>                    
                        </p>
                    </li>
                <?php endwhile; ?>
                <?php endif; ?>
            </ul>
        </section>

    </main>

      <?php get_footer(); ?>