<?php
use yii\helpers\BaseStringHelper;
use yii\helpers\Inflection;

/* @var $this yii\web\View */
$i=1;
$this->title = 'Nikoz Recruitment';
$homeData = new \frontend\models\Home();
$homeText = $homeData::findAll(['home_id' => 1]);

?>


<section id="main-slider" class="no-margin">
    <div class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#main-slider" data-slide-to="0" class="active"></li>
            <li data-target="#main-slider" data-slide-to="1"></li>
            <li data-target="#main-slider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active" style="background-image: url(images/slider/bg1.jpg)">
                <div class="container">
                    <div class="row slide-margin">
                        <div class="col-sm-6 page-nav-link">
                            <div class="carousel-content">
                                <?php $homeText = $homeData::findAll(['home_id' => 1]);?>
                                <h1 class="animation animated-item-1" ><?=$homeText[0]->home_title ?></h1>
                                <h2 class="animation animated-item-2">
                                    <?= BaseStringHelper::truncateWords(nl2br( $homeText[0]->home_body), 75, $suffix = '...') ?>
                                </h2>
                                <a class="btn-slide animation animated-item-3" href="?r=about-us">Read More</a>
                            </div>
                        </div>

                        <div class="col-sm-6 hidden-xs animation animated-item-4" style="border blue">
                            <div class="col-sm-6">
                                <div class="slider-img">
                                    <img src="images/slider/img1.png" class="img-responsive">
                                    <div class="page-nav-link"><h4>Currently under Construction</h4><p>For Information email: info@nikozrecruitment.com</p><p>Or call 00447517159460 </p></div>
                                </div>
                            </div>
                            <div class="col-sm-6 ">
                                <div class="slider-img">
                                    <div class="col-sm-6 page-nav-link">
                                        <a href="#" >Primary Education</a>
                                    </div>
                                    <div class="col-sm-6 page-nav-link">
                                        <a href="#" >Seconday Education</a>
                                    </div>
                                    <div class="col-sm-6 page-nav-link">
                                        <a href="#" >Further Education</a>
                                    </div>
                                    <div class="col-sm-6 page-nav-link">
                                        <a href="#" >SEN</a>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div><!--/.item-->

            <div class="item" style="background-image: url(images/slider/bg2.jpg)">
                <div class="container">
                    <div class="row slide-margin">
                        <div class="col-sm-6">
                            <div class="carousel-content">
                                <h1 class="animation animated-item-1">Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>
                                <h2 class="animation animated-item-2">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>
                                <a class="btn-slide animation animated-item-3" href="#">Read More</a>
                            </div>
                        </div>

                        <div class="col-sm-6 hidden-xs animation animated-item-4">
                            <div class="col-sm-6">
                                <div class="slider-img">
                                    <img src="images/slider/img2.png" class="img-responsive">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="slider-img"  style="border:2px outset; height: auto">
                                    <div class="col-sm-6">
                                        Register A Vacancy
                                    </div>
                                    <div class="col-sm-6">
                                        AWR Client Information
                                    </div>
                                    <div class="col-sm-6">
                                        Testimonials
                                    </div>
                                    <div class="col-sm-6">
                                        Security & Vetting
                                    </div>
                                    <div class="col-sm-6">
                                        Keeping Children safe
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div><!--/.item-->

            <div class="item" style="background-image: url(images/slider/bg3.jpg)">
                <div class="container">
                    <div class="row slide-margin">
                        <div class="col-sm-6">
                            <div class="carousel-content">
                                <h1 class="animation animated-item-1">Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>
                                <h2 class="animation animated-item-2">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>
                                <a class="btn-slide animation animated-item-3" href="#">Read More</a>
                            </div>
                        </div>
                        <div class="col-sm-6 hidden-xs animation animated-item-4">
                            <div class="col-sm-6">
                                <div class="slider-img">
                                    <img src="images/slider/img3.png" class="img-responsive">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="slider-img"  style="border:2px outset; height: auto">
                                    <div class="col-sm-6">
                                        Applicant Profiles
                                    </div>
                                    <div class="col-sm-6">
                                        Applicant Terms
                                    </div>
                                    <div class="col-sm-6">
                                        Client Terms
                                    </div>
                                    <div class="col-sm-6">
                                        Time Sheets
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.carousel-inner-->
    </div><!--/.carousel-->
    <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
        <i class="fa fa-chevron-left"></i>
    </a>
    <a class="next hidden-xs" href="#main-slider" data-slide="next">
        <i class="fa fa-chevron-right"></i>
    </a>
</section><!--/#main-slider-->





<section id="services" class="service-item">
    <div class="container">
        <div class="center wow fadeInDown">
            <h2>Our Service</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
        </div>

        <div class="row">

            <div class="col-sm-6 col-md-4">
                <div class="media services-wrap wow fadeInDown">
                    <div class="pull-left">
                        <img class="img-responsive" src="images/services/services1.png">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">SEO Marketing</h3>
                        <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="media services-wrap wow fadeInDown">
                    <div class="pull-left">
                        <img class="img-responsive" src="images/services/services2.png">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">SEO Marketing</h3>
                        <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="media services-wrap wow fadeInDown">
                    <div class="pull-left">
                        <img class="img-responsive" src="images/services/services3.png">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">SEO Marketing</h3>
                        <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="media services-wrap wow fadeInDown">
                    <div class="pull-left">
                        <img class="img-responsive" src="images/services/services4.png">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">SEO Marketing</h3>
                        <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="media services-wrap wow fadeInDown">
                    <div class="pull-left">
                        <img class="img-responsive" src="images/services/services5.png">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">SEO Marketing</h3>
                        <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="media services-wrap wow fadeInDown">
                    <div class="pull-left">
                        <img class="img-responsive" src="images/services/services6.png">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">SEO Marketing</h3>
                        <p>Lorem ipsum dolor sit ame consectetur adipisicing elit</p>
                    </div>
                </div>
            </div>
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#services-->







<section id="conatcat-info">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="media contact-info wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="pull-left">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="media-body">
                        <h2>Have a question or need a custom quote?</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation +0123 456 70 80</p>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/.container-->
</section><!--/#conatcat-info-->



<footer id="footer" class="midnight-blue">
    <div class="container">
        <div class="row">

            <div class="col-sm-6">
                <ul class="pull-right">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Faq</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer><!--/#footer-->
