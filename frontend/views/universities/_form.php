<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Universities */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="universities-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'university_country')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'university_name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
