<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\UserAssignments $model */

$this->title = 'Update User Assignments: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'User Assignments', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-assignments-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
