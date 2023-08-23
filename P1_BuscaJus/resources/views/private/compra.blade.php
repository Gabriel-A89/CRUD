@extends('commom.mdb-fullpage')

@section('content')
    @include('parts.cabecalho1') 

@section('content')

<style>

html,
    body,
    header,
    .carousel {
      height: 60vh;
    }

    @media (max-width: 740px) {
      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {
      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }
    .view,
    body,
    html{
        height:100%
    }
    .carousel{
        height:50%
    }
    .carousel .carousel-inner,.carousel .carousel-inner .active,.carousel .carousel-inner .carousel-item{height:100%}@media (max-width:776px){.carousel{height:100%}}.page-footer{background-color:#929FBA}
  </style>

  <!--Main layout-->
  <main>
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark mdb-color lighten-3 mt-3 mb-5">

      </nav>
      <!--/.Navbar-->

      <!--Section: Products v.3-->
      <section class="text-center mb-4">
        <a href="/adicionar" class="dark-grey-text">
          <span class="badge badge-pill success-color">Adicionar advogado</span>
        </a>
      </section>
      <section class="text-center mb-4">

        <!--Grid row-->
        <div class="row wow fadeIn">

          @foreach($compra as $advogado)
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4">

            <!--Card-->
            <div class="card">

              <!--Card image-->
              <div class="view overlay">
                <img src="{{ $advogado['linkImagem']  }}" class="card-img-top" alt="">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              <!--Card image-->

              <!--Card content-->
              <div class="card-body text-center">
                <!--Category & Title-->
                <a href="" class="grey-text">
                  <!-- <h5>Advogada civil</h5> -->
                  <h5>{{ $advogado['ramo'] }}</h5>
                </a>
                <h5>
                  <strong>
                    <!-- <a href="" class="dark-grey-text">Maria Pereira -->
                    <a href="" class="dark-grey-text">{{ $advogado['nome'] }}
                      <span class="badge badge-pill danger-color">Novo</span>
                    </a>
                  </strong>
                </h5>

                <h4 class="font-weight-bold blue-text">
                  <strong>R$ 120 a consulta</strong>
                </h4>                  
                  <a href="compra/{{ $advogado['id'] }}" class="dark-grey-text">{{ $advogado['nome'] }}
                    <span class="badge badge-pill danger-color">Deletar Advogado</span>                    
                  </a>
                  <a href="/editar/{{ $advogado['id'] }}" class="dark-grey-text">
                    <span class="badge badge-pill primary-color">Editar Advogado</span>                    
                  </a>
                  <a href="/agendar/{{ $advogado['id'] }}" class="dark-grey-text">
                    <span class="badge badge-pill success-color">Agendar consulta</span>
                  </a>
              </div>
              <!--Card content-->

            </div>
            <!--Card-->

          </div>
          <!--Grid column-->          
          @endforeach
          </div>
          <!--Fourth column-->

        </div>
        <!--Grid row-->

      </section>
      <!--Section: Products v.3-->

    </div>
  </main>


@section('content')
    @include('parts.rodape1') 
   
@endsection
