<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Trivias */

$this->title = 'Create Trivias';
$this->params['breadcrumbs'][] = ['label' => 'Trivias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trivias-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
