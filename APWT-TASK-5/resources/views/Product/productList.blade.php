@extends('layouts.homelayout')
@section('content')
<br>
    <h1>Products</h1>
<br>
      <div class="container">
            <div class="row">
                @foreach($products as $item)
                  <div class="col">
                      <div class="card">
                        <img src="{{$item->Image}}" style="width:100%">
                        <h1>{{$item->Name}}</h1>
                        <p>Price:<span id="price"> {{$item->Price}}</span> taka</p> 
                        <p><a style="text-decoration: none" href="{{route('product.addtocart',['id'=>$item->p_id])}}">Add to Cart</a></p>
                      </div>

                  </div>
                @endforeach
            </div>
        </div>
@endsection

<style>
  .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
  }

  .price {
    color: grey;
    font-size: 22px;
  }

  .card a {
    border: none;
    outline: 0;
    padding: 12px;
    color: white;
    background-color: orange;
    text-align: center;
    cursor: pointer;
    width: 100%;
    font-size: 18px;
  }

  .card a:hover {
    opacity: 0.7;
  }
</style>

            