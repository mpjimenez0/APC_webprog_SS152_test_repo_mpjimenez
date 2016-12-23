<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Trivias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
    <h2><b>Random Generated Trivias</b></h2>
    <p>
      <?php foreach ($trivia as $trivia): ?>

          <li>
              <strong><?= Html::encode("{$trivia->triv_q}") ?>:</strong>
      		<br></br>
      		<answers style=display:none><?= $trivia->triv_ans ?></answers>
      		<br></br>
          </li>
      <?php endforeach; ?>
      <button id="show">Show all answer</button>
    </p>

    <code><?= __FILE__ ?></code>
</div>
