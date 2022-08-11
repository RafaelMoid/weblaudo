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
      <a href="mailto:webmaster@example.com">Jon Doe</a>
    </div>
  </div>
  <div class="map-container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d783.8079148567223!2d-34.89237418717859!3d-8.08676196716734!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab1f6aa3f99e1f%3A0x129972e2cea3bdbd!2sWeblaudo%20Teleradiologia!5e0!3m2!1spt-BR!2sbr!4v1660239418827!5m2!1spt-BR!2sbr" width="400" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
  <div class="contato-form-container">
   <form method="post" action="<?php echo get_template_directory_uri(); ?>/enviar.php">
      
        <input type="text" name="nome" id="nome-ct" placeholder="Nome">
        <input type="email" name="email" id="email-ct" placeholder="E-mail">
        <input type="tel" name="tel" id="tel-ct"  placeholder="Fone / Celular">
        <input type="text" name="endereco" id="endereco-ct" placeholder="Endereço">
        <select id="tipo-mensagem" name="Tipo de Mensagem">
          <option value="Tipo 1">Tipo 1</option>
          <option value="Tipo 2">Tipo 2</option>
          <option value="Tipo 3">Tipo 3</option>
        </select>
      <textarea type="text" name="mensagem" id="mensagem-ct" placeholder="Mensagem" rows="8"></textarea>
      <div>
        <label for="submit" class="submit-file-ct btn-hover">Enviar mensagem</label>
        <input type="submit" value="Enviar minhas informações" name="submit" id="submit-ct">
      </div>
    </form>
  </div>
</section>


<?php get_footer(); ?>