<?php // Template Name: Home ?>

<?php get_header(); ?>

<div class="carousel">
  <img  alt="Logo weblaudo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/IMG-destaque-WL-03.jpg"/>
  <div class="float-box-home1">
    <h1 class="uppercase">Teleradiologia</h1>
    <h4>
      Laudos a distância e segunda opinião especalizada através da telemedicina que permite a elaboração de resultados precisos e eficientes.
    </h4>
    <div class="button-wrapper-home1">
      <button class="btn-index-sec1 btn1 btn-hover">Solicitar orçamento</button>
      <button class="btn-index-sec1 btn2 btn-hover">Fale conosco</button>
    </div>
  </div>
  <a class="wp-icon btn-hover"><img  alt="wp-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/whatsapp.png"/></a>
</div>

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
      <li>Tomografia Computadorizada</li>
      <li>Ressonância Magnética</li>
      <li>Laudos de Segunda Opinião</li>
      <li>Raio-x</li>
      <li>Densitometria Óssea</li>
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

    <div class="home-form-container">
      <form class="form-home" method="post" action="<?php echo get_template_directory_uri(); ?>/enviar.php">
        <div class="form-group-home-1">
          <input type="text" name="hosp" id="hosp" placeholder="Nome do hospital ou clinica*">
          <input type="text" name="nome" id="nome" placeholder="Seu nome*">
        </div>
        <div class="custom-select-container">
          <div class="custom-select">
            <input type="text" name="cidade" id="cidade" placeholder="Cidade*">
            <select id="estado" name="estado">
              <option value="AC">Acre</option>
              <option value="AC">Acre</option>
              <option value="AL">Alagoas</option>
              <option value="AP">Amapá</option>
              <option value="AM">Amazonas</option>
              <option value="BA">Bahia</option>
              <option value="CE">Ceará</option>
              <option value="DF">Distrito Federal</option>
              <option value="ES">Espírito Santo</option>
              <option value="GO">Goiás</option>
              <option value="MA">Maranhão</option>
              <option value="MT">Mato Grosso</option>
              <option value="MS">Mato Grosso do Sul</option>
              <option value="MG">Minas Gerais</option>
              <option value="PA">Pará</option>
              <option value="PB">Paraíba</option>
              <option value="PR">Paraná</option>
              <option value="PE">Pernambuco</option>
              <option value="PI">Piauí</option>
              <option value="RJ">Rio de Janeiro</option>
              <option value="RN">Rio Grande do Norte</option>
              <option value="RS">Rio Grande do Sul</option>
              <option value="RO">Rondônia</option>
              <option value="RR">Roraima</option>
              <option value="SC">Santa Catarina</option>
              <option value="SP">São Paulo</option>
              <option value="SE">Sergipe</option>
              <option value="TO">Tocantins</option>
              <option value="EX">Estrangeiro</option>
            </select>
          </div>
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
    </div>
  </section>

<!-- JavaScript para Dropdown de tipos de mensagem -->
<script>
  var x, i, j, l, ll, selElmnt, a, b, c;
  /*look for any elements with the class "custom-select":*/
  x = document.getElementsByClassName("custom-select");
  l = x.length;
  for (i = 0; i < l; i++) {
    selElmnt = x[i].getElementsByTagName("select")[0];
    ll = selElmnt.length;
    /*for each element, create a new DIV that will act as the selected item:*/
    a = document.createElement("DIV");
    a.setAttribute("class", "select-selected");
    a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
    x[i].appendChild(a);
    /*for each element, create a new DIV that will contain the option list:*/
    b = document.createElement("DIV");
    b.setAttribute("class", "select-items select-hide");
    for (j = 1; j < ll; j++) {
      /*for each option in the original select element,
      create a new DIV that will act as an option item:*/
      c = document.createElement("DIV");
      c.innerHTML = selElmnt.options[j].innerHTML;
      c.addEventListener("click", function(e) {
          /*when an item is clicked, update the original select box,
          and the selected item:*/
          var y, i, k, s, h, sl, yl;
          s = this.parentNode.parentNode.getElementsByTagName("select")[0];
          sl = s.length;
          h = this.parentNode.previousSibling;
          for (i = 0; i < sl; i++) {
            if (s.options[i].innerHTML == this.innerHTML) {
              s.selectedIndex = i;
              h.innerHTML = this.innerHTML;
              y = this.parentNode.getElementsByClassName("same-as-selected");
              yl = y.length;
              for (k = 0; k < yl; k++) {
                y[k].removeAttribute("class");
              }
              this.setAttribute("class", "same-as-selected");
              break;
            }
          }
          h.click();
      });
      b.appendChild(c);
    }
    x[i].appendChild(b);
    a.addEventListener("click", function(e) {
        /*when the select box is clicked, close any other select boxes,
        and open/close the current select box:*/
        e.stopPropagation();
        closeAllSelect(this);
        this.nextSibling.classList.toggle("select-hide");
        this.classList.toggle("select-arrow-active");
      });
  }
  function closeAllSelect(elmnt) {
    /*a function that will close all select boxes in the document,
    except the current select box:*/
    var x, y, i, xl, yl, arrNo = [];
    x = document.getElementsByClassName("select-items");
    y = document.getElementsByClassName("select-selected");
    xl = x.length;
    yl = y.length;
    for (i = 0; i < yl; i++) {
      if (elmnt == y[i]) {
        arrNo.push(i)
      } else {
        y[i].classList.remove("select-arrow-active");
      }
    }
    for (i = 0; i < xl; i++) {
      if (arrNo.indexOf(i)) {
        x[i].classList.add("select-hide");
      }
    }
  }
  /*if the user clicks anywhere outside the select box,
  then close all select boxes:*/
  document.addEventListener("click", closeAllSelect);
</script>

<?php get_footer(); ?>