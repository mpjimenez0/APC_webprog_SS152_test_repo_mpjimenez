<html>
<style>
table {
  width: 100%;
  font-size: 25;
  padding-left: 70;
  padding-right: 70;
}
th{
  background:#FFD1DC;
}
td, th {
  border: 3px solid #000000;
  text-align: left;
  padding: 10px;
}
td{
  background-color: rgba(255,255,255,.5);
}
</style>
<body>
<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Hobbies';
$this->params['breadcrumbs'][] = $this->title;
?>
    <h1><?= Html::encode($this->title) ?></h1>
    <br>
    <div>
			<p id="just"> Even though our schedule is so jam-packed and busy, with quizzes almost every week and of course, we have to study to be prepared for any surprise quizzes, we stil need to give ourselves time to relax our minds, like 30 minute up to 1 hour breaks (in order to keep our sanity), and when those times come, these are what I do.</p>
				<table cellspacing="7" >
					<tr>
						<th style="font-size:38"><b>Hobby</b></th>
						<th style="font-size:38"><b>Description</b></th>
						<th style="font-size:38"><b>Link</b></th>
					</tr>
					<tr>
						<td><b>Watching Anime</b></td>
						<td>My Highschool classmates introduced "Anime" to me, Japanese Animation, in short, its Japanese Cartoons. I really like watching anime because I enjoy the flow of the series and I also get to learn japanese words at the same time-- 2 birds, 1 stone.</td>
						<td><a href="https://kissanime.to/" target="_blank"><b>KissAnime</b><a></td>
					</tr>
					<tr>
						<td><b>Reading Manga/Manhua</b></td>
						<td>I read manga beacause I can progress through a story faster than watching its anime version</td>
						<td><a href="http://mangafox.me/" target="_blank"><b>MangaFox</b></a>, <a href="http://www.mangareader.net/" target="_blank"><b>MangaReader</b></a></td>
					</tr>
					<tr>
						<td><b>Watching K-Dramas</b></td>
						<td>I've recently been hooked to K-dramas. Why? Because the plot is not cliche as compared to Filipino Telenovelas. Also, I admire the complexion of the koreans, even though they're 30+ years old, their skin is so flawless.</td>
						<td><a href="http://kissasian.com/" target="_blank"><b>KissAsian</b></a></td>
					</tr>
				</table>
		</div>
  </body>
</html>
