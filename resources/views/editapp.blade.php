@extends('layout')

@section('content')
    <header class="text-center mt-5">
        <h2 class="text-2xl font-bold uppercase mb-1">Редактирование данных о программе</h2>
    </header>

    <form class="p-5" method="POST" action="/editapp/{{ $st_prog->id }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row mb-4">
            <div class="col">
                <label for="prog_name" class="form-label">Имя программы</label>
                <input type="text" class="form-control" name="prog_name" value="{{ $st_prog->prog_name }}" />

                @error('prog_name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- <div class="mb-6">
        <label for="is_portable" class="inline-block text-lg mb-2">Портативность</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="is_portable"
          placeholder="1 or 0" value="{{$st_prog->is_portable}}" />

        @error('is_portable')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div> --}}

            <div class="col">
                <label for="author" class="form-label">Автор</label>
                <input type="text" class="form-control" name="author" placeholder="Example: John Doe"
                    value="{{ $st_prog->author }}" />

                @error('author')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="row mb-4">

            <div class="col">
                {{-- <label for="type" class="form-label">Вид программы</label>
                <input type="text" class="form-control" name="type" placeholder="Example:Structural/Digital"
                    value="{{ $st_prog->type }}" />

                @error('type')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror --}}
                <label for="type" class="form-label">Вид программы</label>
                <select class="form-select" id="TypeSelect">
                    <option value="Digital">Digital</option>
                    <option value="Structural">Structural</option>
                </select>
            </div>

            <div class="col">
                <label for="extension" class="form-label">Расширение</label>
                <input type="text" class="form-control" name="extension" placeholder="Example:PNG/JPEG/MP3/WAV..."
                    value="{{ $st_prog->extension }}" />

                @error('extension')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="col">
                <label for="encryption" class="form-label">Тип шифрования</label>
                <input type="text" class="form-control" name="encryption" placeholder="Example:AES,RC,CPP..."
                    value="{{ $st_prog->encryption }}" />

                @error('encryption')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="row mb-4">
            <div class="col">
                <label for="operating_system" class="form-label">Операционная система</label>
                <input type="text" class="form-control" name="operating_system" placeholder="Example:Windows/Linux"
                    value="{{ $st_prog->operating_system }}" />

                @error('operating_system')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="col">
                <label for="creation_date" class="form-label">Год создания</label>
                <input type="text" class="form-control" name="creation_date" placeholder="Example:2023"
                    value="{{ $st_prog->creation_date }}" />

                @error('creation_date')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="row mb-4">
            <div class="col">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Портативность
                </label>
            </div>
        </div>

        <div class="row">
            <div class='col-3'>
                <button type="submit" class="btn btn-warning text-dark">
                    Обновить программу
                </button>

                <a href="/listapp" class="text-black"> Вернуться </a>
            </div>
        </div>
    </form>
    <div class="col-md-4">
    </div>
    {{-- <form class="ms-5" method="POST" action="/upload-program/{{ $st_prog->id }}" enctype="multipart/form-data">
        @csrf
        <div class="row mb-2">
            <div class="col">
                <div class="custom-file">
                    <input type="file" name="files[]" class="custom-file-input" id="inputFileMultiple" multiple>
                </div>
            </div>
        </div>
        <div class="row mb-2">
          <div class="col me-5">
            <button type="submit" class="btn btn-primary">Загрузить</button>
        </div>
        </div>
    </form> --}}
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
                  <h6>Загурзите файлы программы</h6>
              </div>
              <div class="mt-5">
              <form class="d-flex flex-column gap-3" method="POST" action="/upload-program/{{ $st_prog->id }}"
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
