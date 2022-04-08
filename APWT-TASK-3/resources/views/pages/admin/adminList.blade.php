@extends('layouts.app')
<html>
    <body>
        @section('content')
        <br>
        <br>
        <br>
            <h1 style="background-color: skyblue">Hello, This is our admin list.</h1>
            
            <table class="table table-border">
                <tr>
                    <th>Name</th>
                    <th>E-mail</th>
                    <th>Phone number</th>
                    <th>Actions</th>
                </tr>
                @foreach($admins as $admin)
                <tr>
                    <td>{{$admin-> name}}</td>
                    <td>{{$admin-> email}}</td>
                    <td>{{$admin-> phoneno}}</td>
                    <td><a class="btn btn-primary" href="#">Edit</a><br><br>
                    <a class="btn btn-danger" href="#">Delete</a></td>
                    <td></td>
                </tr>
                @endforeach

            </table>
            
        @endsection

    </body>

</html>