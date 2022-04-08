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
                    <th>ID</th>
                    <th>E-mail</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                @foreach($students as $student)
                <tr>
                    <td>{{$student-> name}}</td>
                    <td>{{$student-> student_id}}</td>
                    <td>{{$student-> email}}</td>
                    <td><a href="/studentEdit/{{$student->id}}/{{$student->name}}">Edit</a></td>
                    <td><a href="/studentDelete/{{$student->id}}/{{$student->name}}">Delete</a></td>
                </tr>
                @endforeach

            </table>
            
        @endsection

    </body>

</html>