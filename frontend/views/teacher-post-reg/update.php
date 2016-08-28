<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\TeacherPostReg */

$this->title = 'Update Teacher Post Reg: ' . $model->teacher_post_reg_id;
$this->params['breadcrumbs'][] = ['label' => 'Teacher Post Regs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->teacher_post_reg_id, 'url' => ['view', 'id' => $model->teacher_post_reg_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="teacher-post-reg-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
