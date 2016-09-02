<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SchoolConditions */

$this->title = 'Update School Conditions: ' . $model->school_condition_id;
$this->params['breadcrumbs'][] = ['label' => 'School Conditions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->school_condition_id, 'url' => ['view', 'id' => $model->school_condition_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="school-conditions-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
