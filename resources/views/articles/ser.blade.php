<html>
<head>
<meta name="viewport" content="width=device-width">


<style>
  body{
    background-color: antiquewhite;
  }
.responsive-three-column-grid {
    display:block;
}

/* columns */
.responsive-three-column-grid > * {
    padding:1rem;
}

/* tablet breakpoint */
@media (min-width:768px) {
    .responsive-three-column-grid {
        display: grid;
        grid-auto-rows: 1fr;
        grid-template-columns: 1fr 1fr 1fr;
    }
}
.boxd{
    width: 200px;
  height: 200px;

  border-radius: 50%; /* the magic */
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  text-align: center;

  font-size: 16px;
  text-transform: uppercase;
  font-weight: 700;
  margin: 0 auto 4px;
  background-color: antiquewhite;
  display: block;
  margin-left: auto;
  margin-right: auto;
}
</style>
</head>
<body>
  <div  style="background-color: lavenderblush;">
<h2 class="lobster-regular" style="text-align: center;color:black;
background-color:lavenderblush;margin-top:4px">
<b>"Our Services"</b></h2>
<br><br>



<div style="background-color: lavenderblush;">
<div class="" style="background-color: lavenderblush;width:100%" >
<div class="responsive-three-column-grid">


<div class="" style="width: 28rem;">
  <img src="https://www.sassyhongkong.com/wp-content/uploads/2022/07/thai-food-restaurants-hong-kong-hero-sip-song-eat-drink.png" class="boxd" alt="...">

    <h3 class="card-title lobster-regular" style="text-align: center;color:#466D1D">Delicious Food</h3>
    <p style="text-align: center;"> 
Lorem ipsum dolor sit amet, consectetur adipiscing elit, slaboris nisi ut aliquip ex ea commodo consequat.</p>


</div>
    
    <div class="" style="width: 28rem;">
  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRKdIYTzAgUDDS5aVIKBCLSNBV1ZKXwDyPsU76slrti1p6mO4I4my3NaQQNWta9-vVHJp0&usqp=CAU" class="boxd" alt="...">

    <h3 class="card-title lobster-regular" style="text-align: center;color:#466D1D">Best Chef</h3>
    <p style="text-align: center;"> 
Lorem ipsum dolor sit amet, consectetur adipiscing elit, slaboris nisi ut aliquip ex ea commodo consequat.</p>

  </div>




    


    <div class="" style="width: 28rem;">
  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQXDUqFM1c4YDnYSJnu6ZxcQdiRZtbrJqd2xUN6LDMsSA&s" class="boxd" alt="...">

    <h3 class="card-title lobster-regular" style="text-align: center;color:#466D1D">Patirnt Waiter</h3>
    <p style="text-align: center;"> 
Lorem ipsum dolor sit amet, consectetur adipiscing elit, slaboris nisi ut aliquip ex ea commodo consequat.</p>



    </div>
  

   







    </div>
</div>
</div>
  </div>
</body>
</html>