<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\SchoolAgeArea */

$this->title = $model->school_age_area;
$this->params['breadcrumbs'][] = ['label' => 'School Age Areas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="school-age-area-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->school_age_area], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->school_age_area], [
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
            'school_age_area',
            'school_age',
        ],
    ]) ?>

</div>
