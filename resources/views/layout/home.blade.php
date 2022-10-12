@extends('layout.master')

@section('content')
<section >
        <div class="gallary">
            <div class="container p-5 ml-auto">
                <div class="title">
                    <h1 class="p-20 align-center">Gallery</h1>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0"><img src="./assets/images/g1.jpg"
                            class="w-100 h-100 shadow-1-strong rounded mb-4" alt="" /><img src="./assets/images/g2.jpg"
                            class="w-100 h-100 shadow-1-strong rounded mb-4" alt="" /></div>
                    <div class="col-lg-4 mb-4 mb-lg-0"><img src="./assets/images/g3.jpg"
                            class="w-100 h-100 shadow-1-strong rounded mb-4" alt=" " /><img src="./assets/images/g4.jpg"
                            class="w-100 h-100 shadow-1-strong rounded mb-4" alt="" /></div>
                    <div class="col-lg-4 mb-4 mb-lg-0"><img src="./assets/images/g1.jpg"
                            class="w-100 h-100 shadow-1-strong rounded mb-4" alt="" /><img src="./assets/images/g2.jpg"
                            class="w-100 h-100 shadow-1-strong rounded mb-4" alt="" /></div>
                </div>
            </div>
        </div>
    </section>
    <div style="height: 50px;"></div><br style="clear:both;" />
    <section class="h-auto w-auto" style="overflow-y: hidden">
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
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp"><a href="#"><img src="/assets/images/logo_01.png" alt=""
                            class="img-repsonsive"></a></div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp"><a href="#"><img src="/assets/images/logo_02.png" alt=""
                            class="img-repsonsive"></a></div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp"><a href="#"><img src="/assets/images/logo_03.png" alt=""
                            class="img-repsonsive"></a></div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp"><a href="#"><img src="/assets/images/logo_04.png" alt=""
                            class="img-repsonsive"></a></div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp"><a href="#"><img src="/assets/images/logo_05.png" alt=""
                            class="img-repsonsive"></a></div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp"><a href="#"><img src="/assets/images/logo_06.png" alt=""
                            class="img-repsonsive"></a></div>
            </div>
        </div>
    </div>

    @endsection