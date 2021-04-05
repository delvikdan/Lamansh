<?php
/*
Template Name: Front Page

*/


get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">



      <div class="top-slider">


        <div class="container">

          <div class="top-slider-text">
            <?php the_field('acf-1'); ?>
          </div>
          <div class="top-slider-price">
            
              <?php the_field('acf-2'); ?>
            
          </div>


          <div class="loop owl-carousel owl-theme">

            <?php while( have_rows('acf-3') ): the_row(); ?>

              <div class="item" style="background-image: url(<?php the_sub_field('acf-4'); ?>);"> </div>

              <?php endwhile; ?>

          </div>
        </div>
      </div>
      <!-- .top-slider -->


      <section class="s1" id="about">

        <div class="container">



          <div class="rmw">
            <div class="fade-box">
              <h2><?php the_field('s1-1'); ?></h2>

              <?php the_field('s1-2'); ?>
            </div>
          </div>

          <div class="row">


            <?php while( have_rows('s1-3') ): the_row(); ?>
              <div class="col-lg-4 col-md-6 col-sm-6 s1-item">
                <p><img src="<?php the_sub_field('s1-4'); ?>" alt=""></p>
                <p><?php the_sub_field('s1-5'); ?></p>
              </div>
              <?php endwhile; ?>
                
                
          </div>
        </div>
      </section>
      <!-- .s1 -->

      <section class="s2">
        <div class="container">
          <h2><?php the_field('s2-1'); ?></h2>

          <div class="s2-item classic">
            <div class="row">
              <div class="hex-wrapper col-md-5"><img src="/wp-content/themes/lamansh/img/s2-hex.png" alt=""></div>
              <div class="txt-wrapper col-md-6">
                <h3><?php the_field('s2-2'); ?></h3>
                <?php the_field('s2-3'); ?>
                <p class="s2-price"><?php the_field('s2-4'); ?></p>
              </div>
            </div>
          </div>


          <div class="s2-item modern">
            <div class="row">
              <div class="hex-wrapper col-md-5 col-md-push-7"><img src="/wp-content/themes/lamansh/img/s2-hex2.png" alt=""></div>
              <div class="txt-wrapper col-md-offset-1 col-md-6 col-md-pull-5">
                <h3><?php the_field('s2-5'); ?></h3>
                <?php the_field('s2-6'); ?>
                <p class="s2-price"><?php the_field('s2-7'); ?></p>
              </div>

            </div>
          </div>
        </div>


      </section>
      <!-- .s2 -->

      <section class="s3" id="infrastructure">
        <div class="container">
          <div id="customNav" class="owl-nav"></div>
          <div id="customDots" class="owl-dots"></div>
          <div class="row">

            <div class="owl-carousel infra">
              
              <?php while( have_rows('s3-1') ): the_row(); ?>

              <div class="s3-item">
                <div class="col-md-5 leftside">
                  <h2><?php the_sub_field('s3-2'); ?></h2>
                  <?php the_sub_field('s3-3'); ?>

                </div>
                <div class="col-md-6 col-md-offset-1 righside" style="background-image: url(<?php the_sub_field('s3-6'); ?>)">
                  <div class="desc">
                    <?php the_sub_field('s3-5'); ?>
                  </div>

                  <div class="monster">
                    <h3><?php the_sub_field('s3-4'); ?></h3></div>
                </div>
              </div>
              <!-- .s3-item -->
              <?php endwhile; ?>


            </div>
          </div>

        </div>

      </section>
      <!-- .s3 -->


      <section class="s4" id="houses">
        <div class="container">
          <h2><?php the_field('s4-1'); ?></h2>

          <div class="row">

           <?php while( have_rows('s4-2') ): the_row(); ?>
            <div class="col-sm-6 col-md-6 col-lg-4 s4-item">
              <div class="s4-headline">
                <h3><?php the_sub_field('s4-3'); ?></h3>
              </div>
              <div class="s4-house-img" style="background-image: url(<?php the_sub_field('s4-4'); ?>)"></div>
              <?php the_sub_field('s4-5'); ?>
              
              <div class="s4-price"><span><?php the_sub_field('s4-7'); ?></span></div>
            </div>
            <?php endwhile; ?>

           
          </div>
        </div>
      </section>
      <!-- .s4 -->

      <section class="s5" id="land-parcels">
        <div class="container">
          <h2><?php the_field('s5-1'); ?></h2>
          <div class="s5-item">
            <h3><?php the_field('s5-2'); ?></h3>
            <?php the_field('s5-3'); ?>


            <a class="s5-button eModal-1" href="#!">Отправить заявку</a>
            <p class="small"><?php the_field('s5-4'); ?></p>


          </div>
        </div>
      </section>
      <!-- .s5 -->


      <section class="s6" id="contacts">
        <div class="container">
          <h2>Контакты</h2>
          <div class="row">
            <div class="col-md-offset-1 col-md-5 col-sm-6">
              <h3>Офис продаж</h3>
              <p>
                <?php the_field('adress', 'option'); ?>
              </p>

              <p>
                <?php the_field('work-time', 'option'); ?>
              </p>

            </div>
            <div class="col-md-offset-2 col-md-4 col-sm-offset-1 col-sm-5">
              <a class="tel" href="tel:<?php the_field('phone', 'option'); ?>">
                <?php the_field('phone', 'option'); ?>
              </a>
              <a class="tel-button eModal-2" href="#!">Заказать обратный звонок</a>

            </div>

            <div class="clearfix"></div>
            <div class="col-md-offset-1 col-md-9">

              <div class="tabs">
                <h3>Как добраться</h3>
                <ul>
                  <li>на автомобиле</li>
                  <li>на автобусе</li>
                </ul>
                <div class="clearfix"></div>
                <div>
                  <div>
                    <p>От МКАД по Новорижскому шоссе проехать 52 км до указателя «Мансурово-Лужки», съехать с трассы в сторону деревни Алексеевка, 5 км дороги по живописным местам Истринского района, и вы в поселке «Ла-Манш».</p>
                  </div>
                  <div>
                    <p>От ж/д станции Истра (Рижское направление рейсовый автобус №26,№48 до остановки д. Алексеевка. </p>
                  </div>
                </div>
              </div>
              <!-- .tabs -->

            </div>
            <!-- .col-md-9 -->

          </div>
          <!-- .row -->



        </div>
        <!-- .container -->


        <div id="map"></div>
        <a href="#" class="scrollToTop"> </a>
      </section>
      <!-- .s6 -->









    </main>
    <!-- #main -->
  </div>
  <!-- #primary -->

  <?php
get_footer();