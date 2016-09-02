<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\TeacherConditions */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="teacher-conditions-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'teacher_condition_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'teacher_condition_body')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
