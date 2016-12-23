  <body>
      <div class="container" id="lab-container">
        <div class="col-md-12 col-xs-12">
          <img src="<?php echo base_url('/site/img/blink_lab_original.png'); ?>"
          id="lab-img1" class="lab-img-layout" alt="">
        </div>
        <div class="col-md-2 col-sm-3">
          <img src="<?php echo base_url('/site/img/lab/lab2.jpg'); ?>"
          id="lab-img2" class="lab-img-layout" alt="">
        </div>
        <div class="col-md-9 col-sm-9">
          <p style="color:#888;">A blink.me foi criada para ser o seu momento. Mas, se você quiser, cabe
          mais gente. <br>
          No nosso Lab você pode reunir até 15 pessoas para experimentarem juntas
          tudo o que a Blinkme te oferece. <br>É o espaço perfeito para comemorações,
          pré-baladas, aulas de automaquiagem e muito mais.</p>
          <p style="color:#888;">O momento é seu e você escolhe o que fazer com ele. <br> Para saber mais
informações sobre a locação desse espaço, entre em contato conosco.</p>
        </div>
      </div>

      <div class="container centralize-responsive" id="lab-form">
        <div class="col-md-12">
          <h3>AGENDE AQUI</h3>
        </div>
        <form class="form-inline" action="<?php echo base_url('Email/enviar_email') ?>" method="POST" id="lab-form">
        <div class="col-md-12">
            <div class="form-group">
              <input type="text" class="form-control lab-form" placeholder="Nome*" name="nome" required="required">
            </div>
            <div class="form-group">
              <input type="text" class="form-control lab-form" placeholder="Sobrenome*" name="sobrenome" required="required">
            </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <input type="email" class="form-control lab-form" placeholder="Email*" name="email" required="required">
          </div>
          <div class="form-group">
            <input type="text" class="form-control lab-form" placeholder="Número de Pessoas*" name="num_pessoas" required="required">
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <input type="date" class="form-control lab-form" placeholder="Data*" name="data" required="required">
          </div>
          <div class="form-group">
            <input type="text" class="form-control lab-form" placeholder="Horário*" name="horario" required="required">
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <input type="text" class="form-control lab-form" placeholder="Celular" name="celular">
          </div>
          <div class="form-group">
            <input type="text" class="form-control lab-form" placeholder="Telefone*" name="telefone" required="required">
          </div>
        </div>
        
      <div class="col-md-12" style="padding-top:8px;">
          <p id="requisito1">OS CAMPOS COM ASTERISCO SÃO DE PREENCHIMENTO OBRIGATÓRIO</p>
      </div>

      <div class="col-md-12" style="padding-top:5%;" id="lab-check">
        <p>SERVIÇOS SOLICITADOS</p>
        <div class="col-md-12" id="check_area">

        <div class="col-md-6 col-xs-12 col-sm-6 check_responsive">

          <input type="checkbox" value="escova" id="escova">  <label for="check1">Escova</label><br>
          <input type="checkbox" value="penteado" id="penteado">  <label for="check1">Penteado</label><br>
          <input type="checkbox" value="makeup" id="makeup">  <label for="check1">Make up</label>
        </div>

        <div class="col-md-6 col-xs-12 col-sm-6 check_responsive">

          <input type="checkbox" value="mao_pe" id="mao_pe">  <label for="check1">Mão/Pé</label><br>
          <input type="checkbox" value="design_sobrancelha" id="design_sobrancelha">  <label for="check1">Design de Sobrancelha</label><br>
          <input type="checkbox" value="outros" id="outros">  <label for="check1">Outros</label>
        </div>
  </div>
  		<input type="hidden" name="servicos"  value="">
      <input type="hidden" name="assunto" value="Lab Formulario">
 
</div>

      <div class="col-md-12"  id="text-area-lab">
          <div class="col-md-12">
          <strong>Comentários</strong>
          </div>
          <div class="col-md-12">
            <textarea class="hidden-xs textarea" name="coments" rows="5" cols="80"></textarea>
              <textarea class="visible-xs textarea" name="coments" rows="5" cols="40"></textarea>
          </div>
          <div class="col-md-12" id="enviar-lab">
            <input type="submit" name="" value="ENVIAR" id="lab_enviar" onClick="ga('send', 'event', 'Home', 'Lab', 'Enviar');ga('send', 'event', 'Menu', 'Lab', 'Enviar')">
          </div>
      </div>

 </form>
    </div>

    <section>
      <div class="container-fluid">
        <div class="row" style="background:#A3A3A3;padding-bottom:4%;">
          <div id="promocao_area">
            <div class="col-md-12">
              <p class="text-center">Cadastre seu email e receba promoções exclusivas</p>
            </div>
            <div class="col-md-12 col-xs-12 text-center">
              <form class="form-inline">
              <div class="form-group">
                <input type="text" class="form-control"  placeholder="Nome">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Email">
              </div>
              <button type="submit" class="btn btn-default" onClick="ga('send', 'event', 'Home', 'Promocoes-exclusivas', 'Eu-quero');">EU QUERO</button>
            </form>
            </div>
          </div>
        </div>
      </div>

    </section>

  </body>
</html>
