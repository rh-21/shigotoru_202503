
<?php get_header();?>
  <!-- fv -->
  <main>
    <div class="kv" id="kv">
      <div class="kv-textbox">
        <h2 class="kv-en">Enjoy organic</h2>
        <p class="kv-jp">オーガニックをお楽しみください。</p>
      </div>
      <div class="scroll">
        <span>Scroll</span>
      </div>
    </div>
    <!-- concept -->
    <section id="concept">
      <div class="inner-960 concept-wap">
        <h3 class="section-title">Concept</h3>
        <p class="concept-text">
          こんにちは！<br>
          私たちは創業当初から、カラダにやさしいコーヒーを提供しています。<br>
          当店のコーヒー、フードは、全てオーガニックの物を使用しています。<br>
          カフェインレスのコーヒーもご用意しておりますので、お気軽にお立ち寄りください。</p>
      </div>
    </section>

    <!-- Healthy Food -->
    <section id="HealthyFood">
      <div class="inner-1200 healthyfood-wap">
        <div class="healthyfood-textbox">
          <h3 class="section-title">Healthy Food</h3>
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/healthy-food.jpg" alt="" class="healthyfood-img sp">
          </div>
          <p class="healthyfood-text">
            私たちのヘルシーフードは、<br>
            厳選されたオーガニック食材を使用し、<br>
            栄養バランスを考慮して調理されています。<br>
            添加物や保存料を一切使用していません。
          </p>
          <div class="btn-viewmore">
            <a class="healthyfood-link" href="<?php echo home_url('/healthyfood'); ?>">View More</a>
          </div>
        </div>
        <div>
          <img src="<?php echo get_template_directory_uri(); ?>/img/healthy-food.jpg" alt="" class="healthyfood-img pc">
        </div>
      </div>
    </section>

    <!-- Menu -->
    <section id="menu">
      <div class=" menu-wap">
        <div class="menu-textbox inner-1200">
          <h3 class="section-title">Menu</h3>
          <p class="menu-text">
            こ当店のコーヒー、フードは、<br>
            全てオーガニックの物を使用しています。<br>
            お子様でも安心してお召し上がりください。
          </p>
          <div class="btn-viewmore pc">
            <a class="menu-link" href="<?php echo home_url('/menu'); ?>">View More</a>
          </div>
        </div>

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

        <div class="menu-slick">
        <?php foreach ($posts as $post) : ?>
        <?php setup_postdata($post); ?>
          <div class="menu-item">
            <?php the_post_thumbnail ('thumbnail', ['class' => 'menu-img'] ); ?>
            <p class="menu-name"><?php the_title(); ?></p>
          </div>
        <?php endforeach; ?>
        <?php wp_reset_postdata(); ?>
      </div>
    </section>

    <!-- about -->
    <section id="about">
      <img class="about-bg" src="<?php echo get_template_directory_uri(); ?>/img/nk-bg.jpg" alt="" >
      <div class="about-wap">
        <div class="about-textbox inner-960">
          <h3 class="section-title about-title">NATURAL KITCHEN</h3>
          <p class="about-text">
            NATURAL KITCHEN は、<br>
            心と体にやさしいオーガニックフードとドリンクを提供するカフェです。
          </p>
          <div class="btn-viewmore-about">
            <a class="about-link slide-btn" href="<?php echo home_url('/about'); ?>"><span>View More</span></a>
          </div>
        </div>
    </section>

    <!--Link -->
    <section id="cta" class="cta inner-1200">
      <div class="blog">
        <a class="blog cta-link" href="<?php echo home_url('/blog'); ?>">
          <img class="blog-img pc" src="<?php echo get_template_directory_uri(); ?>/img/blog-bg_pc.jpg" alt="">
          <img class="blog-img sp" src="<?php echo get_template_directory_uri(); ?>/img/blog-bg_sp.jpg" alt="">
          <div class="cta-textbox">
            <h3 class="cta-title">Blog</h3>
            <p class="cta-text">
              私たちのブログでは、オーガニック食品や健康に関する情報、コーヒーの豆知識などを定期的に更新しています。ぜひチェックしてみてください。
            </p>
          </div>
        </a>
      </div>
      <div class="recruit">
        <a class="cta-link" href="<?php echo home_url('/recruit'); ?>">
          <img class="recruit-img pc" src="<?php echo get_template_directory_uri(); ?>/img/Recruit-bg_pc.jpg" alt="">
          <img class="recruit-img sp" src="<?php echo get_template_directory_uri(); ?>/img/recruit-bg_sp.jpg" alt="">
          <div class="cta-textbox">
            <h3 class="cta-title">Recruit</h3>
            <p class="cta-text">
              私たちのチームに参加しませんか？NATURAL KITCHENでは、オーガニック食品や健康に関心のあるスタッフを募集しています。経験者はもちろん、未経験者も大歓迎です。
            </p>
          </div>
        </a>
      </div>
    </section>

  </main>
  <?php get_footer(); ?>