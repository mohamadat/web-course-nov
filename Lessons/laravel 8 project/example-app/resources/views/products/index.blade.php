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


  <style>
    #atwa-modal {
      position: absolute;
      top: 20vh;
      left: 0;
      right: 0;
    }
  </style>

  <!-- Bootstrap core CSS -->
  <link href="{{URL('css/bootstrap.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{URL('css/mystyle.css')}}">

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

<body>

  <!-- insperation URL: https://www.nyxcosmetics.com/lips/  -->

  <header>
    <div class="collapse bg-dark" id="navbarHeader">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-md-7 py-4">
            <h4 class="text-white">About</h4>
            <p class="text-muted">Add some information about the album below, the author, or any other background
              context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off
              to some social networking sites or contact information.</p>
          </div>
          <div class="col-sm-4 offset-md-1 py-4">
            <h4 class="text-white">Contact</h4>
            <ul class="list-unstyled">
              <li><a href="#" class="text-white"><i class="fa fa-twitter mx-2 fa-fw" aria-hidden="true"></i> Follow on
                  Twitter</a></li>
              <li><a href="#" class="text-white"><i class="fa fa-facebook mx-2 fa-fw" aria-hidden="true"></i>Like on
                  Facebook</a></li>
              <li><a href="#" class="text-white"><i class="fa fa-envelope-o mx-2 fa-fw" aria-hidden="true"></i>Email
                  me</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="navbar navbar-dark bg-dark shadow-sm">
      <div class="container">
        <a href="#" class="navbar-brand d-flex align-items-center">
         
          <h1 class="nyx-font">NYXC</h1>
        </a>
        <div>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader"
            aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <span class="ms-3">
            <span class="bgcart"><i class="fa fa-shopping-cart   fa-lg px-2 fa-fw me-3" aria-hidden="true"></i></span>
            <span class="bgcart"><i class="fa fa-user px-2  fa-lg fa-fw " aria-hidden="true"></i></span>
          </span>

        </div>
      </div>
    </div>
  </header>

  <main>

    <section id="main-head" class="py-5 text-center container-fluid">
      <img class="img-fluid" src="{{URL('img/firstcover1.png')}}"> </img>
      <div id="main-btns" class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
          <h1 class="nyx-font">NYXC</h1>
          <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator,
            etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
          <p>
            <a href="#main-album" class="btn btn-primary my-2">start shopping now</a>
            <a href="login2.html" class="btn btn-secondary my-2">sign up</a>

            <span id="signupatwa" class="btn btn-secondary my-2">Sign up modal js</span>

          <div id="atwa-modal" style="">
            <h1>MODALL</h1>
            <div id="main-head" class="container-fluid">
              <div class="container">
                <h2 class="text-center" id="title">NYXC</h2>

                <hr>
                <div class="row">
                  <div class="col-md-5">
                    <form role="form" method="post" action="register.php">
                      <fieldset>
                        <p class="text-uppercase pull-center"> SIGN UP.</p>
                        <div class="form-group">
                          <input type="text" name="username" id="username" class="form-control input-lg"
                            placeholder="username">
                        </div>

                        <div class="form-group">
                          <input type="email" name="email" id="email" class="form-control input-lg"
                            placeholder="Email Address">
                        </div>
                        <div class="form-group">
                          <input type="password" name="password" id="password" class="form-control input-lg"
                            placeholder="Password">
                        </div>
                        <div class="form-group">
                          <input type="password" name="confirmPassword" id="confirmPassword"
                            class="form-control input-lg" placeholder="Confirm Password">
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="checkbox" class="form-check-input">
                            By Clicking register you're agree to our policy & terms
                          </label>
                        </div>
                        <br>
                        <div>
                          <input type="submit" class="btn btn-lg btn-primary" value="Register">
                        </div>
                      </fieldset>
                    </form>
                  </div>

                  <div class="col-md-2">
                    <!-------null------>
                  </div>

                  <div class="col-md-5">
                    <form role="form">
                      <fieldset>
                        <p class="text-uppercase"> Login using your account: </p>

                        <div class="form-group">
                          <input type="email" name="username" id="username" class="form-control input-lg"
                            placeholder="username">
                        </div>
                        <div class="form-group">
                          <input type="password" name="password" id="password" class="form-control input-lg"
                            placeholder="Password">
                        </div>
                        <div>
                          <input type="submit" class="btn btn-primary" value="Sign In">
                        </div>

                      </fieldset>
                    </form>
                  </div>
                </div>
              </div>

            </div>
          </div>



          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Bootstrap modal
          </button>

          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  ...
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>




          </p>
        </div>
      </div>

     </main>
  <div id="sticky-menu" class="container-fluid">
    <div class="d-none d-md-flex ">
      <div class="p-2 flex-fill text-center">new</div>
      <div class="p-2 flex-fill text-center">eyes</div>
      <div class="p-2 flex-fill text-center">lips</div>
      <div class="p-2 flex-fill text-center">face</div>
      <div class="p-2 flex-fill text-center">finish</div>
    </div>

  </div>
  <div>
    <p class=" shipping text-center">free shipping on orders over $25</p>
  </div>


  <div id="collapse-menu" class=" container-fluid d-block d-md-none">
    <div class="row">
      <div id="co-menu-dec" class="col-6">

        <button class="my-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample"
          aria-expanded="false" aria-controls="collapseExample">
          menu
        </button>


        <div class="collapse part-1 py-3" id="collapseExample">
          <div class="">


            <ul>
              <li class="text-start my-4">new</li>
              <hr>
              <li class="text-start my-4">eyes</li>
              <hr>
              <li class="text-start my-4">lips</li>
              <hr>
              <li class="text-star my-4">face</li>
              <hr>
              <li class="text-start my-4">finish</li>
            </ul>

          </div>

        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid container-bg">

    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6">
          <div class="photo-card">
            <a href="#">
            <img src="{{URL('/img/eyes1.jpg')}}" alt="" width="80%"></a>

            <h3 class="px-5 py-5">Hi there , bright eyes!</h3>
            <div class="ps-5 d-flex">
              <span class="align-self-start"">meet our new products for charming eyes<br>
              create ultimate smoky eye or keep it natural for a little everyday glamour.
            </span>

            <a href=" #" class="align-self-center align-self-end mx-5"">shop&nbsp;now&nbsp;<i class=" fa
                fa-long-arrow-right" aria-hidden="true"></i></a>

            </div>
          </div>
        </div>
        <div class="col-12 col-md-6">
          <div class="photo-card">

            <h3 class="ps-2 pt-5">Activate your base </h3>
            <div class="ps-2 py-5 d-flex">
              <span class="align-self-start"">Call it lazy or call it efficient—these double-duty bases deliver on easy coverage and high-powered skincare ingredients.
              
            </span>

            <a href=" #" class="align-self-center align-self-end mx-5"">shop&nbsp;now&nbsp;<i class=" fa
                fa-long-arrow-right" aria-hidden="true"></i></a>

            </div>
            <a href="#"><img src="{{ URL('img/foundation3.jpg') }}" alt="" width="80%"></a>

          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid sale my-5 ">
      <div class="sale-circle"></div>

      
      <div id="sale-text-span" class="text-center "> 40 % sale</div>
      <img class="sale-img img-fluid" src="{{URL('img/makeupmodel.png')}}" width="30%" height="70%">
    </div>
    <div class="container py-5 my-5">
      <div class="row">
        <div class="col-12">
          <div class="photo-card d-flex">
            <a href="#" class="ps-3 justify-content-start"><img src="{{URL('img/lips.png')}}" alt="" width="80%"></a>

            <div class="justify-content-end">
              <h4 class="ps-2 pt-5 text-center">Like blending in? Try standing out </h4>
              <div class="ps-2 py-5 ">
                <span class="align-self-center text-center">A creamy swipe of lip colour isthe easiest way to change
                  up
                  your look.<br>These are our favourites.

                </span>

                <a href=" #" class=" align-self-end mx-5"">shop&nbsp;now&nbsp;<i class=" fa fa-long-arrow-right"
                  aria-hidden="true"></i></a>

              </div>
            </div>

          </div>

        </div>
      </div>

    </div>
  </div>


  <footer class="text-muted py-5">
    <div class="container">
      <p class="float-end mb-1">
        <a href="#">Back to top</a>
      </p>
      <p class="mb-1">Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
      <p class="mb-0">New to Bootstrap? <a href="/">Visit the homepage</a> or read our <a
          href="../getting-started/introduction/">getting started guide</a>.</p>
    </div>
  </footer>


  <script src="{{ URL('js/bootstrap.bundle.js') }}"></script>


  <script src="{{URL('js/myscript.js')}}"></script>
</body>

</html>