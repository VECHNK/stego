@extends('layout')

@section('content')
    <header class="text-center mt-5">
        <h2 class="text-2xl font-bold uppercase">Регистрация</h2>
    </header>
    <div class='container d-flex justify-content-center p-5'>
        <form method="POST" action="/users">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label"> Имя </label>
                <input type="text" class="form-control" name="name" value="{{ old('name') }}" />

                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

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

            <div class="mb-3">
                <label for="password2" class="form-label">
                    Подтвердите пароль
                </label>
                <input type="password" class="form-control" name="password_confirmation"
                    value="{{ old('password_confirmation') }}" />

                @error('password_confirmation')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-warning text-dark w-100">
                    Зарегистрироваться
                </button>
            </div>

            <div class="mt-8 text-center">
                <p>
                    Уже есть аккаунт?
                    <a href="/login" class="text-laravel">Войти</a>
                </p>
            </div>
        </form>
    </div>
@endsection
