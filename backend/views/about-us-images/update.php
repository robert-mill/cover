<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\AboutUsImages */

$this->title = 'Update About Us Images: ' . $model->aboutus_image_id;
$this->params['breadcrumbs'][] = ['label' => 'About Us Images', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->aboutus_image_id, 'url' => ['view', 'id' => $model->aboutus_image_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="about-us-images-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
