@extends('layouts.index')

@section('title', 'product-page')

@section('description', 'laravel product page')

@section('keywords', 'laravel static product page')


    <div class="container text-center">
        <h1>product-page</h1>
    </div>

    @section('content')


    <div class="container-fluid p-2 PG">
        <div class="row mx-1">
          <div class="col-lg-5  text-center">
            <img class="img-fluid rounded-5" src="image/me.jpg"  width="290" height="100" alt="" >
          </div>
         <div class="col-lg-7 p-2">
            <h3 class="s-head root text-center">PRODUCT-NAME</h3>
            <p class="s-body pcb">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo
              tempore sequi iure consectetur quas accusantium dolore, nesciunt
              fuga aperiam nulla reprehenderit debitis incidunt nihil inventore ea
              dignissimos dolores eligendi quidem facilis nemo molestiae accusamus
              laudantium perspiciatis. Dignissimos atque sed, nesciunt iusto
              excepturi at. Inventore molestiae omnis commodi magnam architecto
              perspiciatis sapiente! Voluptas veritatis <br>ipsam veniam molestias!
              Ratione quaerat natus nesciunt deleniti assumenda placeat illo
              officia nisi expedita explicabo, quam sequi nemo in ullam unde atque
              aliquid aperiam laudantium asperiores itaque? <br>A delectus rerum quia
              quisquam temporibus debitis illo laborum modi voluptatibus saepe
              voluptas natus itaque sequi eligendi cupiditate, quaerat dolores 
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores
              ratione voluptatibus modi. Corrupti id aliquid non.<br> Tenetur ea rem 
              at vero, dicta ipsa suscipit recusandae cupiditate, aspernatur dolores,
              saepe repellendus deserunt. 
            </p>
          </div>
          
        </div>
      </div>

      @endsection   