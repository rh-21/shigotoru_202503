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

    <section class="about--text inner-1200">
        <p>店内は木の温もりを感じる落ち着いた空間で、ナチュラルな雰囲気に包まれながら、ゆったりとした時間を過ごしていただけます。
            カラダに優しいオーガニックコーヒーやハーブティー、季節の食材を使ったこだわりのスムージー、
            新鮮な野菜をふんだんに使用したサラダやプレートメニューなど、心も満たされる料理をご用意しています。
        </p>
        <p>
            忙しい日常の中で、少しだけ立ち止まり、自然の味わいを楽しむひとときはいかがでしょうか。
            NATURAL KITCHEN で、オーガニックの美味しさと、心地よい時間をお楽しみください。
        </p>
    </section>

    <!-- company -->
    <section id="company" class="company">
        <div class="company--wrap">
            <h3 class="company--title">店舗概要</h3>
            <table class="company--list">
                <tr>
                    <th>店名</th>
                    <td><?php the_field('shop'); ?></td>
                </tr>
                <tr>
                    <th>設立</th>
                    <td><?php the_field('established'); ?></td>
                </tr>
                <tr>
                    <th>代表取締役</th>
                    <td><?php the_field('ceo'); ?></td>
                </tr>
                <tr>
                    <th>所在地</th>
                    <td><?php the_field('place'); ?></td>
                </tr>
                <tr>
                    <th>アクセス</th>
                    <td><?php the_field('access'); ?></td>
                </tr>
                <tr>
                    <th>電話/FAX</th>
                    <td><?php the_field('tel-fax'); ?></td>
                </tr>
                <tr>
                    <th>メール</th>
                    <td><?php the_field('mail'); ?></td>
                </tr>
                <tr>
                    <th>従業員</th>
                    <td><?php the_field('staff'); ?></td>
                </tr>
            </table>
        </div>
    </section>
</main>
<?php get_footer(); ?>