<?php

use anmaslov\autocomplete\AutoComplete;
use frontend\models\Lisofschools;
use frontend\models\Regions;
use frontend\models\SchoolAgeArea;
use frontend\models\SchoolPostReg;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;

use yii\web\JsExpression;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\SchoolPostRegSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'School Post Regs';
$this->params['breadcrumbs'][] = $this->title;
$model = new SchoolPostReg();
$lmodel = new Lisofschools();


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
<style>
    input{
        color: #000;
    }
</style>
                <?php
                   /* $form->field($model, 'school_name')->widget(Select2::classname(), [
                        'data' => ArrayHelper::map( Lisofschools::find()->all(), 'listofschools-id', 'school_name'),
                        'language' => 'en',
                        'options' => ['placeholder' => 'School search'],
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                ]);*/
                $data = Lisofschools::find()
                    ->select(['school_name as value','listofschools-id as id'])
                    ->asArray()
                    ->all();
                echo 'School' .'<br>';
                echo AutoComplete::widget([
                    'name' => 'schools',
                    'data' =>  $data,
                    'id' => 'listOfSchools',
                    'clientOptions' => [
                        'minChars' => 5,
                    ],
                ]);
                  echo '<br>';
                ?>


            </div>
        </div>
         <div class="row">
             <div class="col-sm-6 form_object">
                 <?= $form->field($lmodel, 'address')->textInput(['maxlength' => true]) ?>
             </div>
             <div class="col-sm-6 form_object">
                 <?= $form->field($lmodel, 'postcode')->textInput(['maxlength' => true]) ?>
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
<?php
$script = <<< JS

$(function(){
   $("#lisofschools-address").on("click", function(){
       var schoolName = $("#listOfSchools").val();
       if(schoolName.length > 4){
            $.get('index.php?r=listofschools/get-address', {schoolname:schoolName}, function(datas){
                var datass = $.parseJSON(datas);
                alert(datass.school_phase_of_ed);
                var addresstxt = datass.address.trim().replace(/,/g,"") + ", " + datass.town.replace(/,/g,"") + ", " + datass.county.replace(/,/g,"");
                
                $("#lisofschools-address").val(addresstxt);
                $("#lisofschools-postcode").val(datass.postcode);
                $("#schoolpostreg-sector option").html(datass.school_phase_of_ed);
            });  
       }
   });
})
   
JS;
$this->registerJs($script)
?>

















    <?php ActiveForm::end(); ?>

</div>
