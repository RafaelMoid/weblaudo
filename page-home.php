<?php // Template Name: Home ?>

<?php get_header(); ?>

<div class="carousel">
  <img  alt="Logo weblaudo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/IMG-destaque-WL-03.jpg"/>
  <div class="float-box-home1">
    <h1 class="uppercase">Teleradiologia</h1>
    <h4>
      Laudos a distância e segunda opinião especalizada</br>
      através da telemedicina que permite a elaboração de </br>
      resultados precisos e eficientes.
    </h4>
    <div class="button-wrapper-home1">
      <button class="btn-index-sec1 btn1 btn-hover">Solicitar orçamento</button>
      <button class="btn-index-sec1 btn2 btn-hover">Fale conosco</button>
    </div>
  </div>
  <a class="wp-icon btn-hover"><img  alt="wp-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/whatsapp.png"/></a>
</div>

    <!-- <h1>Teste de retorno</h1>
    <div class="owl-carousel wol-theme carrosel-destaques">
      <div class="item-destaque"><img  alt="Logo weblaudo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/IMG-destaque-WL-01.jpg"/></div>
      <div class="item-destaque"><img  alt="Logo weblaudo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/IMG-destaque-WL-02.jpg"/></div>
      <div class="item-destaque"><img  alt="Logo weblaudo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/IMG-destaque-WL-03.jpg"/></div>
      <div class="item-destaque"><img  alt="Logo weblaudo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/IMG-destaque-WL-04.jpg"/></div>
    </div> -->
<section class="servicos">
  <h1>Obtenha laudos a distância em radiologia</h1>
  <h4>A <strong>Weblaudo</strong> associou a melhor estrutura tecnológica em transmissões de imagem </br>
    a uma renomada equipe de radiologistas de ampla experiência profissional.</h4>
  <div class="servicos-divider"></div>
  <div class="servicos-content">
    <ul>
      <li>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon-1.jpg">
        <h5>Exame</h5>
        <p>Realização de exames em hospitais e centros de imagem de todo país.</p>
      </li>
      <li>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon-2.jpg">
        <h5>Envio</h5>
        <p>Envio automático e seguro das imagens via internet.</p>
      </li>
      <li>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon-3.jpg">
        <h5>Laudo</h5>
        <p>Elaboração dos laudos a distância por radiologistas especialistas, 24h/dia 365 dias/ano.</p>
      </li>
      <li>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon-4.jpg">
        <h5>Entregado</h5>
        <p>Liberação automática dos laudos a distância no própio local ou via plataforma.</p>
      </li>
      <li>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon-5.jpg">
        <h5>Sistema</h5>
        <p>Laudos e imagens disponíveis para acesso de pacientes e médicos de qualquer lugar.</p>
      </li>
    </ul>
  </div>
  <div class="servicos-divider-2"></div>
  <p class="servicos-p">Em menos de 1 hora, seu serviço de imagem já pode receber nossos laudos a distância</p>
  <button class="btn-contato-orange btn-hover">Entre em contato!</button>
</section>
<section class="index-sec-3">
  <div class="sec-3-banner-container">
    <img class="index-sec-3-banner" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/IMG-destaque-WL-02.jpg">
  </div>
  <div class="sec-3-content">
    <h1>Laudos a distância em Radiologia </br>para clínicas e hospitais</h1>
    <h4>A telerradiologia é o ramo específico da telemedicina que permite a elaboração de laudos a distância (telelaudo) e segunda
       opinião especializada.
    </h4>
    <ul class="sec-3-ul">
      <li>Tomografia computadorizada</li>
      <li>Ressonância magnética</li>
      <li>Laudos de segunda opinião</li>
      <li>Raio-x</li>
      <li>Densitometria óssea</li>
      <li>Mamografia</li>
      <li>Laudos em até 2 horas</li>
    </ul>
  </div>
</section>

  <section class="faq">
        <h2>Perguntas Frequentes</h2>

        <?php if ( have_rows('FAQ') ) : $i = 0; ?>

        <?php while (have_rows('FAQ')) : the_row(); $i++;?>

        <div class="accordion">
            <div class="accordion-item">
                <div class="accordion-item-header">
                    <h3>
                        <span><?php echo '0' . $i . '.' ?></span>
                        <?php the_sub_field('question_tittle'); ?>
                    </h3>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="accordion-item-body">
                  <div class="accordion-item-body-content">
                      <?php the_sub_field('question_answer'); ?>
                  </div>
                </div>
            </div>
        </div>

        <?php endwhile; ?>

        <div class="duvida">
            <p>Não tirou sua dúvida? Pergunte agora > > ></p><button>PERGUNTE AQUI</button>
        </div>

        <?php else: echo 'Ainda não há perguntas'; endif; ?>
  </section>
  <section class="work-with-us">
    <h1>Trabalhe Conosco</h1>
    <h6>Agradecemos o seu interesse em fazer parte da equipe WebLaudo! </br> Anexe seu currículo que entraremos em contato.</h6>

    <form method="post" action="<?php echo get_template_directory_uri(); ?>/enviar.php">
      <div>
        <input type="text" name="hosp" id="hosp" placeholder="Nome do hospital ou clinica*">
        <input type="text" name="nome" id="nome" placeholder="Seu nome*">
      </div>
      <div>
        <input type="text" name="cidade" id="cidade" placeholder="Cidade*">
        <input type="text" name="estado" id="estado" placeholder="Estado*">
      </div>
      <div>
        <input type="email" name="email" id="email" placeholder="Email*">
        <input type="tel" name="tel" id="tel"  placeholder="DDD e Telefone*">
      </div>
      <textarea type="text" name="mensagem" id="mensagem" placeholder="Mensagem" rows="8"></textarea>
      <div>
        <label for="file" class="label-file btn-hover">Escolher arquivo</label>
        <input type="file" id="file" name="file">
      </div>
      <div>
        <label for="submit" class="submit-file btn-hover">Enviar minhas informações</label>
        <input type="submit" value="Enviar minhas informações" name="submit" id="submit">
      </div>
      <p>Prometemos não utilizar suas informações para enviar qualquer tipo de SPAM</p>
    </form>
  </section>

<?php get_footer(); ?>