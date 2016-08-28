<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SchoolAgeAreaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'School Age Areas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="school-age-area-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create School Age Area', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'school_age_area',
            'school_age',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
