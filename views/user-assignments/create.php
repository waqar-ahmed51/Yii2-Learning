<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\UserAssignments $model */

$this->title = 'Create User Assignments';
$this->params['breadcrumbs'][] = ['label' => 'User Assignments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-assignments-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
