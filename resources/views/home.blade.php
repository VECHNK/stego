@extends('layout')

@section('content')
<br>
<br>
<br>

<div class="container">
    <div class="row">
      <div class="col=md-12">
        <div class="section-header text-center pb-5">
          <h2>Stego2023</h2>
          <p>Данный ресурс позволяет проверить информационные носители на наличие следов присутствия стеганографического ПО</p>
        </div>
      </div>
    </div>
    @auth
    {{----}}
    <div class="row">
      <div class="col-12 col-md-12 col-lg-4">
        <div class="card text-white text-center bg-dark pb-2 h-100">
          <div class="card-body d-flex flex-column">
            <i class="bi bi-cloud-plus"></i>
            <h3 class="card-title">Добавление новых программ</h3>
            <p class="lead">Нажмите кнопку ниже, чтобы добавить новое программное обеспечение</p>
            <a href="/addapp" class="btn btn-warning text-dark mt-auto">Добавить программу</a>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-12 col-lg-4">
        <div class="card text-white text-center bg-dark pb-2 h-100">
          <div class="card-body d-flex flex-column">
            <i class="bi bi-collection"></i>
            <h3 class="card-title">Просмотр известных программ</h3>
            <p class="lead">Нажмите кнопку ниже, чтобы просмотреть список известных программ</p>
            <a href="/listapp" class="btn btn-warning text-dark mt-auto">Просмотр программ</a>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-12 col-lg-4">
        <div class="card text-white text-center bg-dark pb-2 h-100">
          <div class="card-body d-flex flex-column">
            <i class="bi bi-cloud-arrow-up-fill"></i>
            <h3 class="card-title">Проверка ваших файлов</h3>
            <p class="lead">Нажмите кнопку ниже, чтобы проверить ваши файлы на наличие следов стеганопрограмм</p>
            <a href="/upload" class="btn btn-warning text-dark mt-auto">Проверить файлы</a>
          </div>
        </div>
      </div>
    </div>
    @else
    <div class="offset-md-4 col-lg-4">
      <div class="card text-white text-center bg-dark pb-2">
        <div class="card-body">
          <i class="bi bi-cloud-arrow-up-fill"></i>
          <h3 class="card-title">Проверка ваших файлов</h3>
          <p class="lead">AНажмите кнопку ниже, чтобы проверить ваши файлы на наличие следов стеганопрограмм</p>
          <a href="/upload" class="btn btn-warning text-dark">Проверить файлы</a>
        </div>
      </div>
    </div>
  </div>
  @endauth
  </div>
<br>
<br>
<br>
<br>

@endsection
