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
                <?php the_post_thumbnail ('thumbnail', ['class' => 'home--img'] ); ?>
            </div>
        </div>


        <!-- point -->
        <section id="hf--point" class="hf--point inner-1200">
            <?php
                    $args = array(
                    // 投稿タイプ
                    'post_type'      => 'healthyfood-item',
                    // 1ページに表示する投稿数
                    'posts_per_page' => 5,
                    );
                    // データの取得
                    $posts = get_posts($args);
                    ?>
            <ul>
                <!-- カウントをするために下記の一文が必要だったらしいけど、なぜ必要なのかわからない -->
                <?php foreach ($posts as $index => $post) : ?>
                <?php setup_postdata($post); ?>
                <li class="hf--point-item">
                    <div class="hf--point-title">
                        <p class="hf--point-num"><?php echo str_pad($index + 1, 2, 0, STR_PAD_LEFT); ?></p>
                        <h4 class="hf--point-maintitle"><?php the_title(); ?></h4>
                    </div>
                    
                <!-- コンテンツにクラスメイがつかない -->
                    <p class="hf--point-text"><?php the_content(); ?></p>
                    <?php the_post_thumbnail ('thumbnail', ['class' => 'hd--point-img'] ); ?>
                </li>
                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
            </ul>
            <p class="hf--text">
                ヘルシーフードを日常的に取り入れることで、健康的な体を維持し、生活の質を向上させることができます。<br>
                無理なく続けられる方法を見つけ、自分に合った健康的な食生活を送りましょう。</p>

        </section>
        <div class="btn-backpage inner-1200"">
            <a href="#" onclick="history.back()" return false;>Back page</a>
        </div>

    </main>

<?php get_footer(); ?>
