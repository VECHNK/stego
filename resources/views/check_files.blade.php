@extends('layout')
@section('content')
<br>
<br>
<br>
<h2 style="text-2xl font-bold uppercase mb-1">Список файлов совпадающих с известными программами</h2>
<table class="table table-striped">
    <tr>
        <td>Номер</td>
        <td>Имя</td>
        <td>Тип</td>
        <td>Размер</td>
        <td>Программа</td>
        <td>MD5</td>
        <td>Найдено в</td>
    </tr>
    @foreach ($filecheck as $file)
            <tr>
            <td>{{$file['id']}}</td>
            <td>{{$file['filename']}}</td>
            <td>{{$file['type']}}</td>
            <td>{{$file['size']}}</td>
            <td>{{$file['st_prog']}}</td>
            <td>{{$file['MD5']}}</td>
            <td>{{$file['created_at']}}</td>
        </tr>
    @endforeach
</table>
@endsection