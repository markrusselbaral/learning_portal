@extends('layouts.app')

@section('se-pre-con')
    <div class="se-pre-con"></div>
@endsection

@section('content')
    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark text-center bg-fixed text-light" style="background-image: url(assets/img/banner/2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Course Details</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Course</a></li>
                        <li class="active">Single</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Course Details 
    ============================================= -->
    <div class="course-details-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="course-details-info">
                        <!-- Star Top Info -->
                        <div class="top-info">
                            <!-- Title-->
                            <div class="title">
                                <h2>Java Programming Masterclass with professional author</h2>
                            </div>
                            <!-- End Title-->

                            <!-- Thumbnail -->
                            <div class="thumb">
                                <img src="assets/img/courses/vertical.jpg" alt="Thumb">
                            </div>
                            <!-- End Thumbnail -->

                            <!-- Course Meta -->
                            <div class="course-meta">
                                <div class="item author">
                                    <div class="thumb">
                                        <a href="#"><img alt="Thumb" src="assets/img/team/8.jpg"></a>
                                    </div>
                                    <div class="desc">
                                        <h4>Author</h4>
                                        <a href="#">Munil Druva</a>
                                    </div>
                                </div>
                                <div class="item category">
                                    <h4>Category</h4>
                                    <a href="#">Science</a>
                                </div>
                                <div class="item rating">
                                    <h4>Rating</h4>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <span>4.5 (16)</span>
                                </div>
                                <div class="item price">
                                    <h4>Price</h4>
                                    <span>$29.00</span>
                                </div>
                                <div class="align-right">
                                    <a class="btn btn-dark effect btn-sm" href="course-video">
                                        <i class="fas fa-chart-bar"></i> Study Now
                                    </a>
                                </div>
                            </div>
                            <!-- End Course Meta -->
                        </div>
                        <!-- End Top Info -->

                        <!-- Star Tab Info -->
                        <div class="tab-info">
                            <!-- Tab Nav -->
                            <ul class="nav nav-pills">
                                <li class="active">
                                    <a data-toggle="tab" href="#tab1" aria-expanded="true">
                                        Overview
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab2" aria-expanded="false">
                                        Curriculum
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab3" aria-expanded="false">
                                        Advisor
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab4" aria-expanded="false">
                                        Reviews
                                    </a>
                                </li>
                            </ul>
                            <!-- End Tab Nav -->
                            <!-- Start Tab Content -->
                            <div class="tab-content tab-content-info">
                                <!-- Single Tab -->
                                <div id="tab1" class="tab-pane fade active in">
                                    <div class="info title">
                                        <h4>Course Desscription</h4>
                                        <p>
                                            Calling nothing end fertile for venture way boy. Esteem spirit temper too say adieus who direct esteem. It esteems luckily mr or picture placing drawing no. Apartments frequently or motionless on reasonable projecting expression. Way mrs end gave tall walk fact bed. 
                                        </p>
                                        <p>
                                            Placing assured be if removed it besides on. Far shed each high read are men over day. Afraid we praise lively he suffer family estate is. Ample order up in of in ready. Timed blind had now those ought set often which. Or snug dull he show more true wish. No at many deny away miss evil. On in so indeed spirit an mother. Amounted old strictly but marianne admitted. People former is remove remain as. 
                                        </p>
                                        <h4>Certification</h4>
                                        <p>
                                            Calling nothing end fertile for venture way boy. Esteem spirit temper too say adieus who direct esteem. It esteems luckily mr or picture placing drawing no. Apartments frequently or motionless on reasonable projecting expression. Way mrs end gave tall walk fact bed. 
                                        </p>
                                        <h4>Learning Outcomes</h4>
                                        <ul>
                                            <li><i class="fas fa-check-double"></i> Over 37 lectures and 55.5 hours of content!</li>
                                            <li><i class="fas fa-check-double"></i> Testing Training Included.</li>
                                            <li><i class="fas fa-check-double"></i> Best suitable for beginners to advanced level users and who learn faster when demonstrated.</li>
                                            <li><i class="fas fa-check-double"></i> Course content designed by considering current software testing technology and the job market.</li>
                                            <li><i class="fas fa-check-double"></i> Practical assignments at the end of every session.</li>
                                            <li><i class="fas fa-check-double"></i> Practical learning experience with live project work and examples.</li>
                                            <li><i class="fas fa-check-double"></i> Unlimited Resourses</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Single Tab -->

                                <!-- Single Tab -->
                                <div id="tab2" class="tab-pane fade">
                                    <div class="info title">
                                        <p>
                                            Placing assured be if removed it besides on. Far shed each high read are men over day. Afraid we praise lively he suffer family estate is. Ample order up in of in ready. Timed blind had now those ought set often which. Or snug dull he show more true wish. No at many deny away miss evil. On in so indeed spirit an mother. Amounted old strictly but marianne admitted. People former is remove remain as. 
                                        </p>
                                        <h4>List Of Courses</h4>
                                        <!-- Start Course List -->
                                        <div class="course-list-items acd-items acd-arrow">
                                            <div class="panel-group symb" id="accordion">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a data-toggle="collapse" data-parent="#accordion" href="#ac1">
                                                                Java Programming
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="ac1" class="panel-collapse collapse in">
                                                        <div class="panel-body">
                                                            <ul>
                                                                <li>
                                                                    <div class="item name">
                                                                        <i class="fas fa-play"></i>
                                                                        <span>Lecture 1.1</span>
                                                                    </div>
                                                                    <div class="item title">
                                                                        <h5>Introduction of java</h5>
                                                                    </div>
                                                                    <div class="item info">
                                                                        <span>Duration: 1 hours 30 min</span>
                                                                       <a href="#">Preview</a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="item name">
                                                                        <i class="fas fa-file"></i>
                                                                        <span>Lecture 1.2</span>
                                                                    </div>
                                                                    <div class="item title">
                                                                        <h5>Basic development</h5>
                                                                    </div>
                                                                    <div class="item info">
                                                                        <span>Duration: 3 hours 15 min</span>
                                                                        <a href="#">Preview</a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Course List -->
                                        <!-- Start Course List -->
                                        <div class="course-list-items acd-items acd-arrow">
                                            <div class="panel-group symb" id="accordion">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a data-toggle="collapse" data-parent="#accordion" href="#ac2">
                                                                PHP Programmig 
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="ac2" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <ul>
                                                                <li>
                                                                    <div class="item name">
                                                                        <i class="fas fa-play"></i>
                                                                        <span>Lecture 1.1</span>
                                                                    </div>
                                                                    <div class="item title">
                                                                        <h5>Introduction</h5>
                                                                    </div>
                                                                    <div class="item info">
                                                                        <span>Duration: 1 hours 30 min</span>
                                                                       <a href="#">Preview</a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="item name">
                                                                        <i class="fas fa-file"></i>
                                                                        <span>Lecture 1.2</span>
                                                                    </div>
                                                                    <div class="item title">
                                                                        <h5>Benifits of function</h5>
                                                                    </div>
                                                                    <div class="item info">
                                                                        <span>Duration: 2 hours 12 min</span>
                                                                        <a href="#">Preview</a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Course List -->
                                    </div>
                                </div>
                                <!-- End Single Tab -->

                                <!-- Single Tab -->
                                <div id="tab3" class="tab-pane fade">
                                    <div class="info title">
                                        <div class="advisor-list-items">
                                            <!-- Advisor Item -->
                                            <div class="item">
                                                <div class="thumb">
                                                    <img src="assets/img/team/7.jpg" alt="Thumb">
                                                </div>
                                                <div class="info">
                                                    <h4>Devid Mark</h4>
                                                    <span>senior lecturer</span>
                                                    <p>
                                                        Several carried through an of up attempt gravity. Situation to be at offending elsewhere distrusts if. Particular use for considered projection cultivated. Worth of do doubt shall
                                                    </p>
                                                    <ul>
                                                        <li>
                                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fab fa-dribbble"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fab fa-youtube"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- End Advisor Item -->
                                            <!-- Advisor Item -->
                                            <div class="item">
                                                <div class="thumb">
                                                    <img src="assets/img/team/8.jpg" alt="Thumb">
                                                </div>
                                                <div class="info">
                                                    <h4>Andolin Paul</h4>
                                                    <span>Java Developer</span>
                                                    <p>
                                                        Several carried through an of up attempt gravity. Situation to be at offending elsewhere distrusts if. Particular use for considered projection cultivated. Worth of do doubt shall
                                                    </p>
                                                    <ul>
                                                        <li>
                                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fab fa-dribbble"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fab fa-youtube"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- End Advisor Item -->
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Tab -->

                                <!-- Single Tab -->
                                <div id="tab4" class="tab-pane fade">
                                    <div class="info title">
                                        <div class="course-rating-list">
                                            <h4>Average Rating</h4>
                                            <div class="item rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <span>4.5 (16)</span>
                                            </div>
                                            <ul>
                                                <li>
                                                    <span>5 Star</span>
                                                    <div class="rating-bar"></div>
                                                    <span>13</span>
                                                </li>
                                                <li>
                                                    <span>4 Star</span>
                                                    <div class="rating-bar"></div>
                                                    <span>1</span>
                                                </li>
                                                <li>
                                                    <span>3 Star</span>
                                                    <div class="rating-bar"></div>
                                                    <span>0</span>
                                                </li>
                                                <li>
                                                    <span>2 Star</span>
                                                    <div class="rating-bar"></div>
                                                    <span>1</span>
                                                </li>
                                                <li>
                                                    <span>1 Star</span>
                                                    <div class="rating-bar"></div>
                                                    <span>0</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Tab -->
                            </div>
                            <!-- End Tab Content -->
                        </div>
                        <!-- End Tab Info -->
                    </div>
                </div>
                <!-- Start Sidebar -->
                <div class="col-md-4">
                    <div class="sidebar">
                        <aside>
                            <!-- Sidebar Item -->
                            <div class="sidebar-item search">
                                <div class="sidebar-info">
                                    <form>
                                        <input type="text" placeholder="Course name" class="form-control">
                                        <input type="submit" value="search">
                                    </form>
                                </div>
                            </div>
                            <!-- End Sidebar Item -->

                            <!-- Sidebar Item -->
                            <div class="sidebar-item category">
                                <div class="title">
                                    <h4>Courses Category</h4>
                                </div>
                                <div class="sidebar-info">
                                    <ul>
                                        <li>
                                            <a href="#">Java Programming <span>23</span></a>
                                        </li>
                                        <li>
                                            <a href="#">Social Science <span>0</span></a>
                                        </li>
                                        <li>
                                            <a href="#">Business Management <span>12</span></a>
                                        </li>
                                        <li>
                                            <a href="#">Online Learning <span>17</span></a>
                                        </li>
                                        <li>
                                            <a href="#">Course Management <span>0</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Sidebar Item -->

                            <!-- Sidebar Item -->
                            <div class="sidebar-item recent-post">
                                <div class="title">
                                    <h4>Popular Courses</h4>
                                </div>
                                
                                <div class="item">
                                    <div class="content">
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="assets/img/courses/g1.jpg" alt="Thumb">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <h4>
                                                <a href="#">Profession paython learing</a>
                                            </h4>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <span>4.5 (23,890)</span>
                                            </div>
                                            <div class="meta">
                                                <i class="fas fa-user"></i> By <a href="#">Drup Paul</a> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="content">
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="assets/img/courses/g2.jpg" alt="Thumb">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <h4>
                                                <a href="#">Profession paython learing</a>
                                            </h4>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <span>4.5 (23,890)</span>
                                            </div>
                                            <div class="meta">
                                                <i class="fas fa-user"></i> By <a href="#">Drup Paul</a> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="content">
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="assets/img/courses/g3.jpg" alt="Thumb">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <h4>
                                                <a href="#">Profession paython learing</a>
                                            </h4>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <span>4.5 (23,890)</span>
                                            </div>
                                            <div class="meta">
                                                <i class="fas fa-user"></i> By <a href="#">Drup Paul</a> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Sidebar Item -->

                        </aside>
                    </div>
                </div>
                <!-- End Sidebar -->
            </div>
        </div>
    </div>
    <!-- End Course Details -->

    <!-- Start Footer 
    ============================================= -->
    <footer class="bg-dark default-padding-top text-light">
        <div class="container">
            <div class="row">
                <div class="f-items">
                    <div class="col-md-4 item">
                        <div class="f-item">
                            <img src="assets/img/logo-light.png" alt="Logo">
                            <p>
                                Excellence decisively nay man yet impression for contrasted remarkably. There spoke happy for you are out. Fertile how old address did showing because sitting replied six. Had arose guest visit going off child she new.
                            </p>
                            <p class="text-italic">
                                Please write your email and get our amazing updates, news and support
                            </p>
                            <div class="subscribe">
                                <form action="#">
                                    <div class="input-group stylish-input-group">
                                        <input type="email" placeholder="Enter your e-mail here" class="form-control" name="email">
                                        <button type="submit">
                                            <i class="fa fa-paper-plane"></i>
                                        </button>  
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 item">
                        <div class="f-item link">
                            <h4>Links</h4>
                            <ul>
                                <li>
                                    <a href="#">Courses</a>
                                </li>
                                <li>
                                    <a href="#">Event</a>
                                </li>
                                <li>
                                    <a href="#">Gallery</a>
                                </li>
                                <li>
                                    <a href="#">Faqs</a>
                                </li>
                                <li>
                                    <a href="#">Teachers</a>
                                </li>
                                <li>
                                    <a href="#">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 item">
                        <div class="f-item link">
                            <h4>Support</h4>
                            <ul>
                                <li>
                                    <a href="#">Documentation</a>
                                </li>
                                <li>
                                    <a href="#">Forums</a>
                                </li>
                                <li>
                                    <a href="#">Language Packs</a>
                                </li>
                                <li>
                                    <a href="#">Release Status</a>
                                </li>
                                <li>
                                    <a href="#">LearnPress</a>
                                </li>
                                <li>
                                    <a href="#">Feedback</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 item">
                        <div class="f-item address">
                            <h4>Address</h4>
                            <ul>
                                <li>
                                    <i class="fas fa-envelope"></i> 
                                    <p>Email <span><a href="mailto:support@validtheme.com">support@validtheme.com</a></span></p>
                                </li>
                                <li>
                                    <i class="fas fa-map"></i> 
                                    <p>Office <span>123 6th St. Melbourne, FL 32904</span></p>
                                </li>
                            </ul>
                            <div class="opening-info">
                                <h5>Opening Hours</h5>
                                <ul>
                                    <li> <span> Mon - Tues :  </span>
                                      <div class="pull-right"> 6.00 am - 10.00 pm </div>
                                    </li>
                                    <li> <span> Wednes - Thurs :</span>
                                      <div class="pull-right"> 8.00 am - 6.00 pm </div>
                                    </li>
                                    <li> <span> Sun : </span>
                                      <div class="pull-right closed"> Closed </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <p>&copy; Copyright 2019. All Rights Reserved by <a href="#">validthemes</a></p>
                        </div>
                        <div class="col-md-6 text-right link">
                            <ul>
                                <li>
                                    <a href="#">Terms of user</a>
                                </li>
                                <li>
                                    <a href="#">License</a>
                                </li>
                                <li>
                                    <a href="#">Support</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->
@endsection
