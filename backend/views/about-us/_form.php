<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\AboutUs */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="about-us-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'aboutus_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'aboutus_body')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <a href="?r=about-us-images%2Fcreate&id=<?=$model->aboutus_id?>"><?= Html::button( 'Add Image', ['class' =>  'btn btn-sucess']) ?></a>

    </div>

    <?php ActiveForm::end(); ?>

</div>
