<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\SchoolAgeArea */

$this->title = 'Create School Age Area';
$this->params['breadcrumbs'][] = ['label' => 'School Age Areas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="school-age-area-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
