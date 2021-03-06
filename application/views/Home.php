﻿
<!DOCTYPE html>
<html>
<head>
  <title>BlinkMe</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Jquery -->
  <script   src="https://code.jquery.com/jquery-3.1.1.js"   integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="   crossorigin="anonymous"></script>
  <!-- Bootstrap -->
  <script type="text/javascript" src="<?php echo base_url('/public/bootstrap/js/bootstrap.js'); ?> " ></script>
  <script type="text/javascript" src="<?php echo base_url('/public/js/apprise.min.js') ?>"></script>
  <link rel="stylesheet" href="<?php echo base_url('/public/css/apprise.min.css') ?>" type="text/css" />

  <script type="text/javascript" src="<?php echo base_url('/public/js/function.js'); ?>"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('/public/bootstrap/css/bootstrap.css'); ?> ">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('/public/css/custom_desktop.css'); ?> ">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('/public/css/custom_mobile.css'); ?> ">
  <!--<link rel="stylesheet" type="text/css" href="<?php echo base_url('/public/css/custom_large.css'); ?> ">-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('/public/fontawsome/css/font-awesome.css'); ?> ">


</head>

<body>&#65279;<script>
$(document).ready(function(){
    $('.ancora').click(function() {
        
        var href = $(this).attr('href');
        $('html, body').animate({
            scrollTop: $( href ).offset().top -110
        }, 500);

        return false;
    });    
});
</script>

<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-86883128-1', 'auto');
      ga('send', 'pageview');

