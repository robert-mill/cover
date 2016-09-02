<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TeacherConditions */

$this->title = 'Update Teacher Conditions: ' . $model->teacher_condition_id;
$this->params['breadcrumbs'][] = ['label' => 'Teacher Conditions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->teacher_condition_id, 'url' => ['view', 'id' => $model->teacher_condition_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="teacher-conditions-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
