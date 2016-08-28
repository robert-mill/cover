<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TeachingPositionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Teaching Positions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teaching-position-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Teaching Position', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'teaching_position_id',
            'teaching_position',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
