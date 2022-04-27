@extends('layouts.app')
<html>
    @section('content')
    <body>
        <br>
        <br>
        <br>
        <div class="container">
            <div class="row">
                @foreach($products as $p)
                    <div class="col" style="background-color:#FFCDD2;">
                        <h2>{{$p}}</h2>
                        <h4>
                           Click here to buy.         
                        </h4>                 
                    </div>
                @endforeach
            </div>
        </div>
        
    </body>
    @endsection
</html>

<!---->