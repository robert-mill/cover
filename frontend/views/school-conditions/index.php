<?php

use frontend\models\SchoolConditions;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\SchoolConditionsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'School Conditions';
$this->params['breadcrumbs'][] = $this->title;
$school_condition_data = new SchoolConditions();
$school_condits = $school_condition_data::find()->where(['not', ['school_condition_title' => null]])->All();


?>
<div class="school-conditions-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <div class="container">
        <?php foreach ($school_condits as $scs):?>
            <div class="row">
                <div class="col-lg-12">
                    <h1> <?=$scs->school_condition_title;?></h1>
                </div>
                <div class="col-lg-12">
                    <p><?= nl2br($scs->school_condition_text);?></p>
                </div>
            </div>
        <?php endforeach;?>

    </div>
</div>
