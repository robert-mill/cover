<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TeacherConditions */

$this->title = 'Create Teacher Conditions';
$this->params['breadcrumbs'][] = ['label' => 'Teacher Conditions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teacher-conditions-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
