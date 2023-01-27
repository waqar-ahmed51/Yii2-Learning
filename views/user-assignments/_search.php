<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\UserAssignmentsSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="user-assignments-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'type') ?>

    <?= $form->field($model, 'feature_id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'build_id') ?>

    <?php // echo $form->field($model, 'deadline_ts') ?>

    <?php // echo $form->field($model, 'assigner_id') ?>

    <?php // echo $form->field($model, 'creation_ts') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
