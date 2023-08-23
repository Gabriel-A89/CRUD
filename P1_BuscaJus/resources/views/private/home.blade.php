@extends('commom.mdb-fullpage')


@section('content')
    @include('parts.cabecalho1') 
   
@section('content')

<body>
  <header>
  <div class="view jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url('https://anafenacional.org.br/wp-content/uploads/2021/05/estatua-justica-4044x2022.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
      <div class="mask rgba-red-slight">
        <div class="container h-100 d-flex justify-content-center align-items-center">
          <div class="row pt-5 mt-3">
            <div class="col-md-12 wow fadeIn mb-3">
              <div class="text-center">
              <h1 class="display-4 text-white font-weight-bold mb-5 wow fadeInUp"> BuscaJus</h1>
                </li>
                <h5 class="mb-5 text-white wow fadeInUp" data-wow-delay="0.2s">Precisando de Advogado Especialista? A BuscaJus te Ajuda</h5>
                <div class="wow fadeInUp" data-wow-delay="0.4s">
                  <a class="btn btn-red btn-rounded" class="nav-link" href="/contato"><i class="fas fa-user left"></i> QUERO AJUDA ESPECIALIZADA</a>
                  <a class="btn btn-outline-white btn-rounded" class="nav-link" href="/empresa"><i class="fas fa-book left"></i> Saiba mais sobre nossa Empresa</a>
                </div>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </header>
  <main>
    <div class="container">

      <section class="section wow fadeIn" data-wow-delay="0.3s">
        <h1 class="font-weight-bold grey-text text-center h1 my-5">ATENDIMENTO DIFERENCIADO</h1>
        <div class="row">
        <p class="text-left grey-text md-5 mx-auto lead">
        <i class="fas fa-gavel red-text"></i> Advocacia especializada para sua empresa, seja ela pequena, média ou grande.<br>
        <i class="fas fa-gavel red-text"></i> Direito empresarial, tributário, trabalhista e contratos.<br>
        <i class="fas fa-gavel red-text"></i> Disponibilidade imediata.<br>
        <i class="fas fa-gavel red-text"></i> Atendimento personalizado.</p>
</div>
        
      <hr class="mb-5">

      

  </main>


@section('content')
    @include('parts.social') 

@section('content')
    @include('parts.rodape1') 
   
@endsection