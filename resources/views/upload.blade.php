@extends('layout')
@section('content')
    <header class="text-center mt-5">
        <h2 class="text-2xl font-bold uppercase mb-1">Загрузите ваши файлы для проверки</h2>
    </header>

    <main class='container w-50'>
        {{-- @if (Session::has('message'))
            <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
            @endif --}}
        <style>
            ::file-selector-button {
                display: none;
            }
        </style>
        <div class="row mt-5">
            <div class="col">
                <div class="col text-center">
                    <h6>Выберите файлы</h6>
                </div>
                <div class="mt-5">
                <form class="d-flex flex-column gap-3" method="POST" action="{{ url('upload-multiple') }}"
                    enctype="multipart/form-data">
                    @csrf
                    {{-- <label class="custom-file-label" for="inputFileMultiple">Выберите файлы</label> --}}
                    <input type="file" name="files[]" class="btn btn-outline-warning" id="inputFileMultiple"
                        {{-- required accept="image/*" --}} multiple>
                    <button type="submit" class="btn btn-primary float-right mr-2"><i class="bi bi-cloud-arrow-up"></i> Загрузить</button>
                </form>
                </div>
            </div>
    </main>
@endsection
