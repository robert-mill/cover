<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\SchoolPostReg */

$this->title = 'Create School Post Reg';
$this->params['breadcrumbs'][] = ['label' => 'School Post Regs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="school-post-reg-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
