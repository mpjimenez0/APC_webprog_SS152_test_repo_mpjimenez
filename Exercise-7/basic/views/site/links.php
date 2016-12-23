<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'links';
$this->params['breadcrumbs'][] = $this->title;
?>

<script>
$(document).ready(function()
{
    $("#show").click(function(){
        $("answers").toggle(500);
    });
});
</script>

<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        ansaveh
    </p>
    <?php foreach ($trivia as $trivia): ?>

        <li>
            <strong><?= Html::encode("{$trivia->triv_q}") ?>:</strong>
    		<br></br>
    		<answers style=display:none><?= $trivia->triv_ans ?></answers>
    		<br></br>
        </li>
    <?php endforeach; ?>
    <button id="show">Show all answer</button>
</div>
