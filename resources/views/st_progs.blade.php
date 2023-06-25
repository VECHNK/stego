@extends('layout')

@section('content')

<h2 style="text-2xl font-bold uppercase mb-1">Список известных программ</h2>
<table class="table table-striped">
    <tr>
        <td>Номер</td>
        <td>Название</td>
        <td>Автор</td>
        {{--<td>is_portable</td>
        <td>type</td>
        <td>extension</td>
        <td>encryption</td>--}}
        <td>Операционная система</td>
        <td>Год создания</td>
    </tr>
    @foreach ($st_prog as $prog)
    <tr>
        <td>{{$prog['id']}}</td>
        <td><a href="/listapp/{{$prog['id']}}">{{$prog['prog_name']}}</a></td>
        <td>{{$prog['author']}}</td>
        {{--<td>{{$prog['is_portable']}}</td>
        <td>{{$prog['type']}}</td>
        <td>{{$prog['extension']}}</td>
        <td>{{$prog['encryption']}}</td>--}}
        <td>{{$prog['operating_system']}}</td>
        <td>{{$prog['creation_date']}}</td>
    </tr>
    @endforeach
</table>
@endsection
