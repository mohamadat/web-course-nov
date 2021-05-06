<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.79.0">
  <title>Album example · Bootstrap v5.0</title>
  
  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">
  <link href="{{URL('css/details.css')}}" rel="stylesheet">
  
  <!-- Bootstrap core CSS -->
  <link href="{{URL('css/bootstrap.min.css')}}" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }
    
    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
  
  
</head>
<body class="bg-gray">

  <!-- insperation URL: https://www.nyxcosmetics.com/lips/  -->
  


@include('products.header')


<div class="single-product">
    <div class="container slider-padding" >
        <div class="row">



            <div class="col-md-5  one">
                <h2 class="h2 fontcolor d-md-none d-lg-none"> HIGH SHINE LIP COLOR</h2>
                <p class="h2p fontcolor d-md-none  d-lg-none">High Shine</p>
                
                 <div class="space-between d-md-none d-lg-none my-4">
                    <section>
                    <i class="fa fa-star design-color" aria-hidden="true"></i>
                    <i class="fa fa-star design-color" aria-hidden="true"></i>
                    <i class="fa fa-star design-color" aria-hidden="true"></i>
                    <i class="fa fa-star design-color" aria-hidden="true"></i>
                    <i class="fa fa-star-half-o design-color" aria-hidden="true"></i>
                     </section>
                     <a href="#reviews" class="unline"><span class="design-color">write a review</span></a>
                
                    </div>

                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">

                    
                      <div class="carousel-item active">
                        <img  src="{{URL('img/lipstick1.jpg')}}" class=" d-block  w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="{{URL('img/lipstick2.jpg')}}" class=" d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="{{URL('img/lipstick3.jpg')}}" class=" d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="{{URL('img/lipstick4.jpg')}}" class=" d-block w-100" alt="...">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </a>
                  </div>
                  <p class="h2p fontcolor d-md-none d-lg-none">product code :12345 </p>
                  <div class="dropdown d-md-none d-lg-none">
                    <a class="btn btn-lg btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                      Colors
                    </a>
                  
                    <ul class="dropdown-menu " aria-labelledby="dropdownMenuLink d-none d-sm-block d-md-none">
                        <button title="1" class="one-color-crl circle" style="background-color:#82667f;"></button>
                        <button title="2" class="one-color-crl circle" style="background-color:#b486ab;"></button>
                        <button title="3" class="one-color-crl circle" style="background-color:#dd9ac2;"></button>
                       <button title="4" class="one-color-crl circle" style="background-color:#f4cae0;"></button>
                       <button title="5" class="one-color-crl circle" style="background-color:#ff82a9;"></button>
                       <button title="6" class="one-color-crl circle" style="background-color:#da5552;"></button>
                       <button title="7" class="one-color-crl circle" style="background-color:#ce4257;"></button>
                       <button title="8" class="one-color-crl circle" style="background-color:#de4d86;"></button>
                      
                    
                    
                    </ul>
                  </div>
                 
            </div>
           

            
            <div class=" heart col-md-1 two">

                <button title="add to wish list"> <i class="design-color fa fa-heart  " aria-hidden="true"></i></button>
                <a href="#"><i class="design-color fa fa-shopping-cart fa-lg fa-pull-right d-md-none d-lg-none " aria-hidden="true"></i></a>

            </div>



            <div class=" info col-md-6 three">
               <a href="#"><i class="design-color fa fa-shopping-cart fa-2x fa-pull-right d-none d-md-block d-lg-block cart" aria-hidden="true"></i></a> 
                <h2 class="h2 fontcolor d-none d-md-block d-lg-block"> HIGH SHINE LIP COLOR</h2>
                <p class="h2p fontcolor d-none d-md-block d-lg-block">High Shine</p>
                <p class="h2p fontcolor d-none d-md-block d-lg-block">product code :12345 </p>
                <div class=" d-none d-md-block d-lg-block">
                
                <i class="fa fa-star design-color" aria-hidden="true"></i>
                <i class="fa fa-star design-color" aria-hidden="true"></i>
                <i class="fa fa-star design-color" aria-hidden="true"></i>
                <i class="fa fa-star design-color" aria-hidden="true"></i>
                <i class="fa fa-star-half-o design-color" aria-hidden="true"></i> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                 
                 <a href="#reviews" class="unline"><span class=" design-color">write a review</span></a>
            
                </div>
                <p class="price design-color">USD $10.00</p>
                
                 <div class="color-box d-none d-md-block d-lg-block" >
                     <button title="1" class="one-color-crl circle" style="background-color:#82667f;"></button>
                     <button title="2" class="one-color-crl circle" style="background-color:#b486ab;"></button>
                     <button title="3" class="one-color-crl circle" style="background-color:#dd9ac2;"></button>
                    <button title="4" class="one-color-crl circle" style="background-color:#f4cae0;"></button>
                    <button title="5" class="one-color-crl circle" style="background-color:#ff82a9;"></button>
                    <button title="6" class="one-color-crl circle" style="background-color:#da5552;"></button>
                    <button title="7" class="one-color-crl circle" style="background-color:#ce4257;"></button>
                    <button title="8" class="one-color-crl circle" style="background-color:#de4d86;"></button>
                   </div>
                   <div class="div-bag d-grid gap-2 d-md-flex justify-content-md-end">
                   <label class="fontcolor">Quantity: </label>
                  
                   <input type="number" value="1" >
                     <button type="button" class="btn btn-primary " >ADD TO BAG</button>
                </div>
            </div>
        </div>
    </div>
