@extends('layout')

@section('content')

        <header class="text-center mt-5">
            <h2 class="text-2xl font-bold uppercase mb-1">Добавление новой программы</h2>
        </header>

        <form class="p-5" method="POST" action="/addapp">
            @csrf

            <div class="row mb-4">
                <div class="col">
                    <label for="prog_name" class="form-label">Имя программы</label>
                    <input type="text" class="form-control" name="prog_name" value="{{ old('Name') }}" />

                    @error('prog_name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- <div class="col-md-3">
            <label for="is_portable" class="form-label">Портативность</label>
            <input type="text" class="form-control" name="is_portable" placeholder="1 or 0"
                value="{{ old('is_portable') }}" />

            @error('is_portable')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div> --}}

                <div class="col">
                    <label for="author" class="form-label">Автор</label>
                    <input type="text" class="form-control" name="author" placeholder="Example: John Doe"
                        value="{{ old('author') }}" />

                    @error('author')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>


            {{-- <div class="col">
            <label for="type" class="form-label">Тип</label>
            <input type="text" class="form-control" name="type" placeholder="Example:Structural/Digital"
                value="{{ old('type') }}" />

            @error('type')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div> --}}

            <div class="row mb-4">
                <div class="col">
                    <label class="form-label" for="TypeSelect">Вид программы</label>
                    <select class="form-select" id="TypeSelect" name="type">
                        <option value="Digital">Digital</option>
                        <option value="Structural">Structural</option>
                    </select>
                </div>

                <div class="col">
                    <label for="extension" class="form-label">Расширения</label>
                    <input type="text" class="form-control" name="extension" placeholder="Example:PNG/JPEG/MP3/WAV..."
                        value="{{ old('extension') }}" />

                    @error('extension')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="col">
                    <label for="encryption" class="form-label">Тип шифрования</label>
                    <input type="text" class="form-control" name="encryption" placeholder="Example:AES,RC,CPP..."
                        value="{{ old('encryption') }}" />

                    @error('encryption')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="row mb-4">
                <div class="col">
                    <label for="operating_system" class="form-label">Операционная система</label>
                    <input type="text" class="form-control" name="operating_system" placeholder="Example:Windows/Linux"
                        value="{{ old('operating_system') }}" />

                    @error('operating_system')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="col">
                    <label for="creation_date" class="form-label">Год создания</label>
                    <input type="text" class="form-control" name="creation_date" placeholder="Example:2023"
                        value="{{ old('creation_date') }}" />

                    @error('creation_date')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="row mb-4">
                <div class="col">
                    <input type="checkbox" class="form-check-input" name="is_portable" id="gridCheck" >
                    <label class="form-check-label" for="gridCheck">
                     Портативность
                    </label>
                </div>
            </div>

            <div class="row">
                <div class='col-3'>
                    <button type="submit" class="btn btn-warning text-dark">
                        Добавить программу
                    </button>
                </div>
            </div>

            <div class="row mt-3">
                <a href="/" class="text-black"> Вернуться </a>
            </div>
        </form>
@endsection