</script>

      
         <!-- Topo -->
         <nav class="navbar navbar-default visible-xs visible-sm">
            <div class="container-fluid col-sm-fluid">
               <!-- Brand and toggle get grouped for better mobile display -->
               <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" style="background-color: #F15922;">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar" style="background-color: #fff;"></span>
                  <span class="icon-bar" style="background-color: #fff;"></span>
                  <span class="icon-bar" style="background-color: #fff;"></span>
                  </button>
                  <a class="navbar-brand" href="#"></a>
               </div>
               <!-- Collect the nav links, forms, and other content for toggling -->
               <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav ">

                     <li><a class="ancora" onClick="ga('send', 'event', 'Menu', 'Cadastre-se', '')" href="#cadastrese" style="color:#fff; font-family: MyRiad; font-size: 19px;">CADASTRE-SE<span class="sr-only">(current)</span></a></li>

                     <li><a class="ancora" onClick="ga('send', 'event', 'Menu', 'Blinkme-Club', '')" href="#club" style="color:#fff; font-family: MyRiad;font-size: 19px;">BLINK ME CLUB</a></li>

                     <li><a class="ancora" onClick="ga('send', 'event', 'Menu', 'Manifesto', '')" href="#manifesto" style="color:#fff; font-family: MyRiad;font-size: 19px;">MANIFESTO</a></li>

                       <li><a class="ancora" onClick="ga('send', 'event', 'Menu', 'Fotos', '')" href="#fotos" style="color:#fff; font-family: MyRiad;font-size: 19px;">FOTOS</a></li>

                     <li><a class="ancora" onClick="ga('send', 'event', 'Menu', 'Contato', '')" href="#contato" style="color:#fff; font-family: MyRiad;font-size: 19px;">CONTATO</a></li>
                  </ul>
               </div>
               <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
         </nav>
         <!-- TOPO VISÍVEL APENAS PARA DESKTOP -->
         <div class="container-fluid" style="    position: fixed;
    width: 100%;
    top: 0px;
    z-index: 999;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.49);">
            <div class="row visible-lg visible-md">
               <div class="col-md-12" id="top01">
               </div>
            </div>
            <div class="row visible-lg visible-md" id="top02">
               <div class="container">
                  <div class="col-md-3">
                     <img class="img-responsive" src="<?php echo base_url('/public/img/logo2.jpg'); ?>">
                  </div>
                  <div class="col-md-9" id="top03-lista" style="text-align: right;">
                     <ul class="list-inline">
                     <li><a class="ancora" onClick="ga('send', 'event', 'Menu', 'Cadastre-se', '')" href="#cadastrese">CADASTRE-SE</a></li>
                        <li><a class="ancora" onClick="ga('send', 'event', 'Menu', 'Blinkme-Club', '')" href="#club">BLINK ME CLUB</a></li>
                        <li><a class="ancora" onClick="ga('send', 'event', 'Menu', 'Manifesto', '')" href="#manifesto">MANIFESTO</a></li>
                        <li><a class="ancora" onClick="ga('send', 'event', 'Menu', 'Fotos', '')" href="#fotos">FOTOS</a></li>
                        <li><a class="ancora" onClick="ga('send', 'event', 'Menu', 'Contato', '')" href="#contato">CONTATO
                        </a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <!-- FIM TOPO VISÍVEL APENAS PARA DESKTOP -->
         <div id="cadastrese" class="hidden-sm hidden-xs" style="clear:both;    height: 100px;"></div>
         
         <!-- BANNER HOME -->
         <div class="container-fluid pos-top" style="">
      
             <div class="col-md-5" id="formParte1" style="height:100%;  padding-right: 0px;">
                    <div class="borderDash">
                        <div class="col-md-12">
                            <div class="row">
                                    <div class="col-md-12">
                                             <img class="img-responsive img-center" id="off_15" src="<?php echo base_url('public/img/15_off.png'); ?> ">
                                    </div>
                            </div>

                            <div class="row">
                                    <div class="col-md-12">
                                            <p class="Reklame-font" style="color:#000;">Vem ai um momento único</p>
                                    </div>
                            </div>
           <form action="//blinkme.us14.list-manage.com/subscribe/post?u=17a65ceea9f3b184b2e72f366&amp;id=1d3ebef362" method="post" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate="" id="subscribe_form">
                            <div class="row select-area">
                               <div class="col-md-6 col-xs-9" style="padding-right: 3%;">
                              <p style="color:black;font-family: MyRiad;text-align: right;">Escolha seu prêmio  :</p>
                                
                              </div>
                              <div class="col-md-6 col-xs-3" style="padding-left: 0;">
                                 <select id="select-form" name="MMERGE3">
                                     <option value="0">Selecione</option>
                                    <option value="Necessaire">Necessaire</option>
                                     <option value="Serviço de mão">Manicure</option>
                                 </select>
                              </div>
                            </div>
                            <div class="row">
                                    <div class="col-md-12">
                                            <input type="text" id="fname" name="FNAME" class="form-control input-class" required="required" placeholder="Nome" style="font-family: MyRiad;font-size: 19px;">
                                    </div>
                            </div>

                            <div class="row">
                                    <div class="col-md-12">
                                             <input type="email" id="input-email" name="EMAIL" class="form-control input-class" required="required" placeholder="Email" >
                                              <input type="submit" onClick="ga('send', 'event', 'Home', 'Cadastre-se', ''); verificarPremioModal();" style="font-family:MyRiad" class="btn btn-default btn-custom" id="btn-cadastrar" value="Cadastre-se">
                                    </div>
                            </div>
          </form>   
                            <div class="row">
                                   
                            </div>
                            <div class="row">
                                    <div class="col-md-12" style="padding-bottom:4%;">
                                            <p id="promocao">Promoção por tempo <u>limitado!</u></p>
                                    </div>
                            </div>

                        </div>
                    </div>
                            
                </div>
                
                <div class="col-md-6 vouncher">
                        <div class="borderDash2">
                            <div style="    padding: 90px 20px;max-width: 440px;margin: 0 auto;">
                                <p style="font-size: 60px;">VOUCHER de desconto</p>
                                <p style="font-family: myRiad;    font-size: 19px;
    padding-right: 30px;">Cadastre-se e&nbsp;ganhe uma necessaire exclusiva&nbsp;blink.me, ou faça suas unhas ficarem
                          incríveis no nosso salão. E mais:&nbsp;aproveite uma semana inteira com 15% de desconto
                          em todos os produtos e serviços!
                          *Promoção válida para os 100 primeiros cadastrados que visitarem nossa loja entre os dias 10 e 16 de dezembro.</p>
                             </div>
                        </div>
                        
                        
                </div>
                
                <div class="col-md-1 hidden-xs hidden-sm" style="height:100%; 
                    position: relative;
                    background: url(<?php echo base_url('public/img/firola_2_2.jpg');?>) no-repeat #f16d3d;
                    background-color: #F0E7D6;
                    padding-left:0px;"> 
                    <div class="borderDash3">
                            
                        </div>
                   
                </div>
         </div>
         
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
      <img src="<?php echo base_url('public/img/banner1.jpg'); ?>" alt="...">
      <div class="carousel-caption"></div>
    </div>
    <div class="item active">
      <img src="<?php echo base_url('public/img/banner2.jpg'); ?>" alt="...">
      <div class="carousel-caption">
      </div>
    </div>
   
    <div class="item">
      <img src="<?php echo base_url('public/img/banner3.jpg'); ?>" alt="...">
      <div class="carousel-caption">
      </div>
    </div>
   
    <div class="item">
      <img src="<?php echo base_url('public/img/banner4.jpg'); ?>" alt="...">
      <div class="carousel-caption">
      </div>
    </div>
   
  </div>

  <!-- Controls -->
  <a class="left carousel-control" onClick="ga('send', 'event', 'Banner', 'Seta-Direita', '')" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" onClick="ga('send', 'event', 'Banner', 'Seta-Esquerda', '')" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
      </div>
      
      <div class="container-fluid" id="pos-carousel">
         
          <p style="       margin: 40px 20px -40px;
    font-size: 27px;    text-align: center;">BLINK.ME. PARA VOCÊ QUE, ASSIM COMO NÓS, É APAIXONADA POR BELEZA.</p>
             <br>             <br>
             <br>

         <!--<div class="row">-->
         <!--   <div class="col-md-12" >-->
         <!--      <img src="https://blinkme-vitormendes97.c9users.io/public/img/circle-content.jpg" id="circle-content"></img>-->
         <!--   </div>-->
         <!--</div>-->
         
         <div class="row">
            <div class="col-md-12">
                <div class="container" style="padding-bottom:30px">
                  <div class="tinta col-md-3 col-sm-6 col-xs-12">
                     <img src="<?php echo base_url('public/img/Cosmetics.jpg'); ?> " class="img-responsive circle-img">
                     <br>
                     <p class="circle-content-p">COSMETICS</p>
                     <div class="bgTintaHover" id="hoverCosmetics">
                         <img src="<?php echo base_url('public/img/blink_cosmetics.png') ?>" /><br>
                         Você encontrará aqui os produtos utilizados pelos profissionais para cabelos, as melhores maquiagens e perfumes, 
                        além de produtos para corpo e rosto. Difícil vai ser escolher entre as mais de 60 marcas disponíveis. 
                        Mas o nosso time estará à disposição para tirar dúvidas, orientar e ajudar no momento de compra.</div>
                  </div>
                  
                  <div class="tinta col-md-3 col-sm-6 col-xs-12">
                     <img src="<?php echo base_url('public/img/Atelier.jpg'); ?> " class="img-responsive circle-img">
                     <br>
                     <p class="circle-content-p">ATELIER BEAUTY</p>
                     <div class="bgTintaHover" id="hoverAtelier">
                         <img src="<?php echo base_url('public/img/blink_atelier.png') ?>" /><br>
                        Está com vontade de mudar o visual, fazer um novo corte nos cabelos, 
                        mudar o penteado ou simplesmente trocar de esmalte? Esse é o espaço para um momento só seu, que torna você ainda mais bonita. 
                        Selecionamos e treinamos os melhores profissionais e pensamos com muito carinho em tudo de que você precisa para 
                        ter uma experiência inesquecível. </div>
                  </div>
                  
                  <div class="tinta col-md-3 col-sm-6 col-xs-12">
                     <img src="<?php echo base_url('public/img/LAB.jpg'); ?>" class="img-responsive circle-img">
                     <br>
                     <p class="circle-content-p">LAB</p>
                     <div class="bgTintaHover" id="hoverLab">
                         <img src="<?php echo base_url('public/img/blink_lab.png') ?>" /><br>
                         A blink.me foi criada para ser o seu momento. Mas, se você quiser, cabe mais gente. 
                        Foi pensando nisso que o Lab da blink.me foi criado para você se reunir com quem quiser. 
                        O nosso espaço pode ser usado tanto para eventos pessoais quanto corporativos. 
                        O momento é seu e você escolhe o que fazer com ele. Para saber mais informações sobre a locação desse espaço, entre em contato conosco.</div>
                  </div>
                  
                  <div class="tinta col-md-3 col-sm-6 col-xs-12">
                     <img src="<?php echo base_url('public/img/other.jpg'); ?>" class="img-responsive circle-img">
                     <br>
                     <p class="circle-content-p">STUDIO</p>
                     <div class="bgTintaHover" id="hoverStudio">
                         <img src="<?php echo base_url('public/img/blink_studio.png') ?>" /><br>
                         Depois de uma superprodução no nosso atelier, nada mais justo do que eternizar o momento com uma foto. 
                        Por isso, contamos com um cantinho exclusivo para tirar aquela foto profissional e publicar nas redes sociais. 
                        Ou, se você for do tipo reservada, só guardar como recordação para se lembrar do quanto é maravilhosa.  #blinkmemoment</div>
                  </div>
                    
                    
                    
               </div>
            </div>
         </div>
         
         
      
   </div>
      
      <div class="container" id="club" style="background:#F4F4F4;    padding: 20px 20px;">
          <div class="col-md-12">
              <img src="<?php echo base_url('public/img/blinkmeclub.jpg');?>" style="    width: 300px;">  
             <br><br>
          </div>
        <div class="col-md-3">
            <img src="<?php echo base_url('public/img/circle-thumb.jpg'); ?>" style="    max-width: 300px;  width: 90%;margin: 0 auto;display: block;">
        </div>

         <div class="col-md-5" style="    color: #000;font-size: 20px;padding: 20px 40px 0px 0px;">
           <p>Toda mulher nasce VIP, mas o blink.me club é a materialização disso. Cada uma das
