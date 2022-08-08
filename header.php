<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Header Wordpress -->
    <?php wp_head(); ?>
    <!-- Fecha Header Wordpress -->

</head>
<body>
    <header>
        <nav>
            <div>
                <a href="">Acesso ao sistema</a>
            </div>
            <ul>
                <li><img alt="Logo weblaudo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/weblaudo-logo.png"/></li>
                <li>Inicio</li>
                <li>Quem somos</li>
                <li>Equipe</li>
                <li>Serviços</li>
                <li>Banco de casos</li>
                <li>Contato</li>
                <li><button>Trabalhe conosco</button></li>
            </ul>
        </nav>
    </header>