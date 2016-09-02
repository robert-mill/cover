<?php

use app\components\EmailHandler;
use dosamigos\datepicker\DatePicker;
use frontend\models\AreaOfResidence;
use frontend\models\Nationality;
use frontend\models\SchoolAgeArea;
use frontend\models\TeachingPosition;
use frontend\models\Universities;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\TeacherPostReg */
/* @var $form yii\widgets\ActiveForm */

$nationalities = New \frontend\models\Nationality();
$nationalityData = $nationalities::findAll(['nationality_live' => 1]);
?>
<div class="row teacher-post-reg-form">
    <?php $form = ActiveForm::begin(['action' => ['teacher-post-reg/create'],'options' => ['enctype' => 'multipart/form-data'] ]); ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 form_object">
                <?= $form->field($model, 'type_of_position')->dropDownList( ArrayHelper::map( TeachingPosition::find()->all(), 'teaching_position_id', 'teaching_position'),['prompt' => 'Job Title'] ) ?>
            </div>
            <div class="col-sm-6 form_object">
                <?= $form->field($model, 'nationality')->dropDownList( ArrayHelper::map( Nationality::find()->all(), 'nationality_id', 'nationality'),['prompt' => 'Your Nationality'] ) ?>

            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 form_object">
                <?= $form->field($model, 'prefered_school_type')->dropDownList( ArrayHelper::map( SchoolAgeArea ::find()->all(), 'school_age_area', 'school_age'),['prompt' => 'School age group'] ) ?>
            </div>
            <div class="col-sm-6 form_object">
                <?= $form->field($model, 'Current_residence')->dropDownList( ArrayHelper::map( AreaOfResidence::find()->all(), 'area_of_residence_id', 'area_of_residence'),['prompt' => 'Where are you living?'] ) ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 form_object">
                <?= $form->field($model, 'University_attended')->dropDownList(
                    ArrayHelper::map( Universities::find()->asArray()->all(),
                        'university_id',
                        function($model, $defaultValue){
                            return $model['university_country'] . ' - ' . $model['university_name'];
                        }
                    ),
                    ['prompt' => 'University Attended'] )
                ?>
            </div>
            <div class="col-sm-6 form_object" >
                <?= $form->field($model, 'start_from')->widget(
                    DatePicker::className(),[
                        'inline' => false,
                        'clientOptions' => [
                            'autoclose' =>true,
                            'format' => 'yyyy-mm-dd'
                        ]
                    ]
                );?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 form_object">
                <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-sm-6 form_object">
                <?= $form->field($model, 'last_name')->textInput(['maxlength' => true])?>
                </div>
        </div>
        <div class="row">
            <div class="col-sm-6 form_object">
                <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-sm-6 form_object">
                <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 form_object">
                <?= $form->field($model, 'file')->fileInput() ?>
            </div>
            <div class="col-sm-6 form_object">
                <div class="form-group">
                    <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                </div>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
