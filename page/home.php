<script>
  document.addEventListener('DOMContentLoaded', function() {

    // Obtém os parâmetros da URL
    const params = new URLSearchParams(window.location.search);

    // Obtém o status retornado pelo PHP
    const status = params.get('status');

    // Local onde o alerta será exibido
    const alertContainer = document.getElementById('contact-alert');

    // Se não houver alerta ou status, encerra
    if (!alertContainer || !status) {
      return;
    }

    let alertHTML = '';


    // ==========================================================
    // SUCESSO
    // ==========================================================

    if (status === 'success') {

      alertHTML = `
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Mensagem enviada!</strong>
                Sua mensagem foi enviada com sucesso. Obrigado pelo contato.

                <button type="button"
                        class="close"
                        data-dismiss="alert"
                        aria-label="Fechar">

                    <span aria-hidden="true">&times;</span>

                </button>
            </div>
        `;

    }


    // ==========================================================
    // ERRO NO ENVIO
    // ==========================================================
    else if (status === 'error') {

      alertHTML = `
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Não foi possível enviar.</strong>
                Ocorreu um problema ao enviar sua mensagem.
                Tente novamente mais tarde.

                <button type="button"
                        class="close"
                        data-dismiss="alert"
                        aria-label="Fechar">

                    <span aria-hidden="true">&times;</span>

                </button>
            </div>
        `;

    }


    // ==========================================================
    // CAMPOS VAZIOS
    // ==========================================================
    else if (status === 'empty') {

      alertHTML = `
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Atenção!</strong>
                Preencha todos os campos antes de enviar.

                <button type="button"
                        class="close"
                        data-dismiss="alert"
                        aria-label="Fechar">

                    <span aria-hidden="true">&times;</span>

                </button>
            </div>
        `;

    }


    // ==========================================================
    // E-MAIL INVÁLIDO
    // ==========================================================
    else if (status === 'email') {

      alertHTML = `
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>E-mail inválido!</strong>
                Informe um endereço de e-mail válido.

                <button type="button"
                        class="close"
                        data-dismiss="alert"
                        aria-label="Fechar">

                    <span aria-hidden="true">&times;</span>

                </button>
            </div>
        `;

    }


    // Exibe o alerta
    alertContainer.innerHTML = alertHTML;


    // Remove os parâmetros da URL
    // mantendo o usuário na seção de contato.
    window.history.replaceState({},
      document.title,
      window.location.pathname + '#contact'
    );

  });
</script>

<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "WebSite",
    "name": "GSMICROS",
    "alternateName": "GS Micros",
    "url": "https://www.gsmicros.com.br/"
  }
</script>
<title>GSMICROS | Tecnologia, dados e processos para transformar desafios em soluções</title>

<meta name="description"
  content="GSMICROS: tecnologia, sistemas, dados, automação e organização de processos, com experiência prática em tecnologia aplicada à saúde.">

<link rel="canonical" href="https://www.gsmicros.com.br/">

