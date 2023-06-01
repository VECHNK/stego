@extends('layout')

@section('content')
<br>
<br>

    <header class="text-center">
      <h2 class="text-2xl font-bold uppercase mb-1">Edit an application</h2>
    </header>

    <form method="POST" action="/editapp/{{$st_prog->id}}" enctype="multipart/form-data">
      @csrf
      @method('PUT')

      <div class="mb-6">
        <label for="id" class="inline-block text-lg mb-2">Id</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="id"
          value="{{old('id')}}" />

        @error('id')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="prog_name" class="inline-block text-lg mb-2">Program name</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="prog_name"
          value="{{old('Name')}}" />

        @error('prog_name')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="is_portable" class="inline-block text-lg mb-2">Is portable?</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="is_portable"
          placeholder="1 or 0" value="{{old('is_portable')}}" />

        @error('is_portable')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="author" class="inline-block text-lg mb-2">Author</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="author"
          placeholder="Example: John Doe" value="{{old('author')}}" />

        @error('author')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="type" class="inline-block text-lg mb-2">Type</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="type"
          placeholder="Example:Structural/Digital" value="{{old('type')}}" />

        @error('type')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="extension" class="inline-block text-lg mb-2">Extension</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="extension"
          placeholder="Example:PNG/JPEG/MP3/WAV..." value="{{old('extension')}}" />

        @error('extension')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="encryption" class="inline-block text-lg mb-2">Encryption</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="encryption"
          placeholder="Example:AES,RC,CPP..." value="{{old('encryption')}}" />

        @error('encryption')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="operating_system" class="inline-block text-lg mb-2">OS</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="operating_system"
          placeholder="Example:Windows/Linux" value="{{old('operating_system')}}" />

        @error('operating_system')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="creation_date" class="inline-block text-lg mb-2">Created in</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="creation_date"
          placeholder="Example:2023" value="{{old('creation_date')}}" />

        @error('creation_date')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      {{--<div class="mb-6">
        <label for="logo" class="inline-block text-lg mb-2">
          Company Logo
        </label>
        <input type="file" class="border border-gray-200 rounded p-2 w-full" name="logo" />

        @error('logo')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>--}}

      {{--<div class="mb-6">
        <label for="description" class="inline-block text-lg mb-2">
          Job Description
        </label>
        <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10"
          placeholder="Include tasks, requirements, salary, etc">{{old('description')}}</textarea>

        @error('description')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>--}}

      <div class="mb-6">
        <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
          Update app
        </button>

        <a href="/" class="text-black ml-4"> Back </a>
      </div>
    </form>

@endsection