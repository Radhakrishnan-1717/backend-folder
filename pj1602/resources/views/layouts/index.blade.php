<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <link rel="stylesheet" href="{{ url('style.css') }}">
    <title> @yield('title')</title>
    <meta name="description" content=@yield('description')>
    <meta name="keywords" content=@yield('keywords')>
</head>

<body>
    <div>
        <nav class="textstyle navbar navbar-expand-md navbar-light  radha-nav">
            <div class="container-fluid">
                <button class="navbar-toggler nav-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav nav-ul">
                        <li class="nav-item">
                            <a class="nav-link" href="about">about</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="product">Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contactpage">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="bloglanding">Bloglanding</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blogsingle">Blogsingle</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="service">Service</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
@yield('content')
  <div>
    <footer class=" text-center mt-5">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
          <!-- Section: Form -->
          <section class="">
            <form action="">
              <!--Grid row-->
              <div class="row d-flex justify-content-center">
                <!--Grid column-->
                <div class="col-auto">
                  <p class="pt-2">
                    <strong>Sign up for our newsletter</strong>
                  </p>
                </div>
                <!--Grid column-->
      
                <!--Grid column-->
                <div class="col-md-5 col-12">
                  <!-- Email input -->
                  <div class="form-outline mb-4">
                    <input type="email" id="form5Example27" class="form-control" />
                    <label class="form-label" for="form5Example27">Email address</label>
                  </div>
                </div>
                <!--Grid column-->
      
                <!--Grid column-->
                <div class="col-auto">
                  <!-- Submit button -->
                  <button type="submit" class="btn btn-primary mb-4">
                    Subscribe
                  </button>
                </div>
                <!--Grid column-->
              </div>
              <!--Grid row-->
            </form>
          </section>
          <!-- Section: Form -->
        </div>
        <!-- Grid container -->
      
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2020 Copyright:
          <a class="text-dark" href="#">ASaRAbi.com</a>
        </div>
        <!-- Copyright -->
      </footer>
  </div>

</body>

</html>
