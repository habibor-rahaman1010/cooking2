{{-- This is my home page --}}

@extends('share.common')
@section('title', 'Home')


@section('content')
<div class='preloader'><div class='loaded'>&nbsp;</div></div>
    <section id="home" class="home">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 ">
                        <div class="main_home_slider">
                            <div class="single_home_slider">
                                <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                    <h1>OUR COOKING SCHOOL FREE LEARNING HUB</h1>
                                    <p class="subtitle">graphicsdrawer.com</p>

                                    <div class="home_btn">
                                        <a href="" class="btn btn-primary">LEARN MORE</a>
                                    </div>

                                </div>
                            </div>
                            <div class="single_home_slider">
                                <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                    <h1>OUR COOKING SCHOOL FREE PSD TEMPLATE</h1>
                                    <p class="subtitle">graphicsdrawer.com</p>

                                    <div class="home_btn">
                                        <a href="" class="btn btn-primary">LEARN MORE</a>
                                    </div>

                                </div>
                            </div>
                            <div class="single_home_slider">
                                <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                    <h1>OUR COOKING SCHOOL FREE PSD TEMPLATE</h1>
                                    <p class="subtitle">graphicsdrawer.com</p>

                                    <div class="home_btn">
                                        <a href="" class="btn btn-primary">LEARN MORE</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="service" class="service">
        <div class="container">
            <div class="row">
                <div class="service_border_raund text-center"></div>
                <div class="main_service_area sections text-center">
                    <div class="head_title text-center">
                        <h2>what we do?</h2>
                        <div class="separator"></div>

                    </div>
                    <div class="col-sm-4">
                        <div class="single_service">
                            <div class="single_service_icon">
                                <img src="assets/images/service.png" alt="" />
                            </div>

                            <h3>HAMBURGERS</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In consectetur convallis nunc, at ullamcorper turpis gravida nec. 
                                Praesent eu ultrices nunc.</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="single_service">
                            <div class="single_service_icon">
                                <img src="assets/images/service2.png" alt="" />
                            </div>

                            <h3>muffins</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In consectetur convallis nunc, at ullamcorper turpis gravida nec. 
                                Praesent eu ultrices nunc.</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="single_service">
                            <div class="single_service_icon">
                                <img src="assets/images/service3.png" alt="" />
                            </div>

                            <h3>salt and pepper</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In consectetur convallis nunc, at ullamcorper turpis gravida nec. 
                                Praesent eu ultrices nunc.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section id="choose" class="choose greenbackground">
        <div class="container">
            <div class="row">
                <div class="main_choose_area sections text-center">
                    <div class="lesson_title">                      
                        <p>why choose cooking TEMPLATE?</p>
                    </div>
                    <div class="main_choose_content">
                        <div class="single_choose_content">
                            <div class="singel_choose_img">
                                <img src="assets/images/choose.png" alt="" />
                            </div>

                            <h2>BECAUSE WE HAVE SKILLS</h2>
                            <p>Suspendisse ac nulla eros. Vestibulum elementum placerat erat ac maximus. 
                                Aliquam quis nisi quis arcu dapibus ornare. Donec vel ex urna. Ut in odio ultricies 
                                mauris fringilla placerat commodo in augue. Integer at eros quam. Fusce ac lorem vehicula, 
                                rutrum velit pharetra, euismod nunc. Cum sociis natoque penatibus et magnis dis parturient
                                montes, nascetur ridiculus mus.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="main_mix_content text-center sections">
                    <div class="head_title">
                        <h2>OUR RECIPES</h2>
                    </div>
                    <div class="main_mix_menu">
                        <ul>
                            <li class="btn btn-primary filter" data-filter="all">FISH</li>
                            <li class="btn btn-primary filter" data-filter=".cat1">MEAT</li>
                            <li class="btn btn-primary filter" data-filter=".cat2">OLIVE OIL</li>
                            <li class="btn btn-primary filter" data-filter=".cat3">SPANISH</li>
                            <li class="btn btn-primary filter" data-filter=".cat4">TOP 10</li>
                        </ul>
                    </div>

                    <div id="mixcontent" class="mixcontent">
                        <div class="col-md-4 mix cat1 no-padding">
                            <div class="single_mixi_portfolio">
                                <img src="assets/images/pf1.jpg" alt="" />
                                <div class="mixi_portfolio_overlay">
                                    <div class="overflow_hover_text">
                                        <h2>INGREDIENTS</h2>
                                        <p>ARE IMPORTANT FOR COOKING ?</p>
                                        <a href=""><i class="lnr lnr-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mix cat2 no-padding">
                            <div class="single_mixi_portfolio">
                                <img src="assets/images/pf2.jpg" alt="" />
                                <div class="mixi_portfolio_overlay">
                                    <div class="overflow_hover_text">
                                        <h2>INGREDIENTS</h2>
                                        <p>ARE IMPORTANT FOR COOKING ?</p>
                                        <a href=""><i class="lnr lnr-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mix cat1 cat4 no-padding">
                            <div class="single_mixi_portfolio">
                                <img src="assets/images/pf3.jpg" alt="" />
                                <div class="mixi_portfolio_overlay">
                                    <div class="overflow_hover_text">
                                        <h2>INGREDIENTS</h2>
                                        <p>ARE IMPORTANT FOR COOKING ?</p>
                                        <a href=""><i class="lnr lnr-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mix cat3 cat4 no-padding">
                            <div class="single_mixi_portfolio">
                                <img src="assets/images/pf4.jpg" alt="" />
                                <div class="mixi_portfolio_overlay">
                                    <div class="overflow_hover_text">
                                        <h2>INGREDIENTS</h2>
                                        <p>ARE IMPORTANT FOR COOKING ?</p>
                                        <a href=""><i class="lnr lnr-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mix cat4 no-padding">
                            <div class="single_mixi_portfolio">
                                <img src="assets/images/pf5.jpg" alt="" />
                                <div class="mixi_portfolio_overlay">
                                    <div class="overflow_hover_text">
                                        <h2>INGREDIENTS</h2>
                                        <p>ARE IMPORTANT FOR COOKING ?</p>
                                        <a href=""><i class="lnr lnr-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mix cat1 cat2 no-padding">
                            <div class="single_mixi_portfolio">
                                <img src="assets/images/pf1.jpg" alt="" />
                                <div class="mixi_portfolio_overlay">
                                    <div class="overflow_hover_text">
                                        <h2>INGREDIENTS</h2>
                                        <p>ARE IMPORTANT FOR COOKING ?</p>
                                        <a href=""><i class="lnr lnr-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="portfolio_btn_area">
                            <a href="" class="btn btn-md">LOAD MORE</a>
                        </div>
                        <div class="gap"></div>
                    </div>
                </div>                     
            </div>
        </div>
    </section> <!-- End of portfolio two Section -->        






    <section id="newsletter" class="newsletter text-center">
        <div class="container">
            <div class="row">
                <div class="main_newsletter sections">
                    <div class="col-sm-12">
                        <div class="single_newsletter_head">
                            <h2>JOIN OUR NEWSLETTER</h2>
                            <p>Suspendisse ac nulla eros. Vestibulum elementum placerat erat ac maximus. 
                                Aliquam quis nisi quis arcu dapibus ornare. Donec vel ex urna. Ut in odio ultricies
                                mauris fringilla placerat commodo in augue. </p>
                        </div>

                        <div class="single_sewsletter_content">
                            <div class="row">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="first name" required="">
                                        <input type="submit" value="SUBSCRIBE" class="btn btn-primary"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="main_about sections">
                    <div class="head_title text-center">
                        <h2>WHAT ABOUT FRUITS?</h2>
                        <div class="separator"></div>
                    </div>

                    <div class="main_about_content_area">
                        <div class="single_about_left_img">
                            <img src="assets/images/ab.jpg" alt="" />
                        </div> 


                        <!-- bar 1 -->
                        <div class="col-sm-8 col-sm-offset-4">
                            <div class="single_about_right_content">
                                <div class="demo4">
                                    <div class="right_single_about_skill">
                                        <div class="right_about_top_cotent">
                                            <div class="right_about_top_img">
                                                <img src="assets/images/s_ab1.png" alt="" />
                                            </div>
                                            <div class="right_about_top_content">
                                                <h3>COOKCING BOOK</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In consectetur convallis nunc, 
                                                    at ullamcorper turpis gravida nec. Praesent eu ultrices nunc.</p>
                                            </div>
                                        </div>
                                        <div class="right_about_bottom_cotent">
                                            <!-- bar 1 -->
                                            <div class="progress-bar4" data-percentage="76%">
                                                <h4 class="progress-title-holder">
                                                    <span class="progress-number-wrapper">
                                                        <span class="progress-number-mark">
                                                            <span class="percent"></span>
                                                            <span class="down-arrow"></span>
                                                        </span>
                                                    </span>
                                                </h4>
                                                <div class="progress-content-outter">
                                                    <div class="progress-content"></div>
                                                </div>
                                            </div> 

                                        </div>
                                    </div>

                                    <div class="right_single_about_skill">
                                        <div class="right_about_top_cotent">
                                            <div class="right_about_top_img">
                                                <img src="assets/images/s_ab2.png" alt="" />
                                            </div>
                                            <div class="right_about_top_content">
                                                <h3>COOKCING BOOK</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In consectetur convallis nunc, 
                                                    at ullamcorper turpis gravida nec. Praesent eu ultrices nunc.</p>
                                            </div>
                                        </div>
                                        <div class="right_about_bottom_cotent">
                                            <!-- bar 2 -->
                                            <div class="progress-bar4" data-percentage="43%">
                                                <h4 class="progress-title-holder">
                                                    <span class="progress-number-wrapper">
                                                        <span class="progress-number-mark">
                                                            <span class="percent"></span>
                                                            <span class="down-arrow"></span>
                                                        </span>
                                                    </span>
                                                </h4>
                                                <div class="progress-content-outter">
                                                    <div class="progress-content"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="right_single_about_skill">
                                        <div class="right_about_top_cotent">
                                            <div class="right_about_top_img">
                                                <img src="assets/images/s_ab3.png" alt="" />
                                            </div>
                                            <div class="right_about_top_content">
                                                <h3>COOKCING BOOK</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In consectetur convallis nunc, 
                                                    at ullamcorper turpis gravida nec. Praesent eu ultrices nunc.</p>
                                            </div>
                                        </div>
                                        <div class="right_about_bottom_cotent">
                                            <!-- bar 3 -->
                                            <div class="progress-bar4" data-percentage="92%">
                                                <h4 class="progress-title-holder">
                                                    <span class="progress-number-wrapper">
                                                        <span class="progress-number-mark">
                                                            <span class="percent"></span>
                                                            <span class="down-arrow"></span>
                                                        </span>
                                                    </span>
                                                </h4>
                                                <div class="progress-content-outter">
                                                    <div class="progress-content"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>   

                        </div>
                    </div>
                </div>                    

            </div>
        </div>
    </section>


    <section id="blog" class="blog">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="main_blog_area text-center sections">
                        <div class="head_title">
                            <h2>LATEST FROM BLOG</h2>
                            <div class="separator"></div>
                            <p>Suspendisse ac nulla eros. Vestibulum elementum placerat erat ac maximus. 
                                Aliquam quis nisi quis arcu dapibus ornare. Donec vel ex urna. Ut in odio 
                                ultricies mauris fringilla placerat commodo in augue. </p>
                        </div>

                        <div class="main_blog_content">
                            <ul class="main_blog">
                                <li class="single_blog_content">

                                    <h4>READ THIS FIRST</h4>
                                    <h6><i class="fa fa-clock-o"></i> 4 day ago</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In consectetur convallis nunc.</p>

                                    <div class="separator3"></div>

                                    <p class="blog_love"><i class="fa fa-heart-o"></i> 12</p>

                                </li>
                                <li class="single_blog_content">
                                    <h4>READ THIS FIRST</h4>
                                    <h6><i class="fa fa-clock-o"></i> 4 day ago</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In consectetur convallis nunc.</p>

                                    <div class="separator3"></div>

                                    <p class="blog_love"><i class="fa fa-heart-o"></i> 12</p>
                                </li>
                                <li class="single_blog_content">
                                    <h4>READ THIS FIRST</h4>
                                    <h6><i class="fa fa-clock-o"></i> 4 day ago</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In consectetur convallis nunc.</p>

                                    <div class="separator3"></div>

                                    <p class="blog_love"><i class="fa fa-heart-o"></i> 12</p>
                                </li>
                                <li class="single_blog_content">
                                    <h4>READ THIS FIRST</h4>
                                    <h6><i class="fa fa-clock-o"></i> 4 day ago</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In consectetur convallis nunc.</p>

                                    <div class="separator3"></div>

                                    <p class="blog_love"><i class="fa fa-heart-o"></i> 12</p>
                                </li>
                                <li class="single_blog_content">
                                    <h4>READ THIS FIRST</h4>
                                    <h6><i class="fa fa-clock-o"></i> 4 day ago</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In consectetur convallis nunc.</p>

                                    <div class="separator3"></div>

                                    <p class="blog_love"><i class="fa fa-heart-o"></i> 12</p>
                                </li>
                                <li class="single_blog_content">
                                    <h4>READ THIS FIRST</h4>
                                    <h6><i class="fa fa-clock-o"></i> 4 day ago</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In consectetur convallis nunc.</p>

                                    <div class="separator3"></div>

                                    <p class="blog_love"><i class="fa fa-heart-o"></i> 12</p>
                                </li>
                            </ul>
                        </div>

                        <div class="blog_btn">
                            <a href="" class="btn btn-primary">VIEW ALL POSTS</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="testimonial" class="testimonial greenbackground">
        <div class="container">
            <div class="row">
                <div class="main_testimonial sections">
                    <div class="head_title text-center">
                        <p>PEOPLE IMPRESSIONS</p>

                    </div>
                    <div class="col-md-12" data-wow-delay="0.2s">
                        <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                            <!-- Bottom Carousel Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#quote-carousel" data-slide-to="0" class="active">
                                    <img class="img-responsive " src="assets/images/team1.jpg" alt="">

                                </li>
                                <li data-target="#quote-carousel" data-slide-to="1">
                                    <img class="img-responsive" src="assets/images/team1.jpg" alt="">

                                </li>
                                <li data-target="#quote-carousel" data-slide-to="2">
                                    <img class="img-responsive" src="assets/images/team1.jpg" alt="">

                                </li>
                                <li data-target="#quote-carousel" data-slide-to="3">
                                    <img class="img-responsive" src="assets/images/team1.jpg" alt="">

                                </li>
                            </ol>

                            <!-- Carousel Slides / Quotes -->
                            <div class="carousel-inner text-center">

                                <!-- Quote 1 -->
                                <div class="item active">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-8 col-sm-offset-2">
                                                <p class="impress">IMPRESSED ABOUT OUR THEME? </p>
                                                <div class="whiseparator"></div>
                                                <small>Someone famous</small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <!-- Quote 2 -->
                                <div class="item">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-8 col-sm-offset-2">
                                                <p class="impress">IMPRESSED ABOUT OUR THEME? </p>
                                                <div class="whiseparator"></div>
                                                <small>Someone famous</small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <!-- Quote 3 -->
                                <div class="item">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-8 col-sm-offset-2">
                                                <p class="impress">IMPRESSED ABOUT OUR THEME?</p>
                                                <div class="whiseparator"></div>
                                                <small>Someone famous</small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <!-- Quote 4 -->
                                <div class="item">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-8 col-sm-offset-2">
                                                <p class="impress">IMPRESSED ABOUT OUR THEME?</p>
                                                <div class="whiseparator"></div>
                                                <small>Someone famous</small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>

                            <!-- Carousel Buttons Next/Prev -->
                            <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
                            <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section id="counter" class="counter">
        <div class="container-fluid">
            <div class="row">
                <div class="main_counter sections">
                    <div class="single_left_counter_bg">
                        <div class="col-sm-12 col-xs-12">
                            <div class="single_counter_left">
                                <h2>OUR <br /> NUMBERS <br /> OF COOKING</h2>
                                <p>salt and pepper</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-7 col-xs-12">
                        <div class="single_counter_right_area text-center">
                            <div class="row">
                                <div class="col-sm-4 ">
                                    <div class="single_counter_right">
                                        <i class="fa fa-comments-o"></i>
                                        <h2 class="statistic-counter">423</h2>
                                        <p>COMMENTS</p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="single_counter_right">
                                        <i class="fa fa-life-ring"></i>
                                        <h2 class="statistic-counter">1,423</h2>
                                        <p>RECIPES</p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="single_counter_right">
                                        <i class="fa fa-heart-o"></i>
                                        <h2 class="statistic-counter">423</h2>
                                        <p>LOVERS</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection