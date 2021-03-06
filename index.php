<?php
IF (isset($_POST['cadastro'])) {
    // print_r($_POST['nome']);
    // print_r('<br>');
    // print_r($_POST['sobrenome']);
    // print_r('<br>');
    // print_r($_POST['email']);
    // print_r('<br>');
    // print_r($_POST['senha']);

    include_once('config.php');

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $result = mysqli_query($conexao, "INSERT INTO usuario(nome, sobrenome, email, senha) 
    VALUES('$nome', '$sobrenome', '$email', '$senha')");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>GoCar Locação de Carros Elétricos</title>
        <!-- icone Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Fonte Awesome icons (versao gratis)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Fontes do Google-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- tema principal CSS (includindo Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <!-- Google font -->
	    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
	    <!-- Custom stlylesheet -->
	    <link type="text/css" rel="stylesheet" href="css/style.css" />
        
    </head>
    <body id="page-top">
        <!-- Navegação-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img src="assets/img/navbar-logo.png" alt="logo" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#sobre">Sobre</a></li>
                        <li class="nav-item"><a class="nav-link" href="#vantagens">Porque usar</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Nossos Carros</a></li>
                        <li class="nav-item"><a class="nav-link" href="#valores">Quanto Custa</a></li>
                        <li class="nav-item"><a class="nav-link" href="#aluguel">Aluguel e Reserva</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Fale Conosco</a></li>
                        <li class="nav-item"><a class="nav-link" href="#login">Login</a></li>
                        
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">GOCAR ALUGUEL DE CARROS 100% ELÉTRICOS</div>
                <div class="masthead-heading text-uppercase">Mobilidade + Sustentável
                    <p>Alugar veículos 100% elétricos faz parte de nossa contribuição.</p>
                    
                    </div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#vantagens">Saiba Mais</a>
            </div>
        </header>
        
        <!-- Sobre-->
        <section class="page-section" id="sobre">
            <div class="container">
                <div class="text-center">
                    <h3 class="section-heading text-uppercase">Sobre</h2>
                    <h3 class="section-subheading text-muted"> <p style="text-align: justify;">A GoCar é a locadora com o maior número de veículos elétricos do Brasil, 
                        uma atitude alinhada com o Programa Carbono Neutro, 
                        que objetiva neutralizar nossa emissão de gases de efeito estufa até 2030. 
                        Além disso, temos uma importante parceria com a ABVE (Associação Brasileira do Veículo Elétrico),
                        entidade sem fins lucrativos que apoia o desenvolvimento do mercado de carro elétrico no país. 
                        Temos como objetivo através da locação de veículos elétricos, estimular o mercado e as pessoas para 
                        a importância na redução de emissão de carbono, proporcionar ao cliente uma experiência diferenciada.</h3></p>
                         
                         <br>
                   
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fas fa-car fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Veículos 100% Elétrico</h4>
                        <p class="text-muted">carro 100% elétrico com zero emissão de ruídos e autonomia. </p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-wrench fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Manutenção</h4>
                        <p  class="text-muted">Acompanhamento técnico constante das condições do veículo, para controle de manutenção preventiva e corretiva.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-charging-station fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Estrutura de Recarga</h4>
                        <p class="text-muted">Cargas eficientes e de alta velocidade. Os Eletropostos é uma estrutura de recarga própria montada nos locais mais adequados para os clientes.</p>
                    </div>
                </div>
            </div>
        </section> 

         <!-- Vantagens - Porque Usar -->
         <section class="page-section" id="vantagens">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Porque Usar</h2>
                    <h3 class="section-subheading text-muted">O carro elétrico traz uma série de benefícios, sendo menos poluente, mais silencioso e ter um consumo de energia mais eficiente. Além disso, seus custos de abastecimento são menores, assim como a manutenção e eventuais consertos.</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/vantagens/1.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4> Não emitem gases poluentes</h4>
                                <h4 class="subheading">
                                    Zero emissão<br>
                                    Zero barulho</h4>
                            </div>
                            <div class="timeline-body"><p style="text-align: justify;"class="text-muted">
                                 Não emitir poluentes no meio ambiente é uma das maiores contribuições do veículo elétrico.
                                 A queima de combustíveis fósseis, como a gasolina e o diesel, emite gases tóxicos e poluentes como o monóxido e o dióxido de carbono, dentre outros. 
                                 Sem a queima de combustível e o sistema de escape, os motores elétricos trabalham em silêncio e, consequentemente,
                                 proporcionam maior sensação de conforto acústico e bem-estar a bordo.</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/vantagens/2.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Exigem menos manutenção</h4>
                                <h4 class="subheading">+ Eficiência energética</h4>
                            </div>
                            <div class="timeline-body"><p style="text-align: justify;" class="text-muted">O veículo elétrico é altamente eficiente quando colocado em movimento. Segundo Sugahara, ele consome,
                                aproximadamente, 90% da eficiência energética disponível, ao contrário dos modelos dotados de motor a combustão, que aproveitam apenas de 30% a 40%. 
                                “O veículo totalmente elétrico é, mecanicamente, mais simples, e a durabilidade de seu propulsor é superior à do motor a combustão”, enfatiza Sugahara.
                                A manutenção é rápida e leva de 60 a 90 minutos e se resume à limpeza e ao ajuste dos freios, balanceamento, rotação e alinhamento das rodas, revisão de faróis, 
                                suspensão e direção, lubrificação de fechaduras, dobradiças e tranca do porta-malas, revisão dos níveis de fluidos e controle das baterias de íons de lítio. 
                                Dessa forma, os gastos com manutenção são de 20% a 30% mais baixos que os de um carro convencional.</p>                            
                                
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/vantagens/3.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Sustentabilidade</h4>
                                <h4 class="subheading">Contribuimos para melhorar a vida no planeta</h4>
                            </div>
                            <div class="timeline-body"><p style="text-align: justify;" class="text-muted">É impossível falar de veículos elétricos sem citar a necessidade cada vez mais presente em nossas rotinas de reduzir ou 
                                até eliminar o uso de combustíveis fósseis. Além de ser um tipo de exploração invasiva, os gases resultantes da queima de derivados de petróleo (principalmente o gás carbônico) 
                                são bastante nocivos ao meio ambiente. E isso não é uma questão apenas grandiosa como a mudança de clima. É algo que afeta a saúde de pessoas em grandes cidades todos os dias.
                                A má qualidade do ar é responsável por diversas doenças respiratórias, que podem ser prevenidas com um futuro eletrônico.</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/vantagens/4.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>+ Custo benefício e Usabilidade</h4>
                                <h4 class="subheading">MOBILIDADE + SUSTENTÁVEL</h4>
                            </div>
                            <div class="timeline-body"><p style="text-align: justify;" class="text-muted">Além de ser a melhor opção para o meio ambiente, os carros elétricos podem ajudar a poupar nas contas do mês. Em média, 
                                carregar um carro elétrico é mais barato do que abastecer um veículo a combustão.
                                Outro ponto positivo dos elétricos é a eficiência, podendo chegar a 90%. Ou seja, você tem um melhor aproveitamento da energia gerada pelo motor. Em uma comparação simples, 
                                o carro a combustão tem em média a eficiência de apenas 40%. para se fazer o mesmo esforço de trabalho do carro.</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                               Seja parte
                                <br />
                                da nossa
                                <br />
                               história
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>    
<!-- Portfolio Grid-->
<section class="page-section bg-light" id="portfolio">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Nossos Carros</h2>
            <h3 class="section-subheading text-muted">Tecnologia + Desempenho + Design </h3>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6 mb-4">
                <!-- Portfolio item 1-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/1.jpg" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">RENAULT ZOE-TECH</div>
                        <div class="portfolio-caption-subheading text-muted">
                            O ZOE E-TECH veio para eletrificar sua vida.
                            O carro 100% elétrico com zero emissão de ruídos e autonomia de 385 km.
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <!-- Portfolio item 2-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/2.jpg" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">CAOA CHERY ARRIZO 5E</div>
                        <div class="portfolio-caption-subheading text-muted">
                        O conforto interno é garantido pela central multimídia e pelo teto solar.
                        Sedã com autonomia de 322 km.
                     </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <!-- Portfolio item 3-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/3.jpg" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">JAC IEV20</div>
                        <div class="portfolio-caption-subheading text-muted">Compacto, ágil, sofisticação e com autonomia de 320 km.</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                <!-- Portfolio item 4-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/4.jpg" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">JAC E-JS1</div>
                        <div class="portfolio-caption-subheading text-muted">Inovação, sofisticação e compacto com 302 km de autonomia.</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                <!-- Portfolio item 5-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/5.jpg" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">CHEVROLET BOLT EV</div>
                        <div class="portfolio-caption-subheading text-muted">Potência, tecnologia e autonomia de até 416 km.</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <!-- Portfolio item 6-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/6.jpg" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading"> FIAT 500E</div>
                        <div class="portfolio-caption-subheading text-muted"> 
                        Carro inteligente que analisa como você está dirigindo. 
                        Ativa alertas e envia uma mensagem no painel. Possui autonomia de 320 km
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
 <!-- Valores-->
 <section class="page-section bg-light" id="valores">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Quanto Custa</h2>
            <h3 class="section-subheading text-muted">Trabalhamos com veículos de alto desempenho e economia, adequados às suas necessidades.</h3>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="valores-member">
                    <img class="mx-auto rounded-circle" src="assets/img/valores/1.jpg" alt="..." />
                </div>
            </div>

            <div class="col-lg-4">
                <div class="valores-member">
                    <img class="mx-auto rounded-circle" src="assets/img/valores/2.jpg" alt="..." />
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="valores-member">
                    <img class="mx-auto rounded-circle" src="assets/img/valores/3.jpg" alt="..." />
                </div>
            </div>
       
        <div class="col-lg-4">
            <div class="valores-member">
                <img class="mx-auto rounded-circle" src="assets/img/valores/4.jpg" alt="..." />
            </div>
        </div>
    
    <div class="col-lg-4">
        <div class="valores-member">
            <img class="mx-auto rounded-circle" src="assets/img/valores/5.jpg" alt="..." />
        </div>
    </div>
    
    <div class="col-lg-4">
        <div class="valores-member">
            <img class="mx-auto rounded-circle" src="assets/img/valores/6.jpg" alt="..." />
        </div>
    </div>
</section>

<!--aluguel e reserva-->
<section class="page-section" id="aluguel">
    <div id="booking" class="section">
        <div class="section-center">
            <div class="container">
                <div class="row">
                    <div class="booking-form">
                        <div class="form-header">
                        <h1>Aluguel e Reserva</h1>
                        </div>
                        <form>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">Nome</span>
                                        <input class="form-control" type="text" placeholder="Escreva o seu nome">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">Email</span>
                                        <input class="form-control" type="email" placeholder="Escreva o seu email">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <span class="form-label">Telefone</span>
                                <input class="form-control" type="tel" placeholder="Escreva o seu telefone">
                            </div>
                            <div class="form-group">
                                <span class="form-label">Localização</span>
                                <input class="form-control" type="text" placeholder="CEP/Localização">
                            </div>
                            <div class="form-group">
                                <span class="form-label">Destino</span>
                                <input class="form-control" type="text" placeholder="CEP/lozalização">
                            </div>
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <span class="form-label">Data de Retirada</span>
                                        <input class="form-control" type="date" required>
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <span class="form-label">Hour</span>
                                                <select class="form-control">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                    <option>7</option>
                                                    <option>8</option>
                                                    <option>9</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                                <span class="select-arrow"></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <span class="form-label">Min</span>
                                                <select class="form-control">
                                                    <option>05</option>
                                                    <option>10</option>
                                                    <option>15</option>
                                                    <option>20</option>
                                                    <option>25</option>
                                                    <option>30</option>
                                                    <option>35</option>
                                                    <option>40</option>
                                                    <option>45</option>
                                                    <option>50</option>
                                                    <option>55</option>
                                                </select>
                                                <span class="select-arrow"></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <span class="form-label">AM/PM</span>
                                                <select class="form-control">
                                                    <option>AM</option>
                                                    <option>PM</option>
                                                </select>
                                                <span class="select-arrow"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <span class="form-label">Data de Entrega</span>
                                        <input class="form-control" type="date" required>
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <span class="form-label">Hour</span>
                                                <select class="form-control">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                    <option>7</option>
                                                    <option>8</option>
                                                    <option>9</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                                <span class="select-arrow"></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <span class="form-label">Min</span>
                                                <select class="form-control">
                                                    <option>05</option>
                                                    <option>10</option>
                                                    <option>15</option>
                                                    <option>20</option>
                                                    <option>25</option>
                                                    <option>30</option>
                                                    <option>35</option>
                                                    <option>40</option>
                                                    <option>45</option>
                                                    <option>50</option>
                                                    <option>55</option>
                                                </select>
                                                <span class="select-arrow"></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <span class="form-label">AM/PM</span>
                                                <select class="form-control">
                                                    <option>AM</option>
                                                    <option>PM</option>
                                                </select>
                                                <span class="select-arrow"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-btn">
                                <button class="submit-btn">Agende Agora</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</section>

<!--Cadastre-se / Login-->
<section class="page-section" id="login">
    <!-- Section: Design Block -->
    <section class="text-center text-lg-start">
        <style>
          .cascading-right {
            margin-right: -50px;
          }
      
          @media (max-width: 991.98px) {
            .cascading-right {
              margin-right: 0;
            }
          }
        </style>
      
        <!-- Jumbotron -->
        <div class="container py-4">
          <div class="row g-0 align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
              <div class="card cascading-right" style="
                  background: hsla(0, 0%, 100%, 0.55);
                  backdrop-filter: blur(30px);
                  ">
                <div class="card-body p-5 shadow-5 text-center">
                  <h2 class="fw-bold mb-5">Cadastre-se</h2>
                  <form action="index.php" method="POST"> <!-- CONEXÃO COM O BANCO DE DADOS -->
                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    <div class="row">
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <input type="text" name="nome" id="form3Example1" class="form-control" />
                          <label class="form-label" for="form3Example1"> Nome</label>
                        </div>
                      </div>
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <input type="text" name="sobrenome" id="form3Example2" class="form-control" />
                          <label class="form-label" for="form3Example2">Sobrenome</label>
                        </div>
                      </div>
                    </div>
      
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                      <input type="email" name="email" id="form3Example3" class="form-control" />
                      <label class="form-label" for="form3Example3">Email</label>
                    </div>
      
                    <!-- Password input -->
                    <div class="form-outline mb-4">
                      <input type="password" name="senha" id="form3Example4" class="form-control" />
                      <label class="form-label" for="form3Example4">Senha</label>
                    </div>
      
                    <!-- Checkbox -->
                    <div class="form-check d-flex justify-content-center mb-4">
                      <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                      <label class="form-check-label" for="form2Example33">
                        Assine a Nossa Newsletter
                      </label>
                    </div>
      
                    <!-- Submit button -->
                    <button type="submit" name="cadastro" class="btn btn-primary btn-block mb-4">
                      Cadastre-se
                    </button>
                    <button type="submit" name="login" class="btn btn-primary btn-block mb-4">
                        Login
                      </button>
      
                    <!-- Register buttons -->
                    <div class="text-center">
                      <p>ou Inscreva-se com :</p>
                      <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-facebook-f"></i>
                      </button>
      
                      <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-google"></i>
                      </button>
      
                      <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-twitter"></i>
                      </button>
      
                      <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-github"></i>
                      </button>
                      
                    </div>
                  </form>
                </div>
              </div>
            </div>
      
            <div class="col-lg-6 mb-5 mb-lg-0">
              <img src="https://mdbootstrap.com/img/new/ecommerce/vertical/004.jpg" class="w-100 rounded-4 shadow-4"
                alt="" />
            </div>
          </div>
        </div>
      </section>
      <!-- Section: Design Block -->

<!-- Fale Conosco-->
<section class="page-section" id="contact">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Fale Conosco</h2>
            <h3 class="section-subheading text-muted">Ficou com alguma dúvida? Entre em contato com a gente!</h3>
        </div>
        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
            <div class="row align-items-stretch mb-5">
                <div class="col-md-6">
                    <div class="form-group">
                        
                        <input class="form-control" id="name" type="text" placeholder="Nome *" data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="name:required">Nome</div>
                    </div>
                    <div class="form-group">
                        
                        <input class="form-control" id="email" type="email" placeholder=" Email *" data-sb-validations="required,email" />
                        <div class="invalid-feedback" data-sb-feedback="email:required">Email</div>
                        <div class="invalid-feedback" data-sb-feedback="email:email">O email não é válido.</div>
                    </div>
                    <div class="form-group mb-md-0">
                        
                        <input class="form-control" id="phone" type="tel" placeholder="Telefone *" data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="phone:required">Telefone</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-group-textarea mb-md-0">
                        
                        <textarea class="form-control" id="message" placeholder="Sua Mensagem *" data-sb-validations="required"></textarea>
                        <div class="invalid-feedback" data-sb-feedback="message:required">Deixe a sua mensagem.</div>
                    </div>
                </div>
            </div>
            <!-- Mensagem enviada com Sucesso-->
            <div class="d-none" id="submitSuccessMessage">
                <div class="text-center text-white mb-3">
                    <div class="fw-bolder">Mensagem enviada com sucesso!</div>
                    
                    <br />
                 <!-- podemos colocar um link de referência para mensagem aqui-->   
                </div>
            </div>
            <!-- Erro de Mensagem-->
            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
            <!-- Botão de Enviar-->
            <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">Enviar Mensagem</button></div>
        </form>
    </div>
</section>

<!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Detalhes projeto popup-->
                                    <h2 class="text-uppercase">RENAULT ZOE-TECH</h2>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/1.jpg" alt="..." />
                                    <p style="text-align: justify;">Com o Zoe E-TECH você vai ainda mais longe. Basta uma única carga da bateria para alcançar até 385 km de autonomia e expandir ainda mais seus horizontes.
                                        O ZOE E-TECH é o único veículo que carrega completamente em menos de 3 horas. E com uma corrente contínua de 50 kW, a carga da bateria fica completa em apenas 1h05.
                                        Os bancos são feitos de produtos recicláveis, assim como o painel, fazendo com que a sustentabilidade esteja presente em cada detalhe do carro.
                                    </p>
                                    
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                       Fechar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">CAOA CHERY ARRIZO 5E</h2>
                                    
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/2.jpg" alt="..." />
                                    <p style="text-align: justify;">O elétrico traz de série controles de estabilidade e tração, chave presencial, botão de partida, teto solar, rodas de 16 polegadas, central multimídia de 10 polegadas, quadro de instrumentos digital com tela colorida e indicador de pressão e temperatura dos pneus.
                                        O Chery elétrico Arrizo 5e é um modelo de sedã elétrico da sino-brasileira Caoa Chery, que chega ao Brasil com a proposta de entregar o máximo de qualidade a um motorista exigente que quer o melhor de um carro elétrico.
                                        Entre os seus principais destaques está a autonomia de 322 km, um painel multimídia com fácil e intuitivo acesso, sem contar o não consumo de gasolina e álcool ou a emissão de poluentes.
                                        
                                    </p>
                                    
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Fechar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">JAC IEV20</h2>
                                    
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/3.jpg" alt="..." />
                                    <p style="text-align: justify;">No caso do JAC iEV20, o motor elétrico proporciona torque imediato de de 215 Nm. O compacto é equipado com uma bateria de 41kWh e 
                                       proporciona uma direção sem ruídos e poluentes, com autonomia de até 400 km. Segundo os dados da fabricante, o modelo faz de 0 a 50km/h em 4,9 segundos.
                                       Em quesito de medidas, o JAC iEV20 tem 1.500 mm de altura, 1.670 mm de largura, 3.660 mm de comprimento e 2.390 mm de entre eixos.</p>
                                    
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                       Fechar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 4 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">JAC E-JS1</h2>
                                    
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/4.jpg" alt="..." />
                                    <p style="text-align: justify;">O JAC E-JS1 é o “falso pequeno”, ou seja, apesar das dimensões serem modestas (3,650m de comprimento, 1,67m de largura e 1,49m de altura), ele é muito bem aproveitado e oferece um bom espaço tanto
                                    para o motorista quanto para 3 passageiros, no máximo, para o conforto não ser prejudicado.
                                    O motor do JAC E-JS1 também vai surpreender quem estiver disposto a testar o carro elétrico da montadora chinesa. Ele oferece ao condutor 45 kW, equivalentes a 62 cv. Segundo a marca, ele acelera de 0 a 100 km/h em apenas 10,7 segundos.
                                    Ele conta com partida no botão, cluster digital no painel, central multimídia de 10,25 polegadas sensível ao toque, pareamento com Apple Carplay e Android Auto (via cabo) e ar-condicionado digital.
                                    Além de um lindo design e as cores diferentes, claro, também encantam e atraem olhares.
                                    </p>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Fechar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 5 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">CHEVROLET BOLT EV</h2>
                                    
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/5.jpg" alt="..." />
                                    <p style="text-align: justify;">Em termos de performance o Bolt EV promete fazer bonito, com motor dianteiro de 203 cv e 36,7 kgfm levando o carro de 
                                        1,6 tonelada do 0 aos 100 km/h em 7,3 s. Graças à bateria de 66 kWh auxiliada pela recuperação de energia das frenagens,
                                        o Bolt EV tem autonomia máxima de 416 km no ciclo EPA. Quando ativado, o sistema de reaproveitamento energético permite a 
                                        condução do carro apenas com um pedal, poupando o sistema de freios.                                                                 
                                        O hatch elétrico também oferece sistemas de auxílio à direção e segurança reforçada por 10 airbags. 
                                        Há bancos de couro e volante aquecido, além de vidros especiais que protegem ocupantes do Sol.</p>
                                   
                                    
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Fechar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 6 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">FIAT 500E</h2>
                                    
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/6.jpg" alt="..." />
                                    <p style="text-align: justify;">O 500e tem um design clássico e nostálgico. O 500e Icon tem pacote fechado de equipamentos, Entre os itens estão: teto solar elétrico, faróis full LED automáticos 
                                        (incluindo facho alto), luz de circulação diurna, lanternas de LED, 6 airbags, sensor de chuva, câmera de ré, espelhos retrovisores internos com desembaçador, 
                                        carregador de smartphones por indução, wi-fi nativo e quadro de instrumentos digital com tela de 7 polegadas. A central multimídia tem 10,25 polegadas, e Android Auto e App CarPlay, ambos com conexão sem fio. 
                                        Há também um pacote de sistemas de auxílio à condução, com: piloto automático adaptativo, assistente de permanência em faixa (com alertas e correção ativa),
                                        frenagem automática de emergência com detecção de pedestres, detector de fadiga, leitura de placas de velocidade, sensores de estacionamento 360º, assistente de estacionamento e alerta de pontos cegos. 

                                    </p>
                                    
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Fechar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start">Copyright © 2022 • GoCar</div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="link-dark text-decoration-none" href="#">Administrar</a>
                </div>
            </div>
        </div>
    </footer>

     </div>
        <!-- Bootstrap core JS-->
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>