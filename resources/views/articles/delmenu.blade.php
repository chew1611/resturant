<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Responsive Videos</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>
<link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<style>

.slider-container {
    --swiffy-slider-item-gap-totalwidth: calc(var(--swiffy-slider-item-gap) * (var(--swiffy-slider-item-count) - 1));
    --swiffy-slider-item-width: calc((30% 
    - var(--swiffy-slider-item-reveal) 
    - var(--swiffy-slider-item-gap-totalwidth)) 
    / var(--swiffy-slider-item-count));
    overflow-x: auto;}
    .menu{
        width: 50%;height:30vh;border-radius:5px
    }
    @media only screen and (max-width: 430px){
        .slider-container {
    --swiffy-slider-item-gap-totalwidth: calc(var(--swiffy-slider-item-gap) * (var(--swiffy-slider-item-count) - 1));
    --swiffy-slider-item-width: calc((80% 
    - var(--swiffy-slider-item-reveal) 
    - var(--swiffy-slider-item-gap-totalwidth)) 
    / var(--swiffy-slider-item-count));
    overflow-x: auto;}
    }
</style>
</head>

 

   


<div class="swiffy-slider 


container
 slider-nav-round slider-item-ratio-21x9" id="slider1">
    <ul class="slider-container">
        
        @foreach($menu as $menu)
        
        <li>
    


 
    

<div class="card" style="width: 18rem;">
  <img src="{{$menu->img}}" class="card-img-top " alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$menu->con}}</h5>
    <p class="card-text">{{$menu->price}}MMK</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>







    
    </li>
        @endforeach
        
      
    </ul>

    <button type="button" class="slider-nav" aria-label="Go left"></button>
    <button type="button" class="slider-nav slider-nav-next" aria-label="Go left"></button>

    <div class="slider-indicators slider-indicators-square d-none d-md-flex">
        <button class="" aria-label="Go to slide"></button>
        <button aria-label="Go to slide" class="active"></button>
        <button aria-label="Go to slide"></button>
        <button aria-label="Go to slide"></button>
    </div>

    <div class="slider-indicators slider-indicators-sm slider-indicators-dark slider-indicators-round d-md-none slider-indicators-highlight">
        <button class="" aria-label="Go to slide"></button>
        <button aria-label="Go to slide" class="active"></button>
        <button aria-label="Go to slide"></button>
        <button aria-label="Go to slide"></button>
    </div>
</div>

<p>;vjidherguhduhbujdb
    bmifhbuf
</p>
</body>
</html>