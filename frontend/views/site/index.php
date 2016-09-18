<?php

use frontend\models\Front;
use frontend\models\Sections;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\FrontSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$i=1;
$this->title = 'Front';
$this->params['breadcrumbs'][] = $this->title;
$home = New Front();
$homeText = $home::find()->where(['not', ['home_title' => null]])->All();
$sections = New Sections();
$sectionText = $sections::find()->where(['not', ['section_title' => null]])->All();
?>
<div class="front-index">

    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <?php //foreach ($homeText as $hts): ?>
                <div class="item active" style="background-image: url(images/slider/bg1.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6 page-nav-link">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1" ><?php echo $homeText[0]->home_title ;?></h1>
                                    <h2 class="animation animated-item-2"><?php echo $homeText[0]->home_body;?></h2>
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
                                            <a href="#" ><i class="fa fa-child fa-5x"></i> <span class="iconframe">Primary Education</span></a>
                                        </div>
                                        <div class="col-sm-6 page-nav-link">
                                            <a href="#" ><i class="fa fa-male fa-2x"></i><span class="iconframe">Seconday Education</span><i class="fa fa-female fa-2x"></i></a>
                                        </div>
                                        <div class="col-sm-6 page-nav-link">
                                            <a href="#" ><i class="fa fa-graduation-cap fa-5x"></i><span class="iconframe">Further Education</span></a>
                                        </div>
                                        <div class="col-sm-6 page-nav-link">
                                            <a href="#" ><i class="fa fa-smile-o fa-5x"></i><span class="iconframe">SEN</span></a>
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
                            <div class="col-sm-6 page-nav-link">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1" ><?php echo $homeText[1]->home_title ;?></h1>
                                    <h2 class="animation animated-item-2"><?php echo $homeText[1]->home_body;?></h2>
                                    <a class="btn-slide animation animated-item-3" href="">Read More</a>
                                </div>
                            </div>
                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="col-sm-6">
                                    <div class="slider-img">
                                        <img src="images/slider/img2.png" class="img-responsive">
                                    </div>
                                </div>

                                <div class="col-sm-6 ">
                                    <div class="slider-img">
                                        <div class="col-sm-6 page-nav-link">
                                            <a href="#" ><i class="fa fa-registered fa-5x"></i> <span class="iconframe">Register A Vacancy</span></a>
                                        </div>
                                        <div class="col-sm-6 page-nav-link">
                                            <a href="#" ><i class="fa fa-info-circle fa-5x"></i><span class="iconframe">AWR Client Information</span></a>
                                        </div>
                                        <div class="col-sm-6 page-nav-link">
                                            <a href="#" ><i class="fa fa-thumbs-up fa-5x"></i><span class="iconframe">Testimonials</span></a>
                                        </div>
                                        <div class="col-sm-6 page-nav-link">
                                            <a href="#" ><i class="fa fa-shield fa-5x"></i><span class="iconframe">Security & Vetting</span></a>
                                        </div>
                                        <div class="col-sm-6 page-nav-link">
                                            <a href="#" ><i class="fa fa-life-ring fa-5x"></i><span class="iconframe">Keeping Children safe</span></a>
                                        </div>
                                        <div class="col-sm-6 page-nav-link">
                                            <a href="#" ><i class="fa fa-info-circle fa-5x"></i><span class="iconframe">Other Info</span></a>
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
                            <div class="col-sm-6 page-nav-link">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1" ><?php echo $homeText[2]->home_title ;?></h1>
                                    <h2 class="animation animated-item-2"><?php echo $homeText[2]->home_body;?></h2>
                                    <a class="btn-slide animation animated-item-3" href="">Read More</a>
                                </div>
                            </div>
                            <div class="col-sm-6 hidden-xs animation animated-item-4" style="border blue">
                                <div class="col-sm-6">
                                    <div class="slider-img">
                                        <img src="images/slider/img3.png" class="img-responsive">
                                        <div class="page-nav-link"><h4>Currently under Construction</h4><p>For Information email: info@nikozrecruitment.com</p><p>Or call 00447517159460 </p></div>
                                    </div>
                                </div>

                                <div class="col-sm-6 ">
                                    <div class="slider-img">
                                        <div class="col-sm-6 page-nav-link">
                                            <a href="#" ><i class="fa fa-info-circle fa-5x"></i> <span class="iconframe">Applicant Profiles</span></a>
                                        </div>
                                        <div class="col-sm-6 page-nav-link">
                                            <a href="#" ><i class="fa fa-thumbs-up fa-5x"></i><span class="iconframe">Applicant Terms</span></a>
                                        </div>
                                        <div class="col-sm-6 page-nav-link">
                                            <a href="#" ><i class="fa fa-thumbs-up fa-5x"></i><span class="iconframe">Client Terms</span></a>
                                        </div>
                                        <div class="col-sm-6 page-nav-link">
                                            <a href="#" ><i class="fa fa-clock-o fa-5x"></i><span class="iconframe">Time Sheets</span></a>
                                        </div>
                                    </div>

                                </div>




                            </div>
                        </div>
                    </div>
                </div><!--/.item-->

                <?php //endforeach;?>




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

            <p class="lead"></p>
        </div>

        <div class="row">
            <?php foreach ($sectionText as $secs):?>
                <div class="col-sm-6 col-md-4 section_box">
                    <div class="media services-wrap wow fadeInDown">

                        <a href="?r=<?=$secs->section_link?>" class="media-body">
                            <h3 class="media-heading"><i class="fa <?=$secs->fa_img?>"></i> <?=$secs->section_title?> </h3>
                            <p><?=$secs->section_body?></p>
                        </a>
                    </div>
                </div>


            <?php endforeach;?>

        </div><!--/.row-->
    </div><!--/.container-->
    </section><!--/#services-->



</div>
