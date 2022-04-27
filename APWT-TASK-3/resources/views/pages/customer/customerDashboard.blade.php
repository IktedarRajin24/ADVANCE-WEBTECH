@extends('layouts.app')
<html>
    <body>
        @section('content')
        <br>
        <br>
        <br>
            <h1 style="background-color: skyblue">Hello, {{$customer->name}}</h1>
            <table class="table table-border">
                <tr hidden>
                    <td>ID:</td>
                    <td>{{$customer->id}}</td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td>{{$customer->name}}</td>
                </tr>

                <tr>
                    <td>E-mail</td>
                    <td>{{$customer->email}}</td>
                </tr>

                <tr>
                    <td>Phone number</td>
                    <td>{{$customer->phoneno}}</td>
                </tr>
                
                <tr>
                    <td>Edit Info</td>
                    <td><a class="btn btn-success" href="/customerEdit/{{$customer->id}}/{{$customer->name}}">Edit</a></td>
                </tr>
                    

            </table>

            <a class="btn btn-danger" href="{{route('customerLogout')}}">Log out</a>
            
        @endsection

    </body>

</html>