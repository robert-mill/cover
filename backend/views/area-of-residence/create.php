<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\AreaOfResidence */

$this->title = 'Create Area Of Residence';
$this->params['breadcrumbs'][] = ['label' => 'Area Of Residences', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="area-of-residence-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
