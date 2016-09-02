<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\JobHomeImagesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Job Home Images';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="job-home-images-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Job Home Images', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'job_home_image_id',
            'job_home_fk',
            'job_home_image',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
