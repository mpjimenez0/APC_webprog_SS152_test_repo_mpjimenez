<html>
<script>
.mySlides {
  display: block;
  margin: auto;
  padding: 10;
  border: 2px solid black;
}
div.transbox {
  background-color: rgba(255,255,255,.5);
  padding:5px;
}
</script>
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
      <center>
			<h2> from instagram </h2>
      </center>
			<div class="transbox" id="gallery">
				<p style="text-align:center">
					<a href="https://www.instagram.com/p/BKOMgV1h06x/?taken-by=_eydriyuhn" target="_blank">
						<img src="https://instagram.fmnl4-4.fna.fbcdn.net/t51.2885-15/e35/14280321_1234212163276797_1523550554_n.jpg?ig_cache_key=MTMzNzA2MTEzODQwMzY0MzA1Nw%3D%3D.2" height="250" width="250" style="width:400; height:400; padding:20; border: 2px solid black" alt="pagmamahal-ni-inay" class="insta">
					</a>
					<a href="https://www.instagram.com/p/BKTVp5yBxhN/?taken-by=_eydriyuhn" target="_blank">
						<img src="https://instagram.fmnl4-4.fna.fbcdn.net/t51.2885-15/e35/14295389_164637553978645_1613835973_n.jpg?ig_cache_key=MTMzODUwODc1Mjc3NzA1ODM4MQ%3D%3D.2"  height="250" width="250" style="width:400; height:400; padding:20; border: 2px solid black" alt="tulay" class="insta">
					</a>
					<a href="https://www.instagram.com/p/BKU8570hdLv/?taken-by=_eydriyuhn" target="_blank">
						<img src="https://instagram.fmnl4-4.fna.fbcdn.net/t51.2885-15/e35/14350400_333572740310605_2024852409_n.jpg?ig_cache_key=MTMzODk2Mj1MzI2ODY3MzI2Mw%3D%3D.2"  height="250" width="250" style="width:400; height:400; padding:20; border: 2px solid black" alt="lakbay" class="insta">
					</a>
					<a href="https://www.instagram.com/p/BKXKENZBurv/?taken-by=_eydriyuhn" target="_blank" >
						<img src="https://instagram.fmnl4-4.fna.fbcdn.net/t51.2885-15/s640x640/sh0.08/e35/c0.135.1080.1080/14373941_338848249784509_124719283_n.jpg?ig_cache_key=MTMzOTU4MzY4Mzg4NzU1NzM1OQ%3D%3D.2.c"  height="250" width="250" style="width:400; height:400; padding:20; border: 2px solid black" alt="alphonsus" class="insta">
					</a>
				</p>
			</div>
		</div>
    <br>
    <center>
		<h2> slideshow </h2>
		<div class="w3-content w3-section" style="max-width:500px">
			<img class="mySlides" src="<?php echo Yii::$app->request->baseUrl . "/img/banner.jpg";?>"  height="350" width="350">
			<img class="mySlides" src="<?php echo Yii::$app->request->baseUrl . "/img/ss.jpg";?>"  height="350" width="350">
			<img class="mySlides" src="<?php echo Yii::$app->request->baseUrl . "/img/ss1.jpg";?>"  height="350" width="350" >
			<img class="mySlides" src="<?php echo Yii::$app->request->baseUrl . "/img/pep.jpg";?>"  height="350" width="350">
			<img class="mySlides" src="<?php echo Yii::$app->request->baseUrl . "/img/tone.jpg";?>"  height="350" width="350">
			<img class="mySlides" src="<?php echo Yii::$app->request->baseUrl . "/img/seniors.jpg";?>"  height="350" width="350">
			<img class="mySlides" src="<?php echo Yii::$app->request->baseUrl . "/img/sfa.jpg";?>" height="350" width="350">
			<img class="mySlides" src="<?php echo Yii::$app->request->baseUrl . "/img/prom.jpg";?>" height="350" width="350" ">
		</div>
    <center>

		<script>
		var myIndex = 0;
		carousel();

		function carousel() {
			var i;
			var x = document.getElementsByClassName("mySlides");
			for (i = 0; i < x.length; i++) {
			   x[i].style.display = "none";
			}
			myIndex++;
			if (myIndex > x.length) {myIndex = 1}
			x[myIndex-1].style.display = "block";
			setTimeout(carousel, 1000); // Change image every 2 seconds
		}
		</script>

  </body>
</html>
