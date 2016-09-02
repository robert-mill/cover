<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\JobHome */

$this->title = $model->job_home_id;
$this->params['breadcrumbs'][] = ['label' => 'Job Homes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="job-home-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->job_home_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->job_home_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'job_home_id',
            'job_home_title',
            'job_home_body:ntext',
        ],
    ]) ?>

</div>
