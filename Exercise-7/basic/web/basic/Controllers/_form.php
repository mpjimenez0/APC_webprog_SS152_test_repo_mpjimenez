<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Trivias */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="trivias-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'triv_q')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'triv_ans')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
