@extends('layouts.app')

<html>
    <body>
        @section('content')
        <br>
        <br>
        <br>
        <h2>Registration</h2>
            <form method="post" action= "{{route('customerAdd')}}" class= "form form-group" >
                {{csrf_field()}}
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" value="{{old('name')}}" class="form-control">
                @error('name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                <br>
                <label for="email">E-mail:</label>
                <input type="text" name="email" id="email" value="{{old('email')}}" class="form-control">
                @error('email')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                <br>
                <label for="phone">Phone no:</label>
                <input type="phone" name="phone" id="phone" value="{{old('phone')}}" class="form-control">
                @error('phone')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                <br>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" value="{{old('password')}}" class="form-control">
                @error('password')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                <br>
                <input type="submit" class="btn btn-success" value="Add" >   
            </form>
            
        @endsection

    </body>

</html>