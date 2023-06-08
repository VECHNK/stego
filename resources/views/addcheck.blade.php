@extends('layout')

@section('content')
<br>
<br>

    <header class="text-center">
      <h2 class="text-2xl font-bold uppercase mb-1">Check your files</h2>
    </header>

    <form method="POST" action="/addcheck" enctype="multipart/form-data" multiple="true">
      @csrf

      {{--<div class="mb-6">
        <label for="id" class="inline-block text-lg mb-2">Case id</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="id"
          value="{{old('id')}}" />

        @error('id')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>--}}

      <div class="mb-6">
        <label for="case" class="inline-block text-lg mb-2">Case name</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="case"
          value="{{old('case')}}" />

        @error('case')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="checkfile" class="inline-block text-lg mb-2">
          Files to check
        </label>
        <input type="file" class="border border-gray-200 rounded p-2 w-full" name="checkfile" />

        @error('checkfile')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      {{--<div class="mb-6">
        <label for="info" class="inline-block text-lg mb-2">
          Additional info
        </label>
        <textarea class="border border-gray-200 rounded p-2 w-full" name="info" rows="10"
          placeholder="Include some additional information">{{old('info')}}</textarea>

        @error('description')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>--}}

      <div class="mb-6">
        <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
          Submit case
        </button>

        <a href="/" class="text-black ml-4"> Back </a>
      </div>
    </form>

@endsection