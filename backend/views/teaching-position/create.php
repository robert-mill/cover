<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TeachingPosition */

$this->title = 'Create Teaching Position';
$this->params['breadcrumbs'][] = ['label' => 'Teaching Positions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teaching-position-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
