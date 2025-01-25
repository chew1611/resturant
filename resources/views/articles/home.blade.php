<html>
<head>

<meata charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<base href="/public">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Edu+NSW+ACT+Foundation:wght@400..700&family=Lobster&display=swap" rel="stylesheet">
<base href="/public">
<style>

.lobster-regular {
  font-family: "Lobster", sans-serif;
  font-weight: 400;
  font-style: normal;
}
html{
  scroll-behavior: smooth;
}body{
  background-color: antiquewhite;
}

aside {
  width: 30%;
  padding-left: 15px;
  margin-left: 15px;
  float: right;
  font-style: italic;
  background-color: lightgray;
}

.bg-black{
  background: linear-gradient(109.6deg, rgb(36, 45, 57) 11.2%, rgb(16, 37, 60) 51.2%, rgb(0, 0, 0) 98.6%);

}

.text-black{
    color:  black;
}
.bg-primary-orange{
  background-color: #fec503;
}



* {box-sizing: border-box;}
body {font-family:'Times New Roman', Times, serif;background-color:antiquewhite}
.mySlides {display: none;}


/* container */
.responsive-two-column-grid {
    display:block;
}

/* columns */
.responsive-two-column-grid > * {
    padding:1rem;
}

/* tablet breakpoint */
@media (min-width:768px) {
    .responsive-two-column-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
    }
}

.top{
 
}


</style>

</head>


<body style="background-color: antiquewhite;">

@extends("layouts.app")
@section("content")

<div class="top">

<div class="responsive-two-column-grid
" style="background-color: antiquewhite;">
    <div>



    <img src="img/imgs/bg.png" 
      
      style="
      margin-left:20px"
      class="img-fluid masthead " alt="...">

    </div>
    <div>
    <div class="col">
      <div class="px-5 py-5 mt-5">
        <div class="px-2 py-2 align-middle">
        <h2 style="color:#466D1D">Get all your needs Here<br>
      
      IOrem ispom ojgog ggjgor gmfg
      </h2>
        <p style="text-align: justify;"> Iorem ispom ijdivnd nivndiv indid ninfd nafiaf jafiaf hifaf
          lzlmx mxm xokox kxokxx ksdk Iorem lorem ojjf oj ojdvo
        </p>

        <table class="table table-hover">
   
    <tbody>
      <tr>
        <td><img src="img/imgs/i2.png" style="width:75%"></td>
 
        <td style="width:90%">john jjhit yjot mijotj okojt kokj iorem moh
          ixihs
        </td>
      </tr>
      <tr>
        <td><img src="img/imgs/i3.png" style="width:75%"></td>
     
        <td>orem ispom ijdivnd nivndiv indid ninfd nafiaf jafiaf hifaf
          lzlmx orem ojjf oj</td>
      </tr>
      <tr>
        <td><img src="img/imgs/i4.png" style="width:75%"></td>
      
        <td>orem ispom ijdivnd nivndiv indid ninfd naf</td>
      </tr>
    </tbody>
  </table>

        </div>
     
      </div>
    </div>





</div>




</div>

<div class="responsive-two-column-grid" style="background-color: white;">
    <div>


<h2 class="lobster-regular" style="text-align: center;color:pink">
<b>"Our Resturant"</b></h2>

<br><br>
    <p style="text-align: center;font-style:italic">
  
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
  </p>
    </div>
    <div>
      <img src="https://resizer.otstatic.com/v2/photos/wide-large/1/25645129.jpg"

style="width:100%;height:auto">
</div>
</div>








<div class="break">
@include('articles/ser')
<br>
@include('articles/slide')

</div>
@endsection
</body>
</html>