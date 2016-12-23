<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Trivias';
$this->params['breadcrumbs'][] = $this->title;
?>
<script>
$(document).ready(function()
{
    $("#show").click(function(){
       document.getElementById('answer').style.display='block';
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
		<p id="answer" style="display:none"><?=$trivia->triv_ans ?></p>
		<br></br>
    </li>
<?php endforeach; ?>
<button onclick="document.getElementById('answer').style.display='block'" id="show">Show all answer</button>
