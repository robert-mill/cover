<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\AboutUsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$aboutUsData = New \frontend\models\AboutUs();
$aboutUsImageData = New \frontend\models\AboutUsImages();
$aboutUs = $aboutUsData::find()->where(['not', ['aboutus_title' => null]])->All();

$this->title = 'About us';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="about-us-index">

    <section id="about-us" class="about-us-item">
        <div class="container">
            <div class="center wow fadeInDown">

                <?php foreach ($aboutUs as $data):?>
                    <?php
                    $imageBlock = "";
                    $imagePosLeft = "";
                    $imagePosRight = "";
                    $aboutUsImages  = $aboutUsImageData::findAll(['aboutus_article_id_fk'=>$data->aboutus_id]);



                    ?>
                    <div class="row-fluid">
                    <div class="col-lg-12">
                            <h2><?=$data->aboutus_title?></h2>
                        <div class="row-fluid">

                        <div class="col-lg-12 ">
                            <?php

                            if(isset($aboutUsImages)):
                                $i=0;
                                foreach ($aboutUsImages as $abimg):
                                    if($i%2>0):
                                ?>
                                    <div class="col-lg-7 text-center"><?=nl2br( $data->aboutus_body)?></div><?= Html::img($abimg->aboutus_imagename,['class'=>'col-lg-4']);?>

                                    <?php else: ?>
                                       <?= Html::img($abimg->aboutus_imagename,['class'=>'col-lg-4']);?> <div class="col-lg-7 text-center"><?=nl2br( $data->aboutus_body)?></div>


                                <?php
                                    endif;
                                    $i++;
                                endforeach;
                            endif;
                            ?>
                            <p>
                        </div>
                        <div class="col-lg-12">


                        </div>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>

            </div>
        </div>
    </section>

</div>
