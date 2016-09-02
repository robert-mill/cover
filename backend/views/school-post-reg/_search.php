<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SchoolPostRegSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="school-post-reg-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'school_post_reg_id') ?>

    <?= $form->field($model, 'sector') ?>

    <?= $form->field($model, 'contact_name') ?>

    <?= $form->field($model, 'school_name') ?>

    <?= $form->field($model, 'contact_phone') ?>

    <?php // echo $form->field($model, 'region') ?>

    <?php // echo $form->field($model, 'contact_email') ?>

    <?php // echo $form->field($model, 'summary') ?>

    <?php // echo $form->field($model, 'document') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
