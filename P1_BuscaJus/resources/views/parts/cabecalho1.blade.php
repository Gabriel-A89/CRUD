<style>
  html,
  body,
  header,
  .jarallax {
    height: 700px;
  }

  @media (max-width: 740px) {
    html,
    body,
    header,
    .jarallax {
      height: 100vh;
    }
  }

  @media (min-width: 800px) and (max-width: 850px) {
    html,
    body,
    header,
    .jarallax {
      height: 100vh;
    }
  }

  @media (min-width: 560px) and (max-width: 650px) {
    header .jarallax h5 {
      margin-bottom: 1.5rem !important;
    }
  }

  .top-nav-collapse {
      background-color: #6f7782 !important;
  }
  .navbar:not(.top-nav-collapse) {
      background: #b71c1c  !important;
  }
  @media (max-width: 768px) {
      .navbar:not(.top-nav-collapse) {
          background: #6f7782 !important;
      }
  }
  @media (min-width: 800px) and (max-width: 850px) {
      .navbar:not(.top-nav-collapse) {
          background: #6f7782!important;
      }
  }
  h1 {
      letter-spacing: 8px;
  }
  h5 {
      letter-spacing: 3px;
  }
  .hr-light {
      border-top: 3px solid #fff;
      width: 80px;
  }
  footer.page-footer {
      background-color: #6f7782;
  }

  @media (max-width: 450px) {
      .btn-floating {
          margin-left: 0;
          margin-right: 0;
      }
  }
  </style>

  <nav class="navbar navbar-expand-lg navbar-dark fixed-top  scrolling-navbar">
    <div class="container">
      <a class="navbar-brand" href="home"><i class="fas fa-balance-scale fa-sm"></i><strong> BuscaJus</strong></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7"
        aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
        <ul class="navbar-nav mr-auto">
          <li class="{{ (request()->is('home')) ? 'active' : '' }}">
            <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="{{ (request()->is('servico')) ? 'active' : '' }}">
            <a class="nav-link" href="/servico">Serviço<span class="sr-only">(current)</span></a>
          </li>
          <li class="{{ (request()->is('compra')) ? 'active' : '' }}">
            <a class="nav-link" href="/compra">Contratar nosso serviço</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
