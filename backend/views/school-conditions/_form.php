<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SchoolConditions */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="school-conditions-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'school_condition_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'school_condition_text')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
