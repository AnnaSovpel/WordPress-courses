
<?php get_header(); ?>
  <!--MAIN BANNER AREA START -->
  <div class="banner-area banner-3">
    <div class="overlay dark-overlay"></div>
    <div class="d-table">
      <div class="d-table-cell">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 m-auto text-center col-sm-12 col-md-12">
              <div class="banner-content content-padding">
                <h5 class="subtitle"><?php echo get_post_meta( $post->ID, 'subtitle', true);?></h5>
                <h1 class="banner-title"><?php echo get_post_meta( $post->ID, 'banner-titel', true);?></h1>
                <p>
                  <?php echo get_post_meta( $post->ID, 'banner-description', true);?>
                </p>

                <a href="#" class="btn btn-white btn-circled">Начать сотрудничество</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--MAIN HEADER AREA END -->
  <section class="section-padding"> 
    <div class = "container">
      <?php the_content();?>
    </div>
  </section>
  <!--  ABOUT AREA START  -->
  <!-- PRICE AREA END  -->
  <!--  TESTIMONIAL AREA START  -->
  <section id="testimonial" class="section-padding">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <div class="mb-5">
            <h3 class="mb-2">Клиенты, которые доверяют нам</h3>
            <p>
              Ниже представлены отзывы от клиентов, с которыми<br />
              мы работаем уже несколько лет подряд
            </p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-8 m-auto col-sm-12 col-md-12">
          <div class="carousel slide" id="test-carousel2">
            <div class="carousel-inner">
              <ol class="carousel-indicators">
                <li data-target="#test-carousel2" data-slide-to="0" class="active"></li>
                <li data-target="#test-carousel2" data-slide-to="1"></li>
                <li data-target="#test-carousel2" data-slide-to="2"></li>
              </ol>

              <div class="carousel-item active">
                <div class="row">
                  <div class="col-lg-12 col-sm-12">
                    <div class="testimonial-content style-2">
                      <div class="author-info">
                        <div class="author-img">
                          <img src="images/author/3b.jpg" alt="" class="img-fluid" />
                        </div>
                      </div>

                      <p>
                        <i class="icofont icofont-quote-left"></i>Это отличная платформа для тех, кто хочет начать
                        бизнес, но не может принять правильное решение. Это действительно отличное место для того,
                        чтобы начать свой бизнес правильно! <i class="icofont icofont-quote-right"></i>
                      </p>
                      <div class="author-text">
                        <h5>Рыбаков Виталий</h5>
                        <p>Старший инженер</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row">
                  <div class="col-lg-12 col-sm-12">
                    <div class="testimonial-content style-2">
                      <div class="author-info">
                        <div class="author-img">
                          <img src="images/author/5b.jpg" alt="" class="img-fluid" />
                        </div>
                      </div>

                      <p>
                        <i class="icofont icofont-quote-left"></i>Это отличная платформа для тех, кто хочет начать
                        бизнес, но не может принять правильное решение. Это действительно отличное место для того,
                        чтобы начать свой бизнес правильно! <i class="icofont icofont-quote-right"></i>
                      </p>
                      <div class="author-text">
                        <h5>Вострецов Денис</h5>
                        <p>Маркетолог</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--  ITEM END  -->

              <div class="carousel-item">
                <div class="row">
                  <div class="col-lg-12 col-sm-12">
                    <div class="testimonial-content style-2">
                      <div class="author-info">
                        <div class="author-img">
                          <img src="images/author/3b.jpg" alt="" class="img-fluid" />
                        </div>
                      </div>

                      <p>
                        <i class="icofont icofont-quote-left"></i>Это отличная платформа для тех, кто хочет начать
                        бизнес, но не может принять правильное решение. Это действительно отличное место для того,
                        чтобы начать свой бизнес правильно! <i class="icofont icofont-quote-right"></i>
                      </p>
                      <div class="author-text">
                        <h5>Киренков Алексей</h5>
                        <p>Младший менеджер</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--  ITEM END  -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--  TESTIMONIAL AREA END  -->
  <!--  PARTNER START  -->
  <section class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-sm-6 col-md-3 text-center">
          <img src="images/clients/client01.png" alt="partner" class="img-fluid" />
        </div>
        <div class="col-lg-3 col-sm-6 col-md-3 text-center">
          <img src="images/clients/client06.png" alt="partner" class="img-fluid" />
        </div>
        <div class="col-lg-3 col-sm-6 col-md-3 text-center">
          <img src="images/clients/client04.png" alt="partner" class="img-fluid" />
        </div>
        <div class="col-lg-3 col-sm-6 col-md-3 text-center">
          <img src="images/clients/client05.png" alt="partner" class="img-fluid" />
        </div>
      </div>
    </div>
  </section>
  <!--  PARTNER END  -->
  <!--  BLOG AREA START  -->
  <section id="blog" class="section-padding bg-main">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-sm-12 m-auto">
          <div class="section-heading">
            <h4 class="section-title">Журнал</h4>
            <div class="line"></div>
            <p>
              Мы публикуем в блоге интересные кейсы наших клиентов, возможно, <br />
              вы найдете много полезного для себя и своего бизнеса
            </p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-4 col-sm-6 col-md-4">
          <div class="blog-block">
            <img src="images/blog/blog-1.jpg" alt="" class="img-fluid" />
            <div class="blog-text">
              <h6 class="author-name"><span>Лайфхаки</span>Иван Лазарев</h6>
              <a href="blog-single.html" class="h5 my-2 d-inline-block"> Лучшие способы вовлечь людей в статью </a>
              <p>Вы заметили, что статьи на вашем сайте даже не читают? Это можно легко исправить, вам поможет...</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 col-md-4">
          <div class="blog-block">
            <img src="images/blog/blog-2.jpg" alt="" class="img-fluid" />
            <div class="blog-text">
              <h6 class="author-name"><span>Брендинг</span>Света Ключева</h6>
              <a href="blog-single.html" class="h5 my-2 d-inline-block">
                Как подняться в топ, даже если вы стартовали недавно</a>
              <p>
                Позиционирование. Вот, что нужно для быстрого поднятия сайта в топ, ну и поведенческие факторы,
                конечно, куда без них...
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 col-md-4">
          <div class="blog-block">
            <img src="images/blog/blog-3.jpg" alt="" class="img-fluid" />
            <div class="blog-text">
              <h6 class="author-name"><span>Маркетинг</span>Люда Милова</h6>
              <a href="blog-single.html" class="h5 my-2 d-inline-block"> Как запустить сайт уже завтра? </a>
              <p>
                Даже если ваш сайт еще только в вашей голове или на бумаге, его можно запустить всего за сутки.
                Покажу, как это можно сделать.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--  BLOG AREA END  -->
  <!--  COUNTER AREA START  -->
  <section id="counter" class="section-padding">
    <div class="overlay dark-overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-sm-6 col-md-6">
          <div class="counter-stat">
            <i class="icofont icofont-heart"></i>
            <span class="counter">460</span>
            <h5>счастливых клиентов</h5>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-md-6">
          <div class="counter-stat">
            <i class="icofont icofont-rocket"></i>
            <span class="counter">60</span>
            <h5>выполненных проектов</h5>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-md-6">
          <div class="counter-stat">
            <i class="icofont icofont-hand-power"></i>
            <span class="counter">30</span>
            <h5>людей в команде</h5>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-md-6">
          <div class="counter-stat">
            <i class="icofont icofont-shield-alt"></i>
            <span class="counter">25</span>
            <h5>Проектов в работе</h5>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--  COUNTER AREA END  -->

<?php get_footer(); ?>