</div>


@yield('desc')


 <div class="container">
     <h5 class="fontcolor">You May Also Like</h5>
     <hr class="design-color hr">
     <div class="row like-pro">


         <div class="col-md-3 ">
            <a href="details page.html"><img class=" img-fluid rounded mx-auto d-block" src="../images/3.jpg" alt=""></a> 
             <a href="details page.html"><h6 class="center fontcolor">LIP LINGERIE</h6></a>
             <div class="center">
             <i class="fa fa-star design-color" aria-hidden="true"></i>
             <i class="fa fa-star design-color" aria-hidden="true"></i>
             <i class="fa fa-star design-color" aria-hidden="true"></i>
             <i class="fa fa-star design-color" aria-hidden="true"></i>
             <i class="fa fa-star-half-o design-color" aria-hidden="true"></i>
            </div>
             <p class="center price design-color">USD $7.00</p>
             <div class="d-grid gap-2 col-6 mx-auto">
             <button type="button" class="  btn btn-primary " >ADD TO BAG</button>
            </div>
         </div>



         <div class="col-md-3 ">
            <a href="details page.html"><img class="img-fluid rounded mx-auto d-block" src="../images/5.webp" alt=""></a> 
            <a href="details page.html"><h6 class="center fontcolor"> THE MARSHMELLOW SMOOTHING PRIMER</h6></a>
            <div class="center">
            <i class="fa fa-star design-color" aria-hidden="true"></i>
            <i class="fa fa-star design-color" aria-hidden="true"></i>
            <i class="fa fa-star design-color" aria-hidden="true"></i>
            <i class="fa fa-star design-color" aria-hidden="true"></i>
            <i class="fa fa-star-half-o design-color" aria-hidden="true"></i>
            </div>
            <p class="center price design-color">USD $15.00</p>
            <div class=" d-grid gap-2 col-6 mx-auto">
            <button type="button" class="  btn btn-primary " >ADD TO BAG</button>
             </div>
         </div>



         <div class="col-md-3 ">
            <a href="details page.html"><img class=" img-fluid rounded mx-auto d-block" src="../images/2.webp" alt=""></a> 
            <a href="details page.html"><h6 class="center fontcolor">SOFT MATTE LIP CREAM</h6></a>
            <div class="center">
            <i class="fa fa-star design-color" aria-hidden="true"></i>
            <i class="fa fa-star design-color" aria-hidden="true"></i>
            <i class="fa fa-star design-color" aria-hidden="true"></i>
            <i class="fa fa-star design-color" aria-hidden="true"></i>
            <i class="fa fa-star-half-o design-color" aria-hidden="true"></i>
            </div>
            <p class="center price design-color">USD $10.00</p>
            <div class="d-grid gap-2 col-6 mx-auto">
            <button type="button" class=" btn btn-primary " >ADD TO BAG</button>
             </div>
         </div>
         <div class="col-md-3  ">
            <a href="details page.html"><img class=" img-fluid rounded mx-auto d-block" src="../images/7.webp" alt=""></a> 
            <a href="details page.html"><h6 class="center fontcolor">JUMBO EYE PENCIL</h6></a>
            <div class="center">
            <i class="fa fa-star design-color" aria-hidden="true"></i>
            <i class="fa fa-star design-color" aria-hidden="true"></i>
            <i class="fa fa-star design-color" aria-hidden="true"></i>
            <i class="fa fa-star design-color" aria-hidden="true"></i>
            <i class="fa fa-star-half-o design-color" aria-hidden="true"></i>
            </div>
            <p class="center price design-color">USD $10.00</p>
            <div class="d-grid gap-2 col-6 mx-auto">
            <button type="button" class=" btn btn-primary " >ADD TO BAG</button>
            </div>
         </div>

     </div>

 </div>

