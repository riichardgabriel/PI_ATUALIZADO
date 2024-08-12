<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <title>PC PREVENIDO</title>
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/footer.css">
  <link rel="stylesheet" href="./css/slide.css">
  <link rel="stylesheet" href="./css/login.css">
</head>

<body>
  <main> <!--Conteúdo principal da minha página-->
    <header> <!--O Cabeçalho do nosso projeto -->
      <div class="logo">
        <img src="./img/logozin.png" alt="logo">
        <p>PC PREVENIDO</p>
      </div>
      <nav class="menu">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="#sobrenos">Sobre</a></li>
          <li><a href="#produtos">Produtos</a></li>
          <li><a href="#resultados">Resultados</a></li>
          <li><a href="#perguntas">Dúvidas</a></li>
          <li><a href="#contato">Contato</a></li>
          <li><a href="./html/login.php"><i class="bi bi-person-fill"></i></a></li>
        </ul>
      </nav>
    </header>
    
    <section class="home"> <!--Uma sessão em nossa página-->
      "Prevenir é melhor do que restaurar !!!"
    </section>
    <br>

    
    <!-- sobre a empresa -->
    <section id="sobrenos" class="topo-do-site">
      <h1>Sobre Nós</h1>
      <br>
      <div class="interface">
        <div class="flex">
          <div class="txt-topo-site">


            <p>Bem-vindo à PC PREVENIDO, uma empresa inovadora no mundo da tecnologia que está comprometida em
              transformar o presente e moldar o futuro.
              <br> <br>
              Essa empresa nasceu da paixão por soluções tecnológicas de ponta e da visão de tornar a vida das
              pessoas menos estressante e conectada.
              <br> <br>
              Destacamo-nos pela nossa paixão pela excelência, compromisso com a evolução constante e busca incessante
              pela satisfação total dos clientes.
              <br> <br>
              Possuímos os melhores equipamentos do mercado e contamos com uma equipe de especialistas apaixonados e
              talentosos.
              <br> <br>
              Trabalhamos incansavelmente para oferecer uma manutenção preventiva de alta qualidade para você, deixando
              a sua máquina como nova.
            </p>

            <br>
          </div>
          
          <div class="img-topo-site">
            <img src="./img/fundo_sobre.png" alt="">
          </div>
        </div>
      </div>

      <a href="./html/saibamais.php"><button class="saibamais">Saiba Mais</a></button>
    </section>
  </main>


  <!-- produtos com o carrossel e sendo direcionado para outra aba -->
  <h4 id="produtos">Produtos</h4>
  <br>

  <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
        aria-label="Slide 4"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"
        aria-label="Slide 5"></button>
    </div>

    <div class="carousel-inner">
      <div class="carousel-item active">
        <a href="./html/manutencao.php">
          <img src="./img/manutencaotop.png" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
        </a>
        <h5>Manutenção Preventiva</h5>
        <p>Clique aqui para saber todos os detalhes deste serviço.</p>
      </div>
    </div>

    <div class="carousel-item">
      <a href="./html/instalacao.php">
        <img src="./img/instalacaotop.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
      </a>
      <h5>Instalação</h5>
      <p>Clique aqui para saber todos os detalhes deste serviço.</p>
    </div>
  </div>

  <div class="carousel-item">
    <a href="./html/montarpc.php">
      <img src="./img/montagemtop.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
    </a>
    <h5>Montagem</h5>
    <p>Clique aqui para saber todos os detalhes deste serviço.</p>
  </div>
  </div>
  <div class="carousel-item">
    <a href="./html/formatacao.php">
      <img src="./img/formatacaotop.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
    </a>
    <h5>Formatação</h5>
    <p>Clique aqui para saber todos os detalhes deste serviço.</p>
  </div>
  </div>

  <div class="carousel-item">
    <a href="./html/conserto.php">
      <img src="./img/consertotop.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
    </a>
    <h5>Conserto e Reparos</h5>
    <p>Clique aqui para saber todos os detalhes deste serviço.</p>
  </div>
  </div>
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>

  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  </div>
  <br> <br>

  <!-- resultados -->
  <h2 id="resultados">Resultados</h2>
  <br><br>
  <div class="videos">
    <video controls>
      <source src="./videos/video1.mp4" type="video/mp4">
    </video>
    <video controls>
      <source src="./videos/video2.mp4" type="video/mp4">
    </video>
    <video controls>
      <source src="./videos/video3.mp4" type="video/mp4">
    </video>
    <video controls>
      <source src="./videos/video4.mp4" type="video/mp4">
    </video>
  </div>
  <br> <br>

  <!-- faq de perguntas -->
  <h3 id="perguntas">Perguntas Frequentes</h3>
  <br>

  <section id="duvidas">
    <details>
      <summary>O QUE É MANUTENÇÃO PREVENTIVA ?<i class="bi bi-caret-down-fill"></i></summary>
      <p>Manutenção preventiva em computadores e notebooks é o conjunto de atividades realizadas regularmente para
        evitar falhas e problemas técnicos antes que ocorram.
      </p>
    </details>

    <details>
      <summary>PARA QUE SERVE A MANUTENÇÃO PREVENTIVA ?<i class="bi bi-caret-down-fill"></i></summary>
      <p>A manutenção preventiva serve para aumentar a confiabilidade e vida útil dos equipamentos, reduzindo o risco de
        falhas repentinas e custos com reparos emergenciais.
      </p>
    </details>

    <details>
      <summary>QUAL A DIFERENÇA DA MANUTENÇÃO PREVENTIVA PARA MANUTENÇÃO CORRETIVA ?<i
          class="bi bi-caret-down-fill"></i></summary>
      <p>A diferença entre manutenção preventiva e corretiva é que a preventiva é realizada de forma regular para
        prevenir problemas, enquanto a corretiva é feita em resposta a falhas já ocorridas para repará-las.
      </p>
    </details>

    <details>
      <summary>DE QUANTO EM QUANTO TEMPO SE FAZ MANUTENÇÃO PREVENTIVA ?<i class="bi bi-caret-down-fill"></i></summary>
      <p>A frequência da manutenção preventiva pode variar dependendo do uso e das condições do ambiente, mas geralmente
        é recomendado fazer a cada 6 meses a 1 ano.
      </p>
    </details>

    <details>
      <summary>QUAIS OS BENEFÍCIOS DA MANUTENÇÃO PREVENTIVA ?<i class="bi bi-caret-down-fill"></i></summary>
      <p>Os benefícios da manutenção preventiva incluem aumento da estabilidade do sistema, redução de custos com
        reparos emergenciais, maior produtividade dos usuários e melhor desempenho geral dos equipamentos.
      </p>
    </details>

    <details>
      <summary>O QUE É BACKUP?<i class="bi bi-caret-down-fill"></i></summary>
      <p>Backup é a cópia de segurança dos dados importantes armazenados em um dispositivo ou sistema, feita para
        prevenir a perda de informações em caso de falhas ou incidentes.
      </p>
    </details>

    <details>
      <summary>IMPORTÂCIA DA FORMATAÇÃO ?<i class="bi bi-caret-down-fill"></i></summary>
      <p>A formatação é importante para limpar completamente o disco rígido ou outros dispositivos de armazenamento,
        reinstalando o sistema operacional e eliminando problemas de desempenho ou segurança.
      </p>
    </details>

    <details>
      <summary>O QUE É FORMATAÇÃO ?<i class="bi bi-caret-down-fill"></i></summary>
      <p>Formatação é o processo de apagar todos os dados de um dispositivo de armazenamento e prepará-lo para receber
        novas informações, geralmente reinstalando o sistema operacional.
      </p>
    </details>
  </section>

  <br><br>


  <!-- rodapé  -->
  <footer>
    <div id="rodape" class="row">
      <div class="col -md-3">
        <ul class="list-unstyled mt-3">
          <h5>HOME</h5>
          <li><a href="index.php">Home</a></li>
          <li><a href="#produtos">Produtos</a></li>
          <li><a href="#resultados">Resultados</a></li>
          <li><a href="#perguntas">Dúvidas<a></li>
          <li><a href="#contato">Contato</a></li>
          <li><a href="./html/login.php">Login</a></li>
        </ul>
      </div>

      <div class="col -md-4">
        <ul class="list-unstyled mt-4">
          <h5>Parceiros</h5>
          <li><a href="https://policebox.paulowh.com/">Police Box</a></li>
          <li><a href="https://ventqui.paulowh.com/">Ven't qui</a></li>
          <li><a href="https://buildsburguer.paulowh.com/">Build's Burguer</a></li>
          <li><a href="https://doceslunares.paulowh.com/">Doces Lunares<a></li>
          <li><a href="https://adega-idrink.paulowh.com/">Adega I drink</a></li>
        </ul>
      </div>

      <div class="col -md-3">
        <ul class="list-unstyled mt-3">
          <h5>Sobre nós</h5>
          <li><a href="#sobrenos">Sobre</a></li>
          <li><a href="#contato">Contato</a></li>
        </ul>
      </div>
<!-- 
      <div class="col -md-3">
        <ul class="list-unstyled mt-3">
          <h5>Descubra mais</h5>
          <li><a href="#produtos">Produtos</a></li>
        </ul>
      </div> -->

      <div class="col -md-3">
        <div class="social-icons mt-3">
          <a href="https://www.youtube.com/@senacbrasil"><i class="bi bi-youtube"></i></a>
          <a href="https://wa.me/551130042222"><i class="bi bi-whatsapp"></i></a>
          <a href="https://www.instagram.com/pcprevenido/"><i class="bi bi-instagram"></i></a>
          <a href="https://www.facebook.com/windows"><i class="bi bi-facebook"></i></a>
        </div>
      </div>
    </div>

    <div class="footer-bottom">
      <hr>
      <p>
        &copy;2024. Este site foi desenvolvido junto com a turma de TI21 - SENAC Americana.<br> Não
        reservamos os direitos e valores apresentados são meramentes ilustrativos para fins educacionais.
      </p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"></script>
    <script src="js/script.js"></script>

</body>
</html>