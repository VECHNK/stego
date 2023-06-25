<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stego2023</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}"> 
  </head>
  <body>
<section id="home">
    <nav class="navbar navbar-expand-lg navbar-Light bg-light">
      <a class="navbar-brand mx-4" href="/"><span class="text-warning">Stego</span>2023</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="px-4 navbar-nav ms-auto mb-2 mb-lg-0 d-flex">
          @auth
          <li class="nav-item">
            <p class="nav-link m-0 me-3">{{auth()->user()->name}}</p>
          </li>
          <li class="nav-item">
            <form class="nav-item" method="POST" action="/logout">
              @csrf
              <button type="submit" class="btn btn-warning text-dark">
                Выход
              </button>
            </form>
          </li>
          @else
          <li class="nav-link">
            <a class="nav-link m-0 me-3" href="/register">Регистрация</a>
          </li>
          <li class="nav-link">
            <a class="nav-link  m-0 me-3" href="/login">Авторизация</a>
          </li>
          @endauth
        </ul>
      </div>
    </nav>
  <div class="container">
    @yield('content') 
  </div>
  <div class="p-4">
  </div>
</section>




    <footer class="bg-dark p-2 text-center fixed-bottom">
        <div class="container">
          <p class="text-white">Vladislav Putilin VSUET 2023</p>
        </div>
    </footer>

      {{--<div class="footer">
        <div class="container">
          <p class="text-white">Vladislav Putilin VSUET 2023</p>
        </div>
      </div>--}} 
      
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
          <x-flash-message />
        </body>
      </html>