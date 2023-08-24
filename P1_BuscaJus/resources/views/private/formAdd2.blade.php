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
    <div class="container d-flex justify-content-center">

      <!--Section: Products v.3-->
      <section class="text-center mb-4">

        <!--Grid row-->
        <div class="row wow fadeIn mt-5">
        <form action="/editar" method="POST" class="justify-content-center mt-5">
        @csrf 
          <!-- 2 column grid layout with text inputs for the first and last names -->
          <div class="row mb-4">
            <div class="col">
              <div class="form-outline">
                <input type="number" id="form3Example1" name="id" value="{{$data['id']}}" class="form-control" readonly/>
                <label class="form-label" for="form3Example1">OAB</label>
              </div>
            </div>
            <div class="col">
              <div class="form-outline">
                <input type="text" id="form3Example1" name="nome" class="form-control" value="{{$data['nome']}}"/>
                <label class="form-label" for="form3Example1">Nome</label>
              </div>
            </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="form3Example3" name="email" class="form-control" value="{{$data['email']}}"/>
            <label class="form-label" for="form3Example3">Email</label>
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="phone" id="form3Example3" name="celular" class="form-control" value="{{$data['telefone']}}"/>
            <label class="form-label" for="form3Example3">Celular</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <input type="text" id="form3Example4" name="ramo" class="form-control" value="{{$data['ramo']}}"/>
            <label class="form-label" for="form3Example4">Ramo</label>
          </div>

          <div class="form-outline mb-4">
            <input type="text" id="form3Example4" name="linkImg" class="form-control" value="{{$data['linkImagem']}}"/>
            <label class="form-label" for="form3Example4">Link da imagem de perfil</label>
          </div>
          <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-block mb-4">Atualizar</button>
        </form>
          
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