<section id="hero" class="d-flex justify-cntent-center align-items-center">
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">

    <div id="heroCarousel"
      data-bs-interval="5000"
      class="container carousel carousel-fade"
      data-bs-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">

        <div class="carousel-container">

          <h2 class="animate__animated animate__fadeInDown">
            Tecnologia, dados e processos para transformar desafios em soluções.
          </h2>

          <p class="animate__animated animate__fadeInUp">
            Soluções em tecnologia, sistemas, dados, automação e processos
            para empresas, profissionais e organizações.
          </p>

          <a href="#services"
            class="btn-get-started animate__animated animate__fadeInUp scrollto">
            Conheça nossos serviços
          </a>

        </div>

      </div>


      <!-- Slide 2 -->
      <div class="carousel-item">

        <div class="carousel-container">

          <h2 class="animate__animated animate__fadeInDown">
            Tecnologia aplicada à realidade da saúde
          </h2>

          <p class="animate__animated animate__fadeInUp">
            Experiência prática em sistemas hospitalares, SUS,
            processos, dados e gestão.
          </p>

          <a href="#about"
            class="btn-get-started animate__animated animate__fadeInUp scrollto">
            Conheça a GSMICROS
          </a>

        </div>

      </div>


      <!-- Slide 3 -->
      <div class="carousel-item">

        <div class="carousel-container">

          <h2 class="animate__animated animate__fadeInDown">
            Transformando ideias em soluções
          </h2>

          <p class="animate__animated animate__fadeInUp">
            Desenvolvimento de sistemas, automação e ferramentas
            para resolver problemas reais.
          </p>

          <a href="#contact"
            class="btn-get-started animate__animated animate__fadeInUp scrollto">
            Fale conosco
          </a>

        </div>

      </div>


      <!-- Controles -->
      <a class="carousel-control-prev"
        href="#heroCarousel"
        role="button"
        data-bs-slide="prev">

        <span class="carousel-control-prev-icon bx bx-chevron-left"
          aria-hidden="true"></span>

      </a>

      <a class="carousel-control-next"
        href="#heroCarousel"
        role="button"
        data-bs-slide="next">

        <span class="carousel-control-next-icon bx bx-chevron-right"
          aria-hidden="true"></span>

      </a>

    </div>

  </section>
  <!-- End Hero -->
</section>
<!-- End Hero -->

