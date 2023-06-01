@extends('layout')
@section('content')
{{--
<h1>{{$heading}}</h1>

@unless(count($listapp)==0)

@foreach($listapp as $st_prog)
<h2>
    <a href="/listapps/{{$st_prog['id']}}">{{$st_prog['prog_name']}}</a>
</h2>
<p>
    {{$st_prog['author']}}
</p>
@endforeach
 
@else
<p>No apps found</p>
@endunless

--}}
{{--View is not used ----------------}}
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
        <td>{{$prog['prog_name']}}</td>
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


