@include("header")

<div class='navnav2' style="  justify-content:flex-start !important; align-items:center !important;;">


    <div style="margin-top:150px;" class='text-center'>



<h1>Product list</h1>


<div class='text-center d-flex justify-content-center'>    <p style="width:570px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incid idunt ut labore et dolore magna aliqua atin script and its variants, and. </p> </div>



</div>


</div>

<div class='navnav12 mb-5' >





</div>



<div class='container'>

   <div  style="display:flex" >




    <div class='col-9'>
    <div style="display:flex; flex-direction:row;"> <p>Showing 1-9 results </p>  <select style="color:black; border-color:black;" class='btn btn-outline-secondary related'> <option > Sort by Normal </option> <option > Sort by Normal </option><option > Sort by Normal </option><option > Sort by Normal </option><option > Sort by Normal </option><option > Sort by Normal </option>    </select> </div>



    <div class='products row row-cols-md-3 gy-5' >

     <div class='text-center'> <img width="80%" src='{{asset("img/product-img-1-550x550.png")}}'> <h1>Ehipoia Coffee </h1>  <p> $15</p> </div>

     <div class='text-center'> <img width="80%" src='{{asset("img/product-img-1-550x550.png")}}'> <h1>Ehipoia Coffee </h1>  <p> $15</p> </div>
     <div class='text-center'> <img  width="80%"  src='{{asset("img/product-img-1-550x550.png")}}'> <h1>Ehipoia Coffee </h1>  <p> $15</p> </div>


    </div>




    </div>



    <div  style="margin-left:25px;" class=' col-3  row  ' >

        <div class='mb5-5'>
            <h3> Product Categories </h3>
           <p>Accessories </p>
           <p>Bean Varieties </p>
           <p>Coffee Cups </p>
           <p>Espresso Machines</p>
           <p>Fresh Coffee</p>
           <p>Italian Coffee</p>


        </div>

        <div class='mb-5'>
            <h3> Product tags</h3>
           <p>Aroma Beans Black Casual</p>
           <p>Classic Cream Elegant Fresh</p>



        </div>


        <div class=' mb-2'>
            <h3>Top rated products</h3>

            <div class='row row-cols-2 '>

            <div class='text-center'> <img width="60%" src='{{asset("img/product-img-2.jpg")}}'> </div>
            <div class="text-start"> <h3>French press </h3> <i class='fas fa-star'> </i> <i class='fas fa-star'> </i><i class='fas fa-star'> </i><i class='fas fa-star'> </i><i class='fas fa-star'> </i> <p>$23.00</p> </div>
            </div>

        </div>


        <div class='row row-cols-2 mb-2'>

            <div class='text-end'> <img width="60%" src='{{asset("img/product-img-4.jpg")}}'> </div>
            <div class="text-start"> <h3>Dolce Guesto </h3> <i class='fas fa-star'> </i> <i class='fas fa-star'> </i><i class='fas fa-star'> </i><i class='fas fa-star'> </i><i class='fas fa-star'> </i> <p>$223.00</p> </div>
            </div>


            <div class='row row-cols-2'>

                <div class='text-end'> <img width="60%" src='{{asset("img/product-img-5.png")}}'> </div>
                <div class="text-start"> <h3>Colombia Coffee </h3> <i class='fas fa-star'> </i> <i class='fas fa-star'> </i><i class='fas fa-star'> </i><i class='fas fa-star'> </i><i class='fas fa-star'> </i> <p>$123.00</p> </div>
                </div>





            <div  class="text-center mb-5 mt-3">


                 <input   style="padding:8px; width:100%" placeholder="Search" type="text">
                </div>



            <div  class="text-center mb-5 mt-3">


                <img src="{{asset('img/shop5.jpg')}}" alt="" srcset="">
            </div>

    </div>


   </div>


</div>


@include("footer")
