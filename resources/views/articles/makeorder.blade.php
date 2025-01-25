<html>

<head>
<meta name="viewport" content="width=device-width"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<base href="/public">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Edu+NSW+ACT+Foundation:wght@400..700&family=Lobster&display=swap" rel="stylesheet">
<style>

.responsive-two-columns {
    display:flex;
    flex-wrap:wrap;
}

/* columns */
.responsive-two-columns > * {
    width:100%;
    padding:1rem;
}

/* tablet breakpoint */
@media (min-width:768px) {
    .responsive-two-columns > * {
        width:50%;
    }
}
.box {

align-items: center;
justify-content: center;
background:lavender;
margin: 20px 0;
padding: 10px;
width: 100%;
min-height: 200px;
border: 1px lavenderblush solid;
box-shadow: rgba(0, 0, 0, 0.05) 0px 0px 0px 1px, rgb(209, 213, 219) 0px 0px 0px 1px inset;
color: black;
border-radius: 5px;
}

form {
width: 80%;

text-align: center;

margin-left: 12%;

}

.value-button {
display: inline-block;
border: 1px solid #ddd;
margin: 0px;
width: 40px;
height: 40px;
text-align: center;
vertical-align: middle;
background: #eee;
-webkit-touch-callout: none;
-webkit-user-select: none;
-khtml-user-select: none;
-moz-user-select: none;
-ms-user-select: none;
user-select: none;
}

.value-button:hover {
cursor: pointer;
}

form #decrease {
margin-right: -4px;
border-radius: 8px 0 0 8px;
}

form #increase {
margin-left: -4px;
border-radius: 0 8px 8px 0;
}

form #input-wrap {
margin: 0px;
padding: 0px;
}

input#number {
text-align: center;
border: none;
border-top: 1px solid #ddd;
border-bottom: 1px solid #ddd;
margin: 0px;
width: 40px;
height: 40px;
}

input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
</style>
</head>

<body>
@extends("layouts.app")
@section("content")
@if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}

                <a href="#" class="alert-link">an example link</a>

                </h6>
            @endif



<form action="articles/makeorder" method="post">
@csrf
<div class="container">
<div class="responsive-two-columns">
    <div><img src="img/{{$data->img}}" style="width:87%;
  height:300px "></div>
    <div style="background-color: antiquewhite;
    
   margin-top:3%;height:250px">
<p style="color:black">{{$data->title}}</p>
<p style="color:black">{{$data->price}}</p>
<input type="hidden" name="otitle" value="{{$data->title}}">
<input type="hidden" name="price" value="{{$data->price}}">


<div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value">-</div>
  <input type="number" id="number" value="1" name="ototal"
  

  
  
  
  />
  <div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value">+</div>
  <br>
  
  <br>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
Submit Order
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered
  

  ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Order Item</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body   modal-dialog-scrollable">
   Are You sure for your orders?


 

<div class="container" style="display: block;
margin-left:28%;
margin-right:auto">
<div class="col-md-5">
    
   
  </div>
  <br>
 
  <div class="col-md-5">
   



<select class="form-select form-select-sm form-control" aria-label=".form-select-sm example"
    name="add" required>
  <option selected   > Select Yangon township</option>
  @foreach($towns as $towns )
  <option value="{{$towns->towns}}"  >{{$towns->towns}}</option>
  @endforeach

</select>

</select><br>
<input type="text" name="home" class="form-control" placeholder="Home address" required
>
<br>
<input type="tel" name="ph" class="form-control" placeholder="phone" pattern="[0-9]{11}"
required
>

  </div>

 


</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
 

        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>
    </div>
    
</div>
</div>



</form>


@endsection
<script>
function increaseValue() {
  var value = parseInt(document.getElementById('number').value, 10);
  value = isNaN(value) ? 0 : value;
  value++;
  document.getElementById('number').value = value;
}

function decreaseValue() {
  var value = parseInt(document.getElementById('number').value, 10);
  value = isNaN(value) ? 0 : value;
  value < 2 ? value = 2 : '';
  value--;
  document.getElementById('number').value = value;

  if(value<1 || value=="0"){
    alert("Fail");
  }
}
</script>
</body>
</html>