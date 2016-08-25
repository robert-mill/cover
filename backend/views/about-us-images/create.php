<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\AboutUsImages */

$this->title = 'Create About Us Images';
$this->params['breadcrumbs'][] = ['label' => 'About Us Images', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="about-us-images-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
