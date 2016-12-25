<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Trivias';
$this->params['breadcrumbs'][] = $this->title;
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
$(document).ready(function()
{
    $("#show").click(function(){
       $('answer').toggle();
    });
});
</script>

<h1>Trivias</h1>
<p>listed below are 5 random trivias</p>
<ul>
<?php foreach ($trivia as $trivia): ?>

    <li>
        <strong><?= Html::encode("{$trivia->triv_q}") ?>:</strong>
		<br>
		<answer style="display:none"> -- &nbsp;<?=$trivia->triv_ans ?></answer>
		<br>
    <br>
    </li>
<?php endforeach; ?>

<button id="show">Show all answers</button>
</ul>
