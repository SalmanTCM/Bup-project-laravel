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
<link type="text/css" rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>

<body class="">
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header tit-up"><button type="button" class="close" data-dismiss="modal"
                        aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Verify Transaction</h4>
                </div>
                <div class="modal-body customer-box">
                    <ul class="nav nav-tabs"></ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="Login">
                            <form role="form" class="form" id="forms" onsubmit="event.preventDefault()">
                                <div class="form-group">
                                    <div class="col-sm-12"><label for="Name">Name</label><input class="form-control"
                                            id="email" placeholder="Name" type="text" required></div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12"><label for="Email"> Email</label><input class="form-control"
                                            id="exampleInputPassword1" placeholder="Email" type="email" required></div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12"><label for="">Application Serial</label><input
                                            class="form-control" id="exampleInputPassword1"
                                            placeholder="Application Serial Number" type="text" required></div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12"><label for="TID">Course Code</label><input
                                            class="form-control" id="exampleInputPassword1" placeholder="Course Code"
                                            type="email" required></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-10"><input type="submit" value="Submit" id="submit-form"
                                            class="btn" /></div>
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
            <div class="container-fluid"><a class="navbar-brand logo" href=""><img src="images/logo.png"
                        alt="" /></a><button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false"
                    aria-label="Toggle navigation"><span class="icon-bar"></span><span class="icon-bar"></span><span
                        class="icon-bar"></span></button>
                <div class="collapse navbar-collapse" id="navbars-host">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.html">About Us</a></li>
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
                            <div class="dropdown-menu" aria-labelledby="dropdown-a"><button class="dropdown-item" data-toggle="modal" data-target="#login">Apply Online </button></div>
                        </li>
                        <li class="nav-item"><a class="nav-link dropdown-toggle" href="#" id="dropdown-a"
                                data-toggle="dropdown">Faculty</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-a"><a class="dropdown-item"
                                    href="">CSE</a><a class="dropdown-item" href="">EEE</a><a class="dropdown-item"
                                    href="">ECE</a></div>
                        <li class="nav-item"><a class="nav-link" href="">Student</a></li>
                        <li class="nav-item"><a class="nav-link" href="">ALUMNI</a></li>
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
                <div id="home" class="first-section" style="background-image:url('/assets/images/slider-01.jpg');">
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
                data-slide="prev"><span class="fa fa-angle-left" aria-hidden="true"></span><span
                    class="sr-only">Previous</span></a><a class="new-effect carousel-control-next"
                href="#carouselExampleControls" role="button" data-slide="next"><span class="fa fa-angle-right"
                    aria-hidden="true"></span><span class="sr-only">Next</span></a>
        </div>
    </div>

    <section>
        <div class="gallary">
            <div class="container p-5 ml-auto">
                <div class="title">
                    <h1 class="p-20 align-center">Gallery</h1>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0"><img src="./images/g1.jpg"
                            class="w-100 h-100 shadow-1-strong rounded mb-4" alt="" /><img src="./images/g2.jpg"
                            class="w-100 h-100 shadow-1-strong rounded mb-4" alt="" /></div>
                    <div class="col-lg-4 mb-4 mb-lg-0"><img src="./images/g3.jpg"
                            class="w-100 h-100 shadow-1-strong rounded mb-4" alt=" " /><img src="./images/g4.jpg"
                            class="w-100 h-100 shadow-1-strong rounded mb-4" alt="" /></div>
                    <div class="col-lg-4 mb-4 mb-lg-0"><img src="./images/g1.jpg"
                            class="w-100 h-100 shadow-1-strong rounded mb-4" alt="" /><img src="./images/g2.jpg"
                            class="w-100 h-100 shadow-1-strong rounded mb-4" alt="" /></div>
                </div>
            </div>
        </div>
    </section>
    <div style="height: 50px;"></div><br style="clear:both;" />
    <section class="h-auto w-auto">
        <div class="notice">
            <div class="container">
                <div class="title">
                    <h1 class="p-20 align-center">Notice Board</h1>
                </div>
                <div class="row">
                    <div class="leftBox">
                        <div class="content">
                            <h1>Events and Shows</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio maiores velit,
                                consecteturab autemminima, similique fugiat quidem a corrupti dolor nisi mollitia eius,
                                nihil quisquam illodictasapiente amet.</p>
                        </div>
                    </div>
                    <div class="events">
                        <ul>
                            <li>
                                <div class="time">
                                    <h2>15 <br><span>March</span></h2>
                                </div>
                                <div class="details">
                                    <h3>Where is the event happening?</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta ve</p><a
                                        href="#">View Details</a>
                                </div>
                                <div style="clear: both;"></div>
                            </li>
                            <li>
                                <div class="time">
                                    <h2>27 <br><span>May</span></h2>
                                </div>
                                <div class="details">
                                    <h3>Where is the event happening?</h3>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Except</p><a
                                        href="#">View Details</a>
                                </div>
                                <div style="clear:both;"></div>
                            </li>
                            <li>
                                <div class="time">
                                    <h2>12 <br><span>August</span></h2>
                                </div>
                                <div class="details">
                                    <h3>Where is the event happening?</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, in.</p><a
                                        href="#">View Details</a>
                                </div>
                                <div style="clear:both;"></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="parallax section dbcolor">
        <div class="container">
            <div class="row logos">
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp"><a href="#"><img src="images/logo_01.png" alt=""
                            class="img-repsonsive"></a></div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp"><a href="#"><img src="images/logo_02.png" alt=""
                            class="img-repsonsive"></a></div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp"><a href="#"><img src="images/logo_03.png" alt=""
                            class="img-repsonsive"></a></div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp"><a href="#"><img src="images/logo_04.png" alt=""
                            class="img-repsonsive"></a></div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp"><a href="#"><img src="images/logo_05.png" alt=""
                            class="img-repsonsive"></a></div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp"><a href="#"><img src="images/logo_06.png" alt=""
                            class="img-repsonsive"></a></div>
            </div>
        </div>
    </div>
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