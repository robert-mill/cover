<?php

use frontend\models\Regions;
use frontend\models\SchoolAgeArea;
use frontend\models\SchoolPostReg;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\SchoolPostRegSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'School Post Regs';
$this->params['breadcrumbs'][] = $this->title;
$model = new SchoolPostReg();


?>
<div class="school-post-reg-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?php $form = ActiveForm::begin(['action' => ['school-post-reg/create'],'options'=> ['enctype'=>'multipart/form-data']] ); ?>

     <div class="container">
        <div class="row">
            <div class="col-sm-6 form_object">
                <?= $form->field($model, 'contact_name')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-sm-6 form_object">
                <?= $form->field($model, 'school_name')->textInput(['maxlength' => true]) ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 form_object">
                <?= $form->field($model, 'contact_phone')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-sm-6 form_object">
                <?= $form->field($model, 'contact_email')->textInput(['maxlength' => true]) ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 form_object">
                <?= $form->field($model,'region')->dropDownList(ArrayHelper::map(Regions::find()->all(), 'region_id','region_name' ),['propmt'=>'school_age'])?>
            </div>
            <div class="col-sm-6 form_object">
                <?= $form->field($model, 'document')->fileInput() ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 form_object">
                <?= $form->field($model, 'summary')->textarea(['rows' => 6]) ?>
            </div>
            <div class="col-sm-6 form_object">
                <?= $form->field($model,'sector')->dropDownList(ArrayHelper::map(SchoolAgeArea::find()->all(), 'school_age_area','school_age' ),['propmt'=>'school_age'])?>


            </div>
            <div class="form-group">
                <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            </div>
        </div>


    </div>

















    <?php ActiveForm::end(); ?>

</div>
