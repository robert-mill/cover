<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\AboutUsImages */
/* @var $form yii\widgets\ActiveForm */
$getId = Yii::$app->getRequest()->getQueryParam('id');
if(isset($getId) && $getId !==""){
    $setId = $getId;
}else {
    $setId =1;

}
?>
<div class="about-us-images-form">

    <?php $form = ActiveForm::begin(['options'=> ['enctype'=>'multipart/form-data']] ); ?>

    <?= $form->field($model, 'aboutus_article_id_fk')->textInput(['value'=>$setId]) ?>

    <?= $form->field($model, 'file')->fileInput()?>
    <?= $form->field($model, 'aboutus_imageposition')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>


        </div>

    <?php ActiveForm::end(); ?>

</div>
