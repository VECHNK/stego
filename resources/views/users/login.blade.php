@extends('layout')
@section('content')
    <header class="text-center mt-5">
        <h2 class="text-2xl font-bold uppercase">Авторизация</h2>
    </header>
    <div class="container d-flex justify-content-center p-5">
        <form method="POST" action="/users/authenticate">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Электронная почта</label>
                <input type="email" class="form-control" name="email" value="{{ old('email') }}" />
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">
                    Пароль
                </label>
                <input type="password" class="form-control" name="password" value="{{ old('password') }}" />

                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mt-5">
                <button type="submit" class="btn btn-warning text-dark w-100">
                    Войти
                </button>
            </div>

            <div class="mt-3">
                <p>
                    Нет аккаунта?
                    <a href="/register" class="text-laravel">Зарегистрируйтесь</a>
                </p>
            </div>
        </form>
    </div>
@endsection
