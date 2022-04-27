@extends('layouts.app')
<html>
    <body>
        @section('content')
        <br>
        <br>
        <br>
            <h1 style="background-color: skyblue">Hello, This is our student list.</h1>
            
            <table class="table table-border">
                <tr>
                    <th>Name</th>
                    <th>Phone no</th>
                    <th>E-mail</th>
                    <th>Delete</th>
                </tr>
                @foreach($teachers as $teacher)
                <tr>
                    <td><a href="/teacher/courses/{{$teacher->id}}">{{$teacher-> name}}</a></td>
                    <td>{{$teacher-> phone}}</td>
                    <td>{{$teacher-> email}}</td>
                    <td><a href="/teacherDelete/{{$teacher->id}}/{{$teacher->name}}">Delete</a></td>
                </tr>
                @endforeach

            </table>
            
        @endsection

    </body>

</html>