<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\AreaOfResidence */

$this->title = 'Update Area Of Residence: ' . $model->area_of_residence_id;
$this->params['breadcrumbs'][] = ['label' => 'Area Of Residences', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->area_of_residence_id, 'url' => ['view', 'id' => $model->area_of_residence_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="area-of-residence-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
