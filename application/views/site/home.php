<body>
    <section>

        <div class="container-fluid" style="padding-bottom:16px;background-color:#F38761;margin-top:30px;">

            <div class="col-md-12 col-xs-12 col-sm-12">
                <h2 class="text-center tinta-text">BLINK.ME. PARA VOCÊ QUE, ASSIM COMO NÓS, É APAIXONADA POR BELEZA</h2>
            </div>

            <div class="tinta col-md-3 col-sm-6 col-xs-12">
                <img src="<?php echo base_url('site/img/Cosmetics.jpg') ?>" class="img-responsive circle-img">
                <br>
                <p class="circle-content-p"><a href="<?php echo base_url('site/cosmetics') ?>" onClick="ga('send', 'event', 'Home', 'Cosmetics', '');" 
                class="no_link">COSMETICS</a></p>
                <a href="cosmetics" class="bgTintaHover no_link" id="hoverCosmetics" style="font-size:14px;">
                    <img src="<?php echo base_url('site/img/blink_cosmetics.png') ?>" /><br>
                      Os melhores produtos profissionais para cabelo, maquiagem, perfumes e produtos para o corpo você encontrará aqui! Difícil vai ser escolher entre as mais de 60 marcas disponíveis.
                  </a>
            </div>

            <div class="tinta col-md-3 col-sm-6 col-xs-12">
                <img src="<?php echo base_url('site/img/Atelier.jpg') ?>" class="img-responsive circle-img">
                <br>
                <p class="circle-content-p"><a href="hair" class="no_link" onClick="ga('send', 'event', 'Home', 'Atelier', '');">ATELIER BEAUTY</a></p>
                <a href="hair" class="bgTintaHover no_link" id="hoverAtelier"  style="font-size:14px;">
                    <img src="<?php echo base_url('site/img/blink_atelier.png') ?>" /><br>
                  <p>  É o salão de beleza da Blink.me. Selecionamos e treinamos os melhores profissionais e pensamos com muito carinho em tudo o que você precisa para ter uma experiência inesquecível.
                </p>
                </a>
            </div>

            <div class="tinta col-md-3 col-sm-6 col-xs-12">
                <img src="<?php echo base_url('site/img/LAB.jpg') ?>" class="img-responsive circle-img">
                <br>
                <p class="circle-content-p"><a href="<?php echo base_url('site/lab')?>" onClick="ga('send', 'event', 'Home', 'Lab', '');" class="no_link">LAB</a></p>
                <a href="lab" class="bgTintaHover no_link" id="hoverLab"  style="font-size:14px;">
                    <img src="<?php echo base_url('site/img/blink_lab.png') ?>" /><br>
                      O Lab da blink.me foi criado para você se reunir com quem você quiser e pode ser usado tanto para eventos pessoais quanto corporativos. O momento é seu e você escolhe o que fazer com ele ;-)
                  </a>
            </div>

            <div class="tinta col-md-3 col-sm-6 col-xs-12">
                <img src="<?php echo base_url('site/img/other.jpg') ?>" class="img-responsive circle-img">
                <br>
                <p class="circle-content-p"><a href="https://www.instagram.com/explore/tags/blinkmemoment/" onClick="ga('send', 'event', 'Home', 'Studio', '');" class="no_link">Studio</a></p>
                <a href="https://www.instagram.com/explore/tags/blinkmemoment/" class="bgTintaHover no_link" id="hoverStudio"  style="font-size:14px;">
                    <img src="<?php echo base_url('site/img/blink_studio.png') ?>" /><br>
                  Contamos com um cantinho exclusivo para tirar aquela foto profissional e subir nas redes sociais. Ou, se você for do tipo reservada, só guardar como lembrança.  #blinkmemoment
                </a>
            </div>
        </div>
    </section>

    <section>
        <!--CAROUSEL-->
        <div class="container-fluid" style="padding:0;margin-top:1%;" id="fotos">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item">
                        <img src="<?php echo base_url('site/img/banner1.jpg') ?>" alt="...">
                        <div class="carousel-caption"></div>
                    </div>
                    <div class="item active">
                        <img src="<?php echo base_url('site/img/banner2.jpg') ?>" alt="...">
                        <div class="carousel-caption">
                        </div>
                    </div>

                    <div class="item">
                        <img src="<?php echo base_url('site/img/banner3.jpg') ?>" alt="...">
                        <div class="carousel-caption">
                        </div>
                    </div>

                    <div class="item">
                        <img src="<?php echo base_url('site/img/banner4.jpg') ?>" alt="...">
                        <div class="carousel-caption">
                        </div>
                    </div>

                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>


    <section>

        <div class="container centralize-responsive" id="club" style="background:#F4F4F4;    padding: 20px 20px;">
            <div class="col-md-12">
                <img src="<?php echo base_url('site/img/blinkmeclub.jpg') ?>" class="img-center mobile-auto-width-logo" style="width: 300px;">
                <br><br>
            </div>
            <div class="col-md-3">
                <img src="<?php echo base_url('site/img/circle-thumb.jpg') ?>" class="img-center"
                 style="max-width: 300px;  width: 90%;margin: 0 auto;display: block;">
            </div>

            <div class="col-md-5" style="    color: #888;font-size: 20px;padding: 20px 40px 0px 0px;">
                <p>Toda mulher nasce VIP, mas o blink.me club é a materialização disso. Cada uma das associadas do blink.me club terá acesso a uma área totalmente personalizada do site. Ao se logar nessa área, a associada terá acesso a assuntos específicos
                    sobre o mundo dela.</p>
            </div>

            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12" style="color:#000;">
                        <p style="color:#000;font-size:30px;" id="vantagens">VANTAGENS</p>
                        <dl class="dl-horizontal lista-vertical" style="background: #F2A68B; padding:4%;margin-bottom: 0; width:100%;">

                            <dd><span style="color:#000;">&gt;</span> DESCONTO EM TODA LOJA</dd>
                        </dl>

                        <dl class="dl-horizontal lista-vertical" style="background: #F28761; padding:4%;margin-bottom:0;width:100%;">
                            <dd><span style="color:#000;">&gt;</span> PROMOÇÕES EXCLUSIVAS</dd>
                        </dl>

                        <dl class="dl-horizontal lista-vertical" style="background: #F2A68B; padding:4%;width:100%;">
                            <dd><span style="color:#000;">&gt;</span> SERVIÇOS DE CASHBACK</dd>
                        </dl>

                    </div>
                </div>
            </div>
            <div class="col-md-12 preparese">
               <p class="hidden-xs">Temos um orgulho imenso desse serviço e trabalhamos com a certeza de que você terá <br>sempre vantagens e conforto únicos. Prepare-se!</p>
                <p class="visible-xs">Temos um orgulho imenso desse serviço e trabalhamos com a certeza de que você terá sempre vantagens e conforto únicos. <br> Prepare-se!</p>
            </div>
            <div class="col-md-12 ">
               <a href="club">
                 <button type="button" class="btn btn-default" id="entrar-btn"
                 onClick="ga('send', 'event', 'Menu', 'Club', 'Entrar');ga('send', 'event', 'Home', 'Club', 'Entrar');">Entrar</button>
               </a>
            </div>
        </div>

    </section>


    <section>
      <div class="">
         <div class="col-md-12 col-xs-12" style="background:#FCAF17; height:5px;margin-top:10px;"></div>
      </div>
      <div class="">
         <div class="col-md-12 col-xs-12" style="background:#F15922;height: 15px;"></div>
      </div>


      <div class="container" id="manifesto" style="color: #000;padding: 40px 20px;line-height: 2;
    font-style: italic;
    font-size: 20px;">
      <p  id="manifesto_p">Manifesto blinkme</p>
       <p>Esse é o momento para você que se reiventa todo dia.</p>

       <p>É para você que gosta de um novo visual e arrisca penteados e cortes de cabelo sem medo de errar.</p>

       <p>É para você que sabe o momento de passar um blush e entende o poder de um batom, de um sorriso, de um novo tom.</p>

       <p>É para você que não se intimida com o corre-corre da vida e pinta as unhas toda semana para marcar os momentos com o seu toque colorido.</p>

       <p>É para você que tropeça. Mas ergue a cabeça, passa o seu melhor perfume e dá o passo seguinte, cheia de firmeza.</p>

       <p>É para você que, em nome da elegância, sabendo que não é heroína, entende a beleza de ser mulher.</p>
       <p>Afinal, ser mulher reúne mais que momentos heroicos.</p>

       <p>Reúne os melhores momentos.</p>
       <p>blink.me. O seu momento.</p>
    </div>
    </section>

    <section>
      <div class="container-fluid">
        <div class="row" style="background:#A3A3A3;padding-bottom:4%;">
          <div id="promocao_area">
            <div class="col-md-12">
              <p class="text-center">Cadastre seu email e receba promoções exclusivas</p>
            </div>
            <div class="col-md-12 col-xs-12 text-center">
              <form  action="//blinkme.us14.list-manage.com/subscribe/post?u=17a65ceea9f3b184b2e72f366&amp;id=1d3ebef362"
              class="form-inline"   method="POST" name="mc-embedded-subscribe-form" target="_blank" novalidate="">
              <div class="form-group">
                <input type="text" class="form-control" name="FNAME" placeholder="Nome">
              </div>
              <div class="form-group">
                <input type="email" class="form-control"name="EMAIL" placeholder="Email">
              </div>
              <button type="submit" class="btn btn-default" onClick="ga('send', 'event', 'Home', 'Promocoes-exclusivas', 'Eu-quero')">EU QUERO</button>
            </form>
            </div>
          </div>
        </div>
      </div>

    </section>
</body>

</html>