<div class="bg container img-fluid">
    
        <div class="text">
            <h1 class="nyx-font mx-3 my-3 pt-5">NYXC</h1>
            <h4 class="nyx-font fw-bold font-monospace mx-3 mb-3">WITH LOVE FROM LA</h4>
            <p class="font-monospace col-md-6 col-sm-8">
                Our brand was born, with love, in LA – the land of makeup and makeovers – where everyone can make it. A colorful city where 
                people fulfill their creative dreams, where diversity is the norm, and self-expression is celebrated. From the coast to the valley to
                 the glammed-up core, LA’s colorful personality is our home, our heart, and our muse</p>
        </div>
    
</div>




    <div class="container mt-5">
        
       
            <h5 class=" fontcolor">Recent reviews</h5>
            <hr class="design-color hr">
            <div class="col-md-12 d-flex my-3 py-3" >
            
              <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"/><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
        
              <p class="fontcolor pb-3 mb-0  lh-sm">
                
                <strong class="d-block fontcolor">@username 
                     <i class="fa fa-star-half-o design-color fa-pull-right" aria-hidden="true"></i>
                     <i class="fa fa-star design-color fa-pull-right" aria-hidden="true"></i> 
                     <i class="fa fa-star design-color fa-pull-right" aria-hidden="true"></i>
                    <i class="fa fa-star design-color fa-pull-right" aria-hidden="true"></i>
                    <i class="fa fa-star design-color fa-pull-right" aria-hidden="true"></i>
                   </strong> 
               
                Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
              </p>
            
             </div>

            <div class="col-md-12 d-flex my-3 py-3">
              <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#e83e8c"/><text x="50%" y="50%" fill="#e83e8c" dy=".3em">32x32</text></svg>
        
              <p class="fontcolor pb-3 mb-0  lh-sm ">
                <strong class="d-block text-gray-dark">@username 
                    <i class="fa fa-star-o design-color fa-pull-right" aria-hidden="true"></i>
                    <i class="fa fa-star-o design-color fa-pull-right" aria-hidden="true"></i> 
                    <i class="fa fa-star design-color fa-pull-right" aria-hidden="true"></i>
                    <i class="fa fa-star-half-o design-color fa-pull-right" aria-hidden="true"></i>
                    <i class="fa fa-star design-color fa-pull-right" aria-hidden="true"></i>
                </strong>
                Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
              </p>
            </div>
            <div class="col-md-12 d-flex">
              <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#6f42c1"/><text x="50%" y="50%" fill="#6f42c1" dy=".3em">32x32</text></svg>
        
              <p class="fontcolor pb-3 mb-0  lh-sm ">
                <strong class="d-block text-gray-dark">@username
                    <i class="fa fa-star-o design-color fa-pull-right" aria-hidden="true"></i>
                    <i class="fa fa-star-half-o design-color fa-pull-right" aria-hidden="true"></i> 
                    <i class="fa fa-star design-color fa-pull-right" aria-hidden="true"></i>
                    <i class="fa fa-star design-color fa-pull-right" aria-hidden="true"></i>
                    <i class="fa fa-star design-color fa-pull-right" aria-hidden="true"></i>
                </strong>
                Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
              </p>
            </div>
           
            <small class=" d-block text-end mt-3 pb-3">
              <a href="#" class="unline design-color">All reviews</a>
            </small>

            <div class="col-md-12">
                <h6 class="design-color">SHARE US YOUR REVIEW</h6>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="fontcolor form-label">Email address</label>
                    <input  id="reviews" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com ">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="fontcolor form-label">Your review</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>

            </div> 

    </div>
    




















  <footer class="text-muted py-5">
    <div class="container">
      <p class="float-end mb-1">
        <a href="#">Back to top</a>
      </p>
      <p class="mb-1">Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
      <p class="mb-0">New to Bootstrap? <a href="/">Visit the homepage</a> or read our <a href="../getting-started/introduction/">getting started guide</a>.</p>
    </div>
  </footer>
  
  <script src="{{URL('js/bootstrap.bundle.js')}}"></script>
  
 </body>
</html>