@extends('commom.mdb-fullpage')

@section('content')
    @include('parts.cabecalho1') 
   
@section('content')

<div class="container">
<main style="padding-top: 5rem;">
<h2 class="font-weight-bold red-text text-center h1 my-5">NOSSOS CLIENTES</h2>  
<ul class="list-group list-group-light mb-3">
  <li class="list-group-item">
    <h5 class="fw-bold">Hélio Magalhães</h5>
    <p class="text-muted mb-2 fw-bold">02 Setembro 2022</p>
    <p class="text-muted mb-0">
    Ambiente super agradável, profissionais competentes e muito atenciosos!
    </p>
  </li>
  <li class="list-group-item">
    <h5 class="fw-bold">Ricardo Soriano</h5>
    <p class="text-muted mb-2 fw-bold">19 Agosto 2022</p>
    <p class="text-muted mb-0">
    Excelência na prestação dos serviços é o sobrenome do escritório. 
    </p>
  </li>
  <li class="list-group-item">
    <h5 class="fw-bold">Daniel da Silva de Lima</h5>
    <p class="text-muted mb-2 fw-bold">11 Agosto 2022</p>
    <p class="text-muted mb-0">
    Excelentes! Fomos extremamente bem atendidos, eles entendem muito sobre o assunto em questão e solucionaram com rapidez a nossa demanda. Muito gratos por tudo.
    </p>
  </li>
</ul>
<a class="btn btn-outline-dark btn-rounded w-100" href="#" role="button" data-ripple-color="dark">Ver mais</a>
</main>
</div>

<main style="padding-top: 12rem;">

    <div class="container-fluid mb-5">
        <div class="row" style="margin-top: -100px;">
            <div class="col-md-12">

            <div class="card pb-5">
                <div class="card-body">

                <div class="container">

                    <section class="section">
                    <h2 class="font-weight-bold grey-text text-center h1 my-5">Deixe um comentário</h2>                
                    <form>
  <!-- Name input -->
  <div class="form-outline mb-4">
    <label class="form-label" for="form4Example1">Nome</label>
    <input type="text" id="form4Example1" class="form-control" />    
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
    <label class="form-label" for="form4Example2">E-mail</label>
    <input type="email" id="form4Example2" class="form-control" />    
  </div>

  <!-- Message input -->
  <div class="form-outline mb-4">
    <label class="form-label" for="form4Example3">Comentário</label>
    <textarea class="form-control" id="form4Example3" rows="4"></textarea>    
  </div>

  <!-- Checkbox -->
  <div class="form-check d-flex justify-content-center mb-4">
    <input class="form-check-input me-2" type="checkbox" value="" id="form4Example4" checked />
    <label class="form-check-label" for="form4Example4">
      Mande uma cópia da mensagem
    </label>
  </div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-red btn-rounded btn-block mb-4">Enviar</button>
</form>
                                                         
  </main>

  @section('content')
    @include('parts.endereco') 

    @section('content')
    @include('parts.social') 

  @section('content')
    @include('parts.rodape1') 
   
@endsection
