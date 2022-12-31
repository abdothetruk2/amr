@include("header")

<div class='navnav2' style="  height:650px; justify-content:flex-start !important; align-items:center !important;;">


    <div style="margin-top:150px;" class='text-center'>



<h1>Product list</h1>



</div>


</div>


</div>

<div class='navnav12 mb-5' >





</div>


<div class='container'>

    <div class='row row-cols-lg-2'>

         <div class="text-center">  <img src='{{asset("img/pro1.png")}}'>  <div class='row row-cols-3'>  <img src='{{asset("img/pro1.png")}}'>  <img src='{{asset("img/pro1.png")}}'> <img src='{{asset("img/pro1.png")}}'>  </div>      </div>


         <div><h1> Guatemala Coffee</h1> <h2 class='mb-3'> $25 </h2>  <div class='mb-4'><i class='fas fa-star'></i> <i class='fas fa-star'></i> <i class='fas fa-star'></i> <i class='fas fa-star'></i>  <i class='fas fa-star'></i> (1 Customer review)</div> <p class="mb-3" style="margin:0 ; font-weight:500; opacity:0.8"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>

                  <div class='mb-5'> <input type="number" value=1> <button style="color :black ; border-color:black" class='related2'>Add To Cart</button> </div>
                  <p class='m-0'>SKU: PR111-7 </p>  <p class='m-0'>Category: Fresh Coffee </p> <p class='m-0'>Tags: Aroma, Beans, Elegant </p>
                   <p class='m-0 mb-3' style="font-weight:bold; opacity:1">SHARE : <i class='fab fa-facebook'> </i> <i class='fab fa-twitter'> </i >  <i class='fab fa-instagram-square'> </i> <i class='fab fa-tumbir'> </i> <i class="fab fa-vimeo-v" aria-hidden="true"></i></p>

                <div  style=" border:1px solid rgba(212, 212, 212, 0.685); border-top:unset;"><button class='related3'>DESCRIBTION </button><button class='related3'>Additional Infromation </button><button class='related3'>Reviews</button> <div class='p-2 '> <p style="width:70%; margin:0">  Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. </p> </div> </div>

                </div>


    </div>

<br>
<br>



    <div class='products'>

    <h1 class='mt-5'>Related Products </h1>

<div style="overflow-x:scroll" class='mt-5 row row-cols-4 '>

<div class=' text-center'> <img  width="80%" src="{{asset('img/product-img-3-550x550.png')}}"> <h3> Brazil-Coffee </h3> <h4> $35<h4> </div>


    <div class=' text-center'> <img  width="80%" src="{{asset('img/product-img-2.jpg')}}"> <h3> French Press </h3> <h4> $23<h4> </div>

        <div class=' text-center'> <img  width="80%" src="{{asset('img/product-img-4.jpg')}}"> <h3> Dolce Guesto</h3> <h4> $12<h4> </div>

            <div class=' text-center'> <img  width="80%" src="{{asset('img/product-img-5.png')}}"> <h3>  COLOMBIAN COFFEE </h3> <h4> $30<h4> </div>

</div>


    </div>

</div>







@include('footer')
