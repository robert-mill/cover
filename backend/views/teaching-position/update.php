<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TeachingPosition */

$this->title = 'Update Teaching Position: ' . $model->teaching_position_id;
$this->params['breadcrumbs'][] = ['label' => 'Teaching Positions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->teaching_position_id, 'url' => ['view', 'id' => $model->teaching_position_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="teaching-position-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
