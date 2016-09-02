<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\JobHome */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="job-home-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'job_home_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'job_home_body')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
