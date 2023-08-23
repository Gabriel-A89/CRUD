@extends('commom.mdb-fullpage')

@section('content')
    @include('parts.cabecalho1') 
   
@section('content')

  <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-2" data-slide-to="1"></li>
      <li data-target="#carousel-example-2" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <div class="view">
          <img class="d-block w-100" src="https://blog.certisign.com.br/wp-content/uploads/2019/07/sociedade-de-advogados-e-a-importancia-do-certificado-digital-para-cada-socio.jpg"
            alt="First slide">
          <div class="mask rgba-black-light"></div>
        </div>
        <div class="carousel-caption">
          <h3 class="h3-responsive">Advogados altamente qualificados</h3>          
        </div>
      </div>
      <div class="carousel-item">
        <div class="view">
          <img class="d-block w-100" src="https://limaepagano.com.br/wp-content/uploads/2020/07/AdobeStock_196533674-1-1200x600-1.jpeg"
            alt="Second slide">
          <div class="mask rgba-black-strong"></div>
        </div>
        <div class="carousel-caption">
          <h3 class="h3-responsive">Contratos acessíveis</h3>
        </div>
      </div>
      <div class="carousel-item">
        <div class="view">
          <img class="d-block w-100" src="https://blog.certisign.com.br/wp-content/uploads/2020/03/gestao-financeira-de-advogados-autonomos-blog.jpg"
            alt="Third slide">
          <div class="mask rgba-black-slight"></div>
        </div>
        <div class="carousel-caption">
          <h3 class="h3-responsive">Advogados sempre disponíveis</h3>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    </div>

    </header>
    <main>
        <div class="container">
            <section id="team" class="section team-section pb-4 wow fadeIn" data-wow-delay="0.3s">
                <h2 class="font-weight-bold red-text text-center h1 my-5">SOBRE NÓS</h2>
                <p class=" text-justify grey-text mb-5 mx-auto lead">A <b>BuscaJus</b> possui uma equipe dinâmica, com profissionais gabaritados e com uma visão empreendedora, atenta às novas perspectivas jurídicas que surgem em nosso país.<br>
                    Com o objetivo de conferir aos nossos clientes todo o suporte jurídico necessário, aplicando a Advocacia Preventiva, ou seja, prevenindo prejuízos ou os minimizando da melhor forma.<br>

                    Analisando de forma eficaz; célere e econômica o caso concreto para apresentar a melhor solução, tanto para empresas quanto para pessoa física priorizando a relação interpessoal direta com o cliente prestando sempre informações a respeito de sua demanda.<br>

                    Sediado na cidade de Guarulhos e atuante em todo o território nacional, incluindo questões internacionais, é composto por profissionais especializados em diversas áreas.<br></p>
                    <hr class="my-5">
                        <h1 class="font-weight-bold grey-text text-center h1 my-5">NOSSOS ESPECIALISTAS</h1>

                    <div class="row mb-lg-4 text-center text-md-left">
                    <div class="col-lg-6 col-md-12 mb-4">
                        <div class="col-md-6 float-left">
                            <div class="avatar mx-auto mb-md-0 mb-3">
                                <img src="https://www.cgvadvogados.com.br/_2021/wp-content/uploads/2021/04/MIRELA-SAAR-400x400.jpg" class="z-depth-1" alt="First sample avatar image">
                            </div>
                        </div>

                        <div class="col-md-6 float-right">
                            <h4 class="red-text"><strong>Maria Pereira</strong></h4>
                            <h6 class="font-weight-bold grey-text mb-4">Advogada civil</h6>
                            <p class="grey-text">O advogado civil trabalha para defender os interesses de seus clientes sempre baseado na legislação vigente, podendo representar pessoa física ou jurídica.</p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12 mb-4">
                        <div class="col-md-6 float-left">
                            <div class="avatar mx-auto mb-md-0 mb-3">
                                <img src="https://www.cgvadvogados.com.br/_2021/wp-content/uploads/2021/04/Thiago-Junqueira_site-CGV2020-400x400.jpeg" class="z-depth-1" alt="Second sample avatar image">
                            </div>
                        </div>

                        <div class="col-md-6 float-right">
                            <h4 class="red-text"><strong>Mario Santana</strong></h4>
                           <h6 class="font-weight-bold grey-text mb-4">Advogado ambientalista</h6>
                            <p class="grey-text">Sua função é acompanhar os licenciamentos e demais processos legais obrigatórios junto aos órgãos competentes.</p>
                        </div>
                    </div>
                </div>

                <div class="row text-center text-md-left">
                    <div class="col-lg-6 col-md-12 mb-4">
                        <div class="col-md-6 float-left">
                            <div class="avatar mx-auto mb-md-0 mb-3">
                                <img src="https://www.cgvadvogados.com.br/_2021/wp-content/uploads/2021/04/ILAN-GOLDBERG-400x400.jpg" class="z-depth-1" alt="Fourth sample avatar image">
                            </div>
                        </div>

                        <div class="col-md-6 float-right">
                            <h4 class="red-text"><strong>Igor Suze</strong></h4>
                            <h6 class="font-weight-bold grey-text mb-4">Advogado do consumidor</h6>
                            <p class="grey-text">Esse profissional representa o cidadão em causas relacionadas ao direito associado aos fornecedores de bens e serviços em geral.</p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12 mb-4">
                        <div class="col-md-6 float-left">
                            <div class="avatar mx-auto mb-md-0 mb-3">
                                <img src="https://www.cgvadvogados.com.br/_2021/wp-content/uploads/2021/04/EDUARDO-CHALFIN-400x400.jpg" class="z-depth-1" alt="Fifth sample avatar image">
                            </div>
                        </div>

                        <div class="col-md-6 float-right">
                            <h4 class="red-text" ><strong>Gustavo Passos</strong></h4>
                           <h6 class="font-weight-bold grey-text mb-4">Advogado criminalista</h6>
                            <p class="grey-text">Como o próprio nome sugere, esse é o profissional que atua na defesa do cliente que é acusado de um crime.</p>
                        </div>
                    </div>
                </div>
            </section>

            <div class="wow fadeInUp" data-wow-delay="0.4s">
                <div class="text-center text-md-center my-4">                            
                    <div class="text-center text-md-center my-4">                                
                        <a class="btn btn-red btn-rounded" class="nav-link" href="/contato"> QUERO AGENDAR UMA REUNIÃO</a>
                    </div>                   
                </div>
            </div>
            <hr class="my-5">

            <section id="products" class="text-center wow fadeIn" data-wow-delay="0.3s">

                <h1 class="font-weight-bold  grey-text text-center h1 my-5">NOSSO TRABALHO</h1>
                <p class="text-center grey-text mb-5 mx-auto w-responsive lead">Nosso foco é sempre satisfazer nossos clientes de acordo com a lei.</p>

                <div class="row">

                    <div class="col-md-4 mb-4">
                        <i class="fas fa-4x fa-book-open red-text"></i>
                        <h4 class="font-weight-bold my-4">Analises de contratos</h4>
                        <p class="grey-text">Estamos sempre á disposição para esclarecer toda e qualquer cláusula de contrato caso o cliente tenha dúvidas.</p>
                    </div>

                    <div class="col-md-4 mb-4">
                        <i class="fas fa-4x fa-hands-helping red-text"></i>                    
                        <h4 class="font-weight-bold my-4">Contratos</h4>
                        <p class="grey-text">Nossos contratos se adequam ao cliente de acordo com sua necessidade.</p>
                    </div>

                    <div class="col-md-4 mb-4">
                        <i class="fas fa-4x fa-globe red-text"></i>
                        <h4 class="font-weight-bold my-4">Atendimento online</h4>
                        <p class="grey-text">Nós estamos sempre disponíveis para nossos clientes independente do lugar.</p>
                    </div>

                </div>

            </section>

            <div class="wow fadeInUp" data-wow-delay="0.4s">
                <div class="wow fadeInUp" data-wow-delay="0.4s">
                    <div class="text-center text-md-center my-4">                            
                        <div class="text-center text-md-center my-4">                                
                            <a class="btn btn-red btn-rounded" class="nav-link" href="/servico">SAIBA MAIS SOBRE NOSSOS SERVIÇOS</a>
                        </div>                   
                    </div>
                </div>                  
            </div>

            <hr class="my-5">
           
            <section id="gallery" class="section wow fadeIn" data-wow-delay="0.3s">

                <h1 class="font-weight-bold grey-text text-center h1 my-5">TORNE-SE UM CLIENTE</h1>
                <p class="text-center grey-text mb-5 mx-auto w-responsive">Veja as avaliações de nossos clientes.</p>
            </section>

            <div class="wow fadeInUp" data-wow-delay="0.4s">
                <div class="wow fadeInUp" data-wow-delay="0.4s">
                    <div class="text-center text-md-center my-4">                            
                        <div class="text-center text-md-center my-4">                                
                            <a class="btn btn-red btn-rounded" class="nav-link" href="/comentario">Ver Comentários de avaliação</a>
                        </div>                   
                    </div>
                </div>                  
            </div>

            <hr class="my-5">

            <section id="gallery" class="section wow fadeIn" data-wow-delay="0.3s">

                <h1 class="font-weight-bold grey-text text-center h1 my-5">NOSSO ESCRITÓRIO</h1>
                <p class="text-center grey-text mb-5 mx-auto w-responsive">Para um ambiente confortável e legal de se trabalhar, sempre preservamos a limpez e os equipamentos para nossos clientes e advogados.</p>

                <div class="row pb-4">
                    <div class="col-md-12">

                        <div id="mdb-lightbox-ui"></div>

                        <div class="mdb-lightbox">

                            <figure class="col-md-4">
                                <a href="https://mdbootstrap.com/img/Photos/Horizontal/Work/12-col/img%20(30).jpg" data-size="1600x1067">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Work/12-col/img%20(30).jpg" class="img-fluid z-depth-1" />
                                </a>
                            </figure>

                            <figure class="col-md-4">
                                <a href="https://mdbootstrap.com/img/Photos/Horizontal/Work/12-col/img%20(41).jpg" data-size="1600x1067">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Work/6-col/img%20(41).jpg" class="img-fluid z-depth-1" />
                                </a>
                            </figure>

                            <figure class="col-md-4">
                                <a href="https://mdbootstrap.com/img/Photos/Horizontal/Work/12-col/img%20(40).jpg" data-size="1600x1067">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Work/6-col/img%20(40).jpg" class="img-fluid z-depth-1" />
                                </a>
                            </figure>

                            <figure class="col-md-4">
                                <a href="https://mdbootstrap.com/img/Photos/Horizontal/Work/12-col/img%20(14).jpg" data-size="1600x1067">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Work/12-col/img%20(14).jpg" class="img-fluid z-depth-1" />
                                </a>
                            </figure>

                            <figure class="col-md-4">
                                <a href="https://mdbootstrap.com/img/Photos/Horizontal/Work/12-col/img%20(42).jpg" data-size="1600x1067">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Work/6-col/img%20(42).jpg" class="img-fluid z-depth-1" />
                                </a>
                            </figure>

                            <figure class="col-md-4">
                                <a href="https://mdbootstrap.com/img/Photos/Horizontal/People/12-col/img%20(132).jpg" data-size="1600x1067">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/People/12-col/img%20(132).jpg" class="img-fluid z-depth-1" />
                                </a>
                            </figure>
                        </div>
                    </div>
                </div>
            </section>          
    </main>

@section('content')
    @include('parts.rodape1') 
   
@endsection
