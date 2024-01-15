<?php

 $pageInfo = array(
  'pageName' => 'index',
  'title' => 'Biblioteca Obras da Vida - Inspire-se na Biblioteca em Comunidade',
  'description' => 'Bem-vindo ao Biblioteca Obras da Vida, o seu destino online para explorar, criar e compartilhar experiências de leituaras únicas. Descubra leituras maravilhosa, compartilhe suas próprias criações e conecte-se com uma comunidade apaixonada por leituras. Seja você um autor experiente ou alguém apenas começando sua jornada na leitura, aqui você encontrará inspiração para cada leitura.'
);

$pageName = $pageInfo['pageName'];

include_once(__DIR__ . '/components/public/header.php');

// Query para obter as receitas mais recentes
$query = "SELECT * FROM posts ORDER BY created_at";

// Executa a consulta
$result = mysqli_query($connection, $query);

// Passa as receitas para a variável $recipes
$recipes = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Fecha a consulta
mysqli_free_result($result);
?>
<main class="">
  <section id="carrousel">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="src/img/banner1.webp" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="src/img/banner2.webp" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="src/img/banner3.webp" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="src/img/banner4.webp" class="d-block w-100" alt="..."> 
        </div>
        <div class="carousel-item">
          <img src="src/img/banner5.webp" class="d-block w-100" alt="...">
        </div>
      </div>
    </div>
  </section>
  <section id="about" class="container py-5">
    <div class="row">
      <div class="col-sm-12 col-md-6 col-lg-6">
        <img src="src/img/logo.png" alt="">
      </div>
      <div class="col-sm-12 col-md-6 col-lg-6">
        <h1>
          Biblioteca Obras da Vida
        </h1>
        <p>
        Nosso compromisso é fornecer um ambiente amigável, fácil de navegar e seguro para que você possa encontrar, comprar e desfrutar dos seus livros favoritos sem preocupações.
        Valorizamos a paixão pela leitura e buscamos promover o acesso à informação e ao entretenimento literário, contribuindo assim para o enriquecimento cultural e educacional de nossos clientes.
        </p>
      </div>
    </div>
 
            

</main>

<?php
  include_once(__DIR__ . '/components/public/footer.php');
?>