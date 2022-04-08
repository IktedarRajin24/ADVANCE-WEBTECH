@extends('layouts.app')

<html>
    <body>
        @section('content')
        <br>
        <br>
        <br>
        <h2>Admin Login</h2>
            <form method="post" action= "{{route('adminLogin')}}" class= "form form-group" >
                {{csrf_field()}}
                <label for="email">E-mail:</label>
                <input type="email" name="email" id="email" value="{{old('email')}}" class="form-control">
                @error('email')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                <br>
                <label for="password">Password:</label>
                <input type="text" name="password" id="password" value="{{old('password')}}" class="form-control">
                @error('password')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                <br>
                <input type="submit" class="btn btn-success" value="Login" >   
            </form>
            
        @endsection

    </body>

</html>