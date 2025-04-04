<?php get_header();?>
    <!-- fv -->
    <main>
        <div class="home">
            <div class="home-text-wrap inner-1200">
                <h2 class="home_title"><?php the_title(); ?></h2>
                <h3 class="recruit-subtite">私たちのカフェで、一緒に働きませんか？</h3>
                <p class="home-text">
                    当店は、オーガニック食材にこだわり、体にやさしく美味しいフードやドリンクを提供するカフェです。<br>
                    ナチュラルな空間の中で、お客様にくつろぎの時間をお届けしながら、心地よいサービスを大切にしています。<br>
                    今回、より多くのお客様に素敵な時間を過ごしていただけるよう、新しいスタッフを募集することになりました。 </p>
            </div>
            <div class="home--img-wrap">
                <?php the_post_thumbnail ('thumbnail', ['class' => 'home--img'] ); ?>
            </div>
        </div>

        <section class="recruit-text inner-1200">
             <?php the_content(); ?>     
        </section>


    </main>
<?php get_footer(); ?>