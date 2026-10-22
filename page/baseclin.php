<?php

/**
 * Página comercial do BaseClin — GSMICROS
 *
 * Integração:
 * 1. Coloque este arquivo na pasta de páginas do site (ajuste o caminho conforme seu projeto).
 * 2. Se o site já possui header/footer compartilhados, inclua-os nos pontos indicados abaixo.
 * 3. Substitua o link #contato pelo destino real do formulário de contato da GSMICROS, se necessário.
 *
 * Importante: esta página descreve o BaseClin como projeto em desenvolvimento.
 * Não apresenta módulos futuros como funcionalidades já disponíveis.
 */
$pageTitle = 'BaseClin | Dados e Inteligência para Gestão Hospitalar — GSMICROS';
$pageDescription = 'Conheça o BaseClin, projeto da GSMICROS para consolidar, organizar e analisar dados hospitalares, apoiando indicadores e decisões de gestão. Em desenvolvimento.';
$canonicalUrl = 'https://gsmicros.com.br/baseclin.php'; // Ajuste se a URL final for diferente.
?>
<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
  <meta name="description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8') ?>">
  <meta name="robots" content="index,follow">
  <link rel="canonical" href="<?= htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8') ?>">
  <meta property="og:type" content="website">
  <meta property="og:locale" content="pt_BR">
  <meta property="og:site_name" content="GSMICROS">
  <meta property="og:title" content="BaseClin | Dados e Inteligência para Gestão Hospitalar">
  <meta property="og:description" content="Uma iniciativa da GSMICROS para organizar e analisar informações hospitalares e apoiar a gestão baseada em dados.">
  <meta property="og:url" content="<?= htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8') ?>">
  <meta name="theme-color" content="#0b3154">

  <!-- Se o projeto já carrega Bootstrap e Bootstrap Icons no header global, evite duplicar estas referências. -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

  <style>
    :root {
      --bc-navy: #0b3154;
      --bc-blue: #1268a8;
      --bc-cyan: #18a6b7;
      --bc-green: #27a78b;
      --bc-ink: #183247;
      --bc-muted: #617486;
      --bc-pale: #f1f7fb;
      --bc-border: #dce8ef;
      --bc-white: #fff;
      --bc-radius: 1.25rem;
      --bc-shadow: 0 18px 48px rgba(11, 49, 84, .10);
    }

    html {
      scroll-behavior: smooth;
      scroll-padding-top: 5rem;
    }

    body {
      margin: 0;
      font-family: Inter, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
      color: var(--bc-ink);
      line-height: 1.7;
    }

    a {
      text-underline-offset: .2em;
    }

    .bc-skip {
      position: absolute;
      left: -9999px;
      top: auto;
      z-index: 1000;
    }

    .bc-skip:focus {
      left: 1rem;
      top: 1rem;
      padding: .75rem 1rem;
      background: #fff;
      color: var(--bc-navy);
      border-radius: .5rem;
    }

    .bc-nav {
      background: rgba(255, 255, 255, .96);
      border-bottom: 1px solid var(--bc-border);
    }

    .bc-brand {
      font-weight: 800;
      letter-spacing: -.04em;
      color: var(--bc-navy);
      font-size: 1.4rem;
    }

    .bc-brand span {
      color: var(--bc-cyan);
    }

    .bc-nav .nav-link {
      font-weight: 600;
      color: #35536b;
    }

    .bc-nav .nav-link:hover,
    .bc-nav .nav-link:focus {
      color: var(--bc-blue);
    }

    .bc-btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: .55rem;
      border-radius: 999px;
      padding: .85rem 1.25rem;
      font-weight: 700;
      text-decoration: none;
      transition: transform .2s ease, box-shadow .2s ease, background .2s ease;
    }

    .bc-btn:hover {
      transform: translateY(-2px);
    }

    .bc-btn-primary {
      background: var(--bc-cyan);
      color: #052c40;
      border: 1px solid var(--bc-cyan);
      box-shadow: 0 10px 24px rgba(24, 166, 183, .22);
    }

    .bc-btn-primary:hover {
      color: #052c40;
      background: #40c1c7;
    }

    .bc-btn-outline {
      color: #fff;
      border: 1px solid rgba(255, 255, 255, .55);
    }

    .bc-btn-outline:hover {
      color: #fff;
      background: rgba(255, 255, 255, .1);
    }

    .bc-hero {
      position: relative;
      overflow: hidden;
      color: #fff;
      background: radial-gradient(circle at 85% 15%, rgba(24, 166, 183, .34), transparent 28%), linear-gradient(125deg, #082943 0%, #0b4772 57%, #126c88 100%);
    }

    .bc-hero::after {
      content: "";
      position: absolute;
      width: 28rem;
      height: 28rem;
      right: -9rem;
      bottom: -17rem;
      border: 1px solid rgba(255, 255, 255, .15);
      border-radius: 50%;
      box-shadow: 0 0 0 3rem rgba(255, 255, 255, .025), 0 0 0 6rem rgba(255, 255, 255, .02);
      pointer-events: none;
    }

    .bc-hero-inner {
      position: relative;
      z-index: 1;
    }

    .bc-eyebrow {
      display: inline-flex;
      align-items: center;
      gap: .5rem;
      border: 1px solid rgba(255, 255, 255, .26);
      border-radius: 999px;
      padding: .4rem .8rem;
      color: #d7f6f5;
      background: rgba(255, 255, 255, .07);
      font-size: .8rem;
      font-weight: 700;
      letter-spacing: .08em;
      text-transform: uppercase;
    }

    .bc-hero h1 {
      font-size: clamp(2.5rem, 5.2vw, 4.65rem);
      line-height: 1.08;
      letter-spacing: -.055em;
      font-weight: 800;
      max-width: 820px;
    }

    .bc-hero p {
      color: #e0edf5;
      font-size: clamp(1.05rem, 1.5vw, 1.2rem);
      max-width: 700px;
    }

    .bc-hero-art {
      min-height: 330px;
      border: 1px solid rgba(255, 255, 255, .2);
      border-radius: 1.5rem;
      background: linear-gradient(145deg, rgba(255, 255, 255, .13), rgba(255, 255, 255, .04));
      padding: 1.25rem;
      box-shadow: 0 24px 70px rgba(0, 0, 0, .15);
      backdrop-filter: blur(8px);
    }

    .bc-art-top {
      display: flex;
      gap: .35rem;
      padding-bottom: 1rem;
      border-bottom: 1px solid rgba(255, 255, 255, .15);
    }

    .bc-art-dot {
      width: .55rem;
      height: .55rem;
      border-radius: 50%;
      background: rgba(255, 255, 255, .55);
    }

    .bc-art-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: .8rem;
      margin-top: 1rem;
    }

    .bc-art-card {
      padding: 1rem;
      border-radius: 1rem;
      background: rgba(255, 255, 255, .09);
      border: 1px solid rgba(255, 255, 255, .12);
    }

    .bc-art-card i {
      font-size: 1.45rem;
      color: #6fe1db;
    }

    .bc-art-line {
      height: .42rem;
      background: rgba(255, 255, 255, .18);
      border-radius: 1rem;
      margin-top: .7rem;
    }

    .bc-art-line.short {
      width: 55%;
    }

    .bc-section {
      padding: 5rem 0;
    }

    .bc-section-soft {
      background: var(--bc-pale);
    }

    .bc-kicker {
      color: var(--bc-blue);
      text-transform: uppercase;
      font-size: .78rem;
      font-weight: 800;
      letter-spacing: .12em;
    }

    .bc-heading {
      color: var(--bc-navy);
      font-size: clamp(1.9rem, 3.2vw, 2.8rem);
      font-weight: 800;
      letter-spacing: -.045em;
      line-height: 1.2;
    }

    .bc-lead {
      color: var(--bc-muted);
      font-size: 1.08rem;
      max-width: 780px;
    }

    .bc-card {
      height: 100%;
      padding: 1.6rem;
      border: 1px solid var(--bc-border);
      border-radius: var(--bc-radius);
      background: #fff;
      box-shadow: 0 8px 24px rgba(11, 49, 84, .035);
    }

    .bc-card h3 {
      color: var(--bc-navy);
      font-size: 1.12rem;
      font-weight: 800;
      margin: .9rem 0 .55rem;
    }

    .bc-card p {
      color: var(--bc-muted);
      margin-bottom: 0;
    }

    .bc-icon {
      display: inline-grid;
      place-items: center;
      width: 3.1rem;
      height: 3.1rem;
      border-radius: 1rem;
      background: #e7f7f7;
      color: #087f91;
      font-size: 1.4rem;
    }

    .bc-checklist {
      list-style: none;
      padding: 0;
      margin: 1.2rem 0 0;
    }

    .bc-checklist li {
      display: flex;
      gap: .7rem;
      margin: .65rem 0;
      color: #405b70;
    }

    .bc-checklist i {
      color: var(--bc-green);
      margin-top: .2rem;
    }

    .bc-module {
      display: flex;
      gap: 1rem;
      align-items: flex-start;
      padding: 1.3rem 0;
      border-bottom: 1px solid var(--bc-border);
    }

    .bc-module:last-child {
      border-bottom: 0;
    }

    .bc-module h3 {
      color: var(--bc-navy);
      font-size: 1.05rem;
      font-weight: 800;
      margin: 0 0 .3rem;
    }

    .bc-module p {
      color: var(--bc-muted);
      margin: 0;
    }

    .bc-status {
      display: inline-block;
      font-size: .72rem;
      font-weight: 800;
      border-radius: 999px;
      padding: .25rem .6rem;
      margin-bottom: .4rem;
    }

    .bc-status-current {
      color: #14634f;
      background: #dff6ed;
    }

    .bc-status-progress {
      color: #82550a;
      background: #fff0cb;
    }

    .bc-tech {
      display: flex;
      align-items: center;
      gap: .7rem;
      border: 1px solid var(--bc-border);
      background: #fff;
      padding: .9rem 1rem;
      border-radius: .9rem;
      font-weight: 700;
      color: var(--bc-navy);
    }

    .bc-tech i {
      color: var(--bc-blue);
      font-size: 1.2rem;
    }

    .bc-note {
      border-left: 4px solid var(--bc-cyan);
      border-radius: 0 .75rem .75rem 0;
      background: #eaf8fa;
      padding: 1rem 1.2rem;
      color: #31586b;
    }

    .bc-cta {
      color: #fff;
      background: linear-gradient(120deg, #0b3154, #0d5c7e);
      border-radius: 1.5rem;
      padding: clamp(2rem, 5vw, 4rem);
    }

    .bc-cta h2 {
      color: #fff;
      font-size: clamp(1.8rem, 3vw, 2.7rem);
      font-weight: 800;
      letter-spacing: -.04em;
    }

    .bc-cta p {
      color: #dbeaf2;
      max-width: 720px;
    }

    .bc-footer {
      background: #071f34;
      color: #d6e2ea;
      padding: 1.5rem 0;
      font-size: .9rem;
    }

    .bc-footer a {
      color: #8de2df;
    }

    @media (max-width: 767.98px) {
      .bc-section {
        padding: 3.5rem 0;
      }

      .bc-hero {
        padding-top: 3.5rem !important;
      }

      .bc-hero-art {
        min-height: auto;
      }

      .bc-art-grid {
        gap: .55rem;
      }

      .bc-art-card {
        padding: .8rem;
      }
    }

    @media (prefers-reduced-motion: reduce) {
      html {
        scroll-behavior: auto;
      }

      *,
      *::before,
      *::after {
        transition-duration: .01ms !important;
        animation-duration: .01ms !important;
      }
    }
  </style>

  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "SoftwareApplication",
      "name": "BaseClin",
      "applicationCategory": "BusinessApplication",
      "operatingSystem": "Web",
      "description": "Projeto em desenvolvimento da GSMICROS voltado à consolidação, organização e análise de dados hospitalares.",
      "publisher": {
        "@type": "Organization",
        "name": "GSMICROS",
        "url": "https://gsmicros.com.br/"
      }
    }
  </script>
