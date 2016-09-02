<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\AboutUsImagesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'About Us Images';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="about-us-images-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create About Us Images', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'aboutus_image_id',
            'aboutus_article_id_fk',
            'aboutus_imagename',
            'aboutus_imageposition',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
