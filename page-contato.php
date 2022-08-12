<?php // Template Name: Contato 
?>

<?php get_header(); ?>
<section class="container-banner-contato">
  <div class="banner-title">
    <h1>Fale conosco</h1>
  </div>
</section>
<section class="container-contato">
  <div class="adress-container">
    <h3>Weblaudo</h3>
    <div class="adress-content">
      <h4>Endereço</h4>
      <p>Rua Dr. Francisco Matos, 222</p>
      <p>Boa Viagem, Recife/PE, Brasil</p>
      <p>CEP 52010-000</p>
    </div>
    <div class="funcionamento-container">
      <h4>Horário de Funcionamento:</h4>
      <p>Segunda a sexta das 8h às 18:00</p>
      <p>Sábado das 8h às 12:00</p>
    </div>
    <div class="fone-container">
      <h4>Telefones:</h4>
      <h5>(81) 3679-5772</h5>
      <h5>(81)9 9879-5772</h5>
    </div>
    <div class="comercial-container">
      <h4>Comercial:</h4>
      <h5>(81) 3879-5772</h5>
      <a href="mailto:webmaster@example.com">contato@weblaudo.com.br</a>
    </div>
  </div>
  <div class="map-container">
    <iframe class="map-medium" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d783.8079148567223!2d-34.89237418717859!3d-8.08676196716734!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab1f6aa3f99e1f%3A0x129972e2cea3bdbd!2sWeblaudo%20Teleradiologia!5e0!3m2!1spt-BR!2sbr!4v1660239418827!5m2!1spt-BR!2sbr" width="300" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <iframe class="map-big" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d783.8079148567223!2d-34.89237418717859!3d-8.08676196716734!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab1f6aa3f99e1f%3A0x129972e2cea3bdbd!2sWeblaudo%20Teleradiologia!5e0!3m2!1spt-BR!2sbr!4v1660239418827!5m2!1spt-BR!2sbr" width="450" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
  <div class="contato-form-container">
    <h4>
      Contatos, dúvidas e sugestões, fale com </br>
      nossa equipe e em breve retornaremos.
    </h4>
    <form method="post" action="<?php echo get_template_directory_uri(); ?>/enviar.php">
      
        <input type="text" name="nome" id="nome-ct" placeholder="Nome">
        <input type="email" name="email" id="email-ct" placeholder="E-mail">
        <input type="tel" name="tel" id="tel-ct"  placeholder="Fone / Celular">
        <input type="text" name="endereco" id="endereco-ct" placeholder="Endereço">
        <div class="custom-select">
          <select id="tipo-mensagem" name="Tipo de Mensagem">
            <option value="1">Tipo de mensagem 1</option>
            <option value="2">Tipo de mensagem 2</option>
            <option value="3">Tipo de mensagem 3</option>
          </select>
        </div>
      <textarea type="text" name="mensagem" id="mensagem-ct" placeholder="Mensagem" rows="8"></textarea>
      <div class="submit-container">
        <label for="submit" class="submit-file-ct btn-hover">Enviar mensagem</label>
        <input type="submit" value="Enviar minhas informações" name="submit" id="submit-ct">
      </div>
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