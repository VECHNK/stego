@extends('layout')
@section('content')
<br>
<br>
<br>
<h1>List of files matched to a database</h1>
<table>
    <tr>
        <td>file id</td>
        {{--<td>path</td>--}}
        <td>file name</td>
        <td>type</td>
        <td>size</td>
        <td>prog name</td>
        <td>MD5</td>
        <td>Found at</td>
        {{--<td>case name</td>--}}
    </tr>
    @foreach ($filecheck as $file)
            <tr>
            <td>{{$file['id']}}</td>
            {{--<td>{{$file['path']}}</td>--}}
            <td>{{$file['filename']}}</td>
            <td>{{$file['type']}}</td>
            <td>{{$file['size']}}</td>
            <td>{{$file['st_prog']}}</td>
            <td>{{$file['MD5']}}</td>
            <td>{{$file['created_at']}}</td>
            {{--<td>{{$file['casename']}}</td>--}}
        </tr>
    @endforeach
</table>
@endsection