<main id="main">

  <!-- ======= Icon Boxes Section ======= -->
  <section id="icon-boxes" class="icon-boxes">
    <div class="container">

      <div class="row">
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-pc-display-horizontal"></i></div>
            <h4 class="title"><a href="">Tecnologia e Sistemas</a></h4>
            <p class="description">Soluções tecnológicas para otimizar processos e melhorar a eficiência hospitalar</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up"
          data-aos-delay="100">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-credit-card-2-front"></i></div>
            <h4 class="title"><a href="">Dados e Indicadores</a></h4>
            <p class="description">Análise e interpretação de dados para tomada de decisão estratégica e melhoria contínua dos serviços hospitalares</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up"
          data-aos-delay="200">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-gear"></i></div>
            <h4 class="title"><a href="">Saúde e Processos</a></h4>
            <p class="description">Otimização de processos e melhoria contínua dos serviços hospitalares</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up"
          data-aos-delay="300">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-people-fill"></i></div>
            <h4 class="title"><a href="">Desenvolvimento e Automação</a></h4>
            <p class="description">Desenvolvimento de soluções e automação de processos para melhorar a eficiência hospitalar</p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Icon Boxes Section -->

  <!-- ======= About Us Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Sobre a GSMICROS</h2>
        <p>
          A GSMICROS atua com tecnologia, sistemas, dados e processos,
          desenvolvendo soluções alinhadas às necessidades reais de cada negócio.
        </p>

        <p>
          Nossa experiência está especialmente ligada ao ambiente hospitalar,
          onde a tecnologia precisa estar integrada aos processos, às equipes
          e à realidade dos serviços de saúde.
        </p>

        <p>
          Essa experiência prática permite compreender não apenas os sistemas,
          mas também os desafios enfrentados diariamente por quem utiliza
          essas ferramentas.
        </p>
      </div>

      <div class="row content">

        <div class="col-lg-6">

          <h6>
            <strong>
              Problemas que buscamos ajudar a resolver:
            </strong>
          </h6>

          <ul>

            <li>
              <i class="ri-check-double-line"></i>
              Dificuldade no uso de sistemas
            </li>

            <li>
              <i class="ri-check-double-line"></i>
              Falta de padronização de processos
            </li>

            <li>
              <i class="ri-check-double-line"></i>
              Erros em cadastros e informações
            </li>

            <li>
              <i class="ri-check-double-line"></i>
              Processos desorganizados e retrabalho
            </li>

          </ul>

        </div>


        <div class="col-lg-6 pt-4 pt-lg-0">

          <h6>
            <strong>
              Áreas de experiência:
            </strong>
          </h6>

          <ul>

            <li>
              <i class="ri-check-double-line"></i>
              Sistemas e processos hospitalares
            </li>

            <li>
              <i class="ri-check-double-line"></i>
              Sistemas de informação em saúde
            </li>

            <li>
              <i class="ri-check-double-line"></i>
              Cadastro e regularização no SUS
            </li>

            <li>
              <i class="ri-check-double-line"></i>
              Organização de fluxos e processos
            </li>

            <li>
              <i class="ri-check-double-line"></i>
              Dados, relatórios e indicadores
            </li>

            <li>
              <i class="ri-check-double-line"></i>
              Suporte e treinamento de equipes
            </li>

          </ul>

        </div>


        <div class="col-12 mt-3">

          <i>
            Acreditamos que a tecnologia gera melhores resultados quando
            está alinhada às pessoas, aos processos e às necessidades reais
            de cada organização.
          </i>

        </div>

      </div>


    </div>
  </section>
  <!-- End About Us Section -->
  <!-- ======= Clients Section ======= -->
  <section id="clients" class="clients">
    <div class="container" data-aos="zoom-in">

      <div class="clients-slider swiper text-center">
        <h3> Empresas e organizações atendidas por nós</h3>
        <div class="swiper-wrapper align-items-center">
          <div class="swiper-slide"><img src="https://raw.githubusercontent.com/genildol/gsmicros/main/assets/img/clients/afonsomad.jpg" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="https://raw.githubusercontent.com/genildol/gsmicros/main/assets/img/clients/laboratorio.jpg" class="img-fluid" alt="">
          </div>
          <div class="swiper-slide"><img src="https://raw.githubusercontent.com/genildol/gsmicros/main/assets/img/clients/bikeshop.jpeg" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="https://raw.githubusercontent.com/genildol/gsmicros/main/assets/img/clients/oabpe.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="https://raw.githubusercontent.com/genildol/gsmicros/main/assets/img/clients/clinfd.jpg" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="https://raw.githubusercontent.com/genildol/gsmicros/main/assets/img/clients/farmacenter.jpg" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="https://raw.githubusercontent.com/genildol/gsmicros/main/assets/img/clients/lladesivos.jfif" class="img-fluid" alt="">
          </div>
          <div class="swiper-slide"><img src="https://raw.githubusercontent.com/genildol/gsmicros/main/assets/img/clients/papelariadel.jpg" class="img-fluid" alt="">
          </div>
          <div class="swiper-slide"><img src="https://raw.githubusercontent.com/genildol/gsmicros/main/assets/img/clients/maisaude.png" class="img-fluid" alt="">
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section>
  <!-- ======= Why Us Section ======= -->
  <section id="why-us" class="why-us">
    <div class="container-fluid">

      <div class="row">

        <div class="col-lg-5 align-items-stretch position-relative video-box"
          style='background-image: url("https://raw.githubusercontent.com/genildol/gsmicros/main/assets/img/gestaohospitalar.jpg");' data-aos="fade-right" alt="Tecnologia que entende a realidade do negócio">
          <!-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a> -->
        </div>

        <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch" data-aos="fade-left">

          <div class="content">
            <h3><strong>Tecnologia que entende a realidade do negócio</strong></h3>
            <p>
              Acreditamos que uma solução tecnológica só funciona quando está
              alinhada às pessoas que utilizam a ferramenta, aos processos que
              precisam ser executados e aos objetivos da organização.
            </p>
          </div>

          <div class="accordion-list">
            <ul>
              <li data-aos="fade-up" data-aos-delay="100">
                <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span>
                  Pessoas <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                  <p>
                    O fator humano é essencial no ambiente hospitalar.
                    Profissionais bem orientados e treinados utilizam melhor os sistemas, reduzem erros e tornam o atendimento mais
                    eficiente.
                  </p>
                  <p>Por isso, atuamos na capacitação das equipes, especialmente para quem tem pouca familiaridade com tecnologia.</p>
                </div>
              </li>

              <li data-aos="fade-up" data-aos-delay="200">
                <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span>
                  Processos<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                  <p>Processos bem definidos garantem organização e eficiência no dia a dia hospitalar.
                    A falta de padronização gera retrabalho, falhas no atendimento e impactos no faturamento.
                  </p>
                  <p>Trabalhamos na análise e melhoria dos fluxos, desde a recepção até o registro das informações.</p>
                </div>
              </li>

              <li data-aos="fade-up" data-aos-delay="300">
                <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span>
                  Tecnologia <i class="bx bx-chevron-down icon-show"></i><i
                    class="bx bx-chevron-up icon-close"></i></a>
                <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                  <p>A tecnologia deve ser uma aliada, não um obstáculo.
                    Sistemas hospitalares precisam ser utilizados de forma correta para garantir dados confiáveis e apoiar a gestão.
                  </p>
                  <p>Atuamos no suporte, melhoria e uso eficiente dos sistemas, sempre alinhados à realidade da equipe.</p>
                </div>
              </li>

            </ul>
            <p><strong>“Não adianta ter tecnologia sem pessoas preparadas e processos organizados.”</strong></p>
          </div>

        </div>
      </div>

    </div>
  </section><!-- End Why Us Section -->

  <!-- ======= Services Section ======= -->
  <!-- ======= Services Section ======= -->
  <section id="services" class="services">

    <div class="container" data-aos="fade-up">

      <div class="section-title">

        <h2>Serviços</h2>

        <p>
          Soluções em tecnologia, dados e processos para organizações
          que buscam melhorar sua operação, organizar informações e
          utilizar melhor seus sistemas.
        </p>

      </div>


      <div class="row">


        <!-- 1 -->
        <div class="col-md-6 d-flex align-items-stretch"
          data-aos="fade-up"
          data-aos-delay="100">

          <div class="icon-box">

            <i class="bi bi-laptop"></i>

            <h4>
              <a href="#">Tecnologia e Sistemas</a>
            </h4>

            <p>
              Soluções em tecnologia e sistemas para organizar informações,
              melhorar processos e apoiar as necessidades reais de cada organização.
            </p>

          </div>

        </div>


        <!-- 2 -->
        <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0"
          data-aos="fade-up"
          data-aos-delay="200">

          <div class="icon-box">

            <i class="bi bi-bar-chart-line"></i>

            <h4>
              <a href="#">Dados e Relatórios</a>
            </h4>

            <p>Organização, consolidação e análise de dados para criação de relatórios,
              indicadores e informações que auxiliam na tomada de decisão.
            </p>

          </div>

        </div>


        <!-- 3 -->
        <div class="col-md-6 d-flex align-items-stretch mt-4"
          data-aos="fade-up"
          data-aos-delay="300">

          <div class="icon-box">

            <i class="bi bi-diagram-3"></i>

            <h4>
              <a href="#">Processos e Gestão</a>
            </h4>

            <p>
              Análise e organização de processos para reduzir
              retrabalho, melhorar fluxos e tornar as atividades
              mais eficientes.
            </p>

          </div>

        </div>


        <!-- 4 -->
        <div class="col-md-6 d-flex align-items-stretch mt-4"
          data-aos="fade-up"
          data-aos-delay="400">

          <div class="icon-box">

            <i class="bi bi-building"></i>
            <!-- <i class="bi bi-diagram-3"></i> -->

            <h4>
              <a href="#">Tecnologia aplicada à Saúde</a>
            </h4>

            <p>
              Soluções e orientação em sistemas, dados e processos para a área
              da saúde, com experiência prática em ambiente hospitalar e SUS.
            </p>

          </div>

        </div>


        <!-- 5 -->
        <div class="col-md-6 d-flex align-items-stretch mt-4"
          data-aos="fade-up"
          data-aos-delay="500">

          <div class="icon-box">

            <i class="bi bi-code-slash"></i>

            <h4>
              <a href="#">Automação e Desenvolvimento</a>
            </h4>

            <p>
              Desenvolvimento de sistemas, ferramentas e automações para
              simplificar tarefas, integrar informações e melhorar processos.
            </p>

          </div>

        </div>


        <!-- 6 -->
        <div class="col-md-6 d-flex align-items-stretch mt-4"
          data-aos="fade-up"
          data-aos-delay="600">

          <div class="icon-box">

            <i class="bi bi-gear-wide-connected"></i>

            <h4>
              <a href="#">Automação de Processos</a>
            </h4>

            <p>
              Automação de tarefas e fluxos para reduzir atividades
              repetitivas, melhorar a organização e aumentar a
              produtividade.
            </p>

          </div>

        </div>

      </div>

    </div>

  </section>
  <!-- End Services Section -->
  <!-- ======= Solutions Section ======= -->
  <section id="solutions" class="services">

    <div class="container" data-aos="fade-up" id="solucoes">

      <div class="section-title">

        <h2>Soluções</h2>

        <p>
          Projetos desenvolvidos a partir de necessidades reais,
          unindo tecnologia, dados e processos.
        </p>

      </div>

      <div class="row">

        <!-- BaseClin -->
        <div class="col-md-6 d-flex align-items-stretch">
          <div class="icon-box">

            <i class="bi bi-database-fill-add"></i>
            <i class="bi bi-database-check"></i>
            <i class="bi bi-database-add"></i>
            <i class="bi bi-database-dash"></i>
            <i class="bi bi-database-exclamation"></i>
            <i class="bi bi-database-fill-check"></i>
            <i class="bi bi-database-fill-dash"></i>
            <i class="bi bi-database-slash"></i>
            <i class="bi bi-database-x"></i>
            <!-- <img src="/node_modules/bootstrap-icons/icons/database-check.svg" alt="" width="50px" height="50px"> -->
            <h4>
              <a href="#">BaseClin</a>
            </h4>

            <p>
              Projeto voltado à consolidação, organização e análise
              de dados hospitalares, funcionando como uma camada
              intermediária entre diferentes fontes de informação
              e os dados utilizados para gestão e análise.
            </p>

            <span class="badge bg-secondary">
              Em desenvolvimento
            </span>

          </div>

        </div>


        <!-- Follow-OS -->
        <div class="col-md-6 d-flex align-items-stretch">

          <div class="icon-box">

            <i class="bi bi-clipboard-check"></i>

            <h4>
              <a href="#">Follow-OS</a>
            </h4>

            <p>
              Projeto em desenvolvimento voltado ao acompanhamento
              e organização de ordens de serviço, atendimentos e
              atividades realizadas em campo.
            </p>

            <span class="badge bg-secondary">
              Em desenvolvimento
            </span>

          </div>

        </div>


      </div>

    </div>

  </section>

  <!-- ======= Frequently Asked Questions Section ======= -->
  <section id="faq" class="faq section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Dúvidas frequentes</h2>
      </div>

      <div class="faq-list">
        <ul>
          <li data-aos="fade-up" data-aos="fade-up" data-aos-delay="100">
            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse"
              data-bs-target="#faq-list-1">Como a tecnologia pode melhorar o atendimento hospitalar? <i
                class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
              <p>
                A tecnologia, quando bem aplicada, organiza o fluxo de atendimento, reduz erros e facilita o trabalho da equipe.
                Sistemas bem utilizados ajudam desde o cadastro do paciente até o registro final das informações.
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="200">
            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapsed"
              data-bs-target="#faq-list-2">Você trabalha com sistemas hospitalares? <i
                class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
              <p>
                Atuo no suporte, uso e melhoria de sistemas hospitalares, ajudando equipes a utilizarem corretamente as ferramentas
                no dia a dia.
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="300">
            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3"
              class="collapsed">Como você ajuda na organização de processos hospitalares? <i class="bx bx-chevron-down icon-show"></i><i
                class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
              <p>
                Tenho experiência com organização e regularização de dados de pacientes, incluindo processos relacionados ao Cartão SUS, evitando erros que impactam o atendimento e o faturamento.
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="500">
            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapsed"
              data-bs-target="#faq-list-4">Você oferece treinamento para equipes hospitalares?<i class="bx bx-chevron-down icon-show"></i><i
                class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
              <p>
                Sim, realizo treinamentos práticos voltados para profissionais com pouca familiaridade com tecnologia, facilitando o uso de sistemas no dia a dia.
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="500">
            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5"
              class="collapsed">A tecnologia resolve todos os problemas do hospital? <i class="bx bx-chevron-down icon-show"></i><i
                class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
              <p>
                Não. A tecnologia ajuda, mas precisa estar alinhada com processos bem definidos e com a realidade da equipe. O foco é
                sempre simplificar e tornar o uso prático.
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="500">
            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-6"
              class="collapsed">Quanto tempo leva para melhorar um processo hospitalar? <i
                class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-6" class="collapse" data-bs-parent=".faq-list">
              <p>
                Depende do cenário, mas muitas melhorias podem ser aplicadas rapidamente com ajustes simples no fluxo e no uso correto
                dos sistemas.
              </p>
            </div>
          </li>
          <li data-aos="fade-up" data-aos-delay="500">
            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-7"
              class="collapsed">Como erros no cadastro impactam o faturamento SUS? <i
                class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-7" class="collapse" data-bs-parent=".faq-list">
              <p>
                Erros em dados do paciente, como CNS inválido, CPF incorreto ou inconsistências cadastrais, podem levar à rejeição de
                produções ou glosas. A qualidade do cadastro é essencial para garantir que os atendimentos sejam processados
                corretamente.
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="500">
            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-8"
              class="collapsed">Você atua na prevenção de glosas no SUS? <i
                class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-8" class="collapse" data-bs-parent=".faq-list">
              <p>
                Sim, e a prevenção começa na origem do dado. Trabalho na organização dos processos e orientação das equipes para garantir que as informações sejam registradas corretamente desde o atendimento inicial.
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="500">
            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-9"
              class="collapsed">Como melhorar a qualidade dos dados para faturamento? <i
                class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-9" class="collapse" data-bs-parent=".faq-list">
              <p>
                Através da padronização de cadastros, validação de informações no momento do atendimento e treinamento da equipe.
                Pequenos ajustes no processo reduzem significativamente erros e retrabalho.
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="500">
            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-10"
              class="collapsed">Você já trabalhou dentro de hospital? <i
                class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-10" class="collapse" data-bs-parent=".faq-list">
              <p>
                Sim. Minha experiência vem da prática no ambiente hospitalar, lidando diretamente com sistemas, recepção, cadastro de
                pacientes e desafios operacionais do dia a dia.
              </p>
            </div>
          </li>
        </ul>
        <strong>“O faturamento começa no atendimento — não no sistema.”</strong>
      </div>

    </div>
  </section><!-- End Frequently Asked Questions Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Contato</h2>
      </div>

      <div class="row mt-1 d-flex justify-content-end" data-aos="fade-right" data-aos-delay="100">

        <!-- Informações de contato -->
        <div class="col-lg-5">

          <div class="info">

            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Localização:</h4>
              <p>Ouricuri-PE, Brasil</p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <a href="mailto:contato@gsmicros.com.br">
                <p><strong>Envie um E-mail</strong></p>
              </a>
            </div>

          </div>

        </div>

        <!-- Formulário -->
        <div class="col-lg-6 mt-5 mt-lg-0"
          data-aos="fade-left"
          data-aos-delay="100">

          <div class="row">

            <div class="col-md-10">

              <!-- Área onde os alertas serão exibidos -->
              <div id="contact-alert"></div>

              <form action="./forms/contact.php" method="post">

                <div class="form-group">
                  <label for="nome">Nome:</label>

                  <input
                    type="text"
                    class="form-control"
                    id="nome"
                    name="nome"
                    required
                    maxlength="100">
                </div>

                <div class="form-group">
                  <label for="email">Email:</label>

                  <input
                    type="email"
                    class="form-control"
                    id="email"
                    name="email"
                    required
                    maxlength="150">
                </div>

                <div class="form-group">
                  <label for="mensagem">Mensagem:</label>

                  <textarea
                    class="form-control"
                    id="mensagem"
                    name="mensagem"
                    rows="5"
                    maxlength="2000"
                    required></textarea>
                </div>

                <br>

                <button type="submit" class="btn btn-primary">
                  Enviar
                </button>

              </form>

            </div>

          </div>

        </div>

      </div>

    </div>
  </section>


</main>