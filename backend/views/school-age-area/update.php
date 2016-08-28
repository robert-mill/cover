<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SchoolAgeArea */

$this->title = 'Update School Age Area: ' . $model->school_age_area;
$this->params['breadcrumbs'][] = ['label' => 'School Age Areas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->school_age_area, 'url' => ['view', 'id' => $model->school_age_area]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="school-age-area-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
