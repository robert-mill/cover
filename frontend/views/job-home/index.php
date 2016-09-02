<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\JobHomeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Job Home';
$this->params['breadcrumbs'][] = $this->title;
$job_home_data = new \frontend\models\JobHome();
$jobHome = $job_home_data::find()->where(['not', ['job_home_title' => null]])->All();
$job_home_images = new \frontend\models\JobHomeImages();
$i=0;

?>
<div class="job-home-index">

    <h1><?= Html::encode($this->title) ?></h1>
   <div class="section">
       <div class="row job_zone_list">
           <ul class="col-lg-2 col-sm-6 col-md-4">
               <li><a href="?r=teacher-post-reg"> <i class="fa fa-graduation-cap fa-5x fa-lg" aria-hidden="true"></i><br>Teacher registration</a></li>
               <li><i class="fa fa fa-university fa-5x fa-lg" aria-hidden="true"></i><br>School registration</li>
               <li><a href="?r=school-post-reg"><i class="fa fa-search fa-5x fa-lg"></i><br>Register a post</a> </li>
               <li><i class="fa fa-globe fa-5x fa-lg"></i><br>Safety & Security</li>
               <li><i class="fa fa-info-circle fa-5x fa-lg"></i><br>Client Information</li>
           </ul>
           <div class="col-lg-10 col-sm-6 col-md-4">
               <?php
               foreach ($jobHome as $jobh):

                   $jobHomeImages  = $job_home_images::findAll(['job_home_fk'=>$jobh->job_home_id]);

               ?>
               <h3><?=$jobh->job_home_title?></h3>
               <?php if($i%2>0):?>
                    <?php if(isset($jobHomeImages) && $jobHomeImages !=""):?>
                       <div class="col-lg-7 text-center"><?=$jobh->job_home_body?></div><?= Html::img($jobh->job_home_image,['class'=>'col-lg-4']);?>
                   <?php else:?>
                       <div class="col-lg-12 text-center"><?=$jobh->job_home_body?></div>
                   <?php endif;?>

                <?php else:?>
                   <?php
                        if(isset($jobHomeImages) && $jobHomeImages !=""):
                        foreach ($jobHomeImages as $jhImg):
                    ?>

                       <?= Html::img($jhImg->job_home_image,['class'=>'col-lg-4']);?><div class="col-lg-7 text-center"><?=$jobh->job_home_body?></div>

                    <?php
                        endforeach;
                        else:?>
                       <div class="col-lg-12 text-center"><?=$jobh->job_home_body?></div>
                   <?php endif;?>
               <?php endif;?>
               <?php
                    $i++;
               endforeach;
               ?>
           </div>
       </div>
   </div>


</div>
