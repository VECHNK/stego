@extends('layout')
@section('content')
<br>
<br>
<br>
<h1>List of Apps</h1>
<table>
    <tr>
        <td>id</td>
        <td>prog_name</td>
        <td>is_portable</td>
        <td>author</td>
        <td>type</td>
        <td>extension</td>
        <td>encryption</td>
        <td>operating_system</td>
        <td>creation_date</td>
    </tr>
    @foreach ($st_prog as $prog)
    <tr>
        <td>{{$prog['id']}}</td>
        <td><a href="/listapp/{{$prog['id']}}">{{$prog['prog_name']}}</a></td>
        <td>{{$prog['is_portable']}}</td>
        <td>{{$prog['author']}}</td>
        <td>{{$prog['type']}}</td>
        <td>{{$prog['extension']}}</td>
        <td>{{$prog['encryption']}}</td>
        <td>{{$prog['operating_system']}}</td>
        <td>{{$prog['creation_date']}}</td>
    </tr>
    @endforeach
</table>
@endsection
