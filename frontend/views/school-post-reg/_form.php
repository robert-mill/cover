<?php

use frontend\models\Lisofschools;
use frontend\models\Regions;
use frontend\models\SchoolAgeArea;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\SchoolPostReg */
/* @var $form yii\widgets\ActiveForm */



?>

<div class="school-post-reg-form">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?php $form = ActiveForm::begin(['action' => ['school-post-reg/create'],'options'=> ['enctype'=>'multipart/form-data']] ); ?>

    <?= $form->field($model,'sector')->dropDownList(ArrayHelper::map(SchoolAgeArea::find()->all(), 'school_age_area','school_age' ),['propmt'=>'school_age'])?>


    <?= $form->field($model, 'contact_name')->textInput(['maxlength' => true]) ?>











    <?= $form->field($model, 'contact_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model,'region')->dropDownList(ArrayHelper::map(Regions::find()->all(), 'region_id','region_name' ),['propmt'=>'school_age'])?>

    <?= $form->field($model, 'contact_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'summary')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'document')->fileInput() ?>
    <?php if (isset($model->document)):
        $savedDocP = explode("/",$model->document);
        $docName = explode("_spec",$savedDocP[1]);

    ?>
        <?= $form->field($model, 'document_original')->textInput(['value'=>$docName[1] ]) ?>
        Saved Document "<?=$docName[1] ?>"
    <?php endif;?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
