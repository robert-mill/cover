<?php

use frontend\models\TeacherConditions;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\TeacherConditionsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Teacher Conditions';
$this->params['breadcrumbs'][] = $this->title;
$teacher_condition_data = new TeacherConditions();
$teacher_condits = $teacher_condition_data::find()->where(['not', ['teacher_condition_title' => null]])->All();

?>
<div class="teacher-conditions-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <div class="container">
        <?php foreach ($teacher_condits as $tcs):?>
            <div class="row">
                <div class="col-lg-12">
                   <h1> <?=$tcs->teacher_condition_title;?></h1>
                </div>
                <div class="col-lg-12">
                    <p><?= nl2br($tcs->teacher_condition_body);?></p>
                </div>
            </div>
        <?php endforeach;?>

    </div>



</div>
