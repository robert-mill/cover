<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\SchoolPostReg */

$this->title = $model->school_post_reg_id;
$this->params['breadcrumbs'][] = ['label' => 'School Post Regs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="school-post-reg-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->school_post_reg_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->school_post_reg_id], [
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
            'school_post_reg_id',
            'sector',
            'contact_name',
            'school_name',
            'contact_phone',
            'region',
            'contact_email:email',
            'summary:ntext',
            'document',
        ],
    ]) ?>

</div>
