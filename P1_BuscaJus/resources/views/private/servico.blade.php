@extends('commom.mdb-fullpage')

@section('content')
    @include('parts.cabecalho1') 
   
@section('content')
<style>
  html,
  body,
  header,
  .jarallax {
    height: 700px;
    
  }


  .list-group-item.active,
  .list-group-item.active:hover {
    background-color: #D82521 !important;
    border-color: #DB3C38 !important;
  }

  #joinus .list-group-item.active,
  .list-group-item.active:hover {
    background-color: #E36663 !important;
    border-color: #DB3C38 !important;
  }

</style>
  <main>
    <div class="container">
    
      <section class="text-center team-section" style="margin-top: 150px;">

      <h2 class="font-weight-bold red-text text-center h1 my-5">SERVIÇO</h2>
      <p class="text-justify grey-text mb-5 mx-auto   lead">Um escritório jovem e dinâmico, que conta com uma equipe atualizada e conhecimento em diversas especialidades do Direito; buscando excelência na prestação da assessoria, consultoria e acompanhamento jurídico, com seriedade e profissionalismo. </p>
      <hr class="mb-5">
        
      </section>

      <section>

        <ul class="nav md-pills pills-default d-flex justify-content-center">
          <li class="nav-item">
            
          <h2 class="font-weight-bold grey-text text-center h1 my-5">NOSSOS DIFERENCIAIS</h2>
            </a>
          </li>
          
        </ul>

        <div class="tab-content">

          <div class="tab-pane fade  show active" id="panel11" role="tabpanel">
            <br>
             <div class="row">

              <div class="col-md-12">

                <section class="text-center mb-5">
                    <div class="row mb-4">
                    <div class="col-md-6 mb-4">
                      <div class="card card-image" style="background-image: url('https://mdbootstrap.com/img/Photos/Horizontal/Work/6-col/img%20(41).jpg');">

                        <div class="text-white text-left d-flex align-items-center rgba-stylish-strong py-5 px-4">
                          <div>
                            <h3 class="mb-4 mt-4 font-weight-bold">
                              <strong>JURÍDICO ESPECIALIZADO</strong>
                            </h3>
                            <p style="margin-bottom: 75px;">Advogados em direito empresarial, tributário e contratos</p>
                            
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6 mb-4">
                      <div class="card card-image" style="background-image: url('https://mdbootstrap.com/img/Photos/Horizontal/Work/6-col/img%20(14).jpg');">

                        <div class="text-white text-left d-flex align-items-center rgba-stylish-strong py-5 px-4">
                          <div>
                            <h3 class="mb-4 mt-4 font-weight-bold">
                              <strong>ATENDIMENTO ÁGIL</strong>
                            </h3>
                            <p>Fale conosco em apenas um clique, entre em contato:</p>                            
                              <a href="/contato" class="btn btn-outline-white btn-rounded"><i class="fas fa-clone left"></i> Saiba mais</a>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                  <div class="row">

                    <div class="col-md-6 mb-4">
                      <div class="card card-image" style="background-image: url('https://mdbootstrap.com/img/Photos/Horizontal/Work/6-col/img%20(11).jpg');">

                        <div class="text-white text-left d-flex align-items-center rgba-stylish-strong py-5 px-4">
                          <div>
                            <h3 class="mb-4 mt-4 font-weight-bold">
                              <strong>ACOMPANHAMENTO</strong>
                            </h3>
                            <p style="margin-bottom: 75px;">Advocacia focada no acompanhamento de demandas</p>
                              
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6 mb-4">
                      <div class="card card-image" style="background-image: url('https://mdbootstrap.com/img/Photos/Horizontal/Work/6-col/img%20(42).jpg');">

                        <div class="text-white text-left d-flex align-items-center rgba-stylish-strong py-5 px-4">
                          <div>
                            <h3 class="mb-4 mt-4 font-weight-bold">
                              <strong>PLANEJAMENTO ESTRATÉGICO</strong>
                            </h3>
                            <p style="margin-bottom: 75px;">Gestão de riscos patrimoniais e extrapatrimoniais</p>
                           
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </section>

              </div>

            </div>
          </div>
         
          <hr class="mb-5">
          <h2 class="font-weight-bold grey-text text-center h1 my-5">CONHEÇA NOSSAS ÁREAS DE ATUAÇÃO</h2>

          <div class="row">
            <div class="col-4">
              <div class="list-group" id="list-tab" role="tablist" >
                <a class="list-group-item lead list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home"
                  role="tab" aria-controls="home">Assessoria e Consultoria Preventiva</a>
                <a class="list-group-item  lead list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile"
                  role="tab" aria-controls="profile">Direito Administrativo</a>
                <a class="list-group-item  lead list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages"
                  role="tab" aria-controls="messages">Direito Civil</a>
                <a class="list-group-item lead list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings"
                  role="tab" aria-controls="settings">Direito Consumidor</a>
                <a class="list-group-item  lead list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages"
                  role="tab" aria-controls="messages">Direito Criminal</a>
              </div>
            </div>
            <div class="col-8">
              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane lead show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                  Antever e prevenir é melhor do que remediar. É com este princípio que a assessoria e consultoria preventiva se tornam primordiais, tanto para pessoa jurídica como para pessoa física.
                  Uma parceria habitual e contínua, com na percepção de benefícios legais e na prevenção de riscos.
                </div>
                <div class="tab-pane lead" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                  De forma bem objetiva, o Direito Administrativo se caracteriza como um conjunto de normas que 
                  regulamentam e regulam a atividade da Administração Pública diante do interesse público.
                  Atuar na forma administrativa em face dos órgãos públicos resolve de forma mais célere a situação.
                </div>
                <div class="tab-pane lead" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                Sendo uma das áreas mais extensas, uma vez que engloba diversas situações cotidianas, como por exemplo, 
                o direito de propriedade muitas vezes exercido por meio da usucapião, bem como as relações obrigacionais 
                regidas por contratos realizado entre as partes, denotando a importância de uma assessoria jurídica para 
                elaboração e análise contratual.
                </div>
                <div class="tab-pane lead" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                O Direito do Consumidor é o Código mais novo existente em nosso ordenamento jurídico. Instituído após
                a Constituição Federal de 1988, a Lei n° 8.078/90 nasceu com o objetivo de regulamentar a relação entre 
                o consumidor e o fornecedor. A atuação direta e com base no Direito do Consumidor permite às partes uma
                proteção, tanto ao consumidor que busca adquirir produtos ou serviços como ao fornecedor que consegue se 
                esquivar de más intenções.
                </div>
                <div class="tab-pane lead" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                O Direito Criminal possui um vasto ramo de atuação, tendo em vista que existem crimes tributários, crimes 
                ambientais, crimes digitais, enfim todo um composto de tipos penais que muitas vezes podem ser evitados com 
                uma assessoria jurídica.
                </div>
              </div>
            </div>
          </div>

  </main>
</body>

@section('content')
    @include('parts.rodape1') 
   
@endsection
