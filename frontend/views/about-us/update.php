<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\AboutUs */

$this->title = 'Update About Us: ' . $model->aboutus_id;
$this->params['breadcrumbs'][] = ['label' => 'About uses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->aboutus_id, 'url' => ['view', 'id' => $model->aboutus_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="about-us-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
