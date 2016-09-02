<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\AboutUsImages */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="about-us-images-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'aboutus_article_id_fk')->textInput() ?>

    <?= $form->field($model, 'aboutus_imagename')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'file')->fileInput() ?>
    <?= $form->field($model, 'aboutus_imageposition')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
