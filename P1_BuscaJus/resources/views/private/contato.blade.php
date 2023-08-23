@extends('commom.mdb-fullpage')

@section('content')
    @include('parts.cabecalho1') 
   
@section('content')

<style>

    .btn .fas, .btn .fab, .btn .far {
      margin-left: 3px;
    }

    h6 {
      line-height: 1.7;
    }

    footer.page-footer {
      margin-top: 0px;
      padding-top: 0px;
    }

    body {
      background-color: #eee;
    }

    .btn.red-gradient {
        background: #FF0000;        
    }   
  </style>



<body>
  
  <main style="padding-top: 12rem;">

    <div class="container-fluid mb-5">
        <div class="row" style="margin-top: -100px;">
            <div class="col-md-12">

            <div class="card pb-5">
                <div class="card-body">

                <div class="container">

                    <section class="section">
                    <h2 class="font-weight-bold grey-text text-center h1 my-5">Entre em contato conosco</h2>                
                    <p class="text-center grey-text mb-5 mx-auto w-responsive">A <b>BuscaJus</b> está sempre á sua disposição para qualquer dúvida</p>
                    <div class="row pt-5">
                        <div class="col-md-8 col-xl-9">
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="md-form">
                                        <input type="text" id="contact-name" class="form-control">
                                        <label for="contact-name" class="">Nome</label>
                                        </div>
                                    </div>
                            
                                    <div class="col-md-6">
                                        <div class="md-form">
                                        <input type="text" id="contact-email" class="form-control">
                                        <label for="contact-email" class="">E-mail</label>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="md-form">
                                        <input type="text" id="contact-email" class="form-control">
                                        <label for="contact-email" class="">Telefone</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="md-form">
                                            <input type="text" id="contact-Subject" class="form-control">
                                            <label for="contact-Subject" class="">Assunto</label>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="row">
                                    
                                    </div>
                                    <div class="row">                    
                                        <div class="col-md-12">
                                            <div class="md-form">
                                            <textarea type="text" id="contact-message" class="md-textarea form-control" rows="3"></textarea>
                                            <label for="contact-message">Mensagem</label>
                                        </div>
                                    </div>
                                </div>                        
                            </form>                                                        

                        <div class="text-center text-md-center my-4">
                            <button type="submit" class="btn btn-primary btn-red btn-rounded btn-block mb-4">Enviar</button>
                                <div class="text-center text-md-center my-4">                                
                                    <a href="/local" class="btn btn-outline-black btn-rounded">Veja como chegar ao nosso escritório!</a>
                                </div>   
                            </div>
                        </div>
                        <div class="col-md-4 col-xl-3">
                        <ul class="contact-icons text-center list-unstyled">
                            <li>
                            <i class="fas fa-map-marker fa-2x red-text"></i>
                            <p>Guarulhos, SP, Brasil</p>
                            </li>

                            <li>
                            <i class="fas fa-phone fa-2x red-text"></i>
                            <p>+55 (11) 98777-4441</p>
                            </li>

                            <li>
                            <i class="fas fa-envelope fa-2x red-text"></i>
                            <p>contato@buscajus.com</p>
                            </li>
                        </ul>
                        </div>                        

                    </div>                               
                    </section>
                </div>
                </div>

            </div>
            </div>
      </div>
      
    </div>
                                                         
  </main>


@section('content')
    @include('parts.rodape1') 
   
@endsection
