<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\SchoolPostReg */

$this->title = 'Update School Post Reg: ' . $model->school_post_reg_id;
$this->params['breadcrumbs'][] = ['label' => 'School Post Regs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->school_post_reg_id, 'url' => ['view', 'id' => $model->school_post_reg_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="school-post-reg-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
