<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AreaOfResidenceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Area Of Residences';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="area-of-residence-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Area Of Residence', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'area_of_residence_id',
            'area_of_residence',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
