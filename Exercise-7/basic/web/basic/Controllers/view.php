<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Trivias */

$this->title = $model->triv_num;
$this->params['breadcrumbs'][] = ['label' => 'Trivias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trivias-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->triv_num], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->triv_num], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'triv_num',
            'triv_q',
            'triv_ans',
        ],
    ]) ?>

</div>
