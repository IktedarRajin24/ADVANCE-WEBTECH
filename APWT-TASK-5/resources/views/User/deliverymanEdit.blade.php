@extends('layouts.formLayout')

<html>
    <body>
        @section('content')
        <br>
        <br>
        <br>
        <h2>Edit</h2>
            <form method="post" action= "{{route('deliverymanEdit')}}" class= "form form-group" >
                {{csrf_field()}}
                <label for="id">ID:</label>
                <input type="text" name="id" id="id" value="{{$deliveryman-> id}}" class="form-control" readonly>
                @error('name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                <br>
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" value="{{$deliveryman-> name}}" class="form-control">
                @error('name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                <br>
                <label for="email">E-mail:</label>
                <input type="text" name="email" id="email" value="{{$deliveryman-> email}}" class="form-control">
                @error('email')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                <br>
                <label for="address">Address:</label>
                <input type="text" name="address" id="address" value="{{$deliveryman-> address}}" class="form-control">
                @error('address')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                <br>
                <label for="phone">Phone no:</label>
                <input type="text" name="phone" id="phone" value="{{$deliveryman-> phone}}" class="form-control">
                @error('phone')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                <br>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" value="{{$deliveryman-> password}}" class="form-control">
                @error('password')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                <br>
                
                <input type="submit" class="btn btn-success" value="update" >   
            </form>
            
        @endsection

    </body>

</html>