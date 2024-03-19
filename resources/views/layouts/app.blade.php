<!doctype html>
<html lang="en">
  <head>
    <title>Kelompok 12 PPL- @yield('title')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
  <body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 py-3 bg-primary">
                <div class="dropdown float-right">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      User
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#">
                        <div class="media">
                        <img class="align-self-center mr-3" src="https://www.shareicon.net/data/2016/05/26/771190_people_512x512.png" height="50" width="50" alt="Generic placeholder image">
                        <div class="media-body">
                          <h5 class="mt-0">{{ Auth::user()->username}}</h5>
                          <small><p class="mb-0"><i class="bi bi-clock">  </i>Pkl 13.00 WIB</p></small>
                        </div>
                      </div>
                    </a>
                      <a class="dropdown-item" href="#"><i class="bi bi-gear">  </i>Settings</a>
                      <a class="dropdown-item" href="/logout"><i class="bi bi-box-arrow-right">  </i>Log Out</a>
                    </div>
                  </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2 mt-4">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link {{($key == 'home') ? 'active':''}}" href="/home" role="tab" >Home</a>
                    <a class="nav-link {{($key =='user') ? 'active': ''}}" href="/user" role="tab" >User</a>
                    <a class="nav-link {{($key =='contact') ? 'active': ''}}" href="/contact" role="tab" >Contact</a>
                  </div>
            </div>
            <div class="col-lg-10">
                <div class= "card mt-4 vh-100">
                    <div class= "card-body">
                     <!-- content article -->
                     @yield('content')
                    </div>
                </div>
            </div>
         
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>