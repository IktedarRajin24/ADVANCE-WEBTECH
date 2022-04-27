@extends('layouts.app')

<html>
    <body>
        @section('content')
        <br>
        <br>
        <br>
        <h2>Login</h2>
            <form method="post" action= "{{route('login')}}" class= "form form-group" >
                {{csrf_field()}}
                <label for="uname">Username:</label>
                <input type="text" name="uname" id="uname" value="{{old('uname')}}" class="form-control">
                @error('uname')
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