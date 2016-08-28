<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Universities */

$this->title = 'Update Universities: ' . $model->university_id;
$this->params['breadcrumbs'][] = ['label' => 'Universities', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->university_id, 'url' => ['view', 'id' => $model->university_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="universities-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
