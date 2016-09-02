<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\JobHomeImages */

$this->title = 'Update Job Home Images: ' . $model->job_home_image_id;
$this->params['breadcrumbs'][] = ['label' => 'Job Home Images', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->job_home_image_id, 'url' => ['view', 'id' => $model->job_home_image_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="job-home-images-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
