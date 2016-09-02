<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SchoolPostRegSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'School Post Regs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="school-post-reg-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create School Post Reg', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'school_post_reg_id',
            'sector',
            'contact_name',
            'school_name',
            'contact_phone',
            // 'region',
            // 'contact_email:email',
            // 'summary:ntext',
            // 'document',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
