
@extends('layouts.loginAfter')
        @section('content')
        <br>
        <br>
        <br>
            <h1 style="background-color: skyblue; text-align: center">Your Profile</h1>
            <table class="table table-border" style="text-align: center">
                <tr hidden>
                    <td>ID:</td>
                    <td>{{$deliveryman->id}}</td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td>{{$deliveryman->name}}</td>
                </tr>

                <tr>
                    <td>E-mail</td>
                    <td>{{$deliveryman->email}}</td>
                </tr>

                <tr>
                    <td>Phone number</td>
                    <td>{{$deliveryman->phone}}</td>
                </tr>

                <tr>
                    <td>Address</td>
                    <td>{{$deliveryman->address}}</td>
                </tr>                

                
                <tr>
                    <td>Edit Info</td>
                    <td><a class="btn btn-success" href="/deliverymanEdit/{{$deliveryman->id}}/{{$deliveryman->name}}">Edit</a></td>
                </tr>
                    

            </table>

            
            
        @endsection



