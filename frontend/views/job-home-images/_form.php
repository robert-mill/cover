<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\JobHomeImages */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="job-home-images-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'job_home_fk')->textInput() ?>

    <?= $form->field($model, 'job_home_image')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
