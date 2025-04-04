
  <footer id="footer">
    <div class="footer-contents">
      <div class="footer-com">
        <h4 class="footer-com-name">NATURAL KITCHEN</h4>
        <p class="footer-com-ac">
          〒150-0021 <br>
          東京都渋谷区恵比寿西1-2-3</p>
      </div>
      <div class="footer-link">
        <nav class="footer_nav">
          <ul>
            <li><a class="footer-nav-item" href="<?php echo home_url(); ?>">TOP</a></li>
            <li><a class="footer-nav-item" href="<?php echo home_url('/menu'); ?>">Menu</a></li>
            <li><a class="footer-nav-item" href="<?php echo home_url('/blog'); ?>">Blog</a></li>
            <li><a class="footer-nav-item" href="<?php echo home_url('/healthyfood'); ?>">Healthy Food</a></li>
            <li><a class="footer-nav-item" href="<?php echo home_url('/about'); ?>">About</a></li>
            <li><a class="footer-nav-item" href="<?php echo home_url('/recruit'); ?>">Recruit</a></li>
            <li class="footer-sns">
              <a><img src="<?php echo get_template_directory_uri(); ?>/img/ico-facebook.png" alt="facebook" class="footer-icon"></a>
              <a><img src="<?php echo get_template_directory_uri(); ?>/img/ico-instagram.png" alt="Instagram" class="footer-icon"></a>
              <a><img src="<?php echo get_template_directory_uri(); ?>/img/ico-twitter.png" alt="Twitter" class="footer-icon"></a>
            </li>
          </ul>
        </nav>
        <div class="contct-wrap">
          <button class="footer-contact" href="<?php echo home_url('/contact'); ?>contact"><span>CONTACT</span></button>
        </div>
      </div>
    </div>
    <p class="copylight">Copyright © 2025 NATURAL KITCHEN All Rights Reserved.</p>
  </footer>
    
  
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/slick/slick.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/main.js"></script>
  <?php wp_footer(); ?>
  </body>
  </html>