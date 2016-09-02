<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\SchoolConditions */

$this->title = 'Create School Conditions';
$this->params['breadcrumbs'][] = ['label' => 'School Conditions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="school-conditions-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
