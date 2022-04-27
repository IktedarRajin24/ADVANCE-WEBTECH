@extends('layouts.app')

<html>
    <body>
        @section('content')
        <br>
        <br>
        <br>
        <h2>Contact Here</h2>
            <form method="post" action= "{{route('contact')}}" class= "form form-group" >
                {{csrf_field()}}
                <label for="email">E-mail:</label>
                <input type="email" name="email" id="email" value="{{old('email')}}" class="form-control">
                @error('email')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                <br>
                <label for="message">Message:</label>
                <input type="textarea" name="message" id="message" value="{{old('message')}}" class="form-control" >
                @error('message')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                <br>
                <input type="submit" class="btn btn-success" value="Send" >   
            </form>
            
        @endsection

    </body>

</html>