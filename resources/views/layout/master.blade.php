<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>BUP</title>
<meta name="keywords" content="">
<link rel="shortcut icon" href="{{asset('/assets/images/logo.png')}}" type="image/x-icon" />
<link rel="BUP" href="images/logo.png">
<link rel="stylesheet" href="{{asset('/assets/css/bootstrap.min.css')}}">
<link type="text/css" rel="stylesheet" href="{{asset('/assets/css/style.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/fontawesome.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
</head>

<body class="">
    <!-- login modal -->
    <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                    <div class="md-form mb-5">
                        
                        <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
                        <input type="email" id="defaultForm-email" class="form-control validate">
                        
                    </div>

                    <div class="md-form mb-4">
                       
                        <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
                      
                        <input type="password" id="defaultForm-pass" class="form-control validate">
                       
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-default bg-success font-weight-bold px-4 ">Login</button>
                </div>
            </div>
        </div>
    </div>
    <div class="text-right px-5">
        <a href="" class="btn-rounded" data-toggle="modal" data-target="#modalLoginForm">Login </a>
    </div>
    <!-- signup modal -->
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header tit-up"><button type="button" class="close" data-dismiss="modal"
                        aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Apply Online</h4>
                </div>
                <div class="modal-body customer-box">
                    <!-- <ul class="nav nav-tabs"></ul> -->
                    <!-- modal -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="Login">
                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />
                            <form role="form" action="{{ route('dataRegister')}}" method="POST" class="form" id="forms">

                                @csrf
                                @method("POST")
                                <div class="form-group">
                                    <div class="col-sm-12"><label for="Name">Name</label>
                                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                            :value="old('name')" required autofocus />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12"><label for="Email"> Email</label>
                                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                            :value="old('email')" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12"><label for="">Mobile No</label>
                                        <x-text-input id="email" class="block mt-1 w-full" type="mobile" name="mobile"
                                            :value="old('mobile')" required />
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12"><input type="submit" value="Submit" class="btn" /></div>
                                </div>

                            </form>
                        </div>
                        <!-- <div class="tab-pane" id="Registration"><form role="form" class="form-horizontal"><div class="form-group"><div class="col-sm-12"><input class="form-control" placeholder="Name" type="text"></div></div><div class="form-group"><div class="col-sm-12"><input class="form-control" id="email" placeholder="Email" type="email"></div></div><div class="form-group"><div class="col-sm-12"><input class="form-control" id="mobile" placeholder="Mobile" type="email"></div></div><div class="form-group"><div class="col-sm-12"><input class="form-control" id="password" placeholder="Password"type="password"></div></div><div class="row"><div class="col-sm-10"><button type="button" class="btn btn-light btn-radius btn-brd grd1">Save &amp; Continue</button><button type="button" class="btn btn-light btn-radius btn-brd grd1">Cancel</button></div></div></form></div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <header class="top-navbar">
        <div class="navtop"></div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid"><a class="navbar-brand logo" href=""><img src="./assets/images/logo.png"
                        alt="" /></a><button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false"
                    aria-label="Toggle navigation"><span class="icon-bar"></span><span class="icon-bar"></span><span
                        class="icon-bar"></span></button>
                <div class="collapse navbar-collapse" id="navbars-host">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('/about')}}">About Us</a></li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="dropdown-a"
                                data-toggle="dropdown">Course</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-a"><a class="dropdown-item"
                                    href="">Course Grid 2 </a><a class="dropdown-item" href="">Course Grid 3 </a><a
                                    class="dropdown-item" href="">Course Grid 4 </a></div>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="dropdown-a"
                                data-toggle="dropdown">Oncampus </a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-a"><a class="dropdown-item" href="">ON
                                    CAMPUS </a></div>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="dropdown-a"
                                data-toggle="dropdown">Admission </a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-a"><button class="dropdown-item"
                                    data-toggle="modal" data-target="#login">Apply Online </button></div>
                        </li>
                        <li class="nav-item"><a class="nav-link dropdown-toggle" href="#" id="dropdown-a"
                                data-toggle="dropdown">Faculty</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-a"><a class="dropdown-item"
                                    href="">CSE</a><a class="dropdown-item" href="">EEE</a><a class="dropdown-item"
                                    href="">ECE</a></div>
                        <li class="nav-item"><a class="nav-link" href="">Student</a></li>

                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div id="carouselExampleControls" class="carousel slide bs-slider box-slider" data-ride="carousel"
        data-pause="hover" data-interval="false">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleControls" data-slide-to="1"></li>
            <li data-target="#carouselExampleControls" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner carousel" role="listbox">
            <div class="carousel-item active">
                <div id="home" class="first-section" style="background-image:url('./assets/images/slider-01.jpg');">
                    <div class="dtab">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 text-right"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div id="home" class="first-section" style="background-image:url('images/slider-02.jpg');">
                    <div class="dtab">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 text-left">
                                    <div class="big-tagline"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div id="home" class="first-section" style="background-image:url('images/slider-01.jpg');">
                    <div class="dtab">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 text-center">
                                    <div class="big-tagline"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><a class="new-effect carousel-control-prev" href="#carouselExampleControls" role="button"
                data-slide="prev"><i class="fa fa-chevron-left" aria-hidden="true"></i><span
                    class="sr-only">Previous</span></a><a class="new-effect carousel-control-next"
                href="#carouselExampleControls" role="button" data-slide="next"><span class="fa fa-angle-right"
                    aria-hidden="true"></span><span class="sr-only">Next</span></a>
        </div>
    </div>


    @yield('content')

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>About US</h3>
                        </div>
                        <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus
                            faucibusbibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et
                            magnisdis montes.</p>
                        <div class="footer-right">
                            <ul class="footer-links-soi">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-github"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Information Link</h3>
                        </div>
                        <ul class="footer-links">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Pricing</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Contact Details</h3>
                        </div>
                        <ul class="footer-links">
                            <li><a href="mailto:#">info@yoursite.com</a></li>
                            <li><a href="#">www.yoursite.com</a></li>
                            <li>PO Box 16122 Collins Street West Victoria 8007 Australia</li>
                            <li>+01412345678</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-center">
                    <p class="footer-company-name">All Rights Reserved. &copy; 2022 <a href="#">BUP</a> </p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<Script>
const progress = document.getElementById("progress");
const formSteps = document.querySelectorAll(".step-forms");
const progressSteps = document.querySelectorAll(".progress-step");
document.getElementById("submit-form").addEventListener("click", function() {
    progressSteps.forEach((progressStep, idx) => {
        if (idx <= formStepsNum) {
            progressStep.classList.add("progress-step-check");
        } else {
            progressStep.classList.remove("progress-step-check");
        }
    });
    var forms = document.getElementById("forms");
    forms.classList.remove("form");
    forms.innerHTML =
        '<div class="welcome center"><div class="content"><svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/><path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/></svg><h2>Thank You!</h2><span>We will send you an email soon!</span><div></div>';
});
</Script>
<script>
timeline(document.querySelectorAll('.timeline'), {
    forceVerticalMode: 700,
    mode: 'horizontal',
    verticalStartPosition: 'left',
    visibleItems: 4,
});
</script>
<script src="{{asset('assets/js/all.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
<script src="{{asset('assets/js/timeline.min.js')}}"></script>
<script src="{{asset('assets/js/components/bootstrap.js')}}"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="{{asset('assets/slick/slick.min.js')}}"></script>