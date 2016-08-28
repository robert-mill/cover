<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\AreaOfResidence */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="area-of-residence-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'area_of_residence')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
