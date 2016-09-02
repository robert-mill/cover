<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\JobHome */

$this->title = 'Update Job Home: ' . $model->job_home_id;
$this->params['breadcrumbs'][] = ['label' => 'Job Homes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->job_home_id, 'url' => ['view', 'id' => $model->job_home_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="job-home-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