</head>

<body>
  <a class="bc-skip" href="#conteudo">Pular para o conteúdo principal</a>

  <!-- Se o site possui cabeçalho global em PHP, inclua-o aqui e remova a navegação local abaixo para evitar duplicidade. -->
  <nav class="navbar navbar-expand-lg bc-nav sticky-top" aria-label="Navegação principal da página BaseClin">
    <div class="container py-2">
      <!-- <a class="navbar-brand bc-brand" href="https://gsmicros.com.br/" aria-label="GSMICROS — página inicial">GSM<span>ICROS</span></a> -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#bcNav" aria-controls="bcNav" aria-expanded="false" aria-label="Abrir menu">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="bcNav">
        <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">
          <li class="nav-item"><a class="nav-link" href="#sobre">O projeto</a></li>
          <li class="nav-item"><a class="nav-link" href="#modulos">Módulos</a></li>
          <li class="nav-item"><a class="nav-link" href="#tecnologia">Tecnologia</a></li>
          <li class="nav-item ms-lg-2"><a class="bc-btn bc-btn-primary py-2" href="#contato">Fale com a GSMICROS <i class="bi bi-arrow-up-right" aria-hidden="true"></i></a></li>
        </ul>
      </div>
    </div>
  </nav>

  <main id="conteudo">
    <section class="bc-hero py-5 py-lg-6">
      <div class="container py-lg-5 bc-hero-inner">
        <div class="row align-items-center g-5">
          <div class="col-lg-7">
            <span class="bc-eyebrow mb-4"><i class="bi bi-activity" aria-hidden="true"></i> Projeto de tecnologia em saúde</span>
            <h1 class="mb-4">Dados hospitalares mais organizados. Decisões mais bem informadas.</h1>
            <p class="mb-4">O <strong>BaseClin</strong> é uma iniciativa da GSMICROS para consolidar, organizar e analisar informações hospitalares, criando uma base para acompanhar dados, compreender processos e apoiar a gestão em saúde.</p>
            <div class="d-flex flex-wrap gap-3">
              <a class="bc-btn bc-btn-primary" href="#sobre">Conheça o BaseClin <i class="bi bi-arrow-down" aria-hidden="true"></i></a>
              <a class="bc-btn bc-btn-outline" href="#contato">Converse sobre o projeto <i class="bi bi-chat-dots" aria-hidden="true"></i></a>
            </div>
            <p class="small mt-4 mb-0"><i class="bi bi-info-circle me-1" aria-hidden="true"></i> Projeto em desenvolvimento, com módulos já implementados e evolução contínua.</p>
          </div>
          <div class="col-lg-5">
            <div class="bc-hero-art" role="img" aria-label="Ilustração conceitual de painéis, indicadores e dados hospitalares conectados">
              <div class="bc-art-top"><span class="bc-art-dot"></span><span class="bc-art-dot"></span><span class="bc-art-dot"></span></div>
              <div class="d-flex align-items-center justify-content-between mt-3">
                <div>
                  <div class="small text-white-50">BASECLIN</div>
                  <div class="h5 fw-bold mb-0">Visão integrada dos dados</div>
                </div>
                <i class="bi bi-hospital fs-2" style="color:#6fe1db" aria-hidden="true"></i>
              </div>
              <div class="bc-art-grid">
                <div class="bc-art-card"><i class="bi bi-building" aria-hidden="true"></i>
                  <div class="fw-semibold mt-2">Hospitais</div>
                  <div class="bc-art-line"></div>
                  <div class="bc-art-line short"></div>
                </div>
                <div class="bc-art-card"><i class="bi bi-people" aria-hidden="true"></i>
                  <div class="fw-semibold mt-2">Pacientes</div>
                  <div class="bc-art-line"></div>
                  <div class="bc-art-line short"></div>
                </div>
                <div class="bc-art-card"><i class="bi bi-clipboard2-pulse" aria-hidden="true"></i>
                  <div class="fw-semibold mt-2">Atendimentos</div>
                  <div class="bc-art-line"></div>
                  <div class="bc-art-line short"></div>
                </div>
                <div class="bc-art-card"><i class="bi bi-bar-chart-line" aria-hidden="true"></i>
                  <div class="fw-semibold mt-2">Indicadores</div>
                  <div class="bc-art-line"></div>
                  <div class="bc-art-line short"></div>
                </div>
              </div>
              <div class="small text-white-50 mt-3">Ilustração conceitual — não representa dados reais de uma instituição.</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="bc-section" id="sobre">
      <div class="container">
        <div class="row g-5 align-items-start">
          <div class="col-lg-6">
            <span class="bc-kicker">Sobre o projeto</span>
            <h2 class="bc-heading mt-2 mb-4">Transformar dados dispersos em informação útil para a gestão.</h2>
            <p class="bc-lead">Hospitais e clínicas produzem informações em diferentes etapas da rotina: cadastro, atendimento, consulta, procedimentos e atividades administrativas. Quando esses dados ficam isolados ou difíceis de analisar, torna-se mais trabalhoso construir uma visão abrangente da operação.</p>
            <p>O BaseClin está sendo desenvolvido para apoiar a organização e a consolidação dessas informações em uma estrutura que favoreça consultas, análises e evolução gradual dos recursos de gestão de dados.</p>
            <p>Mais do que reunir registros, a proposta é criar condições para que informações confiáveis e bem estruturadas possam contribuir para o acompanhamento dos processos e para decisões administrativas mais fundamentadas.</p>
          </div>
          <div class="col-lg-6">
            <div class="bc-card p-4 p-lg-5">
              <span class="bc-icon"><i class="bi bi-bullseye" aria-hidden="true"></i></span>
              <h3 class="h4 mt-3">Objetivo do BaseClin</h3>
              <p>Desenvolver uma solução que ajude a centralizar e organizar dados hospitalares, estabelecendo uma base técnica para análises, indicadores e futuras integrações conforme os requisitos de cada projeto.</p>
              <ul class="bc-checklist">
                <li><i class="bi bi-check-circle-fill" aria-hidden="true"></i><span>Organização estruturada das informações.</span></li>
                <li><i class="bi bi-check-circle-fill" aria-hidden="true"></i><span>Base para consultas e acompanhamento de dados.</span></li>
                <li><i class="bi bi-check-circle-fill" aria-hidden="true"></i><span>Evolução modular, de acordo com prioridades e validação.</span></li>
                <li><i class="bi bi-check-circle-fill" aria-hidden="true"></i><span>Apoio à gestão, sem substituir o julgamento dos profissionais.</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="bc-section bc-section-soft" id="desafios">
      <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width:800px">
          <span class="bc-kicker">O desafio dos dados em saúde</span>
          <h2 class="bc-heading mt-2">Uma visão organizada começa com informações bem estruturadas.</h2>
          <p class="bc-lead mx-auto">A proposta do BaseClin responde a desafios frequentes na gestão da informação — cuja dimensão varia conforme os sistemas, os processos e a realidade de cada instituição.</p>
        </div>
        <div class="row g-4">
          <div class="col-md-6 col-xl-3">
            <article class="bc-card"><span class="bc-icon"><i class="bi bi-diagram-3" aria-hidden="true"></i></span>
              <h3>Dados distribuídos</h3>
              <p>Informações registradas em sistemas e arquivos diferentes podem dificultar uma visão conjunta da operação.</p>
            </article>
          </div>
          <div class="col-md-6 col-xl-3">
            <article class="bc-card"><span class="bc-icon"><i class="bi bi-search" aria-hidden="true"></i></span>
              <h3>Dificuldade de consulta</h3>
              <p>Localizar e comparar registros pode exigir trabalho manual quando não há estrutura de consulta adequada.</p>
            </article>
          </div>
          <div class="col-md-6 col-xl-3">
            <article class="bc-card"><span class="bc-icon"><i class="bi bi-bar-chart" aria-hidden="true"></i></span>
              <h3>Indicadores limitados</h3>
              <p>Dados inconsistentes ou pouco acessíveis tornam mais difícil acompanhar tendências e resultados.</p>
            </article>
          </div>
          <div class="col-md-6 col-xl-3">
            <article class="bc-card"><span class="bc-icon"><i class="bi bi-arrow-repeat" aria-hidden="true"></i></span>
              <h3>Trabalho repetitivo</h3>
              <p>Conferências e consolidações manuais podem consumir tempo e aumentar a possibilidade de inconsistências.</p>
            </article>
          </div>
        </div>
      </div>
    </section>

    <section class="bc-section" id="modulos">
      <div class="container">
        <div class="row g-5 align-items-start">
          <div class="col-lg-5">
            <span class="bc-kicker">Estrutura funcional</span>
            <h2 class="bc-heading mt-2 mb-4">Módulos que formam a base do projeto.</h2>
            <p class="bc-lead">O desenvolvimento do BaseClin é modular. Alguns componentes já foram implementados e testados durante o desenvolvimento; outros seguem sujeitos a ampliação, integração e validação.</p>
            <div class="bc-note mt-4"><strong>Transparência:</strong> a presença de um módulo na lista não significa que exista uma solução final pronta para implantação em produção. O estágio, o escopo e os critérios de aceite devem ser confirmados em uma demonstração técnica.</div>
            <section class="mt-2">
              <img src="https://raw.githubusercontent.com/genildol/gsmicros/main/assets/img/filas.jpg" alt="Imagem conceitual de filas de dados hospitalares conectadas a um painel de indicadores" class="img-fluid mt-4 rounded" />

            </section>
          </div>
          <div class="col-lg-7">
            <div class="bc-card p-4 p-lg-5">
              <div class="bc-module"><span class="bc-icon"><i class="bi bi-building" aria-hidden="true"></i></span>
                <div><span class="bc-status bc-status-current">Implementado no desenvolvimento</span>
                  <h3>Hospitais</h3>
                  <p>Estrutura inicial para registrar e consultar informações das instituições hospitalares.</p>
                </div>
              </div>
              <div class="bc-module"><span class="bc-icon"><i class="bi bi-person-vcard" aria-hidden="true"></i></span>
                <div><span class="bc-status bc-status-current">Implementado no desenvolvimento</span>
                  <h3>Pacientes e vínculos hospitalares</h3>
                  <p>Modelagem e funcionalidades iniciais para organizar registros de pacientes e seus vínculos com hospitais.</p>
                </div>
              </div>
              <div class="bc-module"><span class="bc-icon"><i class="bi bi-clipboard2-pulse" aria-hidden="true"></i></span>
                <div><span class="bc-status bc-status-current">Implementado no desenvolvimento</span>
                  <h3>Atendimentos e consultas</h3>
                  <p>Estruturas para registrar informações operacionais relacionadas a atendimentos e consultas.</p>
                </div>
              </div>
              <div class="bc-module"><span class="bc-icon"><i class="bi bi-journal-medical" aria-hidden="true"></i></span>
                <div><span class="bc-status bc-status-current">Implementado no desenvolvimento</span>
                  <h3>Diagnósticos e CID-10</h3>
                  <p>Modelagem e serviços iniciais para consulta de códigos CID-10 e associação de diagnósticos às consultas.</p>
                </div>
              </div>
              <div class="bc-module"><span class="bc-icon"><i class="bi bi-graph-up-arrow" aria-hidden="true"></i></span>
                <div><span class="bc-status bc-status-progress">Em evolução</span>
                  <h3>Painel e resumo de dados</h3>
                  <p>Estrutura inicial de resumo para apresentar quantitativos de registros. A cobertura dos indicadores depende da evolução e validação dos dados disponíveis.</p>
                </div>
              </div>
              <div class="bc-module"><span class="bc-icon"><i class="bi bi-plug" aria-hidden="true"></i></span>
                <div><span class="bc-status bc-status-progress">Planejado conforme escopo</span>
                  <h3>Importação e integrações ampliadas</h3>
                  <p>Possibilidades de integração com fontes externas, arquivos e bases de dados, após definição de requisitos, mapeamento e validação técnica.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="bc-section bc-section-soft" id="beneficios">
      <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width:780px">
          <span class="bc-kicker">Valor para a gestão</span>
          <h2 class="bc-heading mt-2">O que uma base de dados bem organizada pode apoiar?</h2>
          <p class="bc-lead mx-auto">Os resultados dependem da qualidade dos dados, da integração disponível, dos processos institucionais e da forma como a solução for implantada.</p>
        </div>
        <div class="row g-4">
          <div class="col-md-6 col-lg-4">
            <article class="bc-card"><span class="bc-icon"><i class="bi bi-view-list" aria-hidden="true"></i></span>
              <h3>Visibilidade operacional</h3>
              <p>Facilitar a consulta de registros e apoiar uma visão mais estruturada de informações selecionadas.</p>
            </article>
          </div>
          <div class="col-md-6 col-lg-4">
            <article class="bc-card"><span class="bc-icon"><i class="bi bi-clipboard-data" aria-hidden="true"></i></span>
              <h3>Acompanhamento de indicadores</h3>
              <p>Estabelecer uma base para relatórios e indicadores que sejam definidos, calculados e validados com a instituição.</p>
            </article>
          </div>
          <div class="col-md-6 col-lg-4">
            <article class="bc-card"><span class="bc-icon"><i class="bi bi-diagram-2" aria-hidden="true"></i></span>
              <h3>Organização da informação</h3>
              <p>Estruturar entidades e relacionamentos para favorecer consistência, rastreabilidade e evolução do sistema.</p>
            </article>
          </div>
          <div class="col-md-6 col-lg-4">
            <article class="bc-card"><span class="bc-icon"><i class="bi bi-lightbulb" aria-hidden="true"></i></span>
              <h3>Apoio à decisão</h3>
              <p>Disponibilizar informações que, quando confiáveis e contextualizadas, contribuam para decisões de gestão.</p>
            </article>
          </div>
          <div class="col-md-6 col-lg-4">
            <article class="bc-card"><span class="bc-icon"><i class="bi bi-arrow-left-right" aria-hidden="true"></i></span>
              <h3>Evolução gradual</h3>
              <p>Permitir que novos módulos e fontes sejam avaliados e priorizados conforme as necessidades do projeto.</p>
            </article>
          </div>
          <div class="col-md-6 col-lg-4">
            <article class="bc-card"><span class="bc-icon"><i class="bi bi-shield-check" aria-hidden="true"></i></span>
              <h3>Governança de dados</h3>
              <p>Incorporar requisitos de acesso, privacidade, qualidade e segurança desde o planejamento das integrações.</p>
            </article>
          </div>
        </div>
      </div>
    </section>

    <section class="bc-section" id="tecnologia">
      <div class="container">
        <div class="row align-items-center g-5">
          <div class="col-lg-6">
            <span class="bc-kicker">Arquitetura tecnológica</span>
            <h2 class="bc-heading mt-2 mb-4">Tecnologia modular para sustentar a evolução do BaseClin.</h2>
            <p class="bc-lead">A arquitetura atual utiliza tecnologias conhecidas no desenvolvimento de aplicações web e na organização de dados relacionais.</p>
            <p>A escolha das ferramentas busca separar a camada de dados, os serviços de aplicação e a interface, facilitando a manutenção e a evolução do projeto. A configuração final de implantação, segurança, desempenho e integração deverá ser validada conforme o ambiente de uso.</p>
          </div>
          <div class="col-lg-6">
            <div class="row g-3">
              <div class="col-sm-6">
                <div class="bc-tech"><i class="bi bi-hdd-network" aria-hidden="true"></i> PostgreSQL</div>
              </div>
              <div class="col-sm-6">
                <div class="bc-tech"><i class="bi bi-braces" aria-hidden="true"></i> Prisma ORM</div>
              </div>
              <div class="col-sm-6">
                <div class="bc-tech"><i class="bi bi-server" aria-hidden="true"></i> Node.js</div>
              </div>
              <div class="col-sm-6">
                <div class="bc-tech"><i class="bi bi-diagram-3" aria-hidden="true"></i> Express</div>
              </div>
              <div class="col-sm-6">
                <div class="bc-tech"><i class="bi bi-window" aria-hidden="true"></i> Interface web</div>
              </div>
              <div class="col-sm-6">
                <div class="bc-tech"><i class="bi bi-code-slash" aria-hidden="true"></i> JavaScript / TypeScript</div>
              </div>
            </div>
            <p class="small text-secondary mt-3">As tecnologias listadas representam a arquitetura de desenvolvimento atual. Não constituem, por si só, certificação de segurança ou disponibilidade em produção.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="bc-section bc-section-soft" id="parcerias">
      <div class="container">
        <div class="row g-5 align-items-center">
          <div class="col-lg-7">
            <span class="bc-kicker">Evolução orientada às necessidades da saúde</span>

            <h2 class="bc-heading mt-2 mb-4">Tecnologia que busca compreender a realidade hospitalar.</h2>

            <p class="bc-lead">O BaseClin é um projeto da GSMICROS que está em desenvolvimento, com foco na consolidação, organização e análise de dados hospitalares. Sua evolução considera um aspecto fundamental: compreender os desafios enfrentados diariamente pelas instituições de saúde e as necessidades de informação que apoiam seus processos de gestão.</p>

            <p>Nesse contexto, conhecer a experiência de hospitais, clínicas, gestores e profissionais que atuam na área da saúde é uma oportunidade de ampliar a compreensão sobre a realidade operacional, os desafios relacionados aos dados e as necessidades de acompanhamento de indicadores.</p>

            <ul class="bc-checklist">
              <li><i class="bi bi-check-circle-fill" aria-hidden="true"></i><span>Levantamento inicial das necessidades de informação.</span></li>
              <li><i class="bi bi-check-circle-fill" aria-hidden="true"></i><span>Discussão de possibilidades técnicas e limites de integração.</span></li>
              <li><i class="bi bi-check-circle-fill" aria-hidden="true"></i><span>Definição de prioridades e próximos passos, sem compromisso de funcionalidades não validadas.</span></li>
            </ul>
          </div>
          <div class="col-lg-5">
            <div class="bc-card">
              <span class="bc-icon"><i class="bi bi-people" aria-hidden="true"></i></span>
              <h3>Para quem o BaseClin pode ser relevante?</h3>
              <p>O projeto é direcionado a instituições de saúde e profissionais interessados em melhorar a organização e a utilização de informações hospitalares, incluindo:</p>
              <ul>
                <li>Hospitais e clínicas que buscam aprimorar a análise de seus dados.</li>
                <li>Gestores interessados em indicadores para apoiar decisões administrativas e operacionais.</li>
                <li>Profissionais que trabalham com sistemas, informações e processos hospitalares.</li>
                <li>Instituições interessadas em conhecer soluções tecnológicas voltadas à gestão e à análise de dados em saúde.</li>
              </ul>
              <p></p>
              <hr class="my-4" style="border-color:var(--bc-border)">
              <h3>O que podemos conversar?</h3>
              <p>O projeto é direcionado a instituições de saúde e profissionais interessados em melhorar a organização e a utilização de informações hospitalares, incluindo:</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="py-4 py-lg-5" id="contato">
      <div class="container">
        <div class="bc-cta">
          <div class="row align-items-center g-4">
            <div class="col-lg-8">
              <span class="bc-eyebrow mb-3">Vamos conversar</span>
              <h2>Quer conhecer o projeto BaseClin?</h2>
              <p class="mb-lg-0">Entre em contato com a GSMICROS para conhecer o projeto e conversar sobre os desafios de informação e gestão da sua instituição.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
              <!-- Ajuste o href para a página real de contato ou para o canal oficial da empresa. -->
              <a class="bc-btn bc-btn-primary" href="https://gsmicros.com.br/#contato">Falar com a GSMICROS <i class="bi bi-arrow-up-right" aria-hidden="true"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- Se o site possui rodapé global em PHP, inclua-o aqui e remova o rodapé local abaixo para evitar duplicidade. -->
  <footer class="bc-footer">
    <div class="container d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-2">
      <div>© <?= date('Y') ?> GSMICROS. </div>
      <div>BaseClin — projeto em desenvolvimento.</div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>