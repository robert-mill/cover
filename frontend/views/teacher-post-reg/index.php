<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model frontend\models\TeacherPostReg */
/* @var $searchModel frontend\models\TeacherPostRegSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Teacher Post Registration';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teacher-post-reg-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
