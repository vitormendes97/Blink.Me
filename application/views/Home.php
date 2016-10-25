<html>
   <head>
      <title>BlinkMe</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Jquery -->
      <script src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>
      <!-- Bootstrap -->
      <script type="text/javascript" src="https://blinkme-vitormendes97.c9users.io/public/bootstrap/js/bootstrap.js "></script>
      <link rel="stylesheet" type="text/css" href="https://blinkme-vitormendes97.c9users.io/public/bootstrap/css/bootstrap.css ">
      <link rel="stylesheet" type="text/css" href="https://blinkme-vitormendes97.c9users.io/public/css/custom_desktop.css ">
      <link rel="stylesheet" type="text/css" href="https://blinkme-vitormendes97.c9users.io/public/css/custom_mobile.css ">
      <!--<link rel="stylesheet" type="text/css" href="https://blinkme-vitormendes97.c9users.io/public/css/custom_large.css ">-->
      <link rel="stylesheet" type="text/css" href="https://blinkme-vitormendes97.c9users.io/public/fontawsome/css/font-awesome.css ">
   </head>
   <body>
      <header>
         <!-- Topo -->
         <nav class="navbar navbar-default visible-xs visible-sm">
            <div class="container-fluid">
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
                     <li><a href="#" style="color:#fff; font-family: MyRiad; font-size: 19px;">BLINK ME CLUB <span class="sr-only">(current)</span></a></li>
                     <li><a href="#" style="color:#fff; font-family: MyRiad;font-size: 19px;">MANIFESTO</a></li>
                     <li><a href="#" style="color:#fff; font-family: MyRiad;font-size: 19px;">MORUMBI TOWN</a></li>
                     <li><a href="#" style="color:#fff; font-family: MyRiad;font-size: 19px;">CONTATO</a></li>
                  </ul>
               </div>
               <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
         </nav>
         <!-- TOPO VISÍVEL APENAS PARA DESKTOP -->
         <div class="container-fluid">
            <div class="row visible-lg visible-md">
               <div class="col-md-12" id="top01">
               </div>
            </div>
            <div class="row visible-lg visible-md" id="top02">
               <div class="container">
                  <div class="col-md-3">
                     <img class="img-responsive" src="https://blinkme-vitormendes97.c9users.io/public/img/logo2.jpg">
                  </div>
                  <div class="col-md-9" id="top03-lista" style="text-align: right;">
                     <ul class="list-inline">
                        <li><a href="#">BLINK ME CLUB</a></li>
                        <li><a href="#">MANIFESTO</a></li>
                        <li><a href="#">MORUMBI TOWN</a></li>
                        <li><a href="#">CONTATO</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <!-- FIM TOPO VISÍVEL APENAS PARA DESKTOP -->
         <div class="container-fluid pos-top">
            <div class="row">
      
          	<div class="col-md-5 config-border">
           			<div class="row">
           				<div class="col-md-12 borda">
           					<div class="row">
           						<div class="col-md-12">
           							 <img class="img-responsive img-center" id="off_15" src="https://blinkme-vitormendes97.c9users.io/public/img/15_off.png ">
           						</div>
           					</div>
           					
           					<div class="row">
           						<div class="col-md-12">
           					 		<p class="Reklame-font">Vem ai um momento único</p>
           						</div>
           					</div>
           					
           					<div class="row">
           						<div class="col-md-12">
           							<input type="text" name="nome" class="form-control input-class" required="required" placeholder="Nome" style="font-family: MyRiad;font-size: 19px;">
           						</div>
           					</div>
           					
           					<div class="row">
           						<div class="col-md-12">
           							 <input type="email" id="input-email" name="email" class="form-control input-class" required="required" placeholder="Email" style="font-family: MyRiad;font-size: 19px;">
           							  <button type="button" style="font-family:MyRiad" class="btn btn-default btn-custom" id="btn-cadastrar">Cadastre-se</button>
           						</div>
           					</div>
           					
           					<div class="row">
           						<div class="col-md-12">
           							<p id="promocao">Promoção por tempo <u>limitado!</u></p>
           						</div>
           					</div>
           			
           				</div>
           			</div>
           			
          
               	</div>
               	
               	<div class="col-md-7 config-border" style="background:#F15922; height:469px;">
                        
               	</div>
            </div>
         </div>
         <div class="container-fluid">
         <div class="row">
            <div class="col-md-12" style="background : #B1ACA6; height: 30px;margin-top:1%;">
               
            </div>
         </div>
         
         <div class="row">
            <div class="col-md-12" style="padding: 0;">
               <img id="black-bar" src="<?php echo base_url('/public/img/black-bar.jpg'); ?> ">
            </div>
         </div>
         
      </div>
      <!--CAROUSEL-->
      <div class="container-fluid" style="padding:0;margin-top:1%;">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" >
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="<?php echo base_url('/public/img/banner1.jpg'); ?>" alt="...">
      <div class="carousel-caption"></div>
    </div>
    <div class="item">
      <img src="<?php echo base_url('/public/img/banner2.jpg'); ?>" alt="...">
      <div class="carousel-caption">
      </div>
    </div>
   
    <div class="item">
      <img src="<?php echo base_url('/public/img/banner3.jpg'); ?>" alt="...">
      <div class="carousel-caption">
      </div>
    </div>
   
    <div class="item">
      <img src="<?php echo base_url('/public/img/banner4.jpg'); ?>" alt="...">
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
      
      <div class="container-fluid" id="pos-carousel">
         <div class="row" style="margin-top:3%;">
            <div class="col-md-12">
               <p id=>BLINK.ME. UM MERGULHO NO MUNDO DA BELEZA</p>
            </div>
         </div>
         
         <div class="row">
            <div class="col-md-12" >
               <img src="<?php echo base_url('/public/img/circle-content.jpg'); ?>" id="circle-content"></img>
            </div>
         </div>
         
        <div class="row">
         <div class="col-md-12">
               <div class="container">
                  <div class="row">
                     <div class="col-md-3">
                        <p class="circle-content-list">COSMETICS</p>
                     </div>
                 
               
                     <div class="col-md-3">
                        <p class="circle-content-list">ATELIER BEAUTY</p>
                     </div>
          
                     <div class="col-md-3">
                        <p class="circle-content-list">LAB</p>
                     </div>
 
                     <div class="col-md-3">
                        <p class="circle-content-list">STUDIO</p>
                     </div>
                   </div>
               </div>
         </div>
      </div>
      
   </div>
      
      <div class="container-fluid" style="background:#F4F4F4;">
         
         <div class="row">
            <div class="col-md-12">
               <div class="row">
                  <div class="col-md-7">
                     <div class="row">
                        <div class="col-md-12">
                           <img id="blinkmeclub" src="<?php echo base_url('/public/img/blinkmeclub.jpg'); ?> "></img>
                        </div>
                     </div>
                     
                     <div class="row">
                        <div class="col-md-4">
                           <img id="circle_thumb" src="<?php echo base_url('/public/img/circle-thumb.jpg'); ?> "></img>
                        </div>
                        
                        <div class="col-md-8">
                           <p id="circle_desc">Toda mulher nasce VIP, mas o blink.me club é a materialização disso.
                           Cada mulher associada do blink.me terá acesso a uma área totalmente personalizada
                           do site que, quando logada, traz assuntos específicos sobre o mundo dela.</p>
                        </div>
                     </div>
                     
                     <div class="row">
                        <div class="col-md-12">
                           <p id="circle_desc_2">Tenho um orgulho imenso desse serviço e trabalhamos com a certeza de que você terá
                           sempre vantagens e conforto únicos. Prepare-se</p>
                        </div>
                     </div>
                     
                  </div>
                  
                  <div class="col-md-5 vantagens">
                        <div class="row">
                           <div class="col-md-12">
                              <p>VANTAGENS</p>
                               <dl class="dl-horizontal lista-vertical" style="background: blue; padding:4%;margin-bottom: 0;">
                                   <dt>></dt>
                                   <dd>Some Text</dd>
                                 </dl>
                                 
                                 <dl class="dl-horizontal lista-vertical" style="background: pink; padding:4%;margin-bottom:0;">
                                   <dt>></dt>
                                   <dd>Some Text Two</dd>
                                 </dl>
                                 
                                 <dl class="dl-horizontal lista-vertical" style="background: yellow; padding:4%;">
                                   <dt>></dt>
                                   <dd>Some Text Two</dd>
                                 </dl>
                               
                           </div>
                        </div>
                        
                        <!--<div class="row">-->
                        <!--   <div class="col-md-12">-->
                        <!--      <dl class="dl-horizontal">-->
                        <!--           <dt>teste</dt>-->
                        <!--           <dd>1</dd>-->
                        <!--         </dl>-->
                        <!--   </div>-->
                        <!--</div>-->
                  </div>
               </div>
               
               
               
               
            </div>
         </div>
         
      </div>
      
      
      <div class="row">
         <div class="col-md-12" style="background:#FCAF17; height:5px;margin-top:6%;"></div>
      </div>
      <div class="row">
         <div class="col-md-12" style="background:#F15922;height: 15px;"></div>
      </div>
      
      <div class="row">
         <div class="col-md-12 ph">
            <p>Esse é o momento para você que se reiventa todo dia.</p>
            <p>É para você que gosta de um visual clássico, mas sabe o momento de dar um corte novo nos cabelos.</p>
            <p>É para você que, antes de chamar os convidados para festa, passa um rímel nos olhos e visita segredos escondidos em certezas só suas.</p>
            <p>É para você que tem mil belezas. E percebe o brilho de em um único dia ter mil facetas.</p>
            <p>É para você que sabe o momento de passar um blush e entende o poder de um batom, de um sorriso, de um novo tom.</p>
            <p>É para você que não se intimida com o corre-corre da vida e pinta as unhas toda semana para dar os melhores abraços e os melhores apertos de mão</p>
            <p>É para você que não se abala quando as coisas dão errado. Quando isso acontece, você passa seu melhor perfume e olha adiante com firmeza, sem perder o gingado.</p>
            <p>É para você que, em nome da elegância, sabendo que não é heroína, se faz mulher.
            Afinal, ser mulher reúne mais que momentos heróicos.
            Reúne os melhores momentos.</p>
            
            <p>blink.me. O seu momento.</p>
         </div>
      </div>
      
      </header>
   </body>
</html>
