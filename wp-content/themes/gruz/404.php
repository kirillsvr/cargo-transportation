<?php
get_header(); ?>
  <main class="index_page erorr-page">
      <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="info_error">
                <h1>Добро пожаловать на страницу 404!</h1>
                  <p >Вы находитесь здесь, потому что ввели адрес страницы,<br/> которая уже не существует или была перемещена по другому адресу</p>
                  <div class="info_error_btn_wrap">
                    <a href="<?php echo home_url(); ?>" class="yelow_btn ">Перейдите на главную</a>
                  </div>
                </div>
            </div>
          </div>
      </div>
  </main>
<?php get_footer(); ?>
