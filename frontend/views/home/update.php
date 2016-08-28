<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Home */

$this->title = 'Update Home: ' . $model->home_id;
$this->params['breadcrumbs'][] = ['label' => 'Homes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->home_id, 'url' => ['view', 'id' => $model->home_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="home-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>