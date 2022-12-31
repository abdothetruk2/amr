<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>
<body>

    <!-- header -->
    <nav class=" navbar navbar-expand-lg navbar-dark bg-dark">





        <a class="justify-content-center text-center navbar-brand" href="#"><img width="50%" src="{{asset('img/logo-light3.png')}}" alt="" srcset=""></a>
        <button  style="margin-right: 40px;" class=" navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

        <div class="d-flex justify-content-end    collapse navbar-collapse" id="navbarSupportedContent">

            <div  class='mav'>
            <ul class="navbar-nav ">
            <li class="nav-item">


              <a class="nav-link" href="#">HOME</a>


              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/">Moka</a>
                <a class="dropdown-item" href="/espresso">Espresso</a>
                <a class="dropdown-item" href="/robusta">Robusta</a>
              </div>


            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">PAGES</a>



              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/about">About us</a>
                <a class="dropdown-item" href="/about-me">About-me</a>
                <a class="dropdown-item" href="/our-team">OUR TEAM</a>
                <a class="dropdown-item" href="/offer">What we Offer</a>
                <a class="dropdown-item" href="/menu">Our Menu</a>
                <a class="dropdown-item" href="/contact">Contact us</a>


            </div>


            </li>

            <li class="nav-item">


                <a class="nav-link" href="#">Account</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                <a class="dropdown-item" href="#">Register</a>
                <a class="dropdown-item" href="#">Sign in</a>
                <a class="dropdown-item" href="#">Guest</a>

            </div>

               </li>


              <li class="nav-item">
                <a class="nav-link" href="#">SHOP</a>

                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/shop">All Products</a>
                    <a class="dropdown-item" href="#">Product catgeroy</a>
                    <a class="dropdown-item" href="#">Your Cart</a>


                </div>

            </li>
              <li class="nav-item">
                <a class="nav-link fas fa-search" href="#"></a>
              </li>

              <li class="nav-item">
                <a class="nav-link fas fa-shopping-cart" href="#"></a>
              </li>


          </ul>
          <form   class="d-none form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">


        </form>
        </div>
    </div>

    </nav>
