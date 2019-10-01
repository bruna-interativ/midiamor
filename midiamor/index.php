<link href="<?php bloginfo ( 'template_url' );?>/css/normalize.css" rel="stylesheet" type="text/css">
<link href="<?php bloginfo ( 'template_url' );?>/css/midiamor-style.css" rel="stylesheet" type="text/css">
<link href="<?php bloginfo ( 'template_url' );?>/css/midiamor.css" rel="stylesheet" type="text/css">

<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package midiamor
 */

get_header();
?>
<div id="page" class="site">

  <div data-collapse="medium" data-animation="default" data-duration="400" class="navigation w-nav">
    <div class="navigation-wrap"><a href="index.html" class="logo-link w-nav-brand w--current"><img src="<?php bloginfo ( 'template_url' );?>/images/logo.png" alt="" class="logo-image"></a>
      <div class="menu">
        <nav role="navigation" class="navigation-items w-nav-menu"><a href="#" class="navigation-item w-nav-link">Curso de Empatia</a><a href="#" class="navigation-item w-nav-link">Lojinha</a><a href="#" class="navigation-item w-nav-link">Workshops Presencias</a><a href="#" class="navigation-item w-nav-link">Sobre</a><a href="#" class="navigation-item w-nav-link">Contato</a></nav>
        <div data-w-id="d6f92837-9b69-c630-3e3c-9fade86a339e" class="buscar-parent">
          <form action="/search" class="w-clearfix w-form"><input type="search" class="s-input w-input" maxlength="256" name="query" placeholder="Search…" id="search-2" required=""><input type="submit" value="Search" class="s-btn w-button"></form>
        </div>
        <div class="menu-button w-nav-button"><img src="<?php bloginfo ( 'template_url' );?>/images/menu-icon_1menu-icon.png" width="22" alt="" class="menu-icon"></div>
      </div>
    </div>
  </div>
  
  <div class="slider-section">
    <div data-animation="slide" data-duration="500" data-infinite="1" class="slider-2 w-slider">
      <div class="w-slider-mask">
        <div class="slide-2 w-slide">
          <div class="slider-content-geral">
            <div class="slider-content">
              <div class="img-slider-text"><img src="<?php bloginfo ( 'template_url' );?>/images/especial.png" width="519" srcset="<?php bloginfo ( 'template_url' );?>/images/especial-p-500.png 500w, <?php bloginfo ( 'template_url' );?>/images/especial.png 592w" sizes="(max-width: 479px) 72vw, (max-width: 767px) 45vw, (max-width: 991px) 46vw, 52vw" alt=""><a href="#" class="button-2 w-button">Veja mais <strong>aqui</strong></a></div>
              <div class="img-slider-right"><img src="<?php bloginfo ( 'template_url' );?>/images/pote1.png" width="488" srcset="<?php bloginfo ( 'template_url' );?>/images/pote1-p-500.png 500w, <?php bloginfo ( 'template_url' );?>/images/pote1.png 561w" sizes="(max-width: 479px) 80vw, (max-width: 767px) 39vw, (max-width: 991px) 44vw, 48vw" alt="" class="image"></div>
            </div>
          </div>
        </div>
        <div class="w-slide"></div>
      </div>
      <div class="w-slider-arrow-left">
        <div class="icon w-icon-slider-left"></div>
      </div>
      <div class="w-slider-arrow-right">
        <div class="icon-2 w-icon-slider-right"></div>
      </div>
      <div class="w-slider-nav w-round"></div>
    </div>
  </div>

  <div>
    <div class="container">
      <div class="row">
        <div class="_2-row-left"><img src="<?php bloginfo ( 'template_url' );?>/images/livro.png" srcset="<?php bloginfo ( 'template_url' );?>/images/livro-p-500.png 500w, <?php bloginfo ( 'template_url' );?>/images/livro.png 620w" sizes="(max-width: 479px) 100vw, (max-width: 991px) 50vw, 40vw" alt=""></div>
        <div class="_2-row-right">
          <p class="paragraph">Baixe gratuitamente o nosso ebook <span><strong class="bold-text">“Como a empatia pode transformar as suas relações?&quot;</strong></span>, e tenha acesso a um conteúdo exclusivo que terá um poder revolucionário na sua rotina!</p><a href="#" class="button-3 w-button">Clique <strong>aqui</strong> para baixar</a></div>
      </div>
    </div>
  </div>

  <div class="section-mao">
	  <div class="container-2">
      <div class="text-left">
        <h2 class="heading">Curso de Empatia</h2>
        <p class="paragraph-2">Descobrimos um santo remédio para os conflitos das nossas relações: a empatia! Libere o poder da empatia que já existe em você com o nosso curso online.</p><a href="#" class="button-2 botao-maior w-button">Quero liberar a <strong>empatia</strong> que há em mim</a></div>
    </div>
  </div>

  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js" type="text/javascript" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="<?php bloginfo ( 'template_url' );?>/js/midiamor.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->

	
<?php

get_footer();
