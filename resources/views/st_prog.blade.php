@extends('layout')

@section('content')
    <ul class="p-5 list-group">
        <h2>
            {{ $st_prog['prog_name'] }}
        </h2>
        @unless (empty($st_prog->author))
            <li class="list-group-item">
                Автор:
                {{ $st_prog['author'] }}
            </li>
        @else
        <li class="list-group-item">Автор: Неизвестен</li>
        @endunless

        <li class="list-group-item">
            @if ($st_prog->is_portable == 1)
                Портативность: Да
            @else
                Портативность: Нет
        </li>
        @endif
        @unless (empty($st_prog->version))
        <li class="list-group-item">
            Версия:
                {{ $st_prog['version'] }}
            </li>
        @else
        <li class="list-group-item">
            Версия: Неизвестна</li>
        @endunless

        @unless (empty($st_prog->type))
        <li class="list-group-item">
            Вид программы:
                {{ $st_prog['type'] }}
            </li>
        @else
        <li class="list-group-item">
            Вид программы: Неизвестен</li>
        @endunless

        @unless (empty($st_prog->extension))
        <li class="list-group-item">
            Используемые расширения:
                {{ $st_prog['extension'] }}
            </li>
        @else
        <li class="list-group-item">
            Используемые расширения: Неизвестны</li>
        @endunless

        @unless (empty($st_prog->algorithm))
            <li class="list-group-item">
                Используемый алгоритм:
                {{ $st_prog['algorithm'] }}
            </li>
        @else
            <li class="list-group-item">Используемый алгоритм: Неизвестен</li>
        @endunless

        @unless (empty($st_prog->creation_date))
            <li class="list-group-item">
                Год создания:
                {{ $st_prog['creation_date'] }}
            </li>
        @else
            <li class="list-group-item">Год создания: Неизвестен</li>
        @endunless

        @unless (empty($st_prog->encryption))
            <li class="list-group-item">
                Тип шифрования:
                {{ $st_prog['encryption'] }}
            </li>
        @else
            <li class="list-group-item">Тип шифрования: Неизвестен</li>
        @endunless

        @unless (empty($st_prog->operating_system))
            <li class="list-group-item">
                Операционная система:
                {{ $st_prog['operating_system'] }}
            </li>
        @else
            <li class="list-group-item">Операционная система: Неизвестна</li>
        @endunless


            <div class="mt-4 p-5 container w-100 d-flex justify-content-center gap-5">
                <form method="GET" action="/editapp/{{ $st_prog->id }}" enctype="multipart/form-data">

                        <button class="btn btn-warning text-dark"><i class="bi bi-arrow-counterclockwise"></i>
                            Обновить данные
                        </button>

                </form>
                <form method="POST" action="/editapp/{{ $st_prog->id }}">
                    @csrf
                    @method('DELETE')

                    <button class="btn btn-outline-danger"><i class="bi bi-trash"></i>
                        Удалить программу
                    </button>
                </form>
                <a href="/listapp" class="btn btn-light text-dark "> Вернуться </a>

            </div>
    </ul>
@endsection
