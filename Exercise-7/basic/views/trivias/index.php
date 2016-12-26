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
  function reload() {
      location.reload();
  }
</script>

<h1>Trivias</h1>
<p style="font-size:1.5em">listed below are 5 random trivias</p>
<ul>
  <?php foreach ($trivia as $trivia): ?>
      <li style="font-size:1.2em">
          <strong><?= Html::encode("{$trivia->triv_q}") ?>:</strong>
  		    <br>
  		    <answer style="display:none"> -- &nbsp;<?=$trivia->triv_ans ?></answer>
  		    <br>
          <br>
      </li>
  <?php endforeach; ?>
  <button id="show">Show all answers</button> <br><br>
  <button onclick="reload()">RANDOMIZE !</button>
</ul>
