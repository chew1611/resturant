<html>


<head>
<meta name="viewport" content="width=device-width"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<base href="/public">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Edu+NSW+ACT+Foundation:wght@400..700&family=Lobster&display=swap" rel="stylesheet">
<style>




.lobster-regular {
  font-family: "Lobster", sans-serif;
  font-weight: 400;
  font-style: normal;
}





.MultiCarousel { float: left; overflow: hidden;
     padding: 15px; width: 100%; position:relative;height: 300px; }
    .MultiCarousel .MultiCarousel-inner { transition: 1s ease all; float: left; }
        .MultiCarousel .MultiCarousel-inner .item { float: left;}
        .MultiCarousel .MultiCarousel-inner .item > div { text-align: center; padding:10px; margin:10px; background:#f1f1f1; color:#666;}
    .MultiCarousel .leftLst, .MultiCarousel .rightLst { position:absolute; border-radius:50%;top:calc(50% - 20px); }
    .MultiCarousel .leftLst { left:0; }
    .MultiCarousel .rightLst { right:0; }
    
        .MultiCarousel .leftLst.over, .MultiCarousel .rightLst.over { pointer-events: none; background:#ccc; }


       


/* CSS */
.button-62 {
  background: linear-gradient(to bottom right, #EF4765, #FF9A5A);
  border: 0;
  border-radius: 12px;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: -apple-system,system-ui,"Segoe UI",Roboto,Helvetica,Arial,sans-serif;
  font-size: 16px;
  font-weight: 500;
  line-height: 2.5;
  outline: transparent;
  padding: 0 1rem;
  text-align: center;
  text-decoration: none;
  transition: box-shadow .2s ease-in-out;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  white-space: nowrap;
}

.button-62:not([disabled]):focus {
  box-shadow: 0 0 .25rem rgba(0, 0, 0, 0.5), -.125rem -.125rem 1rem rgba(239, 71, 101, 0.5), .125rem .125rem 1rem rgba(255, 154, 90, 0.5);
}

.button-62:not([disabled]):hover {
  box-shadow: 0 0 .25rem rgba(0, 0, 0, 0.5), -.125rem -.125rem 1rem rgba(239, 71, 101, 0.5), .125rem .125rem 1rem rgba(255, 154, 90, 0.5);
}
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
body{
    background-color: antiquewhite;
}
.card{
    border: 1px solid blue;
    width:45px;
    border-radius: 2px;
}.imh4{
    width:100%;height:65vh;
  border:1px solid white;display:block;
  margin-left:auto;margin-right:auto
}

@media only screen and (max-width: 500px){
    .imh4{
    width:100%;height:25vh;
  border:1px solid white;display:block;
  margin-left:auto;margin-right:auto
}
.res{
    display: none;
}
}
.res{
    
}
</style>
</head>



<body style="background-color: antiquewhite;">
@extends("layouts.app")
@section("content")



<h2 style="text-align: center;" class="lobster-regular">Please Make Your Orders</h2>

    <div class=" res container text-white container-sm" style="background-color: antiquewhite;
    border-radius:4px">
  <img  class="imh4"
    src="https://zanzibarworld.com/wp-content/uploads/2023/05/best-restaurants-in-Paje.jpg" class="" alt="..."
    style="border-radius:8px">
  <div class="card-img-overlay res" style="top: 42%;left:35%;

  text-align:center;width:25%;
  background-color:rgba(0, 0, 0, 0.5);height:45vh;
  ">
    <h3 class="card-title" style="color:antiquewhite">Lorem ipsum </h3>
    <br>
    <p class="card-text">laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>

  </div>
</div>
<br>
<div class="container" style="">

<h2 style="text-align: center;" class="lobster-regular">Delicious Foods are Here</h2>
<br>
<h2>Myanmar Foods</h2>
	<div class="row">
		<div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
            <div class="MultiCarousel-inner">
                @foreach($mmfood as $mmfood)
                <div class="item">
                    <div class="pad15">
                   
                      <img src="img/{{$mmfood->img}}" style="width: 100%;
                      height:100px">
                        <p>{{$mmfood->title}}</p>
                        <p>{{$mmfood->price}}MMK</p>
                      
                      <a href="{{ url("articles/makeorder1/$mmfood->id") }}">  <button class="button-62" role="button">Make Order</button></a>
                    </div>
            </div>
        
        @endforeach
        
              
         
               
               
            
               
            </div>
            <button class="btn btn-primary leftLst"><</button>
            <button class="btn btn-primary rightLst">></button>
        </div>
	</div>
	
</div>









<div class="container">

<h2>Korea Foods</h2>
	<div class="row">
		<div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
            <div class="MultiCarousel-inner">
                @foreach($kfood as $kfood)
                <div class="item">
                    <div class="pad15">
                   
                      <img src="img/{{$kfood->img}}" style="width: 100%;
                      height:100px">
                        <p>{{$kfood->title}}</p>
                        <p>{{$kfood->price}}MMK</p>
           

                        <a href="{{ url("articles/makeorder2/$kfood->id") }}">  <button class="button-62" role="button"
                        name="kfood">Make Order</button></a>
                 
                    </div>
            </div>
        
        @endforeach
        
              
         
               
               
            
               
            </div>
            <button class="btn btn-primary leftLst"><</button>
            <button class="btn btn-primary rightLst">></button>
        </div>
	</div>
	
</div>


@endsection






<script>$(document).ready(function () {
    var itemsMainDiv = ('.MultiCarousel');
    var itemsDiv = ('.MultiCarousel-inner');
    var itemWidth = "";

    $('.leftLst, .rightLst').click(function () {
        var condition = $(this).hasClass("leftLst");
        if (condition)
            click(0, this);
        else
            click(1, this)
    });

    ResCarouselSize();




    $(window).resize(function () {
        ResCarouselSize();
    });

    //this function define the size of the items
    function ResCarouselSize() {
        var incno = 0;
        var dataItems = ("data-items");
        var itemClass = ('.item');
        var id = 0;
        var btnParentSb = '';
        var itemsSplit = '';
        var sampwidth = $(itemsMainDiv).width();
        var bodyWidth = $('body').width();
        $(itemsDiv).each(function () {
            id = id + 1;
            var itemNumbers = $(this).find(itemClass).length;
            btnParentSb = $(this).parent().attr(dataItems);
            itemsSplit = btnParentSb.split(',');
            $(this).parent().attr("id", "MultiCarousel" + id);


            if (bodyWidth >= 1200) {
                incno = itemsSplit[3];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 992) {
                incno = itemsSplit[2];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 768) {
                incno = itemsSplit[1];
                itemWidth = sampwidth / incno;
            }
            else {
                incno = itemsSplit[0];
                itemWidth = sampwidth / incno;
            }
            $(this).css({ 'transform': 'translateX(0px)', 'width': itemWidth * itemNumbers });
            $(this).find(itemClass).each(function () {
                $(this).outerWidth(itemWidth);
            });

            $(".leftLst").addClass("over");
            $(".rightLst").removeClass("over");

        });
    }


    //this function used to move the items
    function ResCarousel(e, el, s) {
        var leftBtn = ('.leftLst');
        var rightBtn = ('.rightLst');
        var translateXval = '';
        var divStyle = $(el + ' ' + itemsDiv).css('transform');
        var values = divStyle.match(/-?[\d\.]+/g);
        var xds = Math.abs(values[4]);
        if (e == 0) {
            translateXval = parseInt(xds) - parseInt(itemWidth * s);
            $(el + ' ' + rightBtn).removeClass("over");

            if (translateXval <= itemWidth / 2) {
                translateXval = 0;
                $(el + ' ' + leftBtn).addClass("over");
            }
        }
        else if (e == 1) {
            var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
            translateXval = parseInt(xds) + parseInt(itemWidth * s);
            $(el + ' ' + leftBtn).removeClass("over");

            if (translateXval >= itemsCondition - itemWidth / 2) {
                translateXval = itemsCondition;
                $(el + ' ' + rightBtn).addClass("over");
            }
        }
        $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
    }

    //It is used to get some elements from btn
    function click(ell, ee) {
        var Parent = "#" + $(ee).parent().attr("id");
        var slide = $(Parent).attr("data-slide");
        ResCarousel(ell, Parent, slide);
    }

});
</script>
</body>
</html>