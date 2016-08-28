<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\TeacherPostReg */

$this->title = $model->teacher_post_reg_id;
$this->params['breadcrumbs'][] = ['label' => 'Teacher Post Regs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teacher-post-reg-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->teacher_post_reg_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->teacher_post_reg_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'teacher_post_reg_id',
            'type_of_position',
            'nationality',
            'prefered_school_type',
            'Current_residence',
            'University_attended',
            'first_name',
            'last_name',
            'email:email',
            'phone',
            'start_from',
            'cv',
        ],
    ]) ?>

</div>
