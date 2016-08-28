<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\TeacherPostRegSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="teacher-post-reg-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'teacher_post_reg_id') ?>

    <?= $form->field($model, 'type_of_position') ?>

    <?= $form->field($model, 'nationality') ?>

    <?= $form->field($model, 'prefered_school_type') ?>

    <?= $form->field($model, 'Current_residence') ?>

    <?php // echo $form->field($model, 'University_attended') ?>

    <?php // echo $form->field($model, 'first_name') ?>

    <?php // echo $form->field($model, 'last_name') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'start_from') ?>

    <?php // echo $form->field($model, 'cv') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
