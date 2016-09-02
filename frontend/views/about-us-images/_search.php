<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\AboutUsImagesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="about-us-images-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'aboutus_image_id') ?>

    <?= $form->field($model, 'aboutus_article_id_fk') ?>

    <?= $form->field($model, 'aboutus_imagename') ?>

    <?= $form->field($model, 'aboutus_imageposition') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
