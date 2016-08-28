<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\TeachingPosition */

$this->title = $model->teaching_position_id;
$this->params['breadcrumbs'][] = ['label' => 'Teaching Positions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teaching-position-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->teaching_position_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->teaching_position_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'teaching_position_id',
            'teaching_position',
        ],
    ]) ?>

</div>
