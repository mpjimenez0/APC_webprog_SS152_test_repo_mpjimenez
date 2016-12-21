<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Trivias */

$this->title = 'Update Trivias: ' . $model->triv_num;
$this->params['breadcrumbs'][] = ['label' => 'Trivias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->triv_num, 'url' => ['view', 'id' => $model->triv_num]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="trivias-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
