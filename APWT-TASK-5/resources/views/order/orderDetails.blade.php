
    @extends('layouts.loginAfter')
    @section('content')
        <div class="container">
        
            <div>
            <table class="table table-bordered">
                <tr>
                    <h1 style="text-align:center">Orders</h1>
                </tr>
                <tr>
                    <td>Order ID</td>
                    <td>Customer ID</td>
                    <td>Status</td>
                    <td>Price</td>
                    <td>Action</td>
                </tr>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{$order->id}}</td>
                        <td>{{$order->c_id}}</td>
                        <td>{{$order->status}}</td>
                        <td>{{$order->price}}</td>
                        <td><button><a style="font-size:20px; text-decoration: none" class="fa" href="/orderConfirm/{{$order->id}}/{{$order->name}}">&#xf00c;</a></button></td>
                    </tr>
                @endforeach
            </table>
            </div>
        </div>
        @endsection

    