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
<p></p>
        <?php
			if (Yii::$app->user->isGuest) {

			} elseif(Yii::$app->user->identity->username) {
				echo Html::a('Edit a Trivia', ['trivias/index'], ['class' => 'btn btn-success']);
			}
			?>

<br></br>
<ul>
<?php foreach ($trivia as $trivia): ?>

    <li>
        <strong><?= Html::encode("{$trivia->triv_q}") ?>:</strong>
		<br></br>
		<answer style="display:none"><?=$trivia->triv_ans ?></answer>
		<br></br>
    </li>
<?php endforeach; ?>
<button id="show">Show all answer</button>
