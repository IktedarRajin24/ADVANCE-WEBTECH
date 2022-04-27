@extends('layouts.app')
<html>
    <body>
        @section('content')
        <br>
        <br>
        <br>
            <h1 style="background-color: skyblue">Hello, This is our customer list.</h1>
            
            <table class="table table-border">
                <tr>
                    <th>Name</th>
                    <th>E-mail</th>
                    <th>Phone number</th>
                    <th>Actions</th>
                </tr>
                @foreach($customers as $customer)
                <tr>
                    <td>{{$customer-> name}}</td>
                    <td>{{$customer-> email}}</td>
                    <td>{{$customer-> phoneno}}</td>
                    <td><a class="btn btn-primary" href="/customerEdit/{{$customer->id}}/{{$customer->name}}">Edit</a><br><br>
                    <a class="btn btn-danger" href="/customerDelete/{{$customer->id}}/{{$customer->name}}">Delete</a></td>
                    <td></td>
                </tr>
                @endforeach

            </table>
            
        @endsection

    </body>

</html>