@extends('layouts.app')

<html>
    <body>
        @section('content')
        <br>
        <br>
        <br>
        <h2>Create student</h2>
            <form method="post" action= "{{route('studentEdit')}}" class= "form form-group" >
                {{csrf_field()}}
                <label for="id">ID:</label>
                <input type="text" name="id" id="id" value="{{$student-> id}}" class="form-control" readonly>
                @error('name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                <br>
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" value="{{$student-> name}}" class="form-control">
                @error('name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                <br>
                <label for="email">E-mail:</label>
                <input type="text" name="email" id="email" value="{{$student-> email}}" class="form-control">
                @error('email')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                <br>
                <label for="student_id">student ID:</label>
                <input type="id" name="student_id" id="student_id" value="{{$student-> student_id}}" class="form-control">
                @error('id')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                <br>
                <input type="submit" class="btn btn-success" value="update" >   
            </form>
            
        @endsection

    </body>

</html>