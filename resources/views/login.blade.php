@include("header")

<div class='navnav2' style=" height:fit-content;  justify-content:flex-start !important; align-items:center !important;;">


    <div style="margin-top:150px;" class='text-center'>



<h1>Account</h1>


<div class='text-center d-flex justify-content-center'>    <p style="width:570px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incid idunt ut labore et dolore magna aliqua atin script and its variants, and. </p> </div>



</div>


</div>

<div class='navnav12 mb-5' >





</div>



<div class='container'>


    <h1>LOGIN </h1>

     <form class='mb-5'>
@csrf

    <div> <label for="">Username or Email address</label> <input class='form-control' name='username' type="text"> </div>

    <div> <label for="">Password</label> <input class='form-control' name='password' type="text"> </div>

<div class='d-flex '><input  type="checkbox"> <p> Remember me </p>  <button class='btn btn-outline-secondary '> LOG IN </button> </div>


<div> <a href='/sign_up'>Sign up</a> </div>

<div> <a>lost your password</a> </div>




 </form>



</div>


@include("footer")
