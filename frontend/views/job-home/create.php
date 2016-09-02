<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\JobHome */

$this->title = 'Create Job Home';
$this->params['breadcrumbs'][] = ['label' => 'Job Homes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="job-home-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
