<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\UserAssignments $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="user-assignments-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'type')->textInput() ?>

    <?= $form->field($model, 'feature_id')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'build_id')->textInput() ?>

    <?= $form->field($model, 'deadline_ts')->textInput() ?>

    <?= $form->field($model, 'assigner_id')->textInput() ?>

    <?= $form->field($model, 'creation_ts')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
