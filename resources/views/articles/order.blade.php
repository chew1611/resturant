<html>
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Edu+NSW+ACT+Foundation:wght@400..700&family=Lobster&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
body{
  background-color: lavenderblush;
}
.table{
  border:1px solid white;
  border-radius: 12px;
  
}



.lobster-regular {
  font-family: "Lobster", sans-serif;
  font-weight: 400;
  font-style: normal;
}


</style>
</head>

<body style="background-image: url('https://img.freepik.com/premium-photo/blur-coffee-shop-cafe-restaurant-with-abstract-bokeh-light_282218-801.jpg');
background-repeat:no-repeat;
width:100%;
background-size:cover">

@extends("layouts.app")
@section("content")
<div class="bgf">
  <div class="container-sm">
<h3 style="text-align: center;color:white"
class="lobster-regular">Orders</h3>


<table class="table" style="background-color: antiquewhite;">
<tr>
    <th>Order Items</th>
    <th>Total Orders</th>
    <th>Price</th>
    <th>Total Price</th>
  </tr>
  @foreach($orders as $orders)

  <tr>
    <td>    {{$orders->otitle}}</td>
    <td>{{$orders->ototal}}</td>
    <td>{{$orders->price}}</td>
    <td>{{$orders->totalamt}}</td>
  </tr>
@endforeach
</table>

</div>
</div>
@endsection
</body>
</html>