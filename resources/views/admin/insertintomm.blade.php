<html>


<head>
<meta name="viewport" content="width=device-width"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<base href="/public">
<style>

body {
background-color: antiquewhite;
}

.card {
  overflow: hidden;


}
.card .card-img {
  height: 20rem;
}
.card .card-img-container img {
  object-fit: cover;
  object-position: center;
  max-height: 100%;

  
}
.card .card-img-overlay {
  color: #fff;
  font-weight: bold;
  text-shadow: 0 0 3px #ff0000, 0 0 5px #0000ff;
}

/* small and extra-small screens */
@media (max-width: 767px) {
  .carousel-inner .carousel-item > div {
    display: none;
  }
  .carousel-inner .carousel-item > div:first-child {
    display: block;
  }
  .carousel-inner .carousel-item > div .card-img-container img {
    max-width: 100%;
  }
}
/* medium and up screens */
@media (min-width: 768px) {
  .carousel-inner .carousel-item-end.active,
.carousel-inner .carousel-item-next {
    transform: translateX(25%);
  }
  .carousel-inner .carousel-item-start.active,
.carousel-inner .carousel-item-prev {
    transform: translateX(-25%);
  }
  .carousel-inner .carousel-item.active,
.carousel-inner .carousel-item-next,
.carousel-inner .carousel-item-prev {
    display: flex;
  }
  .carousel-inner .carousel-item-end,
.carousel-inner .carousel-item-start {
    transform: translateX(0);
  }

  .card-img-container {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
  }
  .card-img-container img {
    display: inline-block;
    max-height: 10%;
    margin: 0 -50%;
  }
}

</style>
</head>



<body>










<h2 style="text-align: center;">Insert into Myanmar Food</h2>


@if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

        
            <form action="{{ url('http://localhost:8000/admin/insertintomm') }}" method="POST">
                @csrf
<div style="display:block;
margin-left:auto;margin-right:auto" class="control">
<input type="file" class="form-control"  name="img1" placeholder="img">

<input type="text" class="form-control" name="title1" placeholder="con">

<input type="text" class="form-control" name="price1" placeholder="price">
<button type="submit" class="btn btn-primary"style="display:block;
margin-left:auto;margin-right:auto;margin-top:12px">InsertMenu</button>
</div>
            </form>












       









</body>
</html>