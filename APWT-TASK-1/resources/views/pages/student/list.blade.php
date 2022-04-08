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
                    <th>DoB</th>
                </tr>
                @foreach($students as $student)
                <tr>
                    <td>{{$student-> name}}</td>
                    <td>{{$student-> id}}</td>
                    <td>{{$student-> dob}}</td>
                </tr>
                @endforeach

            </table>
            
        @endsection

    </body>

</html>