associadas do blink.me club terá acesso a uma área totalmente personalizada do site. Ao se logar nessa área, a associada terá acesso a assuntos específicos sobre o mundo dela. <br><br> 
           Temos um orgulho imenso desse serviço e trabalhamos com a certeza de que você terá sempre vantagens e conforto únicos. <br>Prepare-se!</p>
        </div>

        <div class="col-md-4">
              <div class="row">
                 <div class="col-md-12">
                    <p style="color:#000;font-size:30px;" id="vantagens">VANTAGENS</p>
                     <dl class="dl-horizontal lista-vertical" style="background: #F2A68B; padding:4%;margin-bottom: 0; width:100%;">
                         
                         <dd><span style="color:#fff;">&gt;</span> DESCONTO EM TODA LOJA</dd>
                       </dl>

                       <dl class="dl-horizontal lista-vertical" style="background: #F28761; padding:4%;margin-bottom:0;width:100%;">
                         <dd><span style="color:#fff;">&gt;</span> PROMOÇÕES EXCLUSIVAS</dd>
                       </dl>

                       <dl class="dl-horizontal lista-vertical" style="background: #F2A68B; padding:4%;width:100%;">
                         <dd><span style="color:#fff;">&gt;</span> SERVIÇOS DE CASHBACK</dd>
                       </dl>

                 </div>
              </div>
        </div>
        </div>
               
            
      
      <div class="row">
         <div class="col-md-12 col-xs-12" style="background:#FCAF17; height:5px;margin-top:6%;"></div>
      </div>
      <div class="row">
         <div class="col-md-12 col-xs-12" style="background:#F15922;height: 15px;"></div>
      </div>
      

      <div class="container" id="manifesto" style="    color: #000;
    padding: 40px 20px;
    line-height: 1;
    font-style: italic;
    font-size: 20px;">
      <p  id="manifesto_p">Manifesto</p>
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

      
      <div class="container-fluid banner_2" id="contato">
         <div class="container">
             <div class="col-md-7" style="    margin-top: 100px;
    padding-right: 50px;">
                <p style="    font-size: 50px;">MORUMBI TOWN</p>
                <p>Central, bem localizado e com um conceito exclusivo de um dos maiores grupos de shoppings do mundo, o Morumbi Town combina perfeitamente com a blink.me. Atrai não apenas os moradores da região, mas também estudantes e profissionais que frequentam a região. É um local de entretenimento, compras e diversão.
                 <br>
                 <img src="<?php echo base_url('public/img/morumbi-shopping.png');?>" style="    width: 150px;margin-top: 10px;">
                </p>
              </div>
            
            <div class="col-md-5">
               <p style="    font-size: 35px;
    margin-top: 60px;">INFORMAÇÕES</p>
               
               <img src="<?php echo base_url('public/img/point.png');?>" style="float: left;margin-right: 10px;">
               <p style="float: left;">ENDEREÇO:<br>
                   Av. Giovanni Gronchi, 5930<br>
                   Vila Andrade - São Paulo - SP , Shopping Morumbi Town<br>
                   1º Piso. Tel.: (11) 2503-9527.
               </p>
               <br style="clear:both"><br style="clear:both">
               <img src="<?php echo base_url('public/img/msg.png');?>" style="float: left;margin-right: 10px;">
               <p style="float: left;line-height: 100%;">CONTATOS:<br><br>
                   Administração: 11 3740.6940<br><br>
                   Assessoria de Imprensa Blink.Me:<br>
                    11 3081.0662 | 11 3062.9980<br><br>
                   Renata Nascimento<br>
                   renata@agenciaviva.com<br>
                   Agência Viva
                   
               </p>
            </div>
         </div>
      </div>
      
      
      <footer class="footer">
         <div class="container">
              <div class="row">
                 <div class="col-md-6" style="background:#ed4810;">
                    <img id="logo-footer" src="<?php echo base_url('public/img/banner_footer_.png');?>">
                 </div>
                  <div class="col-md-6" style="    padding: 30px 20px;">
                    <p>Av.Giovanni Gronchi,5930 - Vila Andrade, São Paulo - SP | Morumbi Town</p>
                    <p>1º Piso | 11 2503.9527</p>
                    <p>EM BREVE</p>
                    <br>
                    <a href="#"> <img style="    height: 30px;
    float: left;
    margin: -30px 0px 0px 0px;" src="<?php echo base_url('public/img/google_store.jpg');?> "></a>
                    <a href="#"> <img style="    float: left;
    height: 30px;
    margin: -30px 20px 10px 100px;" src="<?php echo base_url('public/img/ios_store.jpg');?> "></a>
                    
                 </div>
              </div>
         </div>
      </footer>

</body></html>