<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\TeacherPostReg */

$this->title = 'Create Teacher Post Reg';
$this->params['breadcrumbs'][] = ['label' => 'Teacher Post Regs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teacher-post-reg-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
