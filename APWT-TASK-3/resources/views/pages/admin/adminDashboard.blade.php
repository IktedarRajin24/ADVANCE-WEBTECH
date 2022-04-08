@extends('layouts.app')
<html>
    <body>
        @section('content')
        <br>
        <br>
        <br>
            <h1 style="background-color: skyblue">Hello, {{$admin->name}}</h1>
            <table class="table table-border">
                <tr>
                    <td>Name</td>
                    <td>{{$admin->name}}</td>
                </tr>

                <tr>
                    <td>E-mail</td>
                    <td>{{$admin->email}}</td>
                </tr>

                <tr>
                    <td>Phone number</td>
                    <td>{{$admin->phoneno}}</td>
                </tr>

                <tr>
                    <td>Add user</td>
                    <td><a class="btn btn-success" href="{{route('customerAdd')}}">Add</a></td>
                </tr>

                <!--<tr>
                    <td>Delete user</td>
                    <td><a class="btn btn-danger">Delete</a></td>
                </tr>
                
                <tr>
                    <td>Edit User</td>
                    <td><a class="btn btn-primary">Edit</a></td>
                </tr>-->
                <tr>
                    <td>Customer List</td>
                    <td><a class="btn btn-primary" href="{{route('customerList')}}">Show</a></td>
                </tr>
                <tr>
                    <td>Add admin</td>
                    <td><a class="btn btn-primary" href="{{route('createAdmin')}}">Add</a></td>
                </tr>
                    

            </table>

            <a class="btn btn-danger" href="{{route('adminLogout')}}">Log out</a>
            
        @endsection

    </body>

</